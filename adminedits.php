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
						echo "Connection failed";
			$sql="Select * from staff ";
			$result = mysqli_query($conn,$sql);
			
	?>

<html>
	<?php include 'headline.php'?>
		<div class="container-fluid st">
			<div class="container" style="display:flex;">
				<?php include'headad.php'?>
				
					<div style="margin-top:10px;padding-left:8%">
						<form action="admineditstaff.php" method="POST">
							<h3 class="text-warning text-center">STAFF DETAILS</h3>
							<table align="center" class="table table-hover text-success table-responsive" style="margin-top:30px;" >
								
								<thead>
									<th scope="col"class='text-center'>ID</th>
									<th scope="col"class='text-center'>Name</th>
									<th scope="col"class='text-center'>Gender</th>
									<th scope="col"class='text-center'>DOB</th>
									<th scope="col"class='text-center'>Relationship</th>
									<th scope="col"class='text-center'>Department</th>
									<th scope="col"class='text-center'>DOJ</th>
									<th scope="col"class='text-center'>Address</th>
									<th scope="col"class='text-center'>Mobile</th>
									<th scope="col"class='text-center'>Email</th>
								</thead>
								<p class="text-danger table-hover" style="margin-top:30px;">
								 <?php
										while($res=mysqli_fetch_array($result)){
											echo "<tr  class='text-primary font-weight-bolder' ><td><input type='radio' name='id' value='".$res[0]."'></td>";
											
											//if($result1[0]==$rws_min[0]) echo' checked';
										
											echo "<td >".$res[1]."</td>";

											echo "<td >".$res[2]."</td>";
											echo "<td class='text-center'>".$res[3]."</td>";
											echo "<td class='text-center'>".$res[4]."</td>";
											echo "<td class='text-center'>".$res[5]."</td>";
											echo "<td class='text-center'>".$res[6]."</td>";
											echo "<td class='text-center'>".$res[7]."</td>";
											echo "<td class='text-center'>".$res[8]."</td>";											
											echo "<td>".$res[9]."</td>";
											echo "</tr>";
										}
									?>
									</p>
									
								
							</table>						
							<table align="center" id='button'>
								<tr>
									<td><input type="submit" name="submit" value="EDIT STAFF DETAILS" class='btn btn-primary' ></td>
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