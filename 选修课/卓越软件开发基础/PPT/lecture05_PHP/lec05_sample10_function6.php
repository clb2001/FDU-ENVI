<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		function changeParameter($arg) {
			 $arg += 300;
			 echo "<br/>arg=" . $arg;
		}

		$initial = 15;
		echo "<br/>initial=" . $initial; // output: initial=15
		changeParameter($initial); 	 // output: arg=315
		echo "<br/>initial=" . $initial; // output: initial=15

		///////////////////////////////////////////////////////

		function changeParameter1(&$arg) {
			 $arg += 300;
			 echo "<br/>arg=". $arg;
		}

		$initial = 15;
		echo "<br/>initial=" . $initial; // output: initial=15
		changeParameter1($initial); 	 // output: arg=315
		echo "<br/>initial=" . $initial; // output: initial=315
	
	?>
  </body>
</html>
