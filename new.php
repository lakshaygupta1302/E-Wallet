<!DOCTYPE html>

<html>
	
	<head>
		<link rel="stylesheet" href="bootstrap.min.css">
		<link rel="stylesheet" href="main.css">
		<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Josefin+Sans' rel='stylesheet' type='text/css'>
	</head>
	<body>
		
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#drop">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Plutus</a>
				</div>
				<div class="collapse navbar-collapse" id="drop">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#ok">Log in</a></li>
						<li><a href="#why">Why Us</a></li>
						<li><a href="#how">How</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid plutus_banner">
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
					<img src="plutus.png" width="900px" height="300px">
				</div>
				<div class="col-md-2"></div>
			</div>
		</div>
		<div class="container-fluid login-cont" id="ok">
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
			<div class="login-block text-center">
				<h3>Login</h3>
				<form action="dashboard2.php" role="form" method="post">
				
					<div class="form-group">
						<input type="text" class="form-control" id="username" placeholder="Username" name="username">
					</div>
					<input name="action" type="hidden" value="login" />
					<div class="form-group">
						<input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
					</div>
					<div class="form-group">
						 <input type="submit" value="Submit" class="form-control" id="submit-but"/>
					<!--	<button class="form-control" id="submit-but"><a href="dashboard.html">Submit</a></button>-->
					</div>
					<div class="form-group">
						<label for="register"><a href="register2.php" class="reg1">New User? Register Here</a></label>
					</div>
				</form>

			</div>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
		<div class="container-fluid s1 text-center" id="why">
			<h2 class="margin" style="padding-bottom:22px;">Why?</h3>
			<div class="row">
				<div class="col-md-4">
					<img src="icon_wallet.png" class="img-responsive img-circle margin" >
				</div>
				<div class="col-md-8">
					<ul class="list-group">
						<li class="list-group-item lg1">Share money among friends</li>
						<li class="list-group-item lg1">Pay for someone else</li>
						<li class="list-group-item lg1">Request money in need</li>
						<li class="list-group-item lg1">Bank management facility</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="container-fluid s2 text-center" id="how">
			<h2 class="margin" style="padding-bottom:22px;">How?</h3>
			<div class="row">
				<div class="col-md-8">
					<ul class="list-group">
						<li class="list-group-item lg2">Ass kicking team</li>
						<li class="list-group-item lg2">Coding ninjas</li>
						<li class="list-group-item lg2">Zen masters a.k.a Engineers</li>
					</ul>
				</div>
				<div class="col-md-4">
					<img src="icon_ninja.png" class="img-responsive img-circle margin" width="256px" height="256px">
				</div>
			</div>
		</div>
	</body>
</html>