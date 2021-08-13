<?php

$con=mysqli_connect("localhost:3307","root","","zeta_data");


if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$con_password=$_POST['con_password'];


	$query="INSERT INTO sign_up_page_data (name,username,password,con_password) VALUES ('$name','$username','$password','$con_password')";
	mysqli_query($con,$query);
	header('location:join_create.php');

}

?>