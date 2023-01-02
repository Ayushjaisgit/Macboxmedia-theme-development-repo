<?php
	get_header();
    the_post();
?>


<?php         
                                            $imagepath=wp_get_attachment_image_src(
                                                get_post_thumbnail_id(),'large');

                                            ?>

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
					<div id="page-header" class="ph-cap-sm ph-bg-image ph-ghost-scroll ph-image-cover-6 ph-content-parallax">
						<div class="page-header-inner tt-wrap">

							<!-- Begin page header image 
							============================= -->
							<div class="ph-image">
								<div class="ph-image-inner">
									<img src="<?php echo $imagepath[0] ?>" >
								</div>
							</div>
							<!-- End page header image -->

							<!-- Begin page header caption
							=============================== 
							Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
							-->
							<div class="ph-caption max-width-1000">
								<div class="ph-categories ph-appear">
									<!-- <a href="blog-archive.html" class="ph-category">Lifestyle</a> -->
									<!-- <a href="blog-archive.html" class="ph-category">Uncategorized</a> -->
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear"><?php the_title() ?></div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Blog</div>
								</div>
								<div class="ph-meta">
									<div class="ph-appear">
										<span class="ph-meta-published"><?php echo get_the_date() ?></span>
										<span class="ph-meta-posted-by">by: <a href="" title="View all posts by Admin"><?php the_author(); ?> </a></span>
									</div>
								</div> <!-- /.ph-meta -->
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

						<!-- Begin page header share (share buttons are for design purposes only!) 
						============================= -->
						<div class="ph-share ph-appear">
							<div class="ph-share-inner">
								<div class="ph-share-trigger">
									<div class="ph-share-text">Share</div>
									<div class="ph-share-icon"><i class="fas fa-share"></i></div>
								</div> <!-- /.ph-share-trigger -->

								<div class="social-buttons">
									<ul>
										<li><a href="#" class="magnetic-item" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
										<li><a href="#" class="magnetic-item" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
									</ul>
								</div> <!-- /.social-buttons -->
							</div> <!-- /.ph-share-inner -->
						</div>
						<!-- End page header share -->
						
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
							<div class="tt-section-inner tt-wrap max-width-900">

								<!-- Begin blog post 
								===================== -->
								<article class="tt-blog-post lightgallery">

									<!-- Begin blog post content -->
									<div class="tt-blog-post-content">

										<!-- <p class="text-xlg"></p> -->

										<p><?php the_content(); ?></p>

										
									<!-- End blog post content -->

									<!-- Begin blog post tags -->
									<div class="tt-blog-post-tags">
										<ul>
											<li><span>Tags:</span></li>
											<li><a href="blog-archive.html">#photography</a></li> 
											<li><a href="blog-archive.html">#travel</a></li>
											<li><a href="blog-archive.html">#motion</a></li>
										</ul>
									</div>
									<!-- End blog post tags -->

									<!-- Begin blog post share (Note: for design purposes only!) 
									=========================== 
									* Use class "bss-fixed-bottom" to enable post share fixed bottom position (effect only on small screens!!!).
									-->
									<div class="tt-blog-post-share">
										<div class="tt-bps-text">Share:</div>
										<div class="social-buttons">
											<ul>
												<li><a href="#" class="magnetic-item" rel="noopener" title="Share on Facebook"><i class="fab fa-facebook-f"></i></a></li>
												<li><a href="#" class="magnetic-item" rel="noopener" title="Share on Twitter"><i class="fab fa-twitter"></i></a></li>
												<li><a href="#" class="magnetic-item" rel="noopener" title="Share on Pinterest"><i class="fab fa-pinterest"></i></a></li>
											</ul>
										</div> <!-- /.social-buttons -->
									</div>
									<!-- End blog post share -->

								</article> 
								<!-- End blog post -->

                                <?php comment_form(); ?>

								
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
