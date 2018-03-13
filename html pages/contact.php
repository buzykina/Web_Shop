<?php 
$pageTitle = 'Contact page';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<?php include 'included/common-head.html'; ?>
</head>
<body onload="zeroNumber()">
	 <?php include 'included/header.html'; ?>
	<h1>Contact</h1>
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d2110.8790867789667!2d5.485129598366286!3d51.454086557947385!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snl!4v1519396484234" width="900" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<div id="lists">
	<ul id = "l1">
			<li><h4>Call Center</h4></li>
			<li>Phone: +31617456347</li>
			       <li>+31617989493</li>
			<li>Working Hours: 10:00 - 20:00</li>
			<li>Email: RaJa@gmail.com</li>       
	</ul>
	<ul id = "l2">
			<li><h4>Pickup Point</h4></li>
			<li>Address: Hillside Dr,</li>
			         <li>14 Mannford</li>
			<li>Phone: +31617989493</li>
			<li>Email: RaJaPickUpPoint@gmail.com</li>
	</ul>
</div>
<?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>
</body>
</html>