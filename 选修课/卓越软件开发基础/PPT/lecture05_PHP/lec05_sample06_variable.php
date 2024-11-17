<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		$foo = "test";
		$bar = & $foo;

		//test
		echo $bar;
		echo "<br>";
				
		$var = "hello";
		$$var = "world!";

		//hello world!
		echo "$var $hello";
	?>
  </body>
</html>
