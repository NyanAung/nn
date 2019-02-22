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

	<h1 align="center">Add New Product</h1>



<div class="container-fluid">
	
	<div class="row ">

		<div class="col-md-8 offset-2 bg-warning">
			<?php 

			if (isset($_POST['add'])) {
			

			$name = strip_tags($_POST['name']);
			$price =strip_tags($_POST['price']);
			$cat = strip_tags($_POST['cat']);
			$desc = strip_tags($_POST['desc']);

			$img_name= $_FILES['img']['name'];
			$img_tmp= $_FILES['img']['tmp_name'];

			if($name== ''){
				$nameer= 'Please add product name';

}
			if($price== ''){
			$priceer= 'Please add Product Price';
			}
			if($cat== ''){
				$cater= 'Please Select Product Category';
			}
			if($desc== ''){
				$deser= 'Please Add Product Description';
			 
			}
			if($img_name== ''){
				$imger= 'Please Add Product Image';
			}

if( $name != '' && $price != '' && $cat != '' && $desc != '' && $img_name != '' ){
	$sql= "INSERT INTO product (p_name, p_price, p_cat, img , p_desc) VALUES
	('$name' , '$price' , '$cat', '$img_name', '$desc')";
	mysqli_query($conn,$sql);
	move_uploaded_file($img_tmp, "upload/$img_name");
}

}






			?>
			<form method="post" action="" enctype="multipart/form-data">
<div class="form-group">
	
	<label>Product Name</label>
	<input type="text" name="name" class="form-control">
	<span class="text-danger"><?php if (isset($nameer)) {echo $nameer;
		
	} ?></span>

</div>
<div class="form-group">
	
	<label>Product Price</label>
	<input type="text" name="price" class="form-control">
	<span class="text-danger"><?php if (isset($priceer)) {echo $priceer;
		
	} ?></span>
</div>
<div class="form-group">
	
	<label>Product Category</label>
	
	<span class="text-danger"><?php if (isset($cater)) { echo $cater; } ?></span>
	<select class="form-control" name="cat">	
	<option value="">-</option>

<?php 
	$sql= "SELECT * FROM category";
	$res = mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_assoc($res)) {

	 ?>

	<option value=" <?php echo $row['cat_name']; ?>">
		<?php echo $row['cat_name']; ?>

	</option>
<?php } ?>

	
	
	
</select>
	
</div>
<div class="form-group">
	<label>Product Image</label>
	<span class="text-danger"><?php if (isset($imger)) {echo $imger;
		
	} ?></span>
	<input type="file" name="img" class="form-control">
</div>
<div class="form-group">
	<label>Product Description</label>
	<textarea name="desc" class="form-control" rows="6"></textarea>
	<span class="text-danger"><?php if (isset($deser)) {echo $deser;
		
	} ?></span>
</div>
<div class="form-group">
	
	<button class="btn btn-outline-primary" name="add">Add New</button>
	
</div>
	</div>
	</form>

	</div>
</div>
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
