<?php

session_start();

if(!isset($_SESSION['user']))
{
	header('location:./admin.php');
}

?>


<html>
		<?php include 'headline.php'?>
		<div class="container-fluid st">
			<div class="container"style="display:flex;">
					<?php include'headad.php'?>
				
				
					<div style="margin-top:15px;">
						<form action="addc.php" method="POST">
						 <table  class="table table-hover font-weight-bolder text-primary" style="margin-left:20%;">
								<thead>
									<tr><td colspan='2' class="text-success" style='color:#2E4372;padding-left:25%;font-size:25px;font-family:lucida sans;'><h5><u>ADD CUSTOMER</u></h5></td></tr>
									<tr>
								</thead>
								<td scope="col"> Customer name</td>
								<td><input type="text" name="name" required=""/></td>
							</tr>
							<tr>
								<td scope="col">Gender</td>
								<td>
									M&ensp;<input type="radio" name="gender" value="M" checked/>
									&emsp;F&ensp;<input type="radio" name="gender" value="F" />
								</td>
							</tr>
							<tr>
								<td scope="col">
									DOB
								</td>
								<td>
									<input type="date" name="dob" required=""/>
								</td>
							</tr>
						   
							  <tr>
								<td scope="col">Nominee</td>
								<td><input type="text" name="nominee" required=""/></td>
							</tr>
							 <tr>
								<td scope="col" >
									Branch
								</td>
								<td>
									<select name="branch">
										<option>MAHARASHTRA</option>
										<option>DELHI</option>
										<option>BANGALORE</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<td scope="col">Account type</td>
								<td>
									<select name="account">
										<option>Savings</option>
										<option>Current</option>
										
									</select>
								</td>
							</tr>
							<tr>
								<td scope="col">Minimum amount</td>
								<td><input type="text" name="min" value="1000" min="1000" required=""/></td>
							</tr>
							<tr>
								<td scope="col">Address:</td>
								<td><textarea name="address" required=""></textarea></td>
							</tr>
							<tr>
								<td scope="col">Mobile</td>
								<td><input type="text" name="mobile" pattern="[0-9]{10,10}" title="Enter Valid MobNo Only" required=""/></td>
							</tr>

							<tr>
								<td scope="col">Email id</td>
								<td><input type="email" name="email" required=""/></td>
							</tr>
							<tr>
								<td scope="col">Password</td>
								<td><input type="password" name="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required=""/></td>
							</tr>
							
							<tr >
								<td colspan="2" style='padding-top:20px;padding-left:28%' ><input type="submit" name="submit" value="ADD CUSTOMER" class=' btn btn-primary'/></td>
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