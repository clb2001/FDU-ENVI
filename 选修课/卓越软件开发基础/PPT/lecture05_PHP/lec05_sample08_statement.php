<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$a = 6;

		if ($a == 5):   
			echo "a equals 5";    
			echo "...";
		elseif ($a == 6):    
			echo "a equals 6";    
			echo "!!!";
		else:    
			echo "a is neither 5 nor 6";
		endif;
		
	?>
  </body>
</html>
