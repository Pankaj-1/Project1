<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./staff.php');
}
?>	
<?php

$conn=mysqli_connect("localhost","root","","pan");				  
if(!$conn){
	echo "Connection failed";};	
$sql="SELECT * FROM beneficiary1 WHERE status='PENDING'";

if(!mysqli_query($conn,$sql)){
	echo "<script>alert('NO Beneficiary Requests !!!');window.location.href='staffdash.php';</script>";
}
else	{
		$result=mysqli_query($conn,$sql);
?>

<html>
	<?php include 'headline.php' ?>
	<div class="container-fluid st" >
		<div class="container" style="display:flex;">
				<?php include 'nhead1.php' ?>				
					<div class="container" style="margin-top:7%;padding-left:10%">
						<form action="staffbenapp.php" method="POST">
								<table class="table table-hover text-center table-responsive font-weight-bolder" style="width:113%;font-size:17px;">
									<thead class="text-success font-weight-bolder">
									<th scope="col">ID</th>
									<th scope="col">Sender</th>
									<th scope="col">Sender Account No</th>
									<th scope="col">Reciever</th>
									<th scope="col">Reciever Account No</th>
									<th scope="col">Status</th>
									</thead>
									<tbody class="text-primary font-weight-bolder">
									 <?php
										
										while($rws=  mysqli_fetch_array($result)){
											echo "<tr class=''><td><input type='radio' name='custid' value='".$rws[0]."'</td>";
											echo "<td class='text-left'>".$rws[2]."</td>";
											echo "<td>".$rws[1]."</td>";
											echo "<td class='text-left'>".$rws[4]."</td>";
											echo "<td>".$rws[3]."</td>";
											echo "<td>".$rws[5]."</td>";
										   
											echo "</tr>";
										} ?>
										</tbody>		
									
								</table>
								<table align="center">
								<tr>
									<td scope="col">
										<input type="submit" name="submit" value="APPROVE BENEFICIARY" class='btn btn-info'/>
									</td>
								</tr>
							</table>
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footline.php' ?>
	</body>
</html>
<?php }?>