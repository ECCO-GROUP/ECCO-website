<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research Scientists";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	$ogImage = "https://via.placeholder.com/1280x720";

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page'>
		<section class="module">
			<div class='grid_layout'>
				<header id='page_header'>
					<h1 class='article_title'>Scientists</h1>
				</header>
				<div class="wysiwyg_content">

					<div class='grid'>
						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>

						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
						<div class="grid-cell grid--1of4 border">
							<img src="https://via.placeholder.com/640x360" alt="lorem ipsum" title="lorem ipsum">
							<div class="pad-20 text-center">
								<strong>Lorem Ipsum</strong>
								<p>Lorem ipsum dolor sit amet.</p>
							</div>
						</div>
					</div>

				</div>
			</div><!-- //.grid_layout -->
		</section><!-- //section -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
