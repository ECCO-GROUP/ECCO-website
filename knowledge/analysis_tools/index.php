<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Analysis Tools";
	$page_id = 'analysis_tools';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	$ogImage = "https://via.placeholder.com/1280x720";

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page'>
		<section class="module">
			<div class='grid_layout'>
				<h1 class='article_title'>Analysis Tools</h1>
			</div><!-- //.grid_layout -->
		</section><!-- //section -->



		<!-- Ian Fenty 2018/12/03 Analysis Tools -->
		<section class="gray-bg2 margin-20 no-left no-right">
			<div class='grid_layout'>
				<div class='grid'>
					<div class="grid-cell flexit">
						<h1><strong>ECCO Version 4 Python Tutorial and Python Package</strong></h2>
						<p>
						To support user analysis of the ECCO Central Production Version 4 (ECCO v4) state estimate, we have developed the ECCO Version 4 tutorial.  These tutorials are written in Python and make use of the <a href="https://pypi.org/project/ecco_v4_py/">ecco_v4_py</a> Python library.  The <strong>ecco_v4_py</strong> library was written specifically for loading, plotting, and analyzing ECCO v4 state estimate output provided on the <strong>native model grid</strong>.
						<br><br>
						All of the tutorials are available as Python code, both as standard Python files as as Python Jupyter Notebooks.  Consequently, every tutorial can be reproduced on your own machine. You’ll only need to edit the tutorials so that they know the correct location of the ECCO v4 state estimate output files on your disk.
						<br><br>
						<a href="https://ecco-v4-python-tutorial.readthedocs.io/index.html">ECCO Version 4 Tutorial</a>
						<br><br>						
						<a href=https://github.com/ECCO-GROUP/ECCO-v4-Python-Tutorial/tree/master/Tutorials_as_Jupyter_Notebooks>Tutorials as Jupyter Notebooks</a>
						<br><br>
						<a href=https://github.com/ECCO-GROUP/ECCO-v4-Python-Tutorial/tree/master/Tutorials_as_Python_Files>Tutorials as Python Files</a>
						</p>
						</div>
					<div class="grid-cell grid--1of3 wysiwyg_content">
						<p><img src="/assets/images/knowledge/analysis_tools/eccov4py.png" alt=""></p>
					</div>
				</div>
			</div><!-- //.grid_layout -->
		</section> <!-- //section -->

		<section class="gray-bg2 margin-20 no-left no-right">
			<div class='grid_layout'>
				<div class='grid'>
					<div class="grid-cell flexit">
						<h1><strong>gcmfaces</strong></h1>
						<p>
						<strong>gcmfaces</strong> is toolbox to handle gridded Earth variables as sets of connected arrays. Compatible with both Matlab and Octave, the object-oriented approach of gcmfaces allows users to write generic, compact analysis codes that readily become applicable to a wide variety of grids (including the lat-lon-cap used in ECCO version 4).  gcmfaces notably allows for analysis of MITgcm output on any of its familiar grids. It was originally developed as part the ECCO version 4 framework along with the companion MITprof toolbox that handles unevenly distributed in-situ ocean observations 
						<br><br>
						<a href="https://gcmfaces.readthedocs.io/en/latest/index.html">gcmfaces documentation</a> 
						<br><br>
						<a href="https://github.com/gaelforget/gcmfaces">gcmfaces github</a>
						</p>
						</div>
					<div class="grid-cell grid--1of3 wysiwyg_content">
						<p><img src="/assets/images/knowledge/analysis_tools/gcmfaces.png"></p>
					</div>
				</div>
			</div><!-- //.grid_layout -->
		</section> <!-- //section -->




		<section class="gray-bg2 margin-20 no-left no-right">
			<div class='grid_layout'>
				<div class='grid'>
					<div class="grid-cell flexit">
						<h1><strong>xmitgcm</strong></h1>
						<p>
						<strong>xmitgcm</strong> is a Python package for reading MITgcm binary MDS files into xarray data structures. By storing data in dask arrays, xmitgcm enables parallel, out-of-core analysis of MITgcm output data.
						<br><br>
						<a href="https://xmitgcm.readthedocs.io/en/latest/index.html">xmitgcm documentation</a> 
						<br><br>
						<a href="https://github.com/xgcm/xmitgcm">xmitgcm github</a>
						</p>
						</div>
					<div class="grid-cell grid--1of3 wysiwyg_content">
						<p><img src="https://avatars0.githubusercontent.com/u/14025832?s=400&v=4"></p>
					</div>
				</div>
			</div><!-- //.grid_layout -->
		</section> <!-- //section -->



		<section class="module"></section><!-- //section -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
