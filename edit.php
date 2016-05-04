<?php

include "db.php";

	if (!isset($_COOKIE["TestCookie"])) 
	{
		header("Location: index.php");
	}	

	$id = $_COOKIE["TestCookie"];
	include "dbconnSignedIn.php";

?>

<?php

echo "<style>
body
{
	background-color: gold
}
</style>";

?>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="main.css">
		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
		<meta charset="UTF-8">
		<meta name="iCamp" content="iCamp Learning">
		<meta name="keywords" content="Xcode,Swift,HTML,CSS,JavaSript,PHP">
		<title>iCamp</title>
	</head>
	
	<body id='premium'>
		<center>
			<div id='all'>

				<?php 

					$id = $_COOKIE["TestCookie"];

					include "dbconnSignedIn.php";

					echo"    
						<div id='logedIn'>
					
							Signed In as - $fname $lname<br>
							<span style='float:right; margin-right:10px; font-size:10px'>
								<li><a id='inEdit-EditButton' href='#'>Edit</a></li>
								<li><a id='logOutButton' href='logOut.php'>Logout</a></li>
							</span>
						</div>";
				
				?>
				
				<?php 

				echo "

					<nav id='backGroundNav'> 

					<button id='contactButton'>Info</button>

						<span style='margin-left:85px'>
							<li><a id='home' href='#'>Home </a></li>
						</span>

					</nav><hr>

				<div id='buttonDiv'>
				<button class='button' id='buttonOne'>$BOneName</button>
					<button class='button' id='buttonTwo'>$BTwoName</button>
					<button class='button' id='buttonThree'>$BThreeName</button>
				<form action='dbupdate.php' method='post'>
					<textarea id='buttonNamesOnEditPage' maxlength='50' name='ButtonOneName'>$BOneName</textarea>
					<textarea id='buttonNamesOnEditPage' maxlength='50' name='ButtonTwoName'>$BTwoName</textarea>
					<textarea id='buttonNamesOnEditPage' maxlength='50' name='ButtonThreeName'>$BThreeName</textarea>



					<input id='saveEditing' type='submit' value='SAVE CHANGES'>

				</div><br>

				<div id='view'>
					
					<textarea id='ViewPartOneOnEdit' name='ButtonOneText'>$ButtonOneText</textarea>
					<textarea id='ViewPartTwoOnEdit' name='ButtonTwoText'>$ButtonTwoText</textarea>
					<textarea id='ViewPartThreeOnEdit' name='ButtonThreeText'>$ButtonThreeText</textarea>

				</div> <span style='color:gold;'>Background-Color: <input placeholder='background-Color' value='$divBgColor' name='divBgColor' type='text'></span>

				<span style='color:gold;'>Text-Color: <input name='textColor' value='$textColor' type='text'></span>

				<br><hr><br> 
				
				<div id='dropBoxSignedIn'>
					<h1>ABOUT US</h1><hr><br>
					<textarea id='aboutUsInfoOnEdit' maxlength='1300' name='aboutUs'>$aboutUs</textarea>
				</div>


				<div style='width:100%;height:300px'>

					<textarea style='width:200px; border-color:white; border-style:solid; float:left; height:90%; margin-left:50px' name='bottomImage'>$bottomImage</textarea>

					<textarea style='width:80%; height:90%;' name='textNextToImage'>$textNextToImage</textarea>

				</div>

				</form>"; 
				
				?>


				

			</div>
				<footer>2016 iClass, Rob Fitzgerald --- Website By: Amen Parham</footer>
		</center>
	</body>
</html>

<script>


	$(function() {

		$("#all").show()

		$("#buttonOne").on("click", function() {

		$("#ViewPartOneOnEdit").show(), $("#ViewPartTwoOnEdit").hide(), $("#ViewPartThreeOnEdit").hide(),
		$("#buttonOne").css({"background-color": "white", "font-weight": "bold", "border-color": "#00ffff", "color": "#000000"}),
		$("#buttonTwo").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}), $("#buttonThree").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}),
		$("#buttonThree").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"});

		});

		$("#buttonTwo").on("click", function() {

		$("#ViewPartOneOnEdit").hide(), $("#ViewPartTwoOnEdit").show(), $("#ViewPartThreeOnEdit").hide(),
		$("#buttonTwo").css({"background-color": "white", "font-weight": "bold", "border-color": "#00ffff", "color": "#000000"}),
		$("#buttonOne").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}),
		$("#buttonThree").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"});

		});

		$("#buttonThree").on("click", function() {

		$("#ViewPartOneOnEdit").hide(), $("#ViewPartTwoOnEdit").hide(), $("#ViewPartThreeOnEdit").show(),
		$("#buttonThree").css({"background-color": "white", "font-weight": "bold", "border-color": "#00ffff", "color": "#000000"}),
		$("#buttonOne").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}),
		$("#buttonTwo").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"});

		});

		$("#contactButton").on("click", function() {

		$("#dropBoxSignedIn").slideToggle(1000)

	});
		$("#buttonOne").hover(function(){
		    $(this).css({"border-color": "#00ffff"});
		    }, function(){
		    $(this).css({"border-color": "white"});
	});
		$("#buttonThree").hover(function(){
		    $(this).css({"border-color": "#00ffff"});
		    }, function(){
		    $(this).css({"border-color": "white"});
	});
		$("#buttonTwo").hover(function(){
	    $(this).css({"border-color": "#00ffff"});
	    }, function(){
	    $(this).css({"border-color": "white"});
	});
});

</script>
