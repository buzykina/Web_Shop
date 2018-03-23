<?php 
$pageTitle = 'Recover Password page';
$host = "localhost";
	$user = "root";
	$password = "";
	$db = "RajaDb";

	mysql_connect($host,$user,$password);
	mysql_select_db($db);

	if (isset($_POST['recoverLogIn'])){

		session_start();
		
		
		$email = $_POST['recoverEmail'];

		$msg = "test";

		mail($email, "Test", $msg);
	}

		

	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Recover Password</title>
	<?php include 'included/common-head.html'; ?>
<body onload="zeroNumber()">
	<?php include 'included/header.html'; ?><br>
	<div id ="forgot_container">
		<h2>Recover Password</h2><br>
			<form class="login_form">
				<label>Please enter your email id:</label><br><br>
			    <input type="text" name="recoverEmail" size="50"><br><br>
				<label>We have sent you your password that you have to enter below to log in</label><br><br>
				<input type="text" name="emailPassword" size = "25">    <input class = "btn" type="submit" name="recoverLogIn" value="Enter"><br><br>
				<label>Haven't recieved your password yet? Click the button bellow</label><br><br>
				<input class = "btn" type="submit" name="resendEmailPassword" value="Send Password Again"><br><br>
				<button class = "btn"><a href="index.php">Home</a></button> 
			</form>
	</div>
</body>
</html>