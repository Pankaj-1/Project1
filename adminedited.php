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
					 
					$id=$_SESSION['id1'];
					$name=$_REQUEST['name'];
					$gender= $_REQUEST['gender'];
					$dob=  $_REQUEST['dob'];
					$status=  $_REQUEST['status'];
					$dept=  $_REQUEST['dept'];
					$doj=  $_REQUEST['doj'];
					$address=  $_REQUEST['address'];
					$mobile=  $_REQUEST['mobile'];
					

					$sql="UPDATE staff SET  name='$name', dob='$dob', relationship='$status', 
						department='$dept', doj='$doj', address='$address', 
							mobile='$mobile', gender='$gender' WHERE id='$id'";
							
					if(mysqli_query($conn,$sql)){
						echo "<script>alert('Staff Details Updated Successully !!!');window.location.href='admindash.php';</script>";}
					
		
				 }
?>