<?php
  /*

  Template Name: Left Sidebar
  
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
