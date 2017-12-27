<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "Explorer 1 | Galleries";
	$page_id = 'downloads';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
	<link href="/assets/stylesheets/vendor/fancybox/3.0/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
	<script src="/assets/javascripts/vendor/fancybox/3.0/jquery.fancybox.min.js" type="text/javascript"></script>
EOF;

	$ogImage = "https://via.placeholder.com/1280x720";

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<script>addthis_loader.init("//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5429eeee4e460927", {floater: true})</script>

	<div class='header_mask'></div>
	<section class='content_page module'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Downloads</h1>
			</header>
			<div class='wysiwyg_content'>
 				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
 				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
 				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
 				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
 				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
 			</div><!-- //.wysiwyg_content -->
			<hr />
			<h2>Posters</h2>
			<p>Click on any of the thumbnails below to learn more and download a free poster-sized image.</p>
			<section class="grid">
				<div class="grid-cell grid--1of3">
					<a data-fancybox="gallery-posters" data-caption="<h2>Lorem Ipsum</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>" title="Lorem Ipsum" href="https://via.placeholder.com/1280x720">
						<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					</a>
					<p><a href='' target='_blank' rel='noopener noreferrer'>PDF</a> (XX MB) | <a href='' target='_blank' rel='noopener noreferrer'>TIF</a> (XX MB)</p>
				</div>
				<div class="grid-cell grid--1of3">
					<a data-fancybox="gallery-posters" data-caption="<h2>Lorem Ipsum</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>" title="Lorem Ipsum" href="https://via.placeholder.com/1280x720">
						<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					</a>
					<p><a href='' target='_blank' rel='noopener noreferrer'>PDF</a> (XX MB) | <a href='' target='_blank' rel='noopener noreferrer'>TIF</a> (XX MB)</p>
				</div>
				<div class="grid-cell grid--1of3">
					<a data-fancybox="gallery-posters" data-caption="<h2>Lorem Ipsum</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>" title="Lorem Ipsum" href="https://via.placeholder.com/1280x720">
						<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					</a>
					<p><a href='' target='_blank' rel='noopener noreferrer'>PDF</a> (XX MB) | <a href='' target='_blank' rel='noopener noreferrer'>TIF</a> (XX MB)</p>
				</div>
				<br />
				<footer>
					&nbsp;
					<span>
						<a class="outline_button dark" href="">
							<span class="button_text">
								Download All Posters (PDF - XX MB)
							</span>
						</a>
					</span>
					&nbsp;
					&nbsp;
					<span>
						<a class="outline_button dark" href="">
							<span class="button_text">
								Download All Posters (TIF - XX MB)
							</span>
						</a>
					</span>
					&nbsp;
				</footer>
			</section>

			<br />
			<hr />
			<h2>Infographics</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			<div class="grid">
				<div class="grid-cell grid--1of3">
					<a data-fancybox="gallery-infographics" data-caption="<h2>Lorem Ipsum</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href='' target='_blank' rel='noopener noreferrer'>&rsaquo; View Infographic &amp; Download</a>" title="Lorem Ipsum" href="https://via.placeholder.com/1280x720">
						<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					</a>
				</div>
				<div class="grid-cell grid--1of3">
					<a data-fancybox="gallery-infographics" data-caption="<h2>Lorem Ipsum</h2><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><a href='' target='_blank' rel='noopener noreferrer'>&rsaquo; View Infographic &amp; Download</a>" title="Lorem Ipsum" href="https://via.placeholder.com/1280x720">
						<img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350">
					</a>
				</div>
				<div class="grid-cell grid--1of3"></div>
			</div>
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
