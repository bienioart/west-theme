<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

        <div class="footer-testimonial">
            <div class="container">
                <div class="testimonial">
                    <div class="stars">
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>    
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    </div>
                    <div class="quote">
                        "Amazing customer service and very good price will be definitely getting another one throught these guys when needed so much help thankyou"
                    </div>
                   <div class="author">
                        Damon, facebook review
                   </div>
                </div>
            </div>
        </div>
       
            <div class="container">
                <div class="footer-contact">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="title">Want to know more?</div>
                            <div class="desc">To find out more about our 
                            services please contact us using any of the methods below, or alternatively fill in the contact 
                            form and a representative will be in touch as soon as possible.</div>
                            <div class="contact-info">
                                <div class="call">
                                    <a href="tel:1800-927-831"><i class="fa fa-phone" aria-hidden="true"></i>Call today 1800 927 831</a>
                                </div>
                                <div class="email">
                                    <a href="mailto:info@westcoastwaste.com.au"><i class="fa fa-envelope" aria-hidden="true"></i>Email info@westcoastwaste.com.au</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-form-holder">
                                <?php echo do_shortcode('[contact-form-7 id="55" title="Footer contact form"]'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <div class="copyright">
            <div class="container">
                <div class="text">
                 © Copyright West Coast Waste 2020   <span>//</span>  Term &  Conditions  <span>//</span>  Website by Mateusz Bień
                </div>
            </div>

        </div>

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

