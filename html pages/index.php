<?php 
$pageTitle = 'Home page';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
    <?php include 'included/common-head.html'; ?>
</head>
<body>
    <?php include 'included/header.html'; ?>
    
<img id= "Anim" src="images/futureanimation.jpg">

<div id = "FeaturedProduct">
	<h1><b>Featured Products</b></h1>
	<ul>
		<li>
		<img src="images/laptop1.png">
		<p>LENOVO IdeaPad 120S-14IAP (81A50083MH)</p>
		<button>Add to basket</button><br>
	    </li>
	    <li>
		<img src="images/JBL.png">
		<p>JBL Flip 3 Special Edition black</p>
		<button>Add to basket</button><br>
	    </li>
	    <li>
		<img src="images/Corsair.png">
		<p>Corsair K95 RGB Platinum RGB LED</p>
		<button>Add to basket</button><br>
	    </li>
	    <li>
		<img src="images/Apple_mouse.png">
		<p>APPLE Magic Mouse 2</p>
		<button>Add to basket</button><br>	
	    </li>
	</ul>
</div>
<div id = "HotDeals">
		<h1><b>Hot Deals</b></h1>
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
          <img src="images/2.jpg" />
        </div>
        <div class="nav1">
            <label for="img-1" class="prev">&#x2039;</label>
            <label for="img-3" class="next">&#x203a;</label>
        </div>
    </li>

    <input type="radio" name="radio-btn" id="img-3" />
    <li class="slide-container">
        <div class="slide">
          <img src="images/1.jpg" />
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
</ul>
		<a href="deals.html"><button>view more</button><br></a>
</div>
<h2 id = "Rev"><b>Reviews</b></h2>
<div id="Reviews">
    <img src="images/review.png">
    <p>“Delivery was very fast! Service was amazing.<br>
    Moreover, products came in a very safe package.<br>Will definetily order something else here soon!”</p>
</div>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>
    <?php include 'included/footer.html'; ?>
<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</body>
</html>


