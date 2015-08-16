// In and Out effect for carousel
function item_hover(){
	$('.item-on-hover').hover(function(){		 		 
		$(this).animate({ opacity: 1 }, 200);
		$(this).children('.hover-link, .hover-image, .hover-video').animate({ opacity: 1 }, 200);
	}, function(){
		$(this).animate({ opacity: 0 }, 200);
		$(this).children('.hover-link, .hover-image, .hover-video').animate({ opacity: 0 }, 200);
	});
}
$(document).ready(function(){
   $('#identifier').hoverAccordion({
        keepHeight : true,
        onClickOnly : true
  });

	$('li#product_div_dropdown div.tabs-wrapper').hide();

	/* for product menu dropdown */
	$("#product_div_dropdown").hover(function() {
		$(this).find('div.tabs-wrapper').show();
	}, function() {
		$(this).find('div.tabs-wrapper').hide();
	});

}); 
//nivo-slider
$(window).load(function() {
	$('#slider').nivoSlider({
		effect: 'fade', // Specify sets like: 'fold,fade,sliceDown'
		animSpeed: 500, // Slide transition speed
        pauseTime: 7000, // How long each slide will show
        startSlide: 0, // Set starting Slide (0 index)
        directionNav: true, // Next & Prev navigation
        directionNavHide: true, // Only show on hover
        controlNav: true, // 1,2,3... navigation
        controlNavThumbs: false, // Use thumbnails for Control Nav
        pauseOnHover: true // Stop animation while hovering		
	});
	
	item_hover();
	
	
//portfolio slider
	$('#slides').slides({
		preload: true,
		preloadImage: 'images/nivo-preloader.gif',
		play: 5000,
		pause: 2500,
		effect: 'fade',
		autoHeight: true,
		fade: {
		 interval: 1000, // [Number] Interval of fade in milliseconds
		 crossfade: true, // [Boolean] TODO: add this feature. Crossfade the slides, great for images, bad for text
		 easing: "" // [String] Dependency: jQuery Easing plug-in <http://gsgd.co.uk/sandbox/jquery/easing/>
		},
		effects: {
		 navigation: 'fade',  // [String] Can be either "slide" or "fade"
		 pagination: 'fade' // [String] Can be either "slide" or "fade"
		},
		hoverPause: true
		
	});
		
	
	$("#slides .next").hide();
	$("#slides .prev").hide();
	
	$("#slides").hover(function() {
			$(".next").stop(true, true).fadeIn();
			$(".prev").stop(true, true).fadeIn();
			}, function() {
			$(".next").fadeOut();
			$(".prev").fadeOut();
	});

		
});

$(document).ready(function(){

//transform menu into select for responsive layouts

//$('#mainnav').mobileMenu({
//    defaultText: 'Navigate to...',
//    className: 'select-menu',
//    subMenuDash: '&ndash;'
//});

//preload images
	$("#mycarousel, .post-thumbnail").preloadify();

//subnav
	//$('ul#mainnav').superfish({
//		delay: 100,
//		animation: {opacity:'show',opacity:'show'}, 
//           speed: 'fast' 
//	});
//	$("ul#mainnav li").css({ "overflow":"visible"});
//
//	$("ul#mainnav li ul li:last-child").addClass('nav-last-item');
//	$("ul#mainnav li ul li:first-child").addClass('nav-first-item');
//	
	
//twitter widget
	//$(".tweet").tweet({
//	  join_text: "auto",
//	  username: "deliciousthemes",
//	  count: 3,
//	  template: "{join}{text}",
//	  auto_join_text_reply: null,
//      auto_join_text_default: null,        // [string]   auto text for non verb: "i said" bullocks
//      auto_join_text_ed: null,                   // [string]   auto text for past tense: "i" surfed
//      auto_join_text_ing: null,               // [string]   auto tense for present tense: "i was" surfing
//      auto_join_text_reply: null,     // [string]   auto tense for replies: "i replied to" @someone "with"
//      auto_join_text_url: null, 
//	  loading_text: "loading tweets..."
//	});	

	
//flickr widget
	//$('#flickr').jflickrfeed({
//		limit: 10,
//		qstrings: {
//			id: '58842866@N08',
//			tags: 'architecture'
//		},
//		itemTemplate: 
//		'<li>' +
//			'<a href="{{image_b}}"><img src="{{image_s}}" alt="{{title}}" /></a>' +
//		'</li>' 
//	});	


	
//fixes the background image when added in wp admin panel	
	$(window).load(function() {    

		var theWindow        = $(window),
			$bg              = $("#bg"),
			aspectRatio      = $bg.width() / $bg.height();
									
		function resizeBg() {
			
			if ( (theWindow.width() / theWindow.height()) < aspectRatio ) {
				$bg
					.removeClass()
					.addClass('bgheight');
			} else {
				$bg
					.removeClass()
					.addClass('bgwidth');
			}
						
		}
									
		theWindow.resize(function() {
			resizeBg();
		}).trigger("resize");

	});	

	
//prettyphoto	
	$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});

	
//z-index for header elements 
	var zIndexNumber = 1000;
		$('#top div').each(function() {
			$(this).css('zIndex', zIndexNumber);
			zIndexNumber -= 10;
		});	
		
		
//portfolio carousel	
if (document.documentElement.clientWidth < 768) {
	$('#mycarousel').jcarousel({
        vertical: false,
        rtl: false,
        start: 1,
        offset: 1,
        scroll: 1,
        animation: 'normal',
        easing: 'swing',
        auto: 0
	});	
}
	
else {	$('#mycarousel').jcarousel({
	    vertical: false,
        rtl: false,
        start: 1,
        offset: 1,
        scroll: 3,
        animation: 'normal',
        easing: 'swing',
        auto: 0
});	}
	
	
//testimonials carousel	
	//$('#testimonials-carousel').jcarousel({
//		visible: 1,
//		scroll: 1, 
//		auto: 8,
//		animation: 700,
//		wrap: "circular"
//		});

//social icons fading effect
	$("#social li").hover(function() {
		$(this).children('a').animate({opacity:"1"},{queue:false,duration:300}) },
		function() {
			$(this).children('a').animate({opacity:"0.5"},{queue:false,duration:300})
			});


//clients fading effect
	$(".clients li").hover(function() {
		$(this).children('a').animate({opacity:"0.5"},{queue:false,duration:300}) },
		function() {
			$(this).children('a').animate({opacity:"0.15"},{queue:false,duration:300})
			});

			
//accordion	function		
	$('.ac-btn').click(function() {
		$('.ac-btn').removeClass('on');
	 	$('.ac-content').slideUp('normal');
		if($(this).next().is(':hidden') == true) {
			$(this).addClass('on');
			$(this).next().slideDown('normal');
		 }   
	 });
	$('.ac-btn').mouseover(function() {
		$(this).addClass('over');
	}).mouseout(function() {
		$(this).removeClass('over');										
	});	
	$('.ac-content').hide();


//tabs function
	$('.tabs-wrapper').each(function() {
		$(this).find(".tab-content").hide(); //Hide all content
		$(this).find("ul.tabs li:first").addClass("active").show(); //Activate first tab
		$(this).find(".tab-content:first").show(); //Show first tab content
	});
	$("ul.tabs li").click(function(e) {
		$(this).parents('.tabs-wrapper').find("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(this).parents('.tabs-wrapper').find(".tab-content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$("li.tab-item:first-child").css("background", "none" );
		$(this).parents('.tabs-wrapper').find(activeTab).fadeIn(); //Fade in the active ID content
		e.preventDefault();
	});
	$("ul.tabs li a").click(function(e) {
		e.preventDefault();
	})
	$("li.tab-item:last-child").addClass('last-item');
	

// toggle function
$('#toggle-view li').click(function () {
        var text = $(this).children('div.panel');
        if (text.is(':hidden')) {
            text.slideDown('200');
            $(this).children('span').addClass('toggle-minus');     
            $(this).addClass('activated');     
        } else {
            text.slideUp('200');
			$(this).children('span').removeClass('toggle-minus'); 
            $(this).children('span').addClass('toggle-plus'); 
			$(this).removeClass('activated'); 			
        }
         
    });

	
$('#topfooter').append('<div class="clear"></div>');
  
});
  
// product Sorting
	(function($) {
	
		
		$.fn.sorted = function(customOptions) {
			var options = {
				reversed: false,
				by: function(a) {
					return a.text();
				}
			};
	
			$.extend(options, customOptions);
	
			$data = jQuery(this);
			arr = $data.get();
			arr.sort(function(a, b) {
	
				var valA = options.by($(a));
				var valB = options.by($(b));
		
				if (options.reversed) {
					return (valA < valB) ? 1 : (valA > valB) ? -1 : 0;				
				} else {		
					return (valA < valB) ? -1 : (valA > valB) ? 1 : 0;	
				}
		
			});
	
			return $(arr);
	
		};
	
	})(jQuery);
	
	jQuery(function() {
	
		var read_button = function(class_names) {
			
			var r = {
				selected: false,
				type: 0
			};
			
			for (var i=0; i < class_names.length; i++) {
				
				if (class_names[i].indexOf('selected') == 0) {
					r.selected = true;
				}

			};
			
			return r;
			
		};
	
		var determine_sort = function($buttons) {
			var $selected = $buttons.parent().filter('[class*="selected"]');
			return $selected.find('a').attr('data-value');
		};
	
		var determine_kind = function($buttons) {
			var $selected = $buttons.parent().filter('[class*="selected"]');
			return $selected.find('a').attr('data-value');
		};
	
		var $preferences = {
			duration: 500,
			adjustHeight: 'dynamic'
		}
	
		var $list = jQuery('.product');
		var $data = $list.clone();
	
		var $controls = jQuery('#filters');
		
		$(".product").preloadify();
	
		$controls.each(function(i) {
	
			var $control = jQuery(this);
			var $buttons = $control.find('a');
	
			$buttons.bind('click', function(e) {
	
				var $button = jQuery(this);
				var $button_container = $button.parent();
				
				var button_properties = read_button($button_container.attr('class').split(' '));      
				var selected = button_properties.selected;
				var button_segment = button_properties.segment;
	
				if (!selected) {
	
					$buttons.parent().removeClass();
					$button_container.addClass('selected');
	
					var sorting_type = determine_sort($controls.eq(1).find('a'));
					var sorting_kind = determine_kind($controls.eq(0).find('a'));
	
					if (sorting_kind == 'all') {
						var $filtered_data = $data.find('li');
					} else {
						var $filtered_data = $data.find('li.' + sorting_kind);
					}
	
					var $sorted_data = $filtered_data.sorted({
						by: function(v) {
							return parseInt(jQuery(v).find('.count').text());
						}
					});
	
					$list.quicksand($sorted_data, $preferences, function () {
						item_hover();
						$("a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
						
					});
					
					//console.log($sorted_data);
		
				}
		
				e.preventDefault();
				
			});
		
		}); 
		
	});
