<!DOCTYPE html>
<html>
<head>
	<title>Nav-Bar Button</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
	<h1>Mobile Navigation menu using css and jquery</h1>
		<div class="icons">
			<button class="icon icon--transparent">
				<span></span>
				<span></span>
				<span></span>
			</button>
		</div>
	</div>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script>
		var animation = 'rubberBand';
		$('.icon').on('click', function () {
			$(this).toggleClass('icon--active');
		});
	</script>
</body>
</html>