<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Poli
 */

get_header();
?>
<section id="default-page" calss="default-page">
     <div class="container">
         <div class="row">
          <div class="col-md-3">
          <?php dynamic_sidebar( 'page' ); ?>
          </div>
          <div class="col-md-9">
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

		
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;


		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
    ?>
    <div class="post-pagination text-center">
    <?php the_posts_pagination(array(
  'next_text' => '<span aria-hidden="true"><i class="fa fa-angle-double-right" aria-hidden="true"></i></span>',
  'prev_text' => '<span aria-hidden="true"> <i class="fa fa-angle-double-left" aria-hidden="true"></i></span>',
  'screen_reader_text' => ' ',
  'type'                => 'list'
  )); ?>
  </div>
 </div> 
         </div>
     </div>  
</section>
<?php

get_footer();
