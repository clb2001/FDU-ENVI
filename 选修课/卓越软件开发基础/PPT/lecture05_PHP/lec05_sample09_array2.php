<!DOCTYPE html>
<html>
  <head>
    <title>Lecture5 Sample</title>
  </head>
  <body>
	<?php 
		
		$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 37, "Thu" => 41, "Fri" => 52);

		//��ֵ���򣬻��޸ļ�Ϊ����
		sort($forecast);
		print_r($forecast);
		echo "<br>";

		$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 37, "Thu" => 41, "Fri" => 52);

		//��ֵ���򣬲��޸ļ�
		asort($forecast);
		print_r($forecast);
		echo "<br>";

		$forecast = array("Mon" => 40, "Tue" => 47, "Wed" => 37, "Thu" => 41, "Fri" => 52);

		//��������
		ksort($forecast);
		print_r($forecast);
	?>
  </body>
</html>
