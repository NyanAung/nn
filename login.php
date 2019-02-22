<?php 
session_start();
$conn = mysqli_connect('localhost','root','','assignment');

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>

<?php 
if(isset($_POST['login']))	{

	$name = strip_tags($_POST['name']);//abc
	$pass = strip_tags($_POST['pass']);//123

if ($name == '' || $pass == '' ) {
	$msg = "Please Add Both Field";
}else{

$sql = "SELECT * FROM admin WHERE username = '$name' AND password ='$pass'";

$rseult = mysqli_query($conn,$sql);

$record = mysqli_num_rows($rseult);

if ($record >= 0) {
	$_SESSION['admin'] = '1234';
	header("location: index.php");
}else{
	$msg = "Wrong Data";
}
}
}

?>

<div class="container">
		
		<div class="row">
			<div class="col-md-6 offset-md-3 border border-primary mt-5">
				<form method="post" action="">
					
					<h2 class="mt-5 text-white bg-info p-3">Admin Login</h2>
<p class="text-danger">	<?php  if(isset($msg)) { echo $msg; } ?></p>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="name" class="form-control">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" name="pass" class="form-control">
					</div>

					<div class="form-group">
						
						<input type="submit" name="login" class="btn btn-outline-info" value="Login Here">
					</div>
				</form>
			</div>
		</div>
	</div>


    <script src="js/jquery.js"></script>
	<script src="js/popper.js"></script>
	<script src="js/bootstrap.min.js"></script>



</body>
</html>