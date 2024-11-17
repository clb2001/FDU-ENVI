<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$name = $_POST['name'];
		$password = $_POST['password'];

		if($name == $password) 
			echo 'Success!';
		else
			echo 'Fail!';

	?>
  </body>
</html>
