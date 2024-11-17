<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$temp = "test";
		
		function test() {
			$temp = $GLOBALS['temp'];
			$GLOBALS['temp'] = "change";
			echo $temp;
		}
		
		test();
		echo "<br>";
		echo $GLOBALS['temp'];

	?>
  </body>
</html>
