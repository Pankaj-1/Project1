<?php

session_start();

if(!isset($_SESSION['user']))
{
	header('location:./admin.php');
}

?>
<?php

				$conn=mysqli_connect("localhost","root","","pan");
				   
					  
				if(!$conn){
					echo "Connection failed";};	


				 if(isset($_POST["submit1"])){
					 
					$id1=$_SESSION['id2'];
					$name=$_REQUEST['name'];
					$gender= $_REQUEST['gender'];
					$dob=  $_REQUEST['dob'];
					$type=  $_REQUEST['account'];
					$nominee=  $_REQUEST['nominee'];
					$address=  $_REQUEST['address'];
					$mobile=  $_REQUEST['mobile'];
					
					//$sql="UPDATE customer SET  name='$name', dob='$dob', nominee='$nominee', account='$type',address='$address',mobile='$mobile', gender='$gender' WHERE id='$id'";
							
					if(mysqli_query($conn,"UPDATE customer SET  name='$name', dob='$dob', nominee='$nominee', account='$type',address='$address',mobile='$mobile', gender='$gender' WHERE id=".$id1))
					{
							echo "<script>alert('Customer Details Updated Successully !!!');window.location.href='admindash.php';</script>";
					}
		
				 }
?>