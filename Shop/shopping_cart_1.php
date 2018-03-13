<?php 
$pageTitle = 'shopping_cart_1 page';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title>
  <?php include 'included/common-head.html'; ?>
  <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<?php include 'included/header.html'; ?>
<h1 id = "Inv"><b>Invoice</b></h1>
	
  <table id="myTable">
  <tbody >
    <tr>
      <td>
        test
      </td>
    </tr>
  </tbody>
</table>

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
<script src="js.js"></script>
</body>
</html>