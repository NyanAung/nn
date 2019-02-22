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




	
	<tr>
		<th>No.</th>
		<th>Name</th>
		<th>Phone</th>
		<th>Emial</th>
		<th>Action</th>
	</tr>

	<?php 
	$t=0;
$sql= "SELECT * FROM c_orders ORDER BY id DESC";
$res= mysqli_query($conn,$sql);
while ($row = mysqli_fetch_assoc($res)) {
	$t++;
	 ?>
	<tr>
		<td><?php echo $t; ?></td>
		<td><?php echo $row['c_name'] ?></td>
		<td><?php echo $row['c_ph'] ?> </td>
		<td><?php echo $row['c_email'] ?></td>
		<td><a href="order_detail.php?id=<?php echo $row['id'] ?>" class="btn btn-success"> View</a></td>
	</tr>
<?php } ?>
</table>
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
