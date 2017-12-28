<?php
	/* define page vars */
	$include_path = './';
	$page_title = "ECCO | Home Page";
	$page_id = 'home';
	$theme = 'dark_background'; //dark_background || light_background 
	$include_other = <<<EOF
	<script src="/assets/javascripts/homepage_slider.js" type="text/javascript"></script>
	<script src="/assets/javascripts/vendor/fancybox/3.0/jquery.fancybox.min.js" type="text/javascript"></script>
	<link href="/assets/stylesheets/vendor/fancybox/3.0/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/stylesheets/vendor/masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/vendor/masterslider/style/light-3/style.css" rel="stylesheet" type="text/css" />
EOF;
	include_once($include_path . 'includes/header.inc.php');
?>
	  <!-- START CONTENT -->
      <div class='header_mask'></div>
      <!-- MAIN Carousel / Media Feature -->
      <section class='primary_media_feature homepage_carousel'>
        <section class='clearfix main_feature'>
		  <div class='master-slider ms-skin-light-3' id='masterslider'>
		  	<!-- Slide 1 (regular template) -->
		  	<article class='dark_background ms-slide slide-1' data-delay='6' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide1 background' data-src='https://via.placeholder.com/1280x720' src='https://via.placeholder.com/1280x720'>
			  <div class='bg_dark bottom_left floating_text_area ms-layer' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
				<a class='text_content_link' href='#'>
				  <h1 class='media_feature_title'>Lorem Ipsum</h1>
				</a>
				<div class='description'>
				  <a href='#'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a>
				  <a class='detail_link' href='#'>Read more</a>
				</div>
			  </div>
			  <div class='gradient_container_bottom'></div>
			</article>
			<!-- End Slide 1 -->
			
			<!-- Slide 2 (regular template) -->
			<article class='dark_background ms-slide slide-1' data-delay='15' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide2 background' data-src='https://via.placeholder.com/1280x720' src='https://via.placeholder.com/1280x720'>
			  <div class='bg_dark bottom_right floating_text_area ms-layer' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
				<a class='text_content_link' href='#'>
				  <h1 class='media_feature_title'>Lorem Ipsum</h1>
				</a>
				<div class='description'>
				  <a href='#'>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</a>
				  <a class='detail_link' href='#'>Read more</a>
				</div>
			  </div>
			  <div class='gradient_container_bottom'></div>
			</article>
			<!-- End Slide 2 -->

		  </div>
		</section>
	  </section>


	<div class='scrollblock'>
		<div class='loading'></div>
        <div class='pointer_mask'>
          <a class='site_nav_down_prompt'>
            scroll for more
          </a><div class='arrow_masks'></div><div class='arrow_mask'></div><div class='arrow_masks'></div>
        </div>
        
        <!-- vger custom scripting -->
        <script type="text/javascript">
	        $(function(){
	        	$(".section_selector a").click(function(event){
	        		event.preventDefault();
	        		$(".section_selector a").removeClass("current");
	        		$(".slide_strip_container").hide();
	        		$("#" + $(this).attr("class")).fadeIn();
	        		$(this).addClass("current");
	        	});
	        });
        </script>

		<section class='slide_strips module'>
		  <div class='grid_layout'>
			<header>
			  <h1 class='module_title'>What's Happening Now</h1>
			  <div class='section_selector'>
				<div class='gradient_line'></div>
				<a class='featured current'>
				  featured
				</a>
				<a class='news'>
				  News
				</a>
				<a class='videos'>
				  Videos
				</a>
				<a class='images'>
				  Images
				</a>
			  </div>
			</header>
		    
			<section class='slide_strip_container' id='featured'>
				<div class="slide_strip_wrapper grid">
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				</div>
				<br />
				<footer>
				  <a class="outline_button dark" href="mission/" id="slidestrip_more">
					<span class="button_text">
					  Learn more about Explorer 1
					</span>
				  </a>
				</footer>
			</section><!-- //.slide_strip_container -->
		    <section class='slide_strip_container is-hidden' id='news'>
				<div class="slide_strip_wrapper grid">
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				</div>
				<br />
				<footer>
				  <a class="outline_button dark" href="news/" id="slidestrip_more">
					<span class="button_text">
					  more news
					</span>
				  </a>
				</footer>
		    </section><!-- //.slide_strip_container -->
			<section class='slide_strip_container is-hidden' id='videos'>
				<div class="slide_strip_wrapper grid">
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				</div>
				<br />
				<footer>
				  <a class="outline_button dark" href="galleries/videos/" id="slidestrip_more">
					<span class="button_text">
					  more videos
					</span>
				  </a>
				</footer>
			</section><!-- //.slide_strip_container -->
			<section class='slide_strip_container is-hidden' id='images'>
				<div class="slide_strip_wrapper grid">
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of3 slide">
				 		<a href="">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					 					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					 					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					 					consequat.
					 				</div>
					 			</div>
				 				<div class="content_title">Lorem Ipsum</div>
				 			</div>
				 		</a>
				 	</div>
				</div>
				<br />
				<footer>
				  <a class="outline_button dark" href="" id="slidestrip_more">
					<span class="button_text">
					  more images
					</span>
				  </a>
				</footer>
			</section><!-- //.slide_strip_container -->
		  </div><!-- //.grid_layout -->
		</section><!-- //.slide_stips .module -->

		<div class="multimedia_teaser module">
			<div class="grid_layout">
				<div class="grid vertical-middle">
					<div class="grid-cell flexit">
						<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					</div>						
					<div class="grid-cell grid--1of3">
						<h3>Posters</h3>
						<p>Download the Explorer 1 Anniversary posters.</p>
						<p><a href="/downloads/">&rsaquo; Download</a></p>
					</div>
				</div>
			</div>
		</div><!-- //.multimedia_teaser -->
	  
	</div><!-- //.scrollblock -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>