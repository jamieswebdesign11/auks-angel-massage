(function ($) {

    //Check if IE Function
    function isIE() {
        ua = navigator.userAgent;
        /* MSIE used to detect old browsers and Trident used to newer ones*/
        var is_ie = ua.indexOf("MSIE ") > -1 || ua.indexOf("Trident/") > -1;
        return is_ie;
    }
    //Sanatize String Function
    function sanitize(str) {
        var sani = str.replace(/[^A-Z0-9]/ig, " "); // Removes Special Charaters with Spaces 
        sani = sani.replace(/^(\s*)([\W\w]*)(\b\s*$)/g, '$2');
        return sani.replace(/\b[a-z]/gi, function (char) { // Caps First leter From Words 
            return char.toUpperCase();
        });
    }
    //Add Alt/Title tags to links that don't have them
    $('a').each(function () {
        if ($(this).attr('title') === undefined && $(this).attr('alt') === undefined) {
            var linkTxt = $(this).text();
            if (linkTxt.length >= 2) {
                $(this).attr({
                    title: linkTxt,
                    alt: linkTxt
                });
            } else {
                var linkLocation = $(this).attr('href');
                if (linkLocation == undefined) {} else {
                    var sanitized = sanitize(linkLocation);
                    $(this).attr({
                        title: sanitized,
                        alt: sanitized
                    });
                }
            }
        } else {
            var title = $(this).attr('title');
            var alt = $(this).attr('alt');
            switch (title) {
                case undefined:
                    $(this).attr({
                        title: alt
                    });
                    break;
            }
            switch (alt) {
                case undefined:
                    $(this).attr({
                        alt: title
                    });
                    break;
            }
        }
    });

    // Scroll To Code 
    $(window).on("load", function () {
        if (location.hash) {
            scrollPageToAnchor(window.location.hash);
        }
        $('a').click(function (e) {
            if ($(this).attr("href") != window.location.href && $(this)[0].host + $(this)[0].pathname == window.location.host + window.location.pathname && $(this).attr('data-toggle') == undefined) {
                e.preventDefault();
                scrollPageToAnchor($(this)[0].hash);
                window.location.hash = $(this)[0].hash;
                var noHashURL = window.location.href.replace(/#.*$/, '');
                window.history.replaceState('', document.title, noHashURL);
            }
        });

        function scrollPageToAnchor(anchor) {
            anchor = anchor.replace('/', '');
            var anchorMarginPadding = $(anchor).outerHeight(true) - $(anchor).innerHeight();
            var scrollDuration = 1000;
            $('html, body').animate({
                scrollTop: $(anchor).offset().top - anchorMarginPadding
            }, scrollDuration);
        }
    });


    //Banner Heights
    if ($(window).outerWidth() > 991) {
        function setHeight() {
            windowHeight = $(window).innerHeight();
            $('#banner').css('height', windowHeight / 3);
        };
        setHeight();
        $(window).resize(function () {
            setHeight();
        });
    }

    //Parallax code
    if ($(window).outerWidth() > 991) {
        $(window).on('load scroll', function () {
            var scrolled = $(this).scrollTop();
            $('.parallax-file-item').css('transform', 'translate3d(0, ' + -(scrolled * 0.5) + 'px, 0)');
        });
    }
    
    //mobile nav toggle
    $('.mobile-nav .fa-bars').click(function(){
        $('#menu-main-menu').toggle();
    });


})(jQuery);
