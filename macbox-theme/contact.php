<?php 
// Template Name:contact

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
									<div class="ph-appear">Let's Talk</div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Contact</div>
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Contact</div>
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

								<div class="tt-row tt-lg-row-reverse">
									<div class="tt-col-lg-4">

										<!-- Begin tt-Heading 
										====================== 
										* Use class "tt-heading-xsm", "tt-heading-sm", "tt-heading-lg", "tt-heading-xlg" or "tt-heading-xxlg" to set caption size (no class = default size).
										* Use class "tt-heading-stroke" to enable stroke style.
										* Use class "tt-heading-center" to align tt-Heading to center.
										* Use prepared helper class "max-width-*" to add custom width if needed. Example: "max-width-800". More info about helper classes can be found in the file "helper.css".
										-->
										<div class="tt-heading margin-bottom-8-p anim-fadeinup">
											<!-- <h3 class="tt-heading-subtitle text-gray">Subtitle</h3> -->
											<h2 class="tt-heading-title">Get in Touch</h2> <!-- You can use <br> to break a text line if needed -->
										</div>
										<!-- End tt-Heading -->

										<div class="text-gray anim-fadeinup">
											<p>Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it.</p>
										</div>

										<!-- Begin contact info 
										======================== -->
										<ul class="tt-contact-info padding-bottom-40 anim-fadeinup">
											<li>
												<span class="tt-ci-icon"><i class="fas fa-map-marker-alt"></i></span>
												121 King Street, Melbourne, Australia
											</li>
											<li>
												<span class="tt-ci-icon"><i class="fas fa-phone"></i></span>
												<a href="tel:+123456789000" class="tt-link">+(123) 456 789 000</a>
											</li>
											<li>
												<span class="tt-ci-icon"><i class="fas fa-envelope"></i></span>
												<a href="mailto:company@email.com" class="tt-link">company@email.com</a>
											</li>
											<li>
												<h6 class="no-margin-bottom margin-top-40">Follow:</h6>
												<!-- Begin social buttons -->
												<div class="social-buttons">
													<ul>
														<li><div class="magnetic-wrap"><a href="https://www.facebook.com/themetorium" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener" style=""><i class="fab fa-facebook-f"></i></a></div></li>
														<li><div class="magnetic-wrap"><a href="https://twitter.com/Themetorium" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener" style=""><i class="fab fa-twitter"></i></a></div></li>
														<li><div class="magnetic-wrap"><a href="https://www.youtube.com/" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener" style=""><i class="fab fa-youtube"></i></a></div></li>
														<li><div class="magnetic-wrap"><a href="https://dribbble.com/Themetorium" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener" style=""><i class="fab fa-dribbble"></i></a></div></li>
														<li><div class="magnetic-wrap"><a href="https://www.behance.net/Themetorium" class="magnetic-item not-hide-cursor" target="_blank" rel="noopener" style=""><i class="fab fa-behance"></i></a></div></li>
													</ul>
												</div>
												<!-- End social buttons -->
											</li>
										</ul>
										<!-- End contact info -->

									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-1">
									</div> <!-- /.tt-col -->

									<div class="tt-col-lg-7">

										<!-- Begin form 
										================ 
										* Use class "tt-form-filled" or "tt-form-minimal" to change form style.
										* Use class "tt-form-sm" or "tt-form-lg" to change form size (no class = default size).
										-->
										<form id="tt-contact-form" class="tt-form-filled anim-fadeinup">

											<!-- Begin hidden required fields (https://github.com/agragregra/uniMail) -->
											<input type="hidden" name="project_name" value="yourwebsiteaddress.com"> <!-- Change value to your site name -->
											<input type="hidden" name="admin_email" value="your@email.com"> <!-- Change value to your valid email address (where a message will be sent) -->
											<input type="hidden" name="form_subject" value="Message from yourwebsiteaddress.com"> <!-- Change value to your own message subject -->
											<!-- End Hidden Required Fields -->

											<div class="tt-row">
												<div class="tt-col-md-6">

													<div class="tt-form-group">
												<?php the_content(); ?>

														<!-- <label>Your Name <span class="required">*</span></label> -->
														<!-- <input class="tt-form-control" type="text" name="Name" placeholder="" required> -->
													</div>

												</div> <!-- /.tt-col -->



												</div> <!-- /.tt-col -->
											</div> <!-- /.tt-row -->

											

											<small class="tt-form-text"><em>Fields are required!</em></small>

											<!-- <button type="submit" class="tt-btn tt-btn-primary margin-top-30">
												<div data-hover="Send Message">Send Message</div>
												<span class="tt-btn-icon"><i class="fas fa-paper-plane"></i></span>
											</button> -->
										</form>
										<!-- End form -->

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
    get_footer()
?>