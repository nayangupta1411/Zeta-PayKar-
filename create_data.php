<?php

$con=mysqli_connect("localhost:3307","root","","zeta_data");


if(isset($_POST['submitt'])){

	$groupp=$_POST['groupp'];
	$admin=$_POST['admin'];
	$createe=$_POST['createe'];
	$confirm=$_POST['confirm'];
   
   $dup=mysqli_query($con,"SELECT * FROM create_data WHERE createe='$createe' AND confirm='$confirm'");
   if(mysqli_num_rows($dup)>0){
   	echo "<script> alert('this password is already exit'); window.location='index.php' </script>";
   }
   else{
	$query="INSERT INTO create_data (groupp,admin,createe,confirm) VALUES ('$groupp','$admin','$createe','$confirm')";

	mysqli_query($con,$query);
	header('location:admin_page.php');
}
}

?>