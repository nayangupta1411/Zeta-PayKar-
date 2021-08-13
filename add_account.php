<?php
define('Zeta',true);
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/add_acc.css">

<div class="container-fluid col-lg-12 body">
	<div class="pt-4 pl-5 add">
		Add Bank Account
	</div>
	<div class="container-fluid pt-5 col-lg-10">
		<div class="row">
            <div class="container col-lg-4">
          <lable><p><lable class='subject '>Bank Name</lable>
            </div>
            <div class="container col-lg-6">
           <input type="text" name="pincode" id='pin' class='input_ p-2' placeholder="Bank Name" required></p></lable>
           </div>
           </div>
         
           <div class="row pt-2">
            <div class="container col-lg-4">
          <lable><p><lable class='subject'>Account Number</lable>
           </div>
           <div class="container col-lg-6">
           <input type="text" name="housing" id='hou' class='input_ p-2' placeholder="Account Number"  required></p></lable>
           </div>
          </div>

          <div class="row pt-2">
            <div class="container col-lg-4">
          <lable><p><lable class='subject'>Confirmed Account Number</lable>
           </div>
           <div class="container col-lg-6">
           <input type="text" name="housing" id='hou' class='input_ p-2' placeholder="Confirmed Account Number"  required></p></lable>
           </div>
          </div>

          <div class="row pt-2">
            <div class="container col-lg-4">
          <lable><p><lable class='subject'>Account Holder Name</lable>
           </div>
           <div class="container col-lg-6">
           <input type="text" name="housing" id='hou' class='input_ p-2' placeholder="Account Holder Name"  required></p></lable>
           </div>
          </div>

          <div class="row pt-2">
            <div class="container col-lg-4">
          <lable><p><lable class='subject'>IFSC Code</lable>
           </div>
           <div class="container col-lg-6">
           <input type="text" name="housing" id='hou' class='input_ p-2' placeholder="IFSC Code"  required></p></lable>
           </div>
          </div>
         
	</div>

	<div class='container pt-3 pb-5 buton'>
        
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn" >Add Account</button>
       
        </div>
      </div>
</div>
</body>
<?php
include('footer.php');
?>