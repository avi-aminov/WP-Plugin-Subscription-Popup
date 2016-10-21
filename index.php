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
        
        
        function theme_custom_enqueue() {
            wp_enqueue_script( 'admin-custom-script', plugins_url( 'assets/js/custom-script.js', __FILE__  ) );
        }
        add_action( 'wp_enqueue_scripts', 'theme_custom_enqueue' );
        
        
        
        
        
        /*
        function admin_custom_style() {
            //wp_enqueue_style( $handle, $src, $deps, $ver, $media );
            wp_enqueue_style( 'admin-custom-style',  plugins_url( 'assets/css/admin-style.css', __FILE__  ), '', '1.2.2' , true );
        }
        add_action('admin_head', 'admin_custom_style');
        
        
        function admin_custom_enqueue($hook) {
            
            ///if ( 'edit.php' != $hook ) {
            //    return;
           // }
            
            wp_enqueue_script( 'admin-custom-script', plugins_url( 'assets/js/admin-script.js', __FILE__  ), '', '1.2.2' , true );
        }
        add_action( 'admin_enqueue_scripts', 'admin_custom_enqueue' );
        */
        
        //include_once('includes/admin_page.php');
        include_once('includes/shortcode.php');	
    
        
        
        /*
        function theme_styles(){ 
            wp_enqueue_style( 'app-style',  plugins_url( 'assets/css/app-style.css', __FILE__ ) );
            wp_enqueue_style( 'ui-style',  plugins_url( 'assets/css/jquery-ui.min.css', __FILE__ ) );
        }
        add_action('wp_enqueue_scripts', 'theme_styles');		


        function wpdocs_theme_name_scripts() {
            wp_enqueue_script( 'script-name', plugins_url( 'assets/js/app-script.js', __FILE__ )  , array(), '1.1.2', true );
            wp_enqueue_script( 'ui-name', plugins_url( 'assets/js/jquery-ui.min.js', __FILE__ )  , array(), '1.1.2', true );
            wp_enqueue_script( 'PrintArea', plugins_url( 'assets/js/jquery.PrintArea.js', __FILE__ )  , array(), '1.1.2', true );

            wp_localize_script( 'script-name', 'formAjaxParam', array(
                'ajax_url' => admin_url( 'admin-ajax.php' )
            ));
        }
        add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts' );


        include_once('includes/init.php');	
        include_once('includes/ajax.php');	
        include_once('includes/db.php');
        include_once('includes/show_form_db.php');

        include_once('includes/meta_boxes.php');	
        include_once('includes/shortcode.php');	
        */
    }

?>