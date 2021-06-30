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
		if(isset($_POST['submit']))
		{
		if(isset($_POST['id2'])){
				$id1=$_POST["id2"];
				$sql="DELETE FROM beneficiary1 WHERE id='$id1'";
				mysqli_query($conn,$sql);
				echo "<script>alert('Beneficiary Deleted Sucessfully !!!');window.location.href='custdash.php';</script>";
		}
		else{
			echo "<script>alert('Please select ID button of the Beneficiary to Delete !!!');window.location.href='custview.php';</script>";
			}		
						
}
	

?>