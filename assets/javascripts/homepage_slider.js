$(function() {
    home_page.init(), homepage_slider.initHeight(), homepage_slider.init();
});

var home_page = {
        init: function() {
            this.initListeners()
        },
        initListeners: function() {
            $("a#site_nav_down").click(function(e) {
                home_page.scrollDown(e)
            }), $(".site_nav_down_prompt").click(function(e) {
                home_page.scrollDown(e)
            }), $(window).scroll(function() {
                $(window).scrollTop() > 30 ? $(".site_nav_down_prompt").addClass("hide") : $(".site_nav_down_prompt").removeClass("hide")
            })
        },
        scrollDown: function(e) {
            e.preventDefault();
            var t = $(".scrollblock").first().offset().top - $("header.site_header").innerHeight() + 10;
            $("html,body").animate({
                scrollTop: t
            }, 600)
        }
    };

var homepage_slider = {
    windowWidth: null,
    widthOfRectangles: null,
    left_rect: null,
    right_rect: null,
    homepage_slider_options: {
        layout: "autofill",
        space: 0,
        autoplay: !isMobile.any(),
        overPause: !1,
        endPause: !1,
        speed: 30,
        mouse: !1,
        center: !0,
        centerControls: !1,
        instantStartLayers: !0,
        loop: !0,
        layersMode: "full"
    },
    init: function() {
        homepage_slider.slider = new MasterSlider, homepage_slider.slider.control("arrows"), homepage_slider.slider.control("bullets"), homepage_slider.slider.setup("masterslider", homepage_slider.homepage_slider_options), homepage_slider.initListeners()
    },
    initHeight: function(percent) {
        $("#masterslider").parent().css("height", $(window).height())
    },
    initListeners: function() {
        homepage_slider.slider.api.addEventListener(MSSliderEvent.CHANGE_START, function() {
            var e = homepage_slider.slider.api.index(),
                t = $(".slide-" + (e + 1)).first();
            $("body").removeClass("dark_background no_background light_background"), $("body").addClass(t.hasClass("light_background") ? "light_background" : t.hasClass("no_background") ? "no_background" : "dark_background"), isMobile.any() && $(".ms-slide-vpbtn").attr("style", "display: none!important;"), $(".ms-bullet").click(function() {
                homepage_slider.stopCarousel()
            }), $(".ms-nav-prev").click(function() {
                homepage_slider.stopCarousel()
            }), $(".ms-nav-next").click(function() {
                homepage_slider.stopCarousel()
            })
        }), $(".ms-slide .floating_text_area").hover(homepage_slider.onTextArea, homepage_slider.offTextArea), homepage_slider.slider.api.addEventListener(MSViewEvents.SWIPE_END, function() {
            console.log("swipe end"), homepage_slider.slider.api.pause()
        }), homepage_slider.slider.api.addEventListener(MSSliderEvent.RESIZE, function() {
            mb_utils.shouldResize() && (homepage_slider.initHeight(), homepage_slider.slider.api.update())
        })
    },
    stopCarousel: function() {
        homepage_slider.stopped = !0, homepage_slider.slider.api.pause()
    },
    onTextArea: function() {
        homepage_slider.slider.api.pause()
    },
    offTextArea: function() {
        homepage_slider.stopped || homepage_slider.slider.api.resume()
    },
	scrollToNav: function(){
		$('html, body').scrollTop(
			$("#masterslider").height()
		);
	},    
    pointRectangleIntersection: function(e, t) {
        return e.x > t.x1 && e.x < t.x2 && e.y > t.y1 && e.y < t.y2
    }
};