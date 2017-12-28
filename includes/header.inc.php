<?php
  date_default_timezone_set('America/Los_Angeles');

  if(!isset($ogImage)) {
    $ogImage = "https://ecco.jpl.nasa.gov/assets/images/logo/ecco_small.jpg";
  }
?>
<!DOCTYPE html>
<!--[if IE 9]> <html class="no-js ie ie9" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie ie8" lang="en"> <![endif]-->
<html lang="en">
  <!-- START HEADER: "DEFAULT" -->
  <head>
    <meta charset='utf-8'>
    <!-- Always force latest IE rendering engine or request Chrome Frame -->
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
	  <meta content='width=device-width, initial-scale=1.0' name='viewport'>

    <!-- facebook share information -->
    <meta property="og:image" content="<?php echo $ogImage; ?>" />

	  <title><?php echo $page_title; ?></title>
    <link href="/assets/stylesheets/manifest.css" rel="stylesheet" type="text/css" media="all" />
    <link href="/assets/stylesheets/print.css" rel="stylesheet" type="text/css" media="print" />
    <link href="/assets/stylesheets/screen.css" rel="stylesheet" type="text/css" media="all" />
    <script src="/assets/javascripts/public_manifest.js" type="text/javascript"></script>
	  <?php if(isset($include_other)){ echo $include_other; }; ?>
  </head>
  <body class='<?php echo $theme; ?> logged_out mobile_menu' id='<?php echo $page_id; ?>'>
    <!--[if lt IE 9]>
      <div class='browsehappy' style='font-size: 30px; color: white; position:absolute; top: 0; margin: 0; height: 3000px; width: 100%; background: #000; z-index: 10000; padding: 5%;'>
        You are using an
        <strong>outdated</strong>
        browser. Please
        <a href='http://browsehappy.com/'>click here</a>
        to upgrade or change your browser.
      </div>
    <![endif]-->
  	<div id='main_container'>
        <div id='site_body'>
          <div class='site_header_area'>
            <header class='site_header'>
              <div class='brand_area'>
                <div class='brand1'>
                  <a class='nasa_logo' href='http://www.nasa.gov' title='NASA'>NASA</a>
                </div>
                <div class='brand2'>
                  <div class='jpl_logo'>
                    <a href='http://www.jpl.nasa.gov/' id='jpl_logo' title='Jet Propulsion Laboratory Website'>Jet Propulsion Laboratory</a>
                  </div>
                  <div class='caltech_logo'>
                    <a href='http://www.caltech.edu/' id='caltech_logo' title='California Institute of Technology Website' target='_blank'>California Institute of Technology</a>
                  </div>
                </div>
                <img alt='NASA, California Institute of Technology, and Jet Propulsion Laboratory Page Header Title' class='print_only print_logo' src='/assets/images/logo_nasa_trio_black@2x.png'>
              </div>
              <div class='separator'></div>
              <div class='other_brand'>
                <div><a href="/" title="Return to Explorer 1 home page">Estimating the Circulation<br />and Climate of the Ocean</a></div>
              </div>
              <div class='side_nav'>
                <ul>
                    <li><a href="/" title="Visit the Explorer 1 Home Page">Home</a></li>
                    <li><a href="/news/" title="Read news articles about the Explorer 1 Mission by visiting this page.">News</a></li>
                    <li><a href="javascript:void(0)" title="Learn more about the Explorer 1 Mission by visiting this page.">Mission</a>
                      <ul class="subnav">
                        <li><a href="/mission/" title="Learn more about the Explorer 1 Mission by visiting this page.">Overview</a></li>
                        <li><a href="/mission/timeline/" title="Learn more about the Explorer 1's mission timeline by visiting this page.">Timeline</a></li>
                      </ul>
                    </li>
                    <li><a href="/galleries/" title="View a list of image and video galleries about Explorer 1.">Galleries</a>
                      <ul class="subnav width-2">
                        <li><a href="/galleries/images/" title="View Explorer 1 Images">Images</a></li>
                        <li><a href="/galleries/videos/" title="View Explorer 1 Videos">Videos</a></li>
                        <li><a href="/galleries/then-and-now/" title="View Explorer 1 Then and Now Images">Then &amp; Now</a></li>
                      </ul>
                    </li>
                    <li><a href="/downloads/" title="Explorer 1 Poster Downloads">Downloads</a></li>
                </ul>
              </div>
              <a class='visuallyhidden focusable' href='#main'>Skip Navigation</a>
              <div class='nav_area'>
                <a class='menu_button' href='javascript:void(0);' title='menu button'>
                  <span class='menu_icon'>menu and search</span>
                </a>
              </div>
            </header>
          </div>
          <?php include_once($include_path . 'includes/mobile-navbar.inc.php'); ?>
          <a name='main'></a>
          <div id='page'>
          <!-- END HEADER: "DEFAULT" -->
