<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./staff.php');
}
?>	

<html>
	<?php include 'headline.php' ?>
		<div class="container-fluid st">
			<div class="container"style="display:flex;">
				<?php include 'nhead1.php' ?>				
				
					<div style="margin-top:15%;padding-left:23%;">
						     <h3 style="text-align:center;color:#2E4372;"><u>Change Password</u></h3>
							<form action="changepasss.php" method="POST">
								<table align="center"	class="table table-hover text-center font-weight-bolder text-primary" style="font-size:20px;">
									<tr>
										<td scope="col">Enter old password:</td>
										<td scope="col"><input type="password" name="old_password" required=""/></td>
									</tr>
									<tr>
										<td scope="col">Enter new password:</td>
										<td scope="col"><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="new_password" required=""/></td>
									</tr>
									<tr>
										<td scope="col">Enter password again:</td>
										<td scope="col"><input type="password" name="again_password" required=""/></td>
									</tr>
									</table>
									
									   <table align="center"><tr>
										<td scope="col"><input type="submit" name="change_password" value="Change Password" class="btn btn-danger text-white"/></td>
									</tr>
								</table>
							</form>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footline.php' ?>
	</body>
</html>