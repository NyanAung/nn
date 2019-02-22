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

	<h1 align="center">All Product</h1>
	<table class="table table-bordered">
		<tr class="btn-info">
			<th>NO</th>
			<th>Name</th>
			<th>Image</th>
			<th>Category</th>
			<th>Price</th>	
			<th>Action</th>
		</tr>
<?php 
$sql= "SELECT * FROM product";
$result= mysqli_query($conn, $sql);
$t=0;
while ($row= mysqli_fetch_assoc($result)) {
	$t++;


 ?>
		<tr>
			<td> <?php echo $t; ?></td>
			<td><?php echo $row['p_name']; ?></td>
			<td>
				<img src="upload/<?php echo $row['img']; ?>" width="80">
				
			</td>
			
			<td><?php echo $row['p_cat']; ?></td>
			<td><?php echo $row['p_price']; ?></td>
			<td>
				<a href="del_product.php?id= <?php echo($row ['id']); ?>" 
					class="btn btn-danger" >Delete </a>
			</td>
			
		</tr>
	<?php } ?>
	</table>

	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
