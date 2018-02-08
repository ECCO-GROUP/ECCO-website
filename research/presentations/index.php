<?php
	/* define page vars */
	$include_path = '../../';
	$page_title = "ECCO | Research Presentations";
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
				<h1 class='article_title'>Research Presentations</h1>
			</header>
			<div class='wysiwyg_content'>
				<ul class="bullet_list indent">
					<li><a href="#posters">Meeting Posters</a></li>
					<li><a href="#posters_jpl">ECCO-JPL Group: Meeting Posters</a></li>
					<li><a href="#posters_sio">ECCO-SIO Group: Meeting Posters</a></li>
				</ul>
				<hr />

				<h3 class="content_title named-anchor" id="posters">MEETING POSTERS</h3>
				<p>ECCO Abstracts submitted to the WOCE Final Conference:</p>
				<ul class="bullet_list">
					<li>
						<a href="abstracts/woce_abstract_1.txt" target="_blank" rel="noopener noreferrer">The ECCO 1 degree global WOCE Synthesis:&nbsp; The Method</a>
						<a href="pdfs/woce_posters/woce_poster_1.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_2.txt" target="_blank" rel="noopener noreferrer">The ECCO 1 degree global WOCE Synthesis:&nbsp; Data Constraints and Their Estimated  Errors.</a>
						<a href="pdfs/woce_posters/woce_poster_2.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_3.txt" target="_blank" rel="noopener noreferrer">The ECCO 1 degree global WOCE Synthesis:&nbsp; The Estimated Mean State</a>
						<a href="pdfs/woce_posters/eccopaper1.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_4.txt" target="_blank" rel="noopener noreferrer">The ECCO 1 degree global WOCE Synthesis:&nbsp; Estimated Ocean Variability</a>
						<a href="pdfs/woce_posters/woce_poster_4.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_5.txt" target="_blank" rel="noopener noreferrer">The ECCO 1 degree global WOCE Synthesis:&nbsp; Estimates of Surface Fluxes</a>
						<a href="pdfs/woce_posters/woce_poster_5.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_6.txt" target="_blank" rel="noopener noreferrer">The ECCO 1 degree global WOCE Synthesis:&nbsp; Mass and Property Transports</a>
						<a href="pdfs/woce_posters/woce_poster_6.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_7.txt" target="_blank" rel="noopener noreferrer">The ECCO 1 degree global WOCE Synthesis:&nbsp; Estimates of Secular Changes</a>
						<a href="pdfs/woce_posters/woce_poster_7.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_8.txt" target="_blank" rel="noopener noreferrer">Vorticity balance in the ECCO global WOCE Synthesis</a>
						<a href="pdfs/woce_posters/woce_poster_8.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_9.txt" target="_blank" rel="noopener noreferrer">ECCO Estimates of Ocean Mixing Coefficient</a>
						<a href="pdfs/woce_posters/woce_poster_9.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_10.txt" target="_blank" rel="noopener noreferrer">The role of salinity in Pacific surface height variability and in diagnosing the hydrological cycle</a>
						<a href="pdfs/woce_posters/woce_poster_10.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_11.txt" target="_blank" rel="noopener noreferrer">Testing the mid-depth circulation in ECCO ocean state estimates</a>
						<a href="pdfs/woce_posters/redecco1.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_abstract_12.txt" target="_blank" rel="noopener noreferrer">ECCO Estimates of Large-scale Changes in the Hawaii Ocean Time-series</a>
						<a href="pdfs/woce_posters/woce_poster_12.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_dimitris1.txt" target="_blank" rel="noopener noreferrer">Calibrating the ECCO Ocean General Circulation Model Using WOCE Data and Model Green's Functions</a>
						<a href="pdfs/woce_posters/woce_poster_13.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_ibrahim.txt" target="_blank" rel="noopener noreferrer">A High Resolution General Circulation Model for the Tropical Pacific Ocean</a>
						<a href="pdfs/woce_posters/woce_poster_ibrahim.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_virginie.txt" target="_blank" rel="noopener noreferrer">Evolution and Energetics of Tropical Instability Waves during 1996-2000</a>
						<a href="pdfs/woce_posters/woce_poster_15a.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster part1) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
						<a href="pdfs/woce_posters/woce_poster_15b.pdf" target="_blank" rel="noopener noreferrer">(part2) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_katja.txt" target="_blank" rel="noopener noreferrer">North Atlantic low-frequency changes of volume and heat transports in the ECCO state estimates</a>
						<a href="pdfs/woce_posters/ecco_p1.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_katja2.txt" target="_blank" rel="noopener noreferrer">Ocean mixed layer depth: A subsurface proxy of ocean-atmosphere variability</a>
						<a href="pdfs/woce_posters/ecco_p2.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_katja3.txt" target="_blank" rel="noopener noreferrer">Tropical Pacific sea surface and dynamic height anomalies: A dynamical view of subsurface seasonal to interannual variability</a>
						<a href="pdfs/woce_posters/ecco_p3.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_armin.txt" target="_blank" rel="noopener noreferrer">Optimal observations for variational data assimilation: Overturning in the North  Atlantic</a>
						<a href="pdfs/woce_posters/optobs_poster.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_dietmar.txt" target="_blank" rel="noopener noreferrer">Improving ENSO simulations and predictions through the ECCO ocean state estimation</a>
						<a href="pdfs/woce_posters/woce2002.poster.part1.pdf">(PDF of poster part1) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
						<a href="pdfs/woce_posters/woce2002.poster.part2.pdf" target="_blank" rel="noopener noreferrer">(part2) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_rui.txt" target="_blank" rel="noopener noreferrer">Global ocean circulation and mass fields and the Earth's variable rotation</a>
					</li>
					<li>
						<a href="abstracts/woce_olwijn2.txt" target="_blank" rel="noopener noreferrer">Surface fluxes and Ocean state estimates in the eastern  Subtropical North Atlantic.</a>
						<a href="pdfs/woce_posters/woce_poster_20.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_lee.txt" target="_blank" rel="noopener noreferrer">Interannual Variation of Mixed-layer Heat Balance: contrasting different climate phenemena and the roles of linear versus nonlinear effects</a>
						<a href="pdfs/woce_posters/MLheat.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_lee2.txt" target="_blank" rel="noopener noreferrer">Interannual-to-decadal Variation of Tropical-subtropical Exchange in the Pacific Ocean: Boundary Versus Interior Pathways</a>
						<a href="pdfs/woce_posters/exch.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_lee4.txt" target="_blank" rel="noopener noreferrer">A Global Comparison of Ekman Pumping From Satellite Scatterometers and Ocean Data Assimilation Estimates</a>
						<a href="pdfs/woce_posters/Ekman_pumping.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_fukumori.txt" target="_blank" rel="noopener noreferrer">Seasonal-to-Interannual Variability of the Ocean During WOCE Estimated by the ECCO Routine Global Ocean Data Assimilation System</a>
						<a href="pdfs/woce_posters/woce_ecco2.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_fukumori2.txt" target="_blank" rel="noopener noreferrer">An Open-Circuit and a Short-Circuit in the Pacific Ocean Subtropical-Tropical Exchange</a>
						<a href="pdfs/woce_posters/woce_tracer_new.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_losch.txt" target="_blank" rel="noopener noreferrer">Assessing the importance of non-Boussinesq effects in a coarse resolution global ocean model</a>
						<a href="pdfs/woce_posters/woce_poster_27.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_losch3.txt" target="_blank" rel="noopener noreferrer">Bottom Topography as a Control Parameter in an Ocean Circulation Model</a>
						<a href="pdfs/woce_posters/woce_poster_28.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/gg_abstract.txt" target="_blank" rel="noopener noreferrer">An Eddy-resolving State Estimate of the Ocean Circulation during the Subduction Experiment using a North Atlantic Regional Model (ECCO)</a>
						<a href="pdfs/woce_posters/GG_poster.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_heimbach.txt" target="_blank" rel="noopener noreferrer">An efficient exact adjoint of the parallel MIT general circulation model, generated via automatic differentiation</a>
						<a href="pdfs/woce_posters/woce_poster_29.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
					<li>
						<a href="abstracts/woce_uwe.txt" target="_blank" rel="noopener noreferrer">Adjoint Compiler Technology and Standards</a>
						<a href="pdfs/woce_posters/woce_uwe_poster.pdf" target="_blank" rel="noopener noreferrer">(PDF of poster) <img src="/assets/images/icons/acrobatlogo.gif" class="img--initial" /></a>
					</li>
				</ul>
				<hr />
				<h3 class="content_title named-anchor" id="posters_jpl">JPL GROUP MEETING POSTERS</h3>
				<section class="grid_gallery list_view">
					<p><strong>WOCE 2002</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="pdfs/woce_posters/woce_ecco2.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/woce_ecco2.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Seasonal-to-Interannual Variability of the Ocean During WOCE, Estimated by the ECCO Routine Global Ocean Data Assimilation System<br />
												WOCE and Beyond<br />
												San Antonio, Texas<br />
												November 18-22, 2002<br />
											</p>
											<p>
												Overview of ECCO near real-time data assimilation system and examples of its applications. The system consists of a hierarchy of assimilation methods that assimilate satellite sea surface height and in situ temperature profiles. Anayses are sensible and provide a means to study ocean circulation. Results are also used in geodetic studies.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="slide">
							<a href="pdfs/woce_posters/woce_tracer_new.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/woce_tracer_new.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												An Open-Circuit and a Short-Circuit in the Pacific Ocean Subtropical-Tropical Exchange<br />
												WOCE and Beyond<br />
												San Antonio, Texas<br />
												November 18-22, 2002
											</p>
											<p>
												Pathway of subtropical-tropical exchange in the Pacific Ocean is analyzed using a simulated passive tracer and its adjoint. Intra-seasonal variability short-circuits the meridional exchange. Contrary to the so-called "Subtropical Cell", the pathway of the exchange is an open circuit and does not close.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="slide">
							<a href="pdfs/woce_posters/MLheat.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/MLheat.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Interannual variation of mixed-layer heat balance: contrasting different climate phenomena and the roles of linear vs. nonlinear effects<br />
												WOCE and Beyond<br />
												San Antonio, Texas<br />
												November 18-22, 2002
											</p>
											<p>
												Interannual variation of mixed-layer heat budget associated with the climate events of El Nino, IOD, and PDO phase switch during the period of 1997-2000 are examined using ECCO assimilation product. Similarity and difference in interannual mixed-layer heat balance for these events are discussed. The role of nonlinear vs. linear advective tendencies are addressed.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>Jason-1 2002</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="pdfs/jpl_posters/jason_021021.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/jason_021021.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Interannual Variation of Mixed-Layer Heat Balance<br />
												Jason-1 Science Working Team Meeting<br />
												New Orleans, Louisiana<br />
												October 21-23, 2002
											</p>
											<p>
												The mixed-layer heat balance in key regions associated with events of El Nino, Indian Ocean Dipole, and the Pacific Decadal Oscillation are analyzed. Advection plays a similar role in the study regions. Differences in surface heat flux and diffusion is noted. Nonlinear advective tendencies are particularly important in El Nino.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>IGARSS 2002</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="pdfs/jpl_posters/tmp.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/tmp.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Mapping and Pseudo-Inverse Algorithms for Data Assimilation<br />
												International Geoscience & Remote Sensing Symposium<br />
												Toronto, Canada<br />
												June 24-28, 2002
											</p>
											<p>
												Summary: Reduced-state Kalman filters require interpolation operators from the reduced state to the fine grid and pseudo-inverse operators that map the fine grid back to the reduced state. This poster investigates a variety of approaches to computing the pseudoinverse and evaluates the mapping performance of eleven interpolation kernels.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>GODAE 2002</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="pdfs/jpl_posters/ecco2.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/ecco2.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												A Prototype GODAE Routine Global Ocean Data Assimilation System: ECCO-2<br />
												International Symposium "En Route to GODAE"<br />
												Biarritz, France<br />
												June 13-15, 2002
											</p>
											<p>
												Summary: An overview of ECCO-2, a prototype routine global ocean data assimilation system of ECCO. The modeling and assimilation system are introduced and some of their applications are described.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="slide">
							<a href="pdfs/jpl_posters/consistency.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/consistency.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Physical Consistency of Data Assimilated Estimates and the ECCO Hierarchical Assimilation Method<br />
												International Symposium "En Route to GODAE"<br />
												Biarritz, France<br />
												June 13-15, 2002
											</p>
											<p>
												Summary: Temporal evolution of data assimilated solutions are physically inconsistent (e.g., non-closed energy budgets) when corresponding model errors are not determined. The nature of the inconsistency is described and its solution discussed.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="slide">
							<a href="pdfs/jpl_posters/GODAE-02.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/GODAE-02.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Upper-ocean heat budget inferred from ECCO-2 ocean data assimilation<br />
												International Symposium "En Route to GODAE"<br />
												Biarritz, France<br />
												June 13-15, 2002
											</p>
											<p>
												Summary: The ECCO-2 ocean data assimilation product is used to examine anomalous heat budget of the mixed layer in several areas associated with different climate variations (ENSO, Indian-Ocean Dipole, and PDO). Similarities and differences in heat budgets for the different climate variations are highlighted.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="slide">
							<a href="pdfs/jpl_posters/poster.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/poster.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Callibrating the ECCO Ocean General Circulation Model Using Green's Functions<br />
												International Symposium "En Route to GODAE"<br />
												Biarritz, France<br />
												June 13-15, 2002
											</p>
											<p>
												Summary: Green's functions provide a simple, yet effective, method to test and calibrate General-Circulation-Model (GCM) parameterizations, to study and quantify model and data errors, to correct model biases and trends, and to blend estimates from different solutions and data products.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>Jason-1 2002</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="pdfs/jpl_posters/tracer.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/tracer.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												The Origin and Pathway of Nino3 Water Estimated Using Products of the ECCO Data Assimilation System<br />
												Jason-1 Science Working Team Meeting<br />
												Biarritz, France<br />
												June 10-12, 2002
											</p>
											<p>
												Summary: The origin and pathway of water occupying the surface layer of the eastern Equatorial Pacific ("Nino3") are investigated using passive tracers and their adjoint based on circulation estimates of the ECCO Data Assimilation System ("ECCO-2").
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="slide">
							<a href="pdfs/jpl_posters/JASON-02.pdf">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/JASON-02.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Interannual-to-decadal variation in tropical-subtropical mass exchange in the Pacific Ocean boundary vs interior pathways<br />
												Jason-1 Science Working Team Meeting<br />
												Biarritz, France<br />
												June 10-12, 2002
											</p>
											<p>
												Summary: Interannual-to-decadal variation of tropical-subtropical mass exchange in the Pacific Ocean is investigated using sea level data, model simulation and assimilation. Anomaly of boundary pycnocline transport is found to be anti-correlated to and smaller in magnitude than that of the interior, which are different from the time-mean exchange. Forcing mechanisms are proposed to explain the variations.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>AGU 2001</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="posters/agufall2002.ps">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/agufall2002.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Application of an Ocean Model and its Adjoint for Global Data Assimilation and Sensitivity Analysis<br />
												AGU 2001 Fall Meeting<br />
												San Francisco, California<br />
												10-14 December 2001
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>Jason-1 2001</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="posters/jason_011206.ps">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/jason_011206.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												The Three-Dimensional Circulation of the Ocean<br />
												Jason-1 Science Working Team Meeting<br />
												Solvang, California<br />
												6 December 2001
											</p>
											<p>
												Summary: The poster is an introduction to our project and describes what data assimilation is about and what its applications are. Satellites provide the most extensive observation of the ocean but are limited to measuring properties of the sea surface. Data assimilation combines these observations with models and thereby extrapolates the measurements into complete descriptions of the ocean. Deep circulation is revealed and processes underlying observed changes are identified. Data assimilation helps improve our understanding of ocean circulation. These advancements also help improve understandings of biogeochemical cycles and changes in earth rotation.
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>


					<p><strong>WOCE/JGOFS 2001</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="posters/woce_southampton_2001.ps">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/woce_southampton_2001.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Pacific and Indian Ocean Circulation During 1993-2000: Assimilation of TOPEX/Poseidon Data into a Near Global OGCM<br />
												WOCE/JGOFS Transport Workshop<br />
												Southampton, UK<br />
												25-29 June 2001
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>NASA OSC 2001</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="posters/poster_nasa_miami2.ps">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/poster_nasa_miami2.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Toward Operational Ocean State Estimation<br />
												NASA Oceanography Scientific Conference<br />
												Oceanology International Americas<br />
												Miami Beach, Florida<br />
												April 3-5, 2001
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
						<li class="slide">
							<a href="posters/poster_nasa_miami1.ps">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/poster_nasa_miami1.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Tropical Pacific and Indian Ocean Heat Balance Inferred by Assimilation TOPEX Dat into a Near-global OGCM<br />
												NASA Oceanography Scientific Conference<br />
												Oceanology International Americas<br />
												Miami Beach, Florida<br />
												April 3-5, 2001
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>

					<p><strong>TOPEX-JASON 2000</strong></p>
					<ul class="articles">
						<li class="slide">
							<a href="posters/adj_sen.ps">
								<div class="image_and_description_container">
									<div class="img">
										<img class="thumb" src="/assets/images/research/presentations/adj_sen.jpg" alt="presentation screenshot">
									</div>
									<div class="list_text_content">
										<div class="article_teaser_body">
											<p>
												Interannual Variability of the Indonesian Throughflow Transport Estimated from Wind Stress and Adjoint Sensitivity<br />
												TOPEX-JASON SWT meeting<br />
												Miami Beach, Florida<br />
												2000
											</p>
										</div>
									</div>
								</div>
							</a>
						</li>
					</ul>
				</section><!-- //.list_view -->

				<h3 class="content_title named-anchor" id="posters_sio">SIO GROUP MEETING POSTERS</h3>
				<ul class="bullet_list">
					<li>
						<a href="posters/poster_SWT1.pdf" target="_blank" rel="noopener noreferrer">Variations of the large-scale ocean circulation estimated by combining data with a numerical model</a><br />
      					JASON-1 SWT Meeting<br />
      					Biarritz, France, June 10-12 2002 
 					</li>
 					<li>
						<a href="posters/poster_SWT2.pdf" target="_blank" rel="noopener noreferrer">Improving air-sea flux estimates through global ocean data assimilation</a><br />
						JASON-1 SWT Meeting<br />
						Biarritz, France, June 10-12 2002 
 					</li>
 					<li>
						<a href="posters/poster_SWT3.pdf" target="_blank" rel="noopener noreferrer">Estimating climate changes of the deep ocean</a><br />
						JASON-1 SWT Meeting<br />
						Biarritz, France, June 10-12 2002 
 					</li>
 					<li>
						<a href="posters/poster_SWT4.pdf" target="_blank" rel="noopener noreferrer">Vorticity balance in ECCO 2-degree global ocean simulations constrained by satellite and WOCE data</a><br />
						JASON-1 SWT Meeting<br />
						Biarritz, France, June 10-12 2002
					</li>
				</ul>

			</div><!-- //.wysiwyg_content -->
		</div><!-- //.grid_layout -->
	</section><!-- //.content_page -->

	<!-- END CONTENT -->
<?php include_once($include_path . 'includes/footer.inc.php'); ?>
</html>
