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
				<div ><button class="container-fluid pt-1 mt-4 detail"  onclick="window.location.href='admin_announce.php'">Announcement</button></div>
				<div ><button  class="container-fluid pt-1 mt-4 mb-5 detail" onclick="window.location.href='admin_add_member.php'">Add Member</button></div>
			</div>
		</div>
		
		<div class="container-fluid col-lg-9 ">
			<div class="container-fluid pt-4 pb-2 head_name">
			   Family Group
			</div>
			<div class="pt-4" style="text-align: center;">Member</div>
			
			<div class="container-fluid pt-5 pb-5 inform_2">
				
				<table  border="1px"  cellspacing="10%" width="100%"  >
					<tr>
						<th>S. No.</th>
						<th>Name</th>
						<th>Expenses</th>
						<th>Debit</th>
						<th>Check</th>
					</tr>
					 <?php
           require "add_member_data.php" ;

           $query="SELECT * FROM add_member";
           $query_run=mysqli_query($con,$query);



           	while($row = mysqli_fetch_assoc($query_run)){
           		?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['expenses']; ?> ₹</td>
						<td><button class="btnn py-1 px-4 m-2" onclick="window.location.href='send_money.php'">Send</button></td>
						<td><button class="btnn py-1 px-4" onclick="window.location.href='admin_check.php'">Detail</button></td>
					</tr>
					
					
           <?php 
       }

       ?>
				</table>
			</div>
		</div>
		
	</div>
	
</div>


<?php
include('footer.php');
?>