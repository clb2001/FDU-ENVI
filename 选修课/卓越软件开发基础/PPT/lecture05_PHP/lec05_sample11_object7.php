<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		class Person
		{
			public $name;

			function __construct($name){
				$this->name = $name;
			}

		}
				
		class Employee extends Person
		{
			public $salary;

			function __construct($name,$salary){
				parent::__construct($name);
				$this->salary = $salary;
			}

			function getEmployee(){
				echo "Name is ".$this->name." and salary is ".$this->salary;
			}

		}
		
		$object1 = new Employee("zdl","3000");
		//Name is zdl and salary is 3000
		$object1->getEmployee();


	?>
  </body>
</html>
