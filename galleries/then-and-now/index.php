<?php

	/* define page vars */
	$include_path = '../../';
	$page_title = "Explorer 1 | Then &amp; Now";
	$page_id = 'images';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
	<link href="/assets/stylesheets/vendor/beforeafter/twentytwenty.css" rel="stylesheet" type="text/css" />
	<script src="/assets/javascripts/vendor/beforeafter/jquery.event.move.js" type="text/javascript"></script>
	<script src="/assets/javascripts/vendor/beforeafter/jquery.twentytwenty.js" type="text/javascript"></script>
    <script>
    $(window).load(function(){
      $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
      $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.5, orientation: 'vertical'});
    });
    </script>
EOF;

	include_once($include_path . "includes/header.inc.php");
?>
	<div class='header_mask'></div>
	<section class='content_page module'>
		<div class="grid_layout">
			<header id='page_header'>
				<h2 class='category_title'><a href="../">galleries</a></h2>
				<h1 class='article_title'>Then &amp; Now</h1>
			</header>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
		<div class="grid_layout">
			<div class="twentytwenty-container">
			  <img alt="before image" src="https://via.placeholder.com/640x350" />
			  <img alt="after image" src="https://via.placeholder.com/860x470" />
			</div>
		</div>
	</section>
	<!-- END CONTENT -->
	<?php include_once($include_path . "includes/footer.inc.php"); ?>
</html>