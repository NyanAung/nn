

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
<link rel="stylesheet" type="text/css" href="Assignment/style.css">
</head>
<body> 
	<!-- container -->
	<div class="main-wrap">
	<h1>Delievery Service</h1>
		<h2>When will my order arrive?</h2>
<p>&emsp;We use either Parcelforce, Hermes or Panther to deliver all of our orders in Yangon and internationally dependent on service selected. If you have provided us with a mobile number then the Courier will send you an SMS (text) message on the day that your delivery is due, orders shipped via Royal Mail will not have this facility. A shipping confirmation email will advise on which courier service has been allocated.</p>

<p>&emsp;If you have selected Next Day, Named Day or Saturday delivery, please make sure that you are at home to receive your order as a signature as proof of delivery is required. Orders shipped via Royal Mail will not require a signature.</p>

<h2>Delayed orders</h2>
<p>&emsp;Our delivery commitment is subject to the product(s) that you ordered being in stock and us taking successful payment. Don’t worry, if we cannot ship to you right away, we will be in touch.</p>

<h2>Note:</h2>
<p>You can have have free delivery service about <u>over 60000Ks</u> of your buying charges and <u>nearly Yangon.</u></p>
</div>
	</div>
	<h1 align="center"> Hot Items</h1>


<div class="container-fluid">
	
	<div class="row">

		<?php 
$sql= "SELECT * FROM product";
$result = mysqli_query($conn,$sql);
while ($record= mysqli_fetch_assoc($result)) {

		 ?>
		
			<div class="card">
				
			<div class="mybook col-md-4"  >
	<img src="upload/<?php echo $record['img']; ?>"  class="hvr-grow" height="300">
				
					
				<div class="card-body" >
					<h3> <?php echo $record['p_name']; ?></h3>
					<i>Price: <?php echo $record['p_price']; ?></i>--
					<i> Category: <?php echo $record['p_cat']; ?></i>
					<hr>
					<p style="height: 30px;"><?php echo substr($record['p_desc'], 0,80); ?></p>
				</div>
				<div class="card-footer">
					<a href="BookDetails.php?id=<?php echo $record['id']; ?>" class="btn btn-info"> View Detail</a>
				</div>
				<br>
<br>

			</div>
		</div>

	<?php } ?>


	</div>
	
</body>
</html>
<?php 
	myFooter();
 ?>