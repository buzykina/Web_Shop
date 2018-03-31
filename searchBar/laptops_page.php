<?php 
$pageTitle = 'Laptops page';
include 'php.php';
session_start();
$product_ids = array();
if(filter_input(INPUT_POST,'add_to_cart')){
if(isset($_SESSION['shopping_cart']))
{
	$count = count($_SESSION['shopping_cart']);
	$product_ids = array_column ($_SESSION['shopping_cart'],'laptopID');
	if(!in_array(filter_input(INPUT_POST,'laptopID'),$product_ids))
	{
		$_SESSION['shopping_cart'][$count] = array
		(
		'laptopID' => filter_input(INPUT_POST,'laptopID'), 
		 'name' => filter_input(INPUT_POST,'name'), 
		 'price' => filter_input(INPUT_POST,'price'), 
		 'quantity' => filter_input(INPUT_POST,'quantity')
		);
	}
	else
	{
		for($i = 0;$i< count($product_ids);$i++)
		{
			if($product_ids[$i]==filter_input(INPUT_POST,'laptopID'))
			{
				$_SESSION['shopping_cart'][$i]['quantity'] += filter_input(INPUT_POST,'quantity');
			}
		}
	}


}
else
{
	$_SESSION['shopping_cart'][0] = array
	(	
		 'laptopID' => filter_input(INPUT_POST,'laptopID'), 
		 'name' => filter_input(INPUT_POST,'name'), 
		 'price' => filter_input(INPUT_POST,'price'), 
		 'quantity' => '1'

    );

}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Laptops</title>
    <?php include 'included/common-head.html'; ?>
</head>
<body>
 <?php 

    if (isset($_SESSION["loggedIn"]) && $_SESSION["loggedIn"] == "True") {
       include 'included/headerWithPHP.php';
    }
    else{
        include 'included/header.php';
    }
     
?>

<h1>Laptops</h1>
<div id="combined">
<div class="filters">
		<h2>Filters</h2>
		<h4>Filter by</h4>
<div><input type="radio" class="radio" onclick="filter2()" name="filter" id="Brand_radio"><label>Brand</label></div>
		<form id = "brand" method = "post">
			<input type="radio" class="radio" onclick="formSubmit('brand')" name="brand" value="apple"><label>Apple</label><br>
			<input type="radio" class="radio" onclick="formSubmit('brand')" name="brand" value="asus"><label>Asus</label><br>
			<input type="radio" class="radio" onclick="formSubmit('brand')" name="brand" value="acer"><label>Acer</label>
		</form><br>
			<div><input type="radio" class="radio" onclick="filter2()" name="filter" id="OS_radio"><label>OS</label></div>
		<form  id = "OS" method ="post">
			<input type="radio" onclick="formSubmit('OS')" name="OS" value="windows"><label>Microsoft Windows</label><br>
			<input type="radio" onclick="formSubmit('OS')" name="OS" value="chrome"><label>Google Chrome OS</label><br>
			<input type="radio" onclick="formSubmit('OS')" name="OS" value="mac"><label>Apple Mac OS</label>
		</form><br>
			<!--<input type="radio" class="radio" onclick="filter()" name="filter" id="Price_radio"><label>Price</label><br>-->
			<div><input type="radio" class="radio" onclick="filter2()" name="filter" id="Colour_radio"><label>Colour</label></div>
		<form id = "Color" method = "post">
			<input type="radio" onclick="formSubmit('Color')" name="Color" value="silver"><label>Silver</label><br>
			<input type="radio" onclick="formSubmit('Color')" name="Color" value="black" ><label>Black</label><br>
			<input type="radio" onclick="formSubmit('Color')" name="Color" value="white"><label>White</label><br>
		</form>
		<!--<div id = "Price">
			<h4>Price Range</h4>
			<input type="range" min="229" max="2899" value="50">
		</div>-->
		<br>
</div>
	<div>
	<?php
if(isset($_POST['OS'])){
        if($_POST['OS'] == 'windows'){
             //Run query for dateasc
             $sql = "SELECT * FROM laptop Where OS = 'windows'";
        }elseif($_POST['OS'] == 'chrome'){
             //Run query for datedesc
             $sql = "SELECT * FROM laptop Where OS = 'chrome'";
        }
        elseif($_POST['OS'] == 'mac'){
             //Run query for datedesc
             $sql = "SELECT * FROM laptop Where OS = 'mac'";
        }
    }
elseif(isset($_POST['Color'])){
        if($_POST['Color'] == 'silver'){
             //Run query for red color
            $sql = "SELECT * FROM laptop Where Color = 'silver'";;
        }elseif($_POST['Color'] == 'black'){
             //Run query for green color
             $sql = "SELECT * FROM laptop Where Color = 'black'";
        }elseif($_POST['Color'] == 'white'){
             //Run query for blue color
            $sql = "SELECT * FROM laptop Where Color = 'white'";
        }
}
elseif(isset($_POST['brand'])){
        if($_POST['brand'] == 'acer'){
             //Run query for red color
            $sql = "SELECT * FROM laptop Where brand = 'acer'";;
        }elseif($_POST['brand'] == 'asus'){
             //Run query for green color
             $sql = "SELECT * FROM laptop Where brand = 'asus'";
        }elseif($_POST['brand'] == 'apple'){
             //Run query for blue color
            $sql = "SELECT * FROM laptop Where brand = 'apple'";
        }
}
else{
     $sql = 'SELECT * FROM laptop ORDER BY laptopID ASC';
}
		$result = mysqli_query($conn,$sql);
		if($result):
			if(mysqli_num_rows($result)>0):
				echo '<div class='."products".' id = '."laptops".'>';
				while($product = $result->fetch_assoc()):
				?>
					<form method="post" action = "laptops_page.php?action=add&id=<?php echo $product['laptopID']; ?>">
						<ul>
					  	<li><img src="<?php echo $product['image']; ?>"></li>
					  	<li>
					  		<h5><?php echo "$product[name]";?></h5>
					  		<?php echo "$product[description]";?>
					  	</li>
					  	<li class = "price">
					  		<h3>$ <?php echo "$product[price]";?></h3><br>
					  		<input type = submit class="AddToBasket" name ="add_to_cart" value="Add to Cart"/>
					  	</li>
					  	<li><input type="hidden" name="name" value = "<?php echo "$product[name]";?>"></li>
					  	<li><input type="hidden" name="quantity" value = "1"></li>
					  	<li><input type="hidden" name="laptopID" value = "<?php echo "$product[laptopID]";?>"></li>
					  	<li><input type="hidden" name="price" value = "<?php echo "$product[price]";?>"></li>
					</ul>
					</form>
				
				<?php
					endwhile;
					endif;
			        endif;

				?>
				</div>
</div>
</div>
<?php include 'included/footer.html'; ?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</a></button>
<script>
	 var numberOfItemsInCart = <?php echo $count; ?>;
</script>
</body>
</html>