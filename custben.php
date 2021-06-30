<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	
<html>
	<?php include 'headline.php' ?>
		<div class="container-fluid st">
			<div class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus" >
					<?php include 'headline2.php' ?>
				
					<div style="margin-top:5%;padding-left:26%;">
						<form action='benec.php' method='post'>
						<br><br>
						<h3 style="text-align:center;color:#2E4372;margin-bottom:3%;"><u>Add Beneficiary</u></h3>
						<table  class=" table table-hover " style="width:110%;padding-left:37%;">
							<thead class="text-success font-weight-bolder">
							<tr><td scope="col"><span class="heading" title="Enter the name whom you want to pay">Payee Name: </span></td><td><input type='text' name='name' required></td></tr>
							<tr><td scope="col"><span class="heading" title="Enter Account No. ie. ID no of the payee">Account No: </span></td><td><input type='text' name='accountno' required></td></tr>
							<tr><td scope="col"><span class="heading" >Select Branch: </span></td><td><select name='branch' required>
										
										<option value='MAHARASHTRA'>Maharashtra</option>
										<option value='DELHI'>Delhi</option>
										<option value='BANGALORE'>Bangalore</option>
										</select></td></tr>
							<tr><td scope="col"><span class="heading">IFSC Code: </span></td><td><input type='text' name='ifsc' title="Enter any varchar/int " required></td></tr></thead> </table>
						   <table align="center"> <tr><td scope="col"><input style="color:white;" type='submit' name='submit' value='Add Beneficiary' class="btn btn-primary"></button>
						</table>
						
						</form>
					</div>
				</div>
			</div>
		</div>
		<?php include 'footline.php' ?>
	</body>
</html>