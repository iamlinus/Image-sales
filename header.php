<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
<meta http-equiv="X-UA-Compatible" content="IE=7" />

<!-- Inga robotar, tack -->
<meta name='robots' content='noindex,nofollow' />

<!-- Sätt sidtitel -->
<title>Apelöga levererar. Det gör vi verkligen!</title>

<!-- 1140px Grid styles for IE -->
<!--[if lte IE 9]><link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" /><![endif]-->

<!-- The 1140px Grid - http://cssgrid.net/ -->
<link rel="stylesheet" href="css/1140.css" type="text/css" media="screen" />

<!-- Your styles -->
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen" />

<!--css3-mediaqueries-js - http://code.google.com/p/css3-mediaqueries-js/ - Enables media queries in some unsupported browsers-->
<script type="text/javascript" src="js/css3-mediaqueries.js"></script>

<!-- Favicon -->
<link rel="shortcut icon" href="/wp-content/themes/apeloga/images/favicon.ico" />
<link rel="apple-touch-icon" href="/wp-content/themes/apeloga/images/favicon.png" />

<!-- Amatic-font -->
<link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css' />


<?php
	include_once("includes/conn.php");

	$db = mysqli_connect(
				$hostname, //db
				$username, //username
				$password, //password
				$database //dbname
				);
			
		if (mysqli_connect_errno() )
			{
				echo "Haha oj, nu blev det fel. Verkar som att följande hände" . mysqli_connect_errno() ;
			}
			
	include_once("includes/functions.php")
?>

</head>

<body>
<div id="wrapper">
	<div id="header">
		<a href="/" title="Gå till startsidan!"><h1>Apelöga Levererar</h1></a>
		<ul class="menu">
			<li><a href="/">Hem</a></li>
			<li><a href="/gallery.php">Galleri</a></li>
			<li><a href="/upload.php">Ladda upp</a></li>
			<li><a href="/destroy_session.php">Logga ut</a></li>
		</ul>
	</div> <!-- header slutar här -->
