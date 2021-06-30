<?php

session_start();

if(!isset($_SESSION['user']))
{
	header('location:./admin.php');
}

?>
<?php

			$conn=mysqli_connect("localhost","root","","pan");
			if(!$conn)
			{echo "Connection failed";}
			if(isset($_POST["submit"]) ){
				if(isset($_POST['id']))
				{
					$id1=$_POST["id"];
					$_SESSION['id1']=$id1;
					$result=mysqli_query($conn,"select * from staff where id=".$id1);
					$res=mysqli_fetch_array($result);
				}
				else{
					echo "<script>alert('Please select ID button of the Staff to Edit !!!');window.location.href='adminedits.php';</script>";
				}
			}
?>
<html>
<?php include 'headline.php'?>
		<div class="container-fluid st">			
				<div class="container" style="display:flex;">	
				<?php include'headad.php'?>
					<div style="margin-top:15px;">
						<form action="adminedited.php" method="POST">
						 <table  class="table table-hover text-primary table-responsive font-weight-bolder" style="padding-left:200px;">
								<thead>
									<tr><td colspan='2' class="text-success"align='center' style='color:#2E4372;font-size:25px;font-family:comic sans;'><h5><u>UPDATE STAFF</u></h5></td></tr>
									<tr>
								</thead>
								<td scope="col"> Staff's name</td>
								<td><input type="text" name="name" value="<?php echo $res[1];?>" required=""/></td>
							</tr>
							<tr>
								<td scope="col">Gender</td>
								<td>
									M&ensp;<input type="radio" name="gender" value="M"  <?php if($res[2]=="M") echo 'checked';?>/>
									&emsp;F&ensp;<input type="radio" name="gender" value="F" <?php if($res[2]=="F") echo 'checked';?> />
								</td>
							</tr>
							<tr>
								<td scope="col">
									DOB
								</td>
								<td>
									<input type="date" name="dob" value="<?php echo $res[3];?>" required=""/>
								</td>
							</tr>
						   
							<tr>
								<td scope="col">Relationship</td>
								<td>
									<select name="status" >
										<option <?php if($res[4]=="unmarried") echo "selected";?>>unmarried</option>
										<option <?php if($res[4]=="married") echo "selected";?>>married</option>
										<option <?php if($res[4]=="divorced") echo "selected";?>>divorced</option>
									</select>
								</td>
							</tr>
							<tr>
								<td scope="col">Department</td>
								<td>
									<select name="dept">
										<option <?php if($res[5]=="revenue") echo "selected";?>>revenue</option>
										<option <?php if($res[5]=="developer") echo "selected";?>>developer</option>
									</select>
								</td>
							</tr>
							<tr>
								<td scope="col">
									DOJ
								</td>
								<td>
									<input type="date" name="doj" value="<?php echo $res[6];?>" required=""/>
								</td>
							</tr>
							
							<tr>
								<td scope="col">Address:</td>
								<td><textarea name="address" required=""><?php echo $res[7];?></textarea></td>
							</tr>
							<tr>
								<td scope="col">Mobile</td>
								<td><input type="text" name="mobile" value="<?php echo $res[8];?>" required=""/></td>
							</tr>

							<tr>
								<td scope="col">Email id</td>
								<td><input type="email" name="email" value="<?php echo $res[9];?>" required=""/></td>
							</tr>
						.
							<tr >
								<td colspan="2" align='center' style='padding-top:20px' ><input type="submit" name="submit1" value="UPDATE" class='btn btn-primary'/></td>
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