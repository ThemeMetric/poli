<?php
// hero home section
add_shortcode('poli-hero-home', function($attr, $content){
	ob_start(); 
extract( shortcode_atts(array(	          
	'contents' => '',
  'bcimage' => '',
  'url' => '',
  'buttontext' => '',
), $attr) );
?>
<?php $slider_photo = wp_get_attachment_image_src($bcimage, 'full') ; ?>
<section id="hero" class="hero"  style="background-image: url('<?php echo $slider_photo[0]; ?>');">

<div class="jumbotrons">
  <div class="container">
  <div class="hero-content">
  <h1 class="display-4"><?php echo $contents ?></h1>
  <p class="lead">
    <a class="btn btn-outline-light text-light btn-lg" href="<?php echo $url ?>"><?php echo $buttontext ?></a>
  </p>
  </div>
  </div>
</div>
</section>
<?php return ob_get_clean();
});

add_shortcode('recent-post', function($attr, $content){
	ob_start(); 
extract( shortcode_atts(array(
	'title' => 'News From The Blog',	          
	

), $attr) );
?>
        
  <!--Start Blog Area-->
        <section id="blog-area" class="bg-gray">

            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <?php   $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <!--Start Blog Post Single-->
                    <div class="col-md">
                        <div class="blog-post-single">
                            <div class="post-media">                               
                                <a href="<?php the_permalink();?>">
                                    <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post', array( 'class'  => 'img-fluid img-thumbnail' ) );
                 } 
		?>                                
                                </a>
                            </div>
                            <br/>
                            <div class="post-details">
                                <div class="post-meta">
                                    <h3 class="m-0"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                                </div>
                                <div class="post-content">
                                    <p><?php the_excerpt(); ?></p>
                                </div>
                                <p><i class="far fa-calendar-alt"></i> <?php the_time('j M'); ?> <i class="far fa-user"></i> <?php the_author(); ?> </p>
                            </div>
                        </div>
                    </div>
                    <!--End blog Post Single-->
                     <?php   endwhile; ?>
                </div>
                <!--End Row-->

            </div>
            <!--End Container-->
        </section>
        <!--End Blog Area-->
<?php return ob_get_clean();
});


add_shortcode('recent-products', function($attr, $content){
	ob_start(); 
extract( shortcode_atts(array(
	'title' => 'New Arrival',	          
	
), $attr) );
?>      
 <section id="blog-area" class="bg-gray">
            <!--Start Container-->
            <div class="container">
                <!--Start Row-->
                <div class="row">
                    <?php   $args = array( 'post_type' => 'product', 'posts_per_page' => 4 );
  $loop = new WP_Query( $args );
  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                                      
                    <div class="col-md">
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
<?php return ob_get_clean();
});