<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		if( !isset($_POST['Username']) ){
			if ( !isset($_COOKIE['Username']) ){
	?>
				<h1>Please Log in:</h1>
				<form method="post" action="http://localhost:8081/zdl/lec05_sample21_Cookie1.php" id="form1" name="form1">
					Name: <input type="text" id="text1" name="Username" value="[Name]"><br>
					Password: <input type="password" id="text2" name="password" value="[Password]" ><br>
					<input type="submit" value="Submit">
				</form>
	<?php	}
			else{
				echo "Welcome " . $_COOKIE['Username'];
			}
		}else{
			$expiryTime = time()+60*60*24;

			// create a persistent cookie
			$name = "Username";
			$value = $_POST['Username'];
			setcookie($name, $value, $expiryTime);

			echo "Welcome " . $value;
		}

	?>
  </body>
</html>
