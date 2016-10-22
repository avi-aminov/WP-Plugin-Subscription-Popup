<?php 

    function subscriptionPopupFunc($atts) {
        ob_start(); 
        $param = shortcode_atts( 
            array(
                'displaytime' =>'1',
                'title' => 'Subscribe to Our Newsletter',
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry',
                'successmessage' => 'You are now subscribed to our newsletter',
                'buttontext' => 'Subscribe',
                'placeholder' => 'Your email',
                'sendemail' => 'example@example.com',
            ), 
        $atts, '');    
        ?>
        <div 
             id="subscription-popup-wrap" 
             align="center" 
             data-success="<?php echo $param['successmessage']; ?>" 
             data-email="<?php echo $param['sendemail']; ?>" 
             data-time="<?php echo $param['displaytime']; ?>"
        >
            <p id="subscription-popup-close"><img src="<?php  echo plugins_url( 'WP-Plugin-Subscription-Popup/assets/img/x.png'  ) ?>"/></p>
            <h1><?php echo $param['title']; ?></h1>
            <h2><?php echo $param['content']; ?></h2>
            <br/>
            <input id="subscription-popup-value" placeholder="<?php echo $param['placeholder']; ?>">
            <button id="subscription-popup-send"><?php echo $param['buttontext']; ?></button>
            <span class="subscription-popup-success-message"></span>
        </div>
        <?php
        return ob_get_clean();
    }
    add_shortcode('subscription-popup', 'subscriptionPopupFunc');

?>