<?php 
$pageTitle = 'shopping_cart_2';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
	<?php include 'included/common-head.html'; ?>
</head>
<body onload="zeroNumber()">
<?php include 'included/header.html'; ?>
<div id = "Deliver">
	<p> Hello <?php  echo $_SESSION["currentUser"]; ?>, </p>
	<p>Please, chose the most suitable way of delivery for you: </p><br>
	<label class="container">I will pick it up in store
    <input type="radio" checked="checked">
    <span class="checkmark"></span>
    </label><br>

    <label class="container">I would like the products to be delivered 
    <input type="radio">
    <span class="checkmark"></span>
    </label>
</div><br>
<div><a href="shopping_cart_1.php"><button id = "back">Back</button></a>
<a href="shopping_cart_3.php"><button id = "Cont">Continue</button></a></div>
</body>
</html>
