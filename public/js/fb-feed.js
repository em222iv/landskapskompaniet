/**
 * Created by erikmagnusson on 15-05-09.
 */
window.fbAsyncInit = function () {
    FB.init({
        appId: '1584087028510603',
        xfbml: true,
        version: 'v2.3'
    });
    if (typeof facebookInit == 'function') {
        facebookInit();
    }
};
function facebookInit() {
    FB.getLoginStatus(function (response) {
        if (response.status === 'connected') {
            FB.api(
                "/landskapskompaniet/feed",
                function (response) {
                    if (response && !response.error) {
                        var img = document.getElementById('facebook-picture');
                        var msg = document.getElementById('faceboook-message');
                        img.src = response['data'][0]['picture'];
                        msg.innerText = response['data'][0]['message'];
                    }
                }
            );
        }
        else {
            var img = document.getElementById('facebook-picture');
            var msg = document.getElementById('faceboook-message');
            img.src = 'https://cdn3.iconfinder.com/data/icons/follow-me/256/Facebook-512.png';
            msg.innerText = 'Följ oss på facebook!';
        }
    });
}
(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
    fbAsyncInit();
}(document, 'script', 'facebook-jssdk'));