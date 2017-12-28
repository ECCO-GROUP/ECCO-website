<?php

	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | News | Lorem Ipsum";
	$page_id = 'news_detail';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = "";

	include_once($include_path . 'includes/header.inc.php');
?>

	<div class='header_mask'></div>
	<section class='content_page module'>
		<div class='grid_layout'>
			<article>
				<header id='page_header'>
					<h2 class='category_title'>
						<a href='./'>News</a>
						<span class='release_date'>| August 30, 2017</span>
					</h2>
					<h1 class='article_title'>Lorem Ipsum</h1>
				</header>
				<div class='clearfix' id='primary_column'>
					<div class='article_image_container'>
						<section class='clearfix main_feature'>
							<img alt='Lorem Ipsum' data-src='https://via.placeholder.com/1280x720' src='https://via.placeholder.com/1280x720'>
							<div class='caption'>Lorem Ipsum</div>
						</section>
					</div>
					<div class='wysiwyg_content'>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
				
				<div id='secondary_column'>
					<?php 
						include_once($include_path . 'includes/sidebar/contact.inc.php');
						//include_once($include_path . 'includes/sidebar/twitter-timeline.inc.php');
					?>
				</div>
			</article>
		</div>
	</section>

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>