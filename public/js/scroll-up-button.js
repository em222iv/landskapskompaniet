/**
 * Created by erikmagnusson on 15-05-09.
 */
jQuery(document).ready(function() {
    $("div.navbar").attr("aria-expanded","false");
    var offset = 250;
    var duration = 300;

    jQuery(window).scroll(function() {

        if (jQuery(this).scrollTop() > offset) {

            jQuery('.back-to-top').fadeIn(duration);
        }
        else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});