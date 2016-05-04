<?php

	$servername = "localhost";
	$username   = "root";
	$password   = "root";
	$dbname     = "iCamp";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if(!$conn) {

		die("Error!");
	}

	$sql = "SELECT * FROM iCampAdministrator WHERE id=$id";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) == 1) {

	while($row = mysqli_fetch_assoc($result)) {

			$fname = $row['fname'];
			$lname = $row['lname'];
		}
	}

	else {

		header("Location: index.php");
	}



?>