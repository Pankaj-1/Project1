<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./admin.php');
}
?>
<html>
	<?php include 'headline.php'?>
		<div class="container-fluid adash" >
			<div class="container" style="display:flex;">
			<?php include'headad.php'?>
					<div class="container">
						<div class="adash1">
							<div class="text-warning adash3">
								<label class="text-success font-weight-bolder adash5">STAFF</label>
								<ul class="font-weight-bolder">
									<li><a href="adminaddstaff.php">Add Staff member</a></li>
									<li><a href="adminedits.php">Edit Staff member</a></li>
									<li><a href="admindelstaff.php">Delete Staff member</a></li>
								</ul>
							</div>
							
						</div>
						
						<div class="adash1">
							<div  class="text-warning adash3" >
								<label class="text-center text-success font-weight-bolder adash5" >CUSTOMER</label>
								<ul class="font-weight-bolder">
									<li><a href="adminaddcust.php">Add Customer</a></li>
									<li><a href="admineditp.php">Edit Customer</a></li>
									<li><a href="admindelcust.php">Delete Customer</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include'footline.php' ?>
	</body>
</html>