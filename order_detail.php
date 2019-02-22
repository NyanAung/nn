<?php   require 'auth.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>BS</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body> 

	<?php require 'navbar.php';?>

	<h1 align="center">Admin Order Page</h1>


<table class="table-bordered table">
	<?php 
if (isset($_GET['id'])) {
$id =$_GET['id'];
$sql= "SELECT * FROM c_orders WHERE id='$id'";
$result =mysqli_query($conn,$sql);
while ($row= mysqli_fetch_assoc($result)) {
		
	

	 ?>
<tr>
	<th style="width: 10%">Name</th>
	<td><?php echo $row ['c_name']; ?></td>
</tr>

<tr>
	<th>Email:</th>
	<td><?php echo $row['c_email']; ?></td>
</tr>

<tr>
	<th>Phone:</th>
	<td><?php echo $row['c_ph']; ?></td>
</tr>
<tr>
	<th>Country:</th>
	<td><?php echo $row['c_cty']; ?></td>
</tr>
<tr>
	<th>Payment</th>
	<td><?php echo $row['c_pay']; ?></td>
</tr>
<tr>
	<th>Item:</th>
	<td>
		<?php 
$item =unserialize($row['c_cart']);
foreach ($item as $pid => $qty) {
	 $query= "SELECT *FROM product WHERE id ='$pid'";
	 $res= mysqli_query($conn,$query);
	 while ($r=mysqli_fetch_assoc($res)) {
	 	echo $r['p_name']."=>" . $qty. "<br>";
	 }
}
		 ?>


	</td>
</tr>
<tr>
	<th>Order Note</th>
	<td><?php echo $row['c_note']; ?></td>
</tr>
	<?php 
}

		}

	 ?>
	</table>

	
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
