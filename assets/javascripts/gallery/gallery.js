$(document).ready(function() {
	/* set variables */
	var container = $('.articles');
	
	$(window).on('load', function(){
		/* masonry */
		container.masonry({
		  	columnWidth: '.gallery-grid-sizer',
		  	itemSelector: '.gallery-grid-item',
		  	percentPosition: true
		});
	});

});