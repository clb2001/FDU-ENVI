<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$days = array("Mon","Tue","Wed","Thu","Fri");

		for ($i=0; $i<count($days); $i++) {
			echo $days[$i] . "<br>";
		}

		$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 52, "Thu" => 40, "Fri" => 37);

		// foreach: iterating through the values
		foreach ($forecast as $value) {
			echo $value . "<br>";
		}

		// foreach: iterating through the values AND the keys
		foreach ($forecast as $key => $value) {
			echo "day" . $key . "=" . $value . "<br>";
		}

		print_r($forecast);

	?>
  </body>
</html>
