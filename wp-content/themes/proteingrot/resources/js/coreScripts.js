/* Header Scripts */
$(function() {
	'use strict';
	
	var startsida = document.getElementsByClassName('menu-item-86');
	$(startsida).addClass('hide'); 
	
	var header = document.getElementsByTagName('header');
	var menu = document.getElementById('menu-toggle'), toggled = false;
	var jsmenu = document.getElementsByClassName('js-menu');
	var jstoggle = document.getElementsByClassName('js-trigger');
		
	
	// Add class scroll__trigger on scroll. 
	$(window).scroll(function() {
		if ($(document).scrollTop() > 5) {
			$(header).addClass('scroll__trigger');
			$(jstoggle).addClass('scrolled');
		} else {
			$(header).removeClass('scroll__trigger');
			$(jstoggle).removeClass('scrolled');
		}
	});
	
	if($(jsmenu).is(':visible')) {
    alert('hi');
	}
	
	// Trigger Animation on MenuIcon
	menu.addEventListener('click', function() {
  	if (!toggled) {
			this.className = this.className + " toggled";
      toggled = true;
    } else {
      this.className = this.className.replace(/\b\stoggled\b/,'');
      toggled = false;
    }
  }, false);
	
	$(menu).click(function() {
		$(jsmenu).fadeToggle('js-menu-toggled');
		$(jstoggle).toggleClass('add__white');
	});
	
});

/* Scroll To Jquery */
$(document).on('click', 'a[href^="#"]', function(e) {
    'use strict';
    var id = $(this).attr('href');

    // target element
    var $id = $(id);
    if ($id.length === 0) {
        return;
    }

    // prevent standard hash navigation (avoid blinking in IE)
    e.preventDefault();

    // top position relative to the document
    var pos = $(id).offset().top - 80;

    // animated top scrolling
    $('body, html').animate({scrollTop: pos}, {duration: 1500, easing: "easeInOutQuint"});
});


/* Script for animate.css
 * Trigger animations on viewport scroll */
function onScrollInit( items, trigger ) {
	'use strict';
  items.each( function() {
    var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
 
    osElement.css({
        '-webkit-animation-delay':  osAnimationDelay,
        '-moz-animation-delay':     osAnimationDelay,
        'animation-delay':          osAnimationDelay
    });
 
    var osTrigger = ( trigger ) ? trigger : osElement;
 
    osTrigger.waypoint(function() {
        osElement.addClass('animated').addClass(osAnimationClass);
    },{
        triggerOnce: true,
        offset: '90%'
    });
  });
}

onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );