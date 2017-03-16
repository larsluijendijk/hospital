<?php

function ConnectDB() {
	$connection = new mysqli('localhost', 'root', '', 'hospital');

	if ( ! $connection(...) ) {
		die('No connection: ' . mysqli_connect_error());
	}
}

	return $connection;

function GetBirthday($connection){
	$sql = "SELECT * FROM calendar";
}