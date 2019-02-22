<?php   require 'configg.php'; ?>
<?php 
	session_start();
	$cart = isset($_SESSION['cart']);
	require_once './support.php';
	navBar($cart);


?>
<!DOCTYPE html>
<html>
<head>
	<title>Category</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	

</head>
<body> 


<h3 class="p-2 bg-info text-white">Cart Page</h3>


<div class="container-fluid">
	<?php 
if (isset($_POST['add'])) {
	$id= $_POST['id'];
	$qty=$_POST['qty'];


	if (isset($_SESSION['cart'])) {
		$_SESSION['cart'][$id]= $qty;


	}else{
		$_SESSION['cart'][$id]= $qty;
	}
}

	 ?>

<?php 
if (isset($_GET['id'])) {
	$id= trim(strip_tags($_GET['id']));
	unset($_SESSION['cart'][$id]);
}
?>

	 <table class="table table-bordered">
	 	<tr>
	 		<th>No.</th>
	 		<th>Name</th>
	 		<th>Price</th>
	 		<th>Qty</th>
	 		<th>Amount</th>
	 		<th>Remove</th>
	 	</tr>


	 	<?php 
$t=0;
$total=0;
foreach ($_SESSION['cart'] as $id => $q) {
$t++;

$id = trim($id);
$sql = "SELECT * FROM product WHERE id='$id'";
$result = mysqli_query($conn,$sql);
while ($row =mysqli_fetch_assoc($result)) {
	$price= preg_replace("/[a-zA-Z]/", "", $row['p_price']);
$item_per_price= $price*$q;
$total =$total+ $item_per_price;


	 	 ?>
	 	 <tr>
	 	 	<td><?php echo $t; ?></td>
	 	 <td><?php echo $row['p_name']; ?></td>
	 	  <td><?php echo $row['p_price']; ?></td>
	 	   <td><?php echo $q;?></td>
	 	    <td>
	 	    <?php 


echo $price*$q. " USD";
	 	     ?>
</td>
<td><a href="cart.php?id=<?php echo ($id); ?>" class="btn btn-danger">Remove</a></td>
	 	 </tr>
	 
	 <?php
	  }
}
 ?>
 <tr>
 	<td colspan="4" align="right">Total:</td>
 	<td><?php echo $total; ?> USD</td>
 	<td>
<?php 
if (count($_SESSION['cart']) > 0 ) {
	echo '<a href="checkout.php" class="btn btn-success">Checkout</a>';
}

 ?>
  <a href="back.php" class="btn btn-success">Back</a>
 	</td> 
 	
 </tr>
 </table>
</div>
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
<?php 

myFooter();
 ?>
</html>