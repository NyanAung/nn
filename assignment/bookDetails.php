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





<div class="container-fluid">
	<?php 
	$id= $_GET['id'];
$sql= "SELECT * FROM product WHERE id= '$id' ";
$result = mysqli_query($conn,$sql);
while ($record= mysqli_fetch_assoc($result)) {

		 ?>
	<div class="row">
		
		<div class="col-md-4 " >
			<br>

			<img src="upload/<?php echo $record['img']; ?>" class="img-fluid" width="50%" >
		</div>

				<div class="col-md-8 h-25">
					<h3 class="p-3 m-1 text-muted"> <?php echo $record['p_name']; ?></h3>
					<i>Price: <?php echo $record['p_price']; ?></i>--
					<i> Category: <?php echo $record['p_cat']; ?></i>
					<hr>
					<p ><?php echo ($record['p_desc']); ?></p>
				
				<form method="post" action="cart.php" class="form-inline">
				<div class="form-group">
					<input type="number" name="qty" value="1" min="1" class="form-control">
					
				</div>
				<input type="hidden" name="id" value="<?php echo $record['id']; ?>">
				<div class="form-group">
					<input type="submit" name="add" value="Add To Cart" class="btn btn-info">
				</div>
				</form>
				</div>
			</div>
		</div>

	<?php } ?>
	
</div>
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
<br>
<?php 
myFooter();
 ?>
</html>