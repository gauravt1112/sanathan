<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

    <head>
      <?php include('includes/includes.html') ?>
       <link rel="stylesheet" href="css/animate.css"/>
    </head>
    
      <style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  </style>
    <body>
    
    <div class="sanathan-loader-home">
	<div class="outer-loader">
		<div class="inner-loader">
			<div class="loader-container">
				<div class="loader-inner-container"></div>
			</div>
		</div>
	</div>
</div>

 <!-- Home start -->
 <div class="abc" style="overflow: hidden;">
 <div class="def" style="position: absolute;z-index: 999999999;height: 85%;width: 100%;">
 	 <div style="display: table;height: 100%;width: 100%;">
 	 	<div style="display: table-cell;vertical-align: middle;text-align: center;">
 	 		<img class="img-responsive" src="img/images/Main-Logo.png" style="margin: 0 auto; margin-top: 20px;">
 	 			
 	 	</div>
 	 </div>
 </div>
 <section id="home" class="pfblock-image screen-height">
 <!--<div class="main-logo">
 	<img class="img-responsive" src="img/images/Main-Logo.png">
        <a href="#logo-id">
		<div class="scroll-down">
		<div class="arrow-show">
          <img src="img/images/Arrow-01.png">
          </div>
          <div class="arrow-hide">
          <img src="img/arrow-small.png">
          </div>
		</div>
        </a>
        </div>-->
</section>
<div class="main-logo" style="">
        <a href="#logo-id">
		<div class="scroll-down">
		<div class="arrow-show">
          <img src="img/images/Arrow-01.png">
          </div>
         <div class="arrow-hide">
          <img src="img/arrow-small.png">
          </div>
		</div>
        </a>
         <div class="scroll-to-discover">
                <div class="frecce"></div>
            </div>
        </div>
</div>
	<!-- Home end -->
	
	<?php include('includes/header.html') ?>
	
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
      <div class="first-item">
        	
       </div>
      </div>

      <div class="item">
        <div class="second-item">
        	
       </div>
      </div>
    
      <div class="item">
     <div class="third-item">
        	
       </div>
      </div>

      <div class="item">
       <div class="fourth-item">
        	
       </div>
      </div>
    </div>
  </div>
</div>

	<!-- Navigation end -->
	
	<div class="home-content">
		<h2 class="wow fadeInUp" data-wow-duration="3s">Welcome To</h2>
<h1 class="wow fadeInUp" data-wow-duration="4s">Sanathan Textiles Pvt. Ltd.</h1>
<p class="wow fadeInUp" data-wow-duration="5s">Managed and promoted by the Dattani family for over 75 years, we are one of India’s leading yarn manufacturers and innovators, supplying globally and providing raw material to multiple industries. Located in India with our headquarters situated in Mumbai and various other branch offices around the country, we produce and supply a wide range of Polyester Filament Yarns (PFY) and Cotton Yarns. At Sanathan, we are committed to our aim of providing innovative Yarns for the Fabric of our lives. </p>
		
	</div>
	
	<div class="container">
		<div class="row" style="margin: 0; background-color: #115293;">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0" style="background-color: #115293;">
				<img src="img/Pie Chart-circle.png" class="img-responsive abcd">
			</div>
			
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0 embed-responsive embed-responsive-4by3" style="background-color: black;">
				<video id="form-submit" controls onpause="$('.overlay').fadeIn();" onplay="$('.overlay').fadeOut();">
					<source src="img/video/sanathan.mp4" type="video/mp4" />
					
				</video>
				<div class="overlay" style="text-align: center;">
    					<a onclick="document.getElementById('form-submit').play();"><span class="plus-overlay"><img src="img/play128.png"></span></a>
    				</div>
			</div>
			
		</div>
	</div>
	
	
	
	<div class="bottom-banner">
		<div>
<div class="bottom-banner-text wow fadeIn" data-wow-duration="15s">
		<!--<div class="who-we-are-banner-text-one" style="background-color: rgba(0,0,0,0.1);">
			
		</div>-->
	</div>
	</div>
	</div>
	
		<?php include('includes/footer.html') ?>
	
	
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
		<script>

 
  
  $(window).load(function(){
  	if($(".loader-inner-container").height() < 300){
		$(".loader-inner-container").stop().animate({"height":"0%"},{duration: 500,complete:function(){
			$(".sanathan-loader-home").fadeOut(500);
		}});
	}
  });
</script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71461292-1', 'auto');
  ga('send', 'pageview');

</script>
        <script src="js/vendor/wow.min.js"></script>
        <script>
              new WOW().init();
              </script>
    </body>
</html>
