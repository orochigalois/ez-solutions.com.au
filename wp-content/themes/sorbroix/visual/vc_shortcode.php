<?php 
$textdoimain = 'sorbroix';
global $pre_text;

$pre_text = 'VG ';


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Welcome Item", 'sorbroix'),
   "base" => "welcome",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'sorbroix'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'sorbroix' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'sorbroix' ) => 'type1',
            __( 'Type 2', 'sorbroix' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Count item", 'sorbroix'),
   "base" => "since_count_item",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Video Area", 'sorbroix'),
   "base" => "video",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link video", 'sorbroix'),
      "param_name" => "link1",
      "value" => "",
      "description" => __("Link video", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image background', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'sorbroix'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'sorbroix' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'sorbroix' ) => 'type1',
            __( 'Type 2', 'sorbroix' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
    )));
}



if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial", 'sorbroix'),
   "base" => "testimonial",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Testimonial", 'sorbroix'),
      "param_name" => "testimonial",
      "value" => "",
      "description" => __("Testimonial", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'sorbroix' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'sorbroix' ) => 'type1',
            __( 'Type 2', 'sorbroix' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Testimonial 2 Item", 'sorbroix'),
   "base" => "testimonial2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Testimonial", 'sorbroix'),
      "param_name" => "testimonial",
      "value" => "",
      "description" => __("Testimonial", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'sorbroix'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 2", 'sorbroix'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("subtitle 2", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Testimonial 2", 'sorbroix'),
      "param_name" => "testimonial2",
      "value" => "",
      "description" => __("Testimonial 2", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'sorbroix' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Clients", 'sorbroix'),
   "base" => "clients",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_images',
         'heading' => __( 'Image Carousel', 'sorbroix' ),
         'param_name' => 'post_gallery',
         'value' => '',
         'description' => __( 'Select image Carousel from media library to do your signature.', 'sorbroix' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'sorbroix' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'sorbroix' ) => 'type1',
            __( 'Type 2', 'sorbroix' ) => 'type2',
            __( 'Type 3', 'sorbroix' ) => 'type3',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Expert Area", 'sorbroix'),
   "base" => "expert_area",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 1', 'sorbroix' ),
         'param_name' => 'image1',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 1", 'sorbroix'),
      "param_name" => "title1",
      "value" => "",
      "description" => __("Title 1", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 1", 'sorbroix'),
      "param_name" => "subtitle1",
      "value" => "",
      "description" => __("subtitle 1", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'sorbroix'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'sorbroix' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title 2", 'sorbroix'),
      "param_name" => "title2",
      "value" => "",
      "description" => __("Title 2", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle 2", 'sorbroix'),
      "param_name" => "subtitle2",
      "value" => "",
      "description" => __("subtitle 2", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text detail 1", 'sorbroix'),
      "param_name" => "detail1",
      "value" => "",
      "description" => __("Text detail 1", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text detail 2", 'sorbroix'),
      "param_name" => "detail2",
      "value" => "",
      "description" => __("Text detail 2", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text detail 3", 'sorbroix'),
      "param_name" => "detail3",
      "value" => "",
      "description" => __("Text detail 3", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text detail 4", 'sorbroix'),
      "param_name" => "detail4",
      "value" => "",
      "description" => __("Text detail 4", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Promo Item", 'sorbroix'),
   "base" => "promo",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'sorbroix'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Promo Item", 'sorbroix'),
   "base" => "promo",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'sorbroix'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Business Area", 'sorbroix'),
   "base" => "business",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'sorbroix'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Service Offer", 'sorbroix'),
   "base" => "offer",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Class Icon", 'sorbroix'),
      "param_name" => "icon",
      "value" => "",
      "description" => __("Class Icon", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'sorbroix'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Business progressive", 'sorbroix'),
   "base" => "progressive",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("subtitle", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("List Content", 'sorbroix'),
      "param_name" => "list",
      "value" => "",
      "description" => __("List Content", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Advisor", 'sorbroix'),
   "base" => "advisor",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'sorbroix'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Advisor 2", 'sorbroix'),
   "base" => "advisor2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link twitter", 'sorbroix'),
      "param_name" => "twitter",
      "value" => "",
      "description" => __("Link twitter", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link linkedin", 'sorbroix'),
      "param_name" => "linkedin",
      "value" => "",
      "description" => __("Link linkedin", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link facebook", 'sorbroix'),
      "param_name" => "facebook",
      "value" => "",
      "description" => __("Link facebook", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link skype", 'sorbroix'),
      "param_name" => "skype",
      "value" => "",
      "description" => __("Link skype", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Mission Content", 'sorbroix'),
   "base" => "mission",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'sorbroix'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'sorbroix' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link mission", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."About Content", 'sorbroix'),
   "base" => "about",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image 2', 'sorbroix' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Btn", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'sorbroix'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Manager Info", 'sorbroix'),
   "base" => "manager",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'sorbroix'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
         'type' => 'attach_image',
         'heading' => __( 'Image sign', 'sorbroix' ),
         'param_name' => 'image2',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ), 
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link Manager", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Accordion", 'sorbroix'),
   "base" => "accordion",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Subtitle", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("ID Accordion", 'sorbroix'),
      "param_name" => "id",
      "value" => "",
      "description" => __("ID Accordion", 'sorbroix')
   ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type Active', 'sorbroix' ),
         'param_name' => 'active',
         'value' => array(
            __( 'Yes', 'sorbroix' ) => 'in',
            __( 'No', 'sorbroix' ) => 'noactive',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Services", 'sorbroix'),
   "base" => "services",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'sorbroix')
   ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'sorbroix'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'sorbroix')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'sorbroix' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'sorbroix' ) => 'DESC',
            __( 'ASC : lowest to highest', 'sorbroix' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'sorbroix' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'sorbroix' ) => 'date',
            __( 'Title', 'sorbroix' ) => 'title',
            __( 'Random', 'sorbroix') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Services 2", 'sorbroix'),
   "base" => "services2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Description", 'sorbroix'),
      "param_name" => "desc",
      "value" => "",
      "description" => __("Description", 'sorbroix')
   ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'sorbroix'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'sorbroix')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'sorbroix' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'sorbroix' ) => 'DESC',
            __( 'ASC : lowest to highest', 'sorbroix' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'sorbroix' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'sorbroix' ) => 'date',
            __( 'Title', 'sorbroix' ) => 'title',
            __( 'Random', 'sorbroix') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Portfolio", 'sorbroix'),
   "base" => "portfolio",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textarea",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text subtitle", 'sorbroix'),
      "param_name" => "subtitle",
      "value" => "",
      "description" => __("Text subtitle", 'sorbroix')
   ),
      
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'sorbroix'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'sorbroix')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'sorbroix' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'sorbroix' ) => 'DESC',
            __( 'ASC : lowest to highest', 'sorbroix' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'sorbroix' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'sorbroix' ) => 'date',
            __( 'Title', 'sorbroix' ) => 'title',
            __( 'Random', 'sorbroix') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),

    )));
}

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Blog", 'sorbroix'),
   "base" => "blog",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
      array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Text Btn", 'sorbroix'),
      "param_name" => "textbutton",
      "value" => "",
      "description" => __("Text Btn", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Link", 'sorbroix'),
      "param_name" => "link",
      "value" => "",
      "description" => __("Link", 'sorbroix')
   ),
      array(
         "type" => "textfield",
         "holder" => "div",
         "class" => "",
         "heading" => __("Number of Post You want show.", 'sorbroix'),
         "param_name" => "number",
         "value" => "3",
         "description" => __("Number of Post You want show.", 'sorbroix')
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Sort Order', 'sorbroix' ),
         'param_name' => 'orderpost',
         'value' => array(
            __( 'DESC : highest to lowest', 'sorbroix' ) => 'DESC',
            __( 'ASC : lowest to highest', 'sorbroix' ) => 'ASC',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Order by', 'sorbroix' ),
         'param_name' => 'orderby',
         'value' => array(
            __( 'Date', 'sorbroix' ) => 'date',
            __( 'Title', 'sorbroix' ) => 'title',
            __( 'Random', 'sorbroix') => 'rand',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),
      array(
         'type' => 'dropdown',
         'heading' => __( 'Type background', 'sorbroix' ),
         'param_name' => 'type',
         'value' => array(
            __( 'Type 1', 'sorbroix' ) => 'type1',
            __( 'Type 2', 'sorbroix' ) => 'type2',
         ),
         'description' => __( 'Select field do you want Order.', 'sorbroix' )
      ),

    )));
}


if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Google Maps", 'sorbroix'),
   "base" => "map",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("latitude", 'sorbroix'),
      "param_name" => "lat",
      "value" => "",
      "description" => __("latitude", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("longitude", 'sorbroix'),
      "param_name" => "long",
      "value" => "",
      "description" => __("longitude", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Zoom", 'sorbroix'),
      "param_name" => "zoom",
      "value" => "",
      "description" => __("Zoom", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Map Marker', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ),
    )));
} 

if(function_exists('vc_map')){
   vc_map( array(
   "name" => __($pre_text."Google Maps 2", 'sorbroix'),
   "base" => "map2",
   "class" => "",
   "icon" => "icon-st",
   "category" => 'Content',
   "params" => array(
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Title", 'sorbroix'),
      "param_name" => "title",
      "value" => "",
      "description" => __("Title", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("latitude", 'sorbroix'),
      "param_name" => "lat",
      "value" => "",
      "description" => __("latitude", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("longitude", 'sorbroix'),
      "param_name" => "long",
      "value" => "",
      "description" => __("longitude", 'sorbroix')
   ),
   array(
      "type" => "textfield",
      "holder" => "div",
      "class" => "",
      "heading" => __("Zoom", 'sorbroix'),
      "param_name" => "zoom",
      "value" => "",
      "description" => __("Zoom", 'sorbroix')
   ),
   array(
         'type' => 'attach_image',
         'heading' => __( 'Map Marker', 'sorbroix' ),
         'param_name' => 'image',
         'value' => '',
         'description' => __( 'Select image background from media library to do your signature.', 'sorbroix' )
      ),
    )));
} 