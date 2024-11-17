<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		class Person
		{
			function getName()
			{
				return $this->name;
			}
			function setName($newName)
			{
				$this->name = $newName;
			}
		}		
		
		$person1 = new Person();
		$person1->setName("zdl");
		//zdl
		echo $person1->getName();
		echo "<br>";
		
		$person1->id = "9924077";
		//9924077
		echo $person1->id;
		

	?>
  </body>
</html>
