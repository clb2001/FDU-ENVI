<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		class User
		{
			public $name;

			function __construct($name){
				$this->name = $name;
			}

		}
				
		$object1 = new User("Alice");
		//object1 name = Alice
		echo "object1 name = " . $object1->name . "<br>";

	?>
  </body>
</html>
