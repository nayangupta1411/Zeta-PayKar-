<?php
define('Zeta',true);
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/send_money.css">

<div class="container-fluid  body">
	<div class="pt-4  add">
		<div class="avatar" style="background-image: url(photo/3.jpg);">
          
        </div>
	</div>
	<div class="container-fluid pt-5 col-lg-10">
    <h1><b style="color:white;">Family Member</b></h1>
  </div>

  <div class="container-fluid pt-3 pb-3 col-lg-7">
    <div>
      
     <input type="text" name="pincode" id='pin' class='input_ py-2' placeholder="Enter Amount (in ₹)" required>
     </div>
  </div>

			<div class='container pt-5 pb-5 mt-4 col-lg-10 buton'>
        
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn" >Send</button>
       
        </div>
      </div>
</div>
</body>
<?php
include('footer.php');
?>