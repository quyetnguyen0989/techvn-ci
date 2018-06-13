/*
 Ninzio Slider 1.0.0
 http://www.ninzio.com
 Copyright 2014 Ninzio Team
*/

;(function($, window, document, undefined) {
    
   
  	// DEFAULTS
   	var defaults = {
   		container     : $('.slides'),
   		slide         : $('.slide'),
   		transition    : 'fade',
   		autoplay      : true,
		autoplaydelay : 5000,
		bullets       : true
	};

    // CONSTRUCTOR FUNCTION
	function NinzioSlider (element, options){
		
		this.config = $.extend({}, defaults, options);
		this.element = element;
		this.init();
	}

	// METHOD
	NinzioSlider.prototype.init = function(){

		// Variables declaration
		// ====================================================

			var slider           = this.element,
				slidesContainer  = this.config.container,
				slide            = this.config.slide,
				layer            = slider.find('.layer'),
				totalSlides      = slide.length,
				active           = 0;

		// Options
		// ====================================================

			var optAutoplay      = this.config.autoplay,
				optAutoplaydelay = this.config.autoplaydelay,
				optBullets       = this.config.bullets;

		// Functions
		// ====================================================

			function Navigate(direction){

				slide.first().removeClass('first-active');

				active += ~~(direction === 'next') || -1;
				active = (active < 0) ? totalSlides -1 : active % totalSlides;

				if(direction === 'next'){

					if (active == 0) {

						// We are at the last slide right now
						slide.eq(totalSlides-1)
						.removeClass("animate-in")
						.addClass("navOutNext")
						.removeClass("navInNext")
						.removeClass("navInPrev")
						.removeClass("navOutPrev")
						.addClass("animate-out")
						.removeClass("active");

						slide.eq(active)
						.removeClass("animate-out")
						.addClass("navInNext")
						.removeClass("navOutNext")
						.removeClass("navInPrev")
						.removeClass("navOutPrev")
						.addClass("active")
						.addClass("animate-in");
						
					} else {

						slide.eq(active-1)
						.removeClass("animate-in")
						.addClass("navOutNext")
						.removeClass("navInNext")
						.removeClass("navInPrev")
						.removeClass("navOutPrev")
						.addClass("animate-out")
						.removeClass("active");

						slide.eq(active)
						.removeClass("animate-out")
						.addClass("navInNext")
						.removeClass("navOutNext")
						.removeClass("navInPrev")
						.removeClass("navOutPrev")
						.addClass("active")
						.addClass("animate-in");

					}
					
				} else {

					if (active == totalSlides - 1) {
						// We are at the first slide right now
						slide.eq(0)
						.removeClass("animate-in")
						.addClass("navOutPrev")
						.removeClass("navInPrev")
						.removeClass("navInNext")
						.removeClass("navOutNext")
						.addClass("animate-out")
						.removeClass("active");

						slide.eq(active)
						.removeClass("animate-out")
						.addClass("navInPrev")
						.removeClass("navOutPrev")
						.removeClass("navInNext")
						.removeClass("navOutNext")
						.addClass("active")
						.addClass("animate-in");

					} else {

						slide.eq(active+1)
						.removeClass("animate-in")
						.addClass("navOutPrev")
						.removeClass("navInPrev")
						.removeClass("navInNext")
						.removeClass("navOutNext")
						.addClass("animate-out")
						.removeClass("active");

						slide.eq(active)
						.removeClass("animate-out")
						.addClass("navInPrev")
						.removeClass("navOutPrev")
						.removeClass("navInNext")
						.removeClass("navOutNext")
						.addClass("active")
						.addClass("animate-in");

					}
					
				}

				return active;
			}

			function BulletsNavigation(bulletArray, condition){
				
				if (condition) {$(bulletArray[active]).addClass('current-bullet').siblings().removeClass('current-bullet');};
			}

			function PlayVideo(activeSlide, target){
				var video = target.eq(activeSlide).children('video');
				if (video.length) {
					video[0].play();
				};
			}


		imagesLoaded( slider, function() {

			setTimeout(function(){

				slide.first().addClass('active').addClass('animate-in').addClass('first-active');
				layer.wrapInner( "<div class='layer-wrap'></div>")

				PlayVideo(active, slide);

				if(totalSlides > 1){
					$('<span data-direction="prev" class="controls prev slider-nav icon-arrow-left10"></span><span data-direction="next" class="controls next slider-nav icon-uniE91B"></span>').appendTo(slider);
				}

				if (optBullets == true) {

					if(totalSlides > 1){
						$("<div class='slider-bullets clearfix'></div>").appendTo(slider);
					}

					var bulletsContainer = slider.children('.slider-bullets');

					for (var i = 1; i <= totalSlides; i++) {
						$('<span>&nbsp;</span>').appendTo(bulletsContainer);
					};

					var bulletItems = bulletsContainer.find('span');
						bulletItems.first().addClass('current-bullet');
					
					bulletItems.on('click', function(){
						var $this = $(this);

						$this.addClass('current-bullet').siblings().removeClass('current-bullet');

						// Old slide
						slide.eq(active)
						.removeClass("animate-in")
						.addClass("navOutNext")
						.removeClass("navInNext")
						.removeClass("navInPrev")
						.removeClass("navOutPrev")
						.addClass("animate-out")
						.removeClass("active");
						
						active = $this.index();

						// Current slide
						slide.eq(active)
						.removeClass("animate-out")
						.addClass("navInNext")
						.removeClass("navOutNext")
						.removeClass("navInPrev")
						.removeClass("navOutPrev")
						.addClass("active")
						.addClass("animate-in");

						PlayVideo(active, slide);
						
					});

				};

				slider.find('.controls').on('click', function(){
					Navigate($(this).data('direction'));
					BulletsNavigation(bulletItems,optBullets);
					PlayVideo(active, slide);
				});

				if(totalSlides > 1){

					slider
					.on('swipeleft', function(){
						Navigate("next");
						BulletsNavigation(bulletItems,optBullets);
						PlayVideo(active, slide);
					})
					.on('swiperight', function(){
						Navigate("prev");
						BulletsNavigation(bulletItems,optBullets);
						PlayVideo(active, slide);
					});

				}

				if (optAutoplay == true) {

					if(totalSlides > 1){

						var AutoplayStart = window.setInterval(function(){slider.find('.controls.next').trigger('click');}, optAutoplaydelay);
						
						
						slider
						.mouseover(function(){
						    window.clearInterval(AutoplayStart);
						})
						.mouseout(function(){
							AutoplayStart = window.setInterval(function(){slider.find('.controls.next').trigger('click');}, optAutoplaydelay);
						})

						if (slider.is(':hover')) {
							window.clearInterval(AutoplayStart);
						};

					}

				};

			}, 1000);
			
			// hide loading
			setTimeout(function(){
				slider.find('.slider-loader').addClass('hidden');
			}, 1000);

		});

		// Opacity on scroll
		var win = $(window);
		win.scroll(function(){
			var percent = ($(document).scrollTop()/win.height());
			layer.find('.layer-wrap').css('opacity', 1 - percent);
		});

	}

	// EXTENDING NEW FUNCTION
		
	$.fn.NinzioSlider = function(options){
	
		new NinzioSlider(this, options);
		return this;
	};
	
} (jQuery, window, document));
