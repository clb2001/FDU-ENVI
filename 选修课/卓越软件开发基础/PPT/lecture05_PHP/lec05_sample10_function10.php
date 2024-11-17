<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$temp = "test";
		
		function test1() {
			//Notice: Undefined variable: temp
			echo $temp;
		}

		function test2($temp) {
			echo $temp;
		}

		function test3() {
			global $temp;
			echo $temp;
		}
		
		test1();		
		echo "<br>";	
		test2($temp);	//test
		echo "<br>";
		test3();		//test
		echo "<br>";

		function updateCounter()
		{
			static $counter = 0;
			$counter++;
			echo "Static counter is now {$counter} <br>";
		}
		
		$counter = 10;
		//Static counter is now 1
		updateCounter();	
		//Static counter is now 2
		updateCounter();	
		//10
		echo $counter;

	?>
  </body>
</html>
