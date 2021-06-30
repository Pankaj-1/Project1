<div class="container above" >
					<div class="above1">
							<label class=" text-dark above2" ><b><i class="fas fa-clipboard-list"></i>&emsp;DASHBOARD</b></label>
							<ul>
								<li><a class="text-warning font-weight-bolder" href="admindash.php">Home</a></li>
								<li><a class="text-warning font-weight-bolder big" href="adminpass.php">Change Password</a></li>
								<li><a class="text-warning font-weight-bolder" href="logout.php">Logout</a></li>
							</ul>
					</div>
				
				</div>
				<div  class="container above3">
					<div  class="container above4" >
						<div class="text-center text-white bg-light above5" >
								<img class=""src="img/admin1.jpg" style="max-width:88%;" >
						</div>
						<div class="above6" >
							<ul class="text-danger">
								<li class="text-danger"><label class="text-dark font-weight-bolder adm1">ADMIN NAME: &emsp;</label><b class="adm font-weight-bolder"><?php echo $_SESSION["user"];?></b></li>
								<li class="text-danger"><label class="text-dark font-weight-bolder adm1">DESIGNATION:&emsp;</label><b class="adm font-weight-bolder"><?php echo $_SESSION["de"];?></b></li>
							</ul>
						</div>
						
					</div>