<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | Data";
	$page_id = 'data';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
	<link href="/assets/stylesheets/vendor/fancybox/3.0/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
	<script src="/assets/javascripts/vendor/fancybox/3.0/jquery.fancybox.min.js" type="text/javascript"></script>
EOF;

	$ogImage = "https://via.placeholder.com/1280x720";

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>
	<section class='content_page module'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Data</h1>
			</header>
			<div class='wysiwyg_content'>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 				<br />
 				<div class="grid text-center">
 					<div class="grid-cell flexit"><a href=""><img class="img--th" src="/assets/images/data/1.png"><p>Satellite Altimetry</p></a></div>
 					<div class="grid-cell flexit"><a href=""><img class="img--th" src="/assets/images/data/2.png"><p>ARGO</p></a></div>
 					<div class="grid-cell flexit"><a href=""><img class="img--th" src="/assets/images/data/3.png"><p>GRACE</p></a></div>
 					<div class="grid-cell flexit"><a href=""><img class="img--th" src="/assets/images/data/4.png"><p>Aquarius</p></a></div>
 					<div class="grid-cell flexit"><a href=""><img class="img--th" src="/assets/images/data/5.png"><p>CTD</p></a></div>
 					<div class="grid-cell flexit"><a href=""><img class="img--th" src="/assets/images/data/6.png"><p>Tide Gauges</p></a></div>
 					<div class="grid-cell flexit"><a href=""><img class="img--th" src="/assets/images/data/7.png"><p>XBT</p></a></div>
 				</div>
 			</div><!-- //.wysiwyg_content -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<section class='gray-bg2 module'>
		<div class='grid_layout'>
			<div class='grid'>
				<div class="grid-cell flexit">
					<h2 class="content_title">Satellite Altimetry</h2>
					<p>Altimetry satellites basically determine the distance from the satellite to a target surface by measuring the satellite-to-surface round-trip time of a radar pulse. However, this is not the only measurement made in the process, and a lot of other information can be extracted from altimetry.</p>
					<p>The magnitude and shape of the echoes (or waveforms) also contain information about the characteristics of the surface which caused the reflection. The best results are obtained over the ocean, which is spatially homogeneous, and has a surface which conforms with known statistics. Surfaces which are not homogeneous, which contain discontinuities or significant slopes, such as some ice, rivers or land surfaces, make accurate interpretation more difficult.</p>
					<p>Products that use Satellite Altimitry: ECCO V4, GECCO</p>
				</div>
				<div class="grid-cell grid--1of3 wysiwyg_content">
					<p><img src="/assets/images/data/satellite_altimetry.jpg" alt="Satellite Altimetry"></p>
					<p>
						External Links:
						<ul class="bullet_list">
							<li><a href="www.aviso.altimetry.fr" target="_blank" rel="noopener noreferrer">www.aviso.altimetry.fr</a></li>
							<li><a href="www.sealevel.jpl.nasa.gov" target="_blank" rel="noopener noreferrer">www.sealevel.jpl.nasa.gov</a></li>
							<li><a href="www.earth.esa.int" target="_blank" rel="noopener noreferrer">www.earth.esa.int</a></li>
						</ul>
					</p>
				</div>
			</div>
		</div><!-- //.grid_layout -->
	</section><!-- //.module -->

	<section class='module'>
		<div class='grid_layout'>
			<div class='grid'>
				<div class="grid-cell grid--1of3 wysiwyg_content">
					<p><img src="/assets/images/data/argo.jpg" alt="Argo Diagram"></p>
					<p>
						External Links:
						<ul class="bullet_list">
							<li><a href="www.argo.ucsd.edu" target="_blank" rel="noopener noreferrer">www.argo.ucsd.edu</a></li>
						</ul>
					</p>
				</div>
				<div class="grid-cell flexit">
					<h2 class="content_title">ARGO</h2>
					<p>Argo is an international collaboration that collects high-quality temperature and salinity profiles from the upper 2000m of the ice-free global ocean and currents from intermediate depths. The data come from battery-powered autonomous floats that spend most of their life drifting at depth where they are stabilised by being neutrally buoyant at the "parking depth" pressure by having a density equal to the ambient pressure and a compressibility that is less than that of sea water. At present there are several models of profiling float used in Argo. All work in a similar fashion but differ somewhat in their design characteristics. At typically 10-day intervals, the floats pump fluid into an external bladder and rise to the surface over about 6 hours while measuring temperature and salinity.</p>
					<p>Satellites or GPS determine the position of the floats when they surface, and the floats transmit their data to the satellites. The bladder then deflates and the float returns to its original density and sinks to drift until the cycle is repeated. Floats are designed to make about 150 such cycles.</p>
					<p>Products that use ARGO : ECCO V4, GECCO</p>
				</div>
			</div>
		</div><!-- //.grid_layout -->
	</section><!-- //.module -->

	<section class='gray-bg module'>
		<div class='grid_layout'>
			<div class='grid'>
				<div class="grid-cell flexit">
					<h2 class="content_title">GRACE</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p>Products that use GRACE : ECCO V4, GECCO</p>
				</div>
				<div class="grid-cell grid--1of3 wysiwyg_content">
					<p><img src="/assets/images/data/grace.jpg" alt="GRACE Diagram"></p>
					<p>
						External Links:
						<ul class="bullet_list">
							<li><a href="" target="_blank" rel="noopener noreferrer">lorem ipsum</a></li>
						</ul>
					</p>
				</div>
			</div>
		</div><!-- //.grid_layout -->
	</section><!-- //.module -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
