<?php 
session_start();

if( !isset($_SESSION['username'])){
	header('Location: index.php'); 
}

include_once("header.php"); ?>

<?php
//function createGallery()
//{
global $db;
	$sql = "SELECT imageName, thumbSrc from images";
	$res = mysqli_query($db, $sql);
	
	echo"<div class='container'><div class='row gallery'>";
	
	while ($row = mysqli_fetch_assoc($res))
		{
			//Sätt värdena i variabler så det blir lättare att läsa
			$imageName = $row['imageName'];
			$thumbSrc = $row['thumbSrc'];

			//Skriv ut varje tumnagel med rätt class, tumnagel och länk
			echo "<a class='twocol galleryitem' href='image.php?name=$imageName'><img src='$thumbSrc'></a>";

		}
	echo "	</div> <!-- /row -->
</div> <!-- /container -->";
	
	
//}//end function
?>

<?php include_once("footer.php")?>
