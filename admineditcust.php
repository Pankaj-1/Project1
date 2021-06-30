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
			if(isset($_POST["submit"])){
				if(isset($_POST['id']))
				{
					$id1=$_POST["id"];
					$_SESSION['id2']=$id1;
					$result=mysqli_query($conn,"select * from customer where id=".$id1);
					$res=mysqli_fetch_array($result);
				}
				else{
					echo "<script>alert('Please select ID button of the Customer to Edit !!!');window.location.href='admineditp.php';</script>";
				}
			}
			 
			 
			
?>



<html>
	<?php include 'headline.php'?>
		<div  class="container-fluid st">
			<div class="container" style="display:flex;">
				<?php include'headad.php'?>
					<div style="margin-top:15px;margin-left:30%;">
						<form action="adminedited1.php" method="POST">
					<table align="center"  class="table table-responsive table-hover text-primary font-weight-bolder">
                                <input type="hidden" name="current_id" value="<?php echo $id;?>"/>
                 <tr><td colspan='2'  class="text-success"align='center' style='color:#2E4372;font-size:25px;font-family:comic sans;'><h3><u>Edit Customer Details</u></h3></td></tr>
                <tr>
                    <td>Customer's Name</td>
                    <td><input type="text" name="name" value="<?php echo $res[1];?>" required=""/></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        M<input type="radio" name="gender" value="M" <?php if($res[2]=="M") echo "checked";?>/>&emsp;&emsp;
                        F<input type="radio" name="gender" value="F" <?php if($res[2]=="F") echo "checked";?>/>
                    </td>
                </tr>
                <tr>
                    <td>
                        DOB
                    </td>
                    <td>
                        <input type="date" name="dob" value="<?php echo $res[3];?>"/>
                    </td>
                </tr>
                <tr>
                    <td>Nominee</td>
                    <td><input type="text" name="nominee" value="<?php echo $res[4];?>" required=""/></td>
                </tr>
                <tr>
                    <td>Account Type</td>
                    <td>
                        <select name="account">
                            <option <?php if($res[5]=="savings") echo "selected";?>>savings</option>
                            <option <?php if($res[5]=="current") echo "selected";?>>current</option>
                        </select>
                    </td>
                </tr>
                
                                
                <tr>
                    <td>Address:</td>
                    <td><textarea name="address"><?php echo $res[6];?></textarea></td>
                </tr>
                
                    <td>Mobile</td>
                    <td><input type="text" name="mobile" value="<?php echo $res[7];?>" required=""/></td>
                </tr>

                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $res[8];?>" required=""/></td>
                </tr>
                
                <tr>
                    <td colspan="2" align='center' style='padding-top:20px'><input type="submit" name="submit1" value="UPDATE DATA" class='addstaff_button btn btn-primary'/></td>
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