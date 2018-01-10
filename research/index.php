<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | Research";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
	<script src="{$include_path}assets/javascripts/vendor/parallax/1.4.2/parallax.min.js" type="text/javascript"></script>
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<!-- main parallax image -->
	<section class="arrow-white transparent-arrow parallax-window" id="jpl_main_banner" data-iosFix="true" data-bleed="0" data-parallax="scroll" data-image-src="https://via.placeholder.com/1200x800" data-naturalWidth="1200" data-naturalHeight="800"></section>

	<section class='content_page module white-bg'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Research</h1>
			</header>
			<div class='wysiwyg_content'>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div><!-- //.wysiwyg_content -->
			<br /><br />
			<div class="grid">

			 	<div class="grid-cell flexit">
			 		<a href="topics/">
			 			<div class="hover-item">
			 				<div class="hover-container">
			 					<img alt="Lorem Ipsum" src="https://via.placeholder.com/640x350">
				 				<div class="description">
				 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 					tempor incididunt ut labore et dolore magna aliqua.
				 				</div>
				 			</div>
			 				<div class="content_title text-center">Research Topics</div>
			 			</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="teams/">
			 			<div class="hover-item">
			 				<div class="hover-container">
			 					<img alt="Lorem Ipsum" src="https://via.placeholder.com/640x350">
				 				<div class="description">
				 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 					tempor incididunt ut labore et dolore magna aliqua.
				 				</div>
				 			</div>
			 				<div class="content_title text-center">Research Teams</div>
			 			</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="scientists/">
			 			<div class="hover-item">
			 				<div class="hover-container">
			 					<img alt="Lorem Ipsum" src="https://via.placeholder.com/640x350">
				 				<div class="description">
				 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 					tempor incididunt ut labore et dolore magna aliqua.
				 				</div>
				 			</div>
			 				<div class="content_title text-center">Scientists</div>
			 			</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="publications/">
			 			<div class="hover-item">
			 				<div class="hover-container">
			 					<img alt="Lorem Ipsum" src="https://via.placeholder.com/640x350">
				 				<div class="description">
				 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 					tempor incididunt ut labore et dolore magna aliqua.
				 				</div>
				 			</div>
			 				<div class="content_title text-center">Publications</div>
			 			</div>
			 		</a>
			 	</div>

			 	<div class="grid-cell flexit">
			 		<a href="presentations/">
			 			<div class="hover-item">
			 				<div class="hover-container">
			 					<img alt="Lorem Ipsum" src="https://via.placeholder.com/640x350">
				 				<div class="description">
				 					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				 					tempor incididunt ut labore et dolore magna aliqua.
				 				</div>
				 			</div>
			 				<div class="content_title text-center">Presentations</div>
			 			</div>
			 		</a>
			 	</div>
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../includes/footer.inc.php'); ?>
</html>
