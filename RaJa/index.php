<?php 
$pageTitle = 'Home page';

session_start();

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <?php include 'included/common-head.html'; ?>
</head>
<body onload="zeroNumber()">
    <?php

    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "True") {
        include 'included/headerWithPHP.php';
    }
    else{
        include 'included/header.php';
    }


    ?>
    
<div id="slideshow">
    <figure>
     <img src="images/slideshow1.jpg">
     <img src="images/slideshow2.jpg">
     <img src="images/slideshow3.jpg">
     <img src="images/slideshow4.jpg">
     <img src="images/slideshow1.jpg">
    </figure>
</div>

<div id = "FeaturedProduct">
	<h1><b>Featured Products</b></h1>
	<ul>
		<li>
    		<img src="images/laptop1.png">
            <p>$1200</p>
    		<p>APPLE MacBook Air 13</p>
    		<button onclick = "AddToBasket()" class="AddToBasket" >Add to basket</button><br>
	    </li>

	    <li>
    		<img src="images/JBL.png">
            <p>$100</p>
    		<p>JBL Flip 3 Special Edition black</p>
    		<button onclick = "AddToBasket()" class="AddToBasket">Add to basket</button><br>
	    </li>

	    <li>
    		<img src="images/Corsair.png">
            <p>$200</p>
    		<p>Corsair K95 RGB Platinum RGB LED</p>
    		<button onclick = "AddToBasket()" class="AddToBasket">Add to basket</button><br>
	    </li>

	    <li>
    		<img src="images/Apple_mouse.png">
            <p>$80</p>
    		<p>APPLE Magic Mouse 2</p>
    		<button onclick="AddToBasket()" class="AddToBasket">Add to basket</button><br>	
	    </li>
	</ul>
</div>
<div id = "HotDeals">
		<h1>Hot Deals</h1>
	<ul class="slides">
        <input type="radio" name="radio-btn" id="img-1" checked />
        <li class="slide-container">
            <div class="slide">
                <img src="images/3.jpg" />
            </div>
                <div class="nav1">
                <label for="img-3" class="prev">&#x2039;</label>
                <label for="img-2" class="next">&#x203a;</label>
                </div>
        </li>

        <input type="radio" name="radio-btn" id="img-2" />
        <li class="slide-container">
            <div class="slide">
              <img class = "mySlides" src="images/2.jpg" />
            </div>
                <div class="nav1">
                <label for="img-1" class="prev">&#x2039;</label>
                <label for="img-3" class="next">&#x203a;</label>
                </div>
        </li>

        <input type="radio" name="radio-btn" id="img-3" />
        <li class="slide-container">
            <div class="slide">
              <img class = "mySlides" src="images/1.jpg" />
            </div>
                <div class="nav1">
                <label for="img-2" class="prev">&#x2039;</label>
                <label for="img-1" class="next">&#x203a;</label>
                </div>
        </li>
        <li class="nav-dots">
          <label for="img-1" class="nav-dot" id="img-dot-1"></label>
          <label for="img-2" class="nav-dot" id="img-dot-2"></label>
          <label for="img-3" class="nav-dot" id="img-dot-3"></label>
        </li>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </ul>
		<a href="deals.php"><button>view more</button><br></a>
</div>
 <h2 id = "Rev">Reviews</h2>
<div id="Reviews">
    <img src="images/review.png">
    <p>“Delivery was very fast! Service was amazing.<br>
    Moreover, products came in a very safe package.<br>Will definetily order something else here soon!”</p>
</div><?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>
</body>
</html>


