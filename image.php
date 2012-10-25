<?php include_once("header.php");

//Kolla bildens namn och hämta från det all relevant bilddata
$imageName = $_GET['name'];

$sql = "SELECT * FROM images WHERE imageName = '$imageName'";
$res = mysqli_query($db, $sql);

	while ($row = mysqli_fetch_assoc($res))
		{
			$imageID = $row['imageID'];
			$imageName = $row['imageName'];
			$imageSrc = $row['imageSrc'];
			$thumbSrc = $row['thumbSrc'];
			$description = $row['description'];
			$uploadDate = $row['uploadDate'];
			$user = $row['user'];
			$ratingSum = $row['ratingSum'];
			$ratingAmount = $row['ratingSum'];
?>
<div class="container">
	<div class="row">
		<div class="eightcol">
			<img src="<?php echo $imageSrc ?>" alt="<?php echo $imageName ?>">
		</div>
		<div class="fourcol last">
			<?php echo "<h1> $imageName </h1>" ?>
			<?php echo "<p> $description </p>" ?>
			<?php } ?>
			
			<form action="" method="">
				<input type="hidden" name="imageID" value="<?php $imageID ?>">
			</form>
		</div>
	</div> <!-- /row -->
</div> <!-- /container -->

<?php include_once("footer.php") ?>
