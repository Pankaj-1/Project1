<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./admin.php');
}
?>
<html>
	<?php include 'headline.php'?>
		<div class="container-fluid st" >
			<div class="container" style="display:flex;">
				<?php include'headad.php'?>
					<div style="margin-top:40px;">
						 <h3 style="text-align:center;color:#2E4372;"><u>Change Password</u></h3>
							<form action="changepass.php" method="POST">
								<table align="center"	class="table table-hover text-center font-weight-bolder" >
									<tr>
										<td scope="col" class=" text-primary">Enter old password:</td>
										<td scope="col"><input type="password" name="old_pass" required=""/></td>
									</tr>
									<tr>
										<td scope="col" class=" text-primary">Enter new password:</td>
										<td scope="col"><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="new_pass" required=""/></td>
									</tr>
									<tr>
										<td scope="col" class=" text-primary">Enter password again:</td>
										<td scope="col"><input type="password" name="again_pass" required=""/></td>
									</tr>
									</table>
									
									   <table align="center"><tr>
										<td scope="col"><input type="submit" name="change" value="Change Password" class="addstaff_button btn btn-danger text-white"/></td>
									</tr>
								</table>
							</form>
					</div>
				</div>
			</div>
		</div>
<?php include'footline.php' ?>
	</body>
</html>