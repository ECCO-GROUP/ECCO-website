<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | About ";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page module white-bg'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>About</h1>
			</header>
			<div class='wysiwyg_content'>

				<div class="img--left img--240">
					<img src="/assets/images/about/earth.png">
				</div>
				<div>
					ECCO was established in 1999 as part of the World Ocean Circulation Experiment (<a href="http://woce.nodc.noaa.gov/wdiu/" target="_blank" rel="noopener noreferrer">WOCE</a>) with the goal of combining a general circulation model (GCM) with diverse observations in order to produce a quantitative depiction of the time-evolving global ocean state. The importance of such an endeavor is recognized by numerous national and international organizations, such as the WMO's World Climate Research Programme (<a href="http://www.wcrp-climate.org/" target="_blank" rel="noopener noreferrer">WCRP</a>) and UNESCO's Intergovernmental Oceanographic Comission (<a href="http://ioc.unesco.org/" target="_blank" rel="noopener noreferrer">IOC</a>). These programs have all noted the necessity of synthesizing the diverse remotely-sensed and in-situ observations with known dynamics and thermodynamics through a GCM. ECCO products are in support of the Climate Variability and Predictability (<a href="http://www.clivar.org/" target="_blank" rel="noopener noreferrer">CLIVAR</a>) programme and the Global Ocean Data Assimilation Experiment (<a href="http://www.usgodae.org/" target="_blank" rel="noopener noreferrer">GODAE</a>).
					<p>ECCO was initially formed under the National Ocean Partnership Program (<a href="http://www.nopp.org/" target="_blank" rel="noopener noreferrer">NOPP</a>) with funding provided by the National Science Foundation (<a href="http://www.nsf.gov/" target="_blank" rel="noopener noreferrer">NSF</a>), the National Aeronautics and Space Administration (<a href="http://www.nasa.gov/" target="_blank" rel="noopener noreferrer">NASA</a>), the Office of Naval Research (<a href="http://www.onr.navy.mil/" target="_blank" rel="noopener noreferrer">ONR</a>), and now the National Oceanic and Atmospheric Administration (<a href="http://www.noaa.gov/" target="_blank" rel="noopener noreferrer">NOAA</a>). Its long term goal is to provide a high resolution coupled ocean/sea-ice/biochemical (and ultimately, consistent atmospheric) state estimate to a wide community. In contrast to so-called numerical weather prediction, these estimates will include the ocean's history as well as predictions. ECCO's efforts toward this goal now include several projects, each of which is bringing ECCO closer to its long term goal, while providing significant scientific contributions.</p>
				</div>
				<!--<hr>

				<h3>ECCO (1998-2004)</h3>
				<p>ECCO was initiated by a group of scientists at the Jet Propulsion Laboratory (JPL), the Massachusetts Institute of Technology (MIT) and the Scripps Institution of Oceanography (SIO).</p>
				<p>From its <a href="http://www.ecco-group.org/scienceplans/ecco1_scienceplan.pdf" target="_blank" rel="noopener noreferrer">mission statement</a>:</p>
				<div class="gray-bg2 pad-20"><i>"... to bring ocean state estimation from its current experimental status to that of a practical and quasi operational tool for studying large-scale ocean dynamics, designing observational strategies, and examining the ocean's role in climate variability."</i></a></div>
				<p>Two formal estimation strategies were pursued for solving the least-squares model vs. data misfit problem.</p>
				<ol class="numbered_list">
					<li>ECCO-SIO SIO and MIT have focused on the method of Lagrange multipliers (MLM), also known as the adjoint method (or related, 4DVAR in meteorology). Initial solutions covered the period 1992 to 1997 at 2 degree horizontal resolution (version 0), and have later been extended to 2002 at 1 degree. (version 1). <a href="http://www.ecco-group.org/ecco1/" target="_blank" rel="noopener noreferrer">ECCO-SIO homepage</a>.</li>
					<li>ECCO-JPL JPL has focused mainly on an extended Kalman filter and RTS smoother approach. Solutions are produced in near real-time covering the period from 1993 to present. Its grid telescopically increases from 1 deg. at mid-latitudes to 1/3 deg. near the equator with 46 vertical levels. <a href="http://ecco.jpl.nasa.gov/" target="_blank" rel="noopener noreferrer">ECCO-JPL homepage</a>.</li>
				</ol>

				<h3>ECCO-GODAE</h3>
				<p>ECCO-GODAE is a follow-on to the original effort beyond 2004 under NOPP sponsorship in support of GODAE and CLIVAR with funding from NSF, NASA and NOAA. Additional partners now include Atmospheric and Environmental Research (AER).</p>
				<p>From its <a href="http://www.ecco-group.org/scienceplans/" target="_blank" rel="noopener noreferrer">mission statement</a>:</p>
				<div class="gray-bg2 pad-20"><i>"... the sustained production and improvement of on-going best-estimates of the time-dependent, absolute ocean circulation employing as much of the global ocean data sets as is practicable."</i></div>
				

				<h3>GECCO</h3>
				<p>German ECCO (GECCO) is an extension of ECCO-SIO, now based at the University of Hamburg's Institut fuer Meereskunde (IfM). It has shifted its focus to extending the estimation to cover the full 50-year NCEP/NCAR re-analysis period, as well as to regional higher-resolution estimates in the North Atlantic.</p>
				<p>ECCO-GODAE currently maintains the overall ECCO homepage</p>

				<h3>ECCO2</h3>
				<p>ECCO2 - High-Resolution Global-Ocean and Sea-Ice Data Synthesis is Phase II of the ECCO project under the NASA Modeling, Analysis, and Prediction (MAP) program.</p>
				<p>From its <a href="http://www.ecco-group.org/scienceplans/ecco2_scienceplan.pdf" target="_blank" rel="noopener noreferrer">mission statement</a>:</p>
				<div class="gray-bg2 pad-20"><i>"... to produce increasingly accurate syntheses of all available global-scale ocean and sea-ice data at resolutions that start to resolve ocean eddies and other narrow current systems, which transport heat, carbon, and other properties within the ocean."</i></div>
				<p><a href="http://ecco2.org/" target="_blank" rel="noopener noreferrer">ECCO2 homepage</a>.</p>

				<h3>MITgcm - ECCO'S OCEAN GENERAL CIRCULATION MODEL</h3>
				<p>The ECCO code is based on the <a href="http://mitgcm.org/" target="_blank" rel="noopener noreferrer">MIT general circulation model (MITgcm)</a>. It is freely available for download through the <a href="http://mitgcm.org/public/source_code.html" target="_blank" rel="noopener noreferrer">MITgcm CVS repository</a>. The repository enables web-based access to the model, and distributed code development. Code documentation is available through the <a href="http://mitgcm.org/public/r2_manual/latest/" target="_blank" rel="noopener noreferrer">online manual</a>. ECCO-specific configuration is documented in chapter 8 of the manual. An <a href="http://mitgcm.org/mailman/listinfo/mitgcm-support" target="_blank" rel="noopener noreferrer"'>MITgcm support and discussion group</a> has been set up where you can post your questions or bug reports and browse previous Q's & A's. You can email the group at <a href="mailto:support@mitgcm.org">mitgcm-support@mitgcm.org</a>.</p>

				<h3>MITgcm - THE ECCO VERSION 4 SETUP</h3>
				<p>The ECCO version 4 setup is archived, maintained, and documented at <a href="http://mitgcm.org/viewvc/MITgcm/MITgcm_contrib/gael/verification/" target="_blank" rel="noopener noreferrer">this location</a> . It is subjected to automated daily testing (with results posted to <a href="http://mitgcm.org/public/testing.html" target="_blank" rel="noopener noreferrer">this location</a>) on our local 'glacier' cluster. The ECCO v4 setup is freely available for download via the <a href="http://mitgcm.org/source_code.html" target="_blank" rel="noopener noreferrer">MITgcm CVS repository</a> by following a few simple directions provided in the <a href="http://mitgcm.org/viewvc/*checkout*/MITgcm/MITgcm_contrib/gael/verification/eccov4.pdf" target="_blank" rel="noopener noreferrer">ECCO version 4 user guide</a>. The various input and forcing fields needed to re-run the ECCO v4-r2 state estimate (the baseline solution) are also freely availble (see <a href="http://mitgcm.org/viewvc/*checkout*/MITgcm/MITgcm_contrib/gael/verification/eccov4.pdf" target="_blank" rel="noopener noreferrer">ECCO version 4 user guide</a>). A <a href="http://mailman.mit.edu/mailman/listinfo/ecco-support" target="_blank" rel="noopener noreferrer">support and discussion group</a> has been set up where you can post your questions or bug reports and browse previous Q's & A's (<a href="ecco-support@mit.edu">ecco-support@mit.edu</a>).</p>

				<h3>TANGENT LINEAR AND ADJOINT CODE GENERATION VIA AUTOMATIC DIFFERENTIATION (AD)</h3>
				<p>Automatic Differentiation (AD) is a technology for automatically augmenting computer programs, including arbitrarily complex simulations, with statements for the computation of derivatives (tangent linear, adjoint, Hessian, etc.), also known as sensitivities. AD tools in our context provide source-to-source transformation of a function, given as comouter code, to generate efficient and accurate (truncation-free) code for computing first, second and higher-order derivatives of the given function.</p>
				<p>Since the mid-1990's, groups at MIT, SIO, JPL and GFDL have applied AD tools for generating tangent linear and adjoint code for ocean circulation and climate studies. AD has been used in a practical way to study three broad classes of problems: (i) parameter sensitivity of the climate system, (ii) initial and boundary value sensitivity, and (iii) ocean state estimation (or data assimilation). A description of the implementation of AD in the context of the <a href="http://mitgcm.org/" target="_blank" rel="noopener noreferrer">MITgcm</a> is given in chapter 5 of the <a href="http://mitgcm.org/public/r2_manual/latest/" target="_blank" rel="noopener noreferrer">MITgcm Online Documentation</a>.</p>
				<p>The current ocean state estimation effort may be considered to be among the most complex inverse modeling exercises attempted to date. It has placed the <a href="http://www.ecco-group.org/automatic.htm" target="_blank" rel="noopener noreferrer">ECCO consortium</a> in a position to push the limits of AD, and given it experience and expertise to address questions as to where and how AD needs to be improved for large scale applications in the Earth sciences and beyond.</p>
				<p>Efforts are currently under way to facilitate the access to, and considerably augment the power of existing AD tools through the development of an open-source tool <a href="http://www-unix.mcs.anl.gov/OpenAD/" target="_blank" rel="noopener noreferrer">OpenAD</a>.</p>
				<p>Here's an (incomplete) list of other AD tools:</p>
				<ul class="bullet_list">
					<li><a href="http://www.autodiff.org/" target="_blank" rel="noopener noreferrer">Autodiff.org</a></li>
					<li><a href="http://tapenade.inria.fr:8080/tapenade/index.jsp" target="_blank" rel="noopener noreferrer">TAPENADE</a></li>
					<li><a href="http://www.autodiff.com/tamc/" target="_blank" rel="noopener noreferrer">TAMC</a></li>
					<li><a href="http://fastopt.de/products/taf/" target="_blank" rel="noopener noreferrer">TAF</a></li>
					<li><a href="http://www-unix.mcs.anl.gov/autodiff/ADIFOR/" target="_blank" rel="noopener noreferrer">ADIFOR</a></li>
					<li><a href="http://www-fp.mcs.anl.gov/adic/" target="_blank" rel="noopener noreferrer">ADIC</a></li>
					<li><a href="http://yoric.mit.edu/daepack/" target="_blank" rel="noopener noreferrer">DAEPACK</a></li>
				</ul>-->

			</div><!-- //.wysiwyg_content -->
			
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../includes/footer.inc.php'); ?>
</html>
