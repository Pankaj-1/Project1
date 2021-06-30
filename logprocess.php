<?php

session_start();
?>

<?php
					$us=$_POST['user'];
					$pa=$_POST['pass'];
		
				
				$conn=mysqli_connect("localhost","root","","pan");
				   
					  
				if(!$conn){
					echo "Connection failed";};	
			
				
				
				$sql="Select * from admin where Username= '$us'";
				$result = mysqli_query($conn,$sql);
			
					
					
				if (mysqli_num_rows($result) > 0) {
			 
				while($row = mysqli_fetch_assoc($result))
					{		
						if($pa==$row["Password"])
						{	$_SESSION["user"]=$row["Username"];
							$_SESSION["de"]=$row["Designation"];
							//echo "WELCOME"." ". $_SESSION["user"];
							
							header('location:admindash.php');
						}else
							echo "<script>alert('SORRY!! User Does not Exists...');window.location.href='admin.php';</script>";
					}
				}
				else
					echo "<script>alert('SORRY!! User Does not Exists...');window.location.href='admin.php';</script>";
			
				
	
			
?>
