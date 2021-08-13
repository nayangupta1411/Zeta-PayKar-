<?php

$con=mysqli_connect('localhost:3307','root','','zeta_data');

if(isset($_POST['submit'])){

	
	$username=$_POST['username'];
	$password=$_POST['password'];

	$query="SELECT * FROM sign_up_page_data  WHERE Username='$username' AND Password='$password'";
    $result=mysqli_query($con,$query);
    if($result){

    	while($row=mysqli_fetch_assoc($result)){
    		$id=$row["id"];
    		$username=$row["username"];
    		session_start();
    		$_SESSION['id']=$id;
    		$_SESSION['username']=$username;
    	}
    	header('location:join_create.php');
    }
	else{
		echo "<script> alert('Wrong Email ID and password'); window.location='index.php' </script>";
		

	}

}


?>