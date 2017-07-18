<?php get_header(); ?>
<?php //echo realpath(dirname(__FILE__)); ?>
    <!-- Slider -->
    <div class="slider-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 slider">
                    <div class="flexslider">
                        <ul class="slides">
							<?php
								$the_query = new WP_Query(array(
									'post_type' => 'slider',
									'posts_per_page' => -1,                        
								));  
								if($the_query->have_posts()){
									while($the_query->have_posts()){
										$the_query->the_post();
									?>
										<li data-thumb="<?php echo $slider_image[0]; ?>">
										<?php $slider_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'portfolio-images',false);?>										
											<img src="<?php echo $slider_image[0]; ?>">
											<div class="flex-caption">
												<?php the_title(); ?>
											</div>
										</li>
									<?php }
								}else{
									echo 'Sorry! there have no post.';
								}
							?>	
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Presentation -->
    <div class="presentation-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeInLeftBig">
                    <h1>We are <span class="violet">Andia</span>, a super cool design agency.</h1>
                    <p>We design beautiful websites, logos and prints. Your project is safe with us.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->
    <div class="services-container">
        <div class="container">
            <div class="row">
	            <?php
                    $the_query = new WP_Query(array(
                        'post_type' => 'services',
                        'posts_per_page' => 4,                        
                    ));  
                    if($the_query->have_posts()){
                        while($the_query->have_posts()){
                            $the_query->the_post();
                        ?>
                      <div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-<?php
                                    $service_fields = get_post_meta( get_the_ID(), 'service_icons', true );
                                    if($service_fields){
                                        echo $service_fields;
                                    }else{
                                        echo 'home';
                                    }
                                ?>
		                    "></i></div>
		                    <h3><?php the_title(); ?></h3>
		                    <?php the_content(); ?>
		                    <a class="big-link-1" href="<?php the_permalink(); ?>">Read more</a>
		                </div>
	                </div>
                        <?php
                    } } else{
                        echo "Sorry! No post here";
                    }
                ?> 
            </div>
        </div>
    </div>

    <!-- Latest work -->
    <div class="work-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 work-title wow fadeIn">
                    <h2>Our Latest Work</h2>
                </div>
            </div>
            <div class="row">
                <?php
                    $the_query = new WP_Query(array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => 4,                        
                    ));  
                    if($the_query->have_posts()){
                        while($the_query->have_posts()){
                            $the_query->the_post();
                ?>             
               
                <div class="col-sm-3">
                    <div class="work wow fadeInUp">
                       <?php $portfolio_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'portfolio-images',false); ?>
                        <img src="<?php  echo $portfolio_img[0]; ?>" alt="Lorem Website" data-at2x="<?php  echo $portfolio_img[0]; ?>">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                        <div class="work-bottom">
                            <a class="big-link-2 view-work" href="<?php  echo $portfolio_img[0]; ?>"><i class="fa fa-search"></i></a>
                            <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
                        </div>
                    </div>
                </div>
            <?php }
                }else{
                    echo 'Sorry! there have no post.';
                }
            ?>   
                
                
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <div class="testimonials-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials-title wow fadeIn">
                    <h2>Testimonials</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
                    <div role="tabpanel">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                <div class="testimonial-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                        Lorem ipsum dolor sit amet, consectetur..."<br>
                                        <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <div class="testimonial-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                        lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                        <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                <div class="testimonial-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                                        Lorem ipsum dolor sit amet, consectetur..."<br>
                                        <a href="#">Lorem Ipsum, dolor.co.uk</a>
                                    </p>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                <div class="testimonial-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
                                </div>
                                <div class="testimonial-text">
                                    <p>
                                        "Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                                        ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
                                        lobortis nisl ut aliquip ex ea commodo consequat..."<br>
                                        <a href="#">Minim Veniam, nostrud.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active">
                                <a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
                            </li>
                            <li role="presentation">
                                <a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php get_footer(); ?>