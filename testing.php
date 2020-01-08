<!DOCTYPE html>
<html>

<head>
  <!--These 4 external Files are necessary for Owl to function-->
  
  <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.theme.css">
  -->
  
  <!--This link is both owl CSS files combined into one-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/g/jquery.owlcarousel@1.31(owl.carousel.css+owl.theme.css)">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/fontawesome/4.6.3/css/font-awesome.min.css">
  
  <!--<script src="https://cdn.jsdelivr.net/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.owlcarousel/1.31/owl.carousel.min.js"></script>
  <style>-->
  
  <!--This tag is both JS files combined-->
  <script src="https://cdn.jsdelivr.net/g/jquery@2.2.4,jquery.owlcarousel@1.31"></script>
  
  <style>
    /*
    | SVG Nav Arrow Style
    */
    /* https://gist.github.com/seeRead/11229083 */
    
    .prod-slider-container {
      position: relative;
      font-family: font-awesome;
    }
    .owl-buttons {
      display:flex;
      width: 100%;
      justify-content: space-between;
    }
    .owl-prev, .owl-next {
       position: absolute;
    }
    
   i.fa {
      cursor: pointer;
      position: absolute;
      font-size: 60px;
      padding-top: 8px;
      height:64px;
      width:72px;
      color: rgba(0,0,0,.5);
      background: rgba(0,75,222,.7);
      border-radius:50%;
      display:table-cell;
    }
    
    .owl-prev, .owl-next {
      background-color:transparent;
      border: 0px none transparent;
      width: 0px;
      height: 0px;
    }
    
   .owl-perv {
      left:0;
    }
    
    .owl-next  {
     right:72px;
    }
    
    .item {
      outline: 3px dashed grey;
    }
  </style>
</head>

<body>
  <!-- + PRODUCT SLIDERS -->
  <div class="prod-slider-container">
    <div class="inner-container">
      <div class="slider_header_text">
        <b>LIKE WHAT YOU SAW?</b> Purchase the products seen in the videos.</div>
    </div>

    <div class="owl-carousel">

      <div class="item">
        <img src="http://assets.daddario.com/core_landing_tst/images/headstock_tuner.png" alt="Tuner Image">
      </div>
      <div class="item">
        <img src="http://assets.daddario.com/core_landing_tst/images/headstock_tuner.png" alt="Tuner Image">
      </div>
      <div class="item">
        <img src="http://assets.daddario.com/core_landing_tst/images/headstock_tuner.png" alt="Tuner Image">
      </div>
      <div class="item">
        <img src="http://assets.daddario.com/core_landing_tst/images/headstock_tuner.png" alt="Tuner Image">
      </div>
      <div class="item">
        <img src="http://assets.daddario.com/core_landing_tst/images/headstock_tuner.png" alt="Tuner Image">
      </div>

    </div>
    <!--.owl-carousel-->


  </div>
  <!--.prod-slider-container-->

  <script>
    $(document).ready(function() {
      $('.owl-carousel').owlCarousel({
        items: 3,
        autoPlay: 3000,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 3],
        navigation: true,
        navigationText: [
          "<i class='fa fa-chevron-left'></i>",
          "<i class='fa fa-chevron-right'></i>"
        ]
      });
    });
  </script>

</body>

</html>