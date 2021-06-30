<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
$conn=mysqli_connect("localhost","root","","pan");				  
			if(!$conn){
					echo "Connection failed";};	
     
        $sender_id=$_SESSION["user"];
        $sql1="CREATE TABLE IF NOT EXISTS chequebook(id int(10) NOT NULL,custname varchar(255) NOT NULL,accountno int(10) NOT NULL,chequestatus varchar(25) NOT NULL)";
		mysqli_query($conn,$sql1);
		$sql2="CREATE TABLE IF NOT EXISTS atm(id int(10) NOT NULL,custname varchar(255) NOT NULL,accountno int(10) NOT NULL,atmstatus varchar(50) NOT NULL)";
		mysqli_query($conn,$sql2);
        
        $sql="SELECT * FROM chequebook WHERE custname='$sender_id'";
        $result=mysqli_query($conn,$sql);
        $rws=mysqli_fetch_array($result);
        $c_status=$rws[3];
        $c_id=$rws[1];
        
        $sql="SELECT * FROM atm WHERE custname='$sender_id'";
        $result=mysqli_query($conn,$sql);
        $rws=mysqli_fetch_array($result);
        $atm_status=$rws[3];
        $a_id=$rws[1];
?>	
<html>
		<?php include 'headline.php' ?>
		
		<div   class="container-fluid st">
			<div  class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus" >
					<?php include 'headline2.php' ?>
						<div style="margin-top:10%;">
						    <form action="custatm.php" method="POST">
								<table align="center " class="table table-hover table-bordered text-center" style="">
									<tr class="text-primary font-weight-bolder"><td scope="col"> <b>ISSUE : &emsp;</b> 
											<select name="atm">
											<option value='ATM' selected>ATM</option>
											<option value='CHEQUE'>Cheque Book</option>
										</td>
										
									</tr>									
										</select>
								</table>      
								<table align="center"><tr><td scope="col"><input type="submit" name="submit" value="Request" class='btn btn-primary'></td></tr>
								</table>  								
							</form>
							<?php 
								if(($a_id==$sender_id) || ($c_id==$sender_id))
								{												
									echo "<table align='center' class='table table-hover font-weight-bolder' style='margin-left:15%;'>";
									echo "<th class='text-success'>Requests</th><th class='text-success'>Status</th>";
									echo "<tr><td class='text-primary'>ATM Card Status: </td><td>$atm_status</td></tr>";
									echo "<tr><td class='text-primary'>Cheque Book Status: </td><td>$c_status</td></tr>";
									echo "</table>"; }
							?>					
					</div>
				</div>
			</div>

		</div>
<?php include 'footline.php' ?>
	</body>
</html>