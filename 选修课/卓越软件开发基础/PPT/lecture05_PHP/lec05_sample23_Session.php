<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		session_start();

		if( !isset($_POST['Username']) ){
			if ( !isset($_SESSION['Username']) ){
	?>

				<h1>Please Log in:</h1>
				<form method="post" action="http://localhost:8080/zdl/lec05_sample23_Session.php" id="form1" name="form1">
					Name: <input type="text" id="text1" name="Username" value="[Name]"><br>
					Password: <input type="password" id="text2" name="password" value="[Password]" ><br>
					<input type="submit" value="Submit">
				</form>

	<?php	}
			else{
					echo "Welcome " . $_SESSION['Username'];
		
			}
		}else{
			
			$value = $_SESSION['Username'] = $_POST['Username'];

			echo "Welcome " . $value;
		}
	?>
  </body>
</html>
