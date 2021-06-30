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
		$id1= $_SESSION['key'];
		$sql="SELECT * FROM passbook".$id1." LIMIT 5";
		$result=  mysqli_query($conn,$sql);
 ?>	
<html>
<?php include 'headline.php' ?>
		<div class="container-fluid st"">
			<div class="container" style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus" >
					<?php include 'headline2.php' ?>
				
				
					<div class="" style="margin-top:5%;padding-left:13%;">
						<h3 style="text-align:center;color:#2E4372;"><u>Some Last Transactions</u></h3>
						<table class="table  table-responsive " style="width:110%">
							<thead class="text-success font-weight-bolder">							
								<th scope="col">ID</th>
								<th scope="col">Transaction Date</th>
								<th scope="col">Narration</th>
								<th scope="col">Credit</th>
								<th scope="col">Debit</th>
								<th scope="col">Balance Amount</th>
							</thead>
							<tbody>
							 <?php
                        while($res=mysqli_fetch_array($result)){
                            
                            echo "<tr class='text-primary font-weight-bolder text-center'>";
                            echo "<td>".$res[0]."</td>";
                            echo "<td>".$res[1]."</td>";
                            echo "<td>".$res[8]."</td>";
                            echo "<td>".$res[5]."</td>";
                            echo "<td>".$res[6]."</td>";
                            echo "<td>".$res[7]."</td>";
                           
                            echo "</tr>";
                        } ?>
						</tbody>
							
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<?php include 'footline.php' ?>
		
	</body>
</html>