<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="initial-scale=1, width=device-width"/>
    <link rel="profile" href="http://gmpg.org/xfn/11"/>
    <link rel="pingback" href="http://demo.spyropress.com/themeforest/burnley/xmlrpc.php"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('wp-content/themes/burnley/favicon.ico')}}"/>
    <script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title>Model Agency Orchid</title>
    <style>
        .wishlist_table .add_to_cart, a.add_to_wishlist.button.alt {
            border-radius: 16px;
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
        }            </style>

    <link rel="alternate" type="application/rss+xml" title="Burnley &raquo; Feed"
          href="http://demo.spyropress.com/themeforest/burnley/feed"/>
    <link rel="alternate" type="application/rss+xml" title="Burnley &raquo; Comments Feed"
          href="http://demo.spyropress.com/themeforest/burnley/comments/feed"/>
    <script type="text/javascript">
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/",
            "svgExt": ".svg",
            "source": {
                "wpemoji": "http:\/\/demo.spyropress.com\/themeforest\/burnley\/wp-includes\/js\/wp-emoji.js?ver=4.9.8",
                "twemoji": "http:\/\/demo.spyropress.com\/themeforest\/burnley\/wp-includes\/js\/twemoji.js?ver=4.9.8"
            }
        };
        (function (window, document, settings) {
            var src, ready, ii, tests;

            /*
             * Create a canvas element for testing native browser support
             * of emoji.
             */
            var canvas = document.createElement('canvas');
            var context = canvas.getContext && canvas.getContext('2d');

            /**
             * Check if two sets of Emoji characters render the same.
             *
             * @param set1 array Set of Emoji characters.
             * @param set2 array Set of Emoji characters.
             * @returns {boolean} True if the two sets render the same.
             */
            function emojiSetsRenderIdentically(set1, set2) {
                var stringFromCharCode = String.fromCharCode;

                // Cleanup from previous test.
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.fillText(stringFromCharCode.apply(this, set1), 0, 0);
                var rendered1 = canvas.toDataURL();

                // Cleanup from previous test.
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.fillText(stringFromCharCode.apply(this, set2), 0, 0);
                var rendered2 = canvas.toDataURL();

                return rendered1 === rendered2;
            }

            /**
             * Detect if the browser supports rendering emoji or flag emoji. Flag emoji are a single glyph
             * made of two characters, so some browsers (notably, Firefox OS X) don't support them.
             *
             * @since 4.2.0
             *
             * @param type {String} Whether to test for support of "flag" or "emoji".
             * @return {Boolean} True if the browser can render emoji, false if it cannot.
             */
            function browserSupportsEmoji(type) {
                var isIdentical;

                if (!context || !context.fillText) {
                    return false;
                }

                /*
                 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
                 * it doesn't work when the font is bolder than 500 weight. So, we
                 * check for bold rendering support to avoid invisible emoji in Chrome.
                 */
                context.textBaseline = 'top';
                context.font = '600 32px Arial';

                switch (type) {
                    case 'flag':
                        /*
                         * Test for UN flag compatibility. This is the least supported of the letter locale flags,
                         * so gives us an easy test for full support.
                         *
                         * To test for support, we try to render it, and compare the rendering to how it would look if
                         * the browser doesn't render it correctly ([U] + [N]).
                         */
                        isIdentical = emojiSetsRenderIdentically(
                                [55356, 56826, 55356, 56819],
                                [55356, 56826, 8203, 55356, 56819]
                        );

                        if (isIdentical) {
                            return false;
                        }

                        /*
                         * Test for English flag compatibility. England is a country in the United Kingdom, it
                         * does not have a two letter locale code but rather an five letter sub-division code.
                         *
                         * To test for support, we try to render it, and compare the rendering to how it would look if
                         * the browser doesn't render it correctly (black flag emoji + [G] + [B] + [E] + [N] + [G]).
                         */
                        isIdentical = emojiSetsRenderIdentically(
                                [55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447],
                                [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]
                        );

                        return !isIdentical;
                    case 'emoji':
                        /*
                         * She's the hero Emoji deserves, but not the one it needs right now.
                         *
                         * To test for support, try to render a new emoji (female superhero),
                         * then compare it to how it would look if the browser doesn't render it correctly
                         * (superhero + female sign).
                         */
                        isIdentical = emojiSetsRenderIdentically(
                                [55358, 56760, 9792, 65039],
                                [55358, 56760, 8203, 9792, 65039]
                        );
                        return !isIdentical;
                }

                return false;
            }

            function addScript(src) {
                var script = document.createElement('script');

                script.src = src;
                script.defer = script.type = 'text/javascript';
                document.getElementsByTagName('head')[0].appendChild(script);
            }

            tests = Array('flag', 'emoji');

            settings.supports = {
                everything: true,
                everythingExceptFlag: true
            };

            for (ii = 0; ii < tests.length; ii++) {
                settings.supports[tests[ii]] = browserSupportsEmoji(tests[ii]);

                settings.supports.everything = settings.supports.everything && settings.supports[tests[ii]];

                if ('flag' !== tests[ii]) {
                    settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[tests[ii]];
                }
            }

            settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && !settings.supports.flag;

            settings.DOMReady = false;
            settings.readyCallback = function () {
                settings.DOMReady = true;
            };

            if (!settings.supports.everything) {
                ready = function () {
                    settings.readyCallback();
                };

                if (document.addEventListener) {
                    document.addEventListener('DOMContentLoaded', ready, false);
                    window.addEventListener('load', ready, false);
                } else {
                    window.attachEvent('onload', ready);
                    document.attachEvent('onreadystatechange', function () {
                        if ('complete' === document.readyState) {
                            settings.readyCallback();
                        }
                    });
                }

                src = settings.source || {};

                if (src.concatemoji) {
                    addScript(src.concatemoji);
                } else if (src.wpemoji && src.twemoji) {
                    addScript(src.twemoji);
                    addScript(src.wpemoji);
                }
            }

        })(window, document, window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='fbw-css'
          href="{{asset('wp-content/plugins/flickr-badges-widget/css/widget.css%3Fver=0.7.css')}}" type='text/css'
          media='screen'/>
    <link rel='stylesheet' id='fontawesome-css-css'
          href="{{asset('wp-content/plugins/accesspress-social-counter/css/font-awesome.min.css%3Fver=1.7.3.css')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='apsc-frontend-css-css'
          href="{{asset('wp-content/plugins/accesspress-social-counter/css/frontend.css%3Fver=1.7.3.css')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='contact-form-7-css'
          href="{{asset('wp-content/plugins/contact-form-7/includes/css/styles.css%3Fver=4.9.1.css')}}" type='text/css'
          media='all'/>
    <link rel='stylesheet' id='rs-plugin-settings-css'
          href="{{asset('wp-content/plugins/revslider/public/assets/css/settings.css%3Fver=5.4.6.3.1.css')}}"
          type='text/css' media='all'/>
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {
        }
    </style>

    <link rel='stylesheet' id='jquery-selectBox-css'
          href="{{asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css%3Fver=1.2.0.css')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='yith-wcwl-main-css'
          href="{{asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css%3Fver=2.1.2.css')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css'
          href="{{asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css%3Fver=4.7.0.css')}}"
          type='text/css' media='all'/>
    <link rel='stylesheet' id='bootstrap-css'
          href="{{asset('wp-content/themes/burnley/assets/css/bootstrap.min.css%3Fver=4.9.8.css')}}" type='text/css'
          media='all'/>
    <link rel='stylesheet' id='font-awesome-css'
          href="{{asset('wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css%3Fver=5.4.5.css')}}"
          type='text/css' media='all'/>
    <!--[if lt IE 9]>
    <![endif]-->
    <link rel='stylesheet' id='socicon-css' href='wp-content/themes/burnley/assets/css/socicon.css%3Fver=4.9.8.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='rt-icon-css' href='wp-content/themes/burnley/assets/css/rt-icon.css%3Fver=4.9.8.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='glyphicons-css'
          href='wp-content/themes/burnley/assets/css/glyphicons.css%3Fver=4.9.8.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='font-stroke-7-icon-css'
          href='wp-content/themes/burnley/assets/css/pe-icon-7-stroke.css%3Fver=4.9.8.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='revogue-animation-css'
          href='wp-content/themes/burnley/assets/css/animations.css%3Fver=4.9.8.css' type='text/css' media='all'/>
    <link property="stylesheet" rel='stylesheet' id='owl-carousel-css'
          href='wp-content/themes/burnley/assets/owlcarousel/css/owl.carousel.min.css%3Fver=4.9.8.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='revogue-owl-carousel-default-css-css'
          href='wp-content/themes/burnley/assets/owlcarousel/css/owl.theme.default.min.css%3Fver=4.9.8.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='magnific-popup-css-css'
          href='wp-content/themes/burnley/assets/css/magnific-popup.css%3Fver=1.0.1.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='prettyphoto-css'
          href='wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css%3Fver=5.4.5.css'
          type='text/css' media='all'/>
    <link rel='stylesheet' id='revogue-static-css'
          href='wp-content/themes/burnley/assets/css/static.css%3Fver=4.9.8.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='custom-dynamic-css'
          href='wp-content/themes/burnley/assets/css/custom-dynamic.css%3Fver=4.9.8.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='newsletter-subscription-css'
          href='wp-content/plugins/newsletter/subscription/style.css%3Fver=5.1.6.css' type='text/css' media='all'/>
    <link rel='stylesheet' id='js_composer_front-css'
          href='wp-content/plugins/js_composer/assets/css/js_composer.min.css%3Fver=5.4.5.css' type='text/css'
          media='all'/>
    <link rel='stylesheet' id='js_composer_custom_css-css'
          href='wp-content/uploads/js_composer/custom.css%3Fver=5.4.5.css' type='text/css' media='all'/>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js%3Fver=1.12.4'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.js%3Fver=1.4.1'></script>
    <script type='text/javascript'
            src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js%3Fver=5.4.6.3.1'></script>
    <script type='text/javascript'
            src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js%3Fver=5.4.6.3.1'></script>

    <script type='text/javascript' src='wp-content/themes/burnley/assets/js/bootstrap.min.js%3Fver=3.3.2'></script>

    <noscript>
        <style>.woocommerce-product-gallery {
                opacity: 1 !important;
            }</style>
    </noscript>
    <style type="text/css">.recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }</style>
    <style type='text/css'>#zflickr-2 ul li {
            margin: 0 5px 5px 0;
        }</style>
    <style type='text/css'>#zflickr-3 ul li {
            margin: 0 5px 5px 0;
        }</style>
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css"
          href="http://demo.spyropress.com/themeforest/burnley/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css"
          media="screen"><![endif]-->
    <meta name="generator"
          content="Powered by Slider Revolution 5.4.6.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface."/>
    <script type="text/javascript">function setREVStartSize(e) {
            try {
                var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                            f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({height: f})
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        }
        ;</script>
    <style type="text/css" title="dynamic-css" class="options-output">#page-title #page-title-text h1 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading #page-title #page-title-text h1, {
            opacity: 0;
        }

        .ie.wf-loading #page-title #page-title-text h1, {
            visibility: hidden;
        }

        #page-title #breadcrumb-text {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading #page-title #breadcrumb-text, {
            opacity: 0;
        }

        .ie.wf-loading #page-title #breadcrumb-text, {
            visibility: hidden;
        }

        a {
            color: #ffffff;
        }

        a:hover {
            color: #ef90a4;
        }

        body {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body, {
            opacity: 0;
        }

        .ie.wf-loading body, {
            visibility: hidden;
        }

        body #content.site-content h1 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body #content.site-content h1, {
            opacity: 0;
        }

        .ie.wf-loading body #content.site-content h1, {
            visibility: hidden;
        }

        body #content.site-content h2 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body #content.site-content h2, {
            opacity: 0;
        }

        .ie.wf-loading body #content.site-content h2, {
            visibility: hidden;
        }

        body #content.site-content h3 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body #content.site-content h3, {
            opacity: 0;
        }

        .ie.wf-loading body #content.site-content h3, {
            visibility: hidden;
        }

        body #content.site-content h4 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body #content.site-content h4, {
            opacity: 0;
        }

        .ie.wf-loading body #content.site-content h4, {
            visibility: hidden;
        }

        body #content.site-content h5 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body #content.site-content h5, {
            opacity: 0;
        }

        .ie.wf-loading body #content.site-content h5, {
            visibility: hidden;
        }

        body #content.site-content h6 {
            opacity: 1;
            visibility: visible;
            -webkit-transition: opacity 0.24s ease-in-out;
            -moz-transition: opacity 0.24s ease-in-out;
            transition: opacity 0.24s ease-in-out;
        }

        .wf-loading body #content.site-content h6, {
            opacity: 0;
        }

        .ie.wf-loading body #content.site-content h6, {
            visibility: hidden;
        }</style>
    <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1509012240929 {
            padding-top: 64px !important;
            padding-bottom: 100px !important;
            background-image: url(wp-content/uploads/2017/08/about.jpg%3Fid=1431) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1509011996372 {
            padding-top: 100px !important;
            padding-bottom: 100px !important;
            background-color: #1a1a1a !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1509005026995 {
            padding-top: 25px !important;
            padding-bottom: 10px !important;
            background-color: #0d0d0d !important;
        }

        .vc_custom_1509007088361 {
            padding-top: 78px !important;
            padding-bottom: 110px !important;
            background-color: #1a1a1a !important;
        }

        .vc_custom_1509012292260 {
            padding-top: 61px !important;
            padding-bottom: 100px !important;
            background-image: url(wp-content/uploads/2017/08/casting.jpg%3Fid=1468) !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1512611835614 {
            padding-top: 76px !important;
            padding-bottom: 110px !important;
            background-color: #1a1a1a !important;
            background-position: center !important;
            background-repeat: no-repeat !important;
            background-size: cover !important;
        }

        .vc_custom_1507262379332 {
            margin-top: 10px !important;
        }

        .vc_custom_1509000699581 {
            margin-top: -10px !important;
            margin-bottom: 50px !important;
        }

        .vc_custom_1509000635200 {
            margin-top: 45px !important;
            margin-bottom: 30px !important;
        }

        .vc_custom_1507263088675 {
            margin-bottom: 25px !important;
        }

        .vc_custom_1507271955796 {
            margin-top: 10px !important;
        }

        .vc_custom_1509000952318 {
            margin-top: -10px !important;
            margin-bottom: 50px !important;
        }

        .vc_custom_1507272674329 {
            margin-top: 40px !important;
            padding-right: 10px !important;
        }

        .vc_custom_1507272686758 {
            padding-right: 0px !important;
            padding-left: 0px !important;
        }

        .vc_custom_1507272701453 {
            margin-top: 40px !important;
            padding-left: 10px !important;
        }

        .vc_custom_1507285628737 {
            margin-top: 10px !important;
        }

        .vc_custom_1509007351709 {
            margin-top: -10px !important;
            margin-bottom: 65px !important;
        }

        .vc_custom_1507285663180 {
            margin-bottom: 25px !important;
        }

        .vc_custom_1507351035850 {
            margin-top: 10px !important;
        }

        .vc_custom_1509000978335 {
            margin-top: -10px !important;
            margin-bottom: 50px !important;
        }</style>
    <noscript>
        <style type="text/css"> .wpb_animate_when_almost_visible {
                opacity: 1;
            }</style>
    </noscript>
</head>
<body class="home page-template-default page page-id-31 wpb-js-composer js-comp-ver-5.4.5 vc_responsive">
<div id="page" class="hfeed site ">
    <header id="masthead" class="site-header ">
        <div id="cshero-header" class="cshero-main-header cshero-header-split cshero-main-header1 sticky-desktop">
            <div class="container-header container parent-container">
                <div class="row">
                    <div id="cshero-header-logo" class="site-branding col-xs-12 col-sm-12 hidden-md hidden-lg">
                        <div class="main_logo"><a href="index.html"><img alt="Burnley"
                                                                         src="wp-content/uploads/2017/12/thumbnail.png"></a>
                        </div>                <span onclick=""
                                                    class="cshero-menu-mobile pe-7s-menu toggle_menu hidden-md hidden-lg">
                    <i></i>
                </span>
                    </div>
                    <!-- #site-logo -->
                    <div id="cshero-header-navigation" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span onclick="" class="cshero-menu-mobile pe-7s-menu toggle_menu hidden-md hidden-lg">
                    <i></i>
                </span>
                        <nav id="site-navigation" class="main-navigation">
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu" class="nav-menu menu-main-menu clearfix">
                                    <li id="menu-item-2163"
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2163">
                                        <a href="index.html"><span>Home</span></a>

                                    </li>
                                    <li id="menu-item-2164"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2164">
                                        <a href="index.html#"><span>Services</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>Event Organisation</span></a></li>
                                            <li id="menu-item-2277"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2277">
                                                <a href=""><span>Fashion Show Collections</span></a></li>
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>Private Party</span></a></li>
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>Leisure</span></a></li>
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>Individual Photoshooting</span></a></li>
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>Makeup Courses</span></a></li>
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>City Tours</span></a></li>
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>Dating with Wealthy Club Members</span></a></li>


                                        </ul>
                                    </li>

                                    <li id="menu-item-2206"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2206">
                                        <a href="index.html#"><span>Blog</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2276"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276">
                                                <a href=""><span>News</span></a></li>
                                            <li id="menu-item-2277"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2277">
                                                <a href=""><span>Beauty</span></a></li>
                                            <li id="menu-item-2277"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2277">
                                                <a href=""><span>MakeUp</span></a></li>
                                            <li id="menu-item-2277"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2277">
                                                <a href=""><span>Lovestories</span></a></li>

                                        </ul>
                                    </li>
                                    <li class="logo"></li>

                                    <li id="menu-item-2197"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2197">
                                        <a href="index.html#"><span>About Us</span></a>

                                    </li>



                                    <li id="menu-item-2165"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2165">
                                        <a href="index.html#"><span>Models</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2253"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2253">
                                                <a href=""><span>Models</span></a></li>
                                            <li id="menu-item-2254"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2254">
                                                <a href=""><span>Hostess</span></a></li>
                                            <li id="menu-item-2185"
                                                class="menu-item menu-item-type-post_type menu-item-object-model menu-item-2185">
                                                <a href=""><span>Acompanying On Trips
                                                    </span></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2178"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2178">
                                        <a href="index.html#"><span>Contacts</span></a>

                                    </li>
                                </ul>
                            </div>
                        </nav>
                        <!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- #site-navigation -->    </header><!-- #masthead -->
    <!-- #page-title -->
    @yield('content')
    <footer id="colophon" class="site-footer class-bottom-1 class-top-1 ">
        <div class="bottom-bg-overlay"></div>
        <div id="footer-top" class="footer-top">

            <div class="top-bg-overlay"></div>
            <div class=" container ">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside id="vnt_map_address_wg-1" class="widget widget_red_map_address widgett11"><h3
                                    class="wg-title">Our Contacts</h3>
                            <div class="vnt-map-address-wrap">
                                <iframe src="../../../www.google.com/maps/embed%3Fpb=!1m18!1m12!1m3!1d11109.661434921883!2d-117.85404685405554!3d34.122743829315176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%253A0x876ac1c2caebc4e5!2sBig+Tree+Park!5e0!3m2!1svi!2s!4v1503030766771.html"
                                        height="220"></iframe>
                                <ul class="list-unstyled wg-vnt-map-address">
                                    <li><i class="fa fa-globe"></i> Jacksotts str. 698 San Diego, California, USA</li>
                                    <li><i class="fa fa-phone"></i> 1-800-123-4567, 1-800-123-4568</li>
                                    <li><i class="fa fa-envelope"></i> fashion_vogue@support.com</li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside id="vnt_work_calendar_wg-1" class="widget widget_red_work_calendar widgett12"><h3
                                    class="wg-title">Working Hours</h3>
                            <div class="vnt-work-calendar-wrap">
                                <ul class="list-unstyled list1 no-bullets big-padding wg-ul-work-calendar">
                                    <li class="content-justify"><span>Monday - Friday</span><span class="time">9 a.m. - 6 p.m.</span>
                                    </li>
                                    <li class="content-justify"><span>Saturday</span><span
                                                class="time">10 a.m. - 8 p.m.</span></li>
                                    <li class="content-justify"><span>Sunday</span><span class="time">Closed</span></li>
                                </ul>
                            </div>
                        </aside>
                        <aside id="newsletterwidget-2" class="widget widget_newsletterwidget widgett12"><h3
                                    class="wg-title">Newsletter Signup</h3>
                            <div class="tnp tnp-widget">
                                <form method="post" action="http://demo.spyropress.com/themeforest/burnley/?na=s"
                                      onsubmit="return newsletter_check(this)">

                                    <input type="hidden" name="nr" value="widget">
                                    <input type='hidden' name='nl[]' value='0'>
                                    <div class="tnp-field tnp-field-email"><label>Email</label><input class="tnp-email"
                                                                                                      type="email"
                                                                                                      name="ne"
                                                                                                      required></div>
                                    <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit"
                                                                                   value="Subscribe">
                                    </div>
                                </form>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <aside id="cms_banner_ads-1" class="widget widget_cms_banner_ads widgett13"><h3
                                    class="wg-title">Banner Ad</h3>
                            <div class="about-widget">
                                <div class="post-media"
                                     style="background-image: url(wp-content/uploads/2017/08/Depositphotos_34377157_original-1-770x512.jpg);">
                                    <a href="index.html#"><span class="btn">visit</span><span class="image-text">Model Courses</span></a>
                                </div>
                            </div>
                        </aside>
                        <aside id="cms_social_widget-1" class=" widget widget_cms_social_widget widgett13"><h3
                                    class="wg-title">Follow Us</h3>
                            <ul class="cms-social horizontal   list-unstyled list-inline clearfix">
                                <li><a class="icon-sprite facebook" target="_blank" data-rel="tooltip" title="Facebook"
                                       href="https://facebook.com"><i class="fa fa-facebook"></i></a></li>
                                <li><a class="icon-sprite twitter" target="_blank" data-rel="tooltip" title="Twitter"
                                       href="index.html#"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="icon-sprite google" target="_blank" data-rel="tooltip" title="Google"
                                       href="index.html#"><i class="fa fa-google"></i></a></li>
                                <li><a class="icon-sprite linkedin" target="_blank" data-rel="tooltip" title="Linkedin"
                                       href="index.html#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a class="icon-sprite pinterest" target="_blank" data-rel="tooltip"
                                       title="Pinterest" href="index.html#"><i class="fa fa-pinterest-p"></i></a>
                                <li>
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div><!-- #footer-top -->
        <div id="footer-bottom" class="footer-bottom">

            <div class="bot-bg-overlay"></div>
            <div class=" container ">
                <div class="row">

                    <div class="col-xs-12">
                        <aside id="text-24" class="widget widget_text widgetb1">
                            <div class="textwidget"><p>&copy; Copyright 2017 All Rights Reserved</p>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div><!-- #footer-bottom -->

    </footer><!-- .site-footer -->

</div><!-- .site -->

<div class="ef3-back-to-top" onclick=""><i class="fa fa-angle-up"></i></div>
<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link rel='stylesheet' id='bootstrap-progressbar-css'
      href='wp-content/plugins/ef4-Framework/frameworks/cmssuperheroes/assets/css/bootstrap-progressbar.min.css%3Fver=0.7.0.css'
      type='text/css' media='all'/>
<link property="stylesheet" rel='stylesheet' id='vc_pageable_owl-carousel-css-css'
      href='wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.min.css%3Fver=5.4.5.css'
      type='text/css' media='all'/>
<link rel='stylesheet' id='animate-css-css'
      href='wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css%3Fver=5.4.5.css' type='text/css'
      media='all'/>
<script type='text/javascript'>
    /* <![CDATA[ */
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js%3Fver=4.9.1'></script>
<script type='text/javascript' src='wp-content/plugins/news-twitter/js/jquery.bxslider.min.js%3Fver=4.1.2'></script>
<script type='text/javascript' src='wp-content/plugins/news-twitter/js/news-twitter.js%3Fver=1.0.0'></script>
<script type='text/javascript'
        src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.js%3Fver=2.70'></script>
<script type='text/javascript'
        src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.js%3Fver=2.1.4'></script>

<script type='text/javascript'
        src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.js%3Fver=3.2.5'></script>
<script type='text/javascript'
        src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.js%3Fver=3.1.6'></script>

<script type='text/javascript'
        src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js%3Fver=2.1.2'></script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/js/menu.js%3Fver=1.0.0'></script>
<script type='text/javascript'
        src='wp-content/themes/burnley/assets/owlcarousel/js/owl.carousel.min.js%3Fver=1.0.0'></script>
<script type='text/javascript'
        src='wp-content/themes/burnley/assets/js/jquery.magnific-popup.min.js%3Fver=1.0.0'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js%3Fver=5.4.5'></script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/js/main.js%3Fver=1.0.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var newsletter = {
        "messages": {
            "email_error": "The email is not correct",
            "name_error": "The name is not correct",
            "surname_error": "The last name is not correct",
            "privacy_error": "You must accept the privacy statement"
        }, "profile_max": "20"
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/newsletter/subscription/validate.js%3Fver=5.1.6'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.js%3Fver=4.9.8'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js%3Fver=5.4.5'></script>
<script type='text/javascript'
        src='wp-content/plugins/ef4-Framework/frameworks/cmssuperheroes/assets/js/bootstrap-progressbar.min.js%3Fver=0.7.0'></script>
<script type='text/javascript'
        src='wp-content/plugins/ef4-Framework/frameworks/cmssuperheroes/assets/js/bootstrap-progressbar.cms.js%3Fver=1.0.0'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js%3Fver=5.4.5'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmscarousel = {
        "cms-model-carousel": {
            "margin": "0",
            "loop": "",
            "mouseDrag": "true",
            "nav": "true",
            "dots": "",
            "autoplay": "true",
            "autoplayTimeout": 5000,
            "smartSpeed": 1000,
            "autoplayHoverPause": "true",
            "navText": ["<span class=\"prev\">Prev<\/span>", "<span class=\"next\">Next<\/span>"],
            "dotscontainer": "cms-model-carousel .cms-dots",
            "center": 0,
            "responsive": {"0": {"items": 1}, "768": {"items": 2}, "992": {"items": 3}, "1200": {"items": 4}}
        }
    };
    var cmscarousel = {
        "cms-model-carousel": {
            "margin": "0",
            "loop": "",
            "mouseDrag": "true",
            "nav": "true",
            "dots": "",
            "autoplay": "true",
            "autoplayTimeout": 5000,
            "smartSpeed": 1000,
            "autoplayHoverPause": "true",
            "navText": ["<span class=\"prev\">Prev<\/span>", "<span class=\"next\">Next<\/span>"],
            "dotscontainer": "cms-model-carousel .cms-dots",
            "center": 0,
            "responsive": {"0": {"items": 1}, "768": {"items": 2}, "992": {"items": 3}, "1200": {"items": 4}}
        },
        "cms-testimonial-carousel": {
            "margin": 30,
            "loop": "",
            "mouseDrag": "true",
            "nav": "",
            "nav_post": "",
            "dots": "true",
            "autoplay": "true",
            "autoplayTimeout": 2000,
            "smartSpeed": 1000,
            "autoplayHoverPause": "true",
            "navText": ["<i class=\"fa fa-angle-left\"><\/i>", "<i class=\"fa fa-angle-right\"><\/i>"],
            "autoHeight": "true",
            "responsive": {"0": {"items": 1}, "768": {"items": 1}, "992": {"items": 1}, "1200": {"items": 1}}
        }
    };
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/js/owl.carousel.cms.js%3Fver=1.0.0'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js%3Fver=3.2.0'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/owl.carousel.min.js%3Fver=5.4.5'></script>
<script type='text/javascript'
        src='wp-content/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.min.js%3Fver=4.9.8'></script>
<script type='text/javascript' src='wp-includes/js/underscore.min.js%3Fver=1.8.3'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/vc_grid.min.js%3Fver=5.4.5'></script>
</body>
</html>
<!-- Dynamic page generated in 1.334 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-09-09 10:59:08 -->
<!-- Compression = gzip -->
<!-- super cache -->
