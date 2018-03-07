<?php 
$pageTitle = 'shopping_cart_1 page';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
  <?php include 'included/common-head.html'; ?>
</head>
<body>
<?php include 'included/header.html'; ?>
<h1 id = "Inv"><b>Invoice</b></h1>
	<div class="table1">
  <div class="table-row">
    <div class="tablehead">Product</div>
    <div class="tablehead">Price per piece</div>
    <div class="tablehead">Quantity</div>
    <div class="tablehead">Total Amount</div>
  </div>
  <div class="table-row">
    <div class="table-cell">IPhone 6s</div>
    <div class="table-cell">$499</div>
    <div class="table-cell"><input type="number" size="2" min="0" max="18" value="1"></div>
    <div class="table-cell">$499</div>
  </div>
  <div class="table-row">
    <div class="table-cell">MacBoo</div>
    <div class="table-cell">$1299</div>
    <div class="table-cell"><input type="number" size="2" min="0" max="18" value="1"></div>
    <div class="table-cell">$1299</div>
  </div>
  <div class="table-row">
    <div class="table-cell">iPad</div>
    <div class="table-cell">$399</div>
    <div class="table-cell"><input type="number" size="2" min="0" max="18" value="1"></div>
    <div class="table-cell">$399</div>
  </div>
</div>
  <div class="table2">
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
<a href="shopping_cart_2.php"><button id = "ContinueBTN">Continue</button></a>
<?php include 'included/footer.html'; ?>
</body>
</html>