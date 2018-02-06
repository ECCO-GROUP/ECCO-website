<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Products | Latest Product";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page module white-bg'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Latest Product</h1>
				<a href="../all">All Products</a>
			</header>
			<div class='wysiwyg_content'>

				<h2>ECCO Version 4 Release 3</h2>
				<small>Authors: Fukumori, Ichiro; Wang, Ou; Fenty, Ian; Forget, Gael; Heimbach, Patrick; Ponte, Rui M.</small>

				<div class="grid">
					<div class="grid-cell flexit">
						<h4>Abstract:</h4>
						<p>This note provides a brief synopsis of ECCO Version 4 Release 3, an updated edition to the global ocean state estimate described by Forget et al. (2015b, 2016), covering the period 1992-2015.</p>
						<h4>Description:</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					<div class="grid-cell grid--1of3 margin-20">
						<div><img src="/assets/images/home/v4r3.jpg"></div>
						<br />
						<div class="text-center pad-10">
							<div><strong><a href="" class="button white">Download Product</a></strong></div>
						</div>
					</div>
				</div>

				<h2>Overview</h2>
				<div>
					<table class="full-width gray-striped text-left one-quarter-width">
						<tr>
							<td>Period:</td>
							<td>Jan 1992 - Dec 2015</td>
						</tr>
						<tr>
							<td>Grid & Resolution:</td>
							<td>LLC90 (1 deg)</td>
						</tr>
						<tr>
							<td>Domain:</td>
							<td>Global</td>
						</tr>
						<tr>
							<td>Variable:</td>
							<td>Ocean State (temperature, salinity, velocity, sea level, bottom pressure), Fluxes (temperature, salt, volume)</td>
						</tr>
						<tr>
							<td>Temporal Resolution:</td>
							<td>Monthly, Daily, Hourly</td>
						</tr>
						<tr>
							<td>Data Used:</td>
							<td><a href="/data/#satellite-altimetry">Satellite Altimetry</a>, <a href="/data/#argo">ARGO</a>, <a href="/data/#grace">GRACE</a>, Aquarius, CTD, XBT</td>
						</tr>
						<tr>
							<td>Type of Estimation:</td>
							<td>Adjoint</td>
						</tr>
						<tr>
							<td>Data Format(s):</td>
							<td>NetCDF, Binary</td>
						</tr>
						<tr>
							<td>Version:</td>
							<td>Release 3</td>
						</tr>
						<tr>
							<td>Contact Person:</td>
							<td>Ian Fenty, Ichiro Fukumori, Ou Wang</td>
						</tr>
						<tr>
							<td>Last Updated Date:</td>
							<td>October 15, 2017</td>
						</tr>
					</table>
				</div>

				<h2>Citation</h2>
				<p>As a condition of using this product, you <strong><i>must</i></strong> cite the use of this product using the following citation.</p>
				<div class="indent gray-bg pad-20">
					<i>
						<p>Forget, G., J.-M. Campin, P. Heimbach, C. N. Hill, R. M. Ponte, and C. Wunsch, 2015: ECCO version 4: an integrated framework for non-linear inverse modeling and global ocean state estimation. Geoscientific Model Development, 8, 3071-3104, doi:10.5194/gmd-8-3071-2015</p>
						<p>Forget, G., J.-M. Campin, P. Heimbach, C. N. Hill, R. M. Ponte, and C. Wunsch, 2016: ECCO version 4: Second Release, <a href="http://hdl.handle.net/1721.1/102062" target="_blank" rel="noopener noreferrer">http://hdl.handle.net/1721.1/102062</a></p>
					</i>
				</div>
				<p>For more information, see our <a href="">Use and Copyright Web page</a>.</p>

				<h2>User Guide</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p><strong><a href="./user-guide/" class="button white">Read the User Guide</a></strong></p>
				
				<h2>Technical Reference</h2>
				<div>
					<p><strong>A generic treatment of gridded earth variables in Matlab.</strong></p>
					<div class="indent">
						<p>
							Forget, G.<br/>
							Available at <a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/doc/ECCOV4R2_gcmfaces.pdf" target="_blank" rel="noopener noreferrer">ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/doc/ECCOV4R2_gcmfaces.pdf</a><br/>
							2017: gcmfaces
						</p>
					</div>

					<p><strong>ECCO V4 R3 Summary</strong></p>
					<div class="indent">
						<p>
							Fukumori, I.<br />
							<a href="ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_summary.pdf" target="_blank" rel="noopener noreferrer">ftp://ecco.jpl.nasa.gov/Version4/Release3/doc/v4r3_summary.pdf</a><br/>
							2017
						</p>
					</div>
				</div>

				<h2>Support</h2>
				<div>
					<p>No FAQs or How-To's available for this product.</p>
					<p>Access complete <a href="">Knowledge Base</a></p>
					<p>Questions? Please contact:</p>
					<div class="indent">
						The ECCO Group at MIT,<br />
						# 54-1420, 77 Massachusetts Avenue,<br/>
						Cambridge, MA 02139
					</div>
					<p>Email: <a href="mailto:ecco-support@mit.edu">ecco-support@mit.edu</a></p>
				</div>

			</div><!-- //.wysiwyg_content -->
			
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../../includes/footer.inc.php'); ?>
</html>
