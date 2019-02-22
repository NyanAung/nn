<?php 
require 'auth.php';
$id= $_GET['id'];
$sql= "DELETE FROM category WHERE cat_id = $id";
mysqli_query($conn,$sql);


header('location:category.php');


 ?>