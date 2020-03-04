<?php
$output = $el_class = $bg_image = $bg_color = $bg_image_repeat = $font_color = $padding = $margin_bottom = $css = '';
extract(shortcode_atts(array(
    'el_class'        => '',
    'bg_image'        => '',
    'bg_image_repeat' => '',
    'padding'         => '',
    'margin_bottom'   => '',
    'css' => '',
    'wrap_class'=>'',
    'ses_title'=>'',
    'el_id'=>'',
    'type_row' => '',
    'ses_subtitle' => '',
    'ses_desc' => '',
    'ses_image' => '', 
    'ses_btn1' => '', 
    'ses_link1' => '', 
    'ses_btn2' => '', 
    'ses_link2' => '', 
), $atts));

wp_enqueue_script( 'wpb_composer_front_js' );

$el_class = $this->getExtraClass($el_class);
$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, ''. ( $this->settings('base')==='vc_row_inner' ? 'vc_inner ' : '' ) . get_row_css_class() . $el_class . vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
$style = $this->buildStyle($bg_image, $bg_color, $bg_image_repeat, $font_color, $padding, $margin_bottom);
$images = wp_get_attachment_image_src($ses_image,'');
if($type_row == 'type2'){
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}elseif($type_row == 'slider_area'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="main_slider_area">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</section>';

}elseif($type_row == 'slider_area2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="main_slider_area_two">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</section>';

}elseif($type_row == 'slider_area4'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="main_slider_area_four">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</section>';
}elseif($type_row == 'slider_area5'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="main_slider_area_five">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</section>';


}elseif($type_row == 'welcome'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="welcome_area pad_100">
            <div class="container">
                <div class="big_titl">
                    <h2>'.wp_specialchars_decode(esc_attr($ses_title)).'</h2>
                    <p>'.wp_specialchars_decode(esc_attr($ses_subtitle)).'</p>
                </div>
                <div class="row welcome_inner">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'welcome2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="welcome_area welcome_area_two">
            <div class="container">
                <div class="section_title">
                    <h2>'.wp_specialchars_decode(esc_attr($ses_title)).'</h2>
                    <p>'.wp_specialchars_decode(esc_attr($ses_subtitle)).'</p>
                </div>
                <div class="row welcome_info">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'since_area'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="since_area pad_100">
            <div class="bcg" data-center="background-position: 0px 50%;" data-bottom-top="background-position: 0px 50%;" data-top-bottom="background-position: -60px 50%;" style="background: url('.esc_url($images[0]).') no-repeat fixed center center; background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    width: 100%;
    position: absolute;
    top: 0;
    z-index: -2;">
            </div>
            <div class="container">
                <div class="row since_inner">
                <div class="col-md-3">
                  <div class="since_text_item">
                      <h5>'.wp_specialchars_decode(esc_attr($ses_title)).'</h5>
                      <p>'.wp_specialchars_decode(esc_attr($ses_subtitle)).'</p>
                  </div>
              </div>';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'testimonials'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="testimonials_area">
            <div class="container">
                <div class="testi_inner" data-title="Testimonials">
                    <div id="testimonial_slider" class="testimonial_slider owl-carousel">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .=' </div>
                </div>
            </div>
        </section>';

}elseif($type_row == 'testimonials2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="testimonials_area testimonials_area_two">
            <div class="container">
                <div class="testi_inner" data-title="Testimonials">
                    <div class="testimonial_slider_two owl-carousel">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
                </div>
            </div>
        </section>';

}elseif($type_row == 'testimonials3'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="testimonial_area_three">
            <div class="container">
                <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'contact_querry_area'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="contact_querry_area pad_100">
            <div class="container">
                <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>
<style>
.contact_querry_area:before {
    content: "";
    background: url('.esc_url($images[0]).') no-repeat scroll center right;
    position: absolute;
    right: 0px;
    top: 0px;
    z-index: -1;
    width: 642px;
    height: 100%;
    background-size: cover;
}
</style>
        ';

}elseif($type_row == 'contact_querry_area2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="contact_querry_area contact_querry_area_two pad_100">
            <div class="container">
                <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>
<style>
.contact_querry_area_two:before {
    content: "";
    position: absolute;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('.esc_url($images[0]).') no-repeat scroll center right;
    opacity: 0.22;
    z-index: -1;
}
</style>
        ';

}elseif($type_row == 'promo'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="h-promo-area">
            <div class="row m0">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
        </section>';

}elseif($type_row == 'offer'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="service-offer-area">
            <div class="service-offer-left">
                <div class="service-offer-content">
                    <h3 class="single_bar_title">'.wp_specialchars_decode(esc_attr($ses_title)).'</h3>
                    <h4>'.wp_specialchars_decode(esc_attr($ses_subtitle)).'</h4>
                    <p>'.wp_specialchars_decode(esc_attr($ses_desc)).'</p>
                    <a href="'.esc_url($ses_link1).'" class="read_all">'.wp_specialchars_decode(esc_attr($ses_btn1)).'</a>
                </div>
            </div>
            <div class="service-offer-right">
                <div class="service-offer">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'advisor'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="our_advisor_area pad_100">
            <div class="container">
                <div class="left_title">
                    <h2>'.wp_specialchars_decode(esc_attr($ses_title)).'</h2>
                    <p>'.wp_specialchars_decode(esc_attr($ses_subtitle)).'</p>
                </div>
                <div class="row m0 advisor_inner">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'advisor2'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="our_advisor_area_two  pad_100">
            <div class="container">
                <div class="left_title">
                    <h2>'.wp_specialchars_decode(esc_attr($ses_title)).'</h2>
                    <p>'.wp_specialchars_decode(esc_attr($ses_subtitle)).'</p>
                </div>
                <div class="row m0 advisor_inner">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'mission'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="our-mission-area pad_100">
            <div class="container">
                <div class="row">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}elseif($type_row == 'contact'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="row m0 contact_querry_area_three">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</section>';

}elseif($type_row == 'faq'){
    $images = wp_get_attachment_image_src($ses_image,'');
    $output .='<section class="faq_area pad_100">
            <div class="container">
                <div class="faq_inner">
                    <div class="c_left_title">
                        <h2>'.wp_specialchars_decode(esc_attr($ses_title)).'</h2>
                        <p>'.wp_specialchars_decode(esc_attr($ses_subtitle)).'</p>
                    </div>
                </div>
                <div class="row faq_collaps">';
    $output .= wpb_js_remove_wpautop($content);
    $output .=''.$this->endBlockComment('row');
    $output .='</div>
            </div>
        </section>';

}else{
    $output .= wpb_js_remove_wpautop($content);
    $output .= $this->endBlockComment('row');

}
echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);