<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Poli
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="top-bar">
        <div class="container">
           <div class="row">
              <div class="col-sm">
                  <?php
                    wp_nav_menu( array(
                    'theme_location'  => 'top',               
                    'container'       => 'div',
                    'container_class' => 'top-bar-menu',
                    'container_id'    => '',
                    'menu_class'      => 'nav',
                    ) );
                  ?>
              </div>
              <div class="col-sm">      
                    <div class="header__social text-center text-md-right mt-10">
                    <?php if (get_theme_mod('facebook')) : ?>
                    <a href="<?php echo get_theme_mod('facebook');?>"><i class="fab fa-facebook-f"></i></a>
                    <?php	else : ?>
                    <?php endif ;?>
                    <?php if (get_theme_mod('twitter')) : ?>
                    <a href="<?php echo get_theme_mod('twitter');?>"><i class="fab fa-twitter"></i></a>
                    <?php	else : ?>
                    <?php endif ;?>
                    <?php if (get_theme_mod('instagram')) : ?>
                    <a href="<?php echo get_theme_mod('instagram');?>"><i class="fab fa-instagram"></i></a> 
                    <?php	else : ?>
                    <?php endif ;?>
                    <a href="<?php echo wc_get_cart_url(); ?>"><i class="fas fa-shopping-cart"></i> Cart(<?php echo WC()->cart->get_cart_contents_count(); ?>)</a>
                    </div>
               </div>
               </div>                           
           </div>
        </div>
    </div>
<header id="main-header" class="main-header" data-toggle="sticky-onscroll">  
  <div class="container">
    <div class="row">
       <div class="col">
          <nav class="navbar navbar-expand-lg navbar-light">
          <?php $logo=get_theme_mod('logo_option');?>
          <?php if ($logo) { ?>
            <a class="navbar-brand" href="<?php bloginfo('url');  ?>">
                <img src="<?php echo $logo; ?>" alt="<?php bloginfo( 'name' ); ?>">
            </a>
            <?php } else { ?>
              <a class="navbar-brand" href="<?php bloginfo('url');  ?>"> <?php bloginfo( 'name' ); ?></a>
            <?php } ?>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                wp_nav_menu( array(
                'theme_location'  => 'primary',
                'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'navbarSupportedContent',
                'menu_class'      => 'navbar-nav ml-auto',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
                ) );
            ?>          
          </nav>
       </div>
    </div>
  </div>
</header>

