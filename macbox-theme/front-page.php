<?php 
// Template Name:home

?>



<?php
	get_header();
?>

	
<!-- *************************************
        *********** Begin content wrap *********** 
        ************************************** -->
        <div id="content-wrap">

            
            <!-- ========================
            ///// Begin page header /////
            ============================= 
            * Use class "ph-full" to enable fullscreen size (no effect on smaller screens!).
            * Use class "ph-cap-sm", "ph-cap-lg", "ph-cap-xlg" or "ph-cap-xxlg" to set caption size (no class = default size).
            * Use class "ph-center" to enable content center position.
            * Use class "ph-image-cropped" to crop image (if image is used). It uses fixed image dimensions (no effect with class "ph-bg-image"!).
            * Use class "ph-bg-image" to enable page header background image. Note: "ph-caption-title-ghost" will be disabled if you enable this option!
            * Use class "ph-bg-image-is-light" if needed, it makes the elements dark and more visible if you use a very light background image (effect only with class "ph-bg-image").
            * Use class "ph-image-cover-*" to set image overlay opacity. For example "ph-image-cover-2" or "ph-image-cover-2-5" (up to "ph-image-cover-9-5").
            * Use class "ph-content-parallax" to enable content parallax.
            * Use class "ph-stroke" to enable caption title stroke style.
            * Use class "ph-ghost-scroll" to enable the scroll effect to caption title ghost (no effect with class "ph-center"!).
            -->
            <div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
                <div class="page-header-inner tt-wrap">

                    <!-- Begin page header image 
                    ============================= -->
                    <!-- <div class="ph-image">
                        <div class="ph-image-inner">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/page-header/ph-1.jpg" alt="Image">
                        </div>
                    </div> -->
                    <!-- End page header image -->

                    <!-- Begin page header caption
                    =============================== 
                    Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
                    -->
                    <div class="ph-caption">
                        <!-- <div class="ph-caption-subtitle">
                            <div class="ph-appear">Subtitle</div>
                        </div> -->
                        <h1 class="ph-caption-title">
                            <div class="ph-appear">Creative branding,<br> design <span class="hide-from-sm">→</span> <em class="text-stroke-light">focused</em><br> digital solutions</div> <!-- You can use <br> to break a text line if needed -->
                        </h1>
                        <div class="ph-caption-title-ghost">
                            <div class="ph-appear">Creative</div>
                        </div>
                    </div>
                    <!-- End page header caption -->

                </div> <!-- /.page-header-inner -->

                <!-- Begin scroll down (you can change "data-offset" to set scroll top offset) 
                ======================= -->
                <div class="tt-scroll-down">
                    <a href="#page-content" class="tt-sd-inner ph-appear" data-offset="0">
                        <div class="tt-sd-arrow">
                            <div class="tt-sd-arrow-inner"></div>
                        </div>
                        <div class="tt-sd-text">Scroll</div>
                    </a>
                </div>
                <!-- End scroll down -->
                
            </div>
            <!-- End page header -->

					
					<!-- *************************************
					*********** Begin page content *********** 
					************************************** -->
					<div id="page-content">


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- Begin portfolio grid (works combined with tt-Ggrid!)
								========================== 
								* Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
								* Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
								* Use class "pgi-cap-center" to position portfolio grid item caption to center.
								* Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
								--> 
								<div id="portfolio-grid" class="pgi-hover">

									<!-- Begin tt-Grid
									=================== 
									* Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
									* Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
									* Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
									* Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
									* Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
									* Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									* Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
									-->
									<div class="tt-grid ttgr-layout-creative-2 ttgr-gap-4">

										<!-- Begin tt-Grid items wrap 
										============================== -->
										<div class="tt-grid-items-wrap isotope-items-wrap">

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item people">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
													-->
													<div class="portfolio-grid-item">
														<a href="https://loveandpeaceforall.com/" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (187).png" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="https://loveandpeaceforall.com/">Love and peace for All</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">People</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item creative">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="https://unitybox.org/#/" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (183).png" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="https://unitybox.org/#/">Unity Box</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Creative</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item creative">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="https://recrutechs.com/" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (184).png" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="https://recrutechs.com/">Recru Techs</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Creative</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->
											<!-- Begin tt-Grid item
											======================== -->
											<div class="tt-grid-item isotope-item nature">
												<div class="ttgr-item-inner">

													<!-- Begin portfolio grid item 
													===============================
													* Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
													-->
													<div class="portfolio-grid-item">
														<a href="https://metafrasi.it/" class="pgi-image-wrap" data-cursor="View<br>Project">
															<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
															<div class="pgi-image-holder">
																<div class="pgi-image-inner anim-zoomin">
																	<figure class="pgi-image ttgr-height">
																		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (188).png" alt="image">
																	</figure> <!-- /.pgi-image -->
																</div> <!-- /.pgi-image-inner -->
															</div> <!-- /.pgi-image-holder -->
														</a> <!-- /.pgi-image-wrap -->

														<div class="pgi-caption">
															<div class="pgi-caption-inner">
																<h2 class="pgi-title">
																	<a href="https://metafrasi.it/">MetaFrasi</a>
																</h2>
																<div class="pgi-categories-wrap">
																	<div class="pgi-category">Nature</div>
																	<!-- <div class="pgi-category">Varia</div> -->
																</div> <!-- /.pli-categories-wrap -->
															</div> <!-- /.pgi-caption-inner -->
														</div> <!-- /.pgi-caption -->
													</div>
													<!-- End portfolio grid item -->

												</div> <!-- /.ttgr-item-inner -->
											</div>
											<!-- End tt-Grid item -->

										</div>
										<!-- End tt-Grid items wrap  -->

									</div>
									<!-- End tt-Grid -->

								</div>
								<!-- End portfolio grid -->


								<div class="text-center anim-fadeinup">

									<!-- Begin scrolling button (See all works)
									============================ -->
									<a href="portfolio/" class="tt-scrolling-btn all-works-btn" data-cursor="All<br>Works">
										<div class="scr-btn-inner ph-appear">
											<div class="scr-btn-icon"><i class="fas fa-arrow-right"></i></div>
											<div class="scr-btn-spinner">
												<svg viewBox="0 0 500 500">
													<defs>
														<path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
													</defs>
													<!-- If you change the text, you probably need to adjust the CSS so that it fits correctly. Find ".scr-btn-text" in file "theme.css" and adjust it for your needs. -->
													<text dy="30" class="scr-btn-text">
														<textPath xlink:href="#textcircle">See All Works - See All Works -</textPath>
													</text>
												</svg>
											</div>
										</div> <!-- /.sdc-inner -->
									</a>
									<!-- End scrolling button -->

								</div> <!-- /.text-center -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-100 padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap max-width-1700">

								<div class="tt-row margin-left-lg-3-p margin-right-lg-3-p">
									<div class="tt-col-xl-4">

										<!-- Begin tt-Heading 
										====================== 
										* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
										* Use class "tt-heading-stroke" to enable stroke style.
										* Use class "tt-heading-center" to align tt-Heading to center.
										* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
										-->
										<div class="tt-heading tt-heading-xlg anim-fadeinup">
											<h3 class="tt-heading-subtitle">Our Services</h3>
											<h2 class="tt-heading-title">Digital Innovation</h2> <!-- You can use <br> to break a text line if needed -->
										</div>
										<!-- End tt-Heading -->

										<div class="max-width-600 margin-bottom-60 anim-fadeinup">
											<h5>When passion, courage, and craftsmanship are put into something, positive things will happen.</h5>
										</div>

									</div> <!-- /.tt-col -->

									<div class="tt-col-xl-1">
									</div> <!-- /.tt-col -->

									<div class="tt-col-xl-7">

										<!-- Begin accordion 
										===================== 
										* Use class "tt-ac-sm", "tt-ac-lg", "tt-ac-xlg" or "tt-ac-xxlg" to set accordion size.
										* Use class "tt-ac-borders" to enable borders.
										* Note: Add class "is-open" to the "tt-accordion-content" to make this content open by default.
										-->
										<div class="tt-accordion tt-ac-borders">
											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">UX / Research</h3>
														<!-- <div class="tt-accordion-subtext">Mauris mauris ante</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Advantage old had otherwise sincerity dependent additions. It in adapted natural hastily is justice. Six draw you him <a href="">newspaper assurance</a>. Prepare garrets it expense windows shewing do an. She projection advantages resolution son indulgence. Part sure on no long life am at ever. In songs above he as drawn.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Digital Strategy</h3>
														<!-- <div class="tt-accordion-subtext">Vivamus nisi</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Allow miles wound place the leave had. To sitting subject no improve studied limited. Ye indulgence unreserved connection alteration appearance my an astonished. Up as seen sent make he they of. Her raising and himself pasture believe females. Fancy she stuff after aware merit small his.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Branding & Identity</h3>
														<!-- <div class="tt-accordion-subtext">Nam min proin eget</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>Rank tall boy man them over post now. Off into she bed long fat room. Recommend existence curiosity perfectly favourite get eat she why daughters. Not may too nay busy last song must sell. An newspaper assurance discourse ye certainly. Soon gone game and why many calm have.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

											<div class="tt-accordion-item anim-fadeinup">
												<div class="tt-accordion-heading">
													<div class="tt-ac-head cursor-alter">
														<h3 class="tt-ac-head-title">Content Production</h3>
														<!-- <div class="tt-accordion-subtext">Condimentum sit amet</div> -->
													</div>

													<div class="tt-accordion-caret-wrap">
														<div class="tt-accordion-caret-inner magnetic-item">
															<div class="tt-accordion-caret"></div>
														</div>
													</div> <!-- /.tt-accordion-caret-wrap -->
												</div> <!-- /.tt-accordion-heading -->
												<div class="tt-accordion-content max-width-800">
													<p>To sure calm much most long me mean. Able rent long in do we. Uncommonly no it announcing melancholy an in. Mirth learn it he given. Secure shy favour length all twenty denote. He felicity no an at packages answered opinions juvenile.</p>
												</div> <!-- /.tt-accordion-content -->
											</div> <!-- /.tt-accordion-item -->

										</div>
										<!-- End accordion -->

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-120 padding-bottom-xlg-120 bg-white-accent-3">
							<div class="tt-section-inner">

								<!-- Begin scrolling text
								========================== 
								Change data-scroll-speed="*" to adjust scrolling speed.
								Use class "scr-text-reverse" to reverse scrolling direction. 
								Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!). 
								-->
								<div class="tt-scrolling-text" data-scroll-speed="10">
									<div class="tt-scrolling-text-inner" data-text="We are trusted by over 18,000 clients →">
										We are trusted by over 18,000 clients →
									</div> <!-- /.tt-scrolling-text-inner -->
								</div>
								<!-- End scrolling text -->

								<!-- Begin scrolling text
								========================== 
								Change data-scroll-speed="*" to adjust scrolling speed.
								Use class "scr-text-reverse" to reverse scrolling direction. 
								Use class "scr-text-stroke" to enable text stroke style (no effect on smaller screens!). 
								-->
								<div class="tt-scrolling-text scr-text-stroke scr-text-reverse" data-scroll-speed="10">
									<div class="tt-scrolling-text-inner" data-text="More than 15 year experience →">
										More than 15 year experience →
									</div> <!-- /.tt-scrolling-text-inner -->
								</div>
								<!-- End scrolling text -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

								<!-- Begin logo wall 
								=====================
								* Use class "cl-col-2", "cl-col-3" or "cl-col-4" to change columns.
								* Hint: for better results make sure all your images are in the same dimensions!
								-->
								<ul class="tt-logo-wall anim-fadeinup">
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-1-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-1-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-2-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-2-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-3-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-3-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-4-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-4-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-5-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-5-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-6-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-6-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-7-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-7-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-8-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-8-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-9-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-9-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>
									<li>
										<a href="https://themetorium.net/" class="cursor-alter" target="_blank" rel="noopener">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-10-light.png" class="lv-client-light" alt="Client">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-10-dark.png" class="lv-client-dark" alt="Client">
										</a>
									</li>

									<!-- Use the below example if you want a list without links -->
									<!-- <li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/client-1.png" alt="Client"></li> -->
								</ul>
								<!-- End logo wall -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-150 bg-white-accent-3">
							<div class="tt-section-inner tt-wrap max-width-1600">

								<!-- Begin tt-Heading 
								====================== 
								* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
								* Use class "tt-heading-stroke" to enable stroke style.
								* Use class "tt-heading-center" to align tt-Heading to center.
								* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-heading tt-heading-xlg margin-bottom-7-p anim-fadeinup max-width-1250 margin-auto">
									<h3 class="tt-heading-subtitle">Latest News</h3>
									<h2 class="tt-heading-title">From the Blog</h2> <!-- You can use <br> to break a text line if needed -->
									<a href="blog/" class="tt-btn tt-btn-link">
										<div data-hover="Browse All News">Browse All News</div>
										<span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
									</a>
								</div>
								<!-- End tt-Heading -->

								<!-- ==========================
								///// Begin blog carousel /////
								===============================
								* Use class "tt-blc-shifted" to enable shifted style (no effect on smaller screens!).
								* Use class "tt-blc-hide-navigation" to hide navigation.
								* Available data attributes:
										data-speed="800"......................(milliseconds)
										data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
										data-simulate-touch="true"............(true/false)
										data-pagination-type="bullets"........(bullets/fraction/progressbar)
								-->
								<div class="tt-blog-carousel anim-fadeinup" data-speed="800" data-simulate-touch="true" data-pagination-type="bullets">

									<!-- Begin swiper container -->
									<div class="swiper">

										<!-- Begin swiper wrapper (required) -->
										<div class="swiper-wrapper">

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="wordpress/2022/12/07/seo-gap-analysis-whiteboard-friday/" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
														<img class="swiper-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/low-qlt-thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/seo.png" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="/">Lifestyle</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="wordpress/2022/12/07/seo-gap-analysis-whiteboard-friday/">SEO Gap Analysis — Whiteboard Friday</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 26, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by Admin">Admin</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="wordpress/2022/12/08/from-startups-to-fortune-500s-this-marketing-strategy-is-unbeatable/" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
															<img class="swiper-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/low-qlt-thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/500.png" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="/">Tutorials</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="wordpress/2022/12/08/from-startups-to-fortune-500s-this-marketing-strategy-is-unbeatable/">From startups to Fortune 500s: This marketing strategy is unbeatable</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 24, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by Admin">Admin</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="wordpress/2022/12/07/2022-youtube-and-video-serp-result-changes/" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
														<img class="swiper-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/low-qlt-thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/video.png" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="blog-archive.html">Lifestyle</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="wordpress/2022/12/07/2022-youtube-and-video-serp-result-changes/">2022 YouTube and Video SERP Result Changes</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 23, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by Admin">Admin</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="wordpress/2022/12/08/7-seo-lead-generation-tips-to-grow-your-business/" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
														<img class="swiper-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/low-qlt-thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/seo2.png" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="/">Inspiration</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="wordpress/2022/12/08/7-seo-lead-generation-tips-to-grow-your-business/">7 SEO lead generation tips to grow your business</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 21, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by Admin">Admin</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">

												<!-- Begin blog carousel item 
												============================== -->
												<div class="tt-blog-carousel-item">
													<a href="wordpress/2022/12/08/the-importance-of-ecommerce-for-your-business-in-2022/" class="tt-bci-image-wrap" data-cursor="Read<br>More">
														<figure class="tt-bci-image">
														<img class="swiper-lazy" src="<?php echo get_template_directory_uri(); ?>/assets/img/low-qlt-thumb.jpg" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/ecom.png" alt="Image">
														</figure> <!-- /.tt-bci-image -->
													</a> <!-- /.tt-bci-image-wrap -->

													<div class="tt-bci-info">
														<div class="tt-bci-categories">
															<a href="/">Tutorials</a>
															<!-- <a href="blog-archive.html">Uncategorized</a> -->
														</div>
														<h2 class="tt-bci-title"><a href="wordpress/2022/12/08/the-importance-of-ecommerce-for-your-business-in-2022/">The Importance of eCommerce for Your Business in 2022</a></h2>
														<div class="tt-bci-meta"> 
															<span class="published">May 19, 2022</span>
															<span class="posted-by">- by <a href="blog-archive.html" title="View all posts by Admin">Admin</a></span>
														</div> <!-- /.tt-bci-meta -->
													</div> <!-- /.tt-bci-inf -->
												</div>
												<!-- End blog carousel item -->

											</div>
											<!-- End swiper slide -->

										</div>
										<!-- End swiper wrapper -->

									</div>
									<!-- End swiper container -->


									<!-- Begin blog carousel navigation (arrows) 
									============================================= -->
									<div class="tt-blc-nav-prev">
										<div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
									</div>
									<div class="tt-blc-nav-next">
										<div class="tt-blc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
									</div>
									<!-- End blog carousel navigation -->

									<!-- Blog carousel pagination -->
									<div class="tt-blc-pagination hide-cursor"></div>

								</div>
								<!-- End blog carousel -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						
						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-bottom-xlg-150">
							<div class="tt-section-inner tt-wrap">

							<!-- Begin page nav 
								==================== 
								* Use class "tt-pn-center" to align page nav to center.
								* Use class "tt-pn-stroke" to enable title stroke style.
								-->
								<div class="tt-page-nav tt-pn-stroke">
									<a href="contact/" class="tt-pn-link anim-fadeinup" data-cursor='<i class="fas fa-envelope"></i>'> 
										<div class="tt-pn-title">Let's talk</div>
										<div class="tt-pn-hover-title">Let's talk</div>
									</a> <!-- /.tt-pn-link -->
									<div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>
								</div>
								<!-- End page nav -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


					</div>
						<!-- End tt-section -->


					</div>
					<!-- End page content -->
					
					<?php
	get_footer();
?>
