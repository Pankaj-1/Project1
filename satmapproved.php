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
	$id=$_REQUEST['custid'];
    
    $sql="SELECT * FROM atm WHERE id='$id'";
    $result=  mysqli_query($conn,$sql);
    $rws=  mysqli_fetch_array($result);
                
    if($rws[3]=="PENDING")
    $sql="UPDATE atm SET atmstatus='ISSUED' WHERE id='$id'";
    
    mysqli_query($conn,$sql);
    
   echo '<script>alert("ATM Card Issued");';
   echo 'window.location= "staffatm.php";</script>';
  


?>