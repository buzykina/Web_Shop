<?php

session_start();

$_SESSION["loggedIn"] = "false";

$_SESSION["fromShoppingCart"] = "false";

header("location: index.php");

?>