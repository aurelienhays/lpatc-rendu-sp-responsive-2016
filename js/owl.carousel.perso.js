/******************** Slider *********************/
/*(function($){
	$('.slider').owlCarousel({
		items:1,
		loop:true,
		autoplay:true,
		margin:10,
		dots:true,
		dotsEach:true
	});
})(jQuery);*/
$(function(){
	$('.slider').owlCarousel({
		items:3,
		loop:true,
		autoplay:true,
		margin:10,
		dots:true,
		dotsEach:true,
        responsive: {
            0: {
                items: 1
            },
			600: {
                items: 2,
            },
            900: {
                items: 3,
            }
        }
	});
});