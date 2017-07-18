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
	            		<?php                                
                            $port_tax = get_categories('taxonomy=portflio_cats&post_type=andia_portfolios');
                            foreach($port_tax as $value){?>
                               <a href="#" class="filter-<?php echo $value->slug;?>"><?php echo $value->name; ?></a>/ 
                           <?php } ?>
	            	</div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 portfolio-masonry">
                    <?php
                    $the_query = new WP_Query(array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => -1,                        
                    ));  
                    if($the_query->have_posts()){
                        while($the_query->have_posts()){
                            $the_query->the_post();
                        ?>
                         <div class="portfolio-box <?php $pterms = wp_get_post_terms(get_the_ID(),'portflio_cats', array( 'fields' => 'all'));
                            foreach($pterms as $terms){
                                echo $terms->slug.' ';
                            } ?>?>">
		                	<div class="portfolio-box-container">
		                	<?php
                        if(has_post_thumbnail()){ ?>
			                	<img src="<?php $portfolio_img = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()), 'portfolio-images',false); echo $portfolio_img[0]; ?>" width="<?php echo $portfolio_img[1]; ?>" height="<?php echo $portfolio_img[2]; ?>" data-at2x="<?php echo $portfolio_img[0]; ?>" />
                       <?php } ?>
		                		<div class="portfolio-box-text">
		                			<h3><?php the_title(); ?></h3>
		                			<?php the_content(); ?>
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
        </div>
<?php get_footer(); ?>