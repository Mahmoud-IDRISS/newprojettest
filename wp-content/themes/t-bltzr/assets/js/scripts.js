(function($) {
$(document).ready(function() {
	"use strict";

    // Scroll down opacity
    var divs = $('.slider-inner');
    $(window).on('scroll', function() {
    var st = $(this).scrollTop();
    divs.css({ 'opacity' : (1 - st/700) });
    });

    // Hide Fixed Slider
    $(window).on("scroll touchmove", function () {
    $('.slider .slider-inner').toggleClass('hide', $(document).scrollTop() > 1500);
    });


    });

})(jQuery);