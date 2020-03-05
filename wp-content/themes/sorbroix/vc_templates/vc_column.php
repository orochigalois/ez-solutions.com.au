<?php
$output = $el_class = $width = '';
extract(shortcode_atts(array(
    'el_class' => '',
    'width' => '1/1',
    'wap_class' => '',
	'column_id' => '',
	'title' =>'',
	'subtitle' =>'',
	'type' => '',
    'image' => '',
), $atts));

if($type == 'column'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'  '.$wap_class.'" id="'.$column_id.'" >';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".'</div> '.$this->endBlockComment($el_class) . "\n";


}elseif($type == 'accordion'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'">
                        <div class="faq_accordian">
                            <div class="left_title">
                                <h2>'.wp_specialchars_decode(esc_attr($title)).'</h2>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div></div></div>'.$this->endBlockComment($el_class) . "\n";

}elseif($type == 'accordion2'){
$images = wp_get_attachment_image_src($image,'');
$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);

$el_class .= '';

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, $width.$el_class, $this->settings['base']);
$output .= "\n\t".'<div class="'.$css_class.'">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">';

$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);
$output .= "\n\t".' </div></div>'.$this->endBlockComment($el_class) . "\n";

}else{
	$el_class = $this->getExtraClass($el_class);
$width = wpb_translateColumnWidthToSpan($width);


$output .= "\n\t\t\t".wpb_js_remove_wpautop($content);

}
echo wp_specialchars_decode(esc_attr($output),ENT_QUOTES);