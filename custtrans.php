<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	


<?php
        $id2=$_SESSION["key"];
        
        $conn=mysqli_connect("localhost","root","","pan");				  
		if(!$conn){
					echo "Connection failed";};	
        $sql="SELECT * FROM beneficiary1 WHERE senderid='$id2' AND status='ACTIVE'";
       
		if(!mysqli_query($conn,$sql)){
					echo "<script>alert('NO Beneficiary Added to Transfer !!!');window.location.href='custdash.php';</script>";
				}
				else	{
					$result=mysqli_query($conn,$sql);
					$res=mysqli_fetch_array($result);
					$sid=$res[1];              
?>

<html>
	<?php include 'headline.php' ?>
		<div  class="container-fluid st" >
			<div class="container" style="display:flex;">
					<?php include 'headline1.php' ?>
				<div class="container cus" >
					<?php include 'headline2.php' ?>
					<div style="margin-top:5%;padding-left:13%;">
						 <?php       
							if($id2==$sid)    
							{
							echo "<form action='custtranspro.php' method='POST'>";
							echo "<table align='center' class='table table-hover text-primary font-weight-bolder'>";
							echo "<tr><td>Select Beneficiary:</td><td> <select name='transfer'>" ; 
							
							$sql1="SELECT * FROM beneficiary1 WHERE senderid='$senderid' AND status='ACTIVE'";
							$result=mysqli_query($conn,$sql);
									
							while($res=mysqli_fetch_array($result)) {
							echo "<option value='$res[3]'>$res[4]</option>";
							}
						  
							echo "</td></tr></select>";
							 
							echo "<tr><td>Enter Amount: </td><td><input type='number' name='t_val' required></td></table>";
							
							echo "<table align='center'><tr><td style='padding:5px;'><input type='submit' name='submit' value='Transfer' class='btn btn-primary'></td></tr></table></form>"; 
							}
							else{
								echo "<br><br><div class='head text-primary text-center'><h3> SORRY No Benefeciary Added with your account.</h3></div>";
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footline.php' ?>
	</body>
</html>
<?php }?>