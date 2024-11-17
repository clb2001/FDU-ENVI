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
		}
		
		$object1 = new User();
		$object1->name = "Alice";
		$object2 = $object1;
		$object2->name = "Amy";
		
		//Amy
		echo "object1 name = " . $object1->name . "<br>";
		//Amy
		echo "object2 name = " . $object2->name . "<br>";

	?>
  </body>
</html>
