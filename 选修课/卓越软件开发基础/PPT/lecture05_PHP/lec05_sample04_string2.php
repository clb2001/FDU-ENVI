<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		$name = "zdl";
		
		$foo = <<< EOD
		This is "$name". I'm printing some string.
EOD;

		//This is "zdl". I'm printing some string.
		echo $foo;
		echo "<br>";
		
		$bar = <<< 'BAR'
		This is "$name". I'm printing some string.
BAR;
		
		//This is "$name". I'm printing some string.
		echo $bar;
	?>
  </body>
</html>
