<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		printf('%.2f', 27.452);
		echo "<br>";
		printf('The hex value of %d is %x', 214, 214);
		echo "<br>";
		printf('Bond. James Bond. %03d.', 7);
		echo "<br>";
		$year=2005;$month=2;$day=15;
		printf('%02d/%02d/%04d', $month, $day, $year);
		echo "<br>";
		printf('%.2f%% Complete', 2.1);
		echo "<br>";
		printf('You\'ve spent $%5.2f so far', 4.1);


	?>
  </body>
</html>
