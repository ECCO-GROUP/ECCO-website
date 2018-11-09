<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Presentations";
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
				<h1 class='article_title'>Presentations</h1>
			</header>
			<div class='wysiwyg_content'>
				<ul class="bullet_list indent">
					<li><a href="recent/">Recent Presentations</a></li>
					<li><a href="archives/">Archived Presentations</a></li>
				</ul>

			</div><!-- //.wysiwyg_content -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
