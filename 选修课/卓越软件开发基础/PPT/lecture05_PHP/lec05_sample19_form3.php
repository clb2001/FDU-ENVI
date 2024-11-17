<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		echo "You submitted " . count($_POST['day']) . " values<br>";
		foreach ($_POST['day'] as $d) 
			echo $d . ", ";

	?>
  </body>
</html>