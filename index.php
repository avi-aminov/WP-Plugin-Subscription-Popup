<?php 
    /*
    Plugin Name: WP Plugin Subscription Popup
    Plugin URI: https://github.com/avi-aminov
    Description: Subscription Popup Simple Plugin
    Author: Avi Aminov
    Version: 1.0
    Author URI: https://github.com/avi-aminov
    */
?>

<?php

    add_action( 'init', 'process_admin_this_plugin' );
    function process_admin_this_plugin() {
        
        function theme_styles() {
            wp_enqueue_style( 'theme-custom-style',  plugins_url( 'assets/css/custom-style.css', __FILE__  ) );
        }
        add_action('wp_enqueue_scripts', 'theme_styles');
        
        
        function wpdocs_theme_name_scripts() {
            wp_enqueue_script( 'custom-script', plugins_url( 'assets/js/custom-script.js', __FILE__ )  , array(), '1.1.2', true );

            wp_localize_script( 'custom-script', 'formAjaxParam', array(
                'ajax_url' => admin_url( 'admin-ajax.php' )
            ));
        }
        add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );
        
        
        include_once('includes/shortcode.php');	
        include_once('includes/ajax.php');	 
    }

?>