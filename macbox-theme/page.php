<?php 
// Template Name:about

?>




<?php 
    get_header()
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
					<div id="page-header" class="ph-full ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<!-- <img src="assets/img/page-header/ph-4.jpg" alt="Image"> -->
                                    <?php the_post_thumbnail(array(500,500)) ?>
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-caption-subtitle">
									<div class="ph-appear"><?php the_title() ?></div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Studio</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Studio</div>
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
							<div class="tt-section-inner tt-wrap">

								<div class="tt-row">
									<div class="tt-col-lg-9">

										<div class="text-xlg anim-fadeinup">

											<!-- Begin tt-Heading 
											====================== 
											* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
											* Use class "tt-heading-stroke" to enable stroke style.
											* Use class "tt-heading-center" to align tt-Heading to center.
											* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
											-->
											<div class="tt-heading tt-heading-lg margin-bottom-60">
												<!-- <h3 class="tt-heading-subtitle">Subtitle</h3> -->
												<h2 class="tt-heading-title">Howdy y'all!</h2> <!-- You can use <br> to break a text line if needed -->
											</div>
											<!-- End tt-Heading -->
                                                <?php echo get_the_content() ?>
											<p>We are creative team few supposing suspicion two. Course sir awesome <a href="https://themetorium.net/" target="_blank" rel="noopener">website teplates</a> add entire design. How one dull get busy dare far. At principle perfectly by sweetness do started.</p>

											<p>Friendship contrasted solicitude insipidity in introduced literature it. He seemed denote except as oppose do spring my. Between any may mention evening age shortly can ability regular. He shortly sixteen of colonel colonel evening cordial to.</p>
										</div>

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-3">
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
						<div class="tt-section">
							<div class="tt-section-inner">

								<!-- =============================
								///// Begin content carousel /////
								==================================
								* Use class "cc-shifted" to enable shifted style (no effect on small screens!).
								* Use class "cursor-drag" to enable cursor drag on carousel hover ("data-simulate-touch" attribute must be enabled!).
								* Use class "cc-scale-down" to enable scale down animation on carousel click.
								* Use class "cc-pagination-outside" to bring pagination outside.
								* Use class "cc-hide-pagination" to hide pagination (for desktop only!).
								* Use class "cc-hide-navigation" to hide navigation arrows.
								* Available data attributes:
										data-speed="900"......................(milliseconds)
										data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
										data-simulate-touch="true"............(true/false)
										data-loop="true"......................(true/false)
										data-pagination-type="bullets"........(bullets/fraction/progressbar)
								-->
								<div class="tt-content-carousel cursor-drag cc-scale-down cc-hide-pagination cc-pagination-outside cc-hide-navigation" data-loop="true" data-simulate-touch="true" data-speed="900">

									<!-- Begin swiper container -->
									<div class="swiper">

										<!-- Begin swiper wrapper (required) -->
										<div class="swiper-wrapper">

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (184).png" alt="image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (189).png" alt="image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (185).png" alt="image">
												</div> <!-- /.tt-content-carousel-item -->
											</div> 
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (183).png" alt="image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (186).png" alt="image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

											<!-- Begin swiper slide 
											======================== -->
											<div class="swiper-slide">
												<div class="tt-content-carousel-item">
													<figure>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (187).png" alt="image">
														<!-- <figcaption>Image Caption</figcaption> -->
													</figure>
												</div> <!-- /.tt-content-carousel-item -->
											</div>
											<!-- End swiper slide -->

										</div>
										<!-- End swiper wrapper -->

									</div>
									<!-- End swiper container -->


									<!-- Begin content carousel navigation (arrows) 
									=================================================== -->
									<div class="tt-cc-nav-prev">
										<div class="tt-cc-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
									</div>
									<div class="tt-cc-nav-next">
										<div class="tt-cc-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
									</div>
									<!-- End content carousel navigation -->

									<!-- Content carousel pagination -->
									<div class="tt-cc-pagination hide-cursor"></div>

								</div>
								<!-- End content carousel -->

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

								<div class="tt-row padding-bottom-2-p">
									<div class="tt-col-lg-7">

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

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-5 tt-align-self-center">

										<div class="anim-fadeinup">
											<h5>When passion, courage, and craftsmanship are put into something, positive things will happen.</h5>
										</div>

										<div class="text-gray anim-fadeinup">
											<p>Their could can widen ten she any. As so we smart those money in. Am wrote up whole so tears sense oh. Absolute required of reserved in offering no.</p>
										</div>

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

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

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section padding-top-xlg-150 padding-bottom-xlg-100 bg-white-accent-3">
							<div class="tt-section-inner tt-wrap">

								<div class="tt-row">
									<div class="tt-col-lg-5">

										<!-- Begin tt-Heading 
										====================== 
										* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
										* Use class "tt-heading-stroke" to enable stroke style.
										* Use class "tt-heading-center" to align tt-Heading to center.
										* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
										-->
										<div class="tt-heading tt-heading-lg margin-bottom-60 anim-fadeinup">
											<h3 class="tt-heading-subtitle">Testimonials</h3>
											<h2 class="tt-heading-title">What<br> Customers<br> Say</h2> <!-- You can use <br> to break a text line if needed -->
										</div>
										<!-- End tt-Heading -->

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-7 tt-align-self-center">

										<!-- Begin testimonials slider 
										===============================
										* Use class "text-center" to align text to the center.
										* Use class "cursor-drag" to enable cursor drag on carousel hover ("data-simulate-touch" attribute must be enabled!).
										* Use class "ts-hide-pagination" to hide pagination (for desktop only!).
										* Use class "ts-hide-navigation" to hide navigation arrows.
										* Use class "ts-full-width" to enable full width slider (useful for standalone element).
										* Available data attributes:
												data-speed="900"......................(milliseconds)
												data-autoplay="5000"..................(milliseconds. Note: disabled after user first interactions)
												data-simulate-touch="true"............(true/false)
												data-loop="true"......................(true/false)
										-->
										<div class="tt-testimonials-slider cursor-drag ts-scale-down ts-hide-navigation anim-fadeinup" data-loop="true" data-simulate-touch="true" data-speed="900">

											<!-- Begin swiper container -->
											<div class="swiper">

												<!-- Begin swiper wrapper (required) -->
												<div class="swiper-wrapper">

													<!-- Begin swiper slide 
													======================== -->
													<div class="swiper-slide">

														<!-- Begin testimonials slider item 
														==================================== -->
														<div class="tt-testimonials-slider-item">
															<div class="tt-ts-item-inner">
																<div class="tt-ts-text">
																	"One of the best template I've ever had. I love it! It's fully customizable, well coded, fast and responsive - fitting for all kind of devices."
																</div> <!-- /.tt-ts-text -->
																<div class="tt-ts-subtext">- Wironimo</div>
															</div> <!-- /.tt-ts-item-inner -->
														</div> 
														<!-- End testimonials slider item -->

													</div> 
													<!-- End swiper slide -->

													<!-- Begin swiper slide 
													======================== -->
													<div class="swiper-slide">

														<!-- Begin testimonials slider item 
														==================================== -->
														<div class="tt-testimonials-slider-item">
															<div class="tt-ts-item-inner">
																<div class="tt-ts-text">
																	"Brilliant template. Tons of options, many concepts, design flexibility, code quality, explanatory comments in each section for easy styling."
																</div> <!-- /.tt-ts-text -->
																<div class="tt-ts-subtext">- Gneto</div>
															</div> <!-- /.tt-ts-item-inner -->
														</div>
														<!-- End testimonials slider item -->

													</div>
													<!-- End swiper slide -->

													<!-- Begin swiper slide 
													======================== -->
													<div class="swiper-slide">

														<!-- Begin testimonials slider item 
														==================================== -->
														<div class="tt-testimonials-slider-item">
															<div class="tt-ts-item-inner">
																<div class="tt-ts-text">
																	"Easy to customize, plenty of choices to display your portfolio, fast loading times. Excellent support."
																</div> <!-- /.tt-ts-text -->
																<div class="tt-ts-subtext">- Brendak</div>
															</div> <!-- /.tt-ts-item-inner -->
														</div>
														<!-- End testimonials slider item -->

													</div>
													<!-- End swiper slide -->

													<!-- Begin swiper slide 
													======================== -->
													<div class="swiper-slide">

														<!-- Begin testimonials slider item 
														==================================== -->
														<div class="tt-testimonials-slider-item">
															<div class="tt-ts-item-inner">
																<div class="tt-ts-text">
																	"Very nice design and well organised and commented code. Also good customer service."
																</div> <!-- /.tt-ts-text -->
																<div class="tt-ts-subtext">- Gazzzzz</div>
															</div> <!-- /.tt-ts-item-inner -->
														</div>
														<!-- End testimonials slider item -->

													</div> 
													<!-- End swiper slide -->

													<!-- Begin swiper slide 
													======================== -->
													<div class="swiper-slide">

														<!-- Begin testimonials slider item 
														==================================== -->
														<div class="tt-testimonials-slider-item">
															<div class="tt-ts-item-inner">
																<div class="tt-ts-text">
																	"I founded a bug on Iphone and Ipad and the author fixed very quickly. I appreciated his efforts and his quickness in solving the problem."
																</div> <!-- /.tt-ts-text -->
																<div class="tt-ts-subtext">- Admanente</div>
															</div> <!-- /.tt-ts-item-inner -->
														</div>
														<!-- End testimonials slider item -->

													</div> 
													<!-- End swiper slide -->

												</div>
												<!-- End swiper wrapper -->

											</div>
											<!-- End swiper container -->


											<!-- Begin testimonials slider navigation (arrows) 
											=================================================== -->
											<div class="tt-ts-nav-prev">
												<div class="tt-ts-nav-arrow magnetic-item"><i class="tt-arrow-left"></i></div>
											</div>
											<div class="tt-ts-nav-next">
												<div class="tt-ts-nav-arrow magnetic-item"><i class="tt-arrow-right"></i></div>
											</div>
											<!-- End testimonials slider navigation -->

											<!-- Testimonials slider pagination -->
											<div class="tt-ts-pagination hide-cursor"></div>

										</div>
										<!-- End testimonials slider -->

									</div> <!-- /.tt-col -->
								</div> <!-- /.tt-row -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
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
									<!-- <li><img src=/assets/img/clients/client-1.png" alt="Client"></li> -->
								</ul>
								<!-- End logo wall -->

							</div> <!-- /.tt-section-inner -->
						</div>


						<!-- =======================
						///// Begin tt-section /////
						============================ 
						* You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
						-->
						<div class="tt-section no-padding">
							<div class="tt-section-inner">

								<!-- Begin tt-image
								====================
								* Use class "tti-fixed-height" to enable image fixed height (no effect on small screens!).
								* Use class "anim-image-parallax" on <img> tag to enable parallax effect.
								* Use class "margin-bottom-*" to enable bottom margins. For example "margin-bottom-100". More info about helper classes can be found in the file "helper.css".
								-->
								<div class="tt-image tti-fixed-height">
									<figure>
										<!-- <img class="anim-image-parallax tt-lazy" src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/misc/misc-6.jpg" alt="image"> -->
										<figcaption>
									
										</figcaption>
									</figure>
								</div> 
								<!-- End tt-image -->

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

								<!-- Begin page nav 
								==================== 
								* Use class "tt-pn-center" to align page nav to center.
								* Use class "tt-pn-stroke" to enable title stroke style.
								-->
								<div class="tt-page-nav tt-pn-stroke">
									<a href="/contact" class="tt-pn-link anim-fadeinup" data-cursor="<i class='fas fa-envelope'></i>">
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
					<!-- End page content -->


<?php 
    get_footer()
?>