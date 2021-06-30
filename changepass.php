<?php
				session_start();
				if(!isset($_SESSION['user']))
				{
					header('location:./admin.php');
				}
				$conn=mysqli_connect("localhost","root","","pan");
				if(!$conn)
					echo "Connection failed";
				
				$olduser= $_SESSION['user'];
				if(isset($_REQUEST['change'])){
				$sql="SELECT Password FROM admin WHERE Username='$olduser'";
				$result=mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
				$old=  $_REQUEST['old_pass'];
				$new=  $_REQUEST['new_pass'];
				$again= $_REQUEST['again_pass'];
				if($row[0]==$old && $new==$again){
					$sql1="UPDATE admin SET Password='$new' WHERE Username='$olduser'";
					mysqli_query($conn,$sql1);
					echo "<script>alert('Password Changed Successfully !!!');window.location.href='admindash.php';</script>";
					
				}else{
					echo "<script>alert('Password Change UnSuccessfull !!!');window.location.href='adminpass.php';</script>";
				}				
				}
?>