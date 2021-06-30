<div  class="container akm">
					<div style="margin-top:15%;width:135%;">
						<label class=" text-dark akm1"><b><i class="fas fa-clipboard-list"></i>&emsp;DASHBOARD</b></label>
							<div class="text-success mini" style="margin-top:20%;">
								<label class=" text-primary akm2" ><i class="fas fa-user-circle"></i>&emsp;STAFF SERVICES</label>
								<ul>
									<li><a class="text-warning font-weight-bolder" href="staffdash.php">Home</a></li>
									<li><a class="text-warning font-weight-bolder" href="staffben.php">Beneficiary Request</a></li>
									<li><a class="text-warning font-weight-bolder" href="staffatm.php">ATM Approval Request</a></li>
									<li><a class="text-warning font-weight-bolder" href="staffcheque.php">Cheque Approval Request</a></li>
								</ul>						
							</div>
							<div class="text-success mini" style="margin-top:20%;">
								<label class=" text-primary akm2" ><i class="fas fa-id-card"></i>&emsp;PROFILE</label>
								<ul>
									<li><a class="text-warning font-weight-bolder" href="staffpass.php">Change Password</a></li>
									<li><a class="text-warning font-weight-bolder" href="logout.php">Logout</a></li>
								</ul>
							
							</div>
							
					</div>
				
				</div>
				<div class="container akm3" >
					<div  class="container akm4">
						<div class="text-center text-white bg-light akm5">
								<img class=""src="img/staf.png" style="max-width:88%;" >
						</div>
						<div style="margin-top:5%;">
							<ul class="text-danger">
								<li class="text-primary"><label class="text-dark font-weight-bolder adm1">STAFF NAME :</label><b class="admm font-weight-bolder text-uppercase"> <?php echo $_SESSION['user']; ?></b></li>
								<li class="text-primary"><label class="text-dark font-weight-bolder adm1">DEPARTMENT :</label><b class="admm font-weight-bolder text-uppercase"> <?php echo $_SESSION['de']; ?></b></li>
							</ul>
						</div>
						
					</div>
				
				
					