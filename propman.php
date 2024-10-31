<?php
/*
Plugin Name: propMan
Plugin URI: http://hateyourwebsite.com/CashPress
Description: Easily Manage Your Online Real Estate For Sale & Rental Listings Web Pages from Anywhere Using a Small Yet Powerful Set of Wordpress Custom Post Types and various jQuery effects.
Version: v1.0
Author: Nolan Dempster
Author URI: http://www.workbold.com
License: GPL2
*/

//add propman custom post template

function get_properties_post_type_template($single_template) {
     global $post;

     if ($post->post_type == 'properties') {
          $single_template = dirname( __FILE__ ) . '/themefiles/single-property.php';
     }
     return $single_template;
}

add_filter( "single_template", "get_properties_post_type_template" ) ;

//Add Stylesheet to Admin WORKING
function write_admin_CSS() {
wp_register_style( 'write_admin_CSS', plugins_url('prop_admin_style.css', __FILE__) );

wp_enqueue_style("write_admin_CSS", WP_PLUGIN_DIR . '/propmanpress/prop_admin_style.css');
}
add_action('admin_init', 'write_admin_CSS');


require_once('property_type.php');

