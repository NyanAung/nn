<?php 
	function navBar($gg) {
		
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="animate.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="hover/css/hover.css" media="all">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js" integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9" crossorigin="anonymous"></script>
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" media="all">
	
</head>
<body>
	<div class="header">
		<!-- Navigation Bar -->
		<div  class="nav navbar navbar-expand-md  fixed-top sticky-top ">
			<div class="headerRow col-md-12">
				<div class="mylogo col-md-6">
					<a href="index.php" class="hvr-wobble-skew">
						<div class="logo animated fadeInDown">GG Book Center</div>
					</a>
				</div>
				<div class="nav col-md-6 fixed-top ">
					<ul  class="list-inline text-right">
						<li>
							<a href="index1.php" class="hvr-icon-fade hvr-icon-pop">
								<i class="fa fa-home hvr-icon"></i> Home 
							</a>
						</li>
						<li>
							<a href="about.php" class="hvr-icon-fade hvr-icon-pop">
								<i class="fa fa-user hvr-icon"></i> About 
							</a>
						</li>
						<li>
							<a href="book.php" class="hvr-icon-fade hvr-icon-pop">
								<i class="fa fa-book hvr-icon"></i> Book 
							</a>
						</li>
						<li>
							<a href="contact.php" class="hvr-icon-fade hvr-icon-pop">
								<i class="fa fa-location-arrow hvr-icon"></i> Contact 
							</a>
						</li>
						<li>
							<a href="index.php" class="hvr-icon-fade hvr-icon-pop">
								<i class="fa fa-sign-in-alt hvr-icon "></i> Log in 
							</a>
						</li>
						
					</ul>
				</div>
			</div>	
		</div>
	</div>
<?php 
	}
	function myFooter() {
?>


	<div class="social">
		<a href="" class="hvr-float-shadow">
			<i class="fab fa-facebook fa-3x"></i>
		</a>
		<a href="" class="hvr-float-shadow">
			<i class="fas fa-phone-square fa-3x"></i>
		</a>
		<a href="" class="hvr-float-shadow">
			<i class="fab fa-twitter fa-3x"></i>
		</a>
	</div>

	<div class="footer">
		<div class="text-center">
			&copy; Copyright <span class="hvr-shrink">GG Book Center</span> 2018
		</div>
	</div>
	<script src="jQuery.js"></script>
</body>
</html>
<?php 
	}
 ?>