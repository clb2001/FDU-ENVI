<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$a = null;
		$b = true;
		$c = 1;
		$d = "test";
		$e = array('name' => 'Fred', 'age' => 35, 'wife' => 'Wilma');
		class P{
			public $name = "zdl";
		}
		$f = new p();
		
		//¿Õ°×
		print_r($a);		echo "<br>";
		//1
		print_r($b);		echo "<br>";
		//1
		print_r($c);		echo "<br>";
		//test
		print_r($d);		echo "<br>";
		//Array ( [name] => Fred [age] => 35 [wife] => Wilma )
		print_r($e);		echo "<br>";
		//P Object ( [name] => zdl )
		print_r($f);		echo "<br>";
		echo "<br>";

		//NULL
		var_dump($a);		echo "<br>";
		//bool(true)
		var_dump($b);		echo "<br>";
		//int(1)
		var_dump($c);		echo "<br>";
		//string(4) "test"
		var_dump($d);		echo "<br>";
		//array(3) { ["name"]=> string(4) "Fred" ["age"]=> int(35) ["wife"]=> string(5) "Wilma" }
		var_dump($e);		echo "<br>";
		//object(P)#1 (1) { ["name"]=> string(3) "zdl" }
		var_dump($f);


	?>
  </body>
</html>
