<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
          <div class="col-md-12">
          <?php
              while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'page' );
                
                if ( comments_open() || get_comments_number() ) :
                  comments_template();
                endif;

              endwhile; 
          ?>
          </div> 
         </div>
     </div>  
</section>
<?php
get_footer();
