<!DOCTYPE html>
<html>
<head>
	<title>Res-01</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!-- <script src="scripts.js"></script> -->
</head>
<body>
	<div class="section">
		<span class="navbar-toggle" href="javascript:void(0);" onclick="myFunction()"><i class="fa fa-bars"></i></span>
	  <a href="#" class="logo">logo</a>
		<nav class="navbar" id="myTopnav">
			<ul class="main-nav">
				<li>
					<a href="#" class="nav-links">Home</a>
				</li>
				<li>
					<a href="#" class="nav-links">Products</a>
				</li>
				<li>
					<a href="#" class="nav-links">About Us</a>
				</li>
				<li>
					<a href="#" class="nav-links">Contact Us</a>
				</li>
				<li>
					<a href="#" class="nav-links">Blog</a>
				</li>
			</ul>
		</nav>
	</div>
	<script>
		function myFunction() {
			console.log('jhvbsedb');
		  var x = document.getElementById("myTopnav");
			  if (x.className === "responsive") {
			    x.className += "navbar";
			  } else {
			    x.className = "responsive";
			  }
		}
	</script>
</body>
</html>