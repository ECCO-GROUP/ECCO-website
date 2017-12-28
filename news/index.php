<?php

	/* define page vars */
	$include_path = '../';
	$page_title = "ECCO | News Articles";
	$page_id = 'news';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = "";

	include_once($include_path . 'includes/header.inc.php');
?>
	<div class='header_mask'></div>
	<section class='content_page '>
	 
      <script src="/assets/javascripts/grid_list_page.js" type="text/javascript"></script>
	  <section class='grid_gallery module list_view'>
		<div class='grid_layout'>
		  <header>
			<h2 class='module_title'>
			  <?php echo $header ?> News
			</h2>
			<div class='view_selectors'>
			  <a class='nav_item ir list_icon'>
				list view
			  </a>
			  <a class='nav_item ir grid_icon'>
				grid view
			  </a>
			</div>
		  </header>
		  <ul class='articles'>
			<li class='slide'>
				<a href='details.php'>
					<div class='image_and_description_container'>
						<div class='rollover_description'>
							<h3 class='release_date'>August 30, 2017</h3>
							<div class='item_tease_overlay'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</div>
							<div class='overlay_arrow'>
								<img alt='more arrow' src='/assets/images/overlay-arrow.png'>
							</div>
						</div>
						<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
						<div class='bottom_gradient'>
							<div>
								<h3>Lorem Ipsum</h3>
							</div>
						</div>
						<div class='list_text_content'>
							<div class='article_teaser_body'>August 30, 2017</div>
							<div class='content_title'>
								Lorem Ipsum
							</div>
							<div class='article_teaser_body'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</div>
						</div>
					</div>
				</a>
			</li>

			<li class='slide'>
				<a href='details.php'>
					<div class='image_and_description_container'>
						<div class='rollover_description'>
							<h3 class='release_date'>August 30, 2017</h3>
							<div class='item_tease_overlay'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</div>
							<div class='overlay_arrow'>
								<img alt='more arrow' src='/assets/images/overlay-arrow.png'>
							</div>
						</div>
						<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
						<div class='bottom_gradient'>
							<div>
								<h3>Lorem Ipsum</h3>
							</div>
						</div>
						<div class='list_text_content'>
							<div class='article_teaser_body'>August 30, 2017</div>
							<div class='content_title'>
								Lorem Ipsum
							</div>
							<div class='article_teaser_body'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</div>
						</div>
					</div>
				</a>
			</li>

			<li class='slide'>
				<a href='details.php'>
					<div class='image_and_description_container'>
						<div class='rollover_description'>
							<h3 class='release_date'>August 30, 2017</h3>
							<div class='item_tease_overlay'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
							</div>
							<div class='overlay_arrow'>
								<img alt='more arrow' src='/assets/images/overlay-arrow.png'>
							</div>
						</div>
						<div class='img'><img alt="Lorem Ipsum" title="Lorem Ipsum" src="https://via.placeholder.com/640x350"></div>
						<div class='bottom_gradient'>
							<div>
								<h3>Lorem Ipsum</h3>
							</div>
						</div>
						<div class='list_text_content'>
							<div class='article_teaser_body'>August 30, 2017</div>
							<div class='content_title'>
								Lorem Ipsum
							</div>
							<div class='article_teaser_body'>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat.
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
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>