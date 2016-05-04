<?php
	include "db.php";

	if (!isset($_COOKIE["TestCookie"])) 
	{
		header("Location: index.php");
	}
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
								<li><a id='editButton' href='edit.php'>Edit</a></li>
								<li><a id='logOutButton' href='logOut.php'>Logout</a></li>
							</span>
						</div>";
				
				?>
				
					<nav id='backGroundNav'> 

					<button id='contactButton'>Info</button>

						<span style='margin-left:85px'>
							<li><a id='home' href="#">Home </a></li>
						</span>

					</nav><hr>

				<div id='buttonDiv'>
					<button class='button' id='buttonOne'><?php echo "$BOneName" ?></button>
					<button class='button' id='buttonTwo'><?php echo "$BTwoName" ?></button>
					<button class='button' id='buttonThree'><?php echo "$BThreeName" ?></button>
				</div><br>

				<div id='view'>
					
					<div id='ViewPartOne'><?php echo "$ButtonOneText" ?></div>
					

					<div id='ViewPartTwo'><?php echo "$ButtonTwoText" ?></div>
					

					<div id='ViewPartThree'><?php echo "$ButtonThreeText" ?></div>

				</div><br><hr><br>
				
				<div id='dropBoxSignedIn'>
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

		$("#all").show()

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

		$("#dropBoxSignedIn").slideToggle(500)

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
