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
	$sql="SELECT * FROM chequebook WHERE chequestatus='PENDING'";
	if(!mysqli_query($conn,$sql)){
	echo "<script>alert('NO Cheque Requests !!!');window.location.href='staffdash.php';</script>";
	}
	else	{
		$result=mysqli_query($conn,$sql);

?>
<html>
	<?php include 'headline.php' ?>
		<div  class="container-fluid st">
			<div class="container" style="display:flex;">
				<?php include 'nhead1.php' ?>				
					<div class="container" style="margin-top:5%;padding-left:15%">
						<form action="schequeapproved.php" method="POST">
							<table align="center" class="table table-hover text-center font-weight-bolder" style="width:113%;font-size:17px;">
								<thead class="text-success font-weight-bolder">
								<th scope="col">ID</th>
								<th scope="col">Name</th>
								<th scope="col">Account No.</th>
								<th scope="col">Cheque Book Status</th>
								</thead>
								<tbody class="text-primary font-weight-bolder">
							<?php
								while($rws=  mysqli_fetch_array($result)){
									echo "<tr><td><input type='radio' name='custid' value='".$rws[0]."'</td>";
									
									echo "<td class='text-left'>".$rws[1]."</td>";
									echo "<td>".$rws[2]."</td>";
									echo "<td>".$rws[3]."</td>";
									
									echo "</tr>";
								} ?>	
								</tbody>	
										
							</table>
							<table align="center">
								<tr>
									<td scope="col">
										<button type="submit" name="submit" value="APPROVE REQUEST" class="btn btn-primary">APPROVE REQUEST</button>
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