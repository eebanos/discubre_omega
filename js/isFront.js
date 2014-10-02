/*global window */
/*global jQuery */
(function ($) {
    var winH = $(window).height();
    var resp = winH/2;
    $(document).ready(function(){
        if( (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) || $(window).width() < 740 ) {
            $('#zone-content').css('display', "none");
        } else {
            $('#zone-header-wrapper').css('height', winH - 59);
            $('#region-header-first').css('top', winH / 2 - $('#region-header-first').height() / 2 - 95.5 + 59);
        }
    });
    $(window).load(function () {
        if( (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) || $(window).width() < 740 ) {
            $('#zone-content').css('display', "none");
        } else{
            $('#zone-postscript').css('height', winH/2);
            $('#zone-content').css('height', winH/2);
            $('#block-discubre-adv-discubre-adv').css('padding-top', $('#zone-content').height() / 2 - 153.5);
            $('#block-discubre-adv-discubre-adv').css('padding-bottom', $('#zone-content').height() / 2 - 153.5);
            $('#region-footer-first').css('height', resp);
        }
        $('#block-discubre-mailchimp-register-discubre-mailchimp').css('padding-top', $('#region-footer-first').height() / 2 - 39);
        Placeholdem( document.querySelectorAll( '[placeholder]' ) );
    });

    $(window).scroll(function() {
        var topOfWindow = $(window).scrollTop();
        var imagePos = $('#block-discubre-adv-discubre-adv').offset().top;

        function highlight(items, index) {
            index = index % items.length;
            items.eq(index).addClass('hatch');
            setTimeout(function() {highlight(items, index + 1)}, 400);
        }
        if (imagePos < topOfWindow + $(window).height()){
            highlight($('.anima'), 0);
        }
    });
}(jQuery));;
