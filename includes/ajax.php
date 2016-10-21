<?php 

add_action( 'wp_ajax_nopriv_form_success', 'form_success' );
add_action( 'wp_ajax_form_success', 'form_success' );

function form_success() {
	if($_POST['action'] == 'form_success'){
        if(  isset($_POST['sendEmail']) && filter_var($_POST['sendEmail'], FILTER_VALIDATE_EMAIL) &&
                isset($_POST['userEmail']) && filter_var($_POST['userEmail'], FILTER_VALIDATE_EMAIL)
          ){
            
            $dataEmail .= 'Email: ' . $_POST['userEmail'] . '<br>';
               
            $headers = "MIME-Version: 1.0\r\n"; 
            $headers .= "Content-Type: text/html; charset=utf-8\r\n"; 
            $headers .= "From: WP Plugin Subscription Popup \r\n"; 
            mail($_POST['sendEmail'], "now subscribed to our newsletter", $dataEmail, $headers);

            echo 'success';
            die();
        }else{
            echo 'error';
            die();
        }
	}
}
