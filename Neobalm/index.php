<?php
	// Template Name: Home Page Template 
?>
<?php get_header(); ?>
<!--Start banner-->
    <div class="banner">
    	<img class="banner-img wow bounceInUp" data-wow-delay=".1s" data-wow-duration="2s" src="<?php echo bloginfo('template_directory'); ?>/<?php echo bloginfo('template_directory'); ?>/images/banner-img.jpg" alt="banner"/>
        <div class="banner-right">
        	<img class="banner-logo" src="<?php echo bloginfo('template_directory'); ?>/images/logo-banner.png" alt=" "/>
            <div class="banner-btn-section">
            	<a class="banner-buy-btn" href="#">buy now</a>
                <img src="<?php echo bloginfo('template_directory'); ?>/images/recomanded-icon.png" alt=" "/>
            </div>
            <img class="product-img wow bounceInRight" data-wow-delay=".4s" data-wow-duration="2s" src="<?php echo bloginfo('template_directory'); ?>/images/banner-product-img.jpg"/>
        </div>
        <div class="clear"></div>
    </div>
	<!--End banner-->
    <!--start section-1-outer-->
    <div class="section-1-outer">
    	<div class="container">
        	<div class="section-1-top">
            	<img src="<?php echo bloginfo('template_directory'); ?>/images/section-1-logo.png" alt=" "/>
                <span>Hygienic cleasing  cream for the anal region</span>
                
            </div>
            <div class="section-1-bottom">
            	<p>Cleanliness is essential for perianal comfort, but overzealous cleansing can contribute to irritation. Soaps can dry the sensitive anal skin. Medicated pads may contain preservatives that may cause an allergic contact dermatitis. Neobalm® is gentle and soothing, and leaves a non-creasy residue that moisturizes and rejuvenates the skin. Wash with Neobalm® whenever possible after bowel movements, in the morning, and before bedtime. Apply liberally and use as often as necessary.</p><br/><br/> <br/>
                <p class="small-text">Caution: <strong>For external use only. Avoid contact with the eyes</strong>. If you have rectal bleeding or feel something abnormal in or around the anus, or if anal irritation perttor increases, discontinue use and promptly consult a <strong>Board Certified Colon</strong> and Rectal Surgeon to diagnose and treat your condition. Keep this and all medications out of the reach of children.
</p>
            </div>
        </div>
    </div>
    <!--End section-1-outer-->    
    <!--start section-2-outer-->
    <div class="section-2-outer">
    	<div class="section-2">
            <div class="section-2-left">
                <img class="wow bounceInLeft" data-wow-delay=".2s" data-wow-duration="2s" src="<?php echo bloginfo('template_directory'); ?>/images/product-img-2.png" alt=" "/>
            </div>
            <div class="section-2-right">
                <div class="section-2-title">
                    <img src="<?php echo bloginfo('template_directory'); ?>/images/small-logo.png" alt=" "/>
                    <span>$<strong>12</strong> USD per jar</span>
                </div>
                <p>12 oz. of soothing Neobalm® in each jar<br/>Maximum of twelve jars per order<br/>Add $20.00 surcharge for shipping and handling<br/>(Shipping to Continental US only)
    </p>
                <div class="product-details">
                    <span>Quantity</span>
                    <input type="text"/>
                    <a class="banner-buy-btn btn-2" href="#">PURCHACE NOW!</a>
                </div>
            </div>
    	</div>
    </div>
    <!--End section-2-outer-->
    
    <?php get_footer(); ?>