
<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	
 <?php
                $cust_id=$_SESSION['key'];
               $conn=mysqli_connect("localhost","root","","pan");				  
				if(!$conn){
					echo "Connection failed";};	
			   
			   
                $sql="SELECT * FROM customer WHERE id='$cust_id'";
                $result=  mysqli_query($conn,$sql);
                $rws=  mysqli_fetch_array($result);
                
                
                $name= $rws[1];
                $account_no= $rws[0];
                $dob=$rws[3];
                $nominee=$rws[4];
                $branch=$rws[10];
                $branch_code= $rws[11];
                
                $gender=$rws[2];
                $mobile=$rws[7];
                $email=$rws[8];
                $address=$rws[6];
                
                $last_login= $rws[12];
                
                $acc_status=$rws[13];
                $acc_type=$rws[5];
                
                
                
                                
?>
<html>
	<?php include 'headline.php' ?>
		<div  class="container-fluid st" >
			<div class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus" >
							<?php include 'headline2.php' ?>			
				
					<h3 style="text-align:center;color:#2E4372;margin-top:8%;padding-left:20%;"><u>Personal Details</u></h3>
					<div class="container">
						<div style="border:1px solid black;border-radius:7px;margin-top:10%;margin-left:20%;">
							<div class="text-warning" style="margin-top:5%;padding:5% 10% 5% 15%;">
								
								<ul class="text-success">
									<li class="text-primary"><label class="text-dark font-weight-bolder">Name&emsp; :</label><b> <?php echo $name;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Gender&ensp;  :</label><b> <?php if($gender=='M') echo "Male"; else echo "Female";?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Mobile&ensp;&ensp;:</label><b> <?php echo $mobile;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">E-mail&ensp;&ensp;  :</label><b> <?php echo $email;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Address.&ensp;:</label><b> <?php echo $address;?></b></li>
								</ul>
							</div>
							
						</div>
						
						<div style="border:1px solid black;border-radius:7px;margin-top:10%;margin-left:20%;">
							<div  class="text-warning" style="margin-top:5%;padding:5% 10% 5% 15%;">
						
								<ul class="text-success" >
									<li class="text-primary"><label class="text-dark font-weight-bolder">Account No&emsp; :</label><b> <?php echo $account_no;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Nominee&emsp;&emsp; :</label><b> <?php echo $nominee;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Branch&emsp;&emsp;&emsp; :</label><b> <?php echo $branch;?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Branch Code&ensp;  :</label><b> <?php echo $branch_code;?></b></li>								
									<li class="text-primary"><label class="text-dark font-weight-bolder">Account Type&ensp;:</label><b> <?php echo $acc_type;?></b></li>
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