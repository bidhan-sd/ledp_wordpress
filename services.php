<?php
/*
    Template Name: services
*/
    get_header();
?>

        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-tasks"></i>
                        <h1>Services /</h1>
                        <p>Here are the services we offer</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Full Width Text -->
        <div class="services-full-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 services-full-width-text wow fadeInLeft">
	                    <h3>Lorem Ipsum Dolor Sit Amet</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> 
	                    	nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, 
	                    	sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
	                    	suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	                    	sed do <strong>eiusmod tempor</strong> incididunt.
	                	</p>
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

        <!-- Services Half Width Text -->
        <div class="services-half-width-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-6 services-half-width-text wow fadeInLeft">
	                    <h3>Lorem Ipsum</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> 
	                    	nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, 
	                    	sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
	                    	suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	                    	sed do <strong>eiusmod tempor</strong> incididunt.
	                    </p>
	                </div>
	                <div class="col-sm-6 services-half-width-text wow fadeInUp">
	                    <h3>Dolor Sit Amet</h3>
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <span class="violet">suscipit lobortis</span> 
	                    	nisl ut aliquip ex ea commodo consequat. Lorem ipsum <strong>dolor sit amet</strong>, consectetur adipisicing elit, 
	                    	sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper 
	                    	suscipit lobortis nisl ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
	                    	sed do <strong>eiusmod tempor</strong> incididunt.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Call To Action -->
        <div class="call-to-action-container">
        	<div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action-text wow fadeInLeftBig">
	                    <p>
	                    	Lorem ipsum <span class="violet">dolor sit amet</span>, consectetur adipisicing elit, 
	                    	sed do eiusmod tempor incididunt ut labore et ut wisi.
	                    </p>
	                    <div class="call-to-action-button">
	                        <a class="big-link-3" href="#">Try It Now!</a>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div>

<?php get_footer(); ?>