<!DOCTYPE html>
<html>
<head>
	<title>Carcousel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<style>
		.carousel-inner{
			position: relative;
			width: 100%;
			overflow: unset;
		}
		.carousel-control {
		    position: absolute;
		    top: 0;
		    margin-left: 81%;
		    bottom: 0;
		    left: 0px;
		    /*width: 96%;*/
		    color: #fff;
		    background-color: rgba(0,0,0,0);
		    /*opacity: .5;*/
		}
		.left .right {
			float: right;
		}
	</style>
</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<div class="container" style="border: 1px solid black;">
	  <div class="row">
	    <div class="col-md-12">
	      <div class="carousel slide multi-item-carousel" id="theCarousel">
	        <div class="carousel-inner">
	          <div class="item active">
	            <div class="col-xs-4"><a href="#1"><img src="../image/slider-1.jpg" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-4"><a href="#1"><img src="../image/slider-2.jpg" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-4"><a href="#1"><img src="../image/services-icon-1.png" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-4"><a href="#1"><img src="../image/slider.jpg" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-4"><a href="#1"><img src="../image/slider-1.jpg" class="img-responsive"></a></div>
	          </div>
	          <div class="item">
	            <div class="col-xs-4"><a href="#1"><img src="../image/slider-2.jpg" class="img-responsive"></a></div>
	          </div>
	          <!-- add  more items here -->
	          <!-- Example item start:  -->
	          
	          <div class="item">
	            <div class="col-xs-4"><a href="#1"><img src="../image/slider-1.jpg" class="img-responsive"></a></div>
	          </div>
	          
	          <!--  Example item end -->
	        </div>
	        <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
	        <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
	      </div>
	    </div>
	  </div>
	</div>

	<script>
		// Instantiate the Bootstrap carousel
		$('.multi-item-carousel').carousel({
		  interval: false
		});

		// for every slide in carousel, copy the next slide's item in the slide.
		// Do the same for the next, next item.
		$('.multi-item-carousel .item').each(function(){
		  var next = $(this).next();
		  if (!next.length) {
		    next = $(this).siblings(':first');
		  }
		  next.children(':first-child').clone().appendTo($(this));
		  
		  if (next.next().length>0) {
		    next.next().children(':first-child').clone().appendTo($(this));
		  } else {
		  	$(this).siblings(':first').children(':first-child').clone().appendTo($(this));
		  }
		});
	</script>
</body>
</html>