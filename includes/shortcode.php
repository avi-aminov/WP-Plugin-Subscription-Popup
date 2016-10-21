<?php 

    function subscriptionPopupFunc() {
        
        return '<div id="subscription-popup-wrap" align="center">
                  <p id="subscription-popup-close">X</p>
                  <h1>Subscribe to Our Newsletter</h1>
                  <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy </h2>
                  <br/>
                  <input id="subscription-popup-value" placeholder="Your email"><button id="subscription-popup-send">Subscribe</button>
                  <span>You are now subscribed to our newsletter</span>
                </div>';
    }

    add_shortcode('subscription-popup', 'subscriptionPopupFunc');

?>