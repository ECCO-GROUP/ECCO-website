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
                <div><a href="/" title="Return to ECCO home page">ECCO</a></div>
              </div>
              
              <!-- Ian 2018-12-02, renamed 'latest product' to ECCO v4 R3, 
                added faq and analysis tools to menu -->
              <div class='side_nav'>
                <ul>
                    <li><a href="/" title="Visit the ECCO home page.">Home</a></li>
                    <li><a href="/news/" title="Read news articles about the ECCO Mission by visiting this page.">News</a></li>
                    <li>
                      <a href="/products/all/" title="Learn more about ECCO's products.">Products</a>
                      <ul class="subnav">
                        <li><a href="/products/latest/" title="Download the latest product." class="no-break">Featured Product: ECCO v4 Release 4</a></li>
                        <li><a href="/products/all/" title="View a list of all products." class="no-break">All Products</a></li>
                      </ul>
                    </li>
                    <!-- -->
                    <li><a href="/data/" title="Learn more about ECCO Data by visiting this page.">Data</a></li>
                    <!-- -->
                    <li><a href="/knowledge/" title="Learn more about ECCO Knowledge Base by visiting this page.">Knowledge</a>
                      <ul class="subnav">
                        <li><a href="/knowledge/faq/" title="ECCO FAQ.">FAQ</a></li>
                        <li><a href="/knowledge/analysis_tools/" title="ECCO Analysis Tools">Analysis Tools</a></li>
                      </ul>
                    </li>
                    <!-- -->
                    <li><a href="/research/" title="Learn more about ECCO Research by visiting this page.">Research</a>
                      <ul class="subnav">
                        <li><a href="/research/topics/" title="Learn more about ECCO Research Topics by visiting this page.">Topics</a></li>
                        <li><a href="/research/teams/" title="ECCO Research Teams">Teams</a></li>
                        <?php /*
                        <li><a href="/research/scientists/" title="ECCO Research Scientists">Scientists</a></li>
                        */ ?>
                        <li><a href="/research/publications/" title="List of ECCO Publications">Publication List</a></li>
                        <li><a href="/research/publicationHighlights/" title="Recent ECCO Publications">Publication Highlights</a></li>
                        <li><a href="/research/presentations/" title="ECCO Research Presentations">Presentations</a></li>
                      </ul>
                    </li>
                    <li><a href="/about/" title="Learn more about ECCO by visiting this page.">About</a></li>
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
