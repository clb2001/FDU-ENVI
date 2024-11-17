<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$month = array
		  (
			array("Mon","Tue","Wed","Thu","Fri"),
			array("Mon","Tue","Wed","Thu","Fri"),
			array("Mon","Tue","Wed","Thu","Fri"),
			array("Mon","Tue","Wed","Thu","Fri")
		  );
		echo $month[0][3]; // outputs Thu

		echo "<br>";

		$cart = array();
		$cart[] = array("id" => 37, "title" => "Burial at Ornans", "quantity" => 1);
		$cart[] = array("id" => 345, "title" => "The Death of Marat", "quantity" => 1);
		$cart[] = array("id" => 63, "title" => "Starry Night", "quantity" => 1);

		echo $cart[2]["title"]; // outputs Starry Night

	?>
  </body>
</html>
