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
                                    
                                      <img src="<?php $team_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'out-team-image',false); echo $team_img[0]; ?>" width="<?php echo $team_img[1]; ?>" height="<?php echo $team_img[2]; ?>"alt="" data-at2x="<?php echo $team_img[0]; ?>">
                                    
                                    <?php } ?>
                                    <h3><?php the_title(); ?></h3>
                                    <?php the_content(); ?>
                                    <div class="team-social">	
                                    <?php
                                        $fb_url = get_post_meta( get_the_ID(), '_andia_fb_team_url_link', true );
                                        $tw_url = get_post_meta( get_the_ID(), '_andia_tw_team_url_link', true );
                                        $Ln_url = get_post_meta( get_the_ID(), '_andia_ln_team_url_link', true );
                                        $msg_url = get_post_meta( get_the_ID(), '_andia_msg_team_url_link', true );
                                    ?>
                                   <?php if($fb_url) { ?>
                                    <a href="<?php echo $fb_url; ?>"><i class="fa fa-facebook"></i></a>
                                    <?php } ?>
                                    <?php if($tw_url) { ?>
                                    <a href="<?php echo $tw_url; ?>"><i class="fa fa-twitter"></i></a>
                                    <?php } ?>
                                    <?php if($Ln_url) { ?>
                                    <a href="<?php echo $Ln_url; ?>"><i class="fa fa-linkedin"></i></a>
                                    <?php } ?>
                                    <?php if($msg_url) { ?>
                                    <a href="<?php echo $msg_url; ?>"><i class="fa fa-envelope"></i></a>
                                    <?php } ?>
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