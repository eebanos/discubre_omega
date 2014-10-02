/*global window */
/*global jQuery */
(function ($) {
    $(document).ready(function(){
        $('#zone-header-wrapper').css('height', 'inherit');
    });

    $(window).load(function () {

        var winH = $(window).height();
        var resp = winH/2;

        $('#zone-header-wrapper').css('background', 'none');
        $('#zone-postscript-wrapper').css('background', 'none');

        var ids = ["zone-mensaje-fabricantes-wrapper","zone-mensaje-profesionales-wrapper"];
        var alpha = (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) || ($(window).width() < 740);


        if(document.getElementById(ids[0])){
            $('#zone-content-wrapper').css('padding-top', 32);
            $('#zone-content').css({
                background: 'rgba(227, 227, 227, 0.9)',
                "-webkit-box-shadow": '0 8px 0 -6px rgba(232,232,100, 0.15)',
                "-moz-box-shadow": '0 8px 0 -6px rgba(232,232,100, 0.15)',
                "box-shadow": '0 8px 0 -6px rgba(232,232,100, 0.15)'
            });
            $('#page-title').css('padding-top',32);
            $('#block-discubre-contact-discubre-contact').css('padding-bottom', 32);
        }

        Placeholdem( document.querySelectorAll( '[placeholder]' ) );
    });
}(jQuery));;
