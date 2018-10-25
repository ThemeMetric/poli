<?php 


if(function_exists('vc_map')){
  // Home Herp
   vc_map( array(
     'name' => __('Poli Hero','poli'),
     'base' => 'poli-hero-home',
     'category' => __( 'Poli', 'poli' ),     
     'icon' => get_template_directory_uri() . "/assets/img/vc-icon.png",
     
     'params' => array(
       
       array(
         'type' => 'textarea_html',
         'param_name' => 'contents',
         'value' => '',
         'heading' => 'Hero Content'
       ),
       
       array(
         'type' => 'textfield',
         'param_name' => 'buttonlink',
         'value' => '',
         'heading' => 'Button Link'
       ),
       array(
         'type' => 'textfield',
         'param_name' => 'buttontext',
         'value' => '',
         'heading' => 'Button Text'
       ),
 
       array(
         'type' => 'attach_image',
         'param_name' => 'bcimage',
         'value' => '',
         'heading' => 'Upload Section Background image'
       ),
 
     )
 
   ));
 
     // Home Herp
     vc_map( array(
      'name' => __('Recent Post','poli'),
      'base' => 'recent-post',
      'category' => __( 'Poli', 'poli' ),     
      'icon' => get_template_directory_uri() . "/assets/img/vc-icon.png",
      
      'params' => array(      
        array(
          'type' => 'textfield',
          'param_name' => 'title',
          'value' => '',
          'heading' => 'Blog section title'
        ),
  
      )
  
    ));

         // Home product
         vc_map( array(
          'name' => __('Recent Product','poli'),
          'base' => 'recent-products',
          'category' => __( 'Poli', 'poli' ),     
          'icon' => get_template_directory_uri() . "/assets/img/vc-icon.png",
          
          'params' => array(      
            array(
              'type' => 'textfield',
              'param_name' => 'title',
              'value' => '',
              'heading' => 'section title'
            ),
      
          )
      
        ));


 
 }
 