<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		class User
		{
			static $name = "zdl";

			function getName(){
				return self::$name;
			}

			static function showBR(){
				echo "<br>";
			}

		}
				
		//zdl
		echo User::$name;
		//����������пհ�
		User::showBR();
		echo User::showBR();
		//zdl
		echo User::$name;


	?>
  </body>
</html>
