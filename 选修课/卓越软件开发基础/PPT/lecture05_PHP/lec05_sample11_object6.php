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
		//下面会有两行空白
		User::showBR();
		echo User::showBR();
		//zdl
		echo User::$name;


	?>
  </body>
</html>
