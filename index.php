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
		  	
			<!-- Ichiro Fukumori 2019-12-04 V4r4  -->
			<!-- Slide ECCOv4 R4 (regular template) -->
			<article class='dark_background ms-slide slide-1' data-delay='5' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide background' data-src='/assets/images/home/v4r4/v4r4_available_online.png' src='/assets/images/home/v4r4/v4r4_available_online.png'>
			  <div class='bg_dark bottom_left floating_text_area ms-layer extended' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
				<a class='text_content_link' href='/products/latest/'>
				  <h1 class='media_feature_title'>Version 4 release 4, covering 1992-2017, now available</h1>
				</a>
				<div class='description'>
					<a href='/products/latest/'>The new release 4 is ECCO's latest state estimate of global ocean
					circulation combining all modern observations with an ocean
					circulation model. The release extends the Version 4 product using additional observations and incorporates improvements in modeling and estimation. In addition to standard monthly mean fields, the release now includes daily mean estimates for studies of wider range of ocean variability.</a>
				  <a class='detail_link' href='/products/latest/'>Read more</a>
				</div>
			  </div>
			  <div class='gradient_container_bottom'></div>
			</article>
			<!-- End Slide ECCO v4 R4-->


			<!-- Slide (ECCO / about) regular template) -->
			<article class='dark_background ms-slide slide-4' data-delay='5' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide background' data-src='/assets/images/home/u5.jpg' src='/assets/images/home/u5.jpg'>
			  <div class='bg_dark bottom_right floating_text_area ms-layer' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
				<a class='text_content_link' href='/about'>
				  <h1 class='media_feature_title'>Estimating the Circulation & Climate of the Ocean (ECCO)</h1>
				</a>
				<div class='description'>
				  <a href='/about'>ECCO was established in 1999 as part of the World Ocean Circulation Experiment (WOCE) with the goal of combining a general circulation model (GCM) with diverse observations in order to produce a quantitative depiction of the time-evolving global ocean state.</a>
				  <a class='detail_link' href='/about'>Learn more</a>
				</div>
			  </div>
			  <div class='gradient_container_bottom'></div>
			</article>
			<!-- End Slide 1 -->


		  	<!-- Ichiro Fukumori 11/07/18 -->	  
            <article class='dark_background ms-slide slide-5' 
            	data-delay='5' 
            	data-fill-mode='fill'>
              <div class='gradient_container_top'></div>
              <img alt='slide background' data-src='/assets/images/home/v4r3_climatology_carousel.png' src='/assets/images/home/v4r3_climatology_carousel.png'>
              <div class='bg_dark bottom_left floating_text_area ms-layer extended' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
                <a class='text_content_link' href='/research/publicationHighlights/'>
                  <h1 class='media_feature_title'>A New 20-year Ocean Climatology</h1>
                </a>
                <div class='description'>
                  <a href='/research/publicationHighlights/'>A new 20-year ocean climatology is available for ocean circulation and climate studies based on the recent ECCO version 4 release 3 ocean state estimate. In comparison to conventional climatologies based on observations alone, the new ECCO climatology accounts for the very great inhomogeneity with which the ocean has been observed.</a>
                                  
				  <a class='detail_link' href='/research/publicationHighlights/'>Read more</a>
                </div>
              </div>
              <div class='gradient_container_bottom'></div>
            </article>
            <!-- End Slide  /  New 20-year Ocean Climatology<-->
            
			  
            <!—Rui Ponte 12/04/2018 --> 
	    <!-- Slide  Angular momentum -->
		<article class='dark_background ms-slide slide-3' data-delay='5' data-fill-mode='fill'>
		<div class='gradient_container_top'></div>
		<img alt='slide background' data-src='/assets/images/home/Qui+18carouselfigure.png' src='/assets/images/home/Qui+18carouselfigure.png'>
		<div class='bg_dark bottom_left floating_text_area ms-layer extended' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
			<a class='text_content_link' href='http://dx.doi.org/10.1093/gji/ggy452'>
			<h1 class='media_feature_title'> New ocean angular momentum product for geodetic studies</h1>
			</a>
			<div class='description'>
			<a href='http://dx.doi.org/10.1093/gji/ggy452'> Variable horizontal circulation and mass fields from the latest ECCO estimate are used to calculate global ocean angular momentum series that are constrained for the first time by satellite-derived bottom pressure data. The new series can be used to assess oceanic excitation of Earth rotation changes.</a>
			<a class='detail_link' href='http://dx.doi.org/10.1093/gji/ggy452'>Read more</a>
			</div>
		</div>
		<div class='gradient_container_bottom'></div>
		</article>
	   <!-- End Slide Angular momentum -->

			  
			  <!-- Ian Fenty 11/16/2018 -->	  
		  	<!-- (Wood et al., paper) -->
         	<article class='dark_background ms-slide slide-5' 
         	  data-delay='5' 
         	  data-fill-mode='fill'>
              <div class='gradient_container_top'></div>
              <img alt='slide background' 
              	data-src='/assets/images/home/ian_ice_front_1040376.jpg' 
              	src='/assets/images/home/ian_ice_front_1040376.jpg'
              	data-resize='true'>
              
              <div class='bg_dark bottom_left floating_text_area ms-layer extended' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
                <a class='text_content_link' href='/news/'>
                  <h1 class='media_feature_title'>Ocean-induced melt triggers glacier retreat in Northwest Greenland</h1>
                </a>
                <div class='description'>
                  <a href='/news/'>In recent decades, tidewater glaciers in Northwest Greenland have contributed significantly to sea level rise but have also exhibited a complex spatial pattern of retreat that remained unexplained. In a new study, NASA's Oceans Melting Greenland (OMG) data is used in combination with ECCO model outputs to assess the role of the ocean in triggering the retreat of these glaciers.</a>
				  <a class='detail_link' href='/research/publicationHighlights/'>Read more</a>
                </div>
              </div>
              <div class='gradient_container_bottom'></div>
            </article>
            <!-- End Slide 6  Wood et al paper-->


<!--
Commented out: Ichiro Fukumori 12/05/19

			<!-- Slide (regular template) -->
            <article class='dark_background ms-slide slide-2' data-delay='5' data-fill-mode='fill'>
              <div class='gradient_container_top'></div>
              <img alt='slide background' data-src='/assets/images/home/friday_harbor_20181026_5.jpg' src='/assets/images/home/friday_harbor_20181026_5.jpg'>
              <div class='bg_dark bottom_right floating_text_area ms-layer extended' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
                <a class='text_content_link' href='/news/'>
                  <h1 class='media_feature_title'>ECCO Summer School 2019</h1>
                </a>
                <div class='description'>
                  <a href='/news/'>Global Ocean State & Parameter Estimation: From Methods to Applications in Oceanographic Research</b> The ECCO consortium will host a two-week summer school for graduate students and early career scientists on global ocean state estimation in support of climate research. The school introduces the tools and mathematics of ocean state and parameter estimation and their application to ocean science through a mix of foundational lectures, hands-on tutorials, and projects.</a>
                                  
				  <a class='detail_link' href='/news/'>Read more</a>
                </div>
              </div>
              <div class='gradient_container_bottom'></div>
            </article>
            <!-- End Slide Summer School-->

Commented out: Ichiro Fukumori 12/05/19 END 
--> 		  	

			<!-- Slide 4 (GMSST) -->
			<article class='dark_background ms-slide slide-3' data-delay='5' data-fill-mode='fill'>
			  <div class='gradient_container_top'></div>
			  <img alt='slide background' data-src='/assets/images/home/20171213_gmsst_fig01_v6.png' src='/assets/images/home/20171213_gmsst_fig01_v6.png'>
			  <div class='bg_dark bottom_left floating_text_area ms-layer extended' data-duration='300' data-ease='easeOutQuart' data-effect='right(90)' data-resize='false' data-type='text'>
				<a class='text_content_link' href='http://onlinelibrary.wiley.com/wol1/doi/10.1002/2017JC012845/abstract'>
				  <h1 class='media_feature_title'>What mechanisms control the evolution of global mean sea surface temperature?</h1>
				</a>
				<div class='description'>
				  <a href='https://agupubs.onlinelibrary.wiley.com/doi/abs/10.1002/2017GL076821'>The latest ECCO solution is used to examine the nature of variability in the global mean sea surface temperature (GMSST), a key climate metric, in terms of surface forcing, advection, and diffusion processes. Changes in the ocean circulation are found to be important to the evolution of GMSST and the Earth’s surface climate.</a>
				  <a class='detail_link' href='https://agupubs.onlinelibrary.wiley.com/doi/abs/10.1002/2017GL076821'>Read more</a>
				</div>
			  </div>
			  <div class='gradient_container_bottom'></div>
			</article>
			<!-- End Slide GMSST -->
			
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
						<!-- Ichiro Fukumori 2019-12-04 V4r4  -->
						<a href="/products/latest"><img alt="ECCO-V4r4" title="ECCO-V4r4" src="/assets/images/home/v4r4/v4r4_ECCO_v4_Volume_budget_closure_78_0.png"></a>
					</div>						
					<div class="grid-cell grid--1of3">
						<h2 class="content_title">Featured Product</h2>
						
						<p><a href="/products/latest">ECCO-V4r4</a></p>
						<hr />
						
						<p><a href="/products/all">&rsaquo; See all products</a></p>
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
				 		<a href="/products/all/">
				 			<div class="hover-item">
				 				<div class="hover-container">
				 					<img alt="Products" title="Products" src="/assets/images/home/products.jpg">
					 				<div class="description">
					 					Click here to view all products.
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
				 					<img alt="Data" title="Data" src="/assets/images/home/data.jpg">
					 				<div class="description">
					 					Click here to download data.
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
				 					<img alt="Knowledge" title="Knowledge" src="/assets/images/home/knowledge.jpg">
					 				<div class="description">
					 					Click here to read our frequently asked questions.
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
				 					<img alt="Reasearch" title="Research" src="/assets/images/home/research.jpg">
					 				<div class="description">
					 					Click here to review publications and presentations.
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
				<section class="grid_gallery list_view">					
					<ul class="articles">
						
						<!-- Ichiro Fukumori 2019-12-05 Ocean Sciences 2020 Town Hall -->
						<li class='slide'>
							<a href='/news/'>
								<div class='image_and_description_container'>
									<div class='img'><img alt="ECCO Town Hall at Ocean Sciences 2020" title="ECCO Town Hall at Ocean Sciences 2020" src="/assets/images/home/2020_Ocean_Sciences.png"></div>
									<div class='list_text_content'>
										<div class='content_title no-pad'>
											ECCO Town Hall at Ocean Sciences 2020 (02/20 18:30-19:30)
										</div>
										<div class='article_teaser_body'>
											<p>The ECCO Consortium will host a town hall meeting at the 2020 Ocean Sciences Meeting in San Diego, CA, on Thursday, 20 February, 18:30-19:30.<br />
											Attendees will be shown how to obtain the latest ECCO ocean state estimates and provided instructions for calculating heat, salt, and volume budget analyses, comparing the state estimates against observational data, and for re-running the open-source ECCO model for additional custom investigations.  Python and Matlab computational libraries and tutorials that facilitate ECCO analyses will be introduced.   <br />
										</div>
									</div>
								</div>
							</a>
						</li>
						<!-- Ichiro Fukumori 2019-12-05 Ocean Sciences 2020 Town Hall END -->
						
						<!-- Ichiro Fukumori 2019-12-05 AGU Town Hall -->
						<li class='slide'>
							<a href='/news/'>
								<div class='image_and_description_container'>
									<div class='img'><img alt="2019 ECCO Town Hall" title="2019 ECCO Town Hall" src="/assets/images/home/2019_agu.jpg"></div>
									<div class='list_text_content'>
										<div class='content_title no-pad'>
											2019 Town Hall at the AGU Fall Meeting (12/09 12:30-13:30)
										</div>
										<div class='article_teaser_body'>
											<p>The ECCO consortium will host a town hall at the 2019 AGU Fall Meeting on Monday, 9 December, 12:30-13:30 in Moscone West, Room:2007, L2, to introduce the latest global ocean and sea-ice state estimate Version 4 Release 4 (ECCO V4r4).</p>
											
											<p>Release 4 of the ECCO state estimate synthesizes nearly all extant in-situ and remotely-sensed ocean and sea-ice data covering the period 1992 – 2017, with a nominal 1-degree horizontal resolution configuration of the MIT general circulation model (MITgcm) over the entire globe.</p>
											
										</div>
									</div>
								</div>
							</a>
						</li>
						<!-- Ichiro Fukumori 2019-12-05 AGU Town Hall END -->

						<!-- Ichiro Fukumori 2019-12-04 V4r4  -->
						<li class='slide'>
							<a href='/products/latest/'>
								<div class='image_and_description_container'>
									<div class='img'><img alt="ECCO-V4r4" title="ECCO-V4r3" src="/assets/images/home/v4r4/v4r4_gmsl_gmobp.png"></div>
									<div class='list_text_content'>
										<div class='content_title no-pad'>
											ECCO-V4r4, covering 1992-2017, now available
										</div>
										<div class='article_teaser_body'>
											The new release 4 extends the Version 4 estimate using additional observations. The product also incorporates improvements in modeling and estimation. A summary document describes details of the changes. In addition to standard monthly mean fields, the release now includes daily mean estimates for studies of wider range of ocean variability. 
										</div>
									</div>
								</div>
							</a>
						</li>
						<!-- Ichiro Fukumori 2019-12-04 V4r4  END -->
						
		<!-- Ichiro Fukumori 2019-12-05 Changed to past tense -->

						<li class='slide'>
							<a href='/news/'>
								<div class='image_and_description_container'>
									<div class='img'><img alt="2019 ECCO Summer School" title="2019 ECCO Summer School" src="/assets/images/home/2019_summer_school.jpg"></div>
									<div class='list_text_content'>
										<div class='content_title no-pad'>
											2019 ECCO Summer School
										</div>
										<div class='article_teaser_body'>
											<p>The ECCO consortium hosted a two-week summer school for graduate students and early career scientists on global ocean state estimation in support of climate research. The school, held 19-31 May 2019 at Friday Harbor Laboratories in Friday Harbor WA, introduced tools and mathematics of ocean state and parameter estimation and their application to ocean science through a mix of foundational lectures, hands-on tutorials, and projects.</p>

											<p>Information about the school, including the lectures, can be found at 
											<a class='detail_link' href='https://www.eccosummerschool.org'>https://www.eccosummerschool.org</a>


			<!-- Commented out .......
											<p><b>Topics covered:</b> Data assimilation (global & regional); state & parameter estimation; adjoint method; sensitivity analysis; algorithmic differentiation; ocean modeling; ocean dynamics and variability; global ocean observing system; physics of sea level; sea ice physics; ice sheet-ocean interactions; ice shelf dynamics; ocean tides; cyberinfrastructure & data analytics </p>

											<b>Dates:</b> May 19–31, 2019<br />
											<b>Location:</b> Friday Harbor Laboratories, University of Washington, Friday Harbor, WA<br />
											<b>Application Deadline:</b> December 17, 2018<br />
											<p>For more information, confirmed lecturers, and how to apply, please visit:
											<a class='detail_link' href='https://www.eccosummerschool.org'>https://www.eccosummerschool.org</a>
			Commented out ....... --> 
											
										</div>
									</div>
								</div>
							</a>
						</li>
						
		<!-- Ichiro Fukumori 2019-12-05 Changed to past tense END -->

					</ul>
				</section><!-- //.grid_gallery -->
			</div><!-- //.grid_layout -->
		</div><!-- //.module -->

	</div><!-- //.scrollblock -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
