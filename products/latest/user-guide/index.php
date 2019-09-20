<?php
	/* define page vars */
	$include_path = '../../../';
	$page_title = "ECCO | Products | Latest Product User Guide";
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
				<h1 class='article_title'>User Guide</h1>
				Products » <a href="../">Latest Product</a>
			</header>
			<div class='wysiwyg_content'>

				<h2>ECCO-V4r3</h2>				

				<div>
					<p>This <a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/">directory</a> contains the 'ECCO version 4, release 3' documentation files:</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Name</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>README</td>
								<td>File containing information</td>
							</tr>
							<tr>
								<td>v4r3_estimation_synopsis.pdf</td>
								<td>Synopsis of V4r3 estimation</td>
							</tr>
							<tr>
								<td>v4r3_output_fields.pdf</td>
								<td>Overview of V4r3 files</td>
							</tr>
							<tr>
								<td>v4r3_overview_plots.pdf</td>
								<td>Plots of V4r3</td>
							</tr>
							<tr>
								<td>v4r3_input_data.pdf</td>
								<td>Data used in V4r3</td>
							</tr>
							<tr>
								<td>v4r3_budgets_howto.pdf</td>
								<td>Calculating budgets with V4r3 output</td>
							</tr>
							<tr>
								<td>v4r3_reproduction_howto.pdf</td>
								<td>Reproducing V4r3 results with MITgcm</td>
							</tr>
							<tr>
								<td>available_diagnostics.log</td>
								<td> A full list of available diagnostics with a short description.For a slightly more detailed description of diagnostics, check out <a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/nctiles_monthly/README">https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/nctiles_monthly/README</a>.
 </td>
							</tr>
							<tr>
								<td>costfunction0059</td>
								<td>costs with the grid size factor (gamma, Cf. v4r3_summary.pdf for an explanation of gamma)</td>
							</tr>
							<tr>
								<td>costfunction0059_nogamma</td>
								<td>costs without the grid size factor (gamma)</td>
							</tr>
							<tr>
								<td>STDOUT.0000</td>
								<td>Model standard output</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h3>1. Introduction</h3>
				<p>This note describes the directory structure and content of ECCO Version 4, Release 3's (v4r3) repository https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/. Covering the time period from 1992 through 2015, ECCO v4r3 synthesizes a general circulation model (MITgcm) and most of available satellite and in situ data to produce a physically consistent ocean estimate of which property budgets can be closed. The data that are used to constrain the model include satellite altimetry (sea surface height, SSH), GRACE ocean bottom pressure (OBP), AVHRR sea surface temperature (SST), Aquarius sea surface salinity (SSS), Argo, CTD, XBT, mooring temperature and salinity data, sea-ice measurements, and global mean SSH and OBP. The estimate uses the adjoint method to iteratively minimize a cost function that is defined as the sum of the squared sum of weighted model-data misfits and control adjustments. ECCO v4r3 is the final product after a series of iterations. A detailed summary of the estimate can be found in Fukumori et al. (2017).</p>

				<h3>2. Model</h3>
				<p>The model that is used to produce v4r3 is MITgcm version checkpoint66g. Wang (2017) gives a detailed description about how to download the code, data, and any needed auxiliary files to reproduce v4r3.</p>
				<p>The grid used in v4r3 is the so-called LLC90 (Lat-Lon-Cap 90) grid (Fig. 1a) that has five faces covering the whole globe, with simple latitude-longitude grid between 70°S and 57°N and an Arctic cap (Forget et al., 2015). The dimensions for the five faces are [90x270], [90x270], [90x90], [270x90], and [270x90] where each face consists of tiles dimensioned 90x90 (thus LLC90) (Figs. 1a & 1b). The horizontal resolution varies spatially from 22km to 110m, with the highest resolution in high latitudes and lowest resolution in mid latitudes. The deepest ocean bottom is set to 6145m below the surface, with the vertical grid spacing increasing from 10m near the surface to 457m near the ocean bottom.</p>

				<h3>3. Directory Structure</h3>
				<p>In this section, we describe the directory structure of v4r3's repository https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/. Each subdirectory has a short README file that lists all the sub-directories and files in that directory along with a brief description. The directory structure is similar to that of Release 2's (Forget et al., 2016).</p>

				<h4>3.1 Documentation</h4>
				<p>The directory doc contains a few useful documents that include an overview of the repository (v4r3_overview.pdf, this document), a summary of v4r3 (v4r3_summary.pdf, Fukumori et al., 2017), a note about how to reproduce v4r3 results (ECCOv4r3_reproduction.pdf, Wang, 2017), a set of analysis plots (v4r3_depiction.pdf) generated using gcmfaces (see Software below), and a note on analyzing budgets (evaluating_budgets_in_eccov4r3.pdf, Piecuch, 2017). Also included are summary files of all cost functions (costfunction*) and a “standard output file” (STDOUT.0000) that the model creates during its integration with useful information about the model configuration and measures of the model state.</p>
				<div class="grid">
					<div class="grid-cell text-center">
						<img class="no-stretch" src="./images/u367.png" alt="Figure 1. a) V4r3's lat-lon-cap (llc) grid with five faces; b) The dimensions of the five faces. The figures are modified from Forget et al. (2015).">
						<p class="jpl-cool-gray-11"><small><i>Figure 1. a) V4r3's lat-lon-cap (llc) grid with five faces; b) The dimensions of the five faces. The figures are modified from Forget et al. (2015).</i></small></p>
					</div>
				</div>

				<h4>3.2 Model Grid</h4>
				<p>The model grid information can be found in the subdirectory nctiles_grid. The globe is split into 13 regional tiles (Fig. 2, courtesy of Gaël Forget), with variables of which are saved in separate individual files in netCDF format. In Section Software, we provide an example MATLAB script to read in the model grid by making use of gcmfaces, a MATLAB toolbox developed by Gaël Forget from Massachusetts Institute of Technology (MIT) (Forget, 2017).</p>

				<h4>3.3 Monthly Average Model fields</h4>
				<p>The nominal model output is its monthly fields (nctiles_monthly). Each subdirectory inside nctiles_monthly contains netCDF files for a particular variable, as indicated by the name of the subdirectory, split into 13 files as described above. Some of the most commonly used fields, like velocity components, potential temperature, salinity, SSH, and OBP are UVEL, VVEL, THETA, SALT, SSH, and OBP, respectively. An example of MATLAB script is provided in Section Software to read and display these netCDF files (Box 2).</p>
				<div class="grid">
					<div class="grid-cell text-center">
						<img class="no-stretch" src="./images/u368.png" alt="Figure 2 The partitioning of the globe into 13 regional tiles.">
						<p class="jpl-cool-gray-11"><small><i>Figure 2 The partitioning of the globe into 13 regional tiles.</i></small></p>
					</div>
				</div>

				<h4>3.3.1 Corrected Sea Level and Ocean Bottom Pressure</h4>
				<p>There are two variables, ETAN and SSH, describing sea surface height. ETAN is the height of the model’s liquid ocean surface, whereas SSH is the dynamic sea surface height plus global mean steric sea level change. ETAN is located below sea-ice where it exists, due to pressure loading from the ice and snow on top. SSH corrects ETAN for this loading (dynamic sea surface height) and further adds a correction for the global mean steric height change, the so-called Greatbatch correction (Griffies and Greatbatch, 2012). Both variables reflect mass changes caused by freshwater input.  As such, variable SSH provides the model equivalent of altimetry sea level measurements.</p>
				<p>Similarly, there are two variables, PHIBOT and OBP, for ocean bottom pressure. PHIBOT represents the model’s ocean bottom pressure (including sea-ice loading), while OBP corrects PHIBOT for global mean steric height change. Variable OBP provides the model equivalent of GRACE OBP.</p>

				<h4>3.3.2 Native and Geographical Velocity Components</h4>
				<p>Users are advised to be aware of the directional convention used in the model especially when analyzing the vector fields of the model. Figure 1b illustrates the directional convention used in the LLC grid. Within each face (tile), the x- and y-directions point left-to-right and bottom-to-top in the figure, respectively. As such, in faces 4 and 5, the x- and y-directions point to the south and to the east, respectively. In face 3, the x-direction points to the Pacific Ocean away from the Atlantic, whereas y-direction points to North America away from Asia. For user convenience, conventional eastward and northward velocity components (EVEL and NVEL) are provided as diagnostic output, in addition to that  in the model’s native direction (UVEL and VVEL). (See Table 1.)</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 1. Native and geographical velocity components.</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Filename</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>UVEL</td>
								<td>X-component of velocity (m/s)</td>
							</tr>
							<tr>
								<td>VVEL</td>
								<td>Y-component of velocity (m/s)</td>
							</tr>
							<tr>
								<td>EVEL</td>
								<td>Zonal component of velocity (m/s). Positive is eastward.</td>
							</tr>
							<tr>
								<td>NVEL</td>
								<td>Meridional component of velocity (m/s). Positive is northward.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>3.3.3 Advective and Diffusive Fluxes</h4>
				<p>The files with their names starting with “ADV” and “DF” indicate advective and diffusive fluxes, respectively.  Similar to velocity, the horizontal components of the native fluxes also follow the model’s directional convention. For instance, DFxE_TH means diffusive flux (“DF”), in the model’s x-direction (“x”), evaluated explicitly (“E”) for potential temperature (“TH”). Table 2 lists all the flux terms for potential temperature. See Piecuch (2017) for how to make use of the flux terms along with forcing terms to close budgets.</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 2. Advective and diffusive flux terms for potential temperature.</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Filename</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>ADVx_TH</td>
								<td>X-component (“x”) of ADVective flux of potential temperature (“TH”) (C m3/s) at a particular grid (i,j,k). Positive to increase temperature at (i,j,k)</td>
							</tr>
							<tr>
								<td>ADVy_TH</td>
								<td>Y-component (“y”) of ADVective flux of potential temperature (C m3/s)</td>
							</tr>
							<tr>
								<td>ADVr_TH</td>
								<td>Z-component (“r”) of ADVective flux of potential temperature (C m3/s).</td>
							</tr>
							<tr>
								<td>DFxE_TH</td>
								<td>X-component of DiFfusive flux of potential temperature (C m3/s). Explicit part (“E”).</td>
							</tr>
							<tr>
								<td>DFyE_TH</td>
								<td>Y-component of DiFfusive flux of potential temperature (C m3/s). Explicit part.</td>
							</tr>
							<tr>
								<td>DFrE_TH</td>
								<td>Z-component of DiFfusive flux of potential temperature (C m3/s). Explicit part.</td>
							</tr>
							<tr>
								<td>DFrI_TH</td>
								<td>Z-component of DiFfusive flux of potential temperature (C m3/s). Implicit part (“I”).</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>3.4 Instantaneous Monthly Model Fields</h4>
				<p>Besides monthly averages, v4r3 also provides monthly snapshots in the subdirectory nctiles_monthly_snapshots for THETA, SALT, and ETAN. The main purpose of these snapshots is to facilitate budget calculations (see Section Budget Calculation); specifically, monthly mean fluxes that are provided equal changes between these snapshots (as opposed to changes between monthly average states of Section 3.3).</p>

				<h4>3.5 Daily Averages</h4>
				<p>Daily averages are also provided for select variables in directory nctiles_daily (Table 3) to facilitate studies of the ocean’s high-frequency variations.</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 3. Daily averages of model output.</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Directory Name</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>SSH</td>
								<td>Sea surface height (m) that has been corrected for sea-ice load and global steric height change (Greatbatch correction).</td>
							</tr>
							<tr>
								<td>OBP</td>
								<td>Ocean bottom pressure (m) that has been corrected for global steric height change.</td>
							</tr>
							<tr>
								<td>SST</td>
								<td>Sea surface temperature (°C).</td>
							</tr>
							<tr>
								<td>SSS</td>
								<td>Sea surface salinity (psu).</td>
							</tr>
							<tr>
								<td>SIarea</td>
								<td>Fractional sea-ice covered area (m2/m2)</td>
							</tr>
							<tr>
								<td>SIhell</td>
								<td>Effective sea-ice thickness (m) that is defined as actual sea-ice thickness scaled by fractional sea-ice area (SIarea).</td>
							</tr>
							<tr>
								<td>SIhsnow</td>
								<td>Effective snow thickness (m).</td>
							</tr>
							<tr>
								<td>sIceLoad</td>
								<td>Sea-ice and snow loading defined as mass of sea-ice & snow over area (kg/m2).</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>3.6 Data Used to Constrain the Model</h4>
				<p>The subdirectory input_ecco includes the data used to constrain the model (Table 4). Most of the files are in binary format on the model grid. Each 2-d field is of size 90x1170. A sample MATLAB script that reads and displays a 2-d binary field on the model grid is presented in Section Software (Box 1).</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 4. The data used in v4r3 to constrain the model</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Directory Name</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>input_sla</td>
								<td>Daily RADS altimetry SSH data (m).</td>
							</tr>
							<tr>
								<td>input_bp</td>
								<td>Monthly GRACE ocean bottom pressure (OBP) from JPL RL05 mascon solutions (cm).</td>
							</tr>
							<tr>
								<td>input_insitu</td>
								<td>In situ profile data.</td>
							</tr>
							<tr>
								<td>input_sst</td>
								<td>Reynolds daily SST (°C).</td>
							</tr>
							<tr>
								<td>input_sss</td>
								<td>Aquarius monthly SSS (psu).</td>
							</tr>
							<tr>
								<td>input_nsidc</td>
								<td>Daily sea-ice concentration from NSDIC (unitless).</td>
							</tr>
							<tr>
								<td>input_other</td>
								<td>Climatology TS from WOA’09, mean dynamic topography (MDT13) from DTU Space, global mean SSH & OBP etc. See README there.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>3.7 Model Equivalent of In-situ Data</h4>
				<p>The model equivalents of the in situ data in netCDF format are in profiles. The model fields are sampled on the fly at the time and location of the in situ data to generate the model equivalents. For each in situ file in input_ecco/input_insitu, there is a corresponding file of the model equivalent in profiles.</p>

				<h4>3.8 Interpolated Monthly Fields</h4>
				<p>Since v4 grid is not a regular lat-lon grid, we have also provided interpolated monthly averages on a regular 0.5° by 0.5° grid in interp_monthly for user convenience. However, note that the interpolated fields should not be used for budget calculations, as the interpolation does not preserve integrated quantities. The fields on the native v4 grid should be used instead. The interpolated files are in netCDF format, with one file for one particular variable.</p>

				<h4>3.9 Atmospheric Forcing</h4>
				<p>The atmospheric forcings are in the subdirectory input_forcing. The directory contains binary yearly files of 6-hourly forcing on v4 grid (Table 5). All forcings except for wind speed (eccov4r3_wspeed_YYYY) are the sum of ERA-Interim forcing and the corresponding control adjustment that has been estimated. Wind speed is not a control variable and is only ERA-Interim wind speed interpolated onto the v4 grid.</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 5. Atmospheric forcing on v4 grid.</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Filename (replace YYYY with year)</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>eccov4r4_dlw_YYYY</td>
								<td>Yearly files for 6-hourly downward longwave (W/m2) in binary. Positive to decrease ocean temperature.</td>
							</tr>
							<tr>
								<td>eccov4r3_dsw_YYYY</td>
								<td>Downward shortwave (W/m2). Positive to decrease ocean temperature.</td>
							</tr>
							<tr>
								<td>eccov4r4_rain_YYYY</td>
								<td>Precipitation (m/s). Positive to increase sea level.</td>
							</tr>
							<tr>
								<td>eccov4r3_spfh2m_YYYY</td>
								<td>Specific humidity at 2m above the sea surface.</td>
							</tr>
							<tr>
								<td>eccov4r3_tmp2m_YYYY</td>
								<td>Air temperature at 2m above the sea surface.</td>
							</tr>
							<tr>
								<td>eccov4r3_ustr_YYYY</td>
								<td>East-West component of wind stress (N/m2). Positive from east to west.</td>
							</tr>
							<tr>
								<td>eccov4r3_vstr_YYYY</td>
								<td>North-South component of wind stress ((N/m2). Positive from north to south.</td>
							</tr>
							<tr>
								<td>eccov4r3_wspeed_YYYY</td>
								<td>Wind speed at 10m above ocean surface (m/s).</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>3.10 Input Files</h4>
				<p>The subdirectory input_init includes other files that are needed to reproduce v4r3 (Table 6).</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 6. Input files are needed to reproduce v4r3.</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Directory or file name</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>NAMELIST</td>
								<td>Namelist such as file “data”, “data.ctrl”, etc.</td>
							</tr>
							<tr>
								<td>error_weight</td>
								<td>Data error (data_error) and control weight (ctrl_weight).</td>
							</tr>
							<tr>
								<td>bathy_eccollc_90x50_min2pts.bin</td>
								<td>Bathymetry (m).</td>
							</tr>
							<tr>
								<td>pickup* files</td>
								<td>Initial condition.</td>
							</tr>
							<tr>
								<td>xx* files</td>
								<td>Control adjustments on v4 grid.</td>
							</tr>
							<tr>
								<td>total_diffkr*, total_kap*</td>
								<td>Mixing coefficients.</td>
							</tr>
							<tr>
								<td>tile* files</td>
								<td>Grid files needed to run the model.</td>
							</tr>
							<tr>
								<td>smooth* files</td>
								<td>Smoothing operator related files.</td>
							</tr>
							<tr>
								<td>fenty_biharmonic_visc_v11.bin</td>
								<td>Bi-harmonic coefficients (m4/s).</td>
							</tr>
							<tr>
								<td>runoff-2d-Fekete-1deg-mon-V4-SMOOTH.bin</td>
								<td>Climatology river runoff (m/s). Positive to increase sea level.</td>
							</tr>
							<tr>
								<td>geothermalFlux.bin</td>
								<td>Time-invariant geothermal flux (W/m2). Positive to increase ocean temperature.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>3.11 Other Fields</h4>
				<p>V4r3 has some auxiliary fields in the subdirectory other (Table 7). These files include the binary yearly files of 6-hourly unadjusted atmospheric forcing (interpolated ERA-interim forcings on v4 grid). By taking the difference between the total atmospheric forcing and the unadjusted forcing one could obtain the dimensional atmospheric control adjustments. File “SBO_global.nc” contains hourly core products for Earth rotation of the International Earth Rotation and Reference Systems Service (IERS), including contributions of ocean mass, oceanic angular momentum, and the ocean’s center-of-mass.</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 7. Other fields</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Directory or file name</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>input_forcing_unadjusted</td>
								<td>Unadjusted atmospheric forcings on v4 grid.</td>
							</tr>
							<tr>
								<td>adjustments</td>
								<td>Dimensional control adjustments for control variables other than atmospheric control variables.</td>
							</tr>
							<tr>
								<td>SBO_global.nc</td>
								<td>IERS Special Bureau for the Oceans (SBO) core products for Earth rotation.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h3>4. Budget Calculation</h3>
				<p>Monthly mean fluxes are provided in directory nctiles_monthly. Piecuch (2017) provides a practical note on how to analyze budgets using these fields, describing the calculation both in pseudo code and in MATLAB (gcmfaces library; see Software below).</p>

				<h3>5. Software</h3>
				<p>Gaël Forget from MIT has created a MATLAB toolbox called gcmfaces to facilitate analysis of gridded earth variables on different grids, including the llc grid used in v4r3. The user guide of gcmfaces at http://wwwcvs.mitgcm.org/viewvc/MITgcm/</p>
				<p>MITgcm_contrib/gael/matlab_class/gcmfaces.pdf?view=co provides a detailed description about the installation and features of gcmfaces and a companion MATLAB toolbox called MITprof to process and analyze in situ profile data. The gcmfaces toolbox includes a tutorial script called gcmfaces_demo.m that illustrates how to make use of gcmfaces.</p>
				<p>Assume that one has downloaded v4r3 products and successfully installed gcmfaces and all necessary data files according to Section 1 of the gcmfaces’ user guide. Provided below are a couple of sample MATLAB scripts in the context of gcmfaces to read and display the binary and netCDF files of v4r3. </p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Box 1. Read and display v4r3 binary files.</p>
					<div class="border pad-20">
						%Add paths<br />
						p = genpath('gcmfaces/'); addpath(p);<br />
						p = genpath('m_map/'); addpath(p);<br />
						<br />
						%Load the grid.<br />
						grid_load;<br />
						<br />
						% Define global variables<br />
						gcmfaces_global;<br />
						<br />
						%Type in the path of the grid directory of v4r3 that one has downloaded from<br />
						% https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/nctiles_grid/<br />
						% e.g. ‘/mydir/v4r3/nctiles_grid/’;<br />
						<br />
						%Read in binary files<br />
						%To read in and display the 15th 6-hourly record of the E-W wind stress for year 1992<br />
						%Read in data<br />
						dirv4r3 = '/mydir/v4r3/';<br />
						ff= [dirv4r3 'input_forcing/' 'eccov4r3_ustr_1992'];<br />
						fld = read_bin(ff,15,0); %read in the 15th 2-D record<br />
						<br />
						%Display<br />
						figure;<br />
						[X,Y,FLD]=convert2pcol(mygrid.XC,mygrid.YC,fld); pcolor(X,Y,FLD);<br />
						if ~isempty(find(X>359)); axis([0 360 -90 90]); else; axis([-180 180 -90 90]); end;<br />
						dd1 = 1;<br />
						cc=[-1:0.1:1]*dd1; % color bar set to -1 to 1 N/m2<br />
						shading flat; cb=gcmfaces_cmap_cbar(cc);<br />
						%Add labels and title<br />
						xlabel('longitude'); ylabel('latitude');<br />
						title('display using convert2pcol');<br />
					</div>
				</div>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Box 2. Read  the 13 regional netCDF files.</p>
					<div class="border pad-20">
						%netCDF files<br />
						%Similarly, if one is to read in the 3rd monthly record of the monthly ETAN (netCDF format)<br />
						<br />
						dirv4r3 = '/mydir/v4r3/';<br />
						fileName= [dirv4r3 '/nctiles_monthly/ETAN/' 'ETAN'];<br />
						fldName='ETAN';<br />
						fld=read_nctiles(fileName,fldName,3); %Read in the 3rd monthly record of ETAN<br />
					</div>
				</div>

			</div><!-- //.wysiwyg_content -->
			
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../../includes/footer.inc.php'); ?>
</html>
