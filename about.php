<?php 
	session_start();
	$cart = isset($_SESSION['cart']);
	require_once './support.php';
	navBar($cart);
 ?>
	<div class="mycontainer col-md-12" >
		<div class="col-md-1"></div>
		<div class="col-md-10" style="border: 1px solid grey;">
			<div class="text-center">
				<h1 class="bg-primary">About US</h1>
			</div>
			<div>
			<p align="left">&emsp;No more trekking from store to store, trolling through isles and isles of brandished books to find what YOU want. Just go online and shop @ www.bigbossstarionary.com.mm
My Online Books consolidates various Books categories including Mystery, science and action within one user friendly website. Order + pay online and recieve direct dellivery. Personal service is a click away.</p>

<p align="left"><b>Aim</b> - To offer YOU an easy to use online solution for books purchasing , coupled with localized personal involvement for both the client and the community.</p>

<p align="left"><b>Mission Statement</b> - To offer an online, easy to use, cost effective, quallity guaranteed, service orientated books purchasing method for school goers, personal and small business. Locally based service and community responsibility, coupled with purchasing conveniencce are the cornerstones of our business model.</p>

<p align="left"><b>Vision</b> - To become the online books shopping portal of choice nationaly, while maintaining the locallised service offering. Creating social responsibility programmes with our customers to uplift the local communities we operate in by donating the products to educate and enhance their future.To sponsor at least 1 local underprivledged school goer with fundamental books throughout their studies.</p>
				
			</div>
		</div>
		<div class="col-md-1"></div>
	</div>
<?php 
myFooter();
 ?>