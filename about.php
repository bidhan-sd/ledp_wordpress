<?php
/*
    Template Name: about
*/
    get_header();
?>
    <!-- Page Title -->
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn">
                    <i class="fa fa-user"></i>
                    <h1>About Us /</h1>
                    <p>Below you can find more information about our company</p>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Text -->
    <div class="about-us-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 about-us-text wow fadeInLeft">
                    <h3>About Andia</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> 
                        nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, 
                        sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
                        suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
                        sed do <strong>eiusmod tempor</strong> incididunt.
                    </p>
                    <h3>Our Mission</h3>
                    <p>
                        Lorem ipsum dolor sit amet, <span class="violet">consectetur adipisicing</span> elit, sed do eiusmod tempor incididunt 
                        ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
                        ex ea commodo consequat. Lorem ipsum dolor sit amet, <strong>consectetur adipisicing</strong> elit, sed do eiusmod 
                        <span class="violet">tempor incididunt</span> ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation 
                        ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur 
                        adipisicing elit, sed do eiusmod tempor incididunt.
                    </p>
                    <h3>Why Choose Us</h3>
                    <p>
                        Lorem ipsum dolor sit amet, <strong>consectetur adipisicing elit</strong>, sed do eiusmod tempor incididunt ut labore et. 
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo 
                        consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                        Ut wisi enim ad minim veniam, quis <span class="violet">nostrud exerci</span> tation ullamcorper suscipit lobortis 
                        nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod 
                        tempor incididunt.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Meet Our Team -->
    <div class="team-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 team-title wow fadeIn">
                    <h2>Meet Our Team</h2>
                </div>
            </div>
            <div class="row">	
                    <?php
                    $the_query = new WP_Query(array(
                        'post_type' => 'adnia_team',
                        'posts_per_page' => 4,                        
                    ));  
                    if($the_query->have_posts()){
                        while($the_query->have_posts()){
                            $the_query->the_post();
                        ?>
                            <div class="col-sm-3">
                                <div class="team-box wow fadeInUp">
                                    <?php if(has_post_thumbnail()){ ?>
                                    
                                      <img src="<?php $team_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID(), 'portfolio-images',false)); echo $team_img[0]; ?>" alt="" data-at2x="<?php echo $team_img[0]; ?>">
                                    
                                    <?php } ?>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <div class="team-social">		                        
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
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
                                    <img src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
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