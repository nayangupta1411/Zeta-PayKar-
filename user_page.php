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
			<div class="pt-4" style="text-align: center;">
				<p><b>Admin Message  :</b>&nbsp Don't waste Money.</p>
			</div>
			<div class="container-fluid col-lg-9 pt-3 inform_2">
			<div class="row">
				<div class="container-fluid col-lg-6 pb-4">
					<div class="container-fluid boxx">
						<div class="container-fluid pt-5">
							<div class="btnn3  py-4">TRANSFER <br>MONEY</div>
						</div>
						<div class="container-fluid pt-5 pb-4">
							<button class="btnn2 px-5" onclick="window.location.href='send_money.php'">Send</button>
						</div>
					</div>
				</div>
				<div class="container-fluid col-lg-6 pb-5">
					<div class="container-fluid boxx">
						<div class="container-fluid pt-5">
							<div class="btnn3  py-4">CHECK <br>BALANCE</div>
						</div>
						<div class="container-fluid pt-5 pb-4">
							<button class="btnn2 px-5">Check</button>
						</div>
					</div>
				</div>
				
			</div>
			</div>
			
		</div>
		
	</div>
	
</div>
<?php
include('footer.php');
?>