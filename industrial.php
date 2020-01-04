<!DOCTYPE html>
<html>
<head>
	<title>Factory and Industrial HTML5</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="responsive.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> <!-- font awsome link -->
</head>
<body>
	<div class="container-custom" id="header">
		<div class="row">
			<div class="col-md-8">
				<ul class="topbar-left">
					<li>
						<i class="fa fa-map-marker" aria-hidden="true"></i>
						Forusbeen 50, 4035 Stavanger, Norway
					</li>
					<li>
						<i class="fa fa-phone" aria-hidden="true"></i>
						+84 0378 260 852
					</li>
					<li class="right">
						<i class="fa fa-envelope" aria-hidden="true"></i>
						info.industris@gmail.com
					</li>
				</ul>
			</div>
			<div class="col-md-4" id="md-04">
				<ul class="topbar-right">
					<li>
						<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="#">Login</a>
					</li>
					<li class="right">
					<a href="#">English &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="main-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-sm-12 col-xs-12">
					<div class="logo">
						<a href="Industrial.html"><img src="image/logo.png" alt="logo here"></a>
					</div>
					<a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars" aria-hidden="true"></i></a>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="topnav" id="myTopnav">
						<ul class="header-nav">
							<li>
								<a href="industrial.php" class="active">Home&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">About Us&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Services&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">Products&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#">News&nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></a>
							</li>
						</ul>
							<a href="#" class="btn btn-primary">Get a quote &nbsp;<i class="fa fa-paper-plane"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
	    function myFunction() {
	    	// console.log('hbvhjebrv');
		  var x = document.getElementById("myTopnav");
		  if (x.className === "navigation") {
		    x.className += " topnav";
		  } else {
		    x.className = "navigation";
		  }
		}
	</script>
</body>
</html>