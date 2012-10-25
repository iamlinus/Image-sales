<?php 
session_start();

if( !isset($_SESSION['username'])){
	header('Location: index.php'); 
}

include_once("header.php");

?>


<div class="container">
	<div class="row gallery">
		<a class="twocol galleryitem" href="image.php" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>
		<a class="twocol galleryitem" href="images/linus.jpg" style="background: url('/images/thumbs/linus.jpg') no-repeat scroll 0 0 transparent"></a>	
	</div> <!-- /row -->
</div> <!-- /container -->

<?php include_once("footer.php")?>
