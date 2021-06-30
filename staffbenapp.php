<?php
session_start();
if(!isset($_SESSION['user']))
{
	header('location:./staff.php');
}
?>	

<?php
if(isset($_REQUEST['submit']))
	
{	if(isset($_REQUEST['custid'])){
    $id=$_REQUEST['custid'];
    
    
	$conn=mysqli_connect("localhost","root","","pan");				  
	if(!$conn){
	echo "Connection failed";};	
    $sql="UPDATE beneficiary1 SET status='ACTIVE' WHERE id='$id'";
    mysqli_query($conn,$sql);
    
   echo '<script>alert("Beneficiary status ACTIVE ");';
	echo 'window.location= "staffben.php";</script>';}
	else{
		echo "<script>alert('Please select ID button of the Beneficiary !!!');window.location.href='staffben.php';</script>";
	}

}