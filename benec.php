<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./login.php');
}
?>	
<?php			
				
                $id1=$_SESSION["key"];
                $sendername=$_SESSION["user"];
                
                $Payeename=$_REQUEST['name'];
                $accno=$_REQUEST['accountno'];
                $branch=$_REQUEST['branch'];
                $ifsc=$_REQUEST['ifsc'];
                
                $conn=mysqli_connect("localhost","root","","pan");				  
				if(!$conn){
					echo "Connection failed";};	
				$sql12="CREATE TABLE IF NOT EXISTS beneficiary1 (
						id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
						senderid int(10) NOT NULL,
						sendername varchar(255) NOT NULL,
						receiveraccno int(10) NOT NULL,
						recievername varchar(255) NOT NULL,
						status varchar(15) NOT NULL);";
				mysqli_query($conn,$sql12);
                $status="PENDING";
                $sql="insert into beneficiary1 values('','$id1','$sendername','$accno','$Payeename','$status')";
                mysqli_query($conn,$sql);
				echo "<script>alert('Payee Applied for Beneficiary Request !!!');window.location.href='custben.php';</script>";
                
                
?>