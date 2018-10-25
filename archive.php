<?php
/**
 * The template for displaying archive pages
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

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title custom">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

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
