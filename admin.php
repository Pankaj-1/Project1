<?php
		$conn=mysqli_connect("localhost","root","","pan"); 
			if(!$conn){
				echo "Connection failed";};	
					
				$sql11="create database pan if not exists";
				mysqli_query($conn,$sql11);
				
				$sql2="create table if not exists admin(Username varchar(20) primary key,Password varchar(15),Designation varchar(20))"	;
				if(mysqli_query($conn,$sql2)){
					
				$sql3="insert into admin values('Pankaj','Pankaj','Manager')";
				$resul=mysqli_query($conn,$sql3);}
?>

<html>
	<?php include 'headline.php'?>	
		<div class="pan1">
		<div >
		<form  method="post" action="logprocess.php" target="_self" >
		<div id="str">
			<div class="add" >
	
				<div class="add1">
					<h3 class="text-danger add2">ADMIN</h3>
					
				</div>
			</div>
			

			<div class="add3">
				<div class="add4" >
					<div class="add5">
						<span class="ab">
							<i class="fas fa-user"></i>
						</span>
						<input class="add6" type="text" name="user" placeholder="username" pattern="[a-z A-Z 0-9]{}"  required>
						
					</div>
	

					<div class="add7" >
						<span class="ab">
							<i class="fas fa-key"></i>
						</span>
						<input class="add8" type="password" name="pass" placeholder="password" required>
					</div>
					<div class="add9" >
						<input type="checkbox" >Remember Me
					</div>
					<div class="addd">
						<input  type="submit"  value="Login" class="btn login_btn">
					</div>
				</div>
			</div>


			
		</div>
		</form>
		</div>
	</div>	
	<?php include 'footline.php' ?>
</body>
</html>