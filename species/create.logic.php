<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST"):
		$db = new mysqli('localhost','root','','hospital');
		include "patientshow.php";
		// Prepare data for insertion
		$firstname = $db->escape_string($_POST["firstname"]);
		$lastname = $db->escape_string($_POST["lastname"]);
		$telephone = $db->escape_string($_POST["telephone"]);
		$address = $db->escape_string($_POST["address"]);
		$patient = $db->escape_string($_POST["select"]);
		// Prepare query and execute
		$query = "insert into client (firstname, lastname, telephone, address, patient_id) values ('$firstname','$lastname','$telephone', '$address', '$patient')";
		$result = $db->query($query);
	
    // Tell the browser to go back to the index page.
    header("Location: ./");	
    exit();
	endif;

?>