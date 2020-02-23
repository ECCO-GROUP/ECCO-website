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
					<li><a href="recent/index.php#2020OSMtg">2020 AGU Ocean Sciences Meeting</a></li>
					<li><a href="recent/index.php#2019FallMtg">2019 AGU Fall Meeting</a></li>
					<li><a href="recent/index.php#2019SS">2019 ECCO Summer School</a></li>										
					<li><a href="recent/index.php#2018FallMtg">2018 AGU Fall Meeting</a></li>
					<li><a href="recent/index.php#2018OSMtg">2018 AGU Ocean Sciences Meeting</a></li>
					<li><a href="recent/index.php#2017ECCOMtg">2017 ECCO Meeting</a></li>					
				</ul>
				<h3><a href="archives/">Archived Presentations</a></h3>
				<ul class="bullet_list indent">
					<li><a href="archives/index.php#woce2002">2002 WOCE Final Conference</a></li>
					<li><a href="archives/index.php#igarss2002">2002 IGARSS </a></li>
					<li><a href="archives/index.php#godae2002">2002 GODAE </a></li>
					<li><a href="archives/index.php#jason2002">2002 Jason-1 </a></li>
				</ul>
			</div><!-- //.wysiwyg_content -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
