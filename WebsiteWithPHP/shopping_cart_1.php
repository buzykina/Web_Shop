<?php 
$pageTitle = 'shopping_cart_1 page';
session_start();
require_once('php.php'); 

if(filter_input(INPUT_GET,'action')=='delete')
{
  foreach($_SESSION['shopping_cart'] as $key => $product){
    if($product['laptopID']==filter_input(INPUT_GET,'laptopID')){
        unset($_SESSION['shopping_cart'][$key]);
    }
  }
  $_SESSION['shopping_cart'] = array_values($_SESSION['shopping_cart']);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
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
 <?php
    if(isset($_SESSION['shopping_cart'])){
      if(count($_SESSION['shopping_cart'])>0){
    ?>
    <div>
  <h1><b>Invoice</b></h1>
<table>
  <tr>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
    <th>Action</th>
  </tr>
<?php
  if(!empty($_SESSION['shopping_cart'])){
    $total = 0;
    foreach($_SESSION['shopping_cart'] as $key => $product){  
?>
<tr>
  <td><?php echo $product['name'];?></td>
  <td><input onchange="changequantity(<?php echo $product['laptopID'];?>)" type="number" class="<?php echo $product['laptopID'];?>" value = "<?php echo $product['quantity'];?>" min = "1"></td>
  <td>$<label class= "<?php echo $product['laptopID'];?>"><?php echo $product['price'];?></label></td>
  <td><div class= "<?php echo $product['laptopID'];?>">$<?php echo number_format($product['quantity']*$product['price'],2);?></div></td>
  <td>
    <a href="shopping_cart_1.php?action=delete&laptopID=<?php echo $product['laptopID'];?>">
            <img src="images/delete.jpg" id="delete"/></a>
  </td>
</tr>
<?php
}
}
?>
</table>

</div>
    <a href="shoppingCartLogInCheck.php"><button id = "ContinueBTN">Continue</button></a>
<?php

}
?>
<?php if(count($_SESSION['shopping_cart'])==0)
    {?>
    <h1>Your cart is empty yet</h1>
  <?php }?>
<?php
}
?>
</body>
</html>