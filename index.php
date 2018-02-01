<?php
	/* define page vars */
	$include_path = './';
	$page_title = "ECCO | Home Page";
	$page_id = 'home';
	$theme = 'dark_background'; //dark_background || light_background 
	$include_other = <<<EOF
	<script src="/assets/javascripts/homepage_slider.js" type="text/javascript"></script>
	<script src="/assets/javascripts/vendor/fancybox/3.0/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="/assets/javascripts/vendor/jquery-ui/1.12.1.custom/jquery-ui.min.js" type="text/javascript"></script>
	<link href="/assets/stylesheets/vendor/fancybox/3.0/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
	<link href="/assets/stylesheets/vendor/masterslider/style/masterslider.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/vendor/masterslider/style/light-3/style.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/vendor/jquery-ui/1.12.1.custom/jquery-ui.min.css" rel="stylesheet" type="text/css" />
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
			  <img alt='slide1 background' data-src='/assets/images/home/u3.jpg' src='/assets/images/home/u3.jpg'>
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
			<article class='dark_background ms-slide slide-2' data-delay='15' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide2 background' data-src='/assets/images/home/v4r3_available_online.jpg' src='/assets/images/home/v4r3_available_online.jpg'>
			  <div class='bg_dark bottom_right floating_text_area ms-layer' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
				<a class='text_content_link' href='#'>
				  <h1 class='media_feature_title'>Version 4 release 3, covering 1992-2015, now available online</h1>
				</a>
				<div class='description'>
					<a href='/products/latest/'>The new release 3 is ECCO's latest state estimate of global ocean
					circulation combining all modern observations with an ocean
					circulation model. The release extends the Version 4 product using
					additional observations and incorporates improvements in modeling and
					estimation.</a>
				  <a class='detail_link' href='/products/latest/'>Read more</a>
				</div>
			  </div>
			  <div class='gradient_container_bottom'></div>
			</article>
			<!-- End Slide 2 -->
			
			<!-- Slide 3 (regular template) -->
			<article class='dark_background ms-slide slide-3' data-delay='15' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide3 background' data-src='/assets/images/home/Pie17carousel.jpg' src='/assets/images/home/Pie17carousel.jpg'>
			  <div class='bg_dark bottom_right floating_text_area ms-layer' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
				<a class='text_content_link' href='#'>
				  <h1 class='media_feature_title'>What is responsible for recent decadal changes in ocean heat content in the subpolar North Atlantic?</h1>
				</a>
				<div class='description'>
				  <a href='#'>Analyses of the latest ECCO estimate reveals the importance of surface wind stress and ocean gyre circulation changes in causing the observed shift from warming to cooling trends in the subpolar North Atlantic over the last two decades...</a>
				  <a class='detail_link' href='#'>Read more</a>
				</div>
			  </div>
			  <div class='gradient_container_bottom'></div>
			</article>
			<!-- End Slide 3 -->

			<!-- Slide 4 (regular template) -->
			<article class='dark_background ms-slide slide-4' data-delay='15' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide4 background' data-src='/assets/images/home/u5.jpg' src='/assets/images/home/u5.jpg'>
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
			<!-- End Slide 4 -->
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
      
		
		  <div class="grid_layout">
			<p>The “Estimating the Circulation and Climate of the Ocean” (ECCO) consortium is directed at making the best possible estimates of ocean circulation and its role in climate. Solutions are obtained by combining state-of-the-art ocean circulation models with nearly complete global ocean data sets in a physically and statistically consistent manner.  Products are being utilized to understanding ocean variability, biological cycles, coastal physics, and geodesy, and are available for general applications.</p>
		  </div><!-- //.grid_layout -->


		<div class="module">
			<div class="grid_layout">
				<div class="grid vertical-middle">
					<div class="grid-cell flexit">
						<a href=""><img alt="ECCO-V4" title="ECCO-V4" src="https://via.placeholder.com/640x350"></a>
					</div>						
					<div class="grid-cell grid--1of3">
						<h2 class="content_title">Featured Product</h2>
						
						<p><a href="">ECCO-V4</a></p>
						<hr />
						
						<p><a href="">&rsaquo; See all products</a></p>
					</div>
				</div>
			</div>
		</div><!-- //.module -->

	    <?php /*
	    <script>
			// product search form functions
			$(function() {

				// datepicker init
				var dateFormat = "mm/dd/yy",
					from = $("#from")
						.datepicker({
							defaultDate: "+1w",
							changeMonth: true,
							numberOfMonths: 3
						}).on("change", function() {
							to.datepicker("option", "minDate", getDate(this));
						}),
					to = $("#to")
						.datepicker({
							defaultDate: "+1w",
							changeMonth: true,
							numberOfMonths: 3
						}).on("change", function() {
							from.datepicker( "option", "maxDate", getDate(this));
						});

				function getDate( element ) {
					var date;
					
					try {
						date = $.datepicker.parseDate( dateFormat, element.value );
					} catch( error ) {
						date = null;
					}

					return date;
				}

				// validate product search form
				$("#product_search").click(function() {
					var isValid = true;
					$(".input_focus").removeClass("input_focus");

					if($("#from").val() == "") {
						$("#from").addClass("input_focus");
						isValid = false;	
					};
					if($("#to").val() == "") {
						$("#to").addClass("input_focus");
						isValid = false;	
					};
					if($("#resolution").val() == "") {
						$("#resolution").addClass("input_focus");
						isValid = false;
					};
					if($("#domain").val() == "") {
						$("#domain").addClass("input_focus");
						isValid = false;
					};

					// add form submit function here
					if(isValid){
						console.log("form is valid " + $("form[name='product_search']").serialize());
					}
				});
			});
	    </script>
		<div class="multimedia_teaser module">
			<div class="grid_layout">
				<h2 class="content_title text-center">Product Search</h2>
				<br />
				<form name="product_search">
					<div class="grid">
						<div class="grid-cell grid--1of3">
							Period<br />
							<input onblur="this.placeholder = 'From'" onfocus="this.placeholder = ''" placeholder="From" name="from" type="text" id="from" class="datepicker">
							<input onblur="this.placeholder = 'To'" onfocus="this.placeholder = ''" placeholder="To" name="to" type="text" id="to" class="datepicker">
						</div>
						<div class="grid-cell grid--1of3">
							Resolution<br />
							<select name="resolution" id="resolution">
								<option value="">Select an option</option>
								<option value="Lorem">Lorem</option>
							</select>
						</div>
						<div class="grid-cell grid--1of3">
							Domain<br />
							<select name="domain" id="domain">
								<option value="">Select an option</option>
								<option value="Lorem">Lorem</option>
							</select>
						</div>
					</div>
				</form>
				<br />
				<footer>
					<span class="button_text outline_button dark" id="product_search">
					  Submit
					</span>
				</footer>
				<hr />
				<div class="text-center pad-20">
					<a href="">View list of all products</a> &nbsp; | &nbsp; <a href="">View featured product</a>
				</div>
			</div>
		</div><!-- //.module -->
	  
	    */ ?>
		<div class="gray-bg2 module">
			<div class="grid_layout">
				<h2 class="content_title text-center">Explore</h2>
				<br />
				<div class="grid text-center">
					<div class="grid-cell grid--1of4">
				 		<a href="/products/">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="/assets/images/home/u17.jpg">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet
					 				</div>
					 			</div>
				 				<div class="content_title">Products</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of4">
				 		<a href="/data/">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="/assets/images/home/u10.jpg">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet
					 				</div>
					 			</div>
				 				<div class="content_title">Data</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of4">
				 		<a href="/knowledge/">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="/assets/images/home/u14.jpg">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet
					 				</div>
					 			</div>
				 				<div class="content_title">Knowledge Base</div>
				 			</div>
				 		</a>
				 	</div>
				 	<div class="grid-cell grid--1of4">
				 		<a href="/research/">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Lorem Ipsum" title="Lorem Ipsum" src="/assets/images/home/u12.jpg">
					 				<div class="description">
					 					Lorem ipsum dolor sit amet
					 				</div>
					 			</div>
				 				<div class="content_title">Research</div>
				 			</div>
				 		</a>
				 	</div>
				</div>
			</div>
		</div><!-- //.module -->

		<div class="module">
			<div class="grid_layout">
				<h2 class="content_title">Latest Updates</h2>
				<br />
				<div class="grid">
					<div class="grid-cell grid--3of4">
						<section class="grid_gallery list_view">
							<div class="grid_layout">
								<ul class="articles">
									<li class='slide'>
										<a href=''>
											<div class='image_and_description_container'>
												<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
												<div class='list_text_content'>
													<div class='content_title no-pad'>
														ECCO Tutorial at Ocean Sciences 2018
													</div>
													<div class='article_teaser_body'>
														<p>The ECCO project will hold a workshop during Ocean Sciences 2018 in Portland, OR. More details regarding the workshop's agenda to follow.<br />
														Title: ECCO Workshop: How to use the latest ECCO Ocean State Estimate <br />
														Date and Time: Thursday, February 15, 2018: 12:45 PM - 1:45 PM <br />
														Location: Oregon Convention Center, F152 </p>
													</div>
												</div>
											</div>
										</a>
									</li>

									<li class='slide'>
										<a href=''>
											<div class='image_and_description_container'>
												<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
												<div class='list_text_content'>
													<div class='content_title no-pad'>
														ECCO version 4 release 3, covering 1992-2015, now available online
													</div>
													<div class='article_teaser_body'>
														The new release 3 extends the Version 4 estimate using additional observations. The product also incorporates improvements in modeling and estimation. A summary document describes details of the changes. Also available are descriptions of how to evaluate property budgets and how to reproduce the results and generate additional fields using MITgcm.. 
													</div>
												</div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</section>
					</div>
					<div class="grid-cell grid--1of4">
						<div class="border pad-20">
							ECCO Demo
							<p><strong>Dec 29</strong> | <a href="" target="_blank">Add to calendar</a></p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					  		tempor incididunt ut labore et dolore magna aliqua.
					  	</div>
					</div>
			</div>
		</div><!-- //.module -->

	</div><!-- //.scrollblock -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>