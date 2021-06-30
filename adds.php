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
													
				$name=$_POST["name"];
				$dob=$_POST["dob"];
				$relation=$_POST["status"];
				$dept=$_POST["dept"];
				$doj=$_POST["doj"];
				$address=$_POST["address"];
				$mobile=$_POST["mobile"];
				$email=$_POST["email"];
				$pass=$_POST["pass"];
				$gender=$_POST["gender"];
				
				
				$sql="CREATE TABLE IF NOT EXISTS staff(
												  id int(5) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
												  name varchar(255) NOT NULL,
												  gender char(1) NOT NULL,
												  dob date NOT NULL,
												  relationship varchar(255) NOT NULL,
												  department varchar(255) NOT NULL,
												  doj date NOT NULL,
												  address varchar(255) NOT NULL,
												  mobile varchar(11) NOT NULL,
												  email varchar(255) NOT NULL,
												  pwd varchar(32) NOT NULL,												  
												  AccCreated datetime NOT NULL);";
				
				
				mysqli_query($conn,$sql);
				
				$sql1="insert into staff(name,gender,dob,relationship,department,doj,address,mobile,email,pwd,AccCreated) values('$name','$gender','$dob','$relation','$dept','$doj','$address','$mobile','$email','$pass',NOW())";
				
				if(mysqli_query($conn,$sql1))
				{
					echo "<script>alert('Staff Registration Successfull.');window.location.href='adminaddstaff.php';</script>";
	
				}
			
?>