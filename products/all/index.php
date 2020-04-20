<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | All Products ";
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

				<p>ECCO products listed below are freely available through several types of servers (a direct link is provided below via each product's `Release Name' in the product table). We kindly ask users to refer to the citable identifier associated with the product they choose to use (provided below via the `Release identifier' links). The products are listed below in an order that reflects their time of publication (see `Release identifier'). The following products are currently being extended: ECCO-v4 (JPL/AER/MIT), SOSE (UCSD), ECCO2 (JPL), ECCO-KFS (JPL), and GECCO2 (UH).</p>
				<p>ECCO products are primarily released in the form of monthly field time series. These fields are distributed on their native model grid to allow for accurate transport and budget computations. However fields interpolated to a simple longitude latitude grid may also be provided, which can most easily be plugged into third party software. Some of the products further provide the associated obsevational inputs, which allow users to e.g. assess model-data misfits. Examples of these supplementary data sets are indicated by a '>' under the associated `Release identifier'.</p>
				<p>For comments or questions please concact us via: <a href="mailto:ecco-support@mit.edu">ecco-support@mit.edu</a>.</p>

				<div class="pad-20 no-bottom no-left no-right">
					<table class="full-width one-eighth-width">
						<thead>
							<tr>
								<th class="text-left">Product</th>
								<th>Release Identifier</th>
								<th>Release Name</th>
								<th>Time Period</th>
								<th>Model Grid</th>
								<th>Depth Levels</th>
								<th>Estimation Method</th>
								<th>Software Generation</th>
								<th>Comments</th>
							</tr>
						</thead>
						<tbody>
<!-- Ichiro Fukumori 2019-12-04 -->
							<tr>
								<th class="text-left"><a href="/products/v4r4/">ECCO-V4r4</a></th>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_synopsis.pdf" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/" target="_blank" rel="noopener noreferrer">Release 4</a></td>
								<td>1992-2017</td>
								<td>LLC90</td>
								<td>50</td>
								<td>adjoint</td>
								<td>4</td>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/" target="_blank" rel="noopener noreferrer">Documentation</a></td>
							</tr>
							<tr>
								<th class="text-left" rowspan="2"><a href="/products/V4r3/">ECCO-V4r3</a></th>
								<td><a href="https://dspace.mit.edu/handle/1721.1/110380" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/" target="_blank" rel="noopener noreferrer">Release 3</a></td>
								<td>1992-2015</td>
								<td>LLC90</td>
								<td>50</td>
								<td>adjoint</td>
								<td>4</td>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/" target="_blank" rel="noopener noreferrer">Documentation</a></td>
							</tr>
							<tr>
								<td>&gt;</td>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/interp_monthly/" target="_blank" rel="noopener noreferrer">Interpolated climatology</a></td>
								<td>1992-2015</td>
								<td>1/2 deg.</td>
								<td>50</td>
								<td>-</td>
								<td>-</td>
								<td><a href="http://hdl.handle.net/1721.1/107613" target="_blank" rel="noopener noreferrer">Report</a></td>
							</tr>
							<tr>
								<th class="text-left" rowspan="4">ECCO-V4r2</th>
								<td><a href="http://hdl.handle.net/1721.1/102062" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/" target="_blank" rel="noopener noreferrer">Release 2</a></td>
								<td>1992-2011</td>
								<td>LLC90</td>
								<td>50</td>
								<td>adjoint</td>
								<td>4</td>
								<td><a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/README" target="_blank" rel="noopener noreferrer">README</a>; <a href="http://mitgcm.org/viewvc/*checkout*/MITgcm/MITgcm_contrib/gael/verification/eccov4.pdf" target="_blank" rel="noopener noreferrer">eccov4.pdf</a>
								</td>
							</tr>
							<tr>
								<td>&gt;</td>
								<td><a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/interp_monthly/" target="_blank" rel="noopener noreferrer">interpolated fields</a></td>
								<td>1992-2011</td>
								<td>1/2 deg.</td>
								<td>50</td>
								<td>-</td>
								<td>-</td>
								<td> </td>
							</tr>                  
							<tr>
								<td>&gt;</td>
								<td><a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/nctiles_tendencies/" target="_blank" rel="noopener noreferrer">T-S tendency terms </a></td>
								<td>1992-2011</td>
								<td>LLC90</td>
								<td>50</td>
								<td>-</td>
								<td>-</td>
								<td> </td>
							</tr>                  
							<tr>
								<td>&gt;</td>
								<td><a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/profiles/" target="_blank" rel="noopener noreferrer">in-situ profile data sets</a></td>
								<td>1992-2015</td>
								<td>pointwise</td>
								<td>19 to 55</td>
								<td>-</td>
								<td>-</td>
								<td> </td>
							</tr>                  
							<tr>
								<th class="text-left">ECCO-V4r1</th>
								<td><a href="http://dx.doi.org/10.5194/gmd-8-3071-2015" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="ftp://mit.ecco-group.org/ecco_for_las/version_4/release1/" target="_blank" rel="noopener noreferrer">Release 1</a></td>
								<td>1992-2011</td>
								<td>LLC90</td>
								<td>50</td>
								<td>adjoint</td>
								<td>4</td>
								<td><a href="http://dx.doi.org/10.5194/gmd-8-3071-2015" target="_blank" rel="noopener noreferrer">NL free surface; real FWF </a></td>
							</tr>
							<tr>
								<th class="text-left">GECCO2</th>
								<td><a href="http://dx.doi.org/10.1002/qj.2347" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://icdc.zmaw.de/1/daten/reanalysis-ocean/gecco2.html" target="_blank" rel="noopener noreferrer">Release 1</a></td>
								<td>1948-2014</td>
								<td>0.3 to 1 deg.</td>
								<td>50</td>
								<td>adjoint</td>
								<td>-</td>
								<td> </td>
							</tr>
							<tr>
								<th class="text-left">SOSE</th>
								<td><a href="http://dx.doi.org/10.1175/2009JPO4236.1" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://sose.ucsd.edu/" target="_blank" rel="noopener noreferrer">Iteration 100</a></td>
								<td>2005-2010</td>
								<td>1/6 deg.</td>
								<td>42</td>
								<td>adjoint</td>
								<td>3</td>
								<td>Southern Ocean only</td>
							</tr>
							<tr>
								<th class="text-left">OCCA</th>
								<td><a href="http://dx.doi.org/10.1175/2009JPO4043.1" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td align="center"><div align="center"><a href="ftp://mit.ecco-group.org/ecco_for_las/OCCA_1x1_v2/2004-6/" target="_blank" rel="noopener noreferrer">Version 2</a></div></td>
								<td><div align="center">2004-2006</div></td>
								<td><div align="center">1 deg.</div></td>
								<td align="center"><div align="center">50</div></td>
								<td><div align="center">adjoint</div></td>
								<td>3</td>
								<td><div align="center"><a href="ftp://mit.ecco-group.org/ecco_for_las/OCCA_1x1_v2/2004-6/monthly/" target="_blank" rel="noopener noreferrer">Monthly Atlas</a>; <a href="ftp://mit.ecco-group.org/ecco_for_las/OCCA_1x1_v2/2004-6/daily/" target="_blank" rel="noopener noreferrer">daily fields</a></div></td>
							</tr>
							<tr>
								<th class="text-left" rowspan="3">ECCO-GODAE</th>
								<td><a href="http://dx.doi.org/10.1175/2008JPO4012.1" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=91" target="_blank" rel="noopener noreferrer">Iteration 73</a></td>
								<td>1992-2007</td>
								<td>1 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>3</td>
								<td></td>
							</tr>
							<tr>
								<td>&gt;</td>
								<td align="center"><div align="center"><a href="http://www.ecco-group.org/las/v6/dataset?catitem=138" target="_blank" rel="noopener noreferrer">gridded observations</a></div></td>
								<td><div align="center">1992-2006</div></td>
								<td><div align="center">1 deg.</div></td>
								<td align="center"><div align="center">23</div></td>
								<td><div align="center">-</div></td>
								<td>-</td>
								<td><div align="center"></div></td>
							</tr>
							<tr>
								<td>&gt;</td>
								<td align="center"><div align="center"><a href="http://mit.ecco-group.org/opendap/ecco_for_las/obs/contents.html" target="_blank" rel="noopener noreferrer">in-situ observations</a></div></td>
								<td><div align="center">1992-2006</div></td>
								<td><div align="center">1 deg.</div></td>
								<td align="center"><div align="center">23</div></td>
								<td><div align="center">-</div></td>
								<td>-</td>
								<td><div align="center"></div></td>
							</tr>
							<tr>
								<th class="text-left" >GECCO</th>
								<td><a href="http://dx.doi.org/10.1175/2007JCLI2081.1" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=546" target="_blank" rel="noopener noreferrer">Iteration 23</a></td>
								<td>1950-2000</td>
								<td>1 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>-</td>
								<td>no sea-ice</td>
							</tr>
							<tr>
								<th class="text-left" rowspan="3">ECCO-GODAE</th>
								<td><a href="http://dx.doi.org/10.1175/JPO2957.1" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=333" target="_blank" rel="noopener noreferrer">Iteration 177</a></td>
								<td>1992-2004</td>
								<td>1 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>2</td>
								<td>no sea-ice</td>
							</tr>
							<tr>
								<td>&gt;</td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=196" target="_blank" rel="noopener noreferrer">Iteration 199</a></td>
								<td>1992-2004</td>
								<td>1 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>2</td>
								<td>no sea-ice</td>
							</tr>
							<tr>
								<td>&gt;</td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=459" target="_blank" rel="noopener noreferrer">Iteration 216</a></td>
								<td>1992-2004</td>
								<td>1 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>2</td>
								<td>no sea-ice</td>
							</tr>
							<tr>
								<th class="text-left">ECCO-SIO</th>
								<td><a href="http://dx.doi.org/10.1175/JPO3014.1" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=38" target="_blank" rel="noopener noreferrer">Iteration 69</a></td>
								<td>1992-2002</td>
								<td>1 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>1</td>
								<td>no sea-ice</td>
							</tr>
							<tr>
								<th class="text-left">ECCO2</th>
								<td><a href="http://dx.doi.org/10.1029/2005EO090002" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/ECCO2/cube92_latlon_quart_90S90N/" target="_blank" rel="noopener noreferrer">Cube 92</a></td>
								<td>1992-present</td>
								<td> CS510 </td>
								<td>50</td>
								<td>Green functions</td>
								<td>-</td>
								<td> Near real time</td>
							</tr>
							<tr>
								<th class="text-left">ECCO-SIO</th>
								<td><a href="http://dx.doi.org/10.1029/2001JC001115" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=14" target="_blank" rel="noopener noreferrer">Iteration 21</a></td>
								<td>1992-2000</td>
								<td>2 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>0</td>
								<td>no sea-ice</td>
							</tr>
							<tr>
								<th class="text-left">ECCO-SIO</th>
								<td><a href="http://dx.doi.org/10.1029/2001JC000888" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="http://www.ecco-group.org/las/v6/dataset?catitem=2" target="_blank" rel="noopener noreferrer">Iteration 107</a></td>
								<td>1992-1997</td>
								<td>2 deg.</td>
								<td>23</td>
								<td>adjoint</td>
								<td>0</td>
								<td>no sea-ice</td>
							</tr>
							<tr>
                                                                <th class="text-left"><a href="/ecco-jpl/">ECCO-KFS</a></th>
								<td><a href="http://dx.doi.org/10.1175/1520-0493(2002)130<1370:APKFAS>2.0.CO;2" target="_blank" rel="noopener noreferrer">I.D.</a></td>
								<td><a href="https://ecco.jpl.nasa.gov/drive/files/NearRealTime/" target="_blank" rel="noopener noreferrer">Run 80h</a></td>
								<td>1993-present</td>
								<td>0.3 to 1 deg. </td>
								<td>46</td>
								<td>Kalman filter, RTS smoother</td>
								<td>-</td>
								<td>Near real time; no sea-ice</td>
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
