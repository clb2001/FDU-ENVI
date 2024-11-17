<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		class Person
		{
			const CONSTANT = "zdl";

			function showConst(){
				echo self::CONSTANT;
			}
		}		
		
		//zdl
		echo Person::CONSTANT;
		echo "<br>";

		$person1 = new Person();
		//zdl
		$person1->showConst();
		

	?>
  </body>
</html>
