<?php
	/* define page vars */
	$include_path = '../../../';
	$page_title = "ECCO | Recent Presentations";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page module'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Recent Presentations</h1>
			</header>
			<hr />
			<div class='wysiwyg_content'>
				<h3 class="content_title named-anchor" id="posters">2017 ECCO Meeting</h3>
				<p>Download the presentations from the November 6-8 meeting held at Caltech</p>

				<h2 class="content_title named-anchor" id="posters">Latest ECCO Products</h2>
				<ul class="bullet_list">
					<li>
						<a href="../pdfs/06_1030_Campin_ecco_17_jnmc.pdf" target="_blank" rel="noopener noreferrer">Jean-Michel Campin: MITgcm development <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/06_1050_Forget_gf_adj_cloud_201711.pdf" target="_blank" rel="noopener noreferrer">Gael Forget: Adjoint and cloud applications of the ECCO v4 framework <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/06_1130_Verdy_ECCO_2017_ariane.pdf" target="_blank" rel="noopener noreferrer">Ariane Verdy: SOSE and regional state estimates <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
				</ul>

				<h2 class="content_title named-anchor" id="posters">Ocean Circulation</h2>
				<ul class="bullet_list">
					<li>
						<a href="../pdfs/06_1210_Liang_ECCO2017.pdf" target="_blank" rel="noopener noreferrer">Xinfeng Liang: The Global Ocean Vertical Velocities from ECCO Version 4 <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/06_1330_Strobach_Udi-ECCO.pdf" target="_blank" rel="noopener noreferrer">Udi Strobach: Comparison of MERRA-2 and ECCO-v4 ocean surface heat fluxes: Consequences of different forcing methods on ocean circulation <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/06_1410_PonteGMSST.pdf" target="_blank" rel="noopener noreferrer">Rui Ponte: What determines the evolution of global mean sea surface temperature? <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/06_1430_Piecuch_Christopher_ECCO2017.pdf" target="_blank" rel="noopener noreferrer">Chris Piecuch: Mechanisms of the recent decadal trend reversal in subpolar North Atlantic Ocean heat content <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1050_Forget_gf_argo_wm_201711.pdf" target="_blank" rel="noopener noreferrer">Gael Forget: Argo-based analyses of oceanic water masses <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1130_Fukumori_ECCO_2017_southern_mode_abridged.pdf" target="_blank" rel="noopener noreferrer">Ichiro Fukumori: Forcing and Effects of the Southern Mode <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1150_Wang_2017_11_07_ECCO_Pasadena_Jinbo_upload.pdf" target="_blank" rel="noopener noreferrer">Jinbo Wang: The application of the LLC4320 in the SWOT prelaunch activities <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1210_Torres_Hector_ECCO_2017.pdf" target="_blank" rel="noopener noreferrer">Hector Torres: submesoscale + internal waves <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
				</ul>

					
				<h2 class="content_title named-anchor" id="posters">ECCO Roadmap</h2>
				<ul class="bullet_list">	
					<li>
						<a href="../pdfs/06_1530_ECCO_Sea_Level_Change_20171107.pdf" target="_blank" rel="noopener noreferrer">Ichiro Fukumori: ECCO Sea Level Change <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/06_1610_Mazloff_SIOdvlpmnt_ecco2017.pdf" target="_blank" rel="noopener noreferrer">Matt Mazloff: SIO development activities <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1330_Lee_ECCO.pdf" target="_blank" rel="noopener noreferrer">Tony Lee: Can satellite altimetry and gravimetry data be used to evaluate the quality of Arctic-Ocean satellite sea surface salinity? – insight from ECCO state estimation <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1350_Arbic_ECCO2017.pdf" target="_blank" rel="noopener noreferrer">Brian Arbic: Global modeling of internal tides and the internal gravity wave spectrum <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1410_Ponte_tidalHF.pdf" target="_blank" rel="noopener noreferrer">Rui Ponte/Dimitris Menemenlis: Tidal Variability (General Discussion) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_1430_Ponte_nontidalHF.pdf" target="_blank" rel="noopener noreferrer">Rui Ponte: Non-tidal High Frequency Variability (General Discussion) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/08_1010_Ponte_newdata.pdf" target="_blank" rel="noopener noreferrer">Rui Ponte: Making use of new data and constraints I (General Discussion) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/08_1050_Ponte_updates.pdf" target="_blank" rel="noopener noreferrer">Rui Ponte/Ichiro Fukumori: Data and solution updating (General Discussion) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
				</ul>

				<h2 class="content_title named-anchor" id="posters">Coupling with the cryosphere</h2>
				<ul class="bullet_list">
					<li>
						<a href="../pdfs/07_0850_Carroll_ECCO_2017.pdf" target="_blank" rel="noopener noreferrer">Dustin Carroll: Ice-sheet-ocean interactions in Greenland fjords <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/07_0910_Seroussi_ECCO_2017.pdf" target="_blank" rel="noopener noreferrer">Helene Seroussi: Ice-ocean coupling of the Amundsen Sea Sector <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="../pdfs/08_0910_Manizza_ArcticCCycle_ECCO_CalTechNov2017_v2.pdf" target="_blank" rel="noopener noreferrer">Manfredi Manizza: Arctic carbon cycle <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
				</ul>
				
			</div><!-- //.wysiwyg_content -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
