<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Poli
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				poli_posted_on();
				poli_posted_by();
				?>
			</div>
		<?php endif; ?>
	</header>

  <div class="post-media">
        <a href="<?php the_permalink(); ?>">
      <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'post', array( 'class'  => 'img-fluid img-thumbnail' ) );
                }
      ?></a>
  </div>

	<div class="entry-content">
  <?php the_excerpt(); ?>
	</div>
</article>
