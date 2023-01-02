<?php 
// Template Name:portfolio

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
					<div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-image-cover-2 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<!-- <div class="ph-image">
								<div class="ph-image-inner">
									<img src="assets/img/page-header/ph-3.jpg" alt="Image">
								</div>
							</div> -->
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption">
								<div class="ph-caption-subtitle">
									<div class="ph-appear">Selected Works</div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Portfolio</div>
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Portfolio</div>
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
						<div id="sdc-target" class="tt-section padding-top-150 padding-bottom-150">
							<div class="tt-section-inner max-width-1900">

								<!-- Begin portfolio list 
								========================== 
								* Use class "pli-hover" to enable hover effect.
								* Use class "pli-cropped" to crop images (it sets the images to a fixed height).
								* Use class "pl-alter" to enable an alternative layout.
								-->
								<div class="portfolio-list pli-cropped pli-hover">

									<!-- Begin portfolio list item 
									===============================
									* Use class "pli-image-is-light" if needed, it makes the caption visible better if you use light image. 
									-->
									<a href="https://loveandpeaceforall.com/" class="portfolio-list-item" data-cursor="View<br>Project">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". No effect if "pli-image-is-light" used on "portfolio-list-item"! -->
										<figure class="pli-image cover-opacity-2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (187).png" alt="image">
										</figure> <!-- /.pli-image -->

										<div class="pli-caption-front">
											<div class="pli-caption">
												<div class="pli-categories-wrap">
													<!-- <div class="pli-category">People</div> -->
													<!-- <div class="pli-category">Varia</div> -->
												</div> <!-- /.pli-categories-wrap -->

												<h2 class="pli-title">Love And<br class="hide-from-sm"> Peace For All</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
											</div> <!-- /.pli-caption -->
										</div> <!-- /.pli-caption-front -->

										<div class="pli-caption pli-caption-back">
											<div class="pli-categories-wrap">
												<!-- <div class="pli-category">People</div> -->
												<!-- <div class="pli-category">Varia</div> -->
											</div> <!-- /.pli-categories-wrap -->

											<h2 class="pli-title">Love And<br class="hide-from-sm"> Peace For All</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
										</div> <!-- /.pli-caption -->

										<div class="pli-counter"></div>
									</a> 
									<!-- End portfolio list item -->

									<!-- Begin portfolio list item 
									===============================
									* Use class "pli-image-is-light" if needed, it makes the caption visible better if you use light image. 
									-->
									<a href="https://metafrasi.it/" class="portfolio-list-item" data-cursor="View<br>Project">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". No effect if "pli-image-is-light" used on "portfolio-list-item"! -->
										<figure class="pli-image cover-opacity-2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (188).png" alt="image">
										</figure> <!-- /.pli-image -->

										<div class="pli-caption-front">
											<div class="pli-caption">
												<div class="pli-categories-wrap">
													<!-- <div class="pli-category">Creative</div> -->
													<!-- <div class="pli-category">Varia</div> -->
												</div> <!-- /.pli-categories-wrap -->

												<h2 class="pli-title">Meta<br class="hide-from-sm"> Frasi</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
											</div> <!-- /.pli-caption -->
										</div> <!-- /.pli-caption-front -->

										<div class="pli-caption pli-caption-back">
											<div class="pli-categories-wrap">
												<!-- <div class="pli-category">Creative</div> -->
												<!-- <div class="pli-category">Varia</div> -->
											</div> <!-- /.pli-categories-wrap -->

											<h2 class="pli-title">Meta<br class="hide-from-sm"> Frasi</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
										</div> <!-- /.pli-caption -->

										<div class="pli-counter"></div>
									</a> 
									<!-- End portfolio list item -->

									<!-- Begin portfolio list item 
									===============================
									* Use class "pli-image-is-light" if needed, it makes the caption visible better if you use light image. 
									-->
									<a href="https://rapidtool.com.au/" class="portfolio-list-item" data-cursor="View<br>Project">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". No effect if "pli-image-is-light" used on "portfolio-list-item"! -->
										<figure class="pli-video cover-opacity-2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (186).png" alt="image">
										</figure> <!-- /.pli-video -->

										<div class="pli-caption-front">
											<div class="pli-caption">
												<div class="pli-categories-wrap">
													<!-- <div class="pli-category">People</div> -->
													<!-- <div class="pli-category">Varia</div> -->
												</div> <!-- /.pli-categories-wrap -->

												<h2 class="pli-title">Rapid<br class="hide-from-sm"> Tool</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
											</div> <!-- /.pli-caption -->
										</div> <!-- /.pli-caption-front -->

										<div class="pli-caption pli-caption-back">
											<div class="pli-categories-wrap">
												<!-- <div class="pli-category">People</div> -->
												<!-- <div class="pli-category">Varia</div> -->
											</div> <!-- /.pli-categories-wrap -->

											<h2 class="pli-title">Rapid<br class="hide-from-sm"> Tool</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
										</div> <!-- /.pli-caption -->

										<div class="pli-counter"></div>
									</a> 
									<!-- End portfolio list item -->

									<!-- Begin portfolio list item 
									===============================
									* Use class "pli-image-is-light" if needed, it makes the caption visible better if you use light image. 
									-->
									<a href="https://expresspromo.com.au/" class="portfolio-list-item" data-cursor="View<br>Project">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". No effect if "pli-image-is-light" used on "portfolio-list-item"! -->
										<figure class="pli-image cover-opacity-2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (185).png" alt="image">
										</figure> <!-- /.pli-image -->

										<div class="pli-caption-front">
											<div class="pli-caption">
												<div class="pli-categories-wrap">
													<!-- <div class="pli-category">Nature</div> -->
													<!-- <div class="pli-category">Varia</div> -->
												</div> <!-- /.pli-categories-wrap -->

												<h2 class="pli-title">Express<br class="hide-from-sm"> Promo</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
											</div> <!-- /.pli-caption -->
										</div> <!-- /.pli-caption-front -->

										<div class="pli-caption pli-caption-back">
											<div class="pli-categories-wrap">
												<!-- <div class="pli-category">Nature</div> -->
												<!-- <div class="pli-category">Varia</div> -->
											</div> <!-- /.pli-categories-wrap -->

											<h2 class="pli-title">Express<br class="hide-from-sm"> Promo</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
										</div> <!-- /.pli-caption -->

										<div class="pli-counter"></div>
									</a> 
									<!-- End portfolio list item -->

									<!-- Begin portfolio list item 
									===============================
									* Use class "pli-image-is-light" if needed, it makes the caption visible better if you use light image. 
									-->
									<a href="https://recrutechs.com/" class="portfolio-list-item" data-cursor="View<br>Project">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". No effect if "pli-image-is-light" used on "portfolio-list-item"! -->
										<figure class="pli-image cover-opacity-2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (184).png" alt="image">
										</figure> <!-- /.pli-image -->

										<div class="pli-caption-front">
											<div class="pli-caption">
												<div class="pli-categories-wrap">
													<div class="pli-category"></div>
													<!-- <div class="pli-category">Varia</div> -->
												</div> <!-- /.pli-categories-wrap -->

												<h2 class="pli-title">Recru<br class="hide-from-sm"> Techs</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
											</div> <!-- /.pli-caption -->
										</div> <!-- /.pli-caption-front -->

										<div class="pli-caption pli-caption-back">
											<div class="pli-categories-wrap">
												<!-- <div class="pli-category">Branding</div> -->
												<!-- <div class="pli-category">Varia</div> -->
											</div> <!-- /.pli-categories-wrap -->

											<h2 class="pli-title">Recru<br class="hide-from-sm"> Techs</h2>  <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
										</div> <!-- /.pli-caption -->

										<div class="pli-counter"></div>
									</a> 
									<!-- End portfolio list item -->

									<!-- Begin portfolio list item 
									===============================
									* Use class "pli-image-is-light" if needed, it makes the caption visible better if you use light image. 
									-->
									<a href="https://unitybox.org/#/" class="portfolio-list-item" data-cursor="View<br>Project">

										<!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". No effect if "pli-image-is-light" used on "portfolio-list-item"! -->
										<figure class="pli-image cover-opacity-2">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/1200/Screenshot (183).png" alt="image">
										</figure> <!-- /.pli-image -->

										<div class="pli-caption-front">
											<div class="pli-caption">
												<div class="pli-categories-wrap">
													<!-- <div class="pli-category">People</div> -->
													<!-- <div class="pli-category">Varia</div> -->
												</div> <!-- /.pli-categories-wrap -->

												<h2 class="pli-title">Unity Box</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
											</div> <!-- /.pli-caption -->
										</div> <!-- /.pli-caption-front -->

										<div class="pli-caption pli-caption-back">
											<div class="pli-categories-wrap">
												<!-- <div class="pli-category">People</div> -->
												<!-- <div class="pli-category">Varia</div> -->
											</div> <!-- /.pli-categories-wrap -->

											<h2 class="pli-title">Unity Box</h2> <!-- You can use <br class="hide-from-sm"> to break a text line if needed -->
										</div> <!-- /.pli-caption -->

										<div class="pli-counter"></div>
									</a> 
									<!-- End portfolio list item -->

									

								<!-- Begin tt-pagination (uncomment below code if you want to use pagination)
								========================= 
								* Use class "tt-pagin-center" to align center.
								-->
								<!-- <div class="tt-pagination tt-pagin-center margin-top-120 anim-fadeinup tt-wrap">
									<div class="tt-pagin-prev">
										<a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
									</div>
									<div class="tt-pagin-numbers">
										<a href="#" class="tt-pagin-item magnetic-item active">1</a>
										<a href="" class="tt-pagin-item magnetic-item">2</a>
										<a href="" class="tt-pagin-item magnetic-item">3</a>
										<a href="" class="tt-pagin-item magnetic-item">4</a>
									</div>
									<div class="tt-pagin-next">
										<a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
									</div>
								</div> -->
								<!-- End tt-pagination -->

							</div> <!-- /.tt-section-inner -->
						</div>
						<!-- End tt-section -->


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
					<!-- End page content -->
					<?php
	get_footer();
?>






<?php 
    get_footer()
?>