<?php

session_start();

$_SESSION["loggedIn"] = "false";

$_SESSION["fromShoppingCart"] = "false";
unset($_SESSION["shopping_cart"]);

header("location: index.php");

?>