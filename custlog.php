<?php

session_start();
?>

<?php
					$us=$_POST['user'];
					$pa=$_POST['pass'];
					
				
				$conn=mysqli_connect("localhost","root","","pan");
				   
					  
				if(!$conn){
					echo "Connection failed";};	
			
					
					
				
				
				$sql="Select * from customer where name= '$us'";
				$result = mysqli_query($conn,$sql);
			
					
					
				if (mysqli_num_rows($result) > 0) {
			 
				while($row = mysqli_fetch_assoc($result))
					{		
						if($pa==$row["password"])
						{	$_SESSION["user"]=$row["name"];
							$_SESSION["de"]=$row["branch"];
							//echo "WELCOME"." ". $_SESSION["user"];
							
							header('location:custdash.php');
						}else
							echo "<script>alert('SORRY!! User Does not Exists...');window.location.href='login.php';</script>";
					}
				}
				else
					echo "<script>alert('SORRY!! User Does not Exists...');window.location.href='login.php';</script>";
			
				
	
			
?>
