<?php
define('Zeta',true);
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/user_page__css.css">
<div class="container-fluid ">
	<div class="row">
		<div class="container-fluid col-lg-3  inform">
			<div class="container pt-5 mt-2 pic">
				<div class="avatar" style="background-image: url(photo/1_.png);">
					<div class="pt-2">
						<div class="pt-4">
							<div class="pt-5">
								<div class="avatar1">
									<button class="bb pt-2">Upload</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid col-lg-10 pt-1 ">
				<div ><button class="container-fluid pt-1 mt-5 detail" onclick="window.location.href='user_details.php'">Details</button></div>
				<div ><button class="container-fluid pt-1 mt-4 detail" onclick="window.location.href='admin_check.php'">History</button></div>
				<div ><button class="container-fluid pt-1 mt-4 mb-5 detail" onclick="window.location.href='add_account.php'">Add Account</button></div>
			</div>
		</div>
		
		<div class="container-fluid col-lg-9 ">
			<div class="container-fluid pt-5 pb-2 head_name">
				Family Group
			</div>
			<div class="pt-4" style="text-align: center;">Details</div>
			<div class="container-fluid pt-5  col-lg-9 ">
				<div class="row">
					<div class="container-fluid col-lg-4 topic">
						<h4><b>Name</b></h4>
					</div>
					<div class="container-fluid col-lg-1">
						<h4>:</h4>
					</div>
					<div class="container-fluid col-lg-4">
						<h4>Kata</h4>
					</div>
				</div>

				<div class="row pt-2">
					<div class="container-fluid col-lg-4 topic">
						<h4><b>Group Name</b></h4>
					</div>
					<div class="container-fluid col-lg-1">
						<h4>:</h4>
					</div>
					<div class="container-fluid col-lg-4">
						<h4>Family Group</h4>
					</div>
				</div>

				<div class="row pt-2">
					<div class="container-fluid col-lg-4 topic">
						<h4><b>Admin Name</b></h4>
					</div>
					<div class="container-fluid col-lg-1">
						<h4>:</h4>
					</div>
					<div class="container-fluid col-lg-4">
						<h4>Nayan Gupta</h4>
					</div>
				</div>

				<div class="row pt-2">
					<div class="container-fluid col-lg-4 topic">
						<h4><b>Password</b></h4>
					</div>
					<div class="container-fluid col-lg-1">
						<h4>:</h4>
					</div>
					<div class="container-fluid col-lg-4">
						<h4>343151</h4>
					</div>
				</div>
				
			</div>
		  
          <div class="container pb-5 butt1">
          	<div class="container ">
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn1" >Edit</button>
          </div>
          </div>
      
			
		</div>
		
	</div>
	
</div>
<?php
include('footer.php');
?>