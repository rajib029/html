<?php get_header(); ?>
<!--BANNER STARTS-->
<div class="banner-wraper service-page">
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
    <div class="inner-page-wraper">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<?php the_content();?>
            <?php endwhile; ?>
            <?php else : ?>
                <p>No content available.</p>
            <?php endif; ?>
    </div>
            
<?php get_footer(); ?>