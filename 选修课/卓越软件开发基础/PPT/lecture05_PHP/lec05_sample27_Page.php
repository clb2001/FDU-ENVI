<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
    <style>
		body{font-size:16pt;background-color:white;}
		h1{font-size:28pt;font-weight:bold;color:red;}
		table{border-collapse:collapse;}
		th{font-weight:bold;}
		th,td{border:solid 2px;}
    </style>
  </head>
  <body>
	<h1>All Users</h1>
	<?php 
		
		define('DBHOST', 'localhost');
		define('DBNAME', 'art');
		define('DBUSER', 'testuser');
		define('DBPASS', 'mypassword');
		
		$connection = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
        if ( mysqli_connect_errno() ) {
            die( mysqli_connect_error() );  
        }

		
		$sql = "select * from Artists";
		$result = mysqli_query($connection, $sql);

		if($result)
			$totalCount = $result->num_rows;
		else
			$totalCount = 0;

		if($totalCount==0)
			echo "No users";
		else{
			$pageSize = 5;
			$totalPage = (int)(($totalCount%$pageSize==0)?($totalCount/$pageSize):($totalCount/$pageSize+1));
			
		
			if(!isset($_GET['page']))
				$currentPage = 1;
			else
				$currentPage = $_GET['page'];

			$mark = ($currentPage-1)*$pageSize;
			$firstPage = 1;
			$lastPage = $totalPage;
			$prePage = ($currentPage>1)?$currentPage-1:1;
			$nextPage = ($totalPage-$currentPage>0)?$currentPage+1:$totalPage;

			$sql = "select * from Artists limit " . $mark . "," . $pageSize;
			$result = mysqli_query($connection, $sql);
	?>
	<table>
		<tr>
			<th>ArtistID</th>
			<th>FirstName</th>
			<th>LastName</th>
			<th>Nationality</th>
		</tr>
	<?php 
		for($j=0;$j<$pageSize;$j++)
		{
			$row = mysqli_fetch_assoc($result);
	?>
			<tr>
				<td><?php echo $row['ArtistID']; ?></td>
				<td><?php echo $row['FirstName']; ?></td>
				<td><?php echo $row['LastName']; ?></td>
				<td><?php echo $row['Nationality']; ?></td>
			</tr>
	<?php 
		}//end of for
	?>
	</table>
	<a href="lec05_sample27_Page.php?page=<?php echo $firstPage; ?>">FirstPage</a>
	&nbsp;&nbsp;
	<a href="lec05_sample27_Page.php?page=<?php echo $prePage; ?>">PrePage</a>
	&nbsp;&nbsp;
	<a href="lec05_sample27_Page.php?page=<?php echo $nextPage; ?>">NextPage</a>
	&nbsp;&nbsp;
	<a href="lec05_sample27_Page.php?page=<?php echo $lastPage; ?>">LastPage</a>
	&nbsp;&nbsp;
	<?php echo $currentPage; ?>/<?php echo $totalPage; ?>&nbsp;Pages
	<?php 
		}//end of else totalCount != 0;

		mysqli_free_result($result);
		mysqli_close($connection);

	?>
  </body>
</html>
