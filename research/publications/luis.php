<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research | Publications";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
    <link href="/assets/stylesheets/vendor/DataTables-1.10.16/datatables.min.css" rel="stylesheet" type="text/css" media="all" />
   	<script src="/assets/javascripts/vendor/DataTables-1.10.16/datatables.min.js" type="text/javascript"></script>
    <script src="/assets/javascripts/publications.js" type="text/javascript"></script>
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
				<ul class="bullet_list indent">
					<li><a href="#production">ECCO-Production and ECCO-IcES publications</a></li>
					<li><a href="#godae">ECCO-GODAE @ JPL (1993-2009)</a></li>
					<li><a href="#sio">ECCO-SIO, ECCO-JPL, GECCO (1997-2005)</a></li>
					<li><a href="#report">ECCO REPORT SERIES</a></li>
				</ul>

				<div id="publications" class=""></div>
				
			</div>
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
