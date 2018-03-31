<?php 
$pageTitle = 'shopping_cart_3';
session_start();
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
       include 'included/headerWithPHP.php';?>
       <<div id="Cart3">
    <p> Hello <?php  echo $_SESSION["currentUser"]; ?>, </p>
    <p>Thank you for your purchase!</p>
  <h1><b>Invoice</b></h1>
    <table id ="table3">
  <tr>
    <th>Product Name</th>
    <th>Quantity</th>
    <th>Price</th>
    <th>Total</th>
  </tr>
<?php
  if(!empty($_SESSION['shopping_cart'])){
    $total = 0;
    foreach($_SESSION['shopping_cart'] as $key => $product){  
?>
<tr>
  <td><?php echo $product['name'];?></td>
  <td><label id="1<?php echo $product['laptopID'];?>"><?php echo $product['quantity'];?></label></td>
  <td>$<label class= "<?php echo $product['laptopID'];?>"><?php echo $product['price'];?></label></td>
  <td><div class= "<?php echo $product['laptopID'];?>">$<?php echo number_format($product['quantity']*$product['price'],2);?></div></td>
</tr>
<?php
}
}
?>
</table>
<table id = "table2">
  <tr>
    <th>Sub Total:</th>
      <td><div class= "<?php echo $product['laptopID'];?>">$<?php echo number_format($product['quantity']*$product['price'],2);?></td>
  </tr>
  <tr>
    <th>Shipping costs:</th>
    <td>$50</td>
  </tr>
   <tr>
    <th>Tax:</th>
    <td>21%</td>
   </tr>
   <tr>
    <th>Total Amount:</th>
    <td><div class= "<?php echo $product['laptopID'];?>">$<?php echo number_format((1+0.21)*($product['quantity']*$product['price']+50),2);?></td>
   </tr>
</table>
</div>
<a href=logout.php><button id="LogOut">Log out</button></a>
<a href="index.php"><button id="BackHome" onclick="Back()">Back to home page</button></a>
    <?php
    }

    else{
    ?>
    <h1>Sorry, but you are not logged in.......</h1><br>
    <h1>You can log in <a href="sign_in.php">here</a></h1>

<?php
    }

     
    ?>
</body>
</html>