jQuery(document).ready(function($) {
	// IE 7 fixes
	$('footer, #top-filter, #header-city-select, .offer-detailed-content .price-box').append('<div class="after"></div>');
	$('.offer-description ul li, .offer-conditions ul li, .info-link').prepend('<span class="before" style="margin-left:0"></span>').find('.before').removeAttr('style');
	$('#footer-scroll-top').appendTo('#main-content');
});