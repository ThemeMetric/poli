<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1 class="page-title">
					<?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'poli' ), '<span>' . get_search_query() . '</span>' );
					?>
				</h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
