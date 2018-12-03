<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | Knowledge ";
	$page_id = 'knowledge';
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
				<h1 class='article_title'>ECCO Knowledge</h1>
			</header>
			
			<div class='wysiwyg_content'>

				<h3><a href="faq/">Frequently Asked Questions (FAQ)</a></h3>
			</div><!-- //.wysiwyg_content -->

		</div>

		<div class='grid_layout'>
			
			<div class='wysiwyg_content'>
				<h3><a href="analysis_tools/">Analysis Tools</a></h3>
			</div><!-- //.wysiwyg_content -->
			
		</div>
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../includes/footer.inc.php'); ?>
</html>
