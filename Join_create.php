<?php
define('Zeta',true);
include('header.php');

?>
<link rel="stylesheet" type="text/css" href="css/main_csss.css">
<div class="container-fluid">
	<div class="row">
		<div class="container-fluid col-lg-6 pt-5 ">
			<div class="left">
			<h3><b style="color:#8D67A9; text-decoration: underline;" >Join</b></h3>
			</div>
			
			 <form name='submitform' method="POST" action="join_data.php" value="refresh" autocomplete="off" >
      <div class='container mt-4 pt-5  col-lg-11 col-sm-12 col-md-12 form'>
        
 <div class='container col-lg-12 col-md-9 col-sm-12   content'>
        
         <div class="left p-3">
      <h3 style="color:#8D67A9; ">Join Group</h3>
      </div>
          <div class="container col-lg-10 p-3">
            <input type="password" name="confirmm" id='jo' class='input_2' placeholder="password"  required>
          </div>
         
         
        </div>
        <!-- submit button -->
        <div class='container pt-5 pb-4'>
       
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn" >Join</button>
      
        </div>
      </div>


    </form>
    


    <!-- create -->
		</div>
		<div class="container-fluid col-lg-6 pt-5">
			<div class="left">
			<h3><b style="color:#5F76D3; text-decoration: underline;">Create</b></h3>
			</div>
			
            <form name='submitform' method="POST" action="create_data.php" value="refresh" autocomplete="off" >
      <div class='container mt-4 pt-5  col-lg-11 col-sm-12 col-md-12 form'>
        
 <div class='container col-lg-12 col-md-9 col-sm-12   content'>
        
          <div class="row">
            <div class="container col-lg-6">
          <lable><p><lable class='subject1 '>Group Name<sup style="color:#ED7D31">*</sup> </lable>
            </div>
            <div class="container col-lg-6">
           <input type="text" name="groupp" id='pin' class='input_1' placeholder="group name" required></p></lable>
           </div>
           </div>
         
           <div class="row pt-2">
            <div class="container col-lg-6">
          <lable><p><lable class='subject1'>Admin Name<sup style="color:#ED7D31">*</sup> </lable>
           </div>
           <div class="container col-lg-6">
           <input type="text" name="admin" id='hou' class='input_1' placeholder="admin name"  required></p></lable>
           </div>
          </div>

          <div class="row pt-2">
            <div class="container col-lg-6">
          <lable><p><lable class='subject1'>Create Password<sup style="color:#ED7D31">*</sup> </lable>
           </div>
           <div class="container col-lg-6">
           <input type="password" name="createe" id='pass' class='input_1' placeholder="create password"  required></p></lable>
           </div>
          </div>

          <div class="row pt-2">
            <div class="container col-lg-6">
          <lable><p><lable class='subject1'>Confirmed Password<sup style="color:#ED7D31">*</sup> </lable>
           </div>
           <div class="container col-lg-6">
           <input type="password" name="confirm" id='con' class='input_1' placeholder="confirmed password"  required></p></lable>
           </div>
          </div>
         
         
        </div>
        <!-- submit button -->
        <div class='container pt-5 pb-5'>
      
          <button name='submitt' class="pr-5 pl-5 pt-1 pb-1 btnn1" >Create</button>
      
        </div>
      </div>
		</div>
		
	</div>
</div>


 <script type="text/javascript">
  var password = document.getElementById("pass");
  var confirm_password = document.getElementById("con");
  function validatePassword(){
  if(password.value != confirm_password.value) {
  confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
  confirm_password.setCustomValidity('');
  }
  }
  password.onchange = validatePassword;
  confirm_password.onkeyup = validatePassword;
  </script>

<?php

include('footer.php');
?>