<?php
				session_start();
				if(!isset($_SESSION['user']))
				{
					header('location:./staff.php');
				}
				$conn=mysqli_connect("localhost","root","","pan");
				if(!$conn)
					echo "Connection failed";
				
				$olduser= $_SESSION['user'];
				if(isset($_REQUEST['change'])){
				$sql="SELECT password FROM staff WHERE name='$olduser'";
				$result=mysqli_query($conn,$sql);
				$row = mysqli_fetch_array($result);
				$old=  $_REQUEST['old_pass'];
				$new=  $_REQUEST['new_pass'];
				$again= $_REQUEST['again_pass'];
				
				if($row[0]==$old && $new==$again){
					$sql1="UPDATE customer SET pwd='$new' WHERE name='$olduser'";
					mysqli_query($conn,$sql1);
					echo "<script>alert('Password Changed Successfully !!!');window.location.href='staffdash.php';</script>";
					
				}else{
						echo "<script>alert('Password Change UnSuccessfull !!!');window.location.href='staffpass.php';</script>";
				}				
				}
?>