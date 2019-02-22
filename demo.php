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

<?php 
if (isset($_GET['cat'])) {
	$cat = $_GET['cat'];

	$sql = " SELECT * FROM product WHERE p_cat = ' $cat' ";
}else{
	$sql = " SELECT * FROM product ";
}

?>	

	<?php require 'navbar.php';?>

	<div class="container-fluid">
	<div class="row">

		<div class="col-md-4">
			<ul>
			<?php 

				$s = "SELECT * FROM category";
				$rs = mysqli_query($conn,$s);

				while ( $rr = mysqli_fetch_assoc($rs)) {
					echo "<li> <a href='demo.php?cat=$rr[cat_name]'> $rr[cat_name] </a> </li>";
				}

			 ?>
			 </ul>

		</div>
		<div class="col-md-8">
			
	<?php $res = mysqli_query($conn,$sql);
	
	while ($r = mysqli_fetch_assoc($res)) {
		echo $r['p_name']."<br/>";
	}

	?>		


		</div>

	 </div>

	 </div>

	
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
