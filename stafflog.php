<?php

session_start();
?>

<?php
					$us=$_POST['user'];
					$pa=$_POST['pass'];
					
				
				$conn=mysqli_connect("localhost","root","","pan");
			
				if(!$conn){
					echo "Connection failed";};	
			
				$sql="Select * from staff where name= '$us'";
				$result = mysqli_query($conn,$sql);
			
				if (mysqli_num_rows($result) > 0) {
			 
				while($row = mysqli_fetch_assoc($result))
					{		
						if($pa==$row["pwd"])
						{	$_SESSION["user"]=$row["name"];
							$_SESSION["de"]=$row["department"];
							//echo "WELCOME"." ". $_SESSION["user"];
							
							header('location:staffdash.php');
						}else
							echo "<script>alert('SORRY!! User Does not Exists...');window.location.href='staff.php';</script>";
					}
				}
				else
					echo "<script>alert('SORRY!! User Does not Exists...');window.location.href='staff.php';</script>";
			
?>
