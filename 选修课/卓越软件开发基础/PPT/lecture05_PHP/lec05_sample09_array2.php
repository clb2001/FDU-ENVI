<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 37, "Thu" => 41, "Fri" => 52);

		//按值排序，会修改键为数字
		sort($forecast);
		print_r($forecast);
		echo "<br>";

		$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 37, "Thu" => 41, "Fri" => 52);

		//按值排序，不修改键
		asort($forecast);
		print_r($forecast);
		echo "<br>";

		$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 37, "Thu" => 41, "Fri" => 52);

		//按键排序
		ksort($forecast);
		print_r($forecast);
	?>
  </body>
</html>
