<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "iCamp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$ButtonOneName = $_POST['ButtonOneName'];
$ButtonTwoName = $_POST['ButtonTwoName'];
$ButtonThreeName = $_POST['ButtonThreeName'];
$aboutUs = $_POST['aboutUs'];
$firstSquareBox = $_POST['firstSquareBox'];
$middleSquareBox = $_POST['middleSquareBox'];
$lastSquareBox = $_POST['lastSquareBox'];

$ButtonOneText = $_POST['ButtonOneText'];
$ButtonTwoText = $_POST['ButtonTwoText'];
$ButtonThreeText = $_POST['ButtonThreeText'];
$divBgColor = $_POST['divBgColor'];
$textColor = $_POST['textColor'];
$bottomImage = $_POST['bottomImage'];
$textNextToImage = $_POST['textNextToImage'];

if (empty($divBgColor)) {

	$divBgColor = "white";
}

if (empty($textColor)) {

	$textColor = "black";
}

if (empty($bottomImage)) {

	$bottomImage = "https://pbs.twimg.com/profile_images/1427908473/PYAH_logo.jpg";
}

$sql = "UPDATE iCamp SET ButtonOneName='$ButtonOneName', ButtonTwoName='$ButtonTwoName', ButtonThreeName='$ButtonThreeName', 
	aboutUs='$aboutUs', firstSquareBox='$firstSquareBox', middleSquareBox='$middleSquareBox', lastSquareBox='$lastSquareBox', ButtonOneText='$ButtonOneText', ButtonTwoText='$ButtonTwoText', ButtonThreeText='$ButtonThreeText', divBgColor='$divBgColor', textColor='$textColor',
	bottomImage='$bottomImage', textNextToImage='$textNextToImage'";

if (mysqli_query($conn, $sql)) {
    header("Location: in.php");
} else {

    header("Location: edit.php");
}

mysqli_close($conn);
?>