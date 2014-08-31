//Mean Menu

//jQuery(document).ready(function () {
//    jQuery('nav').meanmenu( {
//    	meanScreenWidth: "769",
//    	meanRevealPosition: "left",   	
//    });
//});

// Header banner fade in/out
$(function() {
	function doAnimation(duration, handler) {
		var t0 = new Date().getTime();
		var tE = t0 + duration;
		var stopped = false;
			
		function _exec() {
			if (stopped) return;
			
			var tN = new Date().getTime();
			var pct = (tN - t0) / duration;
			
			handler(Math.max(0, Math.min(1, pct)));
			if (tE > tN)
				_requestAnimationFrame();
		}
		
		function _requestAnimationFrame() {
			if (window.requestAnimationFrame) window.requestAnimationFrame(_exec);
			else if (window.mozRequestAnimationFrame) window.mozRequestAnimationFrame(_exec);
			else if (window.webkitRequestAnimationFrame) window.webkitRequestAnimationFrame(_exec);
			else if (window.msRequestAnimationFrame) window.msRequestAnimationFrame(_exec);
			else setTimeout(_exec, 0);
		}
		
		_requestAnimationFrame();
		
		return { stop: function() { stopped = true; }, finish: function() { stopped = true; handler(1); } };
	}
	
	window.doAnimation = doAnimation;
	
	var currentAnimation = null;
	
	function ease(t, b, c, d) {
		t /= d;
		t--;
		return c * (t * t * t * t * t + 1) + b;
	}

	window.quinticEase = ease;
		
	$([document, window]).scroll(function() {
		if ($(window).scrollTop() >= 250) {
			$('.header').addClass('visible');
		} else {
			$('.header').removeClass('visible');
		}
	}).triggerHandler('scroll');
		
	var mf1 = function(mq) {
		if (!mq.matches) return;
		
		$('.animate').click(function(v) {
			var linkTo = $(this).attr('href');
			var sp = $(window).scrollTop();
			var tp = $(linkTo).offset().top - 90;
			
			var vc = tp - sp;
						
			if (currentAnimation) currentAnimation.stop();
			currentAnimation = doAnimation(1200, function(pct) {
				$(window).scrollTop(ease(pct, sp, vc, 1));
			});
			return false;
		});
		// Fade up homepage
		 $(window).scroll(function () {
	        var bottom_of_window = $(window).scrollTop() + $(window).height();
	        $('.featured').each(function (i) {
	            var bottom_of_object = $(this).offset().top + $(this).outerHeight();
	            if (bottom_of_window > bottom_of_object) {
	                $(this).find( '.media-body' ).animate({
	                    'top': '0', 
	                    'opacity': '1',             
	                }, 500);
	            }
	        });       
	    });
		
	}
		
	var mf2 = function(mq) {
		if (!mq.matches) return;
			
		$('.animate').click(function(v) {
			var linkTo = $(this).attr('href');
			var sp = $(window).scrollTop();
			var tp = $(linkTo).offset().top;
			
			var vc = tp - sp;
						
			if (currentAnimation) currentAnimation.stop();
			currentAnimation = doAnimation(1200, function(pct) {
				$(window).scrollTop(ease(pct, sp, vc, 1));
			});
			return false;
		});		
	}

			
	var mm1 = window.matchMedia("(max-width:979px)");
	var mm2 = window.matchMedia("(min-width: 980px)");
    
	$(window).load(function() {
		if (mm1.matches) mf2(mm1);
		if (mm2.matches) mf1(mm2);
	});

	if (mm1.matches) mf2(mm1);
	if (mm2.matches) mf1(mm2);

	mm1.addListener(mf2, true);
	mm2.addListener(mf1, true);
});

$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
$(function() {
	$( ".nav-mobile-toggle").click(function() {
		$( ".nav" ).slideToggle( 300 );
		$( ".nav" ).toggleClass( "nav-open" );
		$( ".header" ).toggleClass( "nav-open" );
	});
	
	$( ".project-inquiry-container" ).click(function() {
	  $( '.footer-upper-contact' ).slideToggle( "fast" );
	});
});