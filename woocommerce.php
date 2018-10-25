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
<section id="shop" class="shop">
<div class="jumbotron jumbotron-fluid" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/shop.jpg');">
  <div class="container">
  <div class="shop-page-content">
  <h1 class="text-center">Our <span>Product</span></h1>
  </div>
  </div>
</div>
</section>

<section id="default-page" calss="default-page">
     <div class="container">
         <div class="row">
          <div class="col-md-12">
          <?php
            woocommerce_content();
          ?>
          </div> 
         </div>
     </div>  
</section>
<?php
get_footer();
