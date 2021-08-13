<?php
define('Zeta',true);
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/main_csss.css">
<div class="container-fluid">
  <div class="row">
    <div class="container-fluid col-lg-6 pt-5 ">
      <div class="left">
        <h3><b style="color:#8D67A9; text-decoration: underline;" >Login</b></h3>
      </div>
      
      <!-- login -->
      <form name='submitform' method="POST" action="login_index_data.php" value="refresh" autocomplete="off" >
        <div class='container mt-4 pt-5  col-lg-11 col-sm-12 col-md-12 form'>
          
          <div class='container col-lg-12 col-md-9 col-sm-12   content'>
            
            <div class="row">
              <div class="container col-lg-4">
                <lable><p><lable class='subject '>Username<sup style="color:#ED7D31">*</sup> </lable>
                </div>
                <div class="container col-lg-6">
                <input type="text" name="username" id='use' class='input_' placeholder="Username" required></p></lable>
              </div>
            </div>
            
            <div class="row pt-2">
              <div class="container col-lg-4">
                <lable><p><lable class='subject'>Password<sup style="color:#ED7D31">*</sup> </lable>
                </div>
                <div class="container col-lg-6">
                <input type="password" name="password" id='pas' class='input_' placeholder="password" minlength="8" required></p></lable>
              </div>
            </div>
            
            
          </div>
          <!-- submit button -->
          <div class='container pt-5 pb-4'>
           
              <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn" >Login</button>
           
          </div>
        </div>
      </form>
      
    
    </div>
    <div class="container-fluid col-lg-6 pt-5">
      <div class="left">
        <h3><b style="color:#5F76D3; text-decoration: underline;">Sign Up</b></h3>
      </div>

      <!-- sign up -->
      <form name='submitform' method="POST" action="signup_index_data.php" value="refresh" autocomplete="off" >
        <div class='container mt-4 pt-5  col-lg-11 col-sm-12 col-md-12 form'>
          
          <div class='container col-lg-12 col-md-9 col-sm-12   content'>
            
            <div class="row">
              <div class="container col-lg-6">
                <lable><p><lable class='subject1 '>Name<sup style="color:#ED7D31">*</sup> </lable>
                </div>
                <div class="container col-lg-6">
                <input type="text" name="name" id='name' class='input_1' placeholder="name" required></p></lable>
              </div>
            </div>
            
            <div class="row pt-2">
              <div class="container col-lg-6">
                <lable><p><lable class='subject1'>Username<sup style="color:#ED7D31">*</sup> </lable>
                </div>
                <div class="container col-lg-6">
                <input type="text" name="username" id='user' class='input_1' placeholder="Username"  required></p></lable>
              </div>
            </div>
            <div class="row pt-2">
              <div class="container col-lg-6">
                <lable><p><lable class='subject1'>Password<sup style="color:#ED7D31">*</sup> </lable>
                </div>
                <div class="container col-lg-6">
                <input type="password" name="password" id='pass' class='input_1' placeholder="password" pattern="/^(([^<>()\[\]\.,;:\s@']+(\.[^<>()\[\]\.,;:\s@']+)*)|('.+'))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i" minlength="8" required></p></lable>
              </div>
            </div>
            <div class="row pt-2">
              <div class="container col-lg-6">
                <lable><p><lable class='subject1'>Confirmed Password<sup style="color:#ED7D31">*</sup> </lable>
                </div>
                <div class="container col-lg-6">
                <input type="password" name="con_password" id='con' class='input_1' placeholder="confirmed password"  required></p></lable>
              </div>
            </div>
            
            
          </div>
          <!-- submit button -->
          <div class='container pt-5 pb-5'>
            
            <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn1" >Sign Up</button>
            
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