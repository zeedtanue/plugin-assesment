<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       Otto International
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is the assignment 1 for otto international's interview process
 * Version:           1.0.0
 * Author:            Tamzeed Hossain
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

function my_custom_footer_text( $text ){
    return '<p style="color:red" >From your plugin</p>' . $text;
}

add_filter( 'admin_footer_text', 'my_custom_footer_text' );

//function for admin bar 
function my_own_menu(){
    global $wp_admin_bar;

    $custom_menu = array(
        'id'=>'Demo menu',
        'title'=>'This is for demo',
        'parent'=>'top-secondary',
        'href'=> site_url()
    );
    $wp_admin_bar->add_node($custom_menu);
}


add_action( 'admin_bar_menu', 'my_own_menu' );


require_once('admin_menu.php');

require_once('public.php');