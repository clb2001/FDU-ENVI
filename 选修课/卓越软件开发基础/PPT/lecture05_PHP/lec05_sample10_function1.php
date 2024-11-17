<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		function factorial($x){
			if($x<=1) return 1; 
			return $x*factorial($x-1); 
		}

		echo factorial(5); 

	?>
  </body>
</html>
