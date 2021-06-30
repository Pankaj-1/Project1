<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	
<?php			
                $conn=mysqli_connect("localhost","root","","pan");				  
				if(!$conn){
					echo "Connection failed";};	
					
				$id1=$_SESSION["key"];
				$sql="SELECT * FROM beneficiary1 WHERE senderid='$id1' and status='ACTIVE'";		
				
				if(!mysqli_query($conn,$sql)){
					echo "<script>alert('NO Beneficiary Exists !!!');window.location.href='custdash.php';</script>";
				}
				else	{
					$result=mysqli_query($conn,$sql);
?>
<html>
	<?php include 'headline.php' ?>
		<div class="container-fluid st" >
			<div class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus">
					<?php include 'headline2.php' ?>
				
					<div style="margin-top:5%;padding-left:18%;">
						<form action="delbenc.php" method="POST">
						<table class="table table-hover" style="width:110%">
                        <thead class="text-success">
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Beneficiary Account No</th>
                        <th scope="col">Status</th>
                        </thead>
						<tbody>
                        <?php
                        while($res=mysqli_fetch_array($result)){
                           
                            echo "<tr class='text-primary font-weight-bolder text-center'><td><input type='radio' name='id2' value='".$res[0]."'</td>";
                            echo "<td class='text-left'>".$res[4]."</td>";
                            echo "<td>".$res[3]."</td>";
                            echo "<td>".$res[5]."</td>";                           
                            echo "</tr>";
                        } ?>
						</tbody>
					</table>
					<table style="margin-left:25%"><tr><td><input type="submit" name="submit" value="DELETE BENEFICIARY" class='btn btn-primary'/></td></tr></table>
					</form>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footline.php' ?>
	</body>
</html>
<?php }?>