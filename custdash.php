<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>		
<?php
			$us=$_SESSION['user'];

			$conn=mysqli_connect("localhost","root","","pan");				  
				if(!$conn){
					echo "Connection failed";};	
			$sql="Select * from customer where name='$us'";
			$result = mysqli_query($conn,$sql);
			$rws=  mysqli_fetch_array($result);
                
                
                $name= $rws[1];
                $account_no= $rws[0];
                $branch=$rws[10];
                $branch_code= $rws[11];
                $last_login= $rws[12];
                $acc_status=$rws[13];
                $address=$rws[6];
                $acc_type=$rws[5];
                
                $gender=$rws[2];
                $mobile=$rws[7];
                $email=$rws[8];
				$_SESSION['key']=$account_no;
				
				
				$sql="SELECT * FROM passbook".$account_no ;
                $result1=  mysqli_query($conn,$sql);
                $rws1=  mysqli_fetch_array($result1);
				
				$sql2="select max(transactionid) from passbook".$account_no;
				$resu=mysqli_query($conn,$sql2);
				$qwe=mysqli_fetch_array($resu);
				$acc=$qwe[0];
			
	
				
				$sql1="select amount from passbook".$account_no." where transactionid=$acc";
                $resul=mysqli_query($conn,$sql1);
				$rus=mysqli_fetch_array($resul);
				$balance=$rus[0];

					
					
					
		?>
<html>
		<?php include 'headline.php' ?>
		<div class="container-fluid st">
			<div class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus" >
					<?php include 'headline2.php' ?>
				
					<div class="container">
						<div style="border:1px solid black;border-radius:7px;margin-top:10%;margin-left:20%;">
							<div class="text-warning" style="padding:5% 10% 5% 15%;">
								
								<ul class="text-success">
									<li class="text-primary"><label class="text-dark font-weight-bolder">ACCOUNT NO&emsp; :</label><b> <?php echo $account_no; ?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Branch&emsp; &emsp;&emsp;&emsp; :</label><b> <?php echo $branch; ?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Branch Code &emsp;&ensp; :</label><b> <?php echo $branch_code; ?></b></li>
								</ul>
							</div>
							
						</div>
						
						<div style="border:1px solid black;border-radius:7px;margin-top:10%;margin-left:20%;">
							<div  class="text-warning" style="padding:5% 10% 5% 15%;">
						
								<ul class="text-success" >
									<li class="text-primary"><label class="text-dark font-weight-bolder">Balance  &emsp; &emsp; &emsp;:</label><b> <?php echo $balance; ?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Account Status&ensp;:</label><b> <?php echo $acc_status; ?></b></li>
									<li class="text-primary"><label class="text-dark font-weight-bolder">Account Created:</label><b> <?php echo $last_login; ?></b></li>	
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