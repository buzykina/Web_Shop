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
    <p>Your OrderInfo was sent to your email!</p>
  <h1><b>Invoice</b></h1>
    <table>
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
  <td><label id="1<?php echo $product['laptopID'];?>">"<?php echo $product['quantity'];?>"</label></td>
  <td>$<label class= "<?php echo $product['laptopID'];?>"><?php echo $product['price'];?></label></td>
  <td><div class= "<?php echo $product['laptopID'];?>">$<?php echo number_format($product['quantity']*$product['price'],2);?></div></td>
</tr>
<?php
}
}
?>
</table>
    <div class="table3">
    <div class="table-row">
      <div class="tablehead">Sub Total:</div>
      <div class="table-cell">$2197</div>
    </div>
    <div class="table-row">
      <div class="tablehead">Shipping costs:</div>
      <div class="table-cell">$50</div>
    </div>
    <div class="table-row">
      <div class="tablehead">Tax:</div>
      <div class="table-cell">21%</div>
    </div>
    <div class="table-row">
      <div class="tablehead">Total Amount:</div>
      <div class="table-cell">$2400</div>
    </div>
  </div>
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