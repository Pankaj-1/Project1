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
    
    $sql="SELECT * FROM chequebook WHERE id='$id'";
    $result=  mysqli_query($conn,$sql);
    $rws=  mysqli_fetch_array($result);
                
    if($rws[3]=="PENDING")
    $sql="UPDATE chequebook SET chequestatus='ISSUED' WHERE id='$id'";
    
    mysqli_query($conn,$sql);
    
   echo '<script>alert("cheque boook Issued");';
   echo 'window.location= "staffcheque.php";</script>';
?>