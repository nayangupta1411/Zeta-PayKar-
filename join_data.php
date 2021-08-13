<?php

$con=mysqli_connect('localhost:3307','root','','zeta_data');

if(isset($_POST['submit'])){

	
	$confirm=$_POST['confirm'];
	

	$query="SELECT * FROM create_data WHERE confirm='$confirm'";
    $result=mysqli_query($con,$query);
    if($result){

    	while($row=mysqli_fetch_assoc($result)){
    		$id=$row["id"];
    		$confirm=$row["confirm"];
    		session_start();
    		$_SESSION['id']=$id;
    		$_SESSION['confirm']=$confirm;
    	}
    	header('location:user_page.php');
    }
	else{
		echo "<script> alert('Wrong Join ID'); window.location='join_create.php' </script>";
		

	}

}
?>