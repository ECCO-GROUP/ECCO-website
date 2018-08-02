<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research | Publications";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
	<link href="/assets/stylesheets/vendor/fancybox/3.0/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/stylesheets/vendor/DataTables-1.10.16/datatables.min.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/assets/javascripts/vendor/fancybox/3.0/jquery.fancybox.min.js" type="text/javascript"></script>
   	<script src="/assets/javascripts/vendor/DataTables-1.10.16/datatables.min.js" type="text/javascript"></script>
    <script src="/assets/javascripts/publications.js" type="text/javascript"></script>
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page module'>
		<div class='pad-20'>
			<header id='page_header'>
				<h1 class='article_title'>Publications</h1>
			</header>
			<div class='wysiwyg_content'>
				<p>This database catalogues publications of the ECCO Project and those
				that employ ECCO's products. Click individual papers for full citation,
				abstract, links to corresponding publications, and a list of ECCO
				products employed.  Please acknowledge the ECCO project when utilizing
				the products and inform us (<a href="mailto:ecco.consortium@gmail.com">ecco.consortium@gmail.com</a>) of any publication missing from this list.
</p>
			</div>
			<hr />
			<div id="publications" class=""></div>
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
