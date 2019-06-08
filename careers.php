<!DOCTYPE html>
<html>
	<head>
		<?php include('includes/includes.html') ?>
		   <?php include('includes/header1.html') ?>
		   <link rel="stylesheet" href="css/animate.css"/>
	</head>
	<body>
		<div class="careers-banner">
		<div>
<div class="careers-banner-text wow fadeIn" data-wow-duration="8s">
		<!--<div class="who-we-are-banner-text-one" style="background-color: rgba(0,0,0,0.1);">
			
		</div>-->
	</div>
	</div>
	</div>
	<div class="careers-content">
	<div class="careers-header-wrapper">
		<h1>
				Careers
		</h1>
		<div class="careers-underline">
			<img src="img/images/line.png">
		</div>
		</div>
		</div>
		
		<div class="careers-paragraph">
We’re looking for smart, young individuals, who think that they can add value to our brand. If you see an opportunity and can explain  us how you can help us, we're all ears.
		</div>
		
		<form method="post" action="newphpmailer/contact_post_form.php" enctype="multipart/form-data" id="careers-form">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">

		<input type="text" class="form-control textbox" name="Forename" placeholder="Forename" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required"/>

		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			<input type="text" class="form-control textbox" name="Surname" placeholder="Surname"/>
	
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
			
    	<input type="text" class="form-control textbox" name="Email" placeholder="Email" data-validation="required" data-validation-error-msg="This Email is not valid"/>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			
		<input type="text" class="form-control textbox" name="Designation" placeholder="Designation"/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-0">
		<div>
			<div class="careers-instruction-text">
		Upload Resume
	</div>
		</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1">
		<div class="attachment-wrapper">
	<div class="attachment">
	<input type="file" name="upload[]" id="upload" class="upload" style="display: inline;"/>

	</div>
	</div>
		</div>
	</div>
	
	<div class="row" style="padding-top: 15px;padding-bottom: 15px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-10 col-xs-offset-1">
		<div class="submit-button">
		<input class="submit" type="submit" name="submit" value="SUBMIT" style="margin-left: 15px;">
	</div>
		</div>
	</div>
	
</div>
</form>
	
		<!--#################################################
	#	Script For Showing More Content				#
	#################################################-->
	
	<?php include('includes/footer.html') ?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        
          <script>
         	$(document).ready(function(){
         		$(".submit-form").on("click",function(){
         			$("#cufv").submit();
         		});
         	});
         	
         </script>
         
         <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>
	<script>
	 $.validate();
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
        <script type="text/javascript">
		$(function(){
			$(".read-more").on("click",function(){
				$(this).find(".hide-content").slideToggle(500);
				$(this).find(".plus").toggleClass("minus");

			});
			
			$(".hide-content").on("click",function(event){
				event.stopPropagation();
			});
		});
	</script>
	<script src="js/vendor/wow.min.js"></script>
        <script>
              new WOW().init();
              </script>
	</body>
</html>