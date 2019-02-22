<?php 
require 'auth.php';
$id= strip_tags($_GET['id']);
$sql= "DELETE FROM product WHERE id = $id";
mysqli_query($conn,$sql);


header('location:product.php');


 ?>