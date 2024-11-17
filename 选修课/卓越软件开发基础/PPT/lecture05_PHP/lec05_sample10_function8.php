<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		function takesTwo($a, $b)
		{
			if (isset($a)) {
				echo " a is set\n";
			}
			if (isset($b)) {
				echo " b is set\n";
			}
		}

		echo "With two arguments:\n";
		echo "<br>";
		//a is set b is set
		takesTwo(1, 2);
		echo "<br>";
		
		echo "With one argument:\n";
		echo "<br>";
		//Fatal error: Uncaught ArgumentCountError: 
		//Too few arguments to function takesTwo()
		takesTwo(1);
		echo "<br>";

	?>
  </body>
</html>
