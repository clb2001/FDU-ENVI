<?php 
	
	$name = $_GET['name'];
	if(isset($_GET['flag']))
		$flag = $_GET['flag'];
	else
		$flag = 1;
	
	if($name == "")
		header("Location: http://localhost/zdl/lec05_sample20_qstr.htm");
	else
		if($flag == 1){
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>	
	<h1>Need more content:</h1>
	<form method="get" action="http://localhost/zdl/lec05_sample20_qstr.php" id="form1" name="form1">
		Content: <input type="text" id="text1" name="content" value="[Content]"><br>
		<input type="hidden" id="text1" name="name" value=<?= $name; ?>>
		<input type="hidden" id="text1" name="flag" value=2>
		<input type="submit" value="Submit">
	</form>
  </body>
</html>
<?php 
	}
	else{
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>	
	<h1><?= $name; ?></h1>
  </body>
</html>
<?php 
	}
?>
