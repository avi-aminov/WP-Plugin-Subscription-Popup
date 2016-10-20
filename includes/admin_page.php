<?php

    add_action('admin_menu', 'subscription_popup_plugin_setup_menu');

    function subscription_popup_plugin_setup_menu(){
        add_menu_page(  'Subscription Popup', 
                        'Subscription Popup', 
                        'manage_options', 
                        'subscription-plugin', 
                        'subscription_init' 
                    );
    }

    function subscription_init(){
    ?>
    

    
    
    <?php 
    }

?>