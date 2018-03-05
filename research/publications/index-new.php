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
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<hr />
			<div id="publications" class=""></div>
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
