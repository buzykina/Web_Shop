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
		<div><input type="radio" class="radio" onclick="filter()" name="filter" id="Brand_radio"><label>Brand</label></div>
		<div id = "Brand">
			<input type="radio" class="radio" onclick="apple()" name="brand" value="Apple"><label>Apple</label><br>
			<input type="radio" class="radio" onclick="asus()" name="brand" value="Asus"><label>Asus</label><br>
			<input type="radio" class="radio" onclick="acer()" name="brand" value="Acer"><label>Acer</label>
		</div><br>
			<div><input type="radio" class="radio" onclick="filter()" name="filter" id="OS_radio"><label>OS</label></div>
		<div  id = "OS">
			<input type="radio" onclick="windows()" name="OS" value="Mirrosoft Windows"><label>Microsoft Windows</label><br>
			<input type="radio" onclick="chrome()" name="OS" value="Google Chrome OS"><label>Google Chrome OS</label><br>
			<input type="radio" onclick="macos()" name="OS" value="Apple Mac OS"><label>Apple Mac OS</label>
		</div><br>
			<!--<input type="radio" class="radio" onclick="filter()" name="filter" id="Price_radio"><label>Price</label><br>-->
			<div><input type="radio" class="radio" onclick="filter()" name="filter" id="Colour_radio"><label>Colour</label></div>
		<div id = "Colour">
			<input type="radio" onclick="silver()" name="colour" value="Silver"><label>Silver</label><br>
			<input type="radio" onclick="black()" name="colour" value="Black" ><label>Black</label><br>
			<input type="radio" onclick="white()" name="colour" value="White"><label>White</label><br>
		</div>
		<!--<div id = "Price">
			<h4>Price Range</h4>
			<input type="range" min="229" max="2899" value="50">
		</div>-->
		<br>
</div>
	<div>
	<?php
		$sql = 'SELECT * FROM laptop ORDER BY laptopID ASC';
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