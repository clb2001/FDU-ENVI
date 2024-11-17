<?php 
	$select = $_POST['selection'];
	
	if($select == 'real')
		header("Location: http://localhost:8080/zdl/lec05_sample16_real.htm");
	else
		header("Location: http://localhost:8080/zdl/lec05_sample16_virtual.htm");
?>