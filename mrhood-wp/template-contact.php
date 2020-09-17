<?php
	// Template Name: Contact Page Template 
?>
<?php get_header(); ?>
<!--BANNER STARTS-->
<div class="banner-wraper contact-page">
            <div class="banner-image">
                <ul>
                    <li>
                        <img src="<?php echo bloginfo('template_directory'); ?>/images/contact-page-bg.jpg" alt="banner">
                        <div class="banner-caption">
                            <h2><?php the_title();?></h2>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--BANNER ENDS-->
        <!--CONTACT FORM STARTS-->
        <div class="form-wraper contact-page">
            <div class="form-right">
                <div class="form-heading">
                    <h2>Let's get started.</h2>
                    <span>Let's get started. Please complete the form below.</span>
                </div>
                <div class="contact-form">
                    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php the_content();?>
            <?php endwhile; ?>
            <?php else : ?>
                <p>No content available.</p>
            <?php endif; ?>
                </div>
            </div>
            <div class="form-left">
                <div class="contact-info">
                    <ul>
                            <li><i class="fi-xwlrxl-phone-wide"></i>Sales: (206) 250-5528</li>
                            <li><i class="fi-xnluxl-times"></i>Office: (425) 766-8522</li>
                            <li><i class="fi-xnluxl-times"></i>Fax: (425) 836-9544</li>
                            <li><i class="fi-xwluxl-envelope-wide"></i>Sales: Mayumi@MrPressureWash.net</li>
                            <li><i class="fi-xnluxl-times"></i>Office: dave@aablesafetyclean.net</li>
                            <li><i class="fi-xwluxl-map-marker-wide"></i> 18844 NE 84th St. Redmond WA 98052</li>
                    </ul>
                </div>
            </div>
            
            <div class="clear"></div>
        </div>
        <!--CONTACT FORM ENDS-->

        <!--MAP STARTS-->
        <div class="gmap-wraper">
            <iframe class="gmap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6389.0736652125615!2d-122.09230732367298!3d47.67908741131026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x549072da93efbea1%3A0xf1954127f0aeccf0!2s18844%20NE%2084th%20St%2C%20Redmond%2C%20WA%2098052%2C%20USA!5e0!3m2!1sen!2sbd!4v1578739085414!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
        <!--MAP ENDS-->
            
    <?php get_footer(); ?>