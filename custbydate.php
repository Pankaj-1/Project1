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
			<div class="container " style="display:flex;">
				<?php include 'headline1.php' ?>
				<div class="container cus" >
					<?php include 'headline2.php' ?>
				
					<div style="margin-top:10%;padding-left:15%;">
						<h3 style="text-align:center;color:#2E4372;padding-left:2%;margin-bottom:3%"><u>Account Summary By Date</u></h3>
						<table class="table table-hover table-responsive" style="width:110%">
                        <thead class="text-success font-weight-bolder">
                        <th scope="col">ID</th>
                        <th scope="col">Transaction Date</th>
                        <th scope="col">Narration</th>
                        <th scope="col">Credit</th>
                        <th scope="col">Debit</th>
                        <th scope="col">Balance Amount</th>
                        </thead>
						<tbody>
                        <?php if(isset($_REQUEST['submit'])) {
                         $date1=$_REQUEST['date1'];
                         $date2=$_REQUEST['date2'];
						 $conn=mysqli_connect("localhost","root","","pan");				  
						if(!$conn){
								echo "Connection failed";};	
                         
                      
                         $id2=$_SESSION["key"];
                         $sql="SELECT * FROM passbook".$id2." WHERE transactiondate BETWEEN '$date1' AND '$date2'";
                         $result=  mysqli_query($conn,$sql);
						while($rws=  mysqli_fetch_array($result)){
                            
                            echo "<tr class='text-primary font-weight-bolder text-center'>";
                            echo "<td>".$rws[0]."</td>";
                            echo "<td>".$rws[1]."</td>";
                            echo "<td>".$rws[8]."</td>";
                            echo "<td>".$rws[5]."</td>";
                            echo "<td>".$rws[6]."</td>";
                            echo "<td>".$rws[7]."</td>";
                           
                            echo "</tr>";
                        }
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