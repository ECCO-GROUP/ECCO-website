<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research Topics";
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
				<h1 class='article_title'>Research Topics</h1>
			</div><!-- //.grid_layout -->
		</section><!-- //section -->

		<section class="gray-bg2">
			<div class='grid_layout'>
				<div class='grid'>
					<div class="grid-cell flexit">
						<a href="https://www.sciencedirect.com/science/article/pii/S0079661115000245?via%3Dihub" target="_blank" rel="noopener noreferrer"><h2 class="content_title">Coherent High-Latitude Ocean Bottom Pressure Variations</h2></a>
						<p>Across the Arctic Ocean and the Nordic Seas, GRACE and in-situ observations identified a basin-wide mode of ocean bottom pressure and sea-level fluctuation with spatially near-uniform amplitude and phase. This basin-wide fluctuation is barotropic and dominates the region’s large-scale variability from sub-monthly to interannual timescales. Using ECCO v4 and its adjoint, the source of these coherent ocean bottom pressure variations were identified as being coastally-trapped waves generated by winds along the continental slopes of the Arctic Mediterranean and its neighboring seas including the North Atlantic Ocean.  Winds drive Ekman transport across the large bathymetric gradients, forcing mass divergence between the shallow coastal area and the deep ocean basins and creating ocean bottom pressure anomalies of opposite signs in the two regions.  The resulting propagation and mutual interaction of these waves gives rises to the observed pressure anomalies.  This study illustrates the utility of using the model’s adjoint for identifying causal mechanisms underlying a complex system</p>
						<p>I. Fukumori, O. Wang, W. Llovel, I. Fenty and G. Forget, 2015: A near-uniform fluctuation of ocean bottom pressure and sea level across the deep ocean basins of the Arctic Ocean and the Nordic Seas. Prog. Oceanogr., 134, 152-172.</p>
					</div>
					<div class="grid-cell grid--1of3 wysiwyg_content">
						<p><img src="/assets/images/research/topics/ABP_IF.png" alt="Arctic ocean bottom pressure chart"></p>
					</div>
				</div>
			</div><!-- //.grid_layout -->
		</section> <!-- //section -->

		<section class="gray-bg2 margin-20 no-left no-right">
			<div class='grid_layout'>
				<div class='grid'>
					<div class="grid-cell flexit">
						<a href="http://onlinelibrary.wiley.com/doi/10.1002/2017JC012845/abstract" target="_blank" rel="noopener noreferrer"><h2 class="content_title">Mechanisms of the recent decadal trend of the North Atlantic Ocean heat content</h2></a>
						<p><strong>Sept 2017</strong></p>
						<p>The subpolar North Atlantic (SPNA) reversed trends in ocean heat
						content from warming during 1994–2004 to cooling over 2005–2015. ECCO
						V4r3 reveals that this reversal is the result of anomalous horizontal
						midlatitude gyre circulation acting on the mean temperature gradient,
						rather than changes in overturning circulation. Results have
						implications for decadal predictability.</p>
					</div>
					<div class="grid-cell grid--1of3 wysiwyg_content">
						<p><img src="/assets/images/topic2.jpg" alt="Graph of ocean model data"></p>
					</div>
				</div>
			</div><!-- //.grid_layout -->
		</section><!-- //section -->

		<section class="module"></section><!-- //section -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
