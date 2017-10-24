(function($){
$(document).ready(function() {
	"use strict";

	/*Main Menu Button */
	$('.main_menu_btn').on("click", function(e){
		$(this).toggleClass('main_menu_btn_open');
		$('.main_menu_block').toggleClass('main_menu_block_open').fadeToggle();
		$('.main_menu_block').find('.menu_wrapper').toggleClass('active');
		$('header .anim').toggleClass('active');
		e.preventDefault();
	});

	$('.sub_img').click(function(){
	  $('.menu_wrapper').removeClass('active');
	  $('.main_menu_block').removeClass('main_menu_block_open').fadeToggle();
	  $('.main_menu_btn').removeClass('main_menu_btn_open');
	  $('header .anim').toggleClass('active');
	});

	/* Top Menu Click to Section */
	$('.sub_menu').find('a').on("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top -110
		}, 1000);
		e.preventDefault();
	});

	/* Sub Menu Dropdown */
	jQuery("#skenav .ske-menu, ul.max-menu").niceScroll({
		scrollspeed: 60,
		mousescrollstep: 40,
		cursorwidth: 5,
		cursorborder: 0,
		cursorcolor: '#47494E',
		cursorborderradius: 2,
		autohidemode: false,
		horizrailenabled: false
	});
	jQuery('#menu').superfish();
	jQuery('#menu li:has(ul)').each(function(){
		jQuery(this).addClass('has_child')
	});

	jQuery('.has_child > a').after('<span class="this_child"></span>');

	/* Section Background */
	$('.home_txt').each(function(){
		var image = $(this).attr('data-image');
		if (image){
			$(this).css('background-image', 'url('+image+')');	
		}
	});
});

/* ---------------------------------------------------- */
/*	SCROLLTOTOP											*/
/* ---------------------------------------------------- */
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 50 ) {
        jQuery('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        jQuery('.scrolltop').stop(true, true).fadeOut();
    }
});
jQuery(function(){jQuery(".scroll").click(function(){jQuery("html,body")
	.animate({scrollTop:jQuery(".thetop").offset().top},"1000");return false})})

})(jQuery);

/* ---------------------------------------------------- */
/*	Menu append											*/
/* ---------------------------------------------------- */

jQuery(document).ready(function(){
	jQuery(".main_menu_block .menu_wrapper ul#menu > li").append('<span class="menu-style"></span>');
});
