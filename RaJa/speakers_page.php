<?php 
$pageTitle = 'Speakers page';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Speakers</title>
	<?php include 'included/common-head.html'; ?>
</head>
<body onload="zeroNumber()">
 <?php include 'included/header.html'; ?>
<h1>Speakers</h1>
<div id="combined">
<div class="fillters">
	<h2>Filters</h2>

	<h4>Brand</h4>
	<div>
		<input type="radio" name="brand" value="JBL" onclick="jbl()"><label>JBL</label><br>
		<input type="radio" name="brand" value="SONY" onclick="sony()"><label>SONY</label><br>
		<input type="radio" name="brand" value="Bose" onclick="bose()"><label>Bose</label><br>
	</div>

	<h4>Price Range</h4>
	<div>
		<input type="range" min="35" max="225" value="50">
	</div>
	<br>

	<h4>Type</h4>

	<div>
		<input type="radio" name="type" value="Waterproof" onclick="waterproof()" ><label>Waterproof</label><br>
		<input type="radio" name="type" value="Not waterproof" onclick="notwaterproof()"><label>Not waterproof</label><br>
	</div>

	<h4>Colour</h4>

	<div>
		<input type="radio" name="colour" value="Blue" onclick="blue()"><label>Blue</label><br>
		<input type="radio" name="colour" value="Black" onclick="black_speaker()"><label>Black</label><br>
		<input type="radio" name="colour" value="Gray" onclick="gray()"><label>Gray</label><br>
	</div>
	<br>
</div>
<div id="products">
	<div id = "product">
	<ul class="show jbl waterproof black">
			<li><img src="images/jbl_1.png"></li>
			<li><h5>JBL Flip 3 Special Edition</h5>
				This JBL Flip 3 is a Special Edition because of its cool matte black color.<br>
				Device type: Bluetooth speaker<br>
				Battery life: 10 hours<br>
				Speaker system: 2.0<br> 
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$85</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show jbl waterproof blue">
		<li><img src="images/jbl_2.png"></li>
			<li><h5>JBL Xtreme </h5>
				This JBL Xtreme is a Special Edition because of its cool black color at the ends of the speaker.<br>
				Device type: Bluetooth speaker<br>
				Battery life: 15 hours<br>
				Frequency range: 70 Hz - 20 kHz<br> 
				Colour: Blue<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$235</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show jbl notwaterproof gray">
		<li><img src="images/jbl_3.png"></li>
			<li><h5>JBL Go</h5>
				The JBL Go is a very compact and stylish Bluetooth speaker.<br>
				Device type: Bluetooth speaker<br>
				Battery life: 5 hours<br>
				Frequency range: 180 Hz - 20 kHz<br> 
				Colour: Gray<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$35</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show jbl waterproof black">
		<li><img src="images/jbl_4.png"></li>
			<li><h5>JBL Trip</h5>
				The JBL Trip is a portable speaker that you can attach to the sun visor of your car.<br>
				Device type: Bluetooth speaker<br>
				Width: 13.4 cm<br>
				Height: 6.4 cm<br> 
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$90</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show sony notwaterproof blue">
		<li><img src="images/sony_1.png"></li>
			<li><h5>SONY SRS-XB10</h5>
				A mouse-free mouse, but with the familiar comfort that you're used to with a mouse.<br>
				Device type:  Bluetooth speaker<br>
				Battery life: 16 hours<br>
				Waterproof: Yes<br>
				Colour: Blue<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$50</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show sony notwaterproof black">
		<li><img src="images/sony_2.png"></li>
			<li><h5>SONY SRS-XB40</h5>
				The Sony SRS-XB40 is the big brother of the Sony SRS-XB30.<br>
				Device type:  Bluetooth speaker<br>
				Battery life: 24 hours<br>
				Waterproof: Yes<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$160</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
<ul class="show sony notwaterproof blue">
		<li><img src="images/sony_3.png"></li>
			<li><h5>SONY SRS-XB20</h5>
				Look no further, because the Sony SRS-XB20 has everything you need.<br>
				Device type: Bluetooth speaker<br>
				Battery life: 12 o'clock<br>
				Waterproof: Yes<br>
				Colour: Blue<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$85</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show sony waterproof black">
		<li><img src="images/sony_4.png"></li>
			<li><h5>SONY GTK-XB60</h5>
				Build a party at any location with the powerful Sony GTK-XB60..<br>
				Device type: Party speaker<br>
				Signal transmission: wired, wireless<br>
				Bluetooth: Yes<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$255</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show bose notwaterproof gray">
		<li><img src="images/bose_1.png"></li>
			<li><h5>BOSE SoundLink Revolve</h5>
                Look no further, because the BOSE SoundLink Revolve has everything you need.<br>
				Device type: Bluetooth speaker<br>
				Battery life: 12 o'clock<br>
				Waterproof: Yes<br>
				Colour: Gray<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$215</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show bose notwaterproof blue">
		<li><img src="images/bose_2.png"></li>
			<li><h5>BOSE SoundLink Micro</h5>
               The Bose SoundLink Micro is made for all your adventures.<br>
				Device type: Bluetooth speaker<br>
				Battery life: 6 hours<br>
				Waterproof: Yess<br>
				Colour: Blue<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$125</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show bose notwaterproof black">
		<li><img src="images/bose_3.png"></li>
			<li><h5>BOSE SoundTouch 10</h5>
                The Bose SoundTouch 10 is a versatile wireless music system with Wi-Fi and Bluetooth support.<br>
				Device type: Multiroom speaker<br>
				Wifi interface: Yes<br>
				High Resolution Audio: No<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$225</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	<ul class="show bose waterproof black">
		<li><img src="images/bose_4.png"></li>
			<li><h5>BOSE SoundLink Mini II</h5>
                The Bose SoundLink Mini II delivers a grand sound with deep and low tones.<br>
				Device type: Bluetooth speaker<br>
				Battery life: 10 hours<br>
				Wireless range: 9 m<br>
				Colour: Black<br>
				&#x272A; &#x272A; &#x272A; &#x272A; &#x272A;<br>
		    </li>
			<li id = "price">
				<h3>$195</h3><br><button class="AddToBasket" onclick="AddToBasket()">Add to cart</button>
			</li>
	</ul>
	</div>
</div>
</div><?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>

</body>
</html>