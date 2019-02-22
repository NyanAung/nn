<?php   require 'configg.php'; ?>
<?php 
	session_start();
	$gg = isset($_SESSION['gg']);
	require_once './support.php';
	navBar($gg);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Category</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	
 
</head> 
<body>  



	<h1 align="center" class="bg-info">Customer Checkout Page</h1>
	<div class="container-fluid">

	<div class="row">
		
				
		<div class="col-md-6 offset-md-3 bg-success"  >





			<?php 
if (isset($_POST['order'])) {
	$name= strip_tags($_POST['name']);
	$email= strip_tags($_POST['email']);
	$phnumber= strip_tags($_POST['phnumber']);
	$cty= strip_tags($_POST['cty']);
	$pay= strip_tags($_POST['pay']);
	$note= strip_tags($_POST['note']);
	$cart =serialize($_SESSION['cart']);


	if ($name== "") {
		$ner ="Please Add Your Name";
	}
	if ($email== "") {
		$eer ="Please Add Your Email";
	}
	if ($phnumber== "") {
		$per ="Please Add Your Ph Number";
	}
	if ($cty== "") {
		$cer ="Please Add Your Country";
	}
	if ($note== "") {
		$note ="-";
	}

$sql= "INSERT INTO c_orders
		(c_name, c_email, c_ph, c_cty, c_pay, c_note, c_cart)
	VALUES('$name', '$email', '$phnumber', '$cty', '$pay', '$note', '$cart')";

if($name!= '' && $email!= '' && $phnumber!= '' && $cty!= ''){
	$obj= mysqli_query($conn,$sql);
	if ($obj) {
		echo "<script> alert('Order Success');</script>";
	}
 }
}

			 ?>
			<form method="post">
			<div class="form-group">
				<label>Your Name</label>
				<span class="text-danger"><?php if(isset($ner)) {echo $ner; }?></span>
				<input type="text" name="name" class="form-control">
			</div>
			<div class="form-group">
				<label>Your Email</label>
<span class="text-danger"><?php if(isset($eer)) {echo $eer; }?></span>
				<input type="text" name="email" class="form-control">
			</div>
<div class="form-group">
				<label>Your Phone Number</label>
				<span class="text-danger"><?php if(isset($per)) {echo $per; }?></span>
				<input type="text" name="phnumber" class="form-control">
			</div>
<div class="form-group">
				<label>Your Country</label>
				<span class="text-danger"><?php if(isset($cer)) {echo $cer; }?></span>
				<input type="text" name="cty" class="form-control">
			</div>
			<div class="form-group">
				<label>Payment Method</label>
				<select name="pay" class="form-control">
					<option value="Cash on Delivery">Cash on Delivery</option>
					<option value="Bank Transfer">Bank Transfer</option>
					<option value="Card">Card</option>
				</select>
			</div>
			<div class="form-group">
				<label>Order Note</label>
				<textarea name="note" class="form-control" rows="8" placeholder="Your ddress or Order note here....."></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="order" value="Confrim Order" class="btn btn-block btn-danger">
			</div>
			</form>
		</div>
	</div>

	</div>
	
</div>
	<script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>


</body>
</html>
<?php 

myFooter();

 ?>
</html>