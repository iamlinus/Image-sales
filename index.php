<?php session_start() ?>

<?php include_once("header.php") ?>

<div class="container">
	<div class="row">
		<div class="twelvecol" style="background:'url(images/topslide.jpg) no-repeat 0 0 transparent'">
		</div>
	</div>
	<div class="row">
		<div class="onecol"></div>
		<div class="sixcol">
			<h2>Apelöga levererar</h2>
			<p>Apelöga levererar. Det gör vi verkligen. För att underlätta för dig som köpare och för oss har vi byggt denna fina portal. Här kan du som kund se alla bilder vi tagit åt er. Logga in eller skapa ett konto nedan för att få tillgång. Just nu befinner vi oss i en <strong>beta</strong> så det kan finnas lite quirks längs vägen &#8211; stöter du på patrull så säg gärna till.</p>
			<p><strong>Har du några frågor?</strong> Tveka inte att kontakta oss!</p>
			<p><img class="alignleft size-medium wp-image-112" title="Apelöga levererar" src="http://apelogalevererar.se/wp-content/uploads/apelogalev-640x266.jpg" alt="Apelöga levererar" width="640" height="266" /></p>
		</div>
		<div class="onecol"></div>
		<div class="fourcol last">	
	    	<form name="loginform" action="index.php" method="post" autocomplete="off">
				<input title="Användarnamn" type="text" name="username" />
				<input title="Lösenord" type="password" name="password" />
				<input type="submit" value="Logga in" />
				<input type="hidden" name="redirect_to" value="gallery.php" />
	        </form> 


	    <?php

			if (isset($_POST['password']))
			{
				global $db;
				$username = safeInsert($_POST['username']);
				$password= $_POST['password'];

				if (!empty($username)&&!empty($password)) {

					$sql = "SELECT username, password from users WHERE username = '$username' LIMIT 1";
					echo $sql;
					$res = mysqli_query($db, $sql);
					$row = mysqli_fetch_assoc($res);

					if ($sql != 0 ) {
						echo "Fungerade inte";
					}

					elseif ($password == $row['password'] )
					{
						echo "korrekt!";
						$_SESSION['username']= $username;
							
					} else {
						echo "Ikke korrekt!";	
						die();
					}
				} else {
					echo "Du måste mata in alla fält";
				}
			}
		?>



	        <div class="register">
	        	<h3><strong>Är du ny</strong>? Registrera dig här!</h3>
	    		<form action="index.php" method="post" autocomplete="off">
	                <input title="Välj användarnamn" type="text" name="regUsername" />
	                <input title="E-post" type="text" name="email" />

	                <input title="Lösenord" type="password" name="pass1" />
	                <input title="Lösenord igen" type="password" name="pass2" />
	                <input type="submit" name="register" value="Registrera" />
	            </form>

	            <?php
				//Skapa ny användare om den inte redan finns
				if (isset($_POST['email'])&&isset($_POST['pass2'])&&isset($_POST['regUsername']))
				{
					
					$regUsername = safeInsert( $_POST['regUsername'] );
					$regEmail = safeInsert( $_POST['email'] );
					$regPassword = safeInsert( $_POST['pass2'] );

					if (!empty($regUsername)&&!empty($regEmail)&&!empty($regPassword))
					{
						$insertSQL = "INSERT INTO users (username, email, password) VALUE ('$regUsername', '$regEmail', '$regPassword')";
	
						//echo $insertSQL;
						mysqli_query($db, $insertSQL);
						echo "<p>Ditt konto är skapat. Du kan nu logga in på sidan.</p>";
					}
				else
				{
					echo "Vänligen fyll i alla fält";
				}
			}

			?>

	            <?php //Glöm ej lägga till validering ?>

	        </div>
	    </div> <!-- /fourcol last -->
	</div> <!-- /row -->
</div> <!-- /container -->

<?php include_once("footer.php") ?>
