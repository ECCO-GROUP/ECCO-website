<?php
	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | Galleries";
	$page_id = 'images';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = "";

	include_once($include_path . 'includes/header.inc.php');

?>
	<div class='header_mask'></div>
	<section class='content_page module'>
		<div class="grid_layout">
			<header id='page_header'>
				<h1 class='article_title'>Galleries</h1>
			</header>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<section class="grid_gallery list_view">
		<div class="grid_layout">
			<h2>Images</h2>
			<ul class="articles">
				<li class='slide'>
					<a href='images/'>
						<div class='image_and_description_container'>
							<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
							<div class='list_text_content'>
								<div class='content_title'>
									Lorem Ipsum
								</div>
								<div class='article_teaser_body'>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</div>
					</a>
				</li>
				<li class='slide'>
					<a href='then-and-now/'>
						<div class='image_and_description_container'>
							<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
							<div class='list_text_content'>
								<div class='content_title'>
									Then &amp; Now
								</div>
								<div class='article_teaser_body'>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</div>
					</a>
				</li>
			</ul>
			<h2>Videos</h2>
			<ul class="articles">
				<li class='slide'>
					<a href='videos/'>
						<div class='image_and_description_container'>
							<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
							<div class='list_text_content'>
								<div class='content_title'>
									Lorem Ipsum
								</div>
								<div class='article_teaser_body'>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								</div>
							</div>
						</div>
					</a>
				</li>
			</ul>
		</div>
		</section>
	</section>
	<!-- END CONTENT -->
	<?php include_once($include_path . "includes/footer.inc.php"); ?>
</html>
