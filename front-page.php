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
                        <?php
                                $anida_post = null;
                                $anida_post = new WP_Query(array(
                                    'post_type' => 'adnia_testimonial',
                                    'posts_per_page' => -1
                                ));
                                if($anida_post->have_posts()){
                                    $x = 0;
                                    while($anida_post->have_posts()){
                                        $anida_post->the_post();
                                        $testimonial_meta = get_post_meta(get_the_ID(),'_andia_testimonial_name',true);
                                    ?>
                                    <div role="tabpanel" class="tab-pane fade in <?php if($x == 0){ echo 'active';} ?>" id="tab1<?php echo the_ID(); ?>">
                                        <div class="testimonial-image">
                                        <?php $testimonial_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'testimonial-images',false);?> 
                                            <img src="<?php echo $testimonial_image[0]; ?>" alt="" data-at2x="<?php echo $testimonial_image[0]; ?>">
                                        </div>
                                        <div class="testimonial-text">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                    <?php $x++;
                                    }
                                }else{
                                    echo "No post here";
                                }
                                wp_reset_postdata();
                                $anida_post = null;
                            ?>                             
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <?php
                                $anida_post = null;
                                $anida_post = new WP_Query(array(
                                    'post_type' => 'adnia_testimonial',
                                    'posts_per_page' => -1
                                ));
                                if($anida_post->have_posts()){
                                    $x = 0;
                                    while($anida_post->have_posts()){
                                        $anida_post->the_post();
                                        $testimonial_meta = get_post_meta(get_the_ID(),'_andia_testimonial_name',true);
                                    ?>
                                        <li role="presentation" class="<?php if($x == 0){ echo 'active';} ?>">
                                            <a href="#tab1<?php echo the_ID(); ?>" aria-controls="tab1" role="tab" data-toggle="tab"></a>
                                        </li>       

                                    <?php $x++;
                                    }
                                }else{
                                    echo "No post here";
                                }
                                wp_reset_postdata();
                                $anida_post = null;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php get_footer(); ?>