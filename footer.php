<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Poli
 */

?>



<footer id="main-footer" class="main-footer">
    <div class="container">
       <div class="row">
          <div class="col-sm">
          <?php dynamic_sidebar( 'footer-one' ); ?>
          </div>
          <div class="col-sm">
          <?php dynamic_sidebar( 'footer-two' ); ?>
          </div>
          <div class="col-sm">
          <?php dynamic_sidebar( 'footer-three' ); ?>
          </div>
          <div class="col-sm">
          <?php dynamic_sidebar( 'footer-four' ); ?>
          </div>
        
       </div>
    </div>
    <div class="scrolltoup text-center">
         <div class="scrollup"><i class="fa fa-angle-up"></i></div>
      </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
