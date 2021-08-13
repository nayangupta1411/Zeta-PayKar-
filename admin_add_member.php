<?php
define('Zeta',true);
include('header.php');
?>
<link rel="stylesheet" type="text/css" href="css/admin_page___css.css">
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
				<div ><button class="container-fluid pt-1 mt-5 detail"  onclick="window.location.href='admin_details.php'">Details</button></div>
				<div ><button class="container-fluid pt-1 mt-4 detail" onclick="window.location.href='admin_announce.php'">Announcement</button></div>
				<div ><button class="container-fluid pt-1 mt-4 mb-5 detail" onclick="window.location.href='admin_add_member.php'">Add Member</button></div>
			</div>
		</div>
		
		<div class="container-fluid col-lg-9 ">
			<div class="container-fluid pt-4 pb-2 head_name">
				Family Group
			</div>
			<div style="text-align: center;">Add Member</div>

			<form method="POST" action="add_member_data.php" autocomplete="off">
			<div class="container-fluid pt-5 pb-4 col-lg-9 ">
				<div class="container-fluid pt-3 pb-2 name">
					Name
				</div>
				<div>
					<input type="text" name="name" class='input_1 py-2' placeholder="name">
				</div>
				<div class="container-fluid pt-3 pb-2 name">
					Monthly Expenses
				</div>
				<div>
					<input type="text" name="expenses" class='input_1 py-2 mb-5' placeholder="monthly expenses">
				</div>
			</div>
		  
          <div class="container-fluid mt-5 pb-5 butt">
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn1" >Add</button>
          </div>
        </form>
			
		</div>
		
	</div>
	
</div>
<?php
include('footer.php');
?>