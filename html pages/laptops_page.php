<?php 
$pageTitle = 'Laptops page';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Laptops</title>
    <?php include 'included/common-head.html'; ?>
</head>
<body onload="zeroNumber()">
 <?php include 'included/header.html'; ?>

<h1>Laptops</h1>
<div id="combined">
	<div class="fillters">
		<h2>Filters</h2>

		<h4>Brand</h4>
		<div>
			<input type="radio" name="brand" value="Apple" checked><label>Apple</label><br>
			<input type="radio" name="brand" value="Asus"><label>Asus</label><br>
			<input type="radio" name="brand" value="Acer"><label>Acer</label><br>
		</div>

		<h4>Price Range</h4>
		<div>
			<input type="range" min="229" max="2899" value="50">
		</div>
		<br>

		<h4>Operating System</h4>

		<div>
			<input type="radio" name="OS" value="Mirrosoft Windows" checked><label>Microsoft Windows</label><br>
			<input type="radio" name="OS" value="Google Chrome OS"><label>Google Chrome OS</label><br>
			<input type="radio" name="OS" value="Apple Mac OS"><label>Apple Mac OS</label><br>
		</div>

		<h4>Colour</h4>

		<div>
			<input type="radio" name="colour" value="Silver"><label>Silver</label><br>
			<input type="radio" name="colour" value="Black" checked><label>Black</label><br>
			<input type="radio" name="colour" value="White"><label>White</label><br>
		</div>
		<br>
	</div>
	<div id="products">
			<div id = "product">
				<ul>
				<li><img src="images/laptop1.png"></li>
				<li>
					<h5>APPLE MacBook Air 13</h5>
					13.3 "HD • Intel Core i5-5350U (1.8 GHz) • 8 GB • 128 GB SSD • Intel HD Graphics 6000<br>
					Resolution: 1440 x 900<br> 
					Optical drive: No <br>
					Operating system: macOS 10.12 Sierra<br>
					Battery life: 12 o'clock <br>
					Form factor: Fixed screen<br>
					&#10026;&#10026;&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$949</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop2.png"></li>
				<li>
					<h5>ACER Aspire 1 A114-31-C471</h5>
					14 inch WXGA • Intel Celeron N3350 • 4 GB • 64 GB eMMC • Intel HD Graphics 500<br>
					Resolution: 1366 x 768<br>
					Optical drive: No <br>
					Battery life: 9 o'clock<br>
					Form factor: Fixed screen <br>
					Display diagonal: 14 inches<br>
					&#10026;&#10026;&#10026;<br>
					</li>
				<li id = "price">
					<h3>$249</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop3.png"></li>
				<li>
					<h5>ACER Chromebook 15 CB3-532-C8E0</h5>
					15.6 inch Full HD • Intel Celeron N3160 • 4 GB • 32 GB eMMC • Intel HD Graphics 400<br>
					Resolution: 1920 x 1080<br>
					Optical drive: No <br>
					Operating system: Google Chrome OS<br>
					Battery life: 12 o'clock<br>
					Form factor: Fixed screen<br>
					&#10026;&#10026;&#10026;&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$279</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop4.png"></li>
				<li>
					<h5>ACER Spin SP513-51-34EU</h5>
					13.3 "FHD Touch • Intel Core i3-7100U • 8 GB • 256 GB SSD • Intel HD Graphics 620<br>
					Display diagonal: 13.3 inches<br>
					Resolution: 1920 x 1080 <br>
					Touchscreen: Yes<br>
					Image resolution: Full HD <br>
					Display diagonal (cm): 33.8 cm<br>
				    &#10026;&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$699</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop5.png"></li>
				<li>
					<h5>APPLE MacBook Pro 13</h5>
					13.3 "Retina • Intel Core i5-7360U (2.3 GHz) • 8 GB • 128 GB SSD • Intel Iris Plus Graphics 640<br>
					Resolution: 2560 x 1600<br>
					Optical drive: No <br>
					Operating system: OS X 10.12 Sierra<br>
					Battery life: 10 hours <br>
					Form factor: Fixed screen<br
					>&#10026;&#10026;&#10026;&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$1348</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop6.png"></li>
				<li>
					<h5>ACER Aspire 5 A515-51G-58C6</h5>
					15.6 inch Full HD • Intel Core i5-7200U • 8 GB • 256 GB SSD + 1 TB HDD • NVIDIA GeForce 940 MX<br>
					Resolution: 1920 x 1080<br>
					Optical drive: No <br>
					Operating system: Windows 10 Home<br>
					Battery life: 7 hours <br>
					Form factor: Fixed screen<br>
					&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$799</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop7.png"></li>
				<li>
					<h5>ACER Aspire 3 A315-51-35WL</h5>
					15.6 inch Full HD • Intel Core i3-7100U • 4 GB • 128 GB SSD • Intel HD Graphics 620<br>
					Resolution: 1920 x 1080<br>
					Optical drive: No <br>
					Operating system: Windows 10 Home<br>
					Form factor: Fixed screen <br>
					Display diagonal: 15.6 inches<br>
					&#10026;&#10026;&#10026;<br></li>
				<li id = "price">
					<h3>$469</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop8.png"></li>
				<li>
					<h5>ACER Aspire 3 (A315-51-59AP)</h5>
					15.6 inch Full HD • Intel Core i5-7200U • 8 GB • 256 GB SSD • Intel HD Graphics 620<br>
					Resolution: 1920 x 1080<br>
					Optical drive: No <br>
					Operating system: Windows 10 Home<br>
					Battery life: 6.5 hours <br>
					Form factor: Fixed screen<br>
					&#10026;<br>
				</li>
				<li id = "price">
					<h3>$649</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop9.png"></li>
				<li>
					<h5>ASUS VivoBook X441UA-WX367T</h5>
					14 inch HD Ready • Intel Core i3-6006U • 4 GB • 1 TB HDD • Intel HD Graphics 520<br>
					Resolution: 1366 x 768<br>
					Optical drive: DVD burner <br>
					Operating system: Windows 10<br>
					Form factor: Fixed screen <br>
					Display diagonal: 14 inches<br>
					&#10026;&#10026;&#10026;&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$449</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop10.png"></li>
				<li>
					<h5>ACER Chromebook 11 CB5-132T-C14K</h5>
					11.6 inch HD Touch • Intel Celeron N3060 • 4 GB • 32 GB eMMC • Intel HD Graphics 400<br>
					Resolution: 1366 x 768<br>
					Optical drive: No <br>
					Operating system: Google Chrome OS<br>
					Battery life: 9 o'clock <br>
					Form factor: Foldable screen<br>
					&#10026;&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$299</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop11.png"></li>
				<li>
					<h5>ACER One 10 S1003-11QZ</h5>
					10.1 inch HD Touch • Intel Atom x5-Z8350 • 2 GB • 32 GB eMMC • Intel HD Graphics<br>
					Display diagonal: 10.1 inch<br>
					Resolution: 1280 x 800 <br>
					LED backlight: Yes<br>
					Touchscreen: Yes <br>
					Image resolution: HD ready<br>
					&#10026;&#10026;&#10026;&#10026;&#10026;<br>
				</li>
				<li id = "price">
					<h3>$229</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
			<div id = "product">
				<ul>
				<li><img src="images/laptop12.png"></li>
				<li>
					<h5>APPLE MacBook Pro 15 (2016) with Touch Bar </h5>
					15.4 inch Retina • Intel Core i7-6929HQ (2.9 GHz) • 16 GB • 1 TB SSD • AMD Radeon Pro 455<br>
					Resolution: 2880 x 1800<br>
					Optical drive: No <br>
					Operating system: Mac OS<br>
					Battery life: 10 hours <br>
					Form factor: Fixed screen<br>&#10026;&#10026;&#10026;&#10026;</li>
				<li id = "price">
					<h3>$2899</h3><br><button onclick = "AddToBasket()" class="AddToBasket">Add to cart</button>
				</li>
				</ul>
			</div>
	</div>
</div><?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>
</body>
</html>






