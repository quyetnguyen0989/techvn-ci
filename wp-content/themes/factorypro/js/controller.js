/* SLIDER VIDEO PLAY
/*====================================================================*/
	
	(function($){

		"use strict";
		$(".slider").each(function(){
			var video = $(this).find('video');
			if (video.paused) {video.hide();}
		});

	})(jQuery);

/* FORMS
/*====================================================================*/
	
	(function($){

		"use strict";
		

		$.fn.placeholder = function() {

			$.each(this, function(){

				var $this       = $(this);
				var placeholder = $this.data("placeholder");

				if($this.val() == '') { $this.val(placeholder);}

				$this
				.on('focus', function(){
					if($this.val() == placeholder) { $this.val('');}
				})
				.on('focusout', function(){
					if($this.val() == '') { $this.val(placeholder);}
				});

			});

		}

		$('input:not([type="submit"]),textarea').placeholder();
		$('input:not([type="submit"]),textarea,select').wrap('<div class="form-wrap"></div>');

		$('.form-wrap').each(function(){
			var $this = $(this);
			$this.addClass($this.children().data('icon'));
			if ($this.children('textarea').length != 0) {
				$this.addClass('textarea');
			};

			if ($this.children('input[type="radio"]').length != 0 || $this.children('input[type="checkbox"]').length != 0) {
				$this.attr('data-value',$this.children().attr('value'));
			};

		});

		var form         = $('#ajax-form').append('<div id="form-messages"></div>');
		var formMessages = $('#form-messages');
		var formSent     = $('#submit');

		// Set up an event listener for the contact form.
		$(form).submit(function(e) {

			// Stop the browser from submitting the form.
			e.preventDefault();

			formSent.attr('disabled','disabled');

			// Serialize the form data.
			var formData = $(form).serialize();

			// Submit the form using AJAX.
			$.ajax({
				type: 'POST',
				url: $(form).attr('action'),
				data: formData
			})
			.done(function(response) {
				// Make sure that the formMessages div has the 'success' class.
				$(formMessages).removeClass('error');
				$(formMessages).addClass('success');

				formSent.removeAttr('disabled');

				// Set the message text.
				$(formMessages).text(response);

				// Clear the form.
				$('#name').val('');
				$('#email').val('');
				$('#subject').val('');
				$('#message').val('');
			})
			.fail(function(data) {
				// Make sure that the formMessages div has the 'error' class.
				$(formMessages).removeClass('success');
				$(formMessages).addClass('error');

				// Set the message text.
				if (data.responseText !== '') {
					$(formMessages).text(data.responseText);
				} else {
					$(formMessages).text('Oops! An error occured and your message could not be sent.');
				}
			});

		});


	})(jQuery);

/*	FROM-TO COUNTER
/*====================================================================*/

	(function(a){ "use strict"; a.fn.fromTo=function(g){g=g||{};return a(this).each(function(){function e(a){a=b.formatter.call(h,a,b);f.html(a)}var b=a.extend({},a.fn.fromTo.defaults,{from:a(this).data("from"),to:a(this).data("to"),speed:a(this).data("speed"),refreshInterval:a(this).data("refresh-interval"),decimals:a(this).data("decimals")},g),j=Math.ceil(b.speed/b.refreshInterval),l=(b.to-b.from)/j,h=this,f=a(this),k=0,c=b.from,d=f.data("fromTo")||{};f.data("fromTo",d);d.interval&&clearInterval(d.interval);d.interval=setInterval(function(){c+=l;k++;e(c);"function"==typeof b.onUpdate&&b.onUpdate.call(h,c);k>=j&&(f.removeData("fromTo"),clearInterval(d.interval),c=b.to,"function"==typeof b.onComplete&&b.onComplete.call(h,c))},b.refreshInterval);e(c)})};a.fn.fromTo.defaults={from:0,to:0,speed:1E3,refreshInterval:100,decimals:0,formatter:function(a,e){return a.toFixed(e.decimals)},onUpdate:null,onComplete:null}})(jQuery);

/*	HEADER
/*====================================================================*/
	
	(function($){

		"use strict";

		var docElem = document.documentElement,
			header       = $( '.header' ),
	        didScroll = false,
	        changeHeaderOn  = 100;

	    function init() {
	        window.addEventListener( 'scroll', function( event ) {
	            if( !didScroll ) {
	                didScroll = true;
	                scrollPage();
	            }
	        }, false );
	    }


	/*-------------------------------------------------*/
	/* =  Search animation
	/*-------------------------------------------------*/
	
	var searchToggle = $('.open-search'),
		inputAnime = $(".form-search"),
		body = $('body');

	searchToggle.on('click', function(event){
		event.preventDefault();

		if ( !inputAnime.hasClass('active') ) {
			inputAnime.addClass('active');
		} else {
			inputAnime.removeClass('active');			
		}
	});

	body.on('click', function(){
		inputAnime.removeClass('active');
	});

	var elemBinds = $('.open-search, .form-search');
	elemBinds.on('click', function(e) {
		e.stopPropagation();
	});

	    function scrollPage() {
	        var sy = scrollY();

    		if ( sy >= changeHeaderOn ) {

        		header.addClass('fixed');
        		setTimeout(function(){
        			header.addClass('active');
        		},400);
        		
        	} else {

        		header
        		.removeClass('active')
        		.removeClass('fixed');
        	}
	        
	        didScroll = false;
	    }

	    function scrollY() {
	        return window.pageYOffset || docElem.scrollTop;
	    }

	    init();

	    $('.menu-toggle').on('click',function(){
			$(this).toggleClass('animate');
			$('.menu').slideToggle(400, "easeOutCubic");
		});

	})(jQuery);
	


/*  PARALLAX
/*====================================================================*/

	(function($){

		"use strict";

		function parallax(target, offset){
			if(Modernizr.mq("only screen and (min-width: 1280px)")){

		    	var $window = $(window);

		    	$.each(target,function(){

					var $this = $(this);

				    $(window).scroll(function() {
						var yPos   = (offset) ? -(($window.scrollTop()-$this.offset().top) / 2) : -($window.scrollTop() / 2);
						var coords = '50% '+ yPos + 'px';
						$this.css({ backgroundPosition: coords });    
					}); 
				})
			}
		}

		parallax($('*[data-parallax="true"]'), false);
		parallax($('.section[data-parallax="true"]'), true);

	})(jQuery);

/*  TABS
/*====================================================================*/
	
	(function($){

		"use strict";

		$('.tabs').each(function(){

			var $this = $(this),
				tabs = $this.find('.tab'),
				tabsQ = tabs.length,
				tabsContent = $this.find('.tab-content'),
				tabSet = $this.find('.tabset'),
				tabsDefaultWidth  = 0,
				tabsDefaultHeight = 0;

				if(!tabs.hasClass('active')){
					tabs.first().addClass('active');
				}
				
				tabs.each(function(){
					tabsDefaultWidth += $(this).outerWidth();
					tabsDefaultHeight += $(this).outerHeight();
				});

				function OverflowCorrection(){

					if(tabsDefaultWidth >= $this.outerWidth()  && $this.hasClass('horizontal')){
						$this.addClass('tab-full');
					} else {
						$this.removeClass('tab-full');
					}

				}

				if(tabsQ >= 2){

					tabs.on('click', function(){
						
						var $self = $(this);

						if(!$self.hasClass("active")){

							$self.addClass("active").siblings().removeClass("active");
							tabsContent.hide();
							tabsContent.eq($self.index()).fadeIn(300);
						}
						
					});
				}

				if($this.hasClass('vertical')){
					$this.find('.tabs-container').css("min-height",tabsDefaultHeight + (tabs.length - 1));
				}

				OverflowCorrection();

				$(window).resize(OverflowCorrection);			

		});

	})(jQuery);


/*  CONTENT BOXES, COLUMNS, CLIENTS, CAROUSEL, PRICING TABLES
/*====================================================================*/
	
	(function($){

		"use strict";

		function animateInView(container,child){

			container.each(function(){

				var $this   = $(this);
				var child   = $this.children(child);
				var length  = child.length;
				var i = 0;
				var timer = '';

				function animation() {
					$(child[i]).addClass('active');
					i++;
					if (i == length ) {clearInterval(timer);}
				}

				$this.one('inview', function(event, isInView, visiblePartX, visiblePartY){
			    	if (isInView) {
						var timer = setInterval(animation, 250); 
			    	};
			    });
			});

		}

		animateInView($('.row'), $('[data-animate="true"]'));
		animateInView($('.content-box[data-animate="true"]'), $('.box'));
		animateInView($('.clients[data-animate="true"]'), $('.client'));
		animateInView($('.carousel[data-animate="true"]'), $('.item'));
		animateInView($('.pricing-table[data-animate="true"]'), $('.column'));


	})(jQuery);

/*  PROGRESS BAR
/*====================================================================*/
	
	(function($){

		"use strict";

		$(".progress-bar").each(function() {

			var $this = $(this);
			var line = $this.find('.line').wrap("<div class='bar'></div>");

			function progressLine(){

				line.each(function(){
					var $self = $(this).addClass('visible');
					var percentage = $self.data('percentage');
					$self
					.width(0)
					.animate({width: percentage+'%'}, 2500, 'easeOutCirc')
					.fromTo({from: 0, to: percentage, speed: 2500});
				});
				
			}
			
			$this.one('inview', function(event, isInView, visiblePartX, visiblePartY){
			    	if (isInView) {
		    		setTimeout(function(){
		    			progressLine();
		    		},250)
		    	};
		    });
				
		});

	})(jQuery);

/*  COUNTERS
/*====================================================================*/
	
	(function($){

		"use strict";

		$('.counter').each(function(){

			var $self = $(this),
				count = $self.find('.count').text("0");

			function counter(){
				count.each(function(){
					var $this = $(this);
					$this.fromTo({from: 0, to: $this.data('value'), speed: 2000});
				})
			}

			$self.one('inview', function(event, isInView, visiblePartX, visiblePartY){
			    if (isInView) {
		    		setTimeout(function(){
		    			counter();
		    		}, 250)
		    	};
		    });

		});
		$('.counter').each(function(){

			var $self = $(this),
				count = $self.find('.counts').text("0");

			function counter(){
				count.each(function(){
					var $this = $(this);
					$this.fromTo({from: 0, to: $this.data('value'), speed: 2000});
				})
			}

			$self.one('inview', function(event, isInView, visiblePartX, visiblePartY){
			    if (isInView) {
		    		setTimeout(function(){
		    			counter();
		    		}, 250)
		    	};
		    });

		});

	})(jQuery);

/*  SECTIONS
/*====================================================================*/
	
	(function($){

		"use strict";

		$('.section[data-animate="true"]').each(function(){

			var $self = $(this),
				layer = $self.find('.layer');

			function animate(){
				layer.each(function(){
					$(this).addClass('active');
				})
			}

			$self.one('inview', function(event, isInView, visiblePartX, visiblePartY){
			    if (isInView) {
		    		setTimeout(function(){
		    			animate();
		    		}, 300)
		    	};
		    });

		});

	})(jQuery);

/*	PERSONS
/*====================================================================*/
	
	(function($){

		"use strict";

		imagesLoaded( $('.person'), function() {

			$('.person .img').each(function(){
				var $this = $(this);
				$this.width($this.children('img').width());
			});
			
		});

	})(jQuery);


/*	SEPARATORS
/*====================================================================*/

	(function($){

		"use strict";

		$('.i-separator').each(function(){

			var $this = $(this);

			if ($this.data('target') !== undefined) {

				$this.bind('click.smoothscroll', function (event) {
				    event.preventDefault();
				    var target = $this.data('target');
				    $('html, body').stop().animate({'scrollTop': $(target).offset().top}, 500, function () {
				        window.location.hash = target;
				    });
				});

			};
			
		})
		;
	})(jQuery);

/*	SMOOTH SCROLL
/*====================================================================*/

	(function($){

		"use strict";

		 function init() {
	        window.addEventListener( 'scroll', function( event ) {
	            if( !didScroll ) {
	                didScroll = true;
	                scrollPage();
	            }
	        }, false );
	    }

	    function scrollPage() {
	        var sy = scrollY();
    		if ( sy >= activateOn ) {
        		top.addClass('animate')
        	} else {
        		top.removeClass('animate')
        	}
	        
	        didScroll = false;
	    }

	    function scrollY() {
	        return window.pageYOffset || docElem.scrollTop;
	    }

		var top         = $('#top'),
			docElem     = document.documentElement,
	        didScroll   = false,
	        activateOn  = 700;

		top.bind('click.smoothscroll', function (event) {
		    event.preventDefault();
		    var target = this.hash;
		    $('html, body').stop().animate({
		        'scrollTop': $(target).offset().top
		    }, 800, function () {
		        window.location.hash = target;
		    });
		});

	    init();

	})(jQuery);

/*	EXTERNAL PLUGINS
/*====================================================================*/

	(function($){

		"use strict";
		
				// --------------------------------------------------
		// magnificPopup
		// --------------------------------------------------
			
			jQuery('.simple-ajax-popup-align-top').magnificPopup({
		        type: 'ajax',
		        alignTop: true,
		        overflowY: 'scroll'
		    });
		
		    jQuery('.simple-ajax-popup').magnificPopup({
		        type: 'ajax'
		    });
		
		
		//project filter
		
		var $container = jQuery('#image-gallery-mix');
			$container.isotope({
				itemSelector: '.project-post',
				filter: '*'
		});
		jQuery('.gallery-filter li a').on("click", function() {
			var $this = jQuery(this);
			if ( $this.hasClass('selected') ) {
				return false;
				}
			var $optionSet = $this.parents();
			$optionSet.find('.selected').removeClass('selected');
			$this.addClass('selected');
					
			var selector = jQuery(this).attr('data-filter');
			$container.isotope({ 
			filter: selector
		});
		return false;
		});


		$('.slider').NinzioSlider({
			container     : $('.slides'),
	   		slide         : $('.slide'),
	   		autoplay      : true,
			autoplaydelay : 5000,
			bullets       : true
		});

		$(".carousel").owlCarousel({
 
		    items :4,
		    itemsDesktop : [1280,4],
		    itemsDesktopSmall : [1024,3],
		    itemsTablet: [768,2],
		    itemsTabletSmall: [640,1],
		    itemsMobile : [480,1],
		    singleItem : false,
		 
		    //Basic Speeds
		    slideSpeed : 200,
		    paginationSpeed : 800,
		    rewindSpeed : 1000,
		 
		    //Autoplay
		    autoPlay : true,
		    stopOnHover : true,
		 
		    // Navigation
		    navigation : false,
		    navigationText : ["prev","next"],
		    rewindNav : true,
		    scrollPerPage : false,
		 
		    //Pagination
		    pagination : true,
		    paginationNumbers: false,
		 
		    // Responsive 
		    responsive: true,
		    responsiveRefreshRate : 200,
		    responsiveBaseWidth: window,
		});

		$(".testimonials").owlCarousel({
 
		    items :1,
		    autoHeight : true,
		 
		    //Basic Speeds
		    slideSpeed : 200,
		    paginationSpeed : 800,
		    rewindSpeed : 1000,
		 
		    //Autoplay
		    autoPlay : true,
		    stopOnHover : true,
		 
		    // Navigation
		    navigation : false,
		    rewindNav : true,
		    scrollPerPage : false,
		 
		    //Pagination
		    pagination : true,
		    paginationNumbers: false,
		 
		    // Responsive 
		    responsive: true,
		    responsiveRefreshRate : 200,
		    responsiveBaseWidth: window,
		});
		
		$(".coaches .wpb_wrapper").owlCarousel({
 
		    items :2,
		    autoHeight : true,
		 
		    //Basic Speeds
		    slideSpeed : 200,
		    paginationSpeed : 800,
		    rewindSpeed : 1000,
		 
		    //Autoplay
		    autoPlay : true,
		    stopOnHover : true,
		 
		    // Navigation
		    navigation : false,
		    rewindNav : true,
		    scrollPerPage : false,
		 
		    //Pagination
		    pagination : true,
		    paginationNumbers: false,
		 
		    // Responsive 
		    responsive: true,
		    responsiveRefreshRate : 200,
		    responsiveBaseWidth: window,
		});

		$(".clients").owlCarousel({
 
		    items :4,
		    itemsDesktop : [1280,4],
		    itemsDesktopSmall : [1024,3],
		    itemsTablet: [768,2],
		    itemsTabletSmall: [640,1],
		    itemsMobile : [480,1],
		    singleItem : false,
		 
		    //Basic Speeds
		    slideSpeed : 200,
		    paginationSpeed : 800,
		    rewindSpeed : 1000,
		 
		    //Autoplay
		    autoPlay : true,
		    stopOnHover : true,
		 
		    // Navigation
		    navigation : true,
		    navigationText : ["",""],
		    rewindNav : true,
		    scrollPerPage : false,
		 
		    //Pagination
		    pagination : false,
		    paginationNumbers: false,
		 
		    // Responsive 
		    responsive: true,
		    responsiveRefreshRate : 200,
		    responsiveBaseWidth: window,
		});

		$('.menu a,a[href^="#"]').mPageScroll2id({
		    highlightSelector:".menu a",
		    speed: 750,
		    offset:60,
		    easing: "easeOutCubic",
		    updateHash:false,
		    filter:':not(.filter)'
		});


		if(Modernizr.mq("only screen and (min-width: 1024px)")){
			$("a").nivoLightbox({
				effect: 'fadeScale',
			    theme: 'default', 
			    keyboardNav: true, 
			    clickOverlayToClose: true, 
			    errorMessage: 'The requested content cannot be loaded. Please try again later.' 
			});
		}

	})(jQuery);
