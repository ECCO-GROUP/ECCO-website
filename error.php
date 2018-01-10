<?php

	/* define page vars */
	$include_path = '';
	$page_title = "ECCO - Page Not Found";
	$page_id = 'error';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = "";

	include_once($include_path . 'includes/header.inc.php');
?>
	<div class='header_mask'></div>
	<section class='content_page module'>
		<div class='grid_layout'>
			<article>
				
				<header id='page_header'>
					<h1 class='article_title'>Uh Oh!</h1>
					<div class='wysiwyg_content'>We're not quite certain what has happened, but we think The Great Galactic Ghoul has eaten what you were looking for.</div>
				</header>
				<div class='clearfix'>
					<!-- article_image_container	image_container	-->
					<div class='image_container'>
						<section class='clearfix main_feature'>
							<img alt='The Great Galactic Ghoul' title='The Great Galactic Ghoul' data-src='/assets/images/galactic-ghoul.jpg' src='/assets/images/galactic-ghoul.jpg'>	  
							<div class='caption'>
								In 1965, JPL Engineer, John Casani, jokingly came up with the idea of the Ghoul when a reporter asked him why many Soviet spacecraft were failing to reach Mars. The Ghoul came to be known as the Great Galactic Ghoul and lived on in infamy.
							</div>
						</section>
					</div>
				</div>
				
			</article>
		</div>
	</section>

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>