<?php

$con=mysqli_connect("localhost:3307","root","","zeta_data");


if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$expenses=$_POST['expenses'];
 
	$query="INSERT INTO add_member (name,expenses) VALUES ('$name','$expenses')";

	mysqli_query($con,$query);
	header('location:admin_page.php');

}

?>