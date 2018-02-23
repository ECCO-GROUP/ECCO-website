<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research Teams";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	$ogImage = "https://via.placeholder.com/1280x720";

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page'>
		<section class="module">
			<div class='grid_layout'>
				<header id='page_header'>
					<h1 class='article_title'>Research Teams</h1>
				</header>
				<div class="wysiwyg_content">

					<div class='grid'>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/jpl_logo.jpg" alt="JPL Logo" title="JPL Logo">
								<p>Responsible for production of ECCO's central multi-decadal state
estimate. Also developing estimation systems for ocean-ice interaction
and global eddy-resolving models for ECCO's next generation estimate.<br /><br />
 
Ian Fenty<br />
Ichiro Fukumori<br />
Dimitris Menemenlis<br />
Ou Wang<br />
Hong Zhang
</p>
								<p><a href="https://www.jpl.nasa.gov/" target="_blank" rel="noopener noreferrer">Visit the JPL website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/mit_logo.jpg" alt="MIT Logo" title="MIT Logo">
								<p>Responsible for MITgcm, the ocean general circulation model employed
in all ECCO products. <br /><br />
 
Jean-Michel Campin<br />
Gael Forget <br />
Chris Hill<br />
Diana Spiegel<br />
Carl Wunsch
</p>
								<p><a href="http://web.mit.edu/" target="_blank" rel="noopener noreferrer">Visit the MIT website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/texas_logo.jpg" alt="University of Texas, Austin Logo" title="University of Texas, Austin Logo">
								<p>Responsible for ECCO infrastructure especially the adjoint of
MITgcm. Also leading development of ocean-ice sheet parameterization
and high-resolution estimation.<br /><br />
 
Patrick Heimbach<br />
An T. Nguyen
</p>
								<p><a href="https://www.utexas.edu/" target="_blank" rel="noopener noreferrer">Visit the University of Texas, Austin website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/aer_logo.jpg" alt="Atmospheric &amp; Environmental Research, Inc. Logo" title="Atmospheric &amp; Environmental Research, Inc. Logo">
								<p>Responsible for development of new data sets and physics packages for
the ECCO estimates. Also involved in assessing data and solution
uncertainties and developing diagnostic tools for scientific analyses.<br /><br />
 
Christopher M. Little<br />
Christopher G. Piecuch* <br />
Rui M. Ponte<br />
 
(* Now at Woods Hole Oceanographic Institution)
</p>
								<p><a href="https://www.aer.com/" target="_blank" rel="noopener noreferrer">Visit the Atmospheric &amp; Environmental Research, Inc. website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/scripps_logo.jpg" alt="Scripps Logo" title="Scripps Logo">
								<p>Leads development of regional high resolution estimation systems,
including biogeochemistry (Southern Ocean [SOSE], California Current
System, Equatorial Pacific, Gulf of Mexico).<br /><br />

Bruce Cornuelle <br />
Ganesh Gopalakrishnan<br /> 
Matt Mazloff<br />
Ariane Verdy
</p>
								<p><a href="https://scripps.ucsd.edu/" target="_blank" rel="noopener noreferrer">Visit the UC, San Diego website</a>.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of3 border">
							<div class="pad-20">
								<img src="/assets/images/logo/uhh_logo.jpg" alt="University of Hamburg, Germany Logo" title="University of Hamburg, Germany Logo">
								<p>Leads development of 50+ year global ocean state estimation for
long-term climate change studies [GECCO].<br /><br />
 
Armin Köhl<br />
Detlef Stammer<br />
</p>
								<p><a href="https://www.uni-hamburg.de/en.html" target="_blank" rel="noopener noreferrer">Visit the University of Hamburg, Germany website</a>.</p>
							</div>
						</div>
					</div>

				</div>
			</div><!-- //.grid_layout -->
		</section><!-- //section -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
