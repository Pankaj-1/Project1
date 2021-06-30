<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./staff.php');
}
?>	
<?php
				$id1=$_SESSION['user'];
                
				$conn=mysqli_connect("localhost","root","","pan");				  
				if(!$conn){
					echo "Connection failed";};	
                $sql="SELECT * FROM staff WHERE name='$id1'";
                $result=mysqli_query($conn,$sql);
                $res= mysqli_fetch_array($result);
                
                $id=$res[0];
                $name=$res[1];
                $dob=$res[3];
                $department=$res[5];
                $doj=$res[6];
                $mobile=$res[8];
                $email=$res[9];
                $gender=$res[2];
                $lastlogin=$res[11];
				$_SESSION['key']=$id;
				
?>


<html>
	<?php include 'headline.php' ?>
		<div class="container-fluid st">
			<div class="container" style="display:flex;">
				<?php include 'head1.php' ?>
					
						<div class="container">
						<div style="border:1px solid black;border-radius:7px;margin-top:10%;margin-left:20%;">
							<div class="text-warning" style="padding:5% 10% 5% 15%;">
								<label class="text-success font-weight-bolder" style="padding-left:35%;font-size:24px;">Personal Info</label>
								<ul class="text-success" style="font-size:18px;">
									<li class="text-primary"><label class="text-dark font-weight-bolder abc">Name :</label><b> <?php echo $name;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder abc">DOB&emsp;:</label><b> <?php echo $dob;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder abc">E-mail :</label><b> <?php echo $email;?></b></li>
								</ul>
							</div>
							
						</div>
						
						<div style="border:1px solid black;border-radius:7px;margin-top:10%;margin-left:20%;">
							<div  class="text-warning" style="padding:5% 10% 5% 15%;">
								<label class="font-weight-bolder text-success" style="padding-left:40%;font-size:24px;">Activity</label>
								<ul class="text-success" style="font-size:18px;">
									<li class="text-primary"><label class="text-dark font-weight-bolder abc">DOJ&emsp;&emsp;&ensp; :</label><b> <?php echo $doj;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder abc">Account Created:</label><b><?php echo $lastlogin;?></b></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footline.php' ?>
		</body>
</html>
