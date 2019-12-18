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
				<h3><a href="recent/">Recent Presentations</a></h3>
				<ul class="bullet_list indent">
					<li><a href="recent/">2019 AGU Fall Meeting</a></li>
					<li><a href="recent/">2019 ECCO Summer School</a></li>										
					<li><a href="recent/">2018 AGU Fall Meeting</a></li>
					<li><a href="recent/">2018 AGU Ocean Sciences Meeting</a></li>
					<li><a href="recent/">2017 ECCO Meeting</a></li>					
				</ul>
				<h3><a href="archives/">Archived Presentations</a></h3>
				<ul class="bullet_list indent">
					<li><a href="recent/">2002 WOCE Final Conference</a></li>
					<li><a href="recent/">2002 IGARSS </a></li>
					<li><a href="recent/">2002 GODAE </a></li>
					<li><a href="recent/">2002 Jason-1 </a></li>
				</ul>
			</div><!-- //.wysiwyg_content -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
