<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://friconix.com/cdn/friconix.js"> </script>
    <script src="<?php echo bloginfo('template_directory'); ?>/js/jquery-1.10.2.js"></script>
	<script src="<?php echo bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>
	<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/flexslider.css">
    <script src="<?php echo bloginfo('template_directory'); ?>/js/custom.js"></script>
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,700,900&display=swap" rel="stylesheet">
    <title><?php bloginfo('title'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="wraper">
        <!--HEADER STARTS-->
        <div class="header">
            <div class="header-top">
                <div class="header-top-left">
                <span><i class="fi-cwluhl-clock-wide"></i> Office Hours: Mon-Fri: 8am-5pm</span>
                </div>
                <div class="header-top-right">
                    <span><i class="fi-xwluxl-envelope-wide"></i> <strong>We're Hiring!</strong> We'll train you, No experience needed. <a href="mailto:abc@def.com">Email us today</a> and set up an interview!</span>
                </div>
                <div class="clear"></div>
            </div>
            <div class="header-bottom">
                <div class="header-bottom-left">
                    <div class="logo-section">
                        <a href="<?php echo bloginfo('url'); ?>"><img src="<?php echo bloginfo('template_directory'); ?>/images/logo.png" alt="logo"></a>
                    </div>
                    <div class="navbar">
						<?php wp_nav_menu( array('theme_location'=>'main_menu', 'sort_column' => 'menu_order', 'container' => '', 'menu_class' => 'nav ', 'menu_id' => '') ); ?>
                        <div class="mobile-menu-holder">
                            <span class="mobile-menu"><i class="fas fa-bars"></i><i class="fi-xnsuxl-three-bars-solid"></i> Menu</span>
                            <div class="mobile-nav" style="display:none">

								<?php wp_nav_menu( array('theme_location'=>'main_menu', 'sort_column' => 'menu_order', 'container' => '', 'menu_class' => 'nav-custom', 'menu_id' => '') ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom-right">

				   <?php

						if ( is_active_sidebar( 'header-info-panel' ) ) : 

							dynamic_sidebar( 'header-info-panel' );

						endif;

					?>
					
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!--HEADER ENDS-->