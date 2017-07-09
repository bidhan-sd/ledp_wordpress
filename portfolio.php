<?php 
/*
    Template Name: portfolio
*/
    get_header();
?>        
        <!-- Page Title -->
        <div class="page-title-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 wow fadeIn">
                        <i class="fa fa-camera"></i>
                        <h1>Portfolio /</h1>
                        <p>Here is the work we've done so far</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio -->
        <div class="portfolio-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-12 portfolio-filters wow fadeInLeft">
	            		<a href="#" class="filter-all active">All</a> / 
	            		<a href="#" class="filter-web-design">Web Design</a> / 
	            		<a href="#" class="filter-logo-design">Logo Design</a> / 
	            		<a href="#" class="filter-print-design">Print Design</a>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
		                <div class="portfolio-box web-design">
		                	<div class="portfolio-box-container">
			                	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/work1.jpg" alt="" data-at2x="<?php echo get_template_directory_uri(); ?>/assets/img/portfolio/work1.jpg">
			                	<div class="portfolio-box-text">
			                		<h3>Lorem Website</h3>
			                		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
			                	</div>
			                </div>
		                </div>		                
	                </div>
	            </div>
	        </div>
        </div>
<?php get_footer(); ?>