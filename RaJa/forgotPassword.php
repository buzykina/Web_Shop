<?php 
$pageTitle = 'Recover Password page';
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Recover Password</title>
	<?php include 'included/common-head.html'; ?>
<body onload="zeroNumber()">
	<?php 

    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "True") {
       include 'included/headerWithPHP.php';
    }
    else{
        include 'included/header.php';
    }

     
    ?><br>
	<div id ="forgot_container">
		<h2>Recover Password</h2><br>
			<form class="login_form">
				<label>Please enter your email id:</label><br><br>
			    <input id = "mail" type="text" name="recoverEmail"><br><br>
				<label>We have sent you a new password that you have to enter below to log in</label><br><br>
				<input id = "password1" type="text" name="emailPassword">    <input class = "btn" type="submit" name="recoverLogIn" value="Enter"><br><br>
				<label>Haven't recieved your password yet? Click the button bellow</label><br><br>
				<input class = "btn" type="submit" name="resendEmailPassword" value="Send Password Again"><br><br>
				<button class = "btn"><a href="index.php">Home</a></button> 
			</form>
	</div>
</body>
</html>