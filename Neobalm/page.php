<?php get_header(); ?>
    <!---==:start inner-content-outer:==--->
        <div class="container inner-section">
        	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				<h2><?php the_title();?></h2>
				<?php the_content();?>
            <?php endwhile; ?>
            <?php else : ?>
                <p>No content available.</p>
            <?php endif; ?>
            
 
        </div>
        <!---==:end inner-content:==--->         

<?php get_footer(); ?>
