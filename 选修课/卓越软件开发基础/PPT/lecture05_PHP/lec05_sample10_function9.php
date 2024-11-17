<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		function sum(...$numbers) {
			$acc = 0;
			foreach ($numbers as $n) {
				$acc += $n;
			}
			return $acc;
		}

		echo sum(1, 2, 3, 4);	//10
		echo "<br>";

		function sum1() {
			$acc = 0;
			foreach (func_get_args() as $n) {
				$acc += $n;
			}
			return $acc;
		}

		echo sum1(1, 2, 3, 4);	//10	

	?>
  </body>
</html>
