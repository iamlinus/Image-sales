<?php 

session_start();

if( !isset($_SESSION['username'])){
	header('Location: index.php'); 
}

include_once("header.php") ?>

<div class="container">
	<div class="row">
		<div class="threecol"></div>
		<div class="sixcol">
			<form action="" method="POST" name="upload" enctype="multipart/form-data">
				Välj fil: <br><input type="file" name="file"><br>
				Bildnamn: <br><input type="text" name="name"><br>
				Bildbeskrivning:<br><textarea name="description"></textarea><br>
				<br>
				<input type="submit" value="Ladda upp">

			</form>
		</div>
		<div class="threecol"></div>
	</div> <!-- /row -->
</div> <!-- /container -->

<?php include_once("footer.php") ?>


<?php
//Lägg filen på rätt plats
	if ( isset( $_FILES['file'] ) && isset( $_POST['name'] ) && isset( $_POST['description'] ) ) {
	
		//Hämta temp-filen och flytta den till uploads-mappen
		$tempimg = $_FILES['file']['tmp_name'];
		$img = "uploads/" . $_FILES['file']['name'];

		//Flytta filen från tempimg till img
		move_uploaded_file( $tempimg, $img );


	//Skapa tumnagel

		//Detta är min bild. Sökväg i förhållande till php filen
		$srcImage = imagecreatefromjpeg($img);

		//Här kollas bildens bredd och höjd och sätts i variabler
		$srcWidth = imagesx($srcImage);
		$srcHeight = imagesy($srcImage);

		//Räkna ut bredden på tumnageln genom att räkna ut förhållande mellan bredd och höjd och multiplicera med satt höjd. 
		//Ceil avrundar till heltal uppåt.
		//echo $dstWidth;
		$dstWidth = ceil( ($srcWidth / $srcHeight) * 150);

		//Här bestäms den nya bildens storlek
		$thumb = imagecreatetruecolor ($dstWidth, 150);

		//Här kopieras den stora bilden in i den lilla
		//imagecopyresampled ( resource $dst_image , resource $src_image , int $dst_x , int $dst_y , int $src_x , int $src_y , int $dst_w , int $dst_h , int $src_w , int $src_h )
		imagecopyresampled ($thumb, $srcImage, 0, 0, 0, 0, $dstWidth, 150, $srcWidth, $srcHeight);

		//Skapa en jpg av variabeln thumb, döp till tumnagel och välj kvaliten 80
		$thumbSrc = "thumbs/" . $_FILES['file']['name'];
		imagejpeg($thumb, $thumbSrc , 80);

		//Ta bort bilderna från serverns minne
		imagedestroy($thumb);
		imagedestroy($srcImage);



	//Ladda upp allt i databasen
		$imageSrc = $img;
		$imageName = safeInsert( $_POST['name'] );
		$description = safeInsert( $_POST['description'] );
		$username = $_SESSION['username'];

		// Om det finns innehåll i POST ska vi skriva till DB
		if ( !empty( $_POST['name'] ) && !empty( $_POST['description'] ) ) {
			$insertSQL = "INSERT INTO images (imageName, imageSrc, thumbSrc, description, uploadDate, user) VALUE ('$imageName', '$imageSrc', '$thumbSrc', '$description', NOW(), '$username')";

			//echo $insertSQL;
			mysqli_query($db, $insertSQL);
			echo "<p>Du har laddat upp en fil </p>";
		
		//Om det inte finns data i POST säger vi fy fy
		} else {
			echo "<p>Fy fy! Du måste fylla i alla fält</p>";
		}
	}
?>



