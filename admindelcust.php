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
			$sql="Select * from customer ";
			$result = mysqli_query($conn,$sql);
			
	?>

<html>
		<?php include 'headline.php'?>
	<div class="container-fluid st" >
			<div class="container"style="display:flex;">
				<?php include'headad.php'?>
					<div style="margin-top:40px;padding-left:10%;">
						<form action="delpro1.php" method="POST">
							<h3 class="text-warning text-center">CUSTOMER DETAILS</h3>
							<table align="center" class="table table-hover table-responsive text-success" style="margin-top:20px;" >
								
								<thead>
									<th scope="col"class='text-center'>ID</th>
									<th scope="col"class='text-center'>Name</th>
									<th scope="col"class='text-center'>Gender</th>
									<th scope="col"class='text-center' colspan="2">DOB</th>
									<th scope="col"class='text-center'>Nominee</th>
									<th scope="col"class='text-center'>Account_Type</th>
									<th scope="col"class='text-center'>Address</th>
									<th scope="col" class='text-center'>Mobile</th>
									<th scope="col" class='text-center'>Email</th>
								</thead>
								<p class="text-danger " style="margin-top:30px;">
								 <?php
										while($res=mysqli_fetch_array($result)){
											echo "<tr class='text-primary font-weight-bolder'><td><input type='radio' name='id' value='".$res[0]."'></td>";
											
											//if($result1[0]==$rws_min[0]) echo' checked';
											
											echo "<td >".$res[1]."</td>";

											echo "<td class='text-center'>".$res[2]."</td>";
											echo "<td class='text-center' colspan='2'>".$res[3]."</td>";
											echo "<td class='text-center'>".$res[4]."</td>";
											echo "<td class='text-center'>".$res[5]."</td>";
											echo "<td class='text-center'>".$res[6]."</td>";
											echo "<td class='text-center'>".$res[7]."</td>";
											echo "<td >".$res[8]."</td>";											
											
											echo "</tr>";
										}
									?>
									</p>
							</table>						
							<table align="center" id='button'>
								<tr>
									<td><input type="submit" name="submit" value="DELETE CUSTOMER" class='addstaff_button btn btn-primary' ></td>
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