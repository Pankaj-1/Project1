<?php

session_start();

if(!isset($_SESSION['user']))
{
	header('location:./admin.php');
}

?>
<html>
	<?php include 'headline.php'?>
		<div  class="container-fluid sta">
			<div class="container"style="display:flex;">
				<?php include'headad.php'?>
				
				
					<div class="container">
						<form action="adds.php" method="POST">
						 <table  class="table table-hover font-weight-bolder table-responsive text-primary font-weight-bolder" style="margin-left:20%">
								<thead>
									<tr><td colspan='2' class="text-success" style='color:#2E4372;padding-left:55%;font-size:25px;'><h5><u>ADD STAFF</u></h5></td></tr>
									<tr>
								</thead>
								<td scope="col"> Staff's Name</td>
								<td><input type="text" name="name" required=""/></td>
							</tr>
							<tr>
								<td scope="col">Gender</td>
								<td>
									M&ensp;<input type="radio" name="gender" value="M" checked/>
									&emsp;F&ensp;<input type="radio" name="staff_gender" value="F" />
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
								<td scope="col">Relationship</td>
								<td>
									<select name="status">
										<option>Unmarried</option>
										<option>Married</option>
										<option>Divorced</option>
									</select>
								</td>
							</tr>
							<tr>
								<td scope="col">Department</td>
								<td>
									<select name="dept">
										<option>Revenue</option>
										<option>Developer</option>
									</select>
								</td>
							</tr>
							<tr>
								<td scope="col">
									DOJ
								</td>
								<td>
									<input type="date" name="doj" required=""/>
								</td>
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
								<td colspan="2" style='padding-top:20px;padding-left:51%' ><input type="submit" name="add" value="ADD STAFF MEMBER" class=' btn btn-primary'/></td>
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