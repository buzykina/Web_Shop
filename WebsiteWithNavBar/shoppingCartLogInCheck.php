<?php
 session_start();

 if (isset($_SESSION["loggedIn"])) {
 	if ($_SESSION["loggedIn"] == "True") {
		header("location: shopping_cart_2.php");
	}
	else{
		$_SESSION["fromShoppingCart"] = "True";
		header("location: sign_in.php");
	}
 }
 else{
 	$_SESSION["fromShoppingCart"] = "True";
 	header("location: sign_in.php");
 }

	
?>