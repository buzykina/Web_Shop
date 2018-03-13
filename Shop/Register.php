<?php 
$pageTitle = 'Sign in';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<?php include 'included/common-head.html'; ?>
</head>
<body class="logbody">
<?php include 'included/header.html'; ?><br>
<div id ="login_container">
	<img id="imglog" src="images/sign.png" >
	<form class="login_form">
		Email: <br><input type="text" placeholder="Email" class="inputvals" name="inputEmail" ><br><br>
		Password:<br><input type="password" placeholder="Password" class="inputvals" name="inputPassword"><br><br>
		<input type="submit" id="bt_signin" name="login" value="Login"><br><br>
		<button id="bt_reg" ><a href="sign_up.php">New here?</a></button><br><br>
		<button id="bt_forgotpass"><a href="forgotPassword.php">Forgot your password?</a></button> 
	</form>
</div><br><br>
</html>