<?php
/**
 * Poli Theme Customizer
 *
 * @package Poli
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function poli_customize_register_default( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'poli_customize_register_default' );

if ( ! function_exists( 'poli_customize_register' ) ) {

  function poli_customize_register( $wp_customize ) {

      // Theme General settigs
      $wp_customize->add_section( 'general_option', array(
          'title'       => __( 'General Option', 'poli' ),
          'description'       => __( 'Theme general option', 'poli' ),
          'priority'    => 20,
      ) );

      $wp_customize->add_setting( 'favicon' , array(
          'default' => ''
      ));
      $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon', array(
          'label' => __( 'Your Favicon', 'poli' ),
          'section' => 'general_option',
          'settings' => 'favicon'
      ) ) );

      $wp_customize->add_setting('logo_option',array(

          'default' => '',
          'transport' => 'refresh',
      ));

      $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'logo_option',array(
          'label'      => __( 'Logo', 'poli' ),
          'description'       => __( 'Upload your logo image', 'poli' ),
          'section'    => 'general_option',
          'settings'   => 'logo_option',

      )));



      /* ***************************
   // Add Social Media Section //
   *************************** */
      $wp_customize->add_section( 'social-media' , array(
          'title' => __( 'Social Media', 'add_setting' ),
          'priority' => 30,
          'description' => __( 'Socieal media profile link.', 'poli' )
      ) );
      // Add Twitter Setting
      $wp_customize->add_setting( 'twitter' , array( 'default' => 'https://twitter.com' ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'twitter', array(
          'label' => __( 'Twitter', 'poli' ),
          'section' => 'social-media',
          'settings' => 'twitter',
          'type' => 'text'
      ) ) );
      // Add FB Setting
      $wp_customize->add_setting( 'facebook' , array( 'default' => 'https://facebook.com' ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array(
          'label' => __( 'Facebook', 'poli' ),
          'section' => 'social-media',
          'settings' => 'facebook',
          'type' => 'text'
      ) ) );

      // Add Google plus Setting
      $wp_customize->add_setting( 'googleplus' , array( 'default' => 'https://plus.google.com' ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'googleplus', array(
          'label' => __( 'Google Plus', 'poli' ),
          'section' => 'social-media',
          'settings' => 'googleplus',
          'type' => 'text'
      ) ) );
      // Add Linkdin Setting
      $wp_customize->add_setting( 'instagram' , array( 'default' => 'https://www.instagram.com' ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array(
          'label' => __( 'Instagram', 'poli' ),
          'section' => 'social-media',
          'settings' => 'instagram',
          'type' => 'text'
      ) ) );
      // Add pinterest Setting
      $wp_customize->add_setting( 'pinterest' , array( 'default' => 'https://www.pinterest.com' ));
      $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'pinterest', array(
          'label' => __( 'Pinterest', 'poli' ),
          'section' => 'social-media',
          'settings' => 'pinterest',
          'type' => 'text'
      ) ) );
  }
}
add_action( 'customize_register', 'poli_customize_register' );




/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function poli_customize_preview_js() {
	wp_enqueue_script( 'poli-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'poli_customize_preview_js' );
