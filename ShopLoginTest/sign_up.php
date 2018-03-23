<?php 
$pageTitle = 'Sign up page';
$host = "localhost";
	$user = "root";
	$password = "";
	$db = "RajaDb";

	mysql_connect($host,$user,$password);
	mysql_select_db($db);

	if (isset($_POST['register_btn'])) {

		session_start();
		
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$phonenumber = $_POST['phonenumber'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$password = $_POST['password'];

		$sql = "INSERT INTO customers(FirstName,LastName,Phonenumber,Email,Address,Password) VALUES('$firstName','$lastName','$phonenumber','$email','$address','$password')";
		mysql_query($sql);

	
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<?php include 'included/common-head.html'; ?>
</head>
<body onload="zeroNumber()">
<?php include 'included/header.html'; ?><br>
	<div id ="register_container">
		<h2>Sign Up</h2>
		<br>
		<form class="login_form" onsubmit="return test()" action="sign_up.php" method="POST">
			<label>Choose a photo to set as your profile picture</label><input type="file" name="photo" value="Choose picture"><br><br>
			<label>First Name:</label> <br>
			<input type="text" id="firstName" placeholder="First Name" name="firstName" width="300" size="100"><img src="images/cross.png" class="hidden fname" height="15px" width="15px"><img src="images/tick.png" class="hidden fname_ok" height="15px" width="15px"><br><br>
			<label>Last Name:</label> <br>
			<input type="text" placeholder="Last Name" id="lastName" name="lastName" width="300" size="100"><img src="images/cross.png" class="hidden lname" height="15px" width="15px"><img src="images/tick.png" class="hidden lname_ok" height="15px" width="15px"><br><br>
			<label>Phonenumber:</label> <br>
			<input type="text" placeholder="Phonenumber" id="phonenumber" name="phonenumber" width="300" size="100"><img src="images/cross.png" class="hidden phone" height="15px" width="15px"><img src="images/tick.png" class="hidden phone_ok" height="15px" width="15px"><br><br>
			<label>Email:</label> <br>
			<input type="text" placeholder="Email" id="email" name="email" width="300" size="100"><img src="images/cross.png" class="hidden email" height="15px" width="15px"><img src="images/tick.png" class="hidden email_ok" height="15px" width="15px"><br><br>
			<label>Address:</label> <br>
			<input type="text" placeholder="Address" id="address" name="address" width="300" height="30" size="100"><img src="images/cross.png" class="hidden address" height="15px" width="15px"><img src="images/tick.png" class="hidden address_ok" height="15px" width="15px"><br><br>
			<label>Password:</label> <br>
			<input type="password" placeholder="Password" id="password" name = "password" width="300" size="100" size="100"><img src="images/cross.png" class="hidden password" height="15px" width="15px"><img src="images/tick.png" class="hidden password_ok" height="15px" width="15px"><br><br>
			<label>Confirm Password:</label> <br>
			<input type="password" placeholder="Confirm Password" id="confrimPassword" width="300" size="100"><img src="images/cross.png" class="hidden repassword" height="15px" width="15px"><img src="images/tick.png" class="hidden repassword_ok" height="15px" width="15px"><br><br>
			<button class="btn"><a href="sign_in.php">Back</a></button>   
			
			<input type="submit" class="btn" name="register_btn">
		</form>
	</div>
	<br>

</body>
</html>