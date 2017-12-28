<?php

	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Images";
	$page_id = 'images';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
	<link href="/assets/stylesheets/vendor/fancybox/3.0/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
	<script src="/assets/javascripts/vendor/fancybox/3.0/jquery.fancybox.min.js" type="text/javascript"></script>
	<script src="/assets/javascripts/vendor/masonry/3.3.1/masonry.pkgd.min.js" type="text/javascript"></script>
	<script src="/assets/javascripts/vendor/masonry/3.3.1/imagesloaded.pkgd.min.js" type="text/javascript"></script>
	<script src="/assets/javascripts/gallery/gallery.js" type="text/javascript"></script>
EOF;

	include_once($include_path . "includes/header.inc.php");
?>
	<div class='header_mask'></div>
	<section class='content_page module'>
		<div class="grid_layout">
			<header id='page_header'>
				<h2 class='category_title'><a href="../">galleries</a></h2>
				<h1 class='article_title'>Images</h1>
			</header>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<section class="grid_gallery grid_view">
			<div class="grid_layout">
				<div class="wysiwyg_content">
					<article>
						<div class="articles">
							<div class='gallery-grid-sizer'></div>	
							<div class='gallery-grid-item one-quarter-width'>
								<a data-fancybox='gallery' data-caption='<h3>Lorem Ipsum</h3>' title='Lorem Ipsum' href="http://via.placeholder.com/640x350">
									<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
								</a>
							</div>
							<div class='gallery-grid-item one-quarter-width'>
								<a data-fancybox='gallery' data-caption='<h3>Lorem Ipsum</h3>' title='Lorem Ipsum' href="http://via.placeholder.com/1280x720">
									<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
								</a>
							</div>
							<div class='gallery-grid-item one-quarter-width'>
								<a data-fancybox='gallery' data-caption='<h3>Lorem Ipsum</h3>' title='Lorem Ipsum' href="http://via.placeholder.com/1280x720">
									<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
								</a>
							</div>
							<div class='gallery-grid-item one-quarter-width'>
								<a data-fancybox='gallery' data-caption='<h3>Lorem Ipsum</h3>' title='Lorem Ipsum' href="http://via.placeholder.com/1280x720">
									<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
								</a>
							</div>
						</div>
					</article>
				</div>
			</div>
	  	</section>
	</section>
	<!-- END CONTENT -->
	<?php include_once($include_path . "includes/footer.inc.php"); ?>
</html>