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

	
<link rel="stylesheet" type="text/css" href="hover/css/hover.css">
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
<h1 align="center"> Our Products</h1>



	<div class="container-fluid">
		
			<div class="col-md-4">
				<h4 class="bg-warning p-3">Category</h4>
				<ul class="list-group">
					<?php 
$s = "SELECT * FROM category";
				$rs = mysqli_query($conn,$s);

				while ( $rr = mysqli_fetch_assoc($rs)) {
					

					echo "<li class='list-group-item'>
						<a href='book.php?cat=$rr[cat_name]'> $rr[cat_name] </a> 
					</li>";
					
				
				?>
				</ul>
			<?php } ?>
				
			</div>
				<div class=" mybook col-md-8 " >
					
					<?php 

// $result = mysqli_query($conn,$sql);
// while ($record= mysqli_fetch_assoc($result)) {
$res = mysqli_query($conn,$sql);
	
	while ($r = mysqli_fetch_assoc($res)) {
	
	
		 ?> 
		
		
			<div class="card">
				
			<div class=" col-md-4"  >
	<img src="upload/<?php echo $r['img']; ?>"  class="hvr-grow" height="300">
				
					
				<div class="card-body" >
					<h3> <?php echo $r['p_name']; ?></h3>
					<i>Price: <?php echo $r['p_price']; ?></i>--
					<i> Category: <?php echo $r['p_cat']; ?></i>
					<hr>
					<p style="height: 30px;"><?php echo substr($r['p_desc'], 0,80); ?></p>
				</div>
				<div class="card-footer">
					<a href="BookDetails.php?id=<?php echo $r['id']; ?>" class="btn btn-info"> View Detail</a>
				</div>

			</div>

		</div>


<?php } ?>
	</div> 

	
</div>
	

	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>

</body>
<?php 

myFooter();
	 ?>
</html>