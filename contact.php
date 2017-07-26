<?php
/*
    Template Name: Contact
*/
    get_header();
?>        
    <!-- Page Title -->
    <div class="page-title-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 wow fadeIn">
                    <i class="fa fa-envelope"></i>
                    <h1>Contact Us /</h1>
                    <p>Here is how you can contact us</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Us -->
    <div class="contact-us-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 contact-form wow fadeInLeft">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit lobortis</a> 
                        nisl ut aliquip ex ea commodo consequat.
                    </p>
						<?php
							 echo do_shortcode('[contact-form-7 id="73" title="ledpcontactform"]');
						?>
                </div>
                <div class="col-sm-5 contact-address wow fadeInUp">
                    <h3>We Are Here</h3>
                    <div class="map"></div>
                    <h3>Address</h3>
                    <p>Via Principe Amedeo 9 <br> 10100, Torino, TO, Italy</p>
                    <p>Phone: 0039 333 12 68 347</p>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>