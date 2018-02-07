<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research | Publications";
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
				<h1 class='article_title'>Publications</h1>
			</header>
			<div class='wysiwyg_content'>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!-- //.wysiwyg_content -->
			<br /><br />
			<div class="grid">

			 	<div class="grid-cell flexit">
			 		<a href="production/">
	 					<img alt="ECCO-Production and ECCO-IcES publications" src="https://via.placeholder.com/640x350">
		 				<div class="content_title text-center">ECCO-Production<br />and ECCO-IcES publications</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="godae/">
		 				<img alt="ECCO-GODAE @ JPL (1997-2009)" src="https://via.placeholder.com/640x350">
			 		
		 				<div class="content_title text-center">ECCO-GODAE @ JPL<br />(1997-2009)</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="sio-jpl-gecco/">
		 				<img alt="ECCO-SIO, ECCO-JPL, GECCO (1997-2005)" src="https://via.placeholder.com/640x350">
		 				<div class="content_title text-center">ECCO-SIO, ECCO-JPL, GECCO<br /> (1997-2005)</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="report-series/">
			 			<img alt="ECCO REPORT SERIES" src="https://via.placeholder.com/640x350">
			 			<div class="content_title text-center">ECCO REPORT SERIES</div>
			 		</a>
			 	</div>
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
