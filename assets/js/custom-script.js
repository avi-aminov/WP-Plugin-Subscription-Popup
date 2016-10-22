jQuery( document ).ready(function() {
	
    var is_subscription = JSON.parse(localStorage.getItem('subscription'));

    if(!is_subscription && is_subscription != true){
        var time = jQuery('#subscription-popup-wrap').data('time');
        setTimeout(function() {
            jQuery('#subscription-popup-wrap').show();
        }, time * 1000);
    }

    jQuery('#subscription-popup-close').click(function(){
        jQuery('#subscription-popup-wrap').hide();
    });
    
    jQuery('#subscription-popup-send').click(function(){
        var sendEmail = jQuery('#subscription-popup-wrap').data('email');
        var userEmail = jQuery('#subscription-popup-value').val();

        if(isValidEmailAddress(userEmail)){
            formData = {	
                action:'form_success',
                sendEmail:sendEmail,
                userEmail:userEmail,
            };
            jQuery.ajax({
                url : formAjaxParam.ajax_url,
                type : 'post',
                data : formData,
                success : function( response ) {
                    console.log(response);
                    jQuery('#subscription-popup-value').removeClass('email-error');
                    jQuery('#subscription-popup-value').val('');
                    jQuery('.subscription-popup-success-message').html(jQuery('#subscription-popup-wrap').data('success'));
                    localStorage.setItem('subscription', true);
                }
            });
        }else{
            console.log("email error");
            jQuery('#subscription-popup-value').addClass('email-error');
        }
        
    });
});

var isValidEmailAddress = function (emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
};

