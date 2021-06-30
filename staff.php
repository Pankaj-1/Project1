
<html>

		<?php include 'headline.php' ?>
		<div class="staff" >
		<div >
		<form  method="post" action="stafflog.php" target="_self" >
		<div id="str">
			<div  class="add"  >
	
				<div class="add1">
					<h3 class="text-white new" >STAFF</h3>
					
				</div>
			</div>
			

			<div class="add3">
				<div class="add4" >
					<div class="add5" >
						<span class="ab">
							<i class="fas fa-user"></i>
						</span>
						<input class="add6" type="text" name="user" placeholder="username" pattern="[a-z A-Z 0-9]{}"  required>
						
					</div>
	

					<div class="add7" >
						<span class="ab">
							<i class="fas fa-key"></i>
						</span>
						<input class="add8"type="password" name="pass" placeholder="password"   required>
					</div>
					<div class="add9" >
						<input type="checkbox" style="">Remember Me
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