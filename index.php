<?php

	$id = $_COOKIE["TestCookie"];

if (isset($_COOKIE["TestCookie"])) 
	{
		header("Location: in.php");
	}

	include "db.php";
?>

<?php 
echo "

<style>


#view
{
	background-color: $divBgColor; color: $textColor;
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
	
	<body>
		<center>
			<div id='all'>

				<div id='logIn'>
					
					<form id='form' action='dbconn-preSignIn.php' method='post'>
						Administrator Sign In: <input autofocus type='text' id='textBox' name='email' placeholder='email@gmail.com'>
						<input type='password' id='textBox' name='password' placeholder='password'>
						<input type='submit' id='submitBox' value='logIn'>
					</form>

				</div>

					<button id='logInButton'>LogIn</button>
				
					<nav id='backGroundNav'> 

					<button id='contactButton'>Info</button>

						<span style='margin-left:-20px'>
							<li><a id='home' href="#">Home </a></li>
						</span>

					</nav><hr>

				<div id='buttonDiv'>
					<button class='button' id='buttonOne'><?php echo "$BOneName" ?></button>
					<button class='button' id='buttonTwo'><?php echo "$BTwoName" ?></button>
					<button class='button' id='buttonThree'><?php echo "$BThreeName" ?></button>
				</div><br>

				<div id='view'>
					
					<span id='ViewPartOne'><?php echo "$ButtonOneText" ?></span>
					

					<span id='ViewPartTwo'><?php echo "$ButtonTwoText" ?></span>
					

					<span id='ViewPartThree'><?php echo "$ButtonThreeText" ?></span>

				</div><br><hr><br>
				
				<div id='dropBox'>
					<h1>ABOUT US</h1><hr><br>
					<?php echo "<div id='aboutUsInfo'>$aboutUs</div>"; ?>
				</div>


				
				<div style='width:100%;height:300px'>

					<div style='width:200px; border-color:white; border-style:solid; float:left; height:90%; margin-left:50px' > <?php echo "<img width='100%' height='100%' src='$bottomImage'>"; ?></div>

					<div style='width:80%; border-color:white; border-style:solid; height:90%; margin-left:250px; background-color:#222' ><?php echo "$textNextToImage"; ?></div>

				</div>
				

				

			</div>
				<footer>2016 iClass, Rob Fitzgerald --- Website By: Amen Parham</footer>
		</center>
	</body>
</html>

<script>


	$(function() {

		$("#all").fadeIn(3000)

		$("#buttonOne").on("click", function() {

		$("#ViewPartOne").show(), $("#ViewPartTwo").hide(), $("#ViewPartThree").hide(), 
		$("#buttonOne").css({"background-color": "white", "font-weight": "bold", "border-color": "#00ffff", "color": "#000000"}),
		$("#buttonTwo").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}), $("#buttonThree").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}),
		$("#buttonThree").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"});

		});

		$("#buttonTwo").on("click", function() {

		$("#ViewPartOne").hide(), $("#ViewPartTwo").show(), $("#ViewPartThree").hide(), 
		$("#buttonTwo").css({"background-color": "white", "font-weight": "bold", "border-color": "#00ffff", "color": "#000000"}),
		$("#buttonOne").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}),
		$("#buttonThree").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"});

		});

		$("#buttonThree").on("click", function() {

		$("#ViewPartOne").hide(), $("#ViewPartTwo").hide(), $("#ViewPartThree").show(),
		$("#buttonThree").css({"background-color": "white", "font-weight": "bold", "border-color": "#00ffff", "color": "#000000"}),
		$("#buttonOne").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"}),
		$("#buttonTwo").css({"background-color": "black", "font-weight": "normal", "border-color": "white", "color": "white"});

		});

		$("#contactButton").on("click", function() {

		$("#dropBox").slideToggle(500), $("#logIn").slideUp(500)

		});

		$("#logInButton").on("click", function() {

		$("#logIn").slideToggle(500), $("#dropBox").fadeOut(100)

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