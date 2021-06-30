
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
			<link rel="stylesheet" href="js/bootstrap.min.js"/>
		<link rel="stylesheet" href="css/swag.css"/>
		<link rel="stylesheet" href="css/all.css"/>
		
		
        <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css1/ext1.css">
		
		
		<title>ONLINE BANKING SYSTEM</title>
		<script>
			$(document).ready(function(){
				$(".dropdown, .btn-group").hover(function(){
					var dropdownMenu = $(this).children(".dropdown-menu");
					if(dropdownMenu.is(":visible")){
						dropdownMenu.parent().toggleClass("open");
					}
				});
			});		
		</script>
	</head>
	<body >
		
	<nav class="navbar navbar-expand-md bg-dark ">
		
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="img/col.png"></a>
			
				<button class="navbar-dark navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarResponsive"  >
					<span class="navbar-toggler-icon " ></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item ">
							<a class="nav-link" href="home.php">Home</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Login</a>
							<ul class="dropdown-menu bg-dark  padd">
								<li><a class="text-white " href="login.php">Customer</a></li>
								<li><a class="text-white " href="staff.php">Staff</a></li>
								
							</ul>
						</li>
						</li>
						<li class="nav-item">
							<a class="nav-link "  href="features.php" >Features</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="about.php">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="cont.php">Contact Us</a>
						</li>
						
						<li  class="nav-item">
							<input class="form-control mr-sm-2 h" type="search" placeholder="What you looking for?"> 
						</li>
						<li  class="nav-item">
							&nbsp;<span> <i class="fa fa-search text-white" ></i> </span> 
						</li>
					</ul>
				</div>
			</div>
				<ul class="nav navbar-nav navbar-right">
					<li class="nav-item" style="font-size:12px;">
						<a class="nav-link " href="admin.php"><span>&emsp;<i class="fa fa-user-secret " ></i> Admin</span></a>
					</li>
				</ul>
			
		</nav>