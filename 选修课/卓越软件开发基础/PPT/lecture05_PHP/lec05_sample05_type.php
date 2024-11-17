<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		if (0)
			echo "true";
		elseif (0.0)
			echo "true";
		elseif ("")
			echo "true";
		elseif ("0")
			echo "true";
		elseif (NULL)
			echo "true";
		else
			echo "false";//œ‘ æ

		echo "<br>";
		
		$var = 3;
		//3 is integer
		//$var is integer
		if(is_int($var)) {
			echo "$var is integer";
			echo "<br>";
			echo "\$var is integer";
		}
		else
			echo "$var type is unknown";

		echo "<br>";

		//integer
		echo gettype($var);
		echo "<br>";
		settype($var,"float");
		//double7
		echo gettype($var);
			
		$var = "3" + 4;
		echo "$var <br>";//7
		$var = "3" + "4";
		echo "$var <br>";//34
		$var = "3" . "4";
		echo "$var <br>";//34
		$var = 3 . 4;
		echo "$var <br>";//≤ªœ‘ æ
		$var = 3.4;
		echo "$var <br>";//3.4
		$a = 3;
		$var = "result is".$a+4;
		//Warning: A non-numeric value encountered in C:\xampp\htdocs\zdl\lec05_sample05_type.php on line 50
		//4
		echo "$var <br>";
	?>
  </body>
</html>
