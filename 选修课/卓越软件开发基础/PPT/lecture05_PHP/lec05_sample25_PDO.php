<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		define('DBHOST', 'localhost');
		define('DBNAME', 'art');
		define('DBUSER', 'testuser');
		define('DBPASS', 'mypassword');
		define('DBCONNSTRING','mysql:host=localhost;dbname=art');
		
		try {
			$pdo = new PDO(DBCONNSTRING,DBUSER,DBPASS);
			$pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "select * from Artists order by LastName";
			$result = $pdo -> query($sql);
			while ($row = $result -> fetch()) {
				echo $row['ArtistID'] . " ©\ " . $row['LastName'] . "<br/>";
			}
			$pdo = null;
		}
		catch (PDOException $e) {
			die( $e -> getMessage() );
		}

	?>
  </body>
</html>
