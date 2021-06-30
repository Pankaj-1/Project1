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
			{echo "Connection failed";}
					
			 if(isset($_POST["submit"])){
				 if(isset($_POST['id']))
				{
					$id1=$_POST["id"];
					mysqli_query($conn,"delete from staff where id=".$id1);
					echo "<script>alert('Staff Deleted Successfully !!!');window.location.href='admindelstaff.php';</script>";
				}
				else{
					echo "<script>alert('Please select ID button of the Staff to Delete !!!');window.location.href='admindelstaff.php';</script>";
				}
			 }
			 
			
?>
		
