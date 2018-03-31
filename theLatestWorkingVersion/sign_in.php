<?php 
session_start();

$pageTitle = 'Sign in';

$host = "studmysql01.fhict.local";
	$user = "dbi392854";
	$password = "1234";
	$db = "dbi392854";

	$connection = new mysqli($host, $user, $password,$db);

	$_SESSION["loggedIn"] = "false";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<?php include 'included/common-head.html'; ?>
	
</head>
<body class="logbody" onload="zeroNumber()">
<?php include 'included/header.php';?><br>
<?php 
	if (isset($_POST['login'])) {
		
		$username = $_POST['inputEmail'];
		$userpassword = $_POST['inputPassword'];

		$sql_query = "select * from cu where Email = '".$username."' AND Password ='".$userpassword."' limit 1";

		$result = mysqli_query($connection,$sql_query);

		$row = mysqli_fetch_array($result,MYSQLI_BOTH);

		if (mysqli_num_rows($result)) {
			if (isset($_SESSION["fromShoppingCart"]) && $_SESSION["fromShoppingCart"] == "True") {
				echo '<script>window.location.href=" shopping_cart_2.php";</script>';
			}
			else{
				echo '<script>window.location.href=" index.php";</script>';
			}
			
			$_SESSION["currentUser"] = $row['FirstName'];
			$_SESSION["loggedIn"] = "True";
			exit();
		}
		else{
			echo "<p align='center' border=1 > <font color= red  size='4px'>Email id/Password combination not found</font> </p>";
		}
	}

	mysqli_close($connection);
?>
<div id ="login_container">
	<img id="imglog" src="images/sign.png" >
	<form class="login_form" action="sign_in.php" method="POST">
		Email: <br><input type="text" placeholder="Email" class="inputvals" name="inputEmail" ><br><br>
		Password:<br><input type="password" placeholder="Password" class="inputvals" name="inputPassword"><br><br>
		<input type="submit" class="btn" name="login" value="Login"><br><br>
		<button class="btn" ><a href="sign_up.php">New here?</a></button><br><br>
	</form>
</div><br><br>
</html>