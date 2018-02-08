<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | Research";
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
				<h1 class='article_title'>Research</h1>
			</header>
			<div class='wysiwyg_content'>
				<!--<p>Select an option below.</p>-->
			</div><!-- //.wysiwyg_content -->
			<!--<br /><br />-->
			<div class="grid">

			 	<div class="grid-cell flexit">
			 		<a href="topics/">
		 				<img alt="Topics" src="/assets/images/icons/topics.jpg">
		 				<div class="content_title text-center">Topics</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="teams/">
	 					<img alt="Teams" src="/assets/images/icons/teams.jpg">
		 				<div class="content_title text-center">Teams</div>
			 		</a>
			 	</div>

			 	<?php /*
			 	<div class="grid-cell flexit">
			 		<a href="scientists/">
		 				<img alt="Scientists" src="/assets/images/icons/scientists.jpg">
		 				<div class="content_title text-center">Scientists</div>
			 		</a>
			 	</div>
			 	*/ ?>

			 	<div class="grid-cell flexit">
			 		<a href="publications/">
		 				<img alt="Publications" src="/assets/images/icons/publications.jpg">
		 				<div class="content_title text-center">Publications</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="presentations/">
			 			<img alt="Presentations" src="/assets/images/icons/presentations.jpg">
			 			<div class="content_title text-center">Presentations</div>
			 		</a>
			 	</div>
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
