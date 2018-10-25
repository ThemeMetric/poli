<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Poli
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function poli_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'poli_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function poli_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'poli_pingback_header' );
// Set comment textarea to the bottom of comment form
function beauty_change_comment_textarea_position( $fields ) {
	$comment = array('comment' => $fields['comment'] );
	unset( $fields['comment'] );
	return array_merge( $fields, $comment );
}
add_filter( 'comment_form_fields', 'beauty_change_comment_textarea_position' );


 /* coment place holder */

 function my_update_comment_fields( $fields ) {

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . __( '(optional)', 'wpexpert' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$fields['author'] =
		'<p class="comment-form-author">
		
			<input id="author" name="author" type="text" placeholder="' . esc_attr__( "Name", "wpexpert" ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['email'] =
		'<p class="comment-form-email">
		
			<input id="email" name="email" type="email" placeholder="' . esc_attr__( "Email", "wpexpert" ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
		'" size="30" ' . $aria_req . ' />
		</p>';

	$fields['url'] =
		'<p class="comment-form-url">
		
			<input id="url" name="url" type="url"  placeholder="' . esc_attr__( "http://google.com", "wpexpert" ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
		'" size="30" />
			</p>';

	return $fields;
}
add_filter( 'comment_form_default_fields', 'my_update_comment_fields' );


function my_update_comment_field( $comment_field ) {

  $comment_field =
    '<p class="comment-form-comment">
            
            <textarea required id="comment" name="comment" placeholder="' . esc_attr__( "Write comment", "wpexpert" ) . '" cols="45" rows="8" aria-required="true"></textarea>
        </p>';

  return $comment_field;
}
add_filter( 'comment_form_field_comment', 'my_update_comment_field' );
// Remove emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// woocommerce 

add_filter('woocommerce_show_page_title', 'shop_page_title');

function shop_page_title(){
	?>

	<?php 
}
remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
remove_action('woocommerce_before_shop_loop', 'wc_print_notices', 10);
remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);
// from single product page 


add_filter( 'woocommerce_checkout_fields' , 'custom_mod_checkout_fields' );

function custom_mod_checkout_fields( $fields ) {
unset($fields['billing']['billing_company']);

return $fields;
}



