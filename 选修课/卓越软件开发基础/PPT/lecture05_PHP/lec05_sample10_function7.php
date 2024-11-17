<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		function makeyogurt($type = "acidophilus", $flavour){
			return "Making a bowl of $type $flavour.\n";
		}
		
		echo makeyogurt("raspberry");   // won't work as expected

		echo "<br>";
		
		function makeyogurt1($flavour, $type = "acidophilus"){
			return "Making a bowl of $type $flavour.\n";
		}
		
		echo makeyogurt1("raspberry");   // works as expected
	?>
  </body>
</html>
