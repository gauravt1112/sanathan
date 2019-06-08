   	
  

   	$(document).ready(function() {
		/* ---------------------------------------------- /*
		 * Smooth scroll / Scroll To Top
		/* ---------------------------------------------- */
//		$(".screen-height").height($(window).height());
		
      scrollToTop();
     homeLoadingScreen();
     
     
     
		$('a[href*=#]').bind("click", function(e){
           
			var anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $(anchor.attr('href')).offset().top
			}, 1000);
			e.preventDefault();
		});

		$(window).scroll(function() {
			if ($(this).scrollTop() > 100) {
				$('.scroll-up').fadeIn();
			} else {
				$('.scroll-up').fadeOut();
			}
		});

		/* ---------------------------------------------- /*
		 * Navbar
		/* ---------------------------------------------- */

		/*$('.header').sticky({
			topSpacing: 0
		});

		$('body').scrollspy({
			target: '.navbar-custom',
			offset: 70
		})*/
		
});


	/* ---------------------------------------------- /*
		 * Home BG
		/* ---------------------------------------------- */

		

		$(window).resize(function(){
			$(".screen-height").height($(window).height());
		});
	
	
	$(".comming-soon-wrapper").height($(window).height()-195);

		$(window).resize(function(){
			$(".comming-soon-wrapper").height($(window).height()-195);
		});
		$(window).load(function(){
	
			$(".screen-height").height($(window).height());
//			$(".sanathan-loader-home").fadeOut(500);	
		
		$(".who-we-are-banner-text-one").stop().animate({"width":"0%"},{duration: 5000,complete:function(){
			$(this).fadeOut(500);
		}});
		});
		
		

		/*if (/Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent)) {
			$('#home').css({'background-attachment': 'scroll'});
		} else {
			$('#home').parallax('50%', 0.1);
		}*/

function homeLoadingScreen(){
		$( ".loader-inner-container" ).animate({
			height: "0"
		}, 15000);
	}
	
       

function scrollToTop(){
	    var offset = 350;
    var duration = 300;
    $(window).scroll(function(){
        if ($(this).scrollTop() > offset) {
            $('.scroll-up1').fadeIn(duration);
        } else {
            $('.scroll-up1').fadeOut(duration);
        }
    });

    $('.scroll-up1').click(function(event) {
        event.preventDefault();
        $('html, body').animate({scrollTop: 0},1000);
        return false;
    });
}