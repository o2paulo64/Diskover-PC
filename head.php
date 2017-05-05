<?php
	session_start();
	$api="AIzaSyB9fqykGvrPQqoxsiC-I6kdCdD9qQK_8Xs";
?>

<!doctype html>
<html lang="en">

<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>DISKOVER</title>
<link rel="icon" type="image/png" href="images/DiskoverIcon.png">

<link href="css/loading.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">	
<script src="js/bootstrap.js"></script>
<script src="js/mh305.js"></script>
<script src="js/refresh.js"></script>


</head>

<body >
	<?php
		
		if(isset($_SESSION['id'])){
			echo "<nav class='navbar navbar-default navbar-static-top'>
				<div class='container-fluid'>
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed'  data-toggle='collapse' data-target='#topFixedNavbar1' aria-expanded='false'><span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button>
					  <!--<a class='navbar-brand' href='#'>DISKOVER</a></div>-->
						<a class='navbar-brand' id='logo-resize' href='index.php'> <img  src='images/logooble.png' width='60' height='75' alt='logo'/></a>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class='collapse navbar-collapse' id='topFixedNavbar1'>
					<div class='col-sm-3 col-lg-2 navbar-right'>
						<form class='navbar-form navbar-right' role='search' action='searchresult.php'>
							<div class='input-group'>
							
								<input type='text' class='form-control input-sm' name='search' placeholder='Where to?'>
								<div class='input-group-btn'>
									<button class='btn btn-primary btn-sm' id='ssbutton' name='submit-search' type='submit' onclick='nosearch(); return false;'><i class='glyphicon glyphicon-search'></i></button>
								</div>
							
							</div> 
						</form>
					</div>
				  	<ul class='nav navbar-nav navbar-right'>

						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Admin<span class='glyphicon glyphicon-plus'></span></a>
							<ul class='dropdown-menu'>
								<li><a href='new.php'>Add Location</a></li>
								
								<li><a href='remove.php'>Remove Location</a></li>
							
							</ul>
						</li>
						
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Locations<span class='caret'></span></a>
							<ul class='dropdown-menu'>
								<li><a href='building.php'>Buildings</a></li>
								<li><a href='food.php'>Food</a></li>
								<li><a href='commonplace.php'>Common Place</a></li>
								<li><a href='parkinglot.php'>Parking Lot</a></li>
								<li><a href='cr.php'>Comfort Room</a></li>
							</ul>
						</li>
						<li><a href='map.php'>Map</a></li>
						<li><a href='about.php'>About</a></li>
						<li>
							<form action='logout.php' id='logout'>
								<button type='submit' class='btn btn-default btn-sm' >Log out</button>
							</form>
				  		</li>
				  	</ul>
				</div>
			</nav>";
		}else{
			echo "<nav class='navbar navbar-default navbar-static-top'>
				<div class='container-fluid'>
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed'  data-toggle='collapse' data-target='#topFixedNavbar1' aria-expanded='false'><span class='sr-only'>Toggle navigation</span><span class='icon-bar'></span><span class='icon-bar'></span><span class='icon-bar'></span></button>
					  <!--<a class='navbar-brand' href='#'>DISKOVER</a></div>-->
						<a class='navbar-brand' id='logo-resize' href='index.php'> <img  src='images/logooble.png' width='60' height='75' alt='logo'/></a>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class='collapse navbar-collapse' id='topFixedNavbar1'>
					<div class='col-sm-3 col-lg-2 navbar-right'>
						<form class='navbar-form navbar-right' role='search' action='searchresult.php'>
							<div class='input-group'>
							
								<input type='text' class='form-control input-sm' name='search' placeholder='Where to?'>
								<div class='input-group-btn'>
									<button class='btn btn-primary btn-sm' id='ssbutton' name='submit-search' type='submit' onclick='nosearch(); return false;'><i class='glyphicon glyphicon-search'></i></button>
								</div>
							
							</div> 
						</form>
					</div>
				  	<ul class='nav navbar-nav navbar-right'>
						<li>

							<a href='loginform.php'>Admin <span class='glyphicon glyphicon-plus'></span></a>

										
									  
						</li>
						
						<li class='dropdown'>
							<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Locations<span class='caret'></span></a>
							<ul class='dropdown-menu'>
								<li><a href='building.php'>Buildings</a></li>
								<li><a href='food.php'>Food</a></li>
								<li><a href='commonplace.php'>Common Place</a></li>
								<li><a href='parkinglot.php'>Parking Lot</a></li>
								<li><a href='cr.php'>Comfort Room</a></li>
							</ul>
						</li>
						<li><a href='map.php'>Map</a></li>
						<li><a href='about.php'>About</a></li>
				  	</ul>
				</div>
			</nav>";
		}
	?>

<!--<?php //include 'analyticstracking.php';?>-->
