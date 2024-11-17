<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$array = array("really long string here, boy", "this", "middling length", "larger");
		$sortOption = 'random';
		
		usort($array, function($a, $b) use ($sortOption)
			{
			if ($sortOption == 'random') {
				// sort randomly by returning (−1, 0, 1) at random
				return rand(0, 2) - 1;
			}
			else {
				return strlen($a) - strlen($b);
			}
		});
		print_r($array);

		echo "<br>";

		/////////////////////////////////////////////////

		$array = array("really long string here, boy", "this", "middling length", "larger");
		$sortOption = "random";
		
		function sortNonrandom($array)
		{
			$sortOption = false;
			usort($array, function($a, $b) use ($sortOption)
			{
				if ($sortOption == "random") {
					// sort randomly by returning (−1, 0, 1) at random
					return rand(0, 2) - 1;
				}
				else {
					return strlen($a) - strlen($b);
				}
			});
			print_r($array);
		}
		print_r(sortNonrandom($array));


	?>
  </body>
</html>
