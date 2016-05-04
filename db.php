<?php

	$servername = "localhost";
	$username   = "root";
	$password   = "root";
	$dbname     = "iCamp";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if(!$conn) {

		die("Error!");
	}

	$sql = "SELECT * FROM iCamp WHERE id='1'";
	$result = mysqli_query($conn, $sql);

	if(mysqli_num_rows($result) > 0) {

	while($row = mysqli_fetch_assoc($result)) {

			$BOneName = $row['ButtonOneName'];
			$BTwoName = $row['ButtonTwoName'];
			$BThreeName = $row['ButtonThreeName'];
			
			$ButtonOneText = $row['ButtonOneText'];
			$ButtonTwoText = $row['ButtonTwoText'];
			$ButtonThreeText = $row['ButtonThreeText'];

			$firstSquareBox = $row['firstSquareBox'];
			$middleSquareBox = $row['middleSquareBox'];
			$lastSquareBox = $row['lastSquareBox'];

			$aboutUs = $row['aboutUs'];

			$divBgColor = $row['divBgColor'];
			$textColor = $row['textColor'];

			$textNextToImage = $row['textNextToImage'];
			$bottomImage = $row['bottomImage'];

		}
	}

	else {

		echo "Administrator Still Needs To Update Website!";
	}



?>