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



$name=$_SESSION['user'];
$account_no=$_SESSION['key'];
$option=$_REQUEST['atm'];

$atm_status=$cheque_book_status="NOT REQUESTED";
if($option=='ATM')
    $atmstatus="PENDING";
else
    $chequestatus="PENDING";
    
	$sql12="CREATE TABLE IF NOT EXISTS chequebook (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  custname varchar(255) NOT NULL,
	  accountno int(10) NOT NULL,
	  chequestatus varchar(25) NOT NULL
	)";
	mysqli_query($conn,$sql12);
	$sql13="CREATE TABLE IF NOT EXISTS atm (
	id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
	  custname varchar(255) NOT NULL,
	  accountno int(10) NOT NULL,
	  atmstatus varchar(50) NOT NULL
	)";
	mysqli_query($conn,$sql13);	
	
	

    $sql="SELECT * FROM chequebook WHERE accountno='$account_no'";
    $result=mysqli_query($conn,$sql);
    $res=mysqli_fetch_array($result);
    $c_status=$res[3];
    $c_id=$res[2];
    
    $sql="SELECT * FROM atm WHERE accountno='$account_no'";
    $result=  mysqli_query($conn,$sql);
    $res=  mysqli_fetch_array($result);
    $a_status=$res[3];
    $a_id=$res[2];
    
    
    if(($option=='ATM' && (($a_status=='PENDING')||($a_status=='ISSUED'))) || ($option=='CHEQUE' && (($c_status=='PENDING')||($c_status=='ISSUED'))))           
    {
        echo '<script>alert("You have already made a request!");';
   echo 'window.location= "custreq.php";</script>';
}
  
elseif($option=='ATM'){
$sql="insert into atm values('','$name','$account_no','$atmstatus')";
mysqli_query($conn,$sql);

echo '<script>alert("Request succesfull. You will recieve confirmation from branch very soon.");';
echo 'window.location= "custreq.php";</script>';
}
else {
$sql="insert into chequebook values('','$name','$account_no','$chequestatus')";
mysqli_query($conn,$sql) ;

echo '<script>alert("Request succesfull. You will recieve confirmation from branch very soon.");';
echo 'window.location= "custreq.php";</script>';
}


?>