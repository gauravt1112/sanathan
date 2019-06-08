<!DOCTYPE html>
<html>
	<head>
		<?php include('includes/includes.html') ?>
		   <?php include('includes/header1.html') ?>
		   <link rel="stylesheet" href="css/animate.css"/>
		  
	</head>
	<body>
		<div class="contact-us-banner">
		<div>
<div class="contact-us-banner-text wow fadeIn" data-wow-duration="8s">
		<!--<div class="who-we-are-banner-text-one" style="background-color: rgba(0,0,0,0.1);">
			
		</div>-->
	</div>
	</div>
	</div>
	<div class="contact-us-content">
	<div class="contact-us-header-wrapper">
		<h1>
				Contact Us
		</h1>
		<div class="contact-us-underline">
			<img src="img/images/line.png">
		</div>
		</div>
		</div>
		
		<div class="contact-us-paragraph hidden-xs">
			<Span class="make-bold">Corporate Office :</Span> Lower Parel, Mumbai &nbsp;  &nbsp; <span class="make-bold">Manufacturing Facility :</Span> Silvassa DNH<br>
			<span class="make-bold">Email :</Span> <a href="mailto:sales@sanathan.com" style="color: #336699; text-decoration: none;">sales@sanathan.com</a>   &nbsp;  &nbsp;  <span class="make-bold">Phone :</Span> +91 22 6634 3312 / 13 / 14
		</div>
		
			<div class="contact-us-paragraph visible-xs">
			<Span class="make-bold">Corporate Office :</Span> Lower Parel, Mumbai &nbsp;  &nbsp;<br> <span class="make-bold">Manufacturing Facility :</Span> Silvassa DNH<br>
			<span class="make-bold">Email :</Span> <a href="mailto:sales@sanathan.com" style="color: #336699; text-decoration: none;">sales@sanathan.com</a>   &nbsp;  &nbsp; <br> <span class="make-bold">Phone :</Span> +91 22 6634 3312 / 13 / 14
		</div>
		
		<div class="contact-us-inst">
			Send An Enquiry
		</div>
		<form method="post" action="newphpmailer/submit_post_form.php" enctype="multipart/form-data" id="cntc-form">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">

		<input type="text" name="name" class="form-control textbox" placeholder="Name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required"/>

		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			<select class="form-control" name="select" id="sel1" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required" onchange="if (this.value=='other'){this.form['other'].style.display='block'}else {this.form['other'].style.display='none'};">
        <option>I am...</option>
        <option>Agent</option>
        <option>Customer</option>
        <option>Trader</option>
        <option value="other">Other</option>
      </select>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
			
    	<input type="text" name="" class="form-control textbox" placeholder="Country" style="display: none;"/>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			
		<input type="text" name="other" class="form-control textbox" placeholder="I am..." style="display: none;"/>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 col-xs-offset-1">
			
    <!--	<input type="text" name="country" class="form-control textbox" placeholder="Country"/>-->
    <select class="form-control input-medium bfh-countries" name="select1" id="sel2" data-country="India"></select>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-4 col-xs-10 col-lg-offset-0 col-md-offset-0 col-sm-offset-0 col-xs-offset-1">
			
		<input type="text" name="company" class="form-control textbox" placeholder="Company Name"/>
		
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1">
		<div>
			<input type="text" name="contact" class="form-control textbox" id="contact-last" placeholder="Contact Number"/>
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
		
		<!--<form id="cuf" method="post" action="" enctype="multipart/form-data">
	<div class="contact-us-form-wrapper">
	<div class="contact-us-form">
	<div class="contact-us-field"><input type="text" name="Name" placeholder="Name" data-validation="custom" data-validation-regexp="^([a-zA-Z]+)$"  data-validation-error-msg="This Field is required"/></div>
	<div class="contact-us-field"><select class="form-control" id="sel1">
        <option>I am...</option>
        <option>Male</option>
        <option>Female</option>
      </select></div>
	<div class="contact-us-field"><input type="text" name="Country" placeholder="Country" data-validation="required" data-validation-error-msg="This Email is not valid"/></div>
	<div class="contact-us-field"><input type="text" name="Company Name" placeholder="Company Name" /></div>
	<div class="contact-us-full-field"><input type="text" name="Contact Number" placeholder="Contact Number"/></div>
	</div>
	</div>
	<div class="submit-button">
		<input class="submit" type="submit" name="submit" value="SUBMIT">
	</div>
	</form>
	-->
		<!--#################################################
	#	Script For Showing More Content				#
	#################################################-->
	
	<?php include('includes/footer.html') ?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        
         <script src="js/vendor/bootstrap-formhelpers-countries.js"></script>
        <script src="js/vendor/bootstrap-formhelpers-countries.es_ES.js"></script>
        <script src="js/main.js"></script>
        
        <script>
         	$(document).ready(function(){
         		$(".submit-form").on("click",function(){
         			$("#cntc-form").submit();
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