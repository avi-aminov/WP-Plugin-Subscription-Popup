/*setTimeout(function() {
    jQuery('.subscribe').css('top', '0');
    jQuery('.subscribe').css('opacity', '1')
}, 200);
*/

setTimeout(function() {
    jQuery('#subscription-popup-wrap').show();
}, 2000);


jQuery( document ).ready(function() {
    jQuery('#subscription-popup-close').click(function(){
        jQuery('#subscription-popup-wrap').hide();
    });
});

