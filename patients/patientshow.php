<?php
	
	$db1 = new mysqli('localhost','root','','hospital');

	$query1 = "select * from patient";
	$result1 = $db1->query($query1);
	
	$patients = $result1->fetch_all(MYSQLI_ASSOC);
?>