<?php 
$pageTitle = 'Mice page';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mice</title>
	 <?php include 'included/common-head.html'; ?>
	 <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include 'included/header.html'; ?>
<h1 id = "LapHead">Mice</h1>
<div id="combined">
<div class="fillters">
	<h2>Filters</h2>

	<h4>Brand</h4>
	<div>
		<input type="radio" onclick="apple_mouse()" name="brand" value="Apple" ><label>Apple</label><br>
		<input type="radio" onclick="speedlink_mouse()" name="brand" value="Asus"><label>Speedlink</label><br>
		<input type="radio" onclick="logitech_mouse()" name="brand" value="Logitech"><label>Logitech</label><br>
	</div>

	<h4>Price Range</h4>
	<div>
		<input type="range" min="12" max="105" value="50">
	</div>
	<br>

	<h4>Signal transmission</h4>

	<div>
		<input type="radio" onclick="bluetooth()" name="OS" value="Bluetooth" ><label>Bluetooth</label><br>
		<input type="radio" onclick="wired()" name="OS" value="Wired"><label>Wired</label><br>
		<input type="radio" onclick="wireless()" name="OS" value="Wireless"><label>Wireless</label><br>
	</div>

	<h4>Colour</h4>

	<div>
		<input type="radio" onclick="red_mouse()" name="colour" value="Red"><label>Red</label><br>
		<input type="radio" onclick="black_mouse()" name="colour" value="Black" ><label>Black</label><br>
		<input type="radio" onclick="white_mouse()" name="colour" value="White"><label>White</label><br>
	</div>
	<br>
</div>
<div id="products">
	<div id = "product">
	<ul class="show apple white bluetooth">
			<li><img src="images/Apple_mouse.png"></li>
			<li><h5>APPLE Magic Mouse 2</h5>
				The Magic Mouse 2 from Apple works wirelessly via Bluetooth and works smoothly.<br>
				Device type: Mouse<br>
				Signal transmission: Bluetooth<br>
				Connections: Lightning<br> 
				Colour: White<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$100</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show speedlink red wireless">
		<li><img src="images/speedlink_2.png"></li>
			<li><h5>Speedlink Snappy Mouse</h5>
				The Snappy Mouse from Speedlink is a handy wireless mouse that is suitable for everyone.<br>
				Device type: Mouse<br>
				Number of function keys: 3<br>
				Signal transmission: Wireless<br> 
				Colour: Red<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$12</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show speedlink black wired">
		<li><img src="images/speedlink_1.png"></li>
			<li><h5>Speedlink Axon USB Mouse </h5>
				The AXON of speedlink is an extra-quiet mouse for those who value a hygienic workplace.<br>
				Device type: Mouse<br>
				Number of function keys: 5<br>
				Connections: USB connection<br> 
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$30</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show speedlink red wireless">
		<li><img src="images/speedlink_3.png"></li>
			<li><h5>Speedlink Calado Silent Mouse</h5>
				The wireless Calado Silent Mouse stands for whisper-quiet freedom of movement.<br>
				Device type: Mouse<br>
				Number of function keys: 5<br>
				Signal transmission: Wireless<br> 
				Colour: Red<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$25</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show logitech black wireless">
		<li><img src="images/logitech_1.png"></li>
			<li><h5>Logitech M330 Silent Plus</h5>
				A mouse-free mouse, but with the familiar comfort that you're used to with a mouse.<br>
				Device type: Mouse<br>
				Signal transmission: Wireless<br>
				Number of function keys: 3<br>
				Battery type: AA<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$35</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show logitech black wireless">
		<li><img src="images/logitech_2.png"></li>
			<li><h5>Logitech M187 Wireless Mini Mouse</h5>
				A mouse-free mouse, but with the familiar comfort that you're used to with a mouse.<br>
				Device type: Mouse<br>
				Signal transmission: Wireless<br>
				Supported platform: PC / Mac<br>
				Battery type: AAA<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$27</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show logitech white wired">
		<li><img src="images/logitech_3.png"></li>
			<li><h5>Logitech M100 </h5>
				Simple, reliable mouse for both left- and right-handed users thanks to the symmetrical design.<br>
				Device type: Mouse<br>
				Signal transmission: Wired<br>
				Number of function keys: 3<br>
				Maximum resolution: 1,000 dpi<br>
				Colour: White<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$17</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
<ul class="show logitech black bluetooth">
		<li><img src="images/logitech_4.png"></li>
			<li><h5>Logitech MX Anywhere 2</h5>
				The Logitech MX Anywhere 2 is a suitable mouse for the office and at home.<br>
				Device type: Mouse<br>
				Supported platform: PC / Mac<br>
				Signal transmission: Bluetooth<br>
				Maximum resolution: 1,000 dpi<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$85</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show logitech black wireless">
		<li><img src="images/logitech_5.png"></li>
			<li><h5>Logitech M280</h5>
				Comfortable and accurate wireless computer mouse with nano receiver.<br>
				Device type: Mouse<br>
				Supported platform: PC<br>
				Signal transmission: Wireless<br>
				Maximum resolution: 1,000 dpi<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$35</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show logitech black wireless">
		<li><img src="images/logitech_6.png"></li>
			<li><h5>Logitech MX Master 2S</h5>
                Design on your desktop and write on your PC with this mouse.<br>
				Device type: Mouse<br>
				Connections: Micro USB connection<br>
				Signal transmission: Wireless<br>
				Maximum resolution: 4,000 dpi<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$105</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show logitech white wireless">
		<li><img src="images/logitech_7.png"></li>
			<li><h5>Logitech M560 Wireless Mouse</h5>
                Design on your desktop and write on your PC with one mouse.<br>
				Device type: Mouse<br>
				Supported platform: PC<br>
				Signal transmission: Wireless<br>
				Battery type: AA<br>
				Colour: White<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$50</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
	<ul class="show logitech red wireless">
		<li><img src="images/logitech_8.png"></li>
			<li><h5>Logitech M187 Wireless Mini Mouse</h5>
                Design on your desktop and write on your PC with one mouse.<br>
				Device type: Mouse<br>
				Supported platform: PC / Mac<br>
				Signal transmission: Wireless<br>
				Battery type: AAA<br>
				Colour: Red<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$25</h3><br><button class="AddToBasket">Add to cart</button>
			</li>
	</ul>
</div>
</div>

</div><?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>
<script>
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
<script src="js.js"></script>

</body>
</html>