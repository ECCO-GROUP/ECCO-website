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
				Products » <a href="/products/latest/">Latest Product</a>
			</header>
			<div class='wysiwyg_content'>

				<h2>ECCO-V4r4</h2>				

				<div>
					<p>This <a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc">directory</a> contains the 'ECCO version 4, release 4' documentation files:</p>
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
								<td>v4r4_synopsis.pdf</td>
								<td>Synopsis of V4r4 estimation</td>
							</tr>
							<tr>
								<td>v4r4_overview.pdf</td>
								<td>Overview of V4r4 files</td>
							</tr>
							<tr>
								<td>v4r4_overview_plots.pdf</td>
								<td>Plots of V4r4</td>
							</tr>
							<tr>
								<td>v4r4_reproduction_howto.pdff</td>
								<td>Reproducing V4r4 results with MITgcm</td>
							</tr>
							<tr>
								<td>available_diagnostics.log</td>
								<td> A full list of available diagnostics with a short description. For a slightly more detailed description of diagnostics, check out <a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/nctiles_monthly/README">https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/nctiles_monthly/README</a>.
 </td>
							</tr>
							<tr>
								<td>costfunction0059</td>
								<td>costs with the grid size factor (gamma, Cf. <a href="https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_summary.pdf">v4r3_summary.pdf</a> [Section 4.3] for an explanation of gamma)</td>
							</tr>
							<tr>
								<td>STDOUT.0000</td>
								<td>Model standard output</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h3>1. Introduction</h3>
				<p>This note describes the directory structure and content of ECCO Version 4, Release 4’s (v4r4) data server https://ecco.jpl.nasa.gov/drive/files. Covering the time period from 1992 through 2017, ECCO v4r4 synthesizes a general circulation model (MITgcm) and most of available satellite and in situ data to produce a physically consistent ocean estimate of which property budgets can be closed. The data that are used to constrain the model include satellite altimetry (sea surface height, SSH), GRACE ocean bottom pressure (OBP), AVHRR sea surface temperature (SST), Aquarius sea surface salinity (SSS), Argo, CTD, XBT, ITP, APB, Glider, TAO mooring temperature and salinity data, sea-ice measurements, and global mean SSH and OBP. The estimate uses the adjoint method to iteratively minimize the squared sum of weighted model-data misfits and control adjustments. A more detailed summary of the estimate can be found in Fukumori et al. (2019).</p>

				<p>This document is an update of the overview document of ECCO Version 4, Release 3’s (v4r3) (Wang et al., 2017). A few updates are as follows. In Section 3, the document describes the new data server, ECCO Drive, that has replaced the anonymous ftp server used for v4r3. Fields that are not presented in v4r3, as a result of the atmospheric pressure forcing introduced in v4r4, are discussed in Section 4.4.1. V4r4 has a complete set of daily mean and instantaneous fields, as opposed to v4r3's handful daily fields, which are described in Section 4.6. Finally, we describe a flux-forced configuration of v4r4 that is included as part of the product (Section 6).</p>

				<h3>2. Model</h3>
				<p>The model that is used to produce v4r4 is MITgcm version checkpoint66g. Wang (2019) gives a detailed description about how to download the code, data, and any needed auxiliary files to reproduce v4r4.</p>
				<p>The grid used in v4r4 is the so-called LLC90 (Lat-Lon-Cap 90) grid (Fig. 1a) that has five faces covering the whole globe, with simple latitude-longitude grid between 70°S and 57°N and an Arctic cap (Forget et al., 2015). The dimensions for the five faces are [90x270], [90x270], [90x90], [270x90], and [270x90] where each face consists of tiles dimensioned 90x90 (thus LLC90) (Figs. 1a & 1b). The horizontal resolution varies spatially from 22km to 110km, with the highest resolution in high latitudes and lowest resolution in mid latitudes. The deepest ocean bottom is set to 6145m below the surface, with the vertical grid spacing increasing from 10m near the surface to 457m near the ocean bottom.</p>

				<h3>3. Data Server</h3>
				<p>The ECCO data server https://ecco.jpl.nasa.gov/drive/files is a Web Distributed Authoring and Versioning (WebDAV) server, called ECCO Drive. In order to access the ECCO products, ECCO Drive requires each user first register for a NASA Earthdata account at https://urs.earthdata.nasa.gov/users/new. ECCO Drive offers a familiar http-like interface for users to browse and download data through their browser. More importantly, it allows scripted data extracting via a command line interface, e.g. using wget to download the data. Users can also mount ECCO Drive as a network disk. The help page https://ecco.jpl.nasa.gov/drive/help lists various methods accessing the products. Users can also find more details about various options to download the files on the ECCO v4r4's webpage at https://ecco.jpl.nasa.gov/products/v4r4/.</p>
				<p>ECCO Drive automatically assigns each user a WebDAV password that one could find in https://ecco.jpl.nasa.gov/drive/ (middle box). The WebDAV password is different from the password for one’s Earthdata account. Users need to enter the WebDAV password, not the Earthdata account password, to use wget or mount ECCO Drive to their local machines.</p>
				<p>A sample wget command to download v4r4’s monthly potential temperature fields on the native grid is as follows:</p>
				<p><strong>wget -r --no-parent --user YOUREARTHDATAUSERNAME --ask-password https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/nctiles_monthly/THETA</strong></p>
				<p><strong><i>When prompted for password, you need to enter your ECCO Drive's WebDAV password, not your Earthdata account's password. </i></strong></p>
				<p>Due to NASA's mandate to disallow the use of the ftp protocol for data access, , the ECCO anomalous ftp server https://ecco.jpl.nasa.gov/drive/files is no longer available.</p>
				<p></p>
				<h3>4. Directory Structure</h3>
				<p>In this section, we describe the directory structure of v4r4 in https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/. Each subdirectory has a short README file that lists all the sub-directories and files in that directory along with a brief description. The directory structure is similar to that of Release 3’s (Wang et al., 2017).</p>

				<h4>4.1 Documentation</h4>
				<p>The directory doc contains a few useful documents that include an overview of v4r4’s directory and file structures (v4r4_overview.pdf, this document), a summary of v4r4 (v4r4_synopsis.pdf, Fukumori et al., 2019), a note about how to reproduce v4r4 results (v4r4_reproduction_howto.pdf Wang, 2019), a set of analysis plots (v4r4_overview_plots.pdf) generated using gcmfaces (see Software below), and a note on analyzing budgets (evaluating_budgets_in_eccov4r3.pdf, Piecuch, 2017). Also included are summary files of all cost functions (costfunction*) and a “standard output file” (STDOUT.0000) that the model creates during its integration with information about the model configuration and useful measures of the model state.</p>
				<div class="grid">
					<div class="grid-cell text-center">
						<img class="no-stretch" src="./images/u367.png" alt="Figure 1. a) ECCO Version 4's lat-lon-cap (llc) grid with five faces; b) The dimensions of the five faces. The figures are modified from Forget et al. (2015).">
						<p class="jpl-cool-gray-11"><small><i>Figure 1. a) ECCO Version 4's lat-lon-cap (llc) grid with five faces; b) The dimensions of the five faces. The figures are modified from Forget et al. (2015).</i></small></p>
					</div>
				</div>

				<h4>4.2 Model Grid</h4>
				<p>The model grid information can be found in the subdirectory nctiles_grid. The globe is split into 13 regional tiles (Fig. 2, courtesy of Gaël Forget), with variables of which are saved in 13 separate individual files in netCDF format (ECCO-GRID_00.nc to ECCO-GRID_00.nc). Also provided is a single netCDF file of the grid information in ECCO-GRID.nc. These netCDF files can be read by using various netCDF tools from different programming languages and platforms, such as Python, MATLAB, FORTRAN. Two useful toolboxes, ECCOv4-py and gcmfaces that use Python and MATLAB respectively, have been developed to facilitate the processing ECCO files. See more details in Section Software.</p>
				<h4>4.3 Introduction to Fields</h4>
				<p>V4r4 provides the model state and forcing on either model native grid or regular 0.5o by 0.5o lat-lon grid. Complete daily and monthly fields are provided, including averages and instantaneous fields that would allow one to close property budgets on either daily or monthly basis. The complete daily fields are an improvement from v4r3 to make it possible to study higher frequency processes, e.g. mixed-layer dynamics. In addition to daily and monthly fields, v4r4 has some auxiliary variables in hourly resolution, including the core products of International Earth Rotation Services (IERS) Special Bureau for the Oceans. These SBO core products include global ocean mass, center of mass, and ocean angular momentum.</p>
				<h4>4.4 Monthly Average Model Fields</h4>
				<p>The nominal model output is its monthly fields (nctiles_monthly). Each subdirectory inside nctiles_monthly contains netCDF files for a particular variable, as indicated by the name of the subdirectory. The files of each variable are organized by year (subdirectory) and each yearly field is split 12 monthly netCDF files. Each file contains the complete global field with all 13 tiles. Some of the most commonly used fields, like velocity components, potential temperature, salinity, SSH, and OBP are UVEL, VVEL, THETA, SALT, SSHDYN, and OBPNOPAB. The two fields SSHDYN, and OBPNOPAB are the equivalents of ECCO v3r3's SSH and OBP. The new names reflect the fact that ECCO v4r4 has the additional air pressure forcing to the forcing used in v4r3, and therefore have to be corrected to generate equivalent fields to v4r3's SSH and OBP. SSHDYN is the sea surface height corrected with the inverse barometer correction, and OBPNOPAB is the same as OBP, but with the global ocean mean of air pressure removed. More details in the following section Corrected Sea Level and ocean Bottom Pressure.</p>
				<p>The netCDF files can be read by ECCOv4-py or gcmfaces, the two toolboxes developed using Python and MATLAB for processing ECCO V4 files. See more details in Section Software.</p> 
				<div class="grid">
					<div class="grid-cell text-center">
						<img class="no-stretch" src="./images/u368.png" alt="Figure 2 The partitioning of the globe into 13 regional tiles.">
						<p class="jpl-cool-gray-11"><small><i>Figure 2 The partitioning of the globe into 13 regional tiles.</i></small></p>
					</div>
				</div>

				<h4>4.4.1 Corrected Sea Level and Ocean Bottom Pressure</h4>
				<p>ECCO v4r4 is forced with high-frequency atmosphere pressure, although the air pressure is not part of the control variables. The atmosphere pressure is from ERA-Interim, filtered with a 3-year running mean to remove the air tide (Michael Schindelegger, personal communication, 2019). In contrast, v4r3 was not forced with air pressure. The added air pressure forcing makes high-frequency ocean bottom pressure closer to gauge measurements (Ponte et al., 2019).</p>
				<p>There are three variables, ETAN, SSHDYN, and SSH describing sea surface height. ETAN is the height of the model’s liquid ocean surface, whereas SSHDYN and SSH are the corrected sea surface height. SSHDYN is commonly called the dynamic sea surface height, calculated by correcting model sea level anomaly ETAN for three effects : a) spurious mass fluxes incurred by density changes in the Boussinesq volume-conserving model (Greatbatch correction, Griffies and Greatbatch, 2012), b) the inverted barometer (IB) effect (see SSHIB) and c) upward sea level displacement due to submerged sea-ice and snow (see sIceLoad). SSHDYN can be compared with the variable "SSH" in previous ECCO products that did not include atmospheric pressure loading (e.g., Version 4 Release 3). SSH is the same as SSHDYN, but is NOT corrected for the IB effect. All three variables of sea surface height reflect mass changes caused by freshwater input. Since the altimetry measurement is normally corrected with IB effect, variable SSHDYN, not SSH or ETAN,  provides the model equivalent of IB-corrected altimetry sea level measurements. Use SSH for comparisons with altimetry data products that do NOT apply the IB correction. </p>
				<p>Similarly, there are three variables, PHIBOT, OBPNOPAB, and OBP for ocean bottom pressure. PHIBOT is model ocean bottom pressure (in m2s-2) that generally cannot be compared with data, and accounts for the time-varying change of grid cell thicknesses allowed by the z* coordinate system. OBPNOPAB is model ocean bottom pressure in equivalent sea level in meters, calculated by dividing PHIBOT by gravity (9.81 m s-2), and correcting for a) spurious mass fluxes incurred by density changes in the Boussinesq volume-conserving model (Greatbatch correction; see above) and b) spatial mean atmospheric pressure variations over the global ocean. OBPNOPAB can be compared with the variable OBP in previous ECCO products that did not include atmospheric pressure loading (e.g., Version 4 Release 3). OBP in the current product (v4r4) is the same as OBPNOPAB, but includes the spatial mean atmospheric pressure variations over the global ocean. Use OBPNOPAB for comparisons with ocean bottom pressure data products that have been corrected for global mean atmospheric pressure variations. GRACE data typically ARE corrected for global mean atmospheric pressure variations. In contrast, ocean bottom pressure gauge data typically ARE NOT corrected for global mean atmospheric pressure variations, and therefore should be compared against OBP.</p>

				<h4>4.4.2 Native and Geographical Velocity Components</h4>
				<p>Users are advised to be aware of the directional convention used in the model especially when analyzing the vector fields of the model. Figure 1b illustrates the directional convention used in the LLC grid. Within each face (tile), the x- and y-directions point left-to-right and bottom-to-top in the figure, respectively. As such, in faces 4 and 5, the x- and y-directions point to the south and to the east, respectively. In face 3, the x-direction points to the Pacific Ocean away from the Atlantic, whereas y-direction points to North America away from Asia. For user convenience, conventional eastward and northward velocity components (EVEL and NVEL) are provided as diagnostic output, in addition to that  in the model’s native direction (UVEL and VVEL). (See Table 1)</p>

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

				<h4>4.4.3 Advective and Diffusive Fluxes</h4>
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
								<td>X-component (“x”) of ADVective flux of potential temperature (“TH”) (C m<sup>3</sup>/s) at a particular grid (i,j,k). Positive to increase temperature at (i,j,k)</td>
							</tr>
							<tr>
								<td>ADVy_TH</td>
								<td>Y-component (“y”) of ADVective flux of potential temperature (C m<sup>3</sup>/s)</td>
							</tr>
							<tr>
								<td>ADVr_TH</td>
								<td>Z-component (“r”) of ADVective flux of potential temperature (C m<sup>3</sup>/s).</td>
							</tr>
							<tr>
								<td>DFxE_TH</td>
								<td>X-component of DiFfusive flux of potential temperature (C m<sup>3</sup>/s). Explicit part (“E”).</td>
							</tr>
							<tr>
								<td>DFyE_TH</td>
								<td>Y-component of DiFfusive flux of potential temperature (C m<sup>3</sup>/s). Explicit part.</td>
							</tr>
							<tr>
								<td>DFrE_TH</td>
								<td>Z-component of DiFfusive flux of potential temperature (C m<sup>3</sup>/s). Explicit part.</td>
							</tr>
							<tr>
								<td>DFrI_TH</td>
								<td>Z-component of DiFfusive flux of potential temperature (C m<sup>3</sup>/s). Implicit part (“I”).</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>4.5 Instantaneous Monthly Model Fields</h4>
				<p>Besides monthly averages, v4r4 also provides monthly snapshots in the subdirectory nctiles_monthly_snapshots for THETA, SALT, and ETAN. The main purpose of these snapshots is to facilitate budget calculations (see Section Budget Calculation); specifically, monthly mean fluxes that are provided equal changes between these snapshots (as opposed to changes between monthly average states of Section 4.4).</p>

				<h4>4.6 Daily Model Fields</h4>
				<p>V4r4 provides a complete set of daily average fields, include ocean state, forcing, budget terms. This is a big improvement to the nominal monthly fields that v4r3 provided, as now users can close daily property budgets. Because of the large volume of the daily fields, the complete set of daily fields are available at NASA Advanced Supercomputing Division (NAS) data portal: https://data.nas.nasa.gov/ecco/data.php?dir=/eccodata/llc_90/ECCOv4/Release4. See Table 3 for the directory structure.</p>
				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 3. Subdirectories for complete daily fields on NAS data portal</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Directory Name</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>nctiles_daily</td>
								<td>Daily average fields.</td>
							</tr>
							<tr>
								<td>nctiles_daily_snapshorts</td>
								<td>Daily snapshots.</td>
							</tr>
						</tbody>
					</table>
				</div>
				<p>A subset of daily averages are also available on ECCO Drive for select variables in directory nctiles_daily (Table 4). These daily fields are the mostly commonly used ocean and sea-ice states. </p>
				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 4. Subset of daily averages on ECCO Drive</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Directory Name</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>SSHDYN</td>
								<td>Dynamic sea surface height anomaly (m) calculated by correcting model level anomaly ETAN for three effects : a) Greatbatch correction, b) the inverted barometer (IB) effect and c) upward sea level displacement due to submerged sea-ice and snow. See Section 4.4.1.</td>
							</tr>
							<tr>
								<td>OBPNOPAB</td>
								<td>OBPNOPAB (m) is model ocean bottom pressure in equivalent sea level in meters, calculated by dividing PHIBOT by gravity (9.81 m s-2), and correcting for a) Greatbatch correction and b) spatial mean atmospheric pressure variations over the global ocean. See Section 4.4.1.</td>
							</tr>
							<tr>
								<td>THETA</td>
								<td>Ocean potential temperature (°C).</td>
							</tr>
							<tr>
								<td>SALT</td>
								<td>Salinity (psu).</td>
							</tr>
							<tr>
								<td>SIarea</td>
								<td>Fractional sea-ice covered area (m2/m2)</td>
							</tr>
							<tr>
								<td>SIheff</td>
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
							<tr>
								<td>SSH</td>
								<td>Sea surface height (m) that is the same as SSHDYN but is not corrected for IB effect.</td>
							</tr>
							<tr>
								<td>SSHIB</td>
								<td>The inverted barometer (IB) correction to model sea level anomaly (ETAN) required to account for sea surface displacement by atmosphere pressure loading.</td>
							</tr>
							<tr>
								<td>OBP</td>
								<td>Ocean bottom pressure (m) that is the same as OBPNOPAB, but includes the spatial mean atmospheric pressure variations over the global ocean.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>4.7 Data Used to Constrain the Model</h4>
				<p>The subdirectory input_ecco includes the data used to constrain the model (Table 5). Most of the files are in binary format on the native model grid. Each 2-d field is of size 90x1170. The files are provided as binary files, not in netCDF format, as the files in binary format are needed to reproduce v4r4's results. A sample MATLAB script that reads and displays a 2-d binary field on the model grid is presented in Section Software (Box 1). </p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 5. The data used in v4r4 to constrain the model</p>
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
								<td>Climatology TS from WOA’09, mean dynamic topography (DTU17MDT) from DTU Space, global mean SSH & OBP etc. See README there.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>4.8 Model Equivalent of In-situ Data</h4>
				<p>The model equivalents of the in situ data in netCDF format are in profiles. The model fields are sampled on the fly at the time and location of the in situ data to generate the model equivalents. For each in situ file in input_ecco/input_insitu, there is a corresponding file of the model equivalent in profiles.</p>

				<h4>4.9 Interpolated Monthly Fields</h4>
				<p>Since v4 grid is not a regular lat-lon grid, we have also provided interpolated monthly averages on a regular 0.5° by 0.5° grid in interp_monthly for user convenience. However, note that the interpolated fields should not be used for budget calculations, as the interpolation does not preserve integrated quantities. The fields on the native v4 grid should be used instead. The interpolated files are in netCDF format, with one file for one particular variable.</p>

				<h4>4.10 Atmospheric Forcing</h4>
				<p>In addition to all atmospheric forcing used in v4r3, v4r4 has the ERA-Interim surface atmospheric pressure forcing. The atmospheric forcing files are in the subdirectory input_forcing. The directory contains binary yearly files of 6-hourly forcing on v4 grid (Table 6). All forcing fields except for wind speed (eccov4r4_wspeed_YYYY) and air-pressure (eccov4r4_pres_YYYY) are the sum of ERA-Interim forcing and the corresponding control adjustment that has been estimated. Wind speed is not a control variable and is only ERA-Interim wind speed interpolated onto the v4 grid. Air-pressure is also not part of the control variables, and is a filtered version of ERA-Interim 6-hourly surface atmospheric press forcing. The original ERA-Interim pressure is filtered by Michael Schindelegger (U. Bonn) to remove air tides that are not well resolved in the 6-hourly forcing (cf. Fukumori, et al. 2019).</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 6. Atmospheric forcing on v4 grid.</p>
					<table class="full-width gray-striped text-left one-quarter-width">
						<thead>
							<th>Filename (replace YYYY with year)</th>
							<th>Description</th>
						</thead>
						<tbody>
							<tr>
								<td>eccov4r4_dlw_YYYY</td>
								<td>Yearly files for 6-hourly downward longwave (W/m2) in binary format. Positive to decrease ocean temperature.</td>
							</tr>
							<tr>
								<td>eccov4r4_dsw_YYYY</td>
								<td>Downward shortwave (W/m2). Positive to decrease ocean temperature.</td>
							</tr>
							<tr>
								<td>eccov4r4_rain_YYYY</td>
								<td>Precipitation (m/s). Positive to increase sea level.</td>
							</tr>
							<tr>
								<td>eccov4r4_spfh2m_YYYY</td>
								<td>Specific humidity at 2m above the sea surface.</td>
							</tr>
							<tr>
								<td>eccov4r4_tmp2m_YYYY</td>
								<td>Air temperature at 2m above the sea surface.</td>
							</tr>
							<tr>
								<td>eccov4r4_ustr_YYYY</td>
								<td>East-West component of wind stress (N/m2). Positive from east to west.</td>
							</tr>
							<tr>
								<td>eccov4r4_vstr_YYYY</td>
								<td>North-South component of wind stress ((N/m2). Positive from north to south.</td>
							</tr>
							<tr>
								<td>eccov4r4_wspeed_YYYY</td>
								<td>Wind speed at 10m above ocean surface (m/s).</td>
							</tr>
							<tr>
								<td>eccov4r4_pres_YYYY</td>
								<td>Air-pressure (N/m2) at sea-level. It is a filtered version of ERA-Interim surface pressure, interpolated to v4 grid. </td>
							</tr>
						</tbody>
					</table>
				</div>

				<h4>4.11 Input Files</h4>
				<p>The subdirectory input_init includes other files that are needed to reproduce v4r4 (Table 7).</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 7. Input files are needed to reproduce v4r4</p>
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

				<h4>4.12 Other Fields</h4>
				<p>V4r4 has some auxiliary fields in the subdirectory other (Table 8). These files include the binary yearly files of 6-hourly unadjusted atmospheric forcing (interpolated ERA-interim forcings on v4 grid). By taking the difference between the total atmospheric forcing and the unadjusted forcing one could obtain the dimensional atmospheric control adjustments. File “SBO_global.nc” contains hourly core products for Earth rotation of the International Earth Rotation and Reference Systems Service (IERS), including contributions of ocean mass, oceanic angular momentum, and the ocean’s center-of-mass.</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Table 8. Other fields</p>
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
				<tr>
								<td>Pa_global.nc</td>
								<td>The hourly spatial mean of air pressure averaged over the global ocean.</td>
							</tr>
						</tbody>
					</table>
				</div>

				<h3>5. Budget Calculation</h3>
				<p>Monthly mean fluxes are provided in directory nctiles_monthly. Piecuch (2017) provides a practical note on how to analyze budgets using these fields, describing the calculation both in pseudo code and in MATLAB (gcmfaces library; see Software below). Although the note was written for v4r3, the budget can be calculated similarly for v4r4.</p>
				<h3>6. Flux-forced Configuration for v4r4</h3>
				<p>A flux-forced configuration of v4r4 is provided as part of the release 4. This configuration can produce the same forward results as v4r4's, but differs from v4r4 by reading the atmospheric fluxes from pre-computed files. In contrast, v4r4 uses the bulk-formula to compute the air-sea fluxes as well as the ice-ocean and ice-atmosphere fluxes. The fluxes would change along with underling ocean and/ice states. However, sometimes one would want to separate contributions of various fluxes to a particular ocean quantity and need to have the fluxes independent upon the underlining ocean states. The flux-forced configuration provides such capability, since the fluxes are pre-computed. Potential usage includes forward sensitivity experiments, adjoint reconstruction, and others.</p>
				<p>The code and namelists are on GitHub at https://github.com/ECCO-GROUP/ECCO-v4-Configurations/tree/master/ECCOv4%20Release%204/flux-forced. The forcing and other input files of large sizes are in directory other/flux-forced. A user would follow the similar steps described in the v4r4 reproduction document (Wang, 2019), but use the updated code and namelists from GitHub and forcing and other input files from other/flux-forced.</p>
				<h3>7. Software</h3>
				<p>ECCOv4-py is a Python library that can be used to analyze ECCO Version 4 state estimate, including v4r4. It includes tools for loading, plotting, and processing the fields.  An example of its usage is that almost all of the netCDF files for v4r4 in the data server were generated using ECCOv4-py.</p>
				<p>The package is available on GitHub at https://github.com/ECCO-GROUP/ECCOv4-py. A detailed tutorial about how to use v4r4 with ECCOv4-py can be found on the readthedocs page: https://ecco-v4-python-tutorial.readthedocs.io/, including installation instructions at https://ecco-v4-python-tutorial.readthedocs.io/Installing_Python_and_Python_Packages.html.</p>
				<p>Gaël Forget from MIT has created a MATLAB/Octave toolbox called gcmfaces (Forget 2017) to facilitate analysis of gridded earth variables on different grids, including the llc90 grid used in v4r4. The user guide of gcmfaces at http://wwwcvs.mitgcm.org/viewvc/MITgcm/MITgcm_contrib/gael/matlab_class/gcmfaces.pdf?view=co provides a brief description about gcmfaces, including the URLs of the code repositories on GitHub and the documentation pages on redthedocs. The current code repository of gcmfaces is on GitHub: https://github.com/gaelforget/gcmfaces, with the documentation on its redthedocs page: https://gcmfaces.readthedocs.io/en/latest/. The gcmfaces toolbox includes a tutorial script called gcmfaces_demo.m that illustrates how to make use of gcmfaces. A companion MATLAB/Octave toolbox called MITprof to process and analyze in situ profile data is also available on GitHub: https://github.com/gaelforget/MITprof.</p>
				<p>Assume that one has downloaded v4r4 products and successfully installed gcmfaces and all necessary data files according to Section 1 of the gcmfaces’ user guide. Provided below are a couple of sample MATLAB scripts in the context of gcmfaces to read and display the binary and netCDF files of v4r4.</p>

				<div class="pad-20 no-top">
					<p class="jpl-cool-gray-11">Box 1. Read and display v4r4 binary files.</p>
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
						%Type in the path of the grid directory of v4r4 that one has downloaded from<br />
						% https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/nctiles_grid/<br />
						% e.g. ‘/mydir/v4r4/nctiles_grid/’;<br />
						<br />
						%Read in binary files<br />
						%To read in and display the 15th 6-hourly record of the E-W wind stress for year 1992<br />
						%Read in data<br />
						dirv4r4 = '/mydir/v4r4/';<br />
						ff= [dirv4r4 'input_forcing/' 'eccov4r4_ustr_1992'];<br />
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
						dirv4r4 = '/mydir/v4r4/';<br />
						fileName= [dirv4r4 '/nctiles_monthly/ETAN/' 'ETAN'];<br />
						fldName='ETAN';<br />
						fld=read_nctiles(fileName,fldName,3); %Read in the 3rd monthly record of ETAN<br />
					</div>
				</div>

				<h3>Acknowledgement</h3>
				<p>The research was carried out at the Jet Propulsion Laboratory, California Institute of Technology, under a contract with the National Aeronautics and Space Administration.</p>
				<h3>References</h3>
				<p>Forget, G., 2017: gcmfaces, A generic treatment of gridded earth variables in Matlab. (Available at ftp://mit.ecco-group.org/ecco_for_las/version_4/release2/doc/
ECCOV4R2_gcmfaces.pdf.)</p>
				<p>Forget, G., J.-M. Campin, P. Heimbach, C. N. Hill, R. M. Ponte, and C. Wunsch, 2015: ECCO version 4: an integrated framework for non-linear inverse modeling and global ocean state estimation. Geoscientific Model Development, 8, 3071-3104, doi:10.5194/gmd-8-3071-2015.</p>
				<p>Fukumori, I., O. Wang, I. Fenty, G. Forget, P. Heimbach, R. M. Ponte, 2109: ECCO Version 4 Release 4. Available at https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_synopsis.pdf.</p>
				<p>Griffies, S. and R. Greatbatch, 2012: Physical processes that impact the evolution of global mean sea level in ocean climate models, Ocean Modell., 51, 37–72.</p>
				<p>Piecuch, C. G., 2017: A note on evaluating budgets in ECCO Version 4 Release 3. (Available at https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/evaluating_budgets_
in_eccov4r3.pdf.)</p>
				<p>Ponte, R. M., M. Schindelegger, O. Wang, I. Fukumori, and I. Fenty, 2019: Submonthly variability in ocean bottom pressure from models, GRACE and in situ data, Grace and Grace-FO Science Meeting, Pasadena, California, USA.</p>
				<p>Wang, O., 2019: Instructions for reproducing ECCO Version 4 Release 4. Available at https://ecco.jpl.nasa.gov/drive/files/Version4/Release4/doc/v4r4_reproduction_howto.pdf.</p>
				<p>Wang, O., I. Fukumori, and I. Fenty, 2017, An overview of ECCO Version 4
Release 3’s ftp site. Available at https://ecco.jpl.nasa.gov/drive/files/Version4/Release3/doc/v4r3_overview.pdf.</p>
			</div><!-- //.wysiwyg_content -->
			
			</div><!-- //.grid -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once('../../includes/footer.inc.php'); ?>
</html>
