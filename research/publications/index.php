<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research | Publications";
	$page_id = 'research';
	$theme = 'light_background'; //dark_background || light_background
	$include_other = <<<EOF
EOF;

	include_once($include_path . 'includes/header.inc.php');
?>
	<!-- START CONTENT -->
	<div class='header_mask'></div>

	<section class='content_page module'>
		<div class='grid_layout'>
			<header id='page_header'>
				<h1 class='article_title'>Publications</h1>
			</header>
			<div class='wysiwyg_content'>
				<ul class="bullet_list indent">
					<li><a href="#production">ECCO-Production and ECCO-IcES publications</a></li>
					<li><a href="#godae">ECCO-GODAE @ JPL (1993-2009)</a></li>
					<li><a href="#sio">ECCO-SIO, ECCO-JPL, GECCO (1997-2005)</a></li>
					<li><a href="#report">ECCO REPORT SERIES</a></li>
				</ul>

				<hr>
				<h3 id="production" class="named-anchor">ECCO-Production and ECCO-IcES publications</h3>

				<h4>2017</h4>
				<ul class="bullet_list indent">
					<li>Clayton, S., S. Dutkiewicz, O. Jahn, C. Hill, P. Heimbach, and M.J. Follows, 2016: Biogeochemical versus ecological consequences of modeled ocean physics. Biogeosciences, 14, 2877-2889, doi:10.5194/bg-14-2877-2017</li>
					<li>Evans, D. G., Toole, J., Forget, G., Zika, J. D., Naveira Garabato, A. C., Nurser, A. J. G., and Yu, L., 2017: <a href="http://dx.doi.org/10.1175/JPO-D-16-0089.1">Recent wind-driven variability in Atlantic water mass distribution and meridional overturning circulation.</a> Journal of Physical Oceanography, doi:10.1175/JPO-D-16-0089.1</li>
					<li>Liang, X., C. Piecuch, R. Ponte, G. Forget, C. Wunsch, and P. Heimbach, 2017: Change of the Global Ocean Vertical Heat Transport over 1993-2010. J. Clim., in press, doi:10.1175/JCLI-D-16-0569.1</li>
					<li>The ECCO Consortium, 2017a: A Twenty-Year Dynamical Oceanic Climatology: 1994-2013. Part 1: Active Scalar Fields: Temperature, Salinity, Dynamic Topography, Mixed-Layer Depth, Bottom Pressure. <a href="http://hdl.handle.net/1721.1/107613" target="blank">http://hdl.handle.net/1721.1/107613</a> (2017-03-20)</li>
					<li>The ECCO Consortium, 2017b: A Twenty-Year Dynamical Oceanic Climatology: 1994-2013. Part 2: Velocities, Property Transports, Meteorological Variables, Mixing Coefficients. <a href="http://hdl.handle.net/1721.1/109847" target="blank">http://hdl.handle.net/1721.1/109847</a> (2017-06-14)</li>
					<li>Wu, Q., Zhang, X., Church, J. A. and Hu, J., 2017: <a href="http://dx.doi.org/10.1002/2016JC012345">Variability and change of sea level and its components in the Indo-Pacific region during the altimetry era.</a> J. Geophys. Res. Oceans., doi:10.1002/2016JC012345</li>
					<li>Liang, X., M. Spall, and C. Wunsch, 2017: Global ocean vertical velocity from a dynamically consistent ocean state estimate. J. Geophys. Res, doi: 10.1002/2017JC012985</li>
				</ul>

				<h4>2016</h4>
				<ul class="bullet_list indent">
					<li>Ashkezari, M., Hill, C. N., Follett, C., Forget, G., and Follows, M., 2016: <a href="http://dx.doi.org/10.1002/2016GL071269">Oceanic eddy detection and lifetime forecast using machine learning methods.</a> Geophys. Res. Lett., http://dx.doi.org/10.1002/2016GL071269</li>
					<li>P. Bender and C. Betts, 2016: Ocean calibration approach for data from the GRACE Follow-On mission. J. Geophys. Res, 121, 1218-1235.</li>
					<li>A. Chaudhuri, R. Ponte, and G. Forget, 2016: <a href="http://www.sciencedirect.com/science/article/pii/S1463500316000226">Impact of uncertainties in atmospheric boundary conditions on ocean model solutions.</a> Ocean Model., 100, 96-108.</li>
					<li>M. Chevallier, et al., 2016: <a href="http://link.springer.com/article/10.1007/s00382-016-2985-y">Intercomparison of the Arctic sea ice cover in global ocean-sea ice reanalyses from the ORA-IP project.</a> Clim.Dyn., doi:10.1007/s00382-016-2985-y</li>
					<li>H. Danabasoglu, et al., 2016: <a href="http://www.sciencedirect.com/science/article/pii/S1463500315002231">North Atlantic simulations in Coordinated Ocean-ice Reference Experiments phase II (CORE-II). Part II: Inter-annual to decadal variability.</a> Ocean Model., 97, 65-90.</li>
					<li>N. Ngeve, T. Van der Stocken, D. Menemenlis, N. Koedam, and L. Triest, 2016: <a href="http://ecco2.org/manuscripts/2016/Ngeve2016.pdf">Contrasting effects of historical sea level rise and contemporary ocean currents on regional gene flow of Rhizophora racemosa in Eastern Atlantic mangroves.</a> PLoS ONE 11(3): e0150950.</li>
					<li>V. Ocana, E. Zorita, and P. Heimbach, 2016: Stochastic secular trends in sea level rise. J. Geophys. Res, 121, 2183-2202.</li>
					<li>C. Piecuch, S. Dangendorf, R. Ponte, and M. Marcos, 2016: Annual sea level changes on the North American northeast coast: influence of local winds and barotropic motions. J. Clim., 29, 4801-4816.</li>
					<li>H. Pillar, P. Heimbach, H. Johnson, and D. Marshall, 2016: Dynamical attribution of recent variability in Atlantic overturning. J. Clim., 29, 3339-3352.</li>
					<li>R. Ponte and N. Vinogradova, 2016: An assessment of basic processes controlling mean surface salinity over the global ocean. Geophys. Res. Lett., 10.1002/2016GL069857</li>
					<li>E. Rignot, Y. Xu, D. Menemenlis, J. Mouginot, B. Scheuchl, X. Li, M. Morlighem, H. Seroussi, M. van den Broeke, I. Fenty, C. Cai, L. An, and B. de Fleurian, 2016: <a href="http://onlinelibrary.wiley.com/doi/10.1002/2016GL068784/full">Modeling of ocean-induced icemelt rates of five west Greenland glaciers over the past two decades.</a> Geophys. Res. Lett., 43, 6374-6382.</li>
					<li>C. Rocha, T. Chereskin, S. Gille, and D. Menemenlis, 2016: <a href="http://ecco2.org/manuscripts/2016/Rocha2016.pdf">Mesoscale to submesoscale wavenumber spectra in Drake Passage.</a> J. Phys. Oceanogr., 46, 601-620.</li>
					<li>M. Schodlok, D. Menemenlis, and E. J. Rignot, 2016: <a href="http://ecco2.org/manuscripts/2016/Schodlok2016.pdf">Ice shelf basal melt rates around Antarctica from simulations and observations.</a> J. Geophys. Res., 121, 1085-1109.</li>
					<li>H. Song, Marshall, J., Follows, M., Dutkiewicz, S., and G. Forget, 2016: <a href="http://www.sciencedirect.com/science/article/pii/S0924796316000452">Source waters for the highly productive Patagonian shelf in the southwestern Atlantic.</a> J. Mar. Syst., 158, 120-128.</li>
					<li>G. Spreen, R. Kwok, D. Menemenlis, and A. Nguyen, 2016: <a href="http://www.the-cryosphere-discuss.net/tc-2016-13/">Sea ice deformation in a coupled ocean-sea ice model and in satellite remote sensing data.</a> The Cryosphere, 10.5194/tc-2016-13</li>
					<li>D. Stammer, M. Balmaseda, P. Heimbach, A.Koehl, and A. Weaver, 2016: Ocean Data Assimilation in Support of Climate Applications: Status and Perspectives. Ann. Rev. Mar. Sci., 8, 491-518.</li>
					<li>C. Wunsch, 2016: Global Ocean Integrals and Means, with Trend Implications. Ann. Rev. Mar. Sci., 8, 1-33.</li>
					<li>    Liang, X., and L. Yu, 2016: Variations of the global net air–sea heat flux during the “Hiatus” period (2001–10). J. Clim, 29, 3647–3660, doi:10.1175/JCLI-D-15-0626.1</li>
				</ul>

				<h4>2015</h4>
				<ul class="bullet_list indent">
					<li>M. Balmaseda, M., et al., 2015: The ocean reanalyses intercomparison project (ora-ip). J. Oper. Oceanogr., 8 (sup1), s80-s97.</li>
					<li>H. Brix, D. Menemenlis, C. Hill, S. Dutkiewicz, O. Jahn, D. Wang, K. Bowman, and H. Zhang, 2015: <a href="http://ecco2.org/manuscripts/2015/Brix2015.pdf">Using Green's Functions to initialize and adjust a global, eddying ocean biogeochemistry general circulation model.</a> Ocean Model., 95, 1-14.</li>
					<li> M. Buckley, R. Ponte, G. Forget, and P. Heimbach, 2015: Determining the origins of advective heat transport variability in the North Atlantic. J. Clim., 18, 3943-3956.</li>
					<li>R. Chen, G. Flierl, and C. Wunsch, 2015: Quantifying and Interpreting Striations in a Subtropical Gyre: A Spectral Perspective. J. Phys. Oceanogr., 45, 387-406.</li>
					<li>P. Duarte, P. Assmy, H. Hop, G. Spreen, S. Gerland, and S. Hudson, 2015: <a href="http://ecco2.org/manuscripts/2015/Duarte2015.pdf">The importance of vertical resolution in sea ice algae production models.</a> J. Mar. Syst., 145, 69-90.</li>
					<li>I. Fenty, D. Menemenlis, and H. Zhang, 2015: <a href="http://ecco2.org/manuscripts/2015/Fenty2015.pdf">Global Coupled Sea Ice-Ocean State Estimation.</a> Clim. Dyn., doi:10.1007/s00382-015-2796-6</li>
					<li>M.M. Flexas, M. Schodlok, L. Padman, D. Menemenlis, and A. Orsi, 2015: <a href="http://ecco2.org/manuscripts/2015/Flexas2015.pdf">Role of tides on the formation of the Antarctic Slope Front at the Weddell-Scotia Confluence.</a> J. Geophys. Res., 120, 3658-3680.</li>
					<li>G. Forget, D. Ferreira, and X. Liang, 2015: On the observability of turbulent transport rates by argo: supporting evidence from an inversion experiment. Ocean Science, 11, 839-853.</li>
					<li>G. Forget and R.M. Ponte, 2015: <a href="http://www.sciencedirect.com/science/article/pii/S0079661115001354">The partition of regional sea level variability.</a> Prog. Oceanogr., 137, 173-195.</li>
					<li>G. Forget, J.M. Campin, P. Heimbach, C.N. Hill, R.M. Ponte, and C. Wunsch, 2015: <a href="http://www.geosci-model-dev.net/8/3071/2015/gmd-8-3071-2015.pdf">ECCO version 4: an integrated framework for non-linear inverse modeling and global ocean state estimation.</a> Geosci. Model Dev., 8, 3071-3104.</li>
					<li>The ECCO Consortium (G. Forget, I. Fukumori, P. Heimbach, T. Lee, D. Menemenlis, and R.M. Ponte), 2015: <a href="http://ecco2.org/manuscripts/2015/ECCO_CLIVAR.pdf">Estimating the Circulation and Climate of the Ocean (ECCO): Advancing CLIVAR Science.</a> CLIVAR Exchanges, 67, 41-45.</li>
					<li>I. Fukumori, 2015: Combining models and data in large-scale oceanography: Examples from the Consortium for Estimating the Circulation and Climate of the Ocean (ECCO). Advanced Data Assimilation for Geosciences: Lecture Notes of the Les Houches School of Physics: Special Issue, June 2012.</li>
					<li>I. Fukumori, O. Wang, W. Llovel, I. Fenty and G. Forget, 2015: A near-uniform fluctuation of ocean bottom pressure and sea level across the deep ocean basins of the Arctic Ocean and the Nordic Seas. Prog. Oceanogr., 134, 152-172.</li>
					<li>D. Halkides, D. Waliser, T. Lee, D. Menemenlis, and B. Guan, 2015: <a href="http://ecco2.org/manuscripts/2015/Halkides2015.pdf">Quantifying the processes controlling intraseasonal mixed-layer temperature variability in the tropical Indian Ocean.</a> J. Geophys. Res., 120, 692-715.</li>
					<li>D. Halpern, D. Menemenlis, and X. Wang, 2015: <a href="http://ecco2.org/manuscripts/2015/Halpern2015.pdf">Impact of data assimilation on ECCO2 Equatorial Undercurrent and North Equatorial Countercurrent in the Pacific Ocean.</a> J. Atmos. Ocean Tech., 32, 131-143.</li>
					<li>P. Heimbach, 2015: Application of derivative code in climate modeling. in: N. Gauger, M. Giles, M. Gunzburger, and U. Naumann (eds.): Adjoint Methods in Computational Science, Engineering, and Finance. Dagstuhl Reports, 4, 14-16.</li>
					<li>V. Le Fouest, M. Manizza, B. Tremblay, and M. Babin, 2015: <a href="http://www.biogeosciences.net/12/3385/2015/bg-12-3385-2015.html">Modeling the impact of riverine DON removal by marine bacterioplankton on primary production in the Arctic Ocean.</a> Biogeosciences, 12, 3385-3402.</li>
					<li>X. Liang, C. Wunsch, P. Heimbach, and G. Forget, 2015: Vertical redistribution of oceanic heat. J. Clim., 28, 3821-3833.</li>
					<li>K. McCaffrey, B. Fox-Kemper, and G. Forget, 2015: Estimates of Ocean Macro-turbulence: Structure Function and Spectral Slope from Argo Profiling Floats. J. Phys. Oceanogr., 45, 1773-1793.</li>
					<li>L. Ott, S. Pawson, G. Collatz, W. Gregg, D. Menemenlis, H. Brix, C. Rousseaux, K. Bowman, J. Liu, A. Eldering, M. Gunson, and S. Kawa, 2015: <a href="http://ecco2.org/manuscripts/2015/Ott2015.pdf">Assessing the magnitude of CO2 flux uncertainty in atmospheric CO2 records using products from NASA's Carbon Monitoring Flux Pilot Project.</a>  J. Geophys. Res., 120, 734-765.</li>
					<li>C. Piecuch, 2015: Bottom-pressure signature of annual baroclinic Rossby waves in the northeast tropical Pacific Ocean. J. Geophys. Res., 120, 2449-2459.</li>
					<li>C. Piecuch, I. Fukumori, R. Ponte, and O. Wang, 2015: Vertical structure  of ocean pressure fluctuations with application to satellite-gravimetric observations. J. Atmos. Oce. Tech., 32, 603-613.</li>
					<li>C. Piecuch, P. Heimbach, R.M. Ponte, and G. Forget, 2015: Sensitivity of contemporary sea level trends in a global ocean state estimate to effects of geothermal fluxes, Ocean Model., 96, 214-220.</li>
					<li>K. J. Quinn, R. M. Ponte, and M. E. Tamisiea, 2015: Impact of self-attraction and loading on Earth rotation. J. Geophys. Res., 120, 4510â€“4521.</li>
					<li>A. Storto, and 36 others, 2015: Steric sea level variability (1993-2010) in an ensemble of ocean reanalyses and objective analyses. Clim. Dyn., doi:10.1007/s00382-015-2554-9</li>
					<li>Toyoda, T., and 32 others, 2015: Interannual-decadal variability of wintertime mixed layer depths in the north pacific detected by an ensemble of ocean syntheses. Clim. Dyn., doi:10.1007/s00382-015-2762-3</li>
					<li>T. Toyoda, and 32 others, 2015: Intercomparison and validation of the mixed layer depth fields of global ocean syntheses. Clim. Dyn., doi:10.1007/s00382-015-2637-7</li>
					<li>T. Van der Stocken, 2015: <a href="http://ecco2.org/manuscripts/2015/Stocken2015.pdf">Biological and environmental drivers of mangrove propagule dispersal: A field and modeling approach.</a>  Ph.D. Thesis, Vrije Universiteit Brussel and the Universite Libre de Bruxelles.</li>
					<li>E. Villar, G. Farrant, M. Follows, et al, 2015, Environmental characteristics of Agulhas rings affect interocean plankton transport, Science, Vol. 348, 6237.</li>
					<li>N. Vinogradova, R. Ponte, K. Quinn, M. Tamisiea, J.M. Campin, and J. Davis, 2015: Dynamic Adjustment of the Ocean Circulation to Self-Attraction and Loading Effects.  J. Phys. Oceanogr., 45, 678-689.</li>
					<li>X. Wang, L. Zhao, Z. Li, and D. Menemenlis, 2015: <a href="http://ecco2.org/manuscripts/2015/Wang2015.pdf">Regional ocean forecasting systems and their applications: Design consideration of such a system for the South China Sea.</a> Aquat. Ecosyst. Health Manag., 18, 443-453.</li>
					<li>J. Whitefield, P. Winsor, J. McClelland, and D. Menemenlis, 2015: <a href="http://ecco2.org/manuscripts/2015/Whitefield2015.pdf">A new river discharge and river temperature climatology data set for the pan-Arctic region.</a> Ocean Model., 88, 1-15.</li>
					<li>C. Yan, J. Zhu, and J. Xie, 2015: An ocean data assimilation system in the Indian Ocean and west Pacific Ocean. Adv. Atmos. Sci., 32, 1460-1472.</li>
					<li>V. Zemskova, B. White, and A. Scotti, 2015: Available potential energy and the general circulation: Partitioning wind, buoyancy forcing, and irreversible mixing. J. Phys. Oceanogr., 45, 1510-1531.</li>
					<li>Y. Zhang, D. Jacob, S. Dutkiewicz, H. Amos, M. Long, and E. Sunderland, 2015: Biogeochemical drivers of the fate of riverine mercury discharged to the global and Arctic oceans. Global Biogeochem. Cycles, 29, 854-864.</li>
				</ul>

				<h4>2014</h4>
				<ul class="bullet_list indent">
					<li>M. Azaneu, R. Kerr, and M. Mata, 2014: <a href="http://www.ocean-sci.net/10/923/2014/os-10-923-2014.html">Assessment of the representation of Antarctic Bottom Water properties in the ECCO2 reanalysis.</a> Ocean Sci., 10, 923-946.</li>
					<li>M. Buckley, R. Ponte, G. Forget, and P. Heimbach, 2014: Low-frequency SST and upper-ocean heat content variability in the North Atlantic. J. Clim., 27, 4996-5018.</li>
					<li>A. Chaudhuri, R. Ponte, and A. Nguyen, 2014: A comparison of atmospheric reanalysis products for the Arctic Ocean and implications for uncertainties in air-sea fluxes, J. Clim., 27, 5411-5421.</li>
					<li>R. Chen, G. Flerl, and C. Wunsch, 2014: <a href="http://ecco2.org/manuscripts/2014/Chen2014.pdf">A description of local and nonlocal eddy-mean flow interaction in a global eddy-permitting state estimate. </a> J. Phys. Oceanogr., 44, 2336-2352.</li>
					<li>K. Childers, 2014: <a href="http://ecco2.org/manuscripts/2015/Childers2014.pdf">Circulation and Transport Across the Iceland Faroes Shetland Ridge.</a> Ph.D. Thesis, Marine and Atmospheric Science, Stony Brook University, NY.</li>
					<li>H. Dail and C. Wunsch, 2014: Dynamical Reconstruction of Upper-Ocean Conditions in the Last Glacial Maximum Atlantic.  J. Clim., 27, 807â€“823.</li>
					<li>G. Danabasoglu, et al., 2014: North Atlantic simulations in Coordinated Ocean-ice Reference Experiments, phase II (CORE-II): Part I: Mean states. Ocean Modelling, 73, 76-107.</li>
					<li>G. Danabasoglu, R. Curry, P. Heimbach, Y. Kushnir, C. Meinen, R. Msadek, M. Patterson, L. Thompson, S. Yeager, and R. Zhang, 2014: 2013 US AMOC Science Team Annual Report on Progress and Priorities. 162 pp. <a href="https://usclivar.org/sites/default/files/amoc/2014/USAMOC_2013AnnualReport_final.pdf">US CLIVAR Report 2014-4</a>, US CLIVAR Project Office, Washington D.C., 20006.</li>
					<li>V. Dansereau, P. Heimbach, and M. Losch, 2014: Simulation of sub-ice shelf melt rates in a general circulation model: velocity-dependent transfer and the role of friction.  J. Geophys. Res., 119, 1765-1790.</li>
					<li>T. Dotto, R. Kerr, M. Mata, M. Azaneu, I. Wainer, E. Fahrbach, and G. Rohardt, 2014: <a href="http://www.ocean-sci.net/10/523/2014/os-10-523-2014.html">Assessment of the structure and variability of Weddell Sea water masses in distinct ocean reanalysis products.</a> Ocean Sci., 10, 523-546.</li>
					<li>B. Dushaw, 2014: <a href="http://scitation.aip.org/content/asa/journal/jasa/136/1/10.1121/1.4881928?aemail=author">Assessing the horizontal refraction of ocean acoustic tomography signals using high-resolution ocean state estimates.</a> Acoust. Soc. Am., 136, 122.</li>
					<li>B. Dushaw and D. Menemenlis, 2014: <a href="http://ecco2.org/manuscripts/2014/Dushaw2014.pdf">Antipodal acoustic thermometry: 1960, 2004.</a> Deep-Sea Res. I, 86, 1-20.</li>
					<li>S. Gao, T. Qu, and X. Nie, 2014: Mixed layer salinity budget in the tropical Pacific Ocean estimated by a global GCM. J. Geophys. Res., 119, 8255-8270.</li>
					<li>P. Heimbach, F. Straneo, O. Sergienko, and G. Hamilton, 2014:  International workshop on understanding the response of Greenlands marine-terminating glaciers to oceanic and atmospheric forcing: Challenges to improving observations, process understanding and modeling. June 4-7, 2013, Beverly, MA, USA. <a href="http://www.usclivar.org/sites/default/files/documents/2014/2013GRISOWorkshopReport_v2_0.pdf">US CLIVAR Report 2014-1</a>, US CLIVAR Project Office, Washington DC, 20006.</li>
					<li>A. Kalmikov and P. Heimbach, 2014: A Hessian-based method for Uncertainty Quantification in Global Ocean State Estimation. SIAM J. Scientific Computing (Special Section on Planet Earth and Big Data), 36, S267â€“S295.</li>
					<li>J. Liu, K. Bowman, M. Lee, D. Henze, N. Bousserez, H. Brix, G. Collatz, D. Menemenlis, L. Ott, S. Pawson, D. Jones, and R. Nassar, 2014: <a href="http://ecco2.org/manuscripts/2014/Liu2014.pdf">Carbon monitoring system flux estimation and attribution: Impact of ACOS-GOSAT XCO2 sampling on the inference of terrestrial biospheric sources and sinks.</a> Tellus B, 66, 22486.</li>
					<li>M. Losch, V. Strass, B. Cisewski, C. Klaas, and R. Bellerby, 2014: <a href="http://ecco2.org/manuscripts/2014/Losch2014.pdf">Ocean state estimation from hydrography and velocity observations during EIFEX with a regional biogeochemical ocean circulation model.</a> J. Mar. Syst., 129, 437-451.</li>
					<li>C. Piecuch, I. Fukumori, R. Ponte and O. Wang, 2014: Vertical Structure of Ocean Pressure Variations with Application to Satellite-Gravimetric Observations. Journal of Atmospheric and Oceanic Technology, 32, 603-613.</li>
					<li>C. Piecuch and R. Ponte, 2014: Mechanisms of global mean steric sea level change.  J. Clim., 27, 824-834.</li>
					<li>R. Ponte, and C. Piecuch, 2014: Interannual bottom pressure signals in the Australian-Antarctic and Bellingshausen Basins. J. Phys. Oceanogr., 44, 1456-1465.</li>
					<li>R. Sciascia, C. Cenedese, D. Nicoli, P. Heimbach, and F. Straneo, 2014: Impact of periodic intermediary flows on submarine melting of a Greenland glacier. J. Geophys. Res., 119, 7078-7098.</li>
					<li>H. Seroussi, M. Morlighem, E. Rignot, J. Mouginot, E. Larour, M. Schodlok, and A. Khazendar, 2014: <a href="http://ecco2.org/manuscripts/2014/Seroussi2014.pdf">Sensitivity of the dynamics of Pine Island Glacier, West Antarctica, to climate forcing for the next 50 years.</a> The Cryosphere, 8, 1699-1710.</li>
					<li>S. Tett, T. Sherwin, A. Shravat, and O. Browne, 2014: How Much Has the North Atlantic Ocean Overturning Circulation Changed in the Last 50 Years? Journal of Climate, 27, 6325-6342.</li>
					<li>N. Vinogradova,  R. Ponte, I. Fukumori, and O. Wang, 2014: Estimating satellite salinity errors for assimilation of Aquarius and SMOS data into climate models. J. Geophys. Res., 119, 4732-4744.</li>
					<li>B. Webber, A. Matthews, K. Heywood, J. Kaiser and S. Schmidtko, 2014: Seaglider observations of equatorial Indian Ocean Rossby waves associated with the Madden-Julian Oscillation. J. Geophys. Res., 119, 3714-3731.</li>
					<li>C. Wortham and C. Wunsch, 2014: A multi-dimensional spectral description of ocean variability, J. Phys. Oceanogr., 44, 944-966.</li>
					<li>C. Wunsch and P. Heimbach, 2014: Bidecadal Thermal Changes in the Abyssal Ocean. J. Phys. Oceanogr., 44, 2013-2030.</li>
				</ul>

				<h4>2013</h4>
				<ul class="bullet_list indent">
					<li>R. Abernathey, D. Ferreira, and A. Klocker, 2013: <a href="https://rabernat.github.io/papers/AbernatheyEtAl2013.pdf">Diagnostics of isopycnal mixing in a circumpolar channel.</a> Ocean Model., 72, 1-16.</li>
					<li>M. Baringer, et al., 2013: Meridional Overturning Circulation and Heat Transport Observations in the Atlantic Ocean. Bull. Amer. Met. Soc., Special Supplement: State of the Climate in 2012, S65-S68.</li>
					<li>A. Chaudhuri, R. Ponte, G. Forget, and P. Heimbach, 2013: A comparison of atmospheric reanalysis surface products over the ocean and implications for uncertainties in air-sea boundary forcing. J. Clim., 26, 153-170.</li>
					<li>R. Chen, 2013: <a href="http://ecco2.org/manuscripts/2013/Chen2013.pdf">Energy pathways and structures of oceanic eddies from the ECCO2 state estimate and simplified models.</a> Ph.D. Thesis, MIT-WHOI Joint Program, Cambridge, MA.</li>
					<li>W. Chen, J. Ray, W. Shen, and C. Huang, 2013: Polar motion excitations for an Earth model with frequency-dependent responses: 2. Numerical tests of the meteorological excitations. J. Geophys. Res., 118, 4995-5007.</li>
					<li>S. Clayton, S. Dutkiewicz, O. Jahn, and M. Follows, 2013: Dispersal, eddies, and the diversity of marine phytoplankton. Limnology and Oceanography: Fluids and Environment, 3, 182-199.</li>
					<li>A. Condron and I. Renfrew, 2013: <a href="http://www.nature.com/ngeo/journal/v6/n1/full/ngeo1661.html">The impact of polar mesoscale storms on northeast Atlantic Ocean circulation.</a> Nature Geoscience, 6, 34-37.</li>
					<li>B. Dushaw, P. Worcester, M. Dzieciuch, and D. Menemenlis, 2013: <a href="http://ecco2.org/manuscripts/2013/Dushaw2013.pdf">On the time-mean state of ocean models and the properties of long-range acoustic propagation.</a> J. Geophys. Res., 118, 4346-4362.</li>
					<li>I. Fenty and P. Heimbach, 2013: Hydrographic preconditioning for seasonal sea ice anomalies in the Labrador Sea. J. Phys. Oceanogr., 43, 863-883.</li>
					<li>I. Fenty and P. Heimbach, 2013: Coupled sea ice-ocean state estimation in the Labrador Sea and Baffin Bay. J. Phys. Oceanogr., 43, 884-904.</li>
					<li>I. Fukumori and O. Wang, 2013: Origins of heat and freshwater anomalies underlying regional decadal sea level trends. Geophys. Res. Lett., 40, 563-567.</li>
					<li>D. Goldberg and P. Heimbach, 2013: Parameter and state estimation with a time-dependent adjoint marine ice sheet model. The Cryosphere, 7, 1659-1678.</li>
					<li>I. Hoteit, T. Hoar, G. Gopalakrishnan, N. Collins, J. Anderson, B. Cornuelle, A. Koehl, and P. Heimbach, 2013: A MITgcm/DART ensemble analysis and prediction system: Development and application to the Gulf of Mexico. Dyn. Atmos. Ocean, 63, 1-23.</li>
					<li>A. Kalmikov, 2013: Uncertainty quantification in ocean state estimation. Ph.D. Thesis, MIT-WHOI Joint Program, Cambridge, MA.</li>
					<li>A. Khazendar, M. Schodlok, I. Fenty, S. Ligtenberg, E. Rignot, and M. van den Broeke, 2013: <a href="http://ecco2.org/manuscripts/2013/Khazendar2013.pdf">Observed thinning of Totten Glacier is linked to coastal polynya variability.</a> Nat. Commun., 4, 2857.</li>
					<li>M. Manizza, M. Follows, S. Dutkiewicz, D. Menemenlis, C. Hill, R. Key, 2013: <a href="http://ecco2.org/manuscripts/2013/Manizza2013.pdf">Changes in the Arctic Ocean CO2 sink (1996-2007): A regional model analysis.</a> Global Biogeochem. Cycles, 27, 1108-1118.</li>
					<li>M. Mazloff, R. Ferrari, and T. Schneider, 2013: The force balance of the Southern Ocean meridional overturning circulation. J. Phys. Oceanogr., 43, 1193-1208.</li>
					<li>M. Morlighem, E. Rignot, J. Mouginot, X. Wu, H. Seroussi, E. Larour, and J. Paden, 2013: High-resolution bed topography mapping of Russell Glacier, Greenland, inferred from Operation IceBridge data. J. Glaciol., 59, 1016-1023.</li>
					<li>M. Morlighem, H. Seroussi, E. Larour, and E. Rignot, 2013: Inversion of basal friction in Antarctica using exact and incomplete adjoints of a higher-order model. J. Geophys. Res., 118, 1746-1753.</li>
					<li>P. Peng, Y. Zhu, M. Zhong, H. Yan, and K. Kang, 2013: Annual sea level fingerprint caused by global water mass transport. Chinese Journal of Geophysics-Chinese Edition, 56, 824-833.</li>
					<li>C. Piecuch and R. Ponte, 2013. Buoyancy-driven interannual sea level changes in the tropical South Atlantic. J. Phys. Oceanogr., 43, 533-547.</li>
					<li>T. Qu, S. Gao, and R. Fine, 2013. Subduction of South Pacific Tropical Water and Its Equatorward Pathways as Shown by a Simulated Passive Tracer. J. Phys. Oceanogr., 43, 1551-1565.</li>
					<li>T. Qu, S. Gao, and I. Fukumori, 2013. Formation of salinity maximum water and its contribution to the overturning circulation in the North Atlantic as revealed by a global general circulation model.  J. Geophys. Res., 118, 1982-1994.</li>
					<li>R. Reynolds, D. Chelton, J. Roberts, M. Martin, D. Menemenlis, and C. Merchant, 2013: <a href="http://journals.ametsoc.org/doi/abs/10.1175/JCLI-D-12-00787.1">Objective determination of feature resolution in two sea surface temperature analyses.</a> J. Clim., 26, 2514-2533.</li>
					<li>F. Roquet, C. Wunsch, G. Forget, P. Heimbach, et al., 2014: Estimates of the Southern Ocean General Circulation Improved by Animal-Borne Instruments. Geophys. Res. Lett., 40, 6176-6180.</li>
					<li>R. Sciascia, F. Straneo, C. Cenedese, and P. Heimbach, 2013: Seasonal variability of sub- marine melt rate and circulation in an east Greenland fjord. J. Geophys. Res., 118, 2492-2506.</li>
					<li>H. Seo and S. Xie, 2013: Impact of ocean warm layer thickness on the intensity of hurricane Katrina in a regional coupled model. Meteorology and Atmospheric Physics, 122, 19-32.</li>
					<li>K. Speer and G. Forget, 2013: Global distribution and formation of mode waters,  chapter 9 in: Ocean Circulation and Climate: a 21st Century Perspective, 211-226.</li>
					<li>F. Straneo and P. Heimbach, 2013: North Atlantic warming and the retreat of Greenland's outlet glaciers. Nature, 504, 36-43.</li>
					<li>F. Straneo, P. Heimbach, O. Sergienko, and 14 others, 2013: Challenges to Understanding the Dynamic Response of Greenlands Marine Terminating Glaciers to Oceanic and Atmospheric Forcing. Bull. Amer. Met. Soc., 94, 1131-1144.</li>
					<li>R. Tenzer, N. Dayoub, and A. Abdalla, 2013: <a href="http://link.springer.com/article/10.1007%2Fs12518-013-0106-8">Analysis of a relative offset between vertical datums at the North and South Islands of New Zealand.</a> Applied Geomatics, 5, 133-145.</li>
					<li>R. Tulloch, C. Hill, and O. Jahn, 2013: <a href="http://ocean.mit.edu/~tulloch/Publications/tulloch_etalagu11.pdf">Possible spreadings of buoyant plumes and local coastline sensitivities using flow syntheses from 1992 to 2007.</a> Geophysical Monograph Series, 195, 245-255.</li>
					<li>N. Vinogradova and R. Ponte, 2013. Clarifying the link between surface salinity and freshwater fluxes on monthly to inter-annual timescales, J. Geophys. Res., 118, 3190-3201.</li>
					<li>D. Volkov and F. Landerer, 2013: <a href="http://ecco2.org/manuscripts/2013/VolkovJGR2013.pdf">Non-seasonal fluctuations of the Arctic Ocean mass observed by the GRACE satellites.</a> J. Geophys. Res., 118, 6451-6460.</li>
					<li>D. Volkov, F. Landerer, and S. Kirillov, 2013: <a href="http://ecco2.org/manuscripts/2013/VolkovCSR2013.pdf">The genesis of sea level variability in the Barents Sea.</a> Continental Shelf Reseach, 66, 92-104.</li>
					<li>B. Ward, S. Dutkiewicz, C. Moore, and M. Follows, 2013: Iron, phosphorus, and nitrogen supply ratios define the biogeography of nitrogen fixation. Limnology and Oceanography, 58, 2059-2075.</li>
					<li>C. Wortham, 2013: A multi-dimensional spectral description of ocean variability with applications. Ph.D. Thesis, MIT-WHOI Joint Program, Cambridge, MA.</li>
					<li>C. Wunsch, 2013: Covariances and linear predictability of the Atlantic Ocean. Deep-Sea Research Part II, 85, 228-243.</li>
					<li>C. Wunsch, 2013: Baroclinic motions and energetics as measured by altimeters. J. Atmos. Ocean Tech., 20, 140-150.</li>
					<li>C. Wunsch, R. Schmitt, and D. Baker, 2013:  Climate change as an intergenerational problem.  Proceedings of the National Academy of Sciences, 110, 4435-4436.</li>
					<li>C. Wunsch and P. Heimbach, 2013: Two Decades of the Atlantic Meridional Overturning Circulation: Anatomy, Variations, Extremes, Prediction, and Overcoming Its Limitations. J. Clim., 26, 7167-7186.</li>
					<li>C. Wunsch and P. Heimbach, 2013: Dynamically and kinematically consistent global ocean circulation and ice state estimates. In Ocean Circulation and Climate: A 21st Century Perspective, ed. G. Siedler, S. Griffies, J. Gould, and J. Church, Chapter 21, pp. 553-579, Academic Press, New York.</li>
					<li>Y. Xu, E. Rignot, I. Fenty, D. Menemenlis, and M. Flexas, 2013: <a href="http://ecco2.org/manuscripts/2013/Xu2013.pdf">Subaqueous melting of Store Glacier, West Greenland from three-dimensional, high-resolution numerical modeling and ocean observations.</a> Geophys. Res. Lett., 40, 4648-4653.</li>
					<li>X. Zhai and C. Wunsch, 2013: On the Variability of Wind Power Input to the Oceans with a Focus on the  Subpolar North Atlantic.  J. Clim., 26, 3892-3903.</li>
				</ul>

				<h4>2012</h4>
				<ul class="bullet_list indent">
					<li>C. Borstad, A. Khazendar, E. Larour, M. Morlighem, E. Rignot, M. Schodlok, and H. Seroussi, 2012: A damage mechanics assessment of the Larsen B ice shelf prior to collapse: Toward a physically-based calving law. Geophys. Res. Lett., 39, L18502.</li>
					<li>A. Condron and P. Winsor, 2012: <a href="http://ecco2.org/manuscripts/2012/CondronWinsor2012.pdf">Meltwater routing and the Younger Dryas.</a> Proceedings of the National Academy of Sciences, 109, 19928-19933.</li>
					<li>V. Dansereau, 2012: Ice shelf-ocean interactions in a general circulation model: melt-rate modulation due to mean flow and tidal currents. M.Sc. Thesis, MIT-WHOI Joint Program, Cambridge, MA.</li>
					<li>S. Dutkiewicz, B. Ward, F. Monteiro, and M. Follows, 2012: Interconnection of nitrogen fixers and iron in the Pacific Ocean: Theory and numerical simulations. Global Biogeochem. Cycles, 26, 10.1029/2011GB004039</li>
					<li>W. Feng, M. Zhong, and H. Xu, 2012: Sea level variations in the South China Sea inferred from satellite gravity, altimetry, and oceanographic data. Science China-Earth Sciences, 55, 1696-1701.</li>
					<li>M. Granskog, C. Stedmon, P. Dodd, R. Amon, A. Pavlov, L. de Steur, and E. Hansen, 2012: Characteristics of colored dissolved organic matter (CDOM) in the Arctic outflow in the Fram Strait: Assessing the changes and fate of terrigenous CDOM in the Arctic Ocean, J. Geophys. Res., 117, C12021.</li>
					<li>H. Graven, N. Gruber, R. Key, S. Khatiwala, and X. Giraud, 2012: Changing controls on oceanic radiocarbon: New insights on shallow-to-deep ocean exchange and anthropogenic CO2 uptake, J. Geophys. Res., 117, 10.1029/2012jc008074</li>
					<li>P. Heimbach and M. Losch, 2012: <a href="http://mitgcm.org/~mlosch/heimbach+losch2012.pdf">Adjoint sensitivities of sub-ice shelf melt rates to ocean circulation under Pine Island Ice Shelf, West Antarctica.</a> Annals of Glaciology, 53, 59-69.</li>
					<li>P. Heimbach and C. Wunsch, 2012: Decadal ocean (and ice) state estimation for climate research: What are the needs? Oberwolfach Reports, 9, 3451-3454.</li>
					<li>C. Hill, D. Ferreira, J. Campin, J. Marshall, R. Abernathey, and N. Barrier, 2012: Controlling spurious diapycnal mixing in eddy-resolving height-coordinate ocean models: Insights from virtual deliberate tracer release experiments, Ocean Modelling 45-46, 14-26.</li>
					<li>S. Marcus, J. Dickey, I. Fukumori, and O. de Viron, 2012: Detection of the Earth rotation response to a rapid fluctuation of Southern Ocean circulation in November 2009. Geophys. Res. Lett., 39, 10.1029/2011gl050671</li>
					<li>M. Mazloff, 2012: <a href="http://journals.ametsoc.org/doi/abs/10.1175/JCLI-D-11-00030.1"> On the sensitivity of the Drake Passage transport to air-sea momentum flux.</a> J. Clim., 25, 2279-2290.</li>
					<li>M. Miller, J. Adkins, D. Menemenlis, and M. Schodlok, 2012: <a href="http://ecco2.org/manuscripts/2012/Miller2012.pdf">The role of ocean cooling in setting glacial southern source bottom water salinity.</a> Paleoceanography, 27, PA3207.</li>
					<li>J. Nastula, R. Gross, and D. Salstein, 2012: Oceanic excitation of polar motion: Identification of specific oceanic areas important for polar motion excitation. Journal of Geodynamics, 62, 16-23.</li>
					<li>A. Nguyen, R. Kwok, and D. Menemenlis, 2012: <a href="http://ecco2.org/manuscripts/2012/NguyenJPO2012.pdf">Source and pathway of the Western Arctic upper halocline in a data-constrained coupled ocean and sea ice model.</a> J. Phys. Oceanogr., 43, 802-823.</li>
					<li>C. Piecuch and R. Ponte, 2012: Importance of Circulation Changes to Atlantic Heat Storage Rates on Seasonal and Interannual Time Scales. J. Climate, 25, 350-362.</li>
					<li>C. Piecuch, and R. Ponte, 2012: Buoyancy-driven interannual sea level changes in the Southeast Tropical Pacific. Geophys. Res. Lett., 39, L05607.</li>
					<li>R. Ponte 2012: An assessment of deep steric height variability over the global ocean. Geophys. Res. Lett., 39, L04601.</li>
					<li>A. Prowe, M. Pahlow, S. Dutkiewicz, M. Follows, and A. Oschlies, 2012: Top-down control of marine phytoplankton diversity in a global ecosystem model. Prog. Oceanogr., 101, 1-13.</li>
					<li>E. Rignot, I. Fenty, D. Menemenlis, and Y. Xu, 2012: <a href="http://ecco2.org/manuscripts/2012/Rignot2012.pdf">Spreading of warm ocean waters around Greenland as a possible cause for glacier acceleration.</a> Annals of Glaciology, 53, 257-266.</li>
					<li>J. Sanchez-Reales, M. Vigo, S. Jin, and B. Chao, 2012: Global Surface Geostrophic Ocean Currents Derived from Satellite Altimetry and GOCE Geoid. Marine Geodesy, 35, 175-189.</li>
					<li>M. Schodlok, D. Menemenlis, E. Rignot, and M. Studinger, 2012: <a href="http://ecco2.org/manuscripts/2012/Schodlok2012.pdf">Sensitivity of the ice shelf ocean system to the sub-ice shelf cavity shape measured by NASA IceBridge in Pine Island Glacier, West Antarctica.</a> Annals of Glaciology, 53, 156-162.</li>
					<li>S. Tank, M. Manizza, R. Holmes, J. McClelland, and B. Peterson, 2012: <a href="http://ecco2.org/manuscripts/2012/Tank2012.pdf">The processing and impact of dissolved riverine nitrogen in the Arctic Ocean.</a> Estuaries and Coasts, 35, 401-415.</li>
					<li>T. van Dam, X. Collilieux, J. Wuite, Z. Altamimi, and J. Ray, 2012: Nontidal ocean loading: amplitudes and potential effects in GPS height time series. Journal of Geodesy, 86, 1043-1057.</li>
					<li>D. Volkov and V. Zlotnicki, 2012: Performance of GOCE and GRACE-derived mean dynamic topographies in resolving Antarctic Circumpolar Current fronts. Ocean Dynamics, 62, 893-905.</li>
					<li>D. Volkov and M Pujol, 2012: Quality assessment of a satellite altimetry data product in the Nordic, Barents, and Kara Seas, J. Geophys. Res., 117, C03025.</li>
					<li>A. Ward, S. Dutkiewicz, O. Jahn, and M. Follows, 2012: A size-structured food-web model for the global ocean. Limnology and Oceanography, 57, 1877-1891.</li>
					<li>Y. Xu, E. Rignot, D. Menemenlis, and M. Koppes, 2012: <a href="http://ecco2.org/manuscripts/2012/Xu2012.pdf">Numerical experiments on subaqueous melting of Greenland tidewater glaciers in response to ocean warming and enhanced subglacial discharge.</a> Annals of Glaciology, 53, 229-234.</li>
					<li>Y. Yan, D. Xu, Y. Qi, and Z. Gan, 2012: Observations of Freshening in the Northwest Pacific Subtropical Gyre near Luzon Strait. Atmosphere-Ocean, 50, 92-102.</li>
					<li>L. Zanna, P. Heimbach, A. Moore, and E. Tziperman, 2012: Upper-ocean singular vectors of the North Atlantic climate with implications for linear predictability and variability. Quart. J. Roy. Met. Soc., 138, 
				500-513.</li>
				</ul>

				<h4>2011</h4>
				<ul class="bullet_list indent">
					<li>R. Abernathey, J. Marshall, and D. Ferreira, 2011: The dependence of Southern Ocean meridional overturning on wind stress. J. Phys. Oceanogr., 41, 2261-2278.</li>
					<li>A. Aretxabaleta and K. Smith, 2011: Analyzing state-dependent model-data comparison in multi-regime systems, Computational Geosciences, 15, 627-636.</li>
					<li>C. Bizouard, F. Remus, S. Lambert, L. Seoane, and D. Gambis, 2011: The Earth's variable Chandler wobble, Astronomy & Astrophysics, 526, doi:10.1051/0004-6361/201015894</li>
					<li>J. Campin, C. Hill, H. Jones, and J. Marshall, 2011: <a href="http://www-paoc.mit.edu/paoc/papers/superparam.pdf">Super-parameterization in ocean modeling: Application to deep convection.</a> Ocean Modelling, 36, 90-101.</li>
					<li>I. Cerovecki, L.D. Talley, and M.R. Mazloff, 2011: <a href="http://dx.doi.org/10.1175/2011JCLI3858.1">A Comparison of Southern Ocean Air-Sea Buoyancy Flux from an Ocean State Estimate with Five Other Products.</a> J. Clim., 24, 6283-6306.</li>
					<li>A. Condron and P. Winsor, 2011: <a href="http://ecco2.org/manuscripts/2011/CondronWinsor2011.pdf">A subtropical fate awaited freshwater discharged from glacial Lake Agassiz.</a> Geophys. Res. Lett., 38, L03705.</li>
					<li>X. Davis, L. Rothstein, W. Dewar, and D. Menemenlis, 2011: <a href="http://ecco2.org/manuscripts/2011/DavisJcli10.pdf">Numerical investigations of seasonal and interannual variability of North Pacific Subtropical Mode Water and its implications for Pacific climate variability.</a> J. Clim., 24, 2648-2665.</li>
					<li>S. Downes, A. Gnanadesikan, S. Griffies, and J. Sarmiento, 2011: Water Mass Exchange in the Southern Ocean in Coupled Climate Models, J Phys Oceanogr, 41, 1756-1771.</li>
					<li>S. Dutkiewicz, 2011: <a href="http://ecco2.org/manuscripts/2011/dutkiewicz_variations.pdf">Driving ecosystem and biogeochemical models with optimal state estimates of the ocean circulation.</a> U.S. CLIVAR Variations, 9, 1.</li>
					<li>M. Follows and S. Dutkiewicz, 2011: <a href="http://ocean.mit.edu/~mick/Papers/Follows-Dutkiewicz-AnnRevMarineSci-2011.pdf">Modeling diverse communities of marine microbes.</a> Annu. Rev. Mar. Sci., 427â€“451.</li>
					<li>G. Forget, G. Maze, M. Buckley, and J. Marshall, 2011: Estimated Seasonal Cycle of North Atlantic Eighteen Degree Water Volume. J. Phys. Oceanogr., 41, 269-286.</li>
					<li>S. Gao, T. Qu, and I. Fukumori, 2011: Effects of mixing on the subduction of South Pacific waters identified by a simulated passive tracer and its adjoint. Dyn. Atmos. Oceans., 54, 45-54.</li>
					<li>H. Gennerich and H. Villinger, 2011: <a href="http://ecco2.org/manuscripts/2011/Gennerich_2011.pdf">Deciphering the ocean bottom pressure variation in the Logatchev hydrothermal field at the eastern flank of the Mid-Atlantic Ridge.</a> Geochemistry Geophysics Geosystems, 12, doi:10.1029/2010GC003441.</li>
					<li>D. Halkides, T. Lee, and S. Kida, 2011: Mechanisms controlling the seasonal mixed-layer temperature and salinity of the Indonesian seas. Ocean Dynamics, 61, 481-495.</li>
					<li>P. Heimbach, C. Wunsch, R. Ponte, G. Forget, C. Hill, and J. Utke, 2011: Timescales and Regions of the Sensitivity of Atlantic Meridional Volume and Heat Transport Magnitudes: Toward Observing System Design. Deep Sea Res. II, 58, 1858-1879.</li>
					<li>G. Holloway, A. Nguyen, and Z. Wang, 2011: <a href="http://ecco2.org/manuscripts/2011/Holloway2011.pdf">Oceans and ocean models as seen by current meters.</a> J. Geophys. Res., 116, C00D08.</li>
					<li>S. Jin, L. Zhang, and B. Tapley, 2011: The understanding of length-of-day variations from satellite gravity and laser ranging measurements. Geophysical Journal International, 184, 651-660.</li>
					<li>T. Ito, R. Hamme, and S. Emerson, 2011: Temporal and spatial variability of noble gas tracers in the North Pacific. J. Geophys. Res., 116, doi:10.1029/2010jc006828</li>
					<li>M. Manizza, M. Follows, S. Dutkiewicz, D. Menemenlis, J. McClelland, C. Hill, B. Peterson, R. Key, 2011: <a href="http://ecco2.org/manuscripts/2011/Manizza2011.pdf">A model of the Arctic Ocean carbon cycle.</a> J. Geophys. Res., 116, C12020.</li>
					<li>A. Nguyen, D. Menemenlis, and R. Kwok, 2011: <a href="http://ecco2.org/manuscripts/2011/NguyenJGR2011.pdf">Arctic ice-ocean simulation with optimized model parameters: approach and assessment.</a>  J. Geophys. Res., 116, C04025.</li>
					<li>C. Piecuch and R. Ponte, 2011: Mechanisms of interannual steric sea level variability, Geophys. Res. Lett., 38, L15605.</li>
					<li>T. Qu, S. Gao, and I. Fukumori, 2011: What governs the North Atlantic salinity maximum in a global GCM? Geophys. Res. Lett., 38, L07602.</li>
					<li>K. Quinn and R. Ponte, 2011: Estimating high frequency ocean bottom pressure variability. Geophys Res Lett, 38, doi:10.1029/2010gl046537</li>
					<li>P. Rampal, J. Weiss, C. Dubois, and J.-M. Campin 2011: IPCC climate models do not capture Arctic sea ice drift acceleration: Consequences in terms of projected sea ice thinning and decline, J. Geophys. Res., vol. 116, C00D07.</li>
					<li>F. Roquet, C. Wunsch, and G. Madec, 2011: <a href="http://dx.doi.org/10.1175/JPO-D-11-024.1">On the patterns of wind-power input to the ocean circulation.</a> J. Phys. Oceanogr., 41, 2328-2342.</li>
					<li>G. Spreen, R. Kwok, and D. Menemenlis, 2011: <a href="http://ecco2.org/manuscripts/2011/Spreen2011.pdf">Trends in Arctic sea ice drift and role of wind forcing: 1992-2009.</a>  Geophys. Res. Lett., 38, L19501.</li>
					<li>R. Tulloch, J. Marshall, C. Hill, and K. Smith, 2011: <a href="http://ocean.mit.edu/~tulloch/Publications/tulloch_etaljpo11.pdf">Scales, growth rates and spectral fluxes of baroclinic instability in the ocean.</a> J. Phys. Oceanogr., 41, 1057-1076.</li>
					<li>C. Ubelmann and L. Fu, 2011: <a href="http://ecco2.org/manuscripts/2011/UbelmannFu2011a.pdf">Vorticity structures in the Tropical Pacific from a numerical simulation.</a> J. Phys. Oceanogr., 41, 1455.</li>
					<li>C. Ubelmann and L. Fu, 2011: <a href="http://ecco2.org/manuscripts/2011/UbelmannFu2011b.pdf">Cyclonic eddies formed at the Pacific tropical instability wave fronts.</a> J. Geophys. Res., 116, C12021.</li>
					<li>D. Volkov and L. Fu, 2011: <a href="http://ecco2.org/manuscripts/2011/VolkovFu2011.pdf">Interannual variability of the Azores Current strength and eddy energy in relation to atmospheric forcing.</a> J. Geophys. Res., 116, C11011.</li>
					<li>Z. Wang, G. Holloway, and C. Hannah, 2011: <a href="http://ecco2.org/manuscripts/2011/Wang2011.pdf">Effects of parameterized eddy stress on volume, heat, and freshwater transports through Fram Strait.</a> J. Geophys. Res., 116, C00D09.</li>
					<li>S. Williams and N. Penna, 2011: Non-tidal ocean loading effects on geodetic GPS heights. Geophys Res Lett, 38, doi:10.1029/2011gl046940</li>
					<li>X. Wu, X. Collilieux, Z. Altamimi, B. Vermeersen, R. Gross, and I. Fukumori, 2011: Accuracy of the International Terrestrial Reference Frame origin and Earth expansion. Geophys.  Res. Lett., 38, L13304.</li>
					<li>Y. Xu and L. Fu, 2011: <a href="http://ecco2.org/manuscripts/2011/XuFu2011.pdf">Global variability of the wavenumber spectrum of oceanic mesoscale turbulence.</a> J. Phys. Oceanogr., 41, 802-809.</li>
					<li>Y. Xu, L. Fu, and R. Tulloch, 2011: The global characteristics of the wavenumber spectrum of ocean surface wind. J. Phys. Oceanogr., 41, 1576-1582.</li>
					<li>L. Zanna, P. Heimbach, A. Moore, and E. Tziperman, 2011: Optimal excitation of interannual Atlantic meridional overturning circulation variability. J. Climate, 24, 413-423.</li>
				</ul>

				<h4>2010</h4>
				<ul class="bullet_list indent">
					<li>R. Abernathey, J. Marshall, M. Mazloff, and E. Shuckburgh, 2010: <a href="http://ams.allenpress.com/perlserv/?request=get-abstract&doi=10.1175%2F2009JPO4201.1">Enhancement of mesoscale eddy stirring at steering levels in the Southern Ocean.</a> J. Phys. Oceanogr., 40, 170-184.</li>
					<li>J. Baehr, 2010: Influence of the 26 degrees N RAPID-MOCHA Array and Florida Current Cable Observations on the ECCO-GODAE State Estimate. J Phys Oceanogr, 40, 865-879.</li>
					<li>L. Borreguero, R. Mottram, and I. Cvijanovic, 2010: <a href="http://www.mit.edu/~heimbach/papers/2010_acdc2010_eos_ocean_icesheet.pdf">Discussing progress in understanding ice sheet-ocean interactions.</a> EOS Trans. AGU, 91, 419 (Advanced Climate Dynamics Course - ACDC 2010, co-organized by P. Heimbach, MIT).</li>
					<li>J. Dickey, S. Marcus, and O. de Viron, 2010: Closure in the Earth's angular momentum budget observed from subseasonal periods down to four days: No core effects needed. Geophys Res Lett, 37, doi:10.1029/2009gl041118</li>
					<li>E. Douglass, D. Roemmich, and D. Stammer, 2010: Interannual variability in North Pacific heat and freshwater budgets. Deep-Sea Research Part I, 57, 1127-1140.</li>
					<li>M. Durand, L. Fu, D. Lettenmaier, D. Alsdorf, E. Rodriguez, and D. Fernandez, 2010: <a href="http://ecco2.org/manuscripts/2010/DurandIEEE2010.pdf">The Surface Water and Ocean Topography mission: observing terrestrial surface water and oceanic submesoscale eddies.</a> Proceedings of the IEEE, 766.</li>
					<li>B. Dushaw, W. Au, A. Beszczynska-Mâˆšâˆ‚ller, R. Brainard, B. Cornuelle, T. Duda, M. Dzieciuch, A. Forbes, L. Freitag, J. Gascard, A. Gavrilov, J. Gould, B. Howe, S. Jayne, O. Johannessen, J. Lynch, D. Martin, D. Menemenlis, P. Mikhalevsky, J. Miller, S. Moore, W. Munk, J. Nystuen, R. Odom, J. Orcutt, T. Rossby, H. Sagen, S. Sandven, J. Simmen, E. Skarsoulis, B. Southall, K. Stafford, R. Stephen, K. Vigness-Raposa, S. Vinogradov, K. Wong, P. Worcester, and C. Wunsch, 2010: <a href="http://ecco2.org/manuscripts/2009/DushawOceanObs09.pdf">A global ocean acoustic observing network.</a> Proceedings of OceanObs'09: Sustained Ocean Observations and Information for Society (Vol. 2).</li>
					<li>I. Fenty, 2010: <a href="http://ecco2.org/manuscripts/2010/FentyThesis.pdf">State estimation of the Labrador Sea with a coupled sea ice-ocean adjoint model.</a> Ph.D. thesis, MIT-WHOI Joint Program, Cambridge, MA.</li>
					<li>R. Ferrari and C. Wunsch, 2010: The distribution of eddy kinetic and potential energies in the global ocean. Tellus, 62A, 92-108.</li>
					<li>G. Forget, 2010: <a href="http://journals.ametsoc.org/doi/pdf/10.1175/2009JPO4043.1">Mapping ocean observations in a dynamical framework: A 2004-06 Ocean Atlas.</a> J. Phys. Oceanogr. 40, 1201-1221.</li>
					<li>A. Freeman, V. Zlotnicki, T. Liu, B. Holt, R. Kwok, S. Yueh, J. Vzquez, D. Siegel, and G. Lagerloef, 2010: <a href="http://www.tos.org/oceanography/articles/23-4_freeman.pdf">Ocean measurements from space in 2025.</a> Oceanography, 23, 144-161.</li>
					<li>J. Hausman and V. Zlotnicki, 2010: <a href="http://ecco2.org/manuscripts/2010/HausmanMarineGeodesy10.pdf">Sea state bias in radar altimetry revisited.</a> Marine Geodesy, 33, 336-347.</li>
					<li>P. Heimbach, D. Menemenlis, M. Losch, J. Campin, and C. Hill, 2010: <a href="http://ecco2.org/manuscripts/2010/ceaice_part2.pdf">On the formulation of sea-ice models. Part 2: Lessons from multi-year adjoint sea ice export sensitivities through the Canadian Arctic Archipelago.</a> Ocean Modelling, 33, 145-158.</li>
					<li>P. Heimbach, G. Forget, R. Ponte, and C. Wunsch (lead authors), 2010: Observational Requirements for global-scale ocean climate analysis: Lessons from ocean state estimation. Community White Paper in Proceedings of OceanObs09: sustained ocean observations and information for society, ESA publication WPP-306, doi:10.5270/OceanObs09.cwp.42.</li>
					<li>I. Hoteit, B. Cornuelle, and P. Heimbach, 2010: An Eddy-Permitting, Dynamically Consistent Adjoint-Based Assimilation System for the Tropical Pacific: Hindcast Experiments in 2000. J. Geophys. Res., 115, C03001.</li>
					<li>S. Jin, D. Chambers, and B. Tapley, 2010: Hydrological and oceanic effects on polar motion from GRACE and models. J. Geophys. Res., 115, doi:10.1029/2009jb006635.</li>
					<li>T. Lee, T. Awaji, M. Balmaseda, N. Ferry, Y. Fuji, I. Fukumori, B. Giese, P. Heimbach, A. Kohl, S. Masina, E. Remy, A. Rosati, M. Schodlok, D. Stammer, and A. Weaver, 2010: Consistency and fidelity of Indonesian-throughflow total volume transport estimated by 14 ocean data assimilation products. Dyn. Atmos. Ocean, 50, 201-223.</li>
					<li>T. Lee, D. Stammer, T. Awaji, M. Balmaseda, D. Behringer, J. Carton, N. Ferry, A. Fischer, I. Fukumori, B. Giese, K. Haines, E. Harrison, P. Heimbach, M. Kamachi, C. Keppenne, A. Kohl, S. Masina, D. Menemenlis, R. Ponte, E. Remy, M. Rienecker, A. Rosati, J. Schroeter, D. Smith, A. Weaver, C. Wunsch and Y. Xue,2010: <a href="http://ecco2.org/manuscripts/2009/LeeOceanObs09.pdf">Ocean state estimation for climate research.</a>  Proceedings of OceanObs'09: Sustained Ocean Observations and Information for Society (Vol. 2).</li>
					<li>M. Losch, D. Menemenlis, P. Heimbach, J. Campin, and C. Hill, 2010: <a href="http://ecco2.org/manuscripts/2010/ceaice_part1.pdf">On the formulation of sea-ice models. Part 1: Effects of different solver implementations and parameterizations.</a> Ocean Modelling, 33, 129-144.</li>
					<li>M. Mazloff, P. Heimbach, and C. Wunsch, 2010: An Eddy-Permitting Southern Ocean State Estimate. J. Phys. Oceanogr., 40, 880-899.</li>
					<li>A. McGuire, D. Hayes, D. Kicklighter, M. Manizza, Q. Zhuang, M. Chen, M. Follows, K. Gurney, J. McClelland, J. Melillo, B. Peterson, and R. Prinn, 2010: <a href="http://ecco2.org/manuscripts/2010/McGuireTellus2010.pdf">An analysis of the carbon balance of the Arctic Basin from 1997 to 2006.</a> Tellus B, 62, 5.</li>
					<li>D. Menemenlis, H. Zhang, P. Heimbach, C. Hill, J. Campin, G. Forget, M. Losch, A. Nguyen, and M. Schodlok, 2010: <a href="http://ecco2.org/manuscripts/2009/MenemenlisOceanObs09.pdf">Global ocean and sea ice state estimation in the presence of eddies.</a> OceanObs'09 Additional Contribution.</li>
					<li>T. Qu, S. Gao, I. Fukumori, R. Fine, and E. Lindstrom, 2010: The obduction of Equatorial 13Â°C Water in the Pacific identified by a simulated passive tracer. J. Phys. Oceanogr., 40, 2282- 2297.</li>
					<li>D. Stammer, A. Kohl, T. Awaji, M. Balmaseda, D. Behringer, J. Carton, N. Ferry, A. Fischer, I. Fukumori, B. Giese, K. Haines, E. Harrison, P. Heimbach, M. Kamachi, C. Keppenne, T. Lee, S. Masina, D. Menemenlis, R. Ponte, E. Remy, M. Rienecker, A. Rosati, J. Schroter, D. Smith, A. Weaver, C. Wunsch and Y. Xue ,2010: <a href="http://ecco2.org/manuscripts/2009/StammerOceanObs09.pdf">Ocean Information Provided Through Ensemble Ocean Syntheses.</a>  Proceedings of OceanObs'09: Sustained Ocean Observations and Information for Society (Vol. 2).</li>
					<li>M. Tamisiea, E. Hill, R. Ponte, J. Davis, I. Velicogna, and N. Vinogradova, 2010: Impact of self-attraction and loading on the annual cycle in sea level. J. Geophys. Res., 115, C07004.</li>
					<li>P. van der Werf, P. van Leeuwen, H. Ridderinkhof, and W. de Ruijter, 2010: <a href="http://www.agu.org/pubs/crossref/2010/2009JC005633.shtml">Comparison between observations and models of the Mozambique Channel transport: Seasonal cycle and eddy frequencies.</a> J. Geophys. Res., 115, C02002.</li>
					<li>N. Vinogradova, R. Ponte, M. Tamisiea, J. Davis, and E. Hill, 2010: Effects of self-attraction and loading on annual variations of ocean bottom pressure. J. Geophys. Res., 115, C06025, doi:10.1029/2009JC005783</li>
					<li>D. Volkov, L. Fu, and T. Lee, 2010: <a href="http://www.springerlink.com/content/l1rrrl8q23751136/">Mechanisms of the meridional heat transport in the Southern Ocean.</a> Ocean Dyn., 60, 791-801.</li>
					<li>D. Volkov and L. Fu, 2010: <a href="http://journals.ametsoc.org/doi/abs/10.1175/2010JPO4326.1">On the reasons for the formation and variability of the Azores Current.</a> J. Phys. Oceanogr., 40, 2197-2220.</li>
					<li>W. Wang, A. Kohl, and D. Stammer, 2010: Estimates of global ocean volume transports during 1960 through 2001. Geophys Res Lett, 37, doi:10.1029/2010gl043949</li>
					<li>J. Willis, 2010: <a href="http://www.agu.org/journals/ABS/2010/2010GL042372.shtml">Can in situ floats and satellite altimeters detect long-term changes in Atlantic Ocean overturning?</a> Geophys. Res. Lett., 37, L06602.</li>
					<li>C. Wunsch, 2010: Variability of the Indo-Pacific Ocean exchanges. Dynamics of Atmospheres and Oceans, 50, 157-173.</li>
					<li>C. Wunsch, 2010: Towards A Mid-Latitude Ocean Frequency-Wavenumber Spectral Density and Trend Determination. J. Phys. Oceanogr., 40, 2264-2281.</li>
					<li>C. Wunsch, 2010: Observational network design for climate. Plenary paper in Proceedings of OceanObs'09: sustained ocean observations and information for society, ESA publication WPP-306, doi:10.5270/OceanObs09.pp.41.</li>
					<li>L. Zanna, P. Heimbach, A. Moore, and E. Tziperman, 2010: Optimal growth of Atlantic SST anomalies in an idealized ocean GCM. J. Phys. Oceanogr., 40, 983-1003, doi:10.1175/2009JPO4196.1.</li>
				</ul>

				<h4>2009</h4>
				<ul class="bullet_list indent">
					<li>J. Baehr, S. Cunningham, H. Haak, P. Heimbach, T. Kanzow, and J. Marotzke, 2009: Observed and simulated daily variability of the meridional overturning circulation at 26.5N in the Atlantic.  Ocean Sci. 5, 575-589.</li>
					<li>A. Condron, P. Winsor, C. Hill, and D. Menemenlis, 2009: <a href="http://ecco2.org/manuscripts/2009/CondronJCL09.pdf">Simulated response of the Arctic freshwater budget to extreme NAO wind forcing.</a> J. Climate, 22, 2422-2437.</li>
					<li>J. Cummings, L. Bertino, P. Brasseur, I. Fukumori, M. Kamachi, M. J. Martin, K. Mogensen, P.  Oke, C. E. Testut, J. Verron, and A. Weaver, 2009: Ocean data assimilation systems for GODAE. Oceanography, 22, 96-109.</li>
					<li>E. Douglass, D. Roemmich, and D. Stammer, 2009: Data Sensitivity of the ECCO State Estimate in a Regional Setting. Journal of Atmospheric and Oceanic Technology, 26, 2420-2443.</li>
					<li>B. Dushaw, P. Worcester, W. Munk, R. Spindel, J. Mercer, B. Howe, K. Metzger, T. Birdsall, R. Andrew, M. Dzieciuch, B. Cornuelle, and D. Menemenlis, 2009: <a href="http://ecco2.org/manuscripts/2009/DushawJGR09.pdf">A decade of acoustic thermometry in the North Pacific Ocean.</a> J. Geophys. Res., 114, C07021.</li>
					<li>R. Ferrari, and C. Wunsch, 2009: Ocean Circulation Kinetic Energy: Reservoirs, Sources, and Sinks. Annu. Rev. Fluid Mech., 31, 253-282.</li>
					<li>L. Fu, 2009: <a href="http://ecco2.org/manuscripts/2009/FuJGR09.pdf">Pattern and velocity propagation of the global ocean eddy variability.</a> J. Geophys. Res., 114, C11017.</li>
					<li>N. Gruber, M. Gloor, S. Fletcher, S. Doney, S. Dutkiewicz, M. Follows, M. Gerber, A. Jacobson, F. Joos, K. Lindsay, D. Menemenlis, A. Mouchet, S. M&uuml;ller, J. Sarmiento, and T. Takahashi, 2009: <a href="http://ecco2.org/manuscripts/2009/GruberGBC09.pdf">Oceanic sources, sinks, and transport of atmospheric CO2.</a> Global Biogeochem. Cycles, 23, GB1005.</li>
					<li> D. Halkides and T. Lee, 2009: <a href="http://onlinelibrary.wiley.com/doi/10.1029/2008JC004949/abstract">Mechanisms controlling seasonal-to-interannual mixed layer temperature variability in the southeastern tropical Indian Ocean.</a> J. Geophys. Res., 114, C02012.</li>
					<li>P. Heimbach and V. Bugnion, 2009: Greenland ice sheet volume sensitivity to basal, surface, and initial conditions, derived from an adjoint model. Annals of Glaciology 50(52), 76-80.</li>
					<li>C. Kroner, M. Thomas, H. Dobslaw, M. Abe, and A. Weise, 2009: Seasonal effects of non-tidal oceanic mass shifts in observations with superconducting gravimeters. Journal of Geodynamics, 48, 354-359.</li>
					<li>M. Manizza, M. J. Follows, S. Dutckiewicz, J. W. McClelland, D. Menemenlis, C. N. Hill, A. Townsend-Small, and B. J. Peterson, 2009: <a href="http://ecco2.org/manuscripts/2009/ManizzaGBC09.pdf">Modeling transport and fate of riverine dissolved organic carbon in the Arctic Ocean.</a> Global Biogeochem. Cycles., 23, GB4006.</li>
					<li>G. Maze, G. Forget, M. Buckley and J. Marshall, 2009: Using transformation and formation maps to study water mass transformation: a case study of North Atlantic Eighteen Degree water. J. Phys. Oceanogr., 39(8), 1818-1835, doi:10.1175/2009JPO3985.1</li>
					<li>A. Nguyen, D. Menemenlis, and R. Kwok, 2009: <a href="http://ecco2.org/manuscripts/2009/NguyenJGR09.pdf">Improved modeling of the Arctic halocline with a sub-grid-scale brine rejection parameterization.</a> J. Geophys. Res., 114, C11014.</li>
					<li>R. Ponte, 2009. Rate of work done by atmospheric pressure on the ocean general circulation and tides, Journal of Physical Oceanography, 39, 458-464.</li>
					<li>R. Ponte and K. Quinn, 2009: <a href="http://www.agu.org/pubs/crossref/2009/2009GL039060.shtml">Bottom pressure changes around Antarctica and wind-driven meridional flows</a>.  Geophys. Res. Lett., 36, L13604.</li>
					<li>T. Qu, S. Gao, I. Fukumori, R. A. Fine, and E. J. Lindstrom, 2009: Origin and pathway of Equatorial 13Â°C Water in the Pacific identified by a simulated passive tracer and its adjoint, J. Phys. Oceanogr., 39, 1836-1853.</li>
					<li>G. Sannino, M. Herrmann, A. Carillo, V. Rupolo, V. Ruggiero, V. Artale and P. Heimbach, 2009:  An eddy-permitting model of the Mediterranean Sea with a two-way grid refinement at Gibraltar.  Ocean Modelling, 30, 56-72.</li>
					<li>J. Utke, L. Harscoet, P. Heimbach, C. Hill, P. Hovland and U. Naumann, 2009:  Toward adjointable MPI.  Proceedings of the 10th IEEE International Workshop on Parallel and Distributed Scientific and Engineering,  PDSEC-09, Rome, Italy, pp. 1-8.</li>
					<li>P. van der Werf, 2009: <a href="http://members.casema.nl/p.m.vanderwerf/Site/Oceanography_files/ProefschriftPMvanderWerf.pdf">Variability of the Mozambique Channel Throughflow.</a> Ph.D. thesis, Utrecht University, The Netherlands.</li>
					<li>P. van der Werf, M. Schouten, P. van Leeuwen, H. Ridderinkhof, and W. de Ruijter, 2009: Observation and origin of an interannual salinity anomaly in the Mozambique Channel, J. Geophys. Res., 114, C03017.</li>
					<li>C. Wunsch, 2009: The Oceanic Variability Spectrum and Transport Trends. Atmosphere-Ocean, 47(4), 281-291, doi:10.3137/OC310.2009.</li>
					<li>C. Wunsch, P. Heimbach, R. Ponte, and I. Fukumori, 2009: <a href="http://ecco2.org/manuscripts/2009/WunschOceanog09.pdf">The global general circulation of the ocean estimated by the ECCO-consortium.</a> Oceanography, 22, 88-103.</li>
					<li>C. Wunsch and P. Heimbach, 2009: The globally integrated ocean circulation (MOC), 1992-2006: seasonal and decadal variability. J. Phys. Oceanogr., 39, 351-368, doi:10.1175/2008JPO4012.1.</li>
				</ul>

				<h4>2008</h4>
				<ul class="bullet_list indent">
					<li>G. Boezio, D. Menemenlis, and C. Mechoso, 2008: <a href="http://ecco2.org/manuscripts/2008/CazesJCL08.pdf">Impact of ECCO Ocean State Estimates on the Initialization of Seasonal Climate Forecasts.</a> J. Climate, 21, 1929-1947.</li>
					<li>C. Cabanes, T. Lee, and L. Fu, 2008: Mechanisms of interannual variations of the meridional overturning circulation of the North Atlantic Ocean. J. Phys. Oceanogr., 38, 467-480.</li>
					<li>J. Campin, J. Marshall, and D. Ferreira, 2008: <a href="http://paoc.mit.edu/paoc/papers/seaiceLoading.pdf">Sea-ice ocean coupling using a rescaled vertical coordinate z*</a>, Ocean Modeling, 24, 1-14.</li>
					<li>G. Danabasoglu, R. Ferrari, and J. McWilliams, 2008: Sensitivity of an ocean general circulation model to a parameterization of near-surface eddy fluxes. J. Climate, 21, 1192-1208.</li>
					<li>X. Davis, 2008: <a href="http://ecco2.org/manuscripts/2008/DavisThesis.pdf">Numerical and theoretical investigations of North Pacific Subtropical Mode Water with implications to Pacific climate variability.</a> Ph.D. thesis, University of Rhode Island, Kingston, RI.</li>
					<li>G. Forget, B. Ferron, and H. Mercier, 2008: Combining ARGO profiles with a general circulation model in the North Atlantic. Part 1: Estimation of hydrographic and circulation anomalies from synthetic profiles, over a year. Ocean Modelling, 20, 1-16.</li>
					<li>G. Forget, H. Mercier and B. Ferron, 2008: Combining ARGO profiles with a general circulation model in the North Atlantic. Part 2: Realistic transports and improved hydrography, between spring 2002 and spring 2003. Ocean Modelling, 20, 17-34.</li>
					<li>B. Fox-Kemper and D. Menemenlis, 2008: <a href="http://ecco2.org/manuscripts/2008/FoxKemperMenemenlis08.pdf">Can Large Eddy Simulation Techniques Improve Mesoscale Rich Ocean Models?</a> Ocean Modeling in an Eddying Regime, ed. Matthew Hecht & Hiroyasu Hasumi, American Geophysical Union, 319-338.</li>
					<li>P. Heimbach, 2008: <a href="http://eprints.soton.ac.uk/50120/01/Exch_44.pdf">The MITgcm/ECCO adjoint modeling infrastructure.</a> CLIVAR Exchanges, 44, 13-17.</li>
					<li>I. Hoteit, B. Cornuelle, V. Thierry, and D. Stammer, 2008: Impact of resolution and optimized ECCO forcing on Simulations of the tropical pacific. J Atmos Ocean Tech, 25, 131-147.</li>
					<li>S. Kim and I. Fukumori, 2008: A near uniform basin-wide sea level fluctuation over the Japan/East Sea: A semi-enclosed sea with multiple straits. J. Geophys. Res., 113, C06031.</li>
					<li>A. Kohl and D. Stammer, 2008: Decadal sea level changes in the 50-year GECCO ocean synthesis. Journal of Climate, 21, 1876-1890.</li>
					<li>A. Kohl and D. Stammer, 2008: Variability of the meridional overturning in the North Atlantic from the 50-year GECCO state estimation. J Phys Oceanogr, 38, 1913-1930.</li>
					<li>C. Kuo, C. Shum, J. Guo, Y. Yi, A. Braun, I. Fukumori, K. Matsumoto, T. Sato, and K. Shibuya, 2008: Southern Ocean Mass Variation Studies Using GRACE and Satellite Altimetry. Earth, Planets, and Space, 60, 477-485.</li>
					<li>R. Kwok, E. Hunke, W. Maslowski, D. Menemenlis, and J. Zhang, 2008: <a href="http://ecco2.org/manuscripts/2008/Kwok.2008c.JGR.pdf">Variability of sea ice simulations assessed with RGPS kinematics.</a> J. Geophys. Res., 131, C11012.</li>
					<li>M. Losch, 2008: Modeling ice shelf cavities in a z coordinate ocean general circulation model. J. Geophys. Res., 113, C08043.</li>
				 
					<li>M. Mazloff, 2008: <a href="http://web.mit.edu/mmazloff/Public/MazThesis.pdf">The Southern Ocean meridional overturning circulation as diagnosed from an eddy permitting state estimate.</a> Ph.D. thesis, Massachusetts Institute of Technology and the Woods Hole Oceanographic Institution, Cambridge, MA.</li>
					<li>D. Menemenlis, J. Campin, P. Heimbach, C. Hill, T. Lee, A. Nguyen, M. Schodlok, and H. Zhang, 2008: <a href="http://ecco2.org/manuscripts/reports/ECCO2_Mercator.pdf">ECCO2: High resolution global ocean and sea ice data synthesis.</a> Mercator Ocean Quarterly Newsletter, 31, 13-21.</li>
					<li>K. Quinn and R.M. Ponte, 2008. Estimating weights for the use of time-dependent GRACE data in constraining ocean models, J. Geophys. Res., 113, C12013.</li>
					<li>F. Schott, L. Stramma, W. Wang, B. Giese, and R. Zantopp, 2008: Pacific Subtropical Cell variability in the SODA 2.0.2/3 assimilation. Geophys Res Lett, 35, doi:10.1029/2008gl033757</li>
					<li>D. Stammer, S. Park, A. Kohl, R. Lukas, and F. Santiago-Mandujano, 2008: Causes for large-scale hydrographic changes at the Hawaii Ocean time series station. J Phys Oceanogr, 38, 1931-1948.</li>
					<li>J. Utke, U. Naumann, M. Fagan, N. Thallent, M. Strout, P. Heimbach, C. Hill, and C. Wunsch, 2008: OpenAD/F: A modular, open-source tool for automatic differentiation of Fortran codes.  ACM Transactions on Mathematical Software (TOMS), 34, doi:10.1145/1377596.1377598</li>
					<li>S. Vinogradov, R. Ponte, P. Heimbach, and C. Wunsch, 2008: The mean seasonal cycle in sea level estimated from a data-constrained general circulation model.  J. Geophys. Res., 113, C03032.</li>
					<li>D. Volkov and L. Fu, 2008: <a href="http://ecco2.org/manuscripts/2008/VolkovJGR08.pdf">The role of vorticity fluxes in the dynamics of the Zapiola Anticyclone.</a> J. Geophys. Res., 113, C11015.</li>
					<li>D. Volkov, T. Lee, and L. Fu, 2008: <a href="http://ecco2.org/manuscripts/2008/VolkovGRL08.pdf">Eddy-induced meridional heat transport in the ocean.</a> Geophys. Res. Lett., 35, L20601.</li>
					<li>L. White and A. Adcroft, 2008: <a href="http://ecco2.org/manuscripts/2008/white_adcroft_JCP08.pdf">A high-order finite volume remapping scheme for nonuniform grids: the piecewise quartic method (PQM).</a> Journal of Computational Physics, revised.</li>
					<li>C. Wunsch, 2008: Mass transport variability in an eddy-filled ocean. Nature Geoscience, 1, 165-168.</li>
					<li>C. Wunsch and P. Heimbach, 2008:  How Long to Oceanic Tracer and Proxy Equilibrium?  Quaternary Science Reviews, 27, 637-651.</li>
					<li>C. Wunsch and P. Heimbach, 2008: Reply to Saunders et al.s Comments on Decadal changes in the North Atlantic meridional overturning circulation and heat flux. J. Phys. Oceanogr., 38, 2108-2110.</li>
				</ul>

				<h4>2007</h4>
				<ul class="bullet_list indent">
					<li>G. Danabasoglu and J. Marshall, 2007: <a href="http://paoc.mit.edu/paoc/papers/om.pdf">Effects of vertical variations of thickness diffusivity in an ocean general circulation model.</a> Ocean Modelling, 18, 122-141.</li>
					<li>L. Fenoglio-Marc, J. Kusche, M. Becker, and I. Fukumori, 2007: Comment on â€œOn the steric and mass-induced contributions to the annual sea level variations in the Mediterranean Seaâ€ by David Garcia et al. J. Geophys. Res., 112, C1208.</li>
					<li>S. Fletcher, N. Gruber, A. Jacobson, M. Gloor, S. Doney, S. Dutkiewicz, M. Gerber, M. Follows, F. Joos, K. Lindsay, D. Menemenlis, A. Mouchet, S. Muller, and J. Sarmiento, 2007: <a href="http://ecco2.org/manuscripts/2007/fletcher_pi.pdf">Inverse estimates of the oceanic sources and sinks of natural CO2 and their implied oceanic transport.</a> Global Biogeochem. Cycles, 21, GB1010.</li>
					<li>G. Forget and C. Wunsch, 2007: <a href="http://dx.doi.org/10.1175/JPO3072.1" target="_blank">Estimated global hydrographic variability.</a> J.  Phys. Oceanogr., 37, 1997-2008.</li>
					<li>I. Fukumori, D. Menemenlis, and T. Lee, 2007: <a href="http://ecco2.org/manuscripts/2007/medsea.pdf">A near-uniform basin-wide sea level fluctuation of the Mediterranean Sea.</a> J. Phys. Oceanogr., 37, 338-358.</li>
					<li>G. Gebbie, 2007: <a href="http://dx.doi.org/10.1029/2006JC003568" target="_blank">Does Eddy Subduction Matter in the Northeast Atlantic Ocean?</a> J. Geophys. Res., 112, C06007.</li>
					<li>P. Heimbach and C. Wunsch, 2007: Estimating the Circulation and Climate of the Ocean - The ECCO Consortia. U.S. CLIVAR Variations, 5, 1-5.</li>
					<li>C. Hill, D. Menemenlis, B. Ciotti, and C. Henze, 2007. <a href="http://ecco2.org/manuscripts/2007/Hill_etal_07_SciProg.pdf">Investigating solution convergence in a global ocean model using a 2048-processor cluster of distributed shared memory machines.</a> Scientific Programming, 12, 107-115.</li>
					<li>E. Johnson, F. Bonjean, G. Lagerloef, J. Gunn, and G. Mitchum, 2007: Validation and error analysis of OSCAR sea surface currents. J Atmos Ocean Tech, 24, 688-701.</li>
					<li>S. Kim, T. Lee, and I. Fukumori, 2007: Mechanisms controlling the interannual variation of mixed layer temperature averaged over the NINO3 region. J. Climate, 20, 3822-3843.</li>
					<li>A. Kohl, D. Stammer, and B. Cornuelle, 2007: Interannual to decadal changes in the ECCO global synthesis. J Phys Oceanogr, 37, 313-337.</li>
					<li>M. Losch and P. Heimbach, 2007: <a href="http://dx.doi.org/10.1175/JPO3017.1" target="_blank">Adjoint sensitivity of an ocean general circulation model to bottom topography.</a> J. Phys. Oceanogr., 37, 377-393.</li>
					<li>J. Ma, Y. Zhou, D. Liao, and J. Chen, 2007: Excitation of annual polar motion by the Pacific, Atlantic and Indian Oceans. Chinese Journal of Astronomy and Astrophysics, 7, 831-838.</li>
					<li>D. Menemenlis, I. Fukumori, and T. Lee, 2007: <a href="http://ecco2.org/manuscripts/2007/gibraltar.pdf">Atlantic to Mediterranean sea level difference driven by winds near Gibraltar Strait.</a> J. Phys. Oceanogr., 37, 359-376.</li>
					<li>R. Ponte and S. Vinogradov, 2007: <a href="http://dx.doi.org/10.1175/JPO3010.1" target="_blank">Effects of stratification on the large-scale ocean response to barometric pressure.</a> J. Phys. Oceanogr., 37, 245-258.</li>
					<li>R. Ponte, C. Wunsch, and D.Stammer, 2007: <a href="http://dx.doi.org/10.1175/JTECH2029.1" target="_blank">Spatial mapping of time-variable errors in Jason-1 and TOPEX/POSEIDON sea surface height measurements.</a> J. Atmos. Ocean. Technol., 24, 1078-1085.</li>
					<li>R. Ponte, K. Quinn, C. Wunsch, and P. Heimbach, 2007: <a href="http://dx.doi.org/10.1029/2007GL029599" target="_blank">A comparison of model and GRACE estimates of the large-scale seasonal cycle in ocean bottom pressure.</a>  Geophys. Res. Lett., 34, L09603.</li>
					<li>F. Schott, W. Wang, and D. Stammer, 2007: Variability of Pacific subtropical cells in the 50-year ECCO assimilation. Geophys Res Lett, 34, doi:10.1029/2006gl028478</li>
					<li>D. Stammer, A. Koehl, and C. Wunsch, 2007: <a href="http://dx.doi.org/10.1175/JTECH2044.1" target="_blank">Impact of Accurate Geoid Fields on Estimates of the Ocean Circulation.</a> J. Atmos. Ocean. Technol., 24, 1464-1478.</li>
					<li>M. Suarez, A. Trayanov, C. Hill, P. Schopf, and Y. Vikhliaev, 2007: <a href="http://ecco2.org/manuscripts/2007/p11-suarez.pdf">MAPL - A High-level Programming Paradigm to Support More Rapid and Robust Encoding of Hierarchical Trees of Interacting High-performance Components.</a> HPC GECO/CompFrame'07 Proceedings.</li>
					<li>C. Wunsch, 2007: The Past and Future Ocean Circulation from a Contemporary Perspective. in Ocean Circulation: Mechanisms and Impacts. AGU Geophysical Monograph Series, Vol. 173, pp. 53-74.</li>
					<li>C. Wunsch and P. Heimbach, 2007: <a href="http://dx.doi.org/10.1016/j.physd.2006.09.040" target="_blank">Practical global ocean state estimation.</a> Physica D, 230, 197-208.</li>
					<li>C. Wunsch, R. Ponte, and P. Heimbach, 2007: <a href="http://ocean.mit.edu/~cwunsch/papersonline/sea_level_5may2007.pdf" target="_blank">Decadal trends in sea level patterns: 1993-2004.</a> J. Clim., 20, 5889-5911</li>
					<li>V. Zlotnicki, J. Wahr, I. Fukumori, and Y. Song, 2007: Antarctic circumpolar current transport variability during 2003-05 from GRACE. J. Phys. Oceanogr., 37, 230-244.</li>
				</ul>

				<h4>2006</h4>
				<ul class="bullet_list indent">
					<li>N. Ayoub, 2006: <a href="http://dx.doi.org/10.1016/j.ocemod.2005.06.003" target="_blank">Estimation of boundary values in a North Atlantic circulation model using an adjoint model.</a> Ocean Modelling, 12, 319-347.</li>
					<li>V. Bugnion, C. Hill, and P. Stone, 2006: An adjoint analysis of the meridional overturning circulation in an ocean model. J. Climate, 19, 3732-3750.</li>
					<li>E. Douglass, D. Roemmich, and D. Stammer, 2006: Interannual variability in northeast pacific circulation. Journal of Geophysical Research, doi:111 10.1029/2005jc003015</li>
					<li>S. Dutkiewicz, M.J. Follows, P. Heimbach and J. Marshall, 2006: <a href="http://dx.doi.org/10.1029/2005GL024987" target="_blank">Controls on ocean productivity and air-sea carbon flux: An adjoint model sensitivity study.</a> Geophys. Res. Lett., 33, L02603.</li>
					<li>D. Ellsworth, B. Green, C. Henze, P. Moran, and T. Sandstrom, 2006: Concurrent Visualization in a Production Supercomputing Environment. IEEE Trans. Visualization and Computer Graphics, 12, 997-1004.</li>
					<li>D. Ferreira and J. Marshall, 2006: <a href="http://paoc.mit.edu/paoc/papers/Residual_to_sub.pdf">Formulation and implementation of a residual-mean ocean circulation model.</a> Ocean Modelling, 13, 86-107.</li>
					<li>S. Fletcher, N. Gruber, A. Jacobson, S. Doney, S. Dutkiewicz, M. Gerber, M. Follows, F. Joos, K. Lindsay, D. Menemenlis, A. Mouchet, S. Muller, and J. Sarmiento, 2006: <a href="http://ecco2.org/manuscripts/2006/MikaloffGCB06.pdf">Inverse estimates of anthropogenic CO2 uptake, transport, and storage by the ocean.</a> Global Biogeochem. Cycles, 20, GB2002.</li>
					<li>L. Fu, 2006: <a href="http://dx.doi.org/10.1029/2006GL026245" target="_blank">Pathways of eddies in the South Atlantic revealed from satellite altimeter observations.</a> Geophys. Res. Lett., 33, L14610.</li>
					<li>I. Fukumori, 2006: What is data assimilation really solving, and how is the calculation actually done? in â€œOcean Weather Forecasting: An Integrated View of Oceanographyâ€, E. P. Chasignet and J.Verron, Eds., Springer, 578pp.</li>
					<li>G. Gebbie, P. Heimbach and C. Wunsch, 2006: <a href="http://dx.doi.org/10.1029/2005JC003094" target="_blank">Strategies for nested and eddy-resolving state estimation.</a> J. Geophys. Res., 111, C10073.</li>
					<li>P. Heimbach, R. Ponte, C. Evangelinos, G. Forget, M. Mazloff, D. Menemenlis, S. Vinogradov and C. Wunsch, 2006: <a href="http://earth.esa.int/workshops/venice06/participants/333/paper_333_wunsch.pdf" target="_blank">Combining Altimetric and All Other Data with a General Circulation Model.</a> in: Proceedings of the <a href="http://earth.esa.int/cgi-bin/confalt15y.pl?abstract=333" target="_blank">15 Years of Progress in Radar Altimetry Symposium</a>, Venice, 13-18 March 2006, ESA Special Publication SP-614, ISBN 92-9092-925-1. ESA Publications Division, ESTEC, 2200 AG Noordwijk, The Netherlands.</li>
					<li>E. Hill, D. Enderton, P. Heimbach, and C. Hill, 2006: SPGrid: <a href="http://ecco2.org/manuscripts/2006/gridding_notes.pdf">A numerical grid generation program for domain decomposed geophysical fluid dynamics models.</a> Unpublished manuscript.</li>
					<li>S. Kim, I. Fukumori, and T. Lee, 2006: The closure of ocean mixed layer temperature budget using level-coordinate model fields. J. Atmos. Oceanic. Tech., 23, 840-853.</li>
					<li>N. Krakauer, J. Randerson, F. Primeau, N. Gruber, and D. Menemenlis, 2006: <a href="http://ecco2.org/manuscripts/2006/Nir_gasexchange_06_Tellus.pdf">Carbon isotope evidence for the latitudinal distribution and wind speed dependence of the air-sea gas transfer velocity.</a> Tellus, 58B, 390-417.</li>
					<li>R. Kwok, G. Cunningham, H. Zwally, and D. Yi, 2006: <a href="http://dx.doi.org/10.1029/2005JC003175" target="_blank">ICESat over Arctic sea ice: Interpretation of altimetric and reflectivity profiles.</a> J. Geophys. Res., 111.</li>
					<li>C. Manoj, A. Kuvshinov, S. Maus, and H. Luhr, 2006: Ocean circulation generated magnetic signals. Earth Planets Space, 58, 429-437.</li>
					<li>K. Matsumoto, T. Sato, H. Fujimoto, Y. Tamura, M. Nishino, R. Hino, T. Higashi, and T. Kanazawa, 2006: Ocean bottom pressure observation off Sanriku and comparison with ocean tide models, altimetry, and barotropic signals from ocean models. Geophys Res Lett, 33, doi:10.1029/2006gl026706</li>
					<li>M. Mazloff, 2006: <a href="http://web.mit.edu/mmazloff/Public/msthesis_mazloff.pdf">Production and analysis of a southern ocean state estimate.</a> Master's thesis, Massachusetts Institute of Technology and the Woods Hole Oceanographic Institution, Cambridge, Massachusetts.</li>
					<li>U.  Naumann, J. Utke, P. Heimbach, C. Hill, D. Ozyurt, C. Wunsch, M. Fagan, N. Tallent and M. Strout, 2006: <a href="http://sunsite.informatik.rwth-aachen.de/Publications/AIB/2006/2006-05.pdf" target="_blank">Adjoint code by source transformation with OpenAD/F.</a> In: European Conference on Computational Fluid Dynamics ECCOMAS CFD 2006 Eds: P. Wesseling, E. Onate and J. Periaux. Delft, The Netherlands.</li>
					<li>R. Ponte, 2006: <a href="http://dx.doi.org/10.1175/JPO2843.1" target="_blank">Oceanic response to surface loading effects neglected in volume-conserving models.</a> J. Phys.  Oceanogr., 36, 426-434.</li>
					<li>D. Stammer, C. Wunsch, and K. Ueyoshi,  2006: <a href="http://dx.doi.org/10.1175/JPO2858.1" target="_blank">Temporal changes in ocean eddy transports.</a> J. Phys. Oceanogr., 36, 543-550.</li>
					<li>H. Takiguchi, T. Otsubo, and Y. Fukuda, 2006: Mass-redistribution-induced crustal deformation of global satellite laser ranging stations due to non-tidal ocean and land water circulation, Earth Planets Space, 58, E13-E16.</li>
					<li>B. Thompson, C. Gnanaseelan, and P. Salvekar, 2006: Variability in the Indian Ocean circulation and salinity and its impact on SST anomalies during dipole events Journal of Marine Research, 64, 853-880.</li>
					<li>X. Wu, M. Heflin, E. Ivins, and I. Fukumori, 2006: Seasonal and interannual global surface mass variations from multisatellite geodetic data. J. Geophys. Res., 111, B09401.</li>
					<li>C. Wunsch, 2006: Discrete Inverse and  State Estimation Problems: With Geophysical Fluid Applications. 384p. Cambridge  University Press.</li>
					<li>C. Wunsch, 2006: <a href="http://ocean.mit.edu/~cwunsch/papersonline/towardswoce.pdf" target="_blank">Towards the  World Ocean Circulation Experiment and a bit of aftermath.</a> in: Physical  Oceanography: Developments since 1950. M. Jochum and R. Murtugudde (Eds.),  Springer-Verlag.</li>
					<li>C. Wunsch, 2006: <a href="http://earth.esa.int/workshops/venice06/participants/332/paper_332_wunsch.pdf" target="_blank">Altimetry:  Past, Present, and Future</a> in: Proceedings of the <a href="http://earth.esa.int/cgi-bin/confalt15y.pl?abstract=333" target="_blank">15 Years of  Progress in Radar Altimetry Symposium</a>, Venice, 13-18 March 2006, ESA  Special Publication SP-614, ISBN 92-9092-925-1. ESA Publications Division,  ESTEC, 2200 AG Noordwijk, The Netherlands.</li>
					<li>C. Wunsch and P. Heimbach, 2006: <a href="http://dx.doi.org/10.1175/JPO2957.1" target="_blank">Decadal Changes in the North Atlantic Meridional Overturning and Heat Flux.</a> J. Phys. Oceanogr., 36, 2012-2024.</li>
					<li>M. Zhong, H. Yan, X. Wu, J. Duan, and Y. Zhu, 2006: Non-tidal oceanic contribution to polar wobble estimated from two oceanic assimilation data sets. Journal of Geodynamics, 41, 147-154.</li>
				</ul>

				<h4>2005</h4>
				<ul class="bullet_list indent">
					<li>D. Ferreira, J. Marshall and P. Heimbach, 2005: <a href="http://dx.doi.org/10.1175/JPO2785.1"  target="_blank">Estimating eddy stresses by fitting dynamics to observations using a  residual-mean ocean circulation model and its adjoint.</a> J. Phys. Oceanogr.,  35, 1891-1910.</li>
					<li>R. Glazman and Y. Golubev, 2005: <a href="http://ecco2.org/manuscripts/2005/2005JC002926.pdf">Variability of the ocean-induced magnetic field predicted at sea surface and at satellite altitudes</a>. J. Geophys. Res., 110, C12011.</li>
					<li>R. Gross, I. Fukumori, and D. Menemenlis, 2005: <a href="http://ecco2.org/manuscripts/2005/2004JB003565.pdf">Atmospheric and oceanic excitation of decadal-scale earth orientation variations.</a> J. Geophys. Res., 110, B09405.</li>
					<li>P. Heimbach, C. Hill and R. Giering, 2005: <a href="http://dx.doi.org/10.1016/j.future.2004.11.010" target="_blank">An  efficient exact adjoint of the parallel MIT general circulation model, generated via automatic differentiation.</a> Future Generation Computer Systems (FGCS), 21, 1356-1371.</li>
					<li>J. Marshall, 2005: <a href="http://paoc.mit.edu/paoc/papers/climode_summary.pdf">CLIMODE: a mode water dynamics experiment in support of CLIVAR.</a> Clivar Variations, 3, 8-14.</li>
					<li>D. Menemenlis, I. Fukumori, and T. Lee, 2005: <a href="http://ecco2.org/manuscripts/2005/green.pdf">Using Green's functions to calibrate an ocean general circulation model.</a> Mon. Weather Rev., 133, 1224-1240.</li>
					<li>D. Menemenlis, C. Hill, A. Adcroft, J.M. Campin, B. Cheng, B. Ciotti, I. Fukumori, A. Koehl, P. Heimbach, C. Henze, T. Lee, D.  Stammer, J. Taft, and J. Zhang, 2005: <a href="http://ecco2.org/manuscripts/2005/EOSecco.pdf" target="_blank">NASA supercomputer improves prospects for ocean climate research.</a> EOS Transactions AGU, 86, 89.</li>
					<li>C. Wunsch, 2005: <a href="http://dx.doi.org/10.1175/JCLI3539.1" target="_blank">The Total Meridional Heat Flux and  Its Oceanic and Atmospheric Partition.</a> J. Clim., 18, 4374-4380.</li>
					<li>Y. Zhou, J. Chen, X. Liao, and C. Wilson, 2005: Oceanic excitations on polar motion: a cross comparison among models, Geophysical Journal International, 162, 390-398.</li>
				</ul>

				<hr>
				<h3 id="godae" class="named-anchor">ECCO-GODAE @ JPL (1993-2009)</h3>

				<h4>2009</h4>
				<ul class="bullet_list indent">
					<li>T. Lee and 26 others, 2009: Ocean state estimation for climate research. OceanObs'09 Community White Paper. 
					<li>I. Fenty, et al., 2009: Assimilation of sea ice concentration observations in a coupled ocean-sea ice model using the adjoint method,MOCA-09 Joint Assembly, Montreal.
					<li>P. Heimbach, et al.,2009: Production of ECCO-GODAE ocean state estimatesand their application to studies of decadal variabilit, MOCA-09 Joint Assembly, Montreal.
				</ul>

				<h4>2008</h4>
				<ul class="bullet_list indent">
					<li>Hoteit, I., B. Cornuelle, and P. Heimbach, 2008: An eddy-permitting, dynamically consistent hindcast of the Tropical Pacific in 2000 using an adjoint-based assimilation system. J. Geophys. Res., submitted.</li>
					<li>P. Heimbach, 2008: <a href="http://eprints.soton.ac.uk/50120/01/Exch_44.pdf"> The MITgcm/ECCO adjoint modeling infrastructure.</a> CLIVAR Exchanges, 44, 13-17.</li>
					<li>Utke, J., U. Naumann, M. Fagan, N. Thallent, M. Strout, P. Heimbach, C. Hill and C. Wunsch, 2008: OpenAD/F: A modular, open-source tool for automatic differentiation of Fortran codes. ACM Transactions on Mathematical Software (TOMS), 34(4), doi:10.1145/1377596.1377598</li>
					<li>Wunsch, C., P. Heimbach, R. Ponte, I. Fukumori and the ECCO-GODAE Consortium members, 2008: The global general circulation of the ocean estimated by the ECCO Consortium. Oceanography, submitted.</li>
				</ul>

				<h4>2006</h4>
				<ul class="bullet_list indent">
					<li>Kim, S. B., I. Fukumori and T. Lee, 2006: The closure of the ocean mixed layer temperature budget using level-coordinate model fields, J. Atmos. Oceanic Tech., 23, 840-853.</li>
					<li>Fukumori, I., 2006.  What is data assimilation really solving, and how is the calculation actually done?, in "Ocean Weather Forecasting: An Integrated View of Oceanography", E. P. Chasignet and J.Verron, Eds., Springer, 578pp.</li>
					<li>Fukumori, I., D. Menemenlis, T. Lee, 2006: A near-uniform basin-wide sea level fluctuation of the Mediterranean Sea. J. Phys. Oceanogr. (in press).</li>
					<li>Menemenlis, D., I. Fukumori, T. Lee, 2006: Atlantic to Mediterranean sea level difference driven by winds near Gilbraltar Strait. J. Phys. Oceanogr. (in press).</li>
					<li>Cheng, B., 2006: A Duality Between Forward and Adjoint MPI Communication Routines, Comp. Methods in Sci. and Tech., (in press).</li>
					<li>Kim, S.B., T. Lee and I. Fukumori, 2006: Mechanisms controlling the interannual variation of mixed layer temperature averaged over the NINO3 region, J. Clim., (submitted).</li>
					<li>Zlotnicki, V., J. Wahr, I. Fukumori, and Y. T. Song, 2006.  The Antarctic Circumpolar Current: transport variability during 2003-2005, J. Phys. Oceanogr., (in press).</li>
					<li>Wu, X., M. B. Heflin, E. R. Ivins, and I. Fukumori, 2006. Seasonal and interannual global surface mass variations from multisatellite geodetic data, J. Geophys. Res., 111, B09401, doi:10.1029/2005JB004100.</li>
					<li>Krakauer, N. Y., J. T. Randerson, F. W. Primeau, N. Gruber, and D. Menemenlis, 2006.  Carbon isotope evidence for the latitudinal distribution and wind speed dependence of the air-sea gas transfer velocity, Tellus, (in press).</li>
					<li>Mikaloff Fletcher, S. E., and et al., 2006. Inverse estimates of anthropogenic CO2 updake, transport, and storage by the ocean, Glob. Biogeochem. Cyc., 20, GB2002, doi:10.1029/2005GB002530.</li>
					<li>Gruber, N., et al., 2006.  Oceanic sources and sinks of atmospheric CO2, J. Geophys. Res., (submitted).</li>
					<li>Mikaloff Fletcher, S. E., et al., 2006. Inverse estimates of the oceanic sources and sinks of natural CO2 and their implied oceanic transport, Glob. Biogeochem. Cyc., (submitted).</li>
					<li>Hill, C., D. Menemenlis, R. Ciott, and C. Henze, 2006.  Investigating solution convergence in a global ocean model using a 2048-processor cluster of distributed shared memory machines, J. Sci. Prog., (submitted).</li>
					<li>Cazes-Boezio, G., D. Menemenlis, and C. R. Mechoso, 2006.  Impact of ECCO ocean state estimates on the initialization of seasonal climate forecasts, J. Clim., (submitted).</li>
				</ul>

				<h4>2005</h4>
				<ul class="bullet_list indent">
					<li>Lee, T., and W. T. Liu, 2005: Effects of high-frequency wind sampling on simulated mixed-layer depth and upper-ocean temperature. J. Geophys. Res., 110, C05002, doi: 10.1029/2004JC002746.</li>
					<li>Menemenlis, D., I. Fukumori, and T. Lee, 2005: Using Green's functions to calibrate an ocean general circulation model. Mon. Weather. Rev., 133, 1224-1240</li>
					<li>Menemenlis, D., C. Hill, A. Adcroft, J.-M. Campin, B. Cheng, B. Ciotti, I. Fukumori, P. Heimbach, C. Henze, A. Kohl, T. Lee, D. Stammer, J. Taft, and J. Zhang, 2005: NASA Supercomputer improves prospects for ocean climate research. EOS, Trans., Amer. Geophys. Union. 86, No. 9, 89-91, March 1, 2005.</li>
					<li>Hirose, N., I. Fukumori, C. H. Kim, J.-H. Yoon, 2005. Numerical simulation and satellite altimeter data assimilation of the Japan Sea circulation, Deep-Sea Research, Part II, 52, 1443-1463.</li>
					<li>Gross, R. S., I. Fukumori, and D. Menemenlis, 2005. Atmospheric and oceanic excitation of decadal-scale Earth orientation variations, J. Geophys. Res., 110 (B9). B09405.</li>
				</ul>

				<h4>2004</h4>
				<ul class="bullet_list indent">
					<li>Kim, S. B., T. Lee, and I. Fukumori, 2004: The 1997-99 abrupt change of the upper ocean temperature in the northcentral Pacific. Geophys. Res. Lett., 31, L22304, doi:10.1029/2004GL021142</li>
					<li>Lee, T., 2004: Decadal weakening of the shallow overturning circulation in the South Indian Ocean. Geophys. Res. Lett., 31, L18305, doi:10.1029/2004GL020884.</li>
					<li>Lee, T., I. Fukumori, and B. Tang, 2004: Temperature advection: internal versus external processes. J. Phys. Oceanogr., 34, 1936-1944</li>
					<li>Wang, O., I. Fukumori, T. Lee, and B. Cheng, 2004: On the cause of eastern equatorial Pacific Ocean T-S variations associated with El Nino. . Geophys. Res. Lett., 31, L15310, doi:10.1029/2004GL02472.</li>
					<li>Fukumori, I., T. Lee, B. Cheng, and D. Menemenlis, 2004: The origin, pathway, and destination of NINO3 water estimated by a simulated passive tracer and its adjoint. J. Phys. Oceanogr., 34, 582-604</li>
					<li>Wang, O., I. Fukumori, T. Lee, and G. Johnson, 2004: Eastern equatorial Pacific Ocean T-S variations with El Nino. Geophys. Res. Lett.. 31, L04305. doi:10.1029/2003GL019087.</li>
					<li>Gross, R. S., I. Fukumori, D. Menemenlis, P. Gegout, 2004. Atmospheric and oceanic excitation of length-of-day variations during 1980-2000, J. Geophys. Res., 109 (B1), art no. B01406.</li>
				</ul>

				<h4>2003</h4>
				<ul class="bullet_list indent">
					<li>Lee, T., and I. Fukumori, 2003: Interannual to decadal variation of tropical-subtropical exchange in the Pacific Ocean: boundary versus interior pycnocline transports. J. Climate. 16, 4022-4042</li>
					<li>Gross, R. S., I. Fukumori, and D. Menemenlis, 2003. Atmospheric and oceanic excitation of the Earth's wobbles during 1980-2000, J. Geophys. Res., 108 (B8), 2370, doi:10.1029/2002JB002143.</li>
					<li>Fieguth, P., D. Menemenlis, and I. Fukumori, 2003.  Mapping and pseudo-inverse algorithms for ocean data assimilation, IEEE Transactions on Geoscience and Remote Sensing, 41, 43-51.</li>
				</ul>

				<h4>2002</h4>
				<ul class="bullet_list indent">
					<li>Lee, T., I. Fukumori, D. Menemenlis, Z. Xing, and L.-L. Fu, 2002: Effects of the Indonesian Throughflow on the Pacific and Indian Ocean. J. Phys. Oceanogr., 32, 1404-1429. (Please remove the one in 2001 with the name, marked as "in press").</li>
					<li>Fukumori, I., 2002. A partitioned Kalman filter and smoother, Monthly Weather Review, 130, 1370-1383.</li>
					<li>Dickey, J. O., S. L. Marcus, O. de Viron, and I. Fukumori, 2002. Recent Earth oblateness variations: Unraveling climate and postglacial rebound effects, Science, 298, 1975-1977.</li>
					<li>Stammer, D., C. Wunsch, I. Fukumori, and J. Marshall, 2002: State Estimation in Modern Oceanographic Research, EOS, Transactions, American Geophysical Union, 83(27), 289&294-295.</li>
				</ul>

				<h4>2001</h4>
				<ul class="bullet_list indent">
					<li>Lee, T., B. Cheng, and R. Giering, 2001: Adjoint sensitivity of Indonesian throughflow transport to wind stress: application to interannual variability. Jet Propulsion Laboratory Publication 01-11, 34pp.</li>
					<li>Hirose, N., I. Fukumori, R. Ponte, and V.Zlotnicki, 2001. Modeling the high-frequency barotropic response of the ocean to atmospheric disturbances: Sensitivity to forcing, topography, and friction, Journal of Geophysical Research, 106, 30987-30995.</li>
					<li>Hirose, N., I. Fukumori, and R. Ponte, 2001. A non-isostatic global sea level response to barometric pressure near 5-days, Geophysical Research Letters, 28, 2441-2444.</li>
					<li>Talley, L. D., D. Stammer, and I. Fukumori, 2001. Towards a WOCE Synthesis, in "Ocean Circulation and Climate", G. Siedler, J. Church, and J. Gould, editors, Academic Press, 715pp.</li>
					<li>Lee, T., D. Menemenlis, I. Fukumori, 2001: Effects of interior mixing on the mean and variability of tropical circulation in an ocean general circulation model. In preparation.</li>
				</ul>

				<h4>2000</h4>
				<ul class="bullet_list indent">
					<li>Cheng, B., 2000: A Technique for Improving Global Collective Operations on SMP Clusters, HPCUG 2000, San Jose, CA, March 19-22,2000.</li>
					<li>Fukumori, I., 2000. Data Assimilation by Models, in "Satellite Altimetry and Earth Sciences", L.-L. Fu and A. Cazenave, editors, Academic Press, 463pp.</li>
					<li>Fukumori, I., 2000. Altimetric Data Assimilation, in ``Satellite Altimetry: Theory, Measurements, and Geophysical Applications'', L.-L. Fu and A. Cazenave, editors, Academic Press (in press).</li>
					<li>Keihm S., V. Zlotnicki and C. Ruff, 2000. TOPEX Microwave Radiometer Performance Evaluation, 1992-1998. J. Geophys. Res., in press</li>
					<li>Lee, T., J. Boulanger, L.-L. Fu, and R. Giering, 2000: Data assimilation into an intermediate coupled ocean-atmosphere model: application to the 1997-98 El Nino.  Journal of Geophysical Research, 105, 26063-26087.</li>
					<li>D. Menemenlis and M. Chechelnitsky (2000).  Error Estimates for an Ocean General Circulation Model From Altimeter and Acoustic Tomography Data., Mon. Weather Rev., 128, 763-778.</li>
				</ul>

				<h4>1999</h4>
				<ul class="bullet_list indent">
					<li>Hirose, N., I. Fukumori, and J.-H. Yoon, 1999. Assimilation of TOPEX/POSEIDON altimeter data with a reduced gravity model of the Japan Sea, <strong>JO</strong>, <strong>55</strong>, 53-64.</li>
					<li>Fukumori, I., R. Raghunath, L. Fu, and Y. Chao, 1999.  Assimilation of TOPEX/POSEIDON data into a global ocean circulation model: How good are the results?, <strong>JGR</strong>, <strong>104</strong>, 25,647-25,665.</li>
					<li>Marotzke, J., R. Giering, K. Zhang, D. Stammer, C. Hill, and T. Lee, 1999: Construction of the adjoint MIT ocean general circulation model and application to Atlantic heat transport sensitivity. Journal of Geophysical Research, 104, 29529-29560.</li>
					<li>Tierney, C., J. Wahr, F. Bryan and V. Zlotnicki, 1999. Short-Period oceanic Circulation: implications for satellite altimetry. Geophys. Res. Lett. Vol. 27 , No. 9 , p. 1255.</li>
				</ul>

				<h4>1998</h4>
				<ul class="bullet_list indent">
					<li>P. Fieguth, D. Menemenlis, T. Ho, C. Wunsch, and A. Willsky (1998). Mapping Mediterranean Altimeter Data with a Multiresolution Optimal Interpolation Algorithm., J. Atmos. Oceanic Technol., 15, 535--546.</li>
					<li>Fukumori, I., R. Raghunath, and L. Fu, 1998. Nature of global large-scale sea level variability in relation to atmospheric forcing: A modeling study, <strong>JGR</strong>, <strong>103</strong>, 5493-5512.</li>
					<li>Lee, T. and J. Marotzke, 1998: Seasonal cycle of meridional overturning and heat transport of the Indian Ocean. Journal of Physical Oceanography, vol. 28, 923-943.</li>
					<li>The ATOC Group (1998).  Ocean Climate Change: Comparison of Acoustic Tomography, Satellite Altimetry, and Modeling., Science, 281, 1327-1332.</li>
				</ul>

				<h4>1997</h4>
				<ul class="bullet_list indent">
					<li>Lee, T. and J. Marotzke, 1997: Inferring meridional mass and heat transports of the Indian Ocean by fitting a GCM to climatological data. Journal of Geophysical Research, vol. 102, 10585-10602.</li>
					<li>D. Menemenlis and C. Wunsch (1997). Linearization of an Oceanic General Circulation Model for Data Assimilation and Climate Studies., J. Atmos. Oceanic Technol., 14 , 1420-1443.</li>
					<li>D. Menemenlis, T. Webb, C. Wunsch, U. Send, and C. Hill (1997).  Basin-Scale Ocean Circulation from Combined Altimetric, Tomographic and Model Data., Nature, 385, 618-621.</li>
					<li>D. Menemenlis, P. Fieguth, C. Wunsch, and A. Willsky (1997). Adaptation of a Fast Optimal Interpolation Algorithm to the Mapping of Oceanographic Data., J. Geophys. Res., 102, 10,573-10,584.</li>
				</ul>

				<h4>1996</h4>
				<ul class="bullet_list indent">
					<li>Fu, L.-L., and I. Fukumori, 1996. A case study of the effects of errors in satellite altimetry on data assimilation, in <EM>``Modern Approaches to Data Assimilation in Ocean Modeling''</EM>, P.Malanotte-Rizzoli editor, Elsevier, 77-96.</li>
					<li>Lee, T. and P. Cornillon, 1996: Propagation of Gulf Stream meanders between 74 and 70W.  Journal of Physical Oceanography, vol. 26, 205-224.</li>
					<li>Lee, T. and P. Cornillon, 1996: Propagation and growth of Gulf Stream meanders between 75 and 45W.  Journal of Physical Oceanography, vol. 26, 225-241.</li>
				</ul>

				<h4>1995</h4>
				<ul class="bullet_list indent">
					<li>Fukumori, I., and P. Malanotte-Rizzoli, 1995. An approximate Kalman filter for ocean data assimilation; An example with an idealized Gulf Stream model, <strong>JGR</strong>, <strong>100</strong>, 6777-6793.</li>
					<li>Fukumori, I., 1995. Assimilation of TOPEX sea level measurements with a reduced-gravity shallow water model of the tropical Pacific Ocean, <strong>JGR</strong>, <strong>100</strong>, 25027-25039.</li>
					<li>Lee, T. and P. Cornillon, 1995: Temporal variation of meandering intensity and domain-wide lateral oscillations of the Gulf Stream. Journal of Geophysical Research, vol. 100, 13603-13613.</li>
				</ul>

				<h4>1994</h4>
				<ul class="bullet_list indent">
					<li>Malanotte-Rizzoli, P., I. Fukumori, and R. E. Young, 1996. A methodology for the construction of a hierarchy of Kalman filters for nonlinear primitive equation models, in ``Modern Approaches to Data Assimilation in Ocean Modeling'', P.Malanotte-Rizzoli editor, Elsevier, 297-317.</li>
					<li>Cornillon, P., T. Lee, and G. Fall, 1994: On the probability that a Gulf Stream meander crest detaches to form a warm core ring.  Journal of Physical Oceanography, vol. 96, 132-155.</li>
				</ul>

				<h4>1993</h4>
				<ul class="bullet_list indent">
					<li>Fu, L.-L., I. Fukumori and R. N. Miller, 1993.  Fitting dynamic models to the Geosat sea level observations in the Tropical Pacific Ocean. Part II: A linear, wind-driven model, <strong>JPO</strong>, <strong>23</strong>, 2162-2181.</li>
					<li>Fukumori, I., J. Benveniste, C. Wunsch and D. B. Haidvogel, 1993. Assimilation of sea surface topography into an ocean    circulation model using a steady-state smoother, <strong>JPO</strong>, <strong>23</strong>, 1831-1855.</li>
					<li>Fukumori, I., L.-L. Fu, and R. N. Miller, 1993.  Data Assimilation, in ``Satellite Remote Sensing of the Oceanic Environment'', I.S.F.Jones, Y.Sugimori, R.W.Stewart editors, Seibutsu Kenkyusha, Tokyo, Japan, 528pp.</li>
				</ul>


				<hr>
				<h3 id="sio" class="named-anchor">ECCO-SIO, ECCO-JPL, GECCO (1997-2005)</h3>

				<h4>1997</h4>
				<ul class="bullet_list indent">
					<li>Lee, T. and J. Marotzke, 1997: Inferring meridional mass and heat transportsof the Indian Ocean by fitting a GCM to climatological data. J. Geophys. Res., 102, 10585-10602.</li>
					<li>Marshall, J., A. Adcroft, C. Hill, L. Perelman and C. Heisey, 1997: A finite-volume, incompressible Navier Stokes model for studies of the ocean on parallel computers. J. Geophys. Res., 102, 5753-5766.</li>
					<li>Marshall, J., C. Hill, L. Perelman and A. Adcroft, 1997: Hydrostatic, quasi-hydrostatic, and nonhydrostatic ocean modeling. J. Geophys. Res., 102, 5733-5752.</li>
					<li>Stammer, D., C. Wunsch, R. Giering, Q. Zhang,J. Marotzke, J. Marshall and C.N. Hill, 1997: The global ocean circulation estimated from TOPEX/POSEIDON altimetry and the MIT general circulation model. MIT Center for Global Change Science, Report 49.</li>
				</ul>
				<h4>1998</h4>
				<ul class="bullet_list indent">
					<li>Lee, T., and J. Marotzke, 1998: Seasonal cycle of meridional overturning and heat transport of the Indian Ocean. J. Phys. Oceanogr., 28, 923-943.</li>
					<li>Fukumori, I., R. Raghunath, and L. Fu, 1998. Nature of global large-scale sea level variability in relation to atmospheric forcing: A modeling study, Journal of Geophysical Research, 103, 5493-5512</li>
					<li>Stammer, D., I. Fukumori and C. Wunsch, 1998: Report of a GODAE/WOCE meeting on large-scale ocean state estimation. WOCE IPO Report, 161/98, GODAE Report, 2, 21pp.</li>
				</ul>
				<h4>1999</h4>
				<ul class="bullet_list indent">
					<li>Fukumori, I., R. Raghunath, L. Fu, and Y. Chao, 1999: Assimilation of TOPEX/POSEIDON data into a global ocean circulation model: How good are the results? J. Geophys. Res., 104, 25,647-25,665.</li>
					<li>Hirose, N., I. Fukumori, and J.-H. Yoon, 1999. Assimilation of TOPEX/POSEIDON altimeter data with a reduced gravity model of the Japan Sea, Journal of Oceanography, 55, 53-64.</li>
					<li>Marotzke, J., R. Giering, Q. K. Zhang, D. Stammer, C. N. Hill and T. Lee, 1999: Construction of the adjoint MIT ocean general circulation model and application to Atlantic heat transport sensitivity, J. Geophys. Res., 104, 29,529 - 29,548.</li>
					<li>Zhang, Q. and J. Marotzke, 1999: The importance of open-boundary estimation for an Indian Ocean GCM-data synthesis. J. Mar. Res, 57, 305-334.</li>
				</ul>
				<h4>2000</h4>
				<ul class="bullet_list indent">
					<li>Fukumori, I., 2000. Data Assimilation by Models, in &quot;Satellite Altimetry and Earth Sciences&quot;, L.-L. Fu and A. Cazenave, editors, Academic Press, 463pp.</li>
					<li>Lee, T., J.-P. Boulanger, A. Foo, L.-L. Fu, and R. Giering, 2000: Data assimilation by an intermediate coupled ocean-atmosphere model: application to the 1997-1998 El Ni&ntilde;o. J. Geophys. Res.,105, 26063-26087.</li>
					<li>McKinley, G. M.J. Follows and J. Marshall, 2000: Interannual variability of oxygen fluxes in the North Atlantic. Geo. Res. Letters., 27, 2933-2936</li>
					<li>Ponte, R., D. Stammer and C. Wunsch, 2000: Improved ocean angular momentum estimates using an ocean model constrained by large-scale data. Geophys. Res. Lett., 28, 1775-1778.</li>
					<li>Stammer, D., 2000: Ocean state estimation in support of CLIVAR and GODAE. CLIVAR Exchanges Newsletter, 17.</li>
					<li>Stammer, D. and E. P.Chassignet, 2000: Ocean state estimation and prediction in support of oceanographic research. Oceanography,13, 51--56.</li>
				</ul>
				<h4>2001</h4>
				<ul class="bullet_list indent">
					<li>Adcroft, A., J.R. Scott and J. Marotzke, 2001: Impact of Geothermal Heating on the Global Ocean Circulation. Geophys. Res. Lett. 28(9), 1735-1738.</li>
					<li>Cheng, B., 2001: Some performance comparisons for an ocean model on the SGI Origin 2000 and the HP V-class 2500. Proceedings of the Cray Users Group Summit 2001, Indian Wells, CA.</li>
					<li>Dushaw, B., G. Bold, C.-S. Chiu, J. Colosi, B. Cornuelle, Y. Desaubies, M. Dzieciuch, A. Forbes, F. Gaillard, A. Gavrilov, J. Gould, B. Howe, M. Lawrence, J. Lynch, D. Menemenlis, J. Mercer, P. Mikhalevsky, W. Munk, I. Nakano, F. Sshott, U. Send R. Spindel, T. Terre, P. Worcester, C. Wunsh (2001). Observing the Ocean in the 2000s: A Strategy for the Role of Acoustic Tomography in Ocean Climate Observation. In Observing the Oceans in the 21st Century, C. J. Koblinsky and N. R. Smith (Eds), GODAE Project Office and Bureau of Meteorology, Melbourne.</li>
					<li>Dutkiewicz, S., Follows, M., Marshall, J and W. Gregg, 2001: Interannual variability in phytoplankton abundances in the North Atlantic. Deep-Sea Res. II, 48, 2323-2344.</li>
					<li>Hirose, N., I. Fukumori, and R. Ponte, 2001. A non-isostatic global sea level response to barometric pressure near 5-days, Geophysical Research Letters, 28, 2441-2444.</li>
					<li>Hirose, N., I. Fukumori, R. Ponte, and V.Zlotnicki, 2001. High-frequency barotropic response to atmospheric disturbances: Sensitivity to forcing, topography, and friction, Journal of Geophysical Research, 106, 30987-30995.</li>
					<li>Kaese, R., A. Biastoch and D. Stammer, 2001: On the mid-depth Circulation in the Labrador and Irminger Seas. Geophys. Res. Lett., 28 , 3433 --</li>
					<li>Scott, J.R., J. Marotzke and A. Adcroft, 2001: Geothermal heating and its influence on the meridional overturning circulation. J. Geophys. Res.-Oceans 106 (C12), 31141-31154.</li>
					<li>Stammer, D., R. Bleck, C. Boning, P. DeMey, H. Hurlburt, I. Fukumori, C. LeProvost, R. Tokmakian, Wenzel, 2001: Global ocean modeling and state estimation in support of climate research. In: Observing the Ocean in the 21st Century, C.J. Koblinsky and N.R. Smith (Eds.), Bureau of Meteorology, Melbourne, Australia, 511--528.</li>
					<li>Talley, L., D. Stammer and I. Fukumori, 2001: Towards a WOCE synthesis. In: Ocean Circulation and Climate, Siedler, G., J. Church and J. Gould (Eds.), Academic Press, 525-546.</li>
					<li>Wunsch, C., 2001: Ocean observations and the climate forecast problem. In: Meteorology at the Millennium. R. P. Pearce (Ed.), 217-224, Academic, London.</li>
				</ul>
				<h4>2002</h4>
				<ul class="bullet_list indent">
					<li>Dickey, J. O., S. L. Marcus, O. de Viron, and I. Fukumori, 2002. Recent Earth oblateness variations: Unraveling climate and postglacial rebound effects, Science, 298, 1975-1977.</li>
					<li>Dongarra, J.J., P.M.A. Sloot and C.J.K. Tan (Eds.),In: Lecture Notes in Computer Science (LNCS), Vol. 2330,  pp. 1019-1028, Springer-Verlag.</li>
					<li>Fukumori, I., 2002: A partitioned Kalman filter and smoother. Monthly Weather Review, 130, 1370-1383.</li>
					<li>Heimbach, P., C. Hill and R. Giering, 2002: Automatic Generation of Efficient Adjoint Code for a Parallel  Navier-Stokes Solver.</li>
					<li>Lee, T., I. Fukumori, D. Menemenlis, Z. Xing, L.-L. Fu, 2002: Effects of the Indonesian Throughflow on the Pacific and Indian Oceans. J. Phys. Oceanogr., 32, 1404-1429.</li>
					<li>Stammer, D., C. Wunsch, I. Fukumori and J. Marshall, 2002: State Estimation in Modern Oceanographic Research. EOS, Transactions, American Geophysical Union, Volume 83, Nr. 27, p. 289, 294--295.</li>
					<li>Stammer, D., C. Wunsch, R. Giering, C. Eckert, P. Heimbach, J. Marotzke, A. Adcroft, C.N. Hill and J. Marshall, 2002: The global ocean circulation during 1992 --1997, estimated from ocean observations and a general circulation model. J. Geophys. Res., 107, C9 3118, doi:10.1029/2001JC000888.</li>
					<li>Wunsch, C., 2002: Oceanic age and transient tracers, analytical and numerical solutions. J. Geophys. Res., Vol 107, No.C6, 1-16.</li>
					<li>Wunsch, C., 2002: What is the Thermohaline Circulation. , Science, Vol 298, No. 5596, Nov. 8, 2002, p. 1179-1181.</li>
				</ul>
				<h4>2003</h4>
				<ul class="bullet_list indent">
					<li>Biastoch, A., R. Kaese and D. Stammer, 2003: The sensitivity of the Denmark-Scotland Ridge Overflow to forcing changes. J. Phys. Oceanogr., 3, 2307-2319.</li>
					<li>Chao, B. F., A. Y. Au, J. P. Boy and C. M. Cox, 2003: Time-variable gravity signal of an anomalous redistribution of water mass in the extratropic Pacific during 1998-2002, Geochemistry Geophysics Geosystems, 4, doi:10.1029/2003gc000589</li>
					<li>Fieguth, P., D. Menemenlis, and I. Fukumori, 2003. Mapping and pseudo-inverse algorithms for ocean data assimilation, IEEE Transactions on Geoscience and Remote Sensing,41, 43-51.</li>
					<li>Gross, R. S., I. Fukumori, and D. Menemenlis, 2003. Atmospheric and oceanic excitation of the Earth's wobbles during 1980-2000, J. Geophys. Res., 108 (B8), 2370, doi:10.1029/2002JB002143.</li>
					<li>Lee, T. and I. Fukumori, 2003: Interannual to decadal variation of tropical-subtropical exchange in the Pacific Ocean: boundary versus interior pycnocline transports. J. Clim. 16, 4022-4042</li>
					<li>Legg and A. Adcroft, 2003: Internal wave breaking at concave and convex continental slopes. J. Phys. Oceanogr. 33, 2224-2246.</li>
					<li>Li, X., and C. Wunsch (2003), Constraining the North Atlantic circulation between 4.5 S and 39.5 N with transient tracer observations, J. Geophys. Res., 108(C10), 3318, doi:10.1029/2002JC001765.</li>
					<li>Losch, A. Adcroft and J-M. Campin, 2003: How sensitive a Coarse General Circulation Models to Fundamental Approximations in the Equations of Motion?  J. Phys. Oceanogr. 34 (1), 306-319S.</li>
					<li>Losch, M. and C. Wunsch, 2003: Bottom topography as a control parameter in an ocean circulation model. J. Atmosph. and Oc. Technology, 1685-1696.</li>
					<li>Stammer, D., C. Wunsch, R. Giering, C. Eckert, P. Heimbach, J. Marotzke, A. Adcroft, C.N. Hill and J. Marshall, 2003: Volume, heat and freshwater transports of the global ocean circulation 1993 --2000, estimated from a general circulation model constrained by World Ocean Circulation Experiment (WOCE) data . J. Geophys. Res., 108, C1 3007, doi:10.1029/2001JC001115.</li>
					<li>Wunsch, C., and D. Stammer, 2003: Global Ocean Data Assimilation and Geoid Measurements , in G. Beutler, R. Rummel, M.R. Drinkwater, and R. von Steiger, Earth Gravity Field from Space - from Sensors to Earth Sciences, Space Sciences Series of ISSI, Vol. 17, and Space Science Reviews, 108, 147-162, 2003.</li>
				</ul>
				<h4>2004</h4>
				<ul class="bullet_list indent">
					<li>Adcroft, A. and J-M. Campin, 2004: Rescaled height coordinates for accurate representation of free-surface flows in ocean circulation models. Accepted by Ocean Modelling.</li>
					<li>Adcroft, A., J-M. Campin, C.N. Hill and J.C. Marshall, 2004: Implementation of an atmosphere-ocean general circulation model on the expanded spherical cube. Mon. Wea. Rev., 132 (12), 2845-2863</li>
					<li>Campin, J-M., A. Adcroft, C. Hill and J. Marshall, 2004: Conservation of properties in a free-surface model. Ocean Modelling. 6, 221-244.</li>
					<li>Dommenget, D. and D. Stammer, 2004: Assessing ENSO Simulations and Predictions Using Adjoint Ocean State Estimation. J. Climate, Vol. 17, No. 22, pages 4301-4315.</li>
					<li>Fukumori, I., T. Lee, B. Cheng, and D. Menemenlis, 2004. The origin, pathway, and destination of Ni&ntilde;o3 water estimated by a simulated passive tracer and its adjoint, J. Phys. Oceanogr., 34, 582-604.</li>
					<li>Gross, R. S., I. Fukumori, D. Menemenlis, P. Gegout, 2004. Atmospheric and oceanic excitation of length-of-day variations during 1980-2000, J. Geophys. Res., 109 (B1), art no. B01406.</li>
					<li>Hill, C., V. Bugnion, M. Follows and J. Marshall, 2004: Evaluating carbon sequestration efficiency in an ocean circulation model by adjoint sensitivity analysis. JGR Oceans, vol 109, C11005, doi:10.1029/2002JC001598</li>
					<li>Ito, T., J.C. Marshall and M.J. Follows, 2004: What controls the uptake of transient tracers in the Southern Ocean? Global Biogeochem. Cycles., 18, GB2021, doi:10.1029/2003GB002103</li>
					<li>Kim, S.B., T. Lee, and I. Fukumori, 2004: The 1997-99 abrupt change of the upper ocean temperature in the northcentral Pacific. Geophys. Res. Lett., 31, L22304, doi:10.1029/2004GL021142.</li>
					<li>K&ouml;hl, A., and D. Stammer, 2004: Optimal Observations for Variational Data Assimilation . J. Phys. Oceanogr., Volume 34, March 2004, pp. 529-542</li>
					<li>Lee, T., 2004: Decadal weakening of the shallow overturning circulation in the South Indian Ocean. Geophys. Res. Lett., 31, L18305, doi:10.1029/2004GL020884.</li>
					<li>Lee., T., I. Fukumori, B. Tang, 2004: Temperature advection: internal versus external processes. J. Phys. Oceanogr., 34, 1936-1944.</li>
					<li>Li, X. and C. Wunsch, 2004: An adjoint sensitivity study of chlorofluorocarbons in the North Atlantic, J. Geophys. Res., 109, C01007, doi:10.1029/2003JC002014.</li>
					<li>Lu, Y., and D. Stammer, 2004: Vorticity balance in coarse-resolution global ocean simulations . J. Phys. Oceanogr., Volume 34, March 2004, pp. 605-622</li>
					<li>Marshall, J.C., A. Adcroft, J-M. Campin and C. Hill, 2004: Atmosphere-Ocean Modeling exploiting fluid isomorphisms. Mon. Wea. Rev., 132 (12), 2882-2894</li>
					<li>McKinley, G., M.J. Follows and J. Marshall, 2004: Mechanisms of air-sea CO2 flux variability in the Equatorial Pacific and north Atlantic: Global Biogeochemical Cycles, vol 18,doi:10.1029/2003GB002179</li>
					<li>Reddy, P. R. C., P. S. Salvekar, A. A. Deo and D. W. Ganer, 2004: Westward propagating twin gyres in the equatorial Indian Ocean, Geophys Res Lett, 31(1), doi:10.1029/2003gl018615</li>
					<li>Stammer, D., and J. Theiss, 2004: Velocity statistics inferred from the TOPEX/POSEIDON-JASON Tandem Mission Data.  Marine Geodesy, 27, 551-576.</li>
					<li>Stammer, D., K. Ueyoshi, A. K&ouml;hl, W.B. Large, S. Josey and C. Wunsch, 2004: Estimating air-sea flux estimates through global ocean data assimilation , J. Geophys. Res.,  109, C05023, doi:10.1029/2003JC002082.</li>
					<li>Wang, O., I. Fukumori, T. Lee, and B. Cheng, 2004: On the cause of eastern equatorial Pacific Ocean T-S variations associated with El Nino. Geophys. Res. Lett., 31, L15310, doi:10.1029/2004GL02472.</li>
					<li>Wang, O., I. Fukumori, T. Lee, and G. Johnson, 2004. Eastern equatorial Pacific Ocean T-S variations with El Ni&ntilde;o, Geophysical Research Letters, 31, L04305, 10.1029/2003GL019087.</li>
					<li>Worcester, P., B. Cornuelle, B. Dushaw, M. Dzieciuch, B. Howe, D. Menemenlis, J. Mercer, W. Munk, R. Spindel, D. Stammer, and M. Zarnetske (2004). Acoustic remote sensing of large-scale temperature variability in the North Pacific Ocean. 68, 576-577.</li>
					<li>Wunsch, C., 2004: Thermohaline Loops, Stommel Box Models, and Sandstroems Theorem, Tellus, 57A, 1-16, 2004</li>
					<li>Zerbini, S., F. Matonti, F. Raicich, B. Richter and T. van Dam, 2004: Observing and assessing nontidal ocean loading using ocean, continuous GPS and gravity data in the Adriatic area, Geophys Res Lett, 31(23), doi:10.1029/2004gl021185</li>
				</ul>
				<h4>2005</h4>
				<ul class="bullet_list indent">
					<li>Davis, R.E., 2005. Intermediate-depth circulation of the Indian and South Pacific Oceans measured by autonomous floats. J. Phys. Oceanogr., 35(5), 683-707, doi:10.1175/jpo2702.1</li>
					<li>K&ouml;hl, A., 2005: Anomalies of Meridional Overturning: Mechanisms in the North Atlantic. J Phys Oceanogr, 35(8), 1455-1472, doi:10.1175/JPO2767.1</li>
					<li>Stammer, D., 2005: Adjusting internal model errors through ocean state estimation. J. Phys Oceanogr., 35, pages 1143--1153.</li>
					<li>Stammer, D., C. Wunsch and K. Ueyoshi, 2005: Temporal Changes in Ocean Eddy Transports. J. Phys. Ocean., 36(3), 543-550, doi:10.1175/jpo2858.1</li>
				</ul>

				<hr>
				<h3 id="report" class="named-anchor">ECCO REPORT SERIES</h3>

				<ul class="bullet_list indent">
					<li>The ECCO Consortium: Stammer, D. et al: The consortium for estimating the circulation and climate of the ocean (ECCO)  -- Science goals and task plan. <a href="reports/report_1.pdf" target="_blank">Report No.1</a>, November 1999.</li>
					<li>Stammer, D., and C. Wunsch: Computational requirements for ECCO in support of CLIVAR and GODAE. <a href="reports/report_2.pdf" target="_blank">Report No.2</a>, November 1999.</li>
					<li>Ponte, R., D. Stammer, and C. Wunsch: Improving ocean angular momentum estimates using a model constrained by data. <a href="reports/report_3.pdf" target="_blank">Report No.3</a>, April 2000.</li>
					<li>Stammer, D. et al: The global ocean state during 1992-1997, estimated from ocean observations and a general circulation model, Part I: Methodology and estimated state. <a href="reports/ecco_p1.pdf" target="_blank">Report No.4</a>, November 2000.</li>
					<li>Stammer, D. et al: The global ocean state during 1992-1997, estimated from ocean observations and a general circulation model, Part II: Testing results. <a href="reports/ecco_p2.pdf" target="_blank">Report No.5</a>, November 2000.</li>
					<li>Stammer, D. et al: The global ocean state during 1992-1997, estimated from ocean observations and a general circulation model, Part III: Volume,&nbsp;&nbsp; heat and freshwater transports. <a href="reports/ecco_p3.pdf" target="_blank">Report No.6</a>, August 2001.</li>
					<li>Lee, T. et al: Effects of the Indonesian throughflow on the Pacific and Indian Oceans. <a href="reports/report_7.pdf" target="_blank">Report No.7</a>, May 2001.</li>
					<li>Fukumori, I.: A partioned Kalman filter and smoother. <a href="reports/report_8.pdf" target="_blank">Report No. 8,</a> September 2001.</li>
					<li>Cheng, B. N.: Some performance comparisons for an ocean model on the SGI Origin 2000 and the HP V-class 2500. <a href="reports/report_9.pdf" target="_blank">Report No.9</a>.</li>
					<li>Ayoub, N., D. Stammer, and C. Wunsch: Estimating the North Atlantic circulation with nesting and open boundary conditions using an adjoint model. <a href="reports/report_10.pdf" target="_blank">Report No.10</a>, October 2001.</li>
					<li>Report of the 4th ECCO meeting May 31 - June 1, Green Building, Massachusetts Institute of Technology. <a href="reports/report_12.pdf" target="_blank">Report No. 12</a>, June 2001.</li>
					<li>Stammer, D., K. Ueyoshi, W.G. Large, S. Josey, and C. Wunsch:&nbsp; Global sea surface flux estimates obtained through ocean data assimilation.&nbsp; <a href="reports/report_13.pdf" target="_blank">ReportNo.13</a>, November 2001.</li>
					<li>Stammer, D., C. Wunsch, I. Fukumori, and J. Marshall: State estimation in modern oceanographic research. <a href="reports/report_14.pdf" target="_blank">Report No.14</a>, November 2001.</li>
					<li>Lu, Y., and D. Stammer: Vorticity balance in coarse-resolution global ocean simulations. <a href="reports/report_15.pdf" target="_blank">Report No.15</a>, May 2002.</li>
					<li>Koehl, A., and D. Stammer: An adjoint approach for designing an ocean observing system. <a href="reports/report_16.pdf" target="_blank">Report No.16</a>, November 2002.</li>
					<li>Dommenget, D., and D. Stammer: Improving ENSO Simulations and Predictions Through Ocean State Estimation. <a href="reports/report_17.pdf" target="_blank">Report No.17</a>, November 2002.</li>
					<li>Lu, Y., K. Ueyoshi, A. Koehl, E. Remy, K. Lorbacher and D. Stammer: Input Data Sets for the ECCO Global 1 Degree WOCE Synthesis. <a href="reports/report_18.pdf" target="_blank">Report No.18</a>, August 2002.</li>
					<li>Fukumori, I., T.Lee, B. Cheng and D. Menemenlis: The origin, pathway, and destination of Nino3 Water estimated by a simulated passive tracer and its adjoint. <a href="reports/report_19.pdf" target="_blank">Report No.19</a>, October 2002.</li>
					<li>Koehl, A., Y. Lu, P. Heimbach, B Cornuelle, D. Stammer, C. Wunsch and the ECCO Consortium: The ECCO 1 degree global WOCE Synthesis. <a href="reports/report_20.pdf" target="_blank">Report No.20</a>, November 2002.</li>
					<li>Lee, T. and I. Fukumori and B. Tang: Temperature advection: internal versus external processes. <a href="reports/report_21.pdf" target="_blank">Report No.21</a>, April 2000.</li>
					<li>Lee, T. and I. Fukumori: Interannual-to-decadal variations of tropical-subtropical mass exchange in the Pacific Ocean: boundary versus interior pathways. <a href="reports/report_22.pdf" target="_blank">Report No.22</a>, April 2003.</li>
					<li>Stammer, D., K. Ueyoshi, and C. Wunsch, Geographic Variations and Temporal Changes in Ocean Eddy Transports, <a href="reports/report_23.pdf" target="_blank">Report No.23</a>, September 2003.</li>
					<li>Stammer, D., Ocean mixing estimated through state estimation, <a href="reports/report_24.pdf" target="_blank">Report No.24</a>, September 2003.</li>
					<li>Fukumori, I., A basin-wide oscillation of the Mediterranean Sea, Report No.25, 2003</li>
					<li>Fukumori, I., Budget Closures in Data Assimilation: Physical Consistency and Model Error Source Modeling, <a href="reports/report_26.pdf" target="_blank">Report No.26</a>, December 2003.</li>
					<li>Hoteit, I., A. Koehl, D. Stammer, Efficiency of Reduced-Order Time-dependent Adjoint Data Assimilation Approaches, <a href="reports/report_27.pdf" target="_blank">Report No.27</a>, January 2004.</li>
					<li>Stammer, D., A. Koehl and C. Wunsch, The Impact of the GRACE Geoid on Ocean Circulation Estimates, <a href="reports/report_28.pdf" target="_blank">Report No.28</a>, February 2004.</li>
					<li>Koehl, A., D. Stammer and B.Cornuelle: Interannual to Decadal Changes in the ECCO Global Synthesis, <a href="reports/report_29.pdf" target="_blank">Report No.29</a>, September 2003.</li>
					<li>Stammer, D., S. Park, A. Koehl, R. Lukas, and F. Santiago-Mandujano, ECCO Estimates of Large-scale Changes at the Hawaii Ocean Time-series Station, <a href="reports/report_32.pdf" target="_blank">Report No.32</a>, 2004.</li>
					<li>Koehl, A., Anomolies of Meridional Overturning: Mechanisms in the North Atlantic, <a href="reports/report_33.pdf" target="_blank">Report No.33</a>, July 2004.</li>
					<li>Menemenlis, D., I. Fukumori, and T. Lee, Using Green's Functions to Calibrate an Ocean General Circulation Model, <a href="reports/report_34.pdf" target="_blank">Report No.34</a>, June 2004.</li>
					<li>Yemenis, T., and D. Stammer, Time and Space Scales in the AMSR-E SST Fields, <a href="reports/report_35.pdf" target="_blank">Report No.35</a>, September 2004.</li>
					<li>Douglass, E., D. Roemmich, and D. Stammer, Interannual Variability in Northeast Pacific Circulation, <a href="reports/report_36.pdf" target="_blank">Report No.36</a>, May 2005.</li>
					<li>Hoteit, I., B. Cornuelle, A. Koehl, and D. Stammer, An Eddy-Permitting Variational Data Assimilation System for the Tropical Pacific Ocean, <a href="reports/report_37.pdf" target="_blank">Report No.37</a>, May 2005.</li>
					<li>Lorbacher, K., D. Dommenget, P.P. Niiler, and A. Koehl, Ocean mixed layer depth: A subsurface proxy of ocean-atmosphere variability, <a href="reports/report_38.pdf" target="_blank">Report No.38</a>, May 2005.</li>
					<li>Zedler, S., P.P. Niiler, and D. Stammer, Sensitivity of an OGCM to hurricane-type forcing under tropical and sub-tropical conditions <a href="reports/report_39.pdf" target="_blank">Report No.39</a>, June 2005.</li>
					<li>Koehl, A., D. Dommenget, K. Ueyoshi, D. Stammer, The Global ECCO 1952 to 2001 Ocean Synthesis <a href="reports/report_40.pdf" target="_blank">Report No.40</a>, March 2006.</li>
					<li>Hoteit, I., V. Thierry, B. Cornuelle, D. Stammer, Eddy Permitting Sensitivity Studies of the Equatorial Pacific Dynamics <a href="reports/report_41.pdf" target="_blank">Report No.41</a>, September 2006.</li>
					<li>D. Stammer, Response of the Global Ocean to Greenland and Antarctic Ice Melting <a href="reports/report_42.pdf" target="_blank">Report No.42</a>, December 2006.</li>
					<li>A. Koehl and D. Stammer, Variability of the Meridional Overturning in the North Atlantic from the 50 years GECCO State Estimation. <a href="reports/report_43.pdf" target="_blank">Report No.43</a>, February 2007.</li>
					<li>A. Koehl and D. Stammer, Decadal sea level changes in the 50-year GECCO ocean synthesis. <a href="reports/report44.pdf" target="_blank">Report No.44</a>, June 2007.</li>
				</ul>

			</div>
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
