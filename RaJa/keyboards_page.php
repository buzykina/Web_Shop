<?php 
$pageTitle = 'keyboards page';
session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Keyboards</title>
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
<h1>Keyboards</h1>
<div id="combined">
<div class="filters">
	<h2>Filters</h2>
			<h4>Filter by</h4>
			<div><input type="radio" class="radio" onclick="filter()" name="filter" id="Brand_radio"><label>Brand</label></div>
			<div id  = "Brand">
			<input type="radio" name="brand" value="Corsair" onclick="corsair()"><label>Corsair</label><br>
			<input type="radio" name="brand" value="Speedlink" onclick="speedlink()"><label>Speedlink</label><br>
			<input type="radio" name="brand" value="Logitech G" onclick="logitechg()"><label>Logitech G</label>
			</div><br>
			<div><input type="radio" class="radio" onclick="filter()" name="filter" id="OS_radio"><label>Signal transmission</label></div>
			<div id  = "OS">
			<br>
			<input type="radio" name="OS" value="Wired" onclick="wired()"><label>Wired</label><br>
			<input type="radio" name="OS" value="Bluetooth" onclick="bluetooth()"><label>Bluetooth</label><br>
			<input type="radio" name="OS" value="Wireless" onclick="wireless()"><label>Wireless</label>
			</div><br>
			<!--<input type="radio" class="radio" onclick="filter()" name="filter" id="Price_radio"><label>Price</label><br>-->
			<div><input type="radio" class="radio" onclick="filter()" name="filter" id="Colour_radio"><label>Colour</label></div>
			<div id  = "Colour">
			<input type="radio" name="colour" value="Grey" onclick="gray_keyboard()"><label>Grey</label><br>
			<input type="radio" name="colour" value="Black" onclick="black_keyboard()"><label>Black</label><br>
			<input type="radio" name="colour" value="White" onclick="white_keyboard()"><label>White</label>
			</div><br>
	
	<!--<div id = "Price">
		<h4>Price Range</h4>
		<input type="range" min="16" max="179" value="50">
	</div>
	<br>-->
</div>
<br>
<div class="products">
			<ul class="show corsair bluetooth black">
				<li><img src="images/Keyboard1.png"></li>
				<li><h5>CORSAIR K95 RGB PLATINUM RGB LED</h5>
				On the Corsair K95 RGB gaming keyboard you can decide yourself which color lighting you want.<br>
				Device type: Gaming keyboard<br> 
				Number of function keys: 6 <br>
				Function keys: 6 programmable G keys<br> 
				Keyboard layout: QWERTY <br>
				Ergonomic model: Yes<br>
				&#10026;&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$179</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show speedlink bluetooth gray">
				<li><img src="images/Keyboard2.png"></li>
				<li><h5>SPEEDLINK Accusor Advanced</h5>
				Gaming at a high level with the SPEEDLINK Accusor Advanced gaming keyboard.<br>
				Device type: Gaming keyboard<br>
				Number of function keys: 9<br>
				Illuminated keys: Yes<br> 
				Connections: USB connection <br>
				Length of the connecting cable: 1.8 m<br>
				&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$39</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show corsair wired black">
				<li><img src="images/Keyboard3.png"></li>
				<li><h5>CORSAIR K65 RAPIDFIRE COMPACT RGB LED</h5>
					The K65 Rapidfire from corsair is a gaming keyboard with a comfortable design.<br>
					Device type: Gaming keyboard<br>
					Signal div id = "product"ansmission: Wired<br>
					Keyboard layout: QWERTY<br>
					Illuminated keys: Yes <br>
					Connections: USB 2.0 connection<br>
					&#10026;&#10026;&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$144</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show logitechg wired black">
				<li><img src="images/Keyboard4.png"></li>
				<li><h5>LOGITECH G G613</h5>
					Increase your gaming level with the LOGITECH G G613 gaming keyboard.<br>
					Device type: Gaming keyboard<br>
					Signal div id = "product"ansmission: Wired<br>
					Function keys: Yes<br>
					Keyboard layout: QWERTY <br>
					Bluetooth: Yes<br>
				    &#10026;&#10026;&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$150</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show logitechg wired black">
				<li><img src="images/Keyboard5.png"></li>
				<li><h5>LOGITECH G Pro Gaming Keyboard</h5>
					If you take gaming seriously,then the LOGITECH G Pro Gaming Keyboard offers the solution.<br>
					Device type: Gaming keyboard<br>
					Signal div id = "product"ansmission: Wired<br>
					Number of function keys: 113<br>
					Function keys: Yes <br>
					Illuminated keys: Yes<br>
				    &#10026;&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$150</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show corsair wired black">
				<li><img src="images/Keyboard6.png"></li>
				<li><h5>CORSAIR K55 RGB</h5>
					On the Corsair K55 RGB gaming keyboard you can decide yourself which color lighting you want.<br>
					Device type: Gaming keyboard<br>
					Signal div id = "product"ansmission: Wired<br>
					Function keys: Yes<br>
					Keyboard layout: QWERTY <br>
					Illuminated keys: Yes<br>
					&#10026;&#10026;&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$55</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show speedlink bluetooth gray">
				<li><img src="images/Keyboard7.png"></li>
				<li><h5>SPEEDLINK Iovia</h5>
					The Iovia gaming keyboard from Speedlink has red-glow gaming keys.<br>
					Device type: Gaming keyboard<br>
					Supported platform: PC / Mac<br>
					Signal div id = "product"ansmission: Cable<br>
					Illuminated keys: Yes <br>
					Connections: USB<br>
					&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$140</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show logitechg wired black">
				<li><img src="images/Keyboard8.png"></li>
				<li><h5>LOGITECH G G213 Prodigy</h5>
					The G213 Prodigy gaming keyboard from Logitech provides fast, responsive feedback.<br>
					Device type: Gaming keyboard<br>
					Supported platform: PC<br>
					Connections: USB<br>
					Length of the connecting cable: 1.7 m <br>
					Colour: Black<br>
					&#10026;&#10026;&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$16</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show corsair wireless gray">
				<li><img src="images/Keyboard9.png"></li>
				<li><h5>CORSAIR Safe RGB</h5>
					The Sdiv id = "product"afe RGB is the silent mechanical gaming keyboard from Corsair.<br>
					Device type: Gaming keyboard<br>
					Supported platform: PC<br>
					Maximum resolution: 0<br>
					Signal div id = "product"ansmission: Wired <br>
					Function keys: Yes<br>
					&#10026;&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$65</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show logitechg bluetooth white">
				<li><img src="images/Keyboard10.png"></li>
				<li><h5>LOGITECH K400 Plus</h5>
					The Logitech K400 Plus is a wireless keyboard that lets you operate your TV..<br>
					Device type: Keyboard<br>
					Signal div id = "product"ansmission: Wireless<br>
					Function keys: Yes<br>
					Length of the connecting cable: 1.7 m <br>
					Colour: White<br>
					&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$55</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show speedlink wireless gray">
				<li><img src="images/Keyboard11.png"></li>
				<li><h5>SPEEDLINK Rapax</h5>
					The Speedlink Rapax is an illuminated keyboard specially developed for gamers.<br>
					Device type: Gaming keyboard<br>
					Supported platform: PC<br>
					Maximum resolution: 0<br>
					Signal div id = "product"ansmission: Wired<br>
					Function keys: No<br>&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$60</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show corsair wireless black">
				<li><img src="images/Keyboard12.png"></li>
				<li><h5>CORSAIR K70 RapidFire</h5>
					Make yourself unbeatable with the Corsair K70 RapidFire mechanical gaming keyboard.<br>
					Device type: Gaming keyboard<br>
					Illuminated keys: Yes<br>
					Connections: 2 USB connections<br>
					USB hub: Yes<br>
					Other characteristics: Exdiv id = "product"a quiet, mechanical, palm rest<br>
					&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$160</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
			<ul class="show logitechg wireless white">
				<li><img src="images/Keyboard13.png"></li>
				<li><h5>LOGITECH K280e</h5>
					The Logitech K280e keyboard offers comfort while typing thanks to the palm rest.<br>
					Device type: Keyboard<br>
					Supported platform: PC<br>
					Signal transmission: Wireless<br>
					Colour: White<br>
					Other characteristics: palm rest<br>
					&#10026;&#10026;&#10026;
				</li>
				<li class = "price">
					<h3>$160</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
				</li>
			</ul>
</div>
</div>
<?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>


</body>
</html>