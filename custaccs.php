<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	
<html>
	<?php include 'headline.php' ?>
		<div class="container-fluid st" >
			<div class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus" >
					<?php include 'headline2.php' ?>
				
					<div style="margin-top:10%;padding-left:10%">
						<h3 style="text-align:center;color:#2E4372;padding-left:2%;"><u>Account Summary By Date</u></h3>
						<form action="custbydate.php" method="POST">
							<table align="center" class="table table-hover text-center">
								<tr><td scope="col" class="font-weight-bolder">Start Date [mm/dd/yyyy] &emsp;
								<input style="margin-top:2%;" type="date" name="date1" required></td></tr>
								<tr>
									</br>
								</tr>
								<tr><td scope="col" class="font-weight-bolder">End Date [mm/dd/yyyy] &emsp;
								<input style="margin-top:2%;" type="date" name="date2" required></td></tr>
							</table>
							</br>
							<table align="center">
								<tr>
									<td colspan="2" align='center' >
										<input type="submit" name="submit" value="Go" class="btn btn-primary"/>
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