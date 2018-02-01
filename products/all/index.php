<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Products | All Products ";
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
				<h1 class='article_title'>Products</h1>
			</header>
			<div class='wysiwyg_content'>

				<p>ECCO products listed below are freely available through several types of servers (a direct link is provided below via each product's `Release Name' in the product table). We kindly ask users to refer to the citable identifier associated with the product they choose to use (provided below via the `Release identifier' links). The products are listed below in an order that reflects their time of publication (see `Release identifier'). The following products are currently being extended: ECCO-v4 (JPL/AER/MIT), SOSE (UCSD), ECCO2 (JPL), ECCO-JPL (JPL), and GECCO2 (UH).</p>
				<p>ECCO products are primarily released in the form of monthly field time series. These fields are primarily distributed on their native model grid to allow for accurate transport and budget computations. However fields interpolated to a simple longitude latitude grid may also be provided, which can most easily be plugged into third party software. Some of the products further provide the associated obsevational inputs, which allow users to e.g. assess model-data misfits. Examples of these supplementary data sets are indicated by a '>' under the associated `Release identifier'.</p>
				<p>For comments or questions please concact us via: <a href="mailto:ecco-support@mit.edu">ecco-support@mit.edu</a></p>

				<div>
					<table class="full-width one-quarter-width">
						<thead>
							<th class="text-left">Product</th>
							<th>Release Identifier</th>
							<th>Release Name</th>
							<th>Covered Time Period</th>
							<th>Model Grid</th>
							<th>Depth Levels</th>
							<th>Estimation Method</th>
							<th>Software Generation</th>
							<th>Comments</th>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">VALUE</td>
								<td>VALUE</td>
								<td>VALUE</td>
								<td>VALUE</td>
								<td>VALUE</td>
								<td>VALUE</td>
								<td>VALUE</td>
								<td>VALUE</td>
								<td>VALUE</td>
							</tr>
						</tbody>
					</table>
				</div>

			</div><!-- //.wysiwyg_content -->
			
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../../includes/footer.inc.php'); ?>
</html>
