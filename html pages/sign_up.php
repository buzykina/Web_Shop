<?php 
$pageTitle = 'Sign up page';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<?php include 'included/common-head.html'; ?>
</head>
<body>
<?php include 'included/header.html'; ?><br>
	<div id ="register_container">
		<h2>Sign Up</h2>
		<br>
		<form class="login_form">
			<label>Choose a photo to set as your profile picture</label><input type="file" name="photo" value="Choose picture"><br><br>
			<label>First Name:</label> <br>
			<input type="text" name="firstName" value="First Name" width="300" size="100"><br><br>
			<label>Last Name:</label> <br>
			<input type="text" name="lastName" value="Last Name" width="300" size="100"><br><br>
			<label>Phonenumber:</label> <br>
			<input type="text" name="phonenumber" value="Phonenumber" width="300" size="100"><br><br>
			<label>Email:</label> <br>
			<input type="text" name="email" value="Email" width="300" size="100"><br><br>
			<label>Address:</label> <br>
			<input type="text" name="address" value="Address" width="300" height="30" size="100"><br><br>
			<label>Password:</label> <br>
			<input type="text" name="password" value="Password" width="300" size="100" size="100"><br><br>
			<label>Confirm Password:</label> <br>
			<input type="text" name="confrimPassword" value="Confirm Password" width="300" size="100"><br><br>
			<button id="bt_regi"><a href="Register.php">Back</a></button>   
			<button id="bt_regi"><a href="#">Next</a></button>
		</form>
	</div>
	<br>
</body>
</html>