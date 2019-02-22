<?php 
	session_start();
	$cart = isset($_SESSION['cart']);
	require_once './support.php';
	navBar($cart);
 ?>
	<div class="mycontainer col-md-12">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<div class="text-center">
				<h1>Contact Us</h1>
			</div>
			<div class="col-md-6">
				<h1>Head Office: </h1>
				<p><p>No.289(A), Pyay Road, SanChaung Township, Yangon.<br>
		Tel : 09-450065104, 09-8628806</p><br></p>
		<br>
		<h1>Branch Office:</h1>
		<p>No 601, MICT Park, Hlaing Township, Yangon.<br>
		Tel : 09-799860630, 09-73031302</p>
			</div>
			<div class="col-md-6">
				<div class="google-maps">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.415682221312!2d96.13336241477681!3d16.805722123743028!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1eb45fceefc75%3A0xe212bff0f1a5c596!2sGUSTO+International+College!5e0!3m2!1sen!2smm!4v1531903432415" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
					
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
<?php 
myFooter();
 ?>