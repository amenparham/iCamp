<?php


	setcookie("TestCookie", $id);
	setcookie("TestCookie", $id, time() -86400);  /* expire in 1 hour */
	setcookie("TestCookie", $id, time() -86400, "/~rasmus/", "example.com", 1);
	header("Location: index.php");

	// setcookie("TestCookie", $id, time() - 86400);   expire in 1 hour \
	// header("Location: index.php");

?>