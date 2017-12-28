<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Mission Timeline";
	$page_id = 'timeline';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
	<link href="/assets/stylesheets/vendor/TimelineJS3-3.5.1/timeline.css" rel="stylesheet" type="text/css" />
    <script src="/assets/javascripts/vendor/TimelineJS3-3.5.1/timeline-min.js" type="text/javascript"></script>
	<link href="/assets/stylesheets/vendor/fancybox/3.0/jquery.fancybox.min.css" rel="stylesheet" type="text/css" />
    <script src="/assets/javascripts/vendor/fancybox/3.0/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="/assets/javascripts/timeline_custom.js" type="text/javascript"></script>
EOF;
	include_once($include_path . 'includes/header.inc.php');
?>
	  <!-- START CONTENT -->
	  <div class='header_mask'></div>
	  <div class='wysiwyg_content'>
		<div id='timeline-embed'></div>
	  </div>
	  <!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>