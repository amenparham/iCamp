<?php

	$servername = "localhost";
	$username   = "root";
	$password   = "root";
	$dbname     = "iCamp";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if(!$conn) {

		die("Error!");
	}

	$email = $_POST['email'];
	$password = $_POST['password'];
	$sql = "SELECT * FROM iCampAdministrator WHERE email='$email' and password='$password'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) == 1) {

	while($row = mysqli_fetch_assoc($result)) {

			$id = $row['id'];
			
			setcookie("TestCookie", $id);
			setcookie("TestCookie", $id, time()+86400);  /* expire in 1 hour */
			setcookie("TestCookie", $id, time()+86400, "/~rasmus/", "example.com", 1);
			header("Location: in.php");
		}
	}

	else {

		header("Location: wrongInfo.php");

	}



?>