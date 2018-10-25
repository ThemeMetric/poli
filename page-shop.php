<?php
  /*

  Template Name: Shop
  
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
          <div class="col-md-3">
          <?php dynamic_sidebar( 'shop' ); ?>
          </div>
          <div class="col-md-9">
          <section id="blog-area" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <?php   $args = array( 'post_type' => 'product', 'posts_per_page' => 12 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                      
                    <div class="col-md-4">
                        <div class="blog-post-single">
                          <br/>
                            <div class="post-media">
                               
                                <a href="<?php the_permalink();?>">
                                    <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post', array( 'class'  => 'img-fluid img-thumbnail' ) );
                 } 
		?>                                
                                </a>
                            </div>
                            <br/>
 <div class="star-rating-custom">
 <?php global $woocommerce, $product;
    $average = $product->get_average_rating();
    echo '<div class="star-rating"><span style="width:'.( ( $average / 5 ) * 100 ) . '%"><strong itemprop="ratingValue" class="rating">'.$average.'</strong> '.__( 'out of 5', 'woocommerce' ).'</span></div>';?>

<?php  

$review_count = $product->get_review_count(); ?>
 <?php if ( comments_open() ): ?>
<span class="customcountratingproduct"> <?php printf( _n( '%s',$review_count,'woocommerce' ), '<span class="count">' . esc_html( $review_count ) . '</span>' ); ?> Comments</span>
  <?php endif ?>
  </div>
<br/>

                            <div class="post-details">
                                <div class="post-meta-product">                              
                                  <?php
                                  global $woocommerce;
                                  $currency = get_woocommerce_currency_symbol();
                                  $price = get_post_meta( get_the_ID(), '_regular_price', true);
                                  $sale = get_post_meta( get_the_ID(), '_sale_price', true);
                                  ?>
                                  <h6 class="text-center"><a href="<?php the_permalink();?>"><?php the_title();?></a>
                                  <?php if($sale) : ?>
                                  <span><del><?php echo $currency; echo $price; ?></del> <?php echo $currency; echo $sale; ?></span>  
                                  <?php elseif($price) : ?>
                                  <span><?php echo $currency; echo $price; ?></span>
                                  <?php endif; ?>
                                  </h6>
                                </div>                        
                            </div>
                        </div>
                    </div>


                     <?php   endwhile; ?>
                </div>
                <!--End Row-->

            </div>
            <!--End Container-->
        </section>     
          </div> 
         </div>
     </div>  
</section>  
 
  <?php get_footer();