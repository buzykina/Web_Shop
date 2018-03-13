<?php 
$pageTitle = 'Sign up page';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<?php include 'included/common-head.html'; ?>
	<script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include 'included/header.html'; ?><br>
	<div id ="register_container">
		<h2>Sign Up</h2>
		<br>
		<form class="login_form" onsubmit="return test()" action="index.php">
			<label>Choose a photo to set as your profile picture</label><input type="file" name="photo" value="Choose picture"><br><br>
			<label>First Name:</label> <br>
			<input type="text" id="firstName" placeholder="First Name" width="300" size="100"><img src="images/cross.png" class="hidden fname" height="15px" width="15px"><img src="images/tick.png" class="hidden fname_ok" height="15px" width="15px"><br><br>
			<label>Last Name:</label> <br>
			<input type="text" placeholder="Last Name" id="lastName" width="300" size="100"><img src="images/cross.png" class="hidden lname" height="15px" width="15px"><img src="images/tick.png" class="hidden lname_ok" height="15px" width="15px"><br><br>
			<label>Phonenumber:</label> <br>
			<input type="text" placeholder="Phonenumber" id="phonenumber" width="300" size="100"><img src="images/cross.png" class="hidden phone" height="15px" width="15px"><img src="images/tick.png" class="hidden phone_ok" height="15px" width="15px"><br><br>
			<label>Email:</label> <br>
			<input type="text" placeholder="Email" id="email" width="300" size="100"><img src="images/cross.png" class="hidden email" height="15px" width="15px"><img src="images/tick.png" class="hidden email_ok" height="15px" width="15px"><br><br>
			<label>Address:</label> <br>
			<input type="text" placeholder="Address" id="address" width="300" height="30" size="100"><img src="images/cross.png" class="hidden address" height="15px" width="15px"><img src="images/tick.png" class="hidden address_ok" height="15px" width="15px"><br><br>
			<label>Password:</label> <br>
			<input type="password" placeholder="Password" id="password" width="300" size="100" size="100"><img src="images/cross.png" class="hidden password" height="15px" width="15px"><img src="images/tick.png" class="hidden password_ok" height="15px" width="15px"><br><br>
			<label>Confirm Password:</label> <br>
			<input type="password" placeholder="Confirm Password" id="confrimPassword" width="300" size="100"><img src="images/cross.png" class="hidden repassword" height="15px" width="15px"><img src="images/tick.png" class="hidden repassword_ok" height="15px" width="15px"><br><br>
			<button id="bt_regi"><a href="Register.php">Back</a></button>   
			
			<input type="submit" id="bt_regi">
		</form>
	</div>
	<br>

<script src="js.js"></script>

</body>
</html>