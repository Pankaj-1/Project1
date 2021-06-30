<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	
<html>
		<?php include 'headline.php' ?>
		<div   class="container-fluid st">
			<div class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container"  style="border:1px solid black;border-radius:7px;;margin-top:3.6%;padding-bottom:10%;padding-right:10%;width:102%;">
					<?php include 'headline2.php' ?>
				
				
					<div style="margin-top:5%;padding-left:23%;">
						     <h3 style="text-align:center;color:#2E4372;"><u>Change Password</u></h3>
							<form action="changepassc.php" method="POST">
								<table class="table table-hover  text-primary font-weight-bolder "  >
									<tr >
										<td scope="col">Enter old password:</td>
										<td scope="col"><input type="password" name="old_pass" required=""/></td>
									</tr>
									<tr>
										<td scope="col">Enter new password:</td>
										<td scope="col"><input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="new_pass" required=""/></td>
									</tr>
									<tr>
										<td scope="col">Enter password again:</td>
										<td scope="col"><input type="password" name="again_pass" required=""/></td>
									</tr>
									</table>
									
									   <table align="center"><tr>
										<td scope="col"><input type="submit" name="change" value="Change Password" class=" btn btn-danger text-white"/></td>
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