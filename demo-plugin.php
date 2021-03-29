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
 * Plugin Name:       Demo Plugin
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
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