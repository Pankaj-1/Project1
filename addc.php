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
					echo "Connection failed";	
													
				$name=  $_REQUEST['name'];
				$gender=  $_REQUEST['gender'];
				$dob=  $_REQUEST['dob'];
				$nominee=  $_REQUEST['nominee'];
				$type=  $_REQUEST['account'];
				$credit=  $_REQUEST['min'];
				$address=  $_REQUEST['address'];
				$mobile=  $_REQUEST['mobile'];
				$email= $_REQUEST['email'];
				$pass=$_REQUEST['pass'];
				$branch=$_REQUEST['branch'];
				
				switch($branch){
					case 'MAHARASHTRA': $ifsc="K421A";
						break;
					case 'DELHI': $ifsc="D30AC";
						break;
					case 'BANGALORE': $ifsc="B6A9E";
						break;
					}
			
				
				$sql="CREATE TABLE IF NOT EXISTS customer(
																id int(5) AUTO_INCREMENT PRIMARY KEY,
																  name varchar(255) NOT NULL,
																  gender char(1) NOT NULL,
																  dob date NOT NULL,
																  nominee varchar(255) NOT NULL,
																  account varchar(255) NOT NULL,
																  address varchar(255) NOT NULL,
																  mobile varchar(11) NOT NULL,
																  email varchar(255) NOT NULL,
																  password varchar(255) NOT NULL,
																  branch varchar(255) NOT NULL,
																  ifsc varchar(255) NOT NULL,
																  AccCreated datetime NOT NULL,
																  accstatus varchar(255) NOT NULL
																);";
				mysqli_query($conn,$sql);
				$sql2="insert into customer values('','$name','$gender','$dob','$nominee','$type','$address','$mobile','$email','$pass','$branch','$ifsc',NOW(),'ACTIVE');";
				
				
				if(mysqli_query($conn,$sql2))
				{	
					$sql4="SELECT max(id) from customer";
					$result1=mysqli_query($conn,$sql4);
					$res=  mysqli_fetch_array($result1);
					$id=$res[0];
					
					
					$sql1="CREATE TABLE IF NOT EXISTS passbook".$id." (transactionid int(5) AUTO_INCREMENT, transactiondate date, name VARCHAR(255), branch VARCHAR(255), ifsc VARCHAR(255), credit int(10), debit int(10), amount float(10,2), narration VARCHAR(255), PRIMARY KEY (transactionid))";								
					mysqli_query($conn,$sql1);
					$sql3="insert into passbook".$id." values('','$date','$name','$branch','$ifsc','$credit','0','$credit','Account Open')";
					mysqli_query($conn,$sql3);
					echo "<script>alert('Customer Registration Successfull.');window.location.href='adminaddcust.php';</script>";
	
				}
				
				
?>

