<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$name = $_GET['name'];
		$password = $_GET['password'];

		if($name == $password) 
			echo 'Success!';
		else
			echo 'Fail!';

	?>
  </body>
</html>
