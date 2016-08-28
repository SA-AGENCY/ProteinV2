/* Header Scripts */
$(function() {
	'use strict';
	
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