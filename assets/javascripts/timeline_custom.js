var voyager_timeline = {
	init: function(){
		// size timeline height to browser height
		$("#timeline-embed").css("height", $(window).height() - $(".site_header_area").height());
		// timeline options 
		var options = {
			debug: false,
			hash_bookmark: true
		}
		// create timline object
		var timeline = new TL.Timeline(
			'timeline-embed',
			'/assets/data/timeline.json',
			options
		);
		// timeline additional options
		timeline.on('loaded', function(){
			timeline_helper_fns.init();

			timeline.on('change', function(slide) {
				timeline_helper_fns.append_link(timeline, slide);
			});

		});

		window.onresize = function(event) {
			timeline.updateDisplay();
			$("#timeline-embed").css("height", $(window).height() - $(".site_header_area").height());
		}		
	}
};

var timeline_helper_fns = {
	last_window_w: $(window).innerWidth(),
	mob_desk_brkpt: 600,
	init: function(){
	  $('.tl-headline-date, .tl-text .tl-headline').click(function(){

	  	$('.tl-headline-date').toggleClass('open');
	  	$('.tl-text-content p').animate({
	  		height: "toggle"
	  	}, 500, function() {
	  	});
	  });
	  $(window).resize(function(){
	  	var current_w = $(window).innerWidth();
	  	if(current_w > timeline_helper_fns.mob_desk_brkpt && timeline_helper_fns.last_window_w <= timeline_helper_fns.mob_desk_brkpt){
	  		$('.tl-headline-date').addClass('open');
	  		$('.tl-text-content p').removeAttr('style');
	  	} else if (current_w <= timeline_helper_fns.mob_desk_brkpt && timeline_helper_fns.last_window_w > timeline_helper_fns.mob_desk_brkpt){
	  		$('.tl-headline-date').removeClass('open');
	  		$('.tl-text-content p').removeAttr('style');
	  	} else {
	  		//do nothing
	  	}
	  	timeline_helper_fns.last_window_w = $(window).innerWidth();			
	  });

	  if(timeline_helper_fns.last_window_w > timeline_helper_fns.mob_desk_brkpt){
  		$('.tl-headline-date').addClass('open');
	  }
	},

	append_link: function(tl_obj, slide){
		var link_url = tl_obj.getDataById(slide.unique_id).link.trim();

		if (link_url.length > 0 && $("#" + slide.unique_id + " .tl-text-content .timeline_link").length == 0){
			var html = "<a class='timeline_link' data-fancybox href='javascript:void(0)' data-type='iframe' data-src='" + link_url + "'></a>";
		  $("#" + slide.unique_id + " .tl-text-content").append(html);
		}
	}
};

$(function() {
	voyager_timeline.init();
});