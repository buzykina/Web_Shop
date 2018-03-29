<?php 
$pageTitle = 'Contact page';

session_start();

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<?php include 'included/common-head.html'; ?>
</head>
<body onload="zeroNumber()">
	 <?php 

    if ($_SESSION["loggedIn"] == "True") {
       include 'included/headerWithPHP.php';
    }
    else{
        include 'included/header.html';
    }

     
    ?>
	<h1>Contact</h1>
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.1975309745408!2d-95.79179018487854!3d36.064285816476215!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87b68bbc1ee03c97%3A0x9316f6c32f0e60a1!2s14+E+Hillside+Dr%2C+Broken+Arrow%2C+OK+74012%2C+USA!5e0!3m2!1sen!2snl!4v1520936042868" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<div id="lists">
	<ul id = "l1">
			<li><h4>Call Center</h4></li>
			<li>Phone: +1-456-678-3456</li>
			       <li>+1-657-392-5960</li>
			<li>Working Hours: 10:00 - 20:00</li>
			<li>Email: RaJa@gmail.com</li>       
	</ul>
	<ul id = "l2">
			<li><h4>Pickup Point</h4></li>
			<li>Address: Hillside Dr,</li>
			         <li>14 Mannford</li>
			<li>Phone: +1-745-534-2343</li>
			<li>Email: RaJaPickUpPoint@gmail.com</li>
	</ul>
</div>
<?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>
</body>
</html>