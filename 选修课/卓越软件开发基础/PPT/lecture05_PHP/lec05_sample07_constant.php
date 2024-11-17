<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		define("CONSTANT", "Hello World");

		//Hello World
		echo CONSTANT; 
		echo "<br>";
		//Warning: Use of undefined constant Constant - assumed 'Constant' (this will throw an Error in a future version of PHP) in C:\xampp\htdocs\zdl\lec05_sample07_constant.php on line 13
		//Constant
		echo Constant; 
		echo "<br>";

		const CONSTANT2 = 'Hello World2';
		//Hello World2
		echo CONSTANT2; 
		
	?>
  </body>
</html>
