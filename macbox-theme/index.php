<?php 
// Template Name:blog

?>

<?php
	get_header();
    the_post();
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
					<div id="page-header" class="ph-cap-lg ph-ghost-scroll ph-image-cropped ph-content-parallax">
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
							<div class="ph-caption max-width-1000">
								<div class="ph-caption-subtitle">
									<div class="ph-appear">Articles &amp; News</div>
								</div>
								<h1 class="ph-caption-title">
									<div class="ph-appear">Blog</div> <!-- You can use <br> to break a text line if needed -->
								</h1>
								<div class="ph-caption-title-ghost">
									<div class="ph-appear">Blog</div>
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
							<div class="tt-section-inner tt-wrap max-width-900">
								
								<!-- Begin blog list
								===================== 
								* Use class "bli-image-cropped" to grop blog list item images (set fixed height).
								* Use class "bli-compact" to enable compact blog list style. Note: If "tt-sidebar" is used, then add more width to "tt-section-inner", for example "max-width-1600".
								-->
								<div id="blog-list" class="bli-image-cropped">
                                        <?php  

                                        while(have_posts()){
                                            the_post();
                                            
                                            $imagepath=wp_get_attachment_image_src(
                                                get_post_thumbnail_id(),'large');

                                            ?>
									<!-- Begin blog list item 
									========================== -->
									<article class="blog-list-item">
                                        
                                        <!-- Begin blog list item image -->
										<a href="<?php the_permalink();?>" class="bli-image-wrap" data-cursor="Read<br>More">
                                            <figure class="bli-image">
                                                <!-- <img src="assets/img/low-qlt-thumb.jpg" data-src="assets/img/blog/list/blog-list-1.jpg" class="tt-lazy anim-zoomin" alt="Image"> -->
                                                <img src="<?php echo $imagepath[0] ?>">
											</figure>
										</a>
										<!-- End blog list item image -->
										
										<!-- Begin blog list item info -->
										<div class="bli-info">
											<div class="bli-categories">
                                                <a href="<?php the_permalink();?>">Lifestyle</a>
												<!-- <a href="">Uncategorized</a> -->
											</div>
											<h2 class="bli-title"><a href="<?php the_permalink();?>"><?php the_title() ?></a></h2>
											<div class="bli-meta"> 
                                                <span class="published"><?php echo get_the_date() ?></span>
												<span class="posted-by">- by <a href="<?php the_permalink();?>" title="View all posts by Admin">admin</a></span>
											</div>
											<div class="bli-desc"> <!-- 3 lines is optimal! -->
                                            <?php the_excerpt() ?>
                                        </div>
                                        <a href="<?php the_permalink();?>" class="bli-read-more tt-btn tt-btn-primary">
                                            <div data-hover="Read More">Read More</div>
                                            <span class="tt-btn-icon"><i class="fas fa-arrow-right"></i></span>
											</a>
										</div>
										<!-- End blog list item info -->
                                        
									</article>
									<!-- End blog list item -->
                                    <?php  
                                             }
                                         ?>
									
                                    <?php echo wp_pagenavi() ?>

								<!-- Begin sliding sidebar 
								=========================== 
								* Use class "tt-ss-right" to align sidebar to right.
								-->
								
								<!-- End sliding sidebar -->


								<!-- Begin tt-pagination 
								========================= 
								* Use class "tt-pagin-center" to align center.
								-->
								<!-- <div class="tt-pagination anim-fadeinup">
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
    get_footer()
?>
