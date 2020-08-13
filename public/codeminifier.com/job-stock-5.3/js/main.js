(function ($) {
"use strict";

$(window).on('load', function () {
	$('#preloader').delay(350).fadeOut('slow');
	$('body').delay(350).css({ 'overflow': 'visible' });
})



	// WOW active
	new WOW().init();

})(jQuery);