<?php
register_nav_menus( array( $location => $description ) );

// Hide Admin Bar
add_filter('show_admin_bar', '__return_false');

// Remove WYSIWYG
function reset_editor() {
     global $_wp_post_type_features;

     $post_type="page";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

function reset_post() {
     global $_wp_post_type_features;

     $post_type="post";
     $feature = "editor";
     if ( !isset($_wp_post_type_features[$post_type]) )
     {

     }
     elseif ( isset($_wp_post_type_features[$post_type][$feature]) )
     unset($_wp_post_type_features[$post_type][$feature]);
}

add_action("init","reset_post");
add_action("init","reset_editor");

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

// WooCommerce functions
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

//thjs will be run for each menu item
add_filter('nav_menu_css_class', 'cssattr_filter', 100, 1);

function cssattr_filter($var) {
	if(!is_array($var)) return;

	$current_indicators = array('current-menu-item', 'current-menu-parent', 'current_page_item', 'current_page_parent');
	
	$newArr = array();
	foreach($var as $el){
		//check if it contains an ID or it's indicating the current page
		if ((preg_match('#[0-9]#',$el))||in_array($el, $current_indicators)){ 
			array_push($newArr, $el);
		}
	}
	
	return $newArr;
}


//Köp knapp till product
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    // 2.1 +
 
function woo_custom_cart_button_text() {
 
        return __( 'Lägg i korgen', 'woocommerce' );
 
}

add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    // 2.1 +
 
function woo_archive_custom_cart_button_text() {
 
        return __( 'Lägg i korgen', 'woocommerce' );
 
}


add_action("template_redirect", 'redirection_function');
function redirection_function(){
    global $woocommerce;
    if( is_cart() && WC()->cart->cart_contents_count == 0){
        wp_safe_redirect( get_permalink( woocommerce_get_page_id( 'shop' ) ) );
    }
}

?>