<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="initial-scale=1, width=device-width" />
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="http://demo.spyropress.com/themeforest/burnley/xmlrpc.php" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('wp-content/themes/burnley/favicon.ico')}}" />
    <script type="text/javascript">document.documentElement.className = document.documentElement.className + ' yes-js js_active js'</script>
    <title>Burnley &#8211; Just another WordPress site</title>
    <style>
        .wishlist_table .add_to_cart, a.add_to_wishlist.button.alt { border-radius: 16px; -moz-border-radius: 16px; -webkit-border-radius: 16px; }			</style>

    <link rel="alternate" type="application/rss+xml" title="Burnley &raquo; Feed" href="http://demo.spyropress.com/themeforest/burnley/feed" />
    <link rel="alternate" type="application/rss+xml" title="Burnley &raquo; Comments Feed" href="http://demo.spyropress.com/themeforest/burnley/comments/feed" />
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"wpemoji":"http:\/\/demo.spyropress.com\/themeforest\/burnley\/wp-includes\/js\/wp-emoji.js?ver=4.9.8","twemoji":"http:\/\/demo.spyropress.com\/themeforest\/burnley\/wp-includes\/js\/twemoji.js?ver=4.9.8"}};
        ( function( window, document, settings ) {
            var src, ready, ii, tests;

            /*
             * Create a canvas element for testing native browser support
             * of emoji.
             */
            var canvas = document.createElement( 'canvas' );
            var context = canvas.getContext && canvas.getContext( '2d' );

            /**
             * Check if two sets of Emoji characters render the same.
             *
             * @param set1 array Set of Emoji characters.
             * @param set2 array Set of Emoji characters.
             * @returns {boolean} True if the two sets render the same.
             */
            function emojiSetsRenderIdentically( set1, set2 ) {
                var stringFromCharCode = String.fromCharCode;

                // Cleanup from previous test.
                context.clearRect( 0, 0, canvas.width, canvas.height );
                context.fillText( stringFromCharCode.apply( this, set1 ), 0, 0 );
                var rendered1 = canvas.toDataURL();

                // Cleanup from previous test.
                context.clearRect( 0, 0, canvas.width, canvas.height );
                context.fillText( stringFromCharCode.apply( this, set2 ), 0, 0 );
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
            function browserSupportsEmoji( type ) {
                var isIdentical;

                if ( ! context || ! context.fillText ) {
                    return false;
                }

                /*
                 * Chrome on OS X added native emoji rendering in M41. Unfortunately,
                 * it doesn't work when the font is bolder than 500 weight. So, we
                 * check for bold rendering support to avoid invisible emoji in Chrome.
                 */
                context.textBaseline = 'top';
                context.font = '600 32px Arial';

                switch ( type ) {
                    case 'flag':
                        /*
                         * Test for UN flag compatibility. This is the least supported of the letter locale flags,
                         * so gives us an easy test for full support.
                         *
                         * To test for support, we try to render it, and compare the rendering to how it would look if
                         * the browser doesn't render it correctly ([U] + [N]).
                         */
                        isIdentical = emojiSetsRenderIdentically(
                                [ 55356, 56826, 55356, 56819 ],
                                [ 55356, 56826, 8203, 55356, 56819 ]
                        );

                        if ( isIdentical ) {
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
                                [ 55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447 ],
                                [ 55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447 ]
                        );

                        return ! isIdentical;
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
                        return ! isIdentical;
                }

                return false;
            }

            function addScript( src ) {
                var script = document.createElement( 'script' );

                script.src = src;
                script.defer = script.type = 'text/javascript';
                document.getElementsByTagName( 'head' )[0].appendChild( script );
            }

            tests = Array( 'flag', 'emoji' );

            settings.supports = {
                everything: true,
                everythingExceptFlag: true
            };

            for( ii = 0; ii < tests.length; ii++ ) {
                settings.supports[ tests[ ii ] ] = browserSupportsEmoji( tests[ ii ] );

                settings.supports.everything = settings.supports.everything && settings.supports[ tests[ ii ] ];

                if ( 'flag' !== tests[ ii ] ) {
                    settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && settings.supports[ tests[ ii ] ];
                }
            }

            settings.supports.everythingExceptFlag = settings.supports.everythingExceptFlag && ! settings.supports.flag;

            settings.DOMReady = false;
            settings.readyCallback = function() {
                settings.DOMReady = true;
            };

            if ( ! settings.supports.everything ) {
                ready = function() {
                    settings.readyCallback();
                };

                if ( document.addEventListener ) {
                    document.addEventListener( 'DOMContentLoaded', ready, false );
                    window.addEventListener( 'load', ready, false );
                } else {
                    window.attachEvent( 'onload', ready );
                    document.attachEvent( 'onreadystatechange', function() {
                        if ( 'complete' === document.readyState ) {
                            settings.readyCallback();
                        }
                    } );
                }

                src = settings.source || {};

                if ( src.concatemoji ) {
                    addScript( src.concatemoji );
                } else if ( src.wpemoji && src.twemoji ) {
                    addScript( src.twemoji );
                    addScript( src.wpemoji );
                }
            }

        } )( window, document, window._wpemojiSettings );
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
    <link rel='stylesheet' id='fbw-css'  href="{{asset('wp-content/plugins/flickr-badges-widget/css/widget.css%3Fver=0.7.css')}}" type='text/css' media='screen' />
    <link rel='stylesheet' id='fontawesome-css-css'  href="{{asset('wp-content/plugins/accesspress-social-counter/css/font-awesome.min.css%3Fver=1.7.3.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='apsc-frontend-css-css'  href="{{asset('wp-content/plugins/accesspress-social-counter/css/frontend.css%3Fver=1.7.3.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='contact-form-7-css'  href="{{asset('wp-content/plugins/contact-form-7/includes/css/styles.css%3Fver=4.9.1.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='rs-plugin-settings-css'  href="{{asset('wp-content/plugins/revslider/public/assets/css/settings.css%3Fver=5.4.6.3.1.css')}}" type='text/css' media='all' />
    <style id='rs-plugin-settings-inline-css' type='text/css'>
        #rs-demo-id {}
    </style>

    <link rel='stylesheet' id='jquery-selectBox-css'  href="{{asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/jquery.selectBox.css%3Fver=1.2.0.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-main-css'  href="{{asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/style.css%3Fver=2.1.2.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='yith-wcwl-font-awesome-css'  href="{{asset('wp-content/plugins/yith-woocommerce-wishlist/assets/css/font-awesome.min.css%3Fver=4.7.0.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'  href="{{asset('wp-content/themes/burnley/assets/css/bootstrap.min.css%3Fver=4.9.8.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='font-awesome-css'  href="{{asset('wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css%3Fver=5.4.5.css')}}" type='text/css' media='all' />
    <!--[if lt IE 9]>
    <![endif]-->
    <link rel='stylesheet' id='socicon-css'  href='wp-content/themes/burnley/assets/css/socicon.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='rt-icon-css'  href='wp-content/themes/burnley/assets/css/rt-icon.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='glyphicons-css'  href='wp-content/themes/burnley/assets/css/glyphicons.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='font-stroke-7-icon-css'  href='wp-content/themes/burnley/assets/css/pe-icon-7-stroke.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='revogue-animation-css'  href='wp-content/themes/burnley/assets/css/animations.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link property="stylesheet" rel='stylesheet' id='owl-carousel-css'  href='wp-content/themes/burnley/assets/owlcarousel/css/owl.carousel.min.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='revogue-owl-carousel-default-css-css'  href='wp-content/themes/burnley/assets/owlcarousel/css/owl.theme.default.min.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='magnific-popup-css-css'  href='wp-content/themes/burnley/assets/css/magnific-popup.css%3Fver=1.0.1.css' type='text/css' media='all' />
    <link rel='stylesheet' id='prettyphoto-css'  href='wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css%3Fver=5.4.5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='revogue-static-css'  href='wp-content/themes/burnley/assets/css/static.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='custom-dynamic-css'  href='wp-content/themes/burnley/assets/css/custom-dynamic.css%3Fver=4.9.8.css' type='text/css' media='all' />
    <link rel='stylesheet' id='newsletter-subscription-css'  href='wp-content/plugins/newsletter/subscription/style.css%3Fver=5.1.6.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_front-css'  href='wp-content/plugins/js_composer/assets/css/js_composer.min.css%3Fver=5.4.5.css' type='text/css' media='all' />
    <link rel='stylesheet' id='js_composer_custom_css-css'  href='wp-content/uploads/js_composer/custom.css%3Fver=5.4.5.css' type='text/css' media='all' />
    <script type='text/javascript' src='wp-includes/js/jquery/jquery.js%3Fver=1.12.4'></script>
    <script type='text/javascript' src='wp-includes/js/jquery/jquery-migrate.js%3Fver=1.4.1'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js%3Fver=5.4.6.3.1'></script>
    <script type='text/javascript' src='wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js%3Fver=5.4.6.3.1'></script>

    <script type='text/javascript' src='wp-content/themes/burnley/assets/js/bootstrap.min.js%3Fver=3.3.2'></script>

    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <style type='text/css'>#zflickr-2 ul li {margin:0 5px 5px 0;}</style><style type='text/css'>#zflickr-3 ul li {margin:0 5px 5px 0;}</style><meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
    <!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://demo.spyropress.com/themeforest/burnley/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><meta name="generator" content="Powered by Slider Revolution 5.4.6.3.1 - responsive, Mobile-Friendly Slider Plugin for WordPress with comfortable drag and drop interface." />
    <script type="text/javascript">function setREVStartSize(e){
            try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
                if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
            }catch(d){console.log("Failure at Presize of Slider:"+d)}
        };</script>
    <style type="text/css" title="dynamic-css" class="options-output">#page-title #page-title-text h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading #page-title #page-title-text h1,{opacity: 0;}.ie.wf-loading #page-title #page-title-text h1,{visibility: hidden;}#page-title #breadcrumb-text{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading #page-title #breadcrumb-text,{opacity: 0;}.ie.wf-loading #page-title #breadcrumb-text,{visibility: hidden;}a{color:#ffffff;}a:hover{color:#ef90a4;}body{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body,{opacity: 0;}.ie.wf-loading body,{visibility: hidden;}body #content.site-content h1{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body #content.site-content h1,{opacity: 0;}.ie.wf-loading body #content.site-content h1,{visibility: hidden;}body #content.site-content h2{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body #content.site-content h2,{opacity: 0;}.ie.wf-loading body #content.site-content h2,{visibility: hidden;}body #content.site-content h3{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body #content.site-content h3,{opacity: 0;}.ie.wf-loading body #content.site-content h3,{visibility: hidden;}body #content.site-content h4{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body #content.site-content h4,{opacity: 0;}.ie.wf-loading body #content.site-content h4,{visibility: hidden;}body #content.site-content h5{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body #content.site-content h5,{opacity: 0;}.ie.wf-loading body #content.site-content h5,{visibility: hidden;}body #content.site-content h6{opacity: 1;visibility: visible;-webkit-transition: opacity 0.24s ease-in-out;-moz-transition: opacity 0.24s ease-in-out;transition: opacity 0.24s ease-in-out;}.wf-loading body #content.site-content h6,{opacity: 0;}.ie.wf-loading body #content.site-content h6,{visibility: hidden;}</style><style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1509012240929{padding-top: 64px !important;padding-bottom: 100px !important;background-image: url(wp-content/uploads/2017/08/about.jpg%3Fid=1431) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1509011996372{padding-top: 100px !important;padding-bottom: 100px !important;background-color: #1a1a1a !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1509005026995{padding-top: 25px !important;padding-bottom: 10px !important;background-color: #0d0d0d !important;}.vc_custom_1509007088361{padding-top: 78px !important;padding-bottom: 110px !important;background-color: #1a1a1a !important;}.vc_custom_1509012292260{padding-top: 61px !important;padding-bottom: 100px !important;background-image: url(wp-content/uploads/2017/08/casting.jpg%3Fid=1468) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1512611835614{padding-top: 76px !important;padding-bottom: 110px !important;background-color: #1a1a1a !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1507262379332{margin-top: 10px !important;}.vc_custom_1509000699581{margin-top: -10px !important;margin-bottom: 50px !important;}.vc_custom_1509000635200{margin-top: 45px !important;margin-bottom: 30px !important;}.vc_custom_1507263088675{margin-bottom: 25px !important;}.vc_custom_1507271955796{margin-top: 10px !important;}.vc_custom_1509000952318{margin-top: -10px !important;margin-bottom: 50px !important;}.vc_custom_1507272674329{margin-top: 40px !important;padding-right: 10px !important;}.vc_custom_1507272686758{padding-right: 0px !important;padding-left: 0px !important;}.vc_custom_1507272701453{margin-top: 40px !important;padding-left: 10px !important;}.vc_custom_1507285628737{margin-top: 10px !important;}.vc_custom_1509007351709{margin-top: -10px !important;margin-bottom: 65px !important;}.vc_custom_1507285663180{margin-bottom: 25px !important;}.vc_custom_1507351035850{margin-top: 10px !important;}.vc_custom_1509000978335{margin-top: -10px !important;margin-bottom: 50px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<body class="home page-template-default page page-id-31 wpb-js-composer js-comp-ver-5.4.5 vc_responsive" >
<div id="page" class="hfeed site ">
    <header id="masthead" class="site-header ">
        <div id="cshero-header" class="cshero-main-header cshero-header-split cshero-main-header1 sticky-desktop">
            <div class="container-header container parent-container">
                <div class="row">
                    <div id="cshero-header-logo" class="site-branding col-xs-12 col-sm-12 hidden-md hidden-lg">
                        <div class="main_logo"><a href="index.html"><img alt="Burnley" src="wp-content/uploads/2017/12/thumbnail.png"></a></div>                <span onclick="" class="cshero-menu-mobile pe-7s-menu toggle_menu hidden-md hidden-lg">
                    <i></i>
                </span>
                    </div>
                    <!-- #site-logo -->
                    <div id="cshero-header-navigation" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span onclick="" class="cshero-menu-mobile pe-7s-menu toggle_menu hidden-md hidden-lg">
                    <i></i>
                </span>
                        <nav id="site-navigation" class="main-navigation">
                            <div class="menu-main-menu-container"><ul id="menu-main-menu" class="nav-menu menu-main-menu clearfix"><li id="menu-item-2163" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home current-menu-ancestor current-menu-parent menu-item-has-children menu-item-2163"><a href="index.html"><span>Home</span></a>

                                    </li>
                                    <li id="menu-item-2164" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2164"><a href="index.html#"><span>Services</span></a>
                                     </li>

                                            <li id="menu-item-2206" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2206"><a href="index.html#"><span>Blog</span></a>
                                                <ul class="sub-menu">
                                                    <li id="menu-item-2276" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2276"><a href=""><span>Category1</span></a></li>
                                                    <li id="menu-item-2277" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2277"><a href=""><span>Category2</span></a></li>

                                                </ul>
                                            </li>
                                            <li id="menu-item-2197" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2197"><a href="index.html#"><span>About Us</span></a>

                                            </li>

                                            <li id="menu-item-2210" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2210"><a href="index.html#"><span>Events</span></a>

                                            </li>




                                    <li id="menu-item-2165" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2165"><a href="index.html#"><span>Models</span></a>
                                        <ul class="sub-menu">
                                            <li id="menu-item-2253" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2253"><a href=""><span>Models</span></a></li>
                                            <li id="menu-item-2254" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2254"><a href=""><span>Hostess</span></a></li>
                                            <li id="menu-item-2185" class="menu-item menu-item-type-post_type menu-item-object-model menu-item-2185"><a href=""><span>Girls</span></a></li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-2178" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2178"><a href="index.html#"><span>Contacts</span></a>

                                    </li>
                                </ul></div>                </nav>
                        <!-- #site-navigation -->
                    </div>
                </div>
            </div>
        </div>
        <!-- #site-navigation -->	</header><!-- #masthead -->
    <!-- #page-title -->
    <div id="content" class="site-content ">
        <div id="primary" class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <main id="main" class="site-main" >

                        <div class="post-31 page type-page status-publish hentry">
                            <div class="entry-content">

                                <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid class-position-relative vc_row-no-padding vc_row-o-equal-height vc_row-flex"><div class="class-position-relative wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="wpb_revslider_element wpb_content_element margin-zero"><link href="../../../fonts.googleapis.com/css%3Ffamily=Playfair+Display:400%257CRoboto:500.css" rel="stylesheet" property="stylesheet" type="text/css" media="all">
                                                    <div id="rev_slider_2_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-source="gallery" style="margin:0px auto;background:transparent;padding:0px;margin-top:0px;margin-bottom:0px;">
                                                        <!-- START REVOLUTION SLIDER 5.4.6.3.1 fullwidth mode -->
                                                        <div id="rev_slider_2_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.6.3.1">
                                                            <ul>	<!-- SLIDE  -->
                                                                <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://demo.spyropress.com/themeforest/burnley/wp-content/uploads/revslider/home_slider/slide01-1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="wp-content/uploads/revslider/home_slider/slide01-1.jpg"  alt="" title="multipage"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 1 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-4-layer-1"
                                                                         data-x="['center','center','center','center']" data-hoffset="['280','204','155','66']"
                                                                         data-y="['middle','middle','middle','middle']" data-voffset="['-204','-216','-206','-70']"
                                                                         data-fontsize="['52','52','40','25']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 5; white-space: nowrap; font-size: 52px; line-height: 52px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;text-transform:uppercase;">welcome to the </div>

                                                                    <!-- LAYER NR. 2 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-4-layer-2"
                                                                         data-x="['center','center','center','center']" data-hoffset="['289','213','158','90']"
                                                                         data-y="['middle','middle','middle','middle']" data-voffset="['-135','-135','-124','-27']"
                                                                         data-fontsize="['100','100','80','40']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;text-transform:uppercase;">orcid </div>

                                                                    <!-- LAYER NR. 3 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-4-layer-3"
                                                                         data-x="['left','left','left','left']" data-hoffset="['719','534','389','253']"
                                                                         data-y="['top','top','top','top']" data-voffset="['345','306','226','136']"
                                                                         data-fontsize="['100','100','80','40']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 7; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:fa;text-transform:uppercase;">agency </div>

                                                                    <!-- LAYER NR. 4 -->
                                                                    <div class="tp-caption rev-btn "
                                                                         id="slide-4-layer-5"
                                                                         data-x="['left','left','left','center']" data-hoffset="['770','592','442','12']"
                                                                         data-y="['top','top','top','top']" data-voffset="['502','438','389','244']"
                                                                         data-fontsize="['12','12','12','10']"
                                                                         data-width="none"
                                                                         data-height="['none','none','39','30']"
                                                                         data-whitespace="nowrap"

                                                                         data-type="button"
                                                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/wordpress\/vogue\/about\/","delay":""}]'
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(194,85,130);bs:solid;bw:0 0 0 0;"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[13,13,13,9]"
                                                                         data-paddingright="[30,30,22,21]"
                                                                         data-paddingbottom="[13,13,13,13]"
                                                                         data-paddingleft="[30,30,22,21]"

                                                                         style="z-index: 8; white-space: nowrap; font-size: 12px; line-height: 14px; font-weight: 700; color: #c25582; letter-spacing: px;font-family:Arial, Helvetica, sans-serif;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">ABOUT US
                                                                    </div>

                                                                    <!-- LAYER NR. 5 -->
                                                                    <div class="tp-caption rev-btn "
                                                                         id="slide-4-layer-10"
                                                                         data-x="['left','left','left','left']" data-hoffset="['917','758','566','316']"
                                                                         data-y="['top','top','top','top']" data-voffset="['502','438','389','244']"
                                                                         data-fontsize="['14','12','12','10']"
                                                                         data-width="none"
                                                                         data-height="['none','none','39','30']"
                                                                         data-whitespace="nowrap"

                                                                         data-type="button"
                                                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/wordpress\/vogue\/portfolios\/","delay":""}]'
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(194,85,130);bc:rgb(194,85,130);bw:0 0 0 0;"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[12,12,12,8]"
                                                                         data-paddingright="[29,29,20,20]"
                                                                         data-paddingbottom="[12,12,12,12]"
                                                                         data-paddingleft="[29,29,20,20]"

                                                                         style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 500; color: #ffffff; letter-spacing: px;font-family:Roboto;text-transform:uppercase;background-color:rgba(255,255,255,0);border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Portfolio </div>
                                                                </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-7" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://demo.spyropress.com/themeforest/burnley/wp-content/uploads/revslider/home_slider/slide02-1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="wp-content/uploads/revslider/home_slider/slide02-1.jpg"  alt="" title="slide02-1.jpg"  width="1920" height="900" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 6 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-7-layer-1"
                                                                         data-x="['center','center','center','center']" data-hoffset="['275','198','160','63']"
                                                                         data-y="['middle','middle','middle','middle']" data-voffset="['-204','-216','-206','-70']"
                                                                         data-fontsize="['52','52','40','25']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 5; white-space: nowrap; font-size: 52px; line-height: 52px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;text-transform:uppercase;">welcome to the </div>

                                                                    <!-- LAYER NR. 7 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-7-layer-2"
                                                                         data-x="['center','center','center','center']" data-hoffset="['275','211','161','88']"
                                                                         data-y="['middle','middle','middle','middle']" data-voffset="['-135','-135','-124','-27']"
                                                                         data-fontsize="['100','100','80','40']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;text-transform:uppercase;">burnley </div>

                                                                    <!-- LAYER NR. 8 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-7-layer-3"
                                                                         data-x="['left','left','left','left']" data-hoffset="['719','534','394','253']"
                                                                         data-y="['top','top','top','top']" data-voffset="['345','306','226','136']"
                                                                         data-fontsize="['100','100','80','40']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 7; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:fa;text-transform:uppercase;">agency </div>

                                                                    <!-- LAYER NR. 9 -->
                                                                    <div class="tp-caption rev-btn "
                                                                         id="slide-7-layer-5"
                                                                         data-x="['left','left','left','center']" data-hoffset="['770','592','442','12']"
                                                                         data-y="['top','top','top','top']" data-voffset="['502','438','389','244']"
                                                                         data-fontsize="['12','12','12','10']"
                                                                         data-width="none"
                                                                         data-height="['none','none','39','30']"
                                                                         data-whitespace="nowrap"

                                                                         data-type="button"
                                                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/wordpress\/vogue\/about\/","delay":""}]'
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(194,85,130);bs:solid;bw:0 0 0 0;"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[13,13,13,9]"
                                                                         data-paddingright="[30,30,22,21]"
                                                                         data-paddingbottom="[13,13,13,13]"
                                                                         data-paddingleft="[30,30,22,21]"

                                                                         style="z-index: 8; white-space: nowrap; font-size: 12px; line-height: 14px; font-weight: 700; color: #c25582; letter-spacing: px;font-family:Arial, Helvetica, sans-serif;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">ABOUT US
                                                                    </div>

                                                                    <!-- LAYER NR. 10 -->
                                                                    <div class="tp-caption rev-btn "
                                                                         id="slide-7-layer-10"
                                                                         data-x="['left','left','left','left']" data-hoffset="['917','758','566','316']"
                                                                         data-y="['top','top','top','top']" data-voffset="['502','438','389','244']"
                                                                         data-fontsize="['14','12','12','10']"
                                                                         data-width="none"
                                                                         data-height="['none','none','39','30']"
                                                                         data-whitespace="nowrap"

                                                                         data-type="button"
                                                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/wordpress\/vogue\/portfolios\/","delay":""}]'
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(194,85,130);bc:rgb(194,85,130);bw:0 0 0 0;"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[12,12,12,8]"
                                                                         data-paddingright="[29,29,20,20]"
                                                                         data-paddingbottom="[12,12,12,12]"
                                                                         data-paddingleft="[29,29,20,20]"

                                                                         style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 500; color: #ffffff; letter-spacing: px;font-family:Roboto;text-transform:uppercase;background-color:rgba(255,255,255,0);border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Portfolio </div>
                                                                </li>
                                                                <!-- SLIDE  -->
                                                                <li data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="http://demo.spyropress.com/themeforest/burnley/wp-content/uploads/revslider/home_slider/slide03-1-100x50.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                    <!-- MAIN IMAGE -->
                                                                    <img src="wp-content/uploads/revslider/home_slider/slide03-1.jpg"  alt="" title="slide03-1.jpg"  width="1920" height="900" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                    <!-- LAYERS -->

                                                                    <!-- LAYER NR. 11 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-8-layer-1"
                                                                         data-x="['center','center','center','center']" data-hoffset="['282','196','159','63']"
                                                                         data-y="['middle','middle','middle','middle']" data-voffset="['-203','-216','-206','-70']"
                                                                         data-fontsize="['52','52','40','25']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":1000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 5; white-space: nowrap; font-size: 52px; line-height: 52px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;text-transform:uppercase;">welcome to the </div>

                                                                    <!-- LAYER NR. 12 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-8-layer-2"
                                                                         data-x="['center','center','center','center']" data-hoffset="['290','209','157','88']"
                                                                         data-y="['middle','middle','middle','middle']" data-voffset="['-135','-135','-124','-27']"
                                                                         data-fontsize="['100','100','80','40']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 6; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Playfair Display;text-transform:uppercase;">burnley </div>

                                                                    <!-- LAYER NR. 13 -->
                                                                    <div class="tp-caption   tp-resizeme"
                                                                         id="slide-8-layer-3"
                                                                         data-x="['left','left','left','left']" data-hoffset="['719','534','392','253']"
                                                                         data-y="['top','top','top','top']" data-voffset="['345','306','226','136']"
                                                                         data-fontsize="['100','100','80','40']"
                                                                         data-width="none"
                                                                         data-height="none"
                                                                         data-whitespace="nowrap"

                                                                         data-type="text"
                                                                         data-responsive_offset="on"

                                                                         data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power2.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[0,0,0,0]"
                                                                         data-paddingright="[0,0,0,0]"
                                                                         data-paddingbottom="[0,0,0,0]"
                                                                         data-paddingleft="[0,0,0,0]"

                                                                         style="z-index: 7; white-space: nowrap; font-size: 100px; line-height: 100px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:fa;text-transform:uppercase;">agency </div>

                                                                    <!-- LAYER NR. 14 -->
                                                                    <div class="tp-caption rev-btn "
                                                                         id="slide-8-layer-5"
                                                                         data-x="['left','left','left','center']" data-hoffset="['770','592','442','12']"
                                                                         data-y="['top','top','top','top']" data-voffset="['502','438','389','244']"
                                                                         data-fontsize="['12','12','12','10']"
                                                                         data-width="none"
                                                                         data-height="['none','none','39','30']"
                                                                         data-whitespace="nowrap"

                                                                         data-type="button"
                                                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/wordpress\/vogue\/about\/","delay":""}]'
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(194,85,130);bs:solid;bw:0 0 0 0;"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[13,13,13,9]"
                                                                         data-paddingright="[30,30,22,21]"
                                                                         data-paddingbottom="[13,13,13,13]"
                                                                         data-paddingleft="[30,30,22,21]"

                                                                         style="z-index: 8; white-space: nowrap; font-size: 12px; line-height: 14px; font-weight: 700; color: #c25582; letter-spacing: px;font-family:Arial, Helvetica, sans-serif;background-color:rgb(255,255,255);border-color:rgba(0,0,0,1);outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">ABOUT US
                                                                    </div>

                                                                    <!-- LAYER NR. 15 -->
                                                                    <div class="tp-caption rev-btn "
                                                                         id="slide-8-layer-10"
                                                                         data-x="['left','left','left','left']" data-hoffset="['917','758','566','316']"
                                                                         data-y="['top','top','top','top']" data-voffset="['502','438','389','244']"
                                                                         data-fontsize="['14','12','12','10']"
                                                                         data-width="none"
                                                                         data-height="['none','none','39','30']"
                                                                         data-whitespace="nowrap"

                                                                         data-type="button"
                                                                         data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/wordpress\/vogue\/portfolios\/","delay":""}]'
                                                                         data-responsive_offset="on"
                                                                         data-responsive="off"
                                                                         data-frames='[{"delay":10,"speed":1500,"frame":"0","from":"x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgb(255,255,255);bg:rgb(194,85,130);bc:rgb(194,85,130);bw:0 0 0 0;"}]'
                                                                         data-textAlign="['inherit','inherit','inherit','inherit']"
                                                                         data-paddingtop="[12,12,12,8]"
                                                                         data-paddingright="[29,29,20,20]"
                                                                         data-paddingbottom="[12,12,12,12]"
                                                                         data-paddingleft="[29,29,20,20]"

                                                                         style="z-index: 9; white-space: nowrap; font-size: 14px; line-height: 14px; font-weight: 500; color: #ffffff; letter-spacing: px;font-family:Roboto;text-transform:uppercase;background-color:rgba(255,255,255,0);border-color:rgb(255,255,255);border-style:solid;border-width:1px 1px 1px 1px;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer;">Portfolio </div>
                                                                </li>
                                                            </ul>
                                                            <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                                                                if(htmlDiv) {
                                                                    htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                                }else{
                                                                    var htmlDiv = document.createElement("div");
                                                                    htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                    document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                                }
                                                            </script>
                                                            <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
                                                        <script>var htmlDiv = document.getElementById("rs-plugin-settings-inline-css"); var htmlDivCss="";
                                                            if(htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            }else{
                                                                var htmlDiv = document.createElement("div");
                                                                htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
                                                                document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                        <script type="text/javascript">
                                                            setREVStartSize({c: jQuery('#rev_slider_2_1'), responsiveLevels: [1240,1024,778,480], gridwidth: [1240,1024,778,480], gridheight: [874,768,600,320], sliderLayout: 'fullwidth'});

                                                            var revapi2,
                                                                    tpj=jQuery;

                                                            tpj(document).ready(function() {
                                                                if(tpj("#rev_slider_2_1").revolution == undefined){
                                                                    revslider_showDoubleJqueryError("#rev_slider_2_1");
                                                                }else{
                                                                    revapi2 = tpj("#rev_slider_2_1").show().revolution({
                                                                        sliderType:"standard",
                                                                        jsFileLocation:"//demo.spyropress.com/themeforest/burnley/wp-content/plugins/revslider/public/assets/js/",
                                                                        sliderLayout:"fullwidth",
                                                                        dottedOverlay:"none",
                                                                        delay:9000,
                                                                        navigation: {
                                                                            keyboardNavigation:"off",
                                                                            keyboard_direction: "horizontal",
                                                                            mouseScrollNavigation:"off",
                                                                            mouseScrollReverse:"default",
                                                                            onHoverStop:"off",
                                                                            touch:{
                                                                                touchenabled:"on",
                                                                                touchOnDesktop:"off",
                                                                                swipe_threshold: 75,
                                                                                swipe_min_touches: 1,
                                                                                swipe_direction: "horizontal",
                                                                                drag_block_vertical: false
                                                                            }
                                                                            ,
                                                                            arrows: {
                                                                                style:"hesperiden",
                                                                                enable:true,
                                                                                hide_onmobile:false,
                                                                                hide_over:767,
                                                                                hide_onleave:false,
                                                                                tmp:'',
                                                                                left: {
                                                                                    h_align:"left",
                                                                                    v_align:"center",
                                                                                    h_offset:20,
                                                                                    v_offset:0
                                                                                },
                                                                                right: {
                                                                                    h_align:"right",
                                                                                    v_align:"center",
                                                                                    h_offset:20,
                                                                                    v_offset:0
                                                                                }
                                                                            }
                                                                            ,
                                                                            bullets: {
                                                                                enable:true,
                                                                                hide_onmobile:true,
                                                                                hide_under:768,
                                                                                style:"hephaistos",
                                                                                hide_onleave:false,
                                                                                direction:"vertical",
                                                                                h_align:"right",
                                                                                v_align:"center",
                                                                                h_offset:50,
                                                                                v_offset:0,
                                                                                space:5,
                                                                                tmp:''
                                                                            }
                                                                        },
                                                                        responsiveLevels:[1240,1024,778,480],
                                                                        visibilityLevels:[1240,1024,778,480],
                                                                        gridwidth:[1240,1024,778,480],
                                                                        gridheight:[874,768,600,320],
                                                                        lazyType:"none",
                                                                        shadow:0,
                                                                        spinner:"spinner0",
                                                                        stopLoop:"off",
                                                                        stopAfterLoops:-1,
                                                                        stopAtSlide:-1,
                                                                        shuffle:"off",
                                                                        autoHeight:"off",
                                                                        disableProgressBar:"on",
                                                                        hideThumbsOnMobile:"off",
                                                                        hideSliderAtLimit:0,
                                                                        hideCaptionAtLimit:0,
                                                                        hideAllCaptionAtLilmit:0,
                                                                        debugMode:false,
                                                                        fallbacks: {
                                                                            simplifyAll:"off",
                                                                            nextSlideOnWindowFocus:"off",
                                                                            disableFocusListener:false,
                                                                        }
                                                                    });
                                                                }

                                                            });	/*ready*/
                                                        </script>
                                                        <script>
                                                            var htmlDivCss = unescape(".tp-bullet.selected%7B%0A%20%20background-color%3A%20transparent%20%21important%3B%0A%20%20color%3A%20%23c25582%3B%7D%0A.tp-bullet%7B%0A%09background-color%3A%20transparent%20%21important%3B%7D");
                                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                            if(htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            }
                                                            else{
                                                                var htmlDiv = document.createElement('div');
                                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script><script>
                                                            var htmlDivCss = unescape(".hesperiden.tparrows%20%7B%0A%09cursor%3Apointer%3B%0A%09background%3Argba%280%2C0%2C0%2C0.5%29%3B%0A%09width%3A40px%3B%0A%09height%3A40px%3B%0A%09position%3Aabsolute%3B%0A%09display%3Ablock%3B%0A%09z-index%3A100%3B%0A%20%20%20%20border-radius%3A%2050%25%3B%0A%7D%0A.hesperiden.tparrows%3Ahover%20%7B%0A%09background%3Argba%280%2C%200%2C%200%2C%201%29%3B%0A%7D%0A.hesperiden.tparrows%3Abefore%20%7B%0A%09font-family%3A%20%22revicons%22%3B%0A%09font-size%3A20px%3B%0A%09color%3Argb%28255%2C%20255%2C%20255%29%3B%0A%09display%3Ablock%3B%0A%09line-height%3A%2040px%3B%0A%09text-align%3A%20center%3B%0A%7D%0A.hesperiden.tparrows.tp-leftarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82c%22%3B%0A%20%20%20%20margin-left%3A-3px%3B%0A%7D%0A.hesperiden.tparrows.tp-rightarrow%3Abefore%20%7B%0A%09content%3A%20%22%5Ce82d%22%3B%0A%20%20%20%20margin-right%3A-3px%3B%0A%7D%0A.hephaistos%20.tp-bullet%20%7B%0A%09width%3A10px%3B%0A%09height%3A10px%3B%0A%09position%3Aabsolute%3B%0A%09background%3Argba%280%2C%2010%2C%200%2C%201%29%3B%0A%09border%3A2px%20solid%20rgba%28255%2C%20255%2C%20255%2C%200.9%29%3B%0A%09border-radius%3A50%25%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%20%20%20%20box-shadow%3A%200px%200px%202px%201px%20rgba%28130%2C130%2C130%2C%200.3%29%3B%0A%7D%0A.hephaistos%20.tp-bullet%3Ahover%2C%0A.hephaistos%20.tp-bullet.selected%20%7B%0A%09background%3Argba%280%2C%2010%2C%200%2C%201%29%3B%0A%20%20%20%20border-color%3Argba%28194%2C%2085%2C%20130%2C%201%29%3B%0A%7D%0A");
                                                            var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
                                                            if(htmlDiv) {
                                                                htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
                                                            }
                                                            else{
                                                                var htmlDiv = document.createElement('div');
                                                                htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
                                                                document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
                                                            }
                                                        </script>
                                                    </div><!-- END REVOLUTION SLIDER --></div>    <div class="cms-info-plus class-position-absolute cms-info-plus info-plus-model bottom-content main_bg_color3 transparent section_padding_top_30 section_padding_bottom_30 table_section" >
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xs-12 col-md-4">
                                                                <h2 class="section_header">
                                                                    <a href="http://demo.spyropress.com/themeforest/burnley/?model=allie-wong" >Mollie Weaver</a>
                                                                </h2>
                                                                <p class="position-model">TOP MODEL &amp; DIRECTOR</p>
                                                            </div>
                                                            <div class="col-xs-12 col-md-8 text-center text-sm-right">
                                                                <div class="fontsize_16 lusitana text-uppercase grey parameters">
                        <span>
                            Height                            <br>
                            <span class="highlight">
                                185                            </span>
                        </span>
                        <span>
                            Bust                            <br>
                            <span class="highlight">
                                79                            </span>
                        </span>
                        <span>
                            Waist                            <br>
                            <span class="highlight">
                                59                            </span>
                        </span>
                        <span>
                            Hips                            <br>
                            <span class="highlight">
                                87                            </span>
                        </span>
                        <span>
                            Shoes                            <br>
                            <span class="highlight">
                                39                            </span>
                        </span>
                        <span>
                            Eyes                            <br>
                            <span class="highlight">
                                green                            </span>
                        </span>
                        <span>
                            Hair                            <br>
                            <span class="highlight">
                                brown                            </span>
                        </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid bg-fixed vc_custom_1509012240929 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 style="font-size: 40px;color: #ffffff;text-align: center" class="vc_custom_heading vc_custom_1507262379332" >About Our Agency</h2><p style="font-size: 12px;color: #ef90a4;text-align: center;font-family:Lusitana;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1509000699581" >THE TEAM OF PROFESSIONALS</p><div class="vc_row wpb_row vc_inner vc_row-fluid container"><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><p style="font-size: 20px;color: #ffffff;line-height: 26px;text-align: left" class="vc_custom_heading font-arial vc_custom_1507263088675" >Nonumy eirmod tempor invidunt ut labore dolore magna aliquyam erat, sed diam voluptua.</p><p style="font-size: 15px;color: #ffffff;line-height: 26px;text-align: left" class="vc_custom_heading font-arial" >Swine brisket pig, ground round andouille salami jowl biltong. Jerky pancetta turducken, landjaeger pig strip steak meatloaf burgdoggen. Frankfurter meatball beef ribs chicken burgdoggen shank. Spare ribs pork chop sirloin ground round kielbasa pork loin shank, burgdoggen sausage fatback turkey pig picanha shankle. Tenderloin andouille chicken shank pig ball tip.</p></div></div></div><div class="wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cms-progress-wraper template-cms_progressbar red-span" id="cms-progressbar">
                                                                    <div class="cms-progress-body">
                                                                        <div class="cms-progress-item-wrap">
                                                                            <h5 class="cms-progress-title">
                                                                                EUROPEAN MODELS                        <span>
                                                            - 40%                                                    </span>
                                                                            </h5>
                                                                            <div class="cms-progress progress "
                                                                                 style="background-color:#ffffff;
                    width:100%;
                    height:5px;
                    border-radius:0px;
                    " >
                                                                                <div id="item-cms-progressbar"
                                                                                     class="progress-bar"
                                                                                     data-valuetransitiongoal="40"
                                                                                     style="background-color:#c25582;"
                                                                                >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="cms-progress-wraper template-cms_progressbar red-span" id="cms-progressbar-2">
                                                                    <div class="cms-progress-body">
                                                                        <div class="cms-progress-item-wrap">
                                                                            <h5 class="cms-progress-title">
                                                                                ASIAN MODELS                        <span>
                                                            - 20%                                                    </span>
                                                                            </h5>
                                                                            <div class="cms-progress progress "
                                                                                 style="background-color:#ffffff;
                    width:100%;
                    height:5px;
                    border-radius:0px;
                    " >
                                                                                <div id="item-cms-progressbar-2"
                                                                                     class="progress-bar"
                                                                                     data-valuetransitiongoal="20"
                                                                                     style="background-color:#c25582;"
                                                                                >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="cms-progress-wraper template-cms_progressbar red-span" id="cms-progressbar-3">
                                                                    <div class="cms-progress-body">
                                                                        <div class="cms-progress-item-wrap">
                                                                            <h5 class="cms-progress-title">
                                                                                AFRICAN-AMERICAN MODELS                        <span>
                                                            - 30%                                                    </span>
                                                                            </h5>
                                                                            <div class="cms-progress progress "
                                                                                 style="background-color:#ffffff;
                    width:100%;
                    height:5px;
                    border-radius:0px;
                    " >
                                                                                <div id="item-cms-progressbar-3"
                                                                                     class="progress-bar"
                                                                                     data-valuetransitiongoal="30"
                                                                                     style="background-color:#c25582;"
                                                                                >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div><div class="cms-progress-wraper template-cms_progressbar red-span" id="cms-progressbar-4">
                                                                    <div class="cms-progress-body">
                                                                        <div class="cms-progress-item-wrap">
                                                                            <h5 class="cms-progress-title">
                                                                                EUROPEAN MODELS                        <span>
                                                            - 10%                                                    </span>
                                                                            </h5>
                                                                            <div class="cms-progress progress "
                                                                                 style="background-color:#ffffff;
                    width:100%;
                    height:5px;
                    border-radius:0px;
                    " >
                                                                                <div id="item-cms-progressbar-4"
                                                                                     class="progress-bar"
                                                                                     data-valuetransitiongoal="10"
                                                                                     style="background-color:#c25582;"
                                                                                >
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div></div></div></div></div> <div class="cms-btn text-center vc_custom_1509000635200 section-revogue-dark ">
                                                    <button style="" class="btn btn-revogue-secondary btn-md">read more</button> </div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid bg-fixed vc_custom_1509011996372 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 style="font-size: 40px;color: #ffffff;text-align: center" class="vc_custom_heading vc_custom_1507271955796" >Photo Shoot Prices</h2><p style="font-size: 12px;color: #ef90a4;text-align: center;font-family:Lusitana;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1509000952318" >SELECT YOUR OPTION</p><div class="vc_row wpb_row vc_inner vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4 vc_col-xs-12"><div class="vc_column-inner vc_custom_1507272674329"><div class="wpb_wrapper">

                                                                <div class="cms-pricing layout2 text-center">
                                                                    <div class="plan-name"><h3>REGULAR</h3></div>                <div class="plan-price">
                                                                        <span class="small unit">$</span><span class="price">269</span>            <p class = "sub-title">PER SHOOT</p>		</div>
                                                                    <div class="wrap-bot">
                                                                        <div class="features-list">
                                                                            <ul>
                                                                                <li class="enabled">Meatball kielbasa ball</li>
                                                                                <li class="disabled">Boudin jerky shank</li>
                                                                                <li class="disabled">Venison ham ham</li>
                                                                                <li class="disabled">Turducken kielbasa sausage</li>
                                                                                <li class="disabled">Tri-tip beef ribs</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="call-to-action">
                                                                            <a href="index.html#" class="btn btn-default">SELECT NOW</a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4 vc_col-xs-12"><div class="vc_column-inner vc_custom_1507272686758"><div class="wpb_wrapper">

                                                                <div class="cms-pricing layout1 text-center" >
                                                                    <div class="bg_overlay" style="background: rgba(1, 178, 183, 0.85);"></div>
                                                                    <div class="plan-name"><h3 style="color:#102035;">UNLIMITED</h3></div>                <div class="plan-price" style="background-image: url('wp-content/themes/burnley/assets/images/price.png');">
                                                                        <span class="small unit">$</span><span class="price">599</span>            <p class = "sub-title">PER SHOOT</p>		</div>
                                                                    <div class="wrap-bot">
                                                                        <div class="features-list">
                                                                            <ul>
                                                                                <li class="enabled">Tenderloin strip steak</li>
                                                                                <li class="disabled">Cow sausage filet</li>
                                                                                <li class="disabled">Mignon t-bone sirloin</li>
                                                                                <li class="disabled">Shank ham hock</li>
                                                                                <li class="disabled">Tongue leberkas pastrami</li>
                                                                                <li class="disabled">Beef ribs cow chicken</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="call-to-action">
                                                                            <a href="index.html#" class="btn btn-default">SELECT NOW</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- template copy -->

                                                                <!-- end template copy -->


                                                            </div></div></div><div class="wpb_column vc_column_container vc_col-sm-4 vc_col-lg-4 vc_col-md-4 vc_col-xs-12"><div class="vc_column-inner vc_custom_1507272701453"><div class="wpb_wrapper">

                                                                <div class="cms-pricing layout2 text-center">
                                                                    <div class="plan-name"><h3>EXTENDED</h3></div>                <div class="plan-price">
                                                                        <span class="small unit">$</span><span class="price">899</span>            <p class = "sub-title">PER SHOOT</p>		</div>
                                                                    <div class="wrap-bot">
                                                                        <div class="features-list">
                                                                            <ul>
                                                                                <li class="enabled">Bacon ham hock spare</li>
                                                                                <li class="enabled">Ribs alcatra pork andouille</li>
                                                                                <li class="enabled">Rump biltong jerky</li>
                                                                                <li class="enabled">Sirloin porchetta swine</li>
                                                                                <li class="enabled">Brisket pork pork chop</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="call-to-action">
                                                                            <a href="index.html#" class="btn btn-default">SELECT NOW</a>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                            </div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1509005026995 vc_row-has-fill vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
                                                <div class="cms-model-carousel">
                                                    <div class="filters carousel_filters">
                                                        <a href="index.html#" data-filter="*" class="selected">All</a>
                                                        <a href="index.html#" data-filter=".fashion">fashion</a>
                                                        <a href="index.html#" data-filter=".session">session</a>
                                                        <a href="index.html#" data-filter=".studio">studio</a>
                                                        <a href="index.html#" data-filter=".top-model">Top Model</a>
                                                    </div>
                                                    <div class="cms-carousel owl-carousel filterable-carousel  " id="cms-model-carousel" data-filters=".carousel_filters">
                                                        <div class="carousel-item vertical-item fashion">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/02.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/nina-bridges">Nina Bridges</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/fashion" rel="tag">fashion</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item top-model">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/03.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/rachel-tate">Rachel Tate</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/top-model" rel="tag">Top Model</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item top-model">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/04.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/winifred-hunt">Winifred Hunt</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/top-model" rel="tag">Top Model</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item studio">
                                                            <div class="item-media">
                                                                <img width="700" height="1051" src="wp-content/uploads/2017/08/05.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/rachel-tale-2">Rachel Tale</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/studio" rel="tag">studio</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item session">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/07.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/maria-baker">Maria Baker</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/session" rel="tag">session</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Black                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item session">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/18.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/hallie-moss">Hallie Moss</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/session" rel="tag">session</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item top-model">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/17.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/isabel-perry">Isabel Perry</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/top-model" rel="tag">Top Model</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item top-model">
                                                            <div class="item-media">
                                                                <img width="700" height="1053" src="wp-content/uploads/2017/08/15.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/rosa-robinson">Rosa Robinson</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/top-model" rel="tag">Top Model</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item top-model">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/14.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/cora-tucker">Cora Tucker</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/top-model" rel="tag">Top Model</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="carousel-item vertical-item top-model">
                                                            <div class="item-media">
                                                                <img width="700" height="1052" src="wp-content/uploads/2017/08/06.jpg" class="attachment-full size-full wp-post-image" alt="" />                    <div class="info-model">
                                                                    <h3 class="model-name">
                                                                        <a href="http://demo.spyropress.com/themeforest/burnley/archives/model/isabelle-rose">Isabelle Rose</a>
                                                                    </h3>
                                                                    <p class = "model-category"><a href="http://demo.spyropress.com/themeforest/burnley/archives/model_category/top-model" rel="tag">Top Model</a></p>                        <div class="strength">
                            <span>
                                Height                                <br>
                                <span class="highlight">
                                    185                                </span>
                            </span>
                            <span>
                                Bust                                <br>
                                <span class="highlight">
                                    79                                </span>
                            </span>
                            <span>
                                Waist                                <br>
                                <span class="highlight">
                                    59                                </span>
                            </span>
                            <span>
                                Hips                                <br>
                                <span class="highlight">
                                    87                                </span>
                            </span>
                            <span>
                                Shoes                                <br>
                                <span class="highlight">
                                    39                                </span>
                            </span>
                            <span>
                                Eyes                                <br>
                                <span class="highlight">
                                    Green                                </span>
                            </span>
                            <span>
                                Hair                                <br>
                                <span class="highlight">
                                    Brown                                </span>
                            </span>
                            <span>
                                Size                                <br>
                                <span class="highlight">
                                    8                                </span>
                            </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1509007088361 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><div class="cms-testimonial-wrap layout2 ">
                                                    <div class="cms-carousel owl-carousel  has-dots  " id="cms-testimonial-carousel">
                                                        <!-- template demo -->
                                                        <blockquote class="with_quotes text-center">
                                                            <img src="wp-content/uploads/2017/08/16-1-370x370.jpg" alt=""/>                                <div class="item-meta">
                                                                <h5>
                                                                    Helen Thompson                                    </h5>
                                                                <p class="small-text lusitana highlight">
                                                                    photographer                                    </p>
                                                            </div>
                                                            Pork loin andouille rump, corned beef bacon kevin venison tail. Tri-tip boudin pig tenderloin ham. Meatloaf cupim picanha pork chop landjaeger pork chicken andouille jerky, shoulder flank turkey.                            </blockquote>
                                                        <!-- end template demo -->
                                                        <!-- template demo -->
                                                        <blockquote class="with_quotes text-center">
                                                            <img src="wp-content/uploads/2017/08/client-370x370.jpg" alt=""/>                                <div class="item-meta">
                                                                <h5>
                                                                    Helen Thompson                                    </h5>
                                                                <p class="small-text lusitana highlight">
                                                                    photographer                                    </p>
                                                            </div>
                                                            Pork loin andouille rump, corned beef bacon kevin venison tail. Tri-tip boudin pig tenderloin ham. Meatloaf cupim picanha pork chop landjaeger pork chicken andouille jerky, shoulder flank turkey.                            </blockquote>
                                                        <!-- end template demo -->
                                                        <!-- template demo -->
                                                        <blockquote class="with_quotes text-center">
                                                            <img src="wp-content/uploads/2017/08/15-1-370x370.jpg" alt=""/>                                <div class="item-meta">
                                                                <h5>
                                                                    Helen Thompson                                    </h5>
                                                                <p class="small-text lusitana highlight">
                                                                    photographer                                    </p>
                                                            </div>
                                                            Pork loin andouille rump, corned beef bacon kevin venison tail. Tri-tip boudin pig tenderloin ham. Meatloaf cupim picanha pork chop landjaeger pork chicken andouille jerky, shoulder flank turkey.                            </blockquote>
                                                        <!-- end template demo -->
                                                        <!-- template demo -->
                                                        <blockquote class="with_quotes text-center">
                                                            <img src="wp-content/uploads/2017/09/03-1-370x370.jpg" alt=""/>                                <div class="item-meta">
                                                                <h5>
                                                                    Helen Thompson                                    </h5>
                                                                <p class="small-text lusitana highlight">
                                                                    photographer                                    </p>
                                                            </div>
                                                            Pork loin andouille rump, corned beef bacon kevin venison tail. Tri-tip boudin pig tenderloin ham. Meatloaf cupim picanha pork chop landjaeger pork chicken andouille jerky, shoulder flank turkey.                            </blockquote>
                                                        <!-- end template demo -->
                                                    </div>
                                                </div>
                                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid bg-fixed vc_custom_1509012292260 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 style="font-size: 40px;color: #ffffff;text-align: center" class="vc_custom_heading vc_custom_1507285628737" >Casting</h2><p style="font-size: 12px;color: #ef90a4;text-align: center;font-family:Lusitana;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1509007351709" >FOR A CHANCE TO JOIN US</p><div class="vc_row wpb_row vc_inner vc_row-fluid contact-form7-orangin castting-home-page"><div class="list-style-revogue wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><p style="font-size: 20px;color: #ffffff;line-height: 26px;text-align: left" class="vc_custom_heading font-arial vc_custom_1507285663180" >Do you want to be a famous supermodel of the best model agency in the world?</p>
                                                                <div class="wpb_text_column wpb_content_element  font-arial white" >
                                                                    <div class="wpb_wrapper">
                                                                        <p>Chicken meatball tail t-bone. Rump sirloin turkey meatball. Spare ribs frankfurter beef brisket ribeye tongue bacon kevin fatback swine meatloaf ball tip rump corned beef. Swine sirloin turducken kielbasa ground round porchetta sausage doner filet mignon landjaeger. Bresaola porchetta sirloin.</p>
                                                                        <ul class="list2">
                                                                            <li>Vestibulum ac diam sit amet quam vehicula</li>
                                                                            <li>Quisque velit nisi, pretium ut lacinia in</li>
                                                                            <li>Nulla quis lorem ut libero malesuada feugiat</li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                                <div  class="vc_wp_text wpb_content_element"><div class="widget widget_text">			<div class="textwidget"></div>
                                                                    </div></div></div></div></div><div class="contact-form-revogue white wpb_column vc_column_container vc_col-sm-6"><div class="vc_column-inner "><div class="wpb_wrapper"><div role="form" class="wpcf7" id="wpcf7-f1466-p31-o1" lang="en-US" dir="ltr">
                                                                    <div class="screen-reader-response"></div>
                                                                    <form action="index.html#wpcf7-f1466-p31-o1" method="post" class="wpcf7-form" novalidate="novalidate">
                                                                        <div style="display: none;">
                                                                            <input type="hidden" name="_wpcf7" value="1466" />
                                                                            <input type="hidden" name="_wpcf7_version" value="4.9.1" />
                                                                            <input type="hidden" name="_wpcf7_locale" value="en_US" />
                                                                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f1466-p31-o1" />
                                                                            <input type="hidden" name="_wpcf7_container_post" value="31" />
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                                <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="FULL NAME" /></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                                <span class="wpcf7-form-control-wrap your-country"><input type="text" name="your-country" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="COUNTRY" /></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                                <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="PHONE NUMBER" /></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                                                <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="EMAIL ADDRESS" /></span>
                                                                            </div>
                                                                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                                                <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false" placeholder="MESSAGE"></textarea></span>
                                                                            </div>
                                                                            <div class="col-xs-12 add-submit">
                                                                                <input type="submit" value="Submit" class="wpcf7-form-control wpcf7-submit" />
                                                                            </div>
                                                                        </div>
                                                                        <div class="wpcf7-response-output wpcf7-display-none"></div></form></div></div></div></div></div></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid bg-fixed vc_custom_1512611835614 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper"><h2 style="font-size: 40px;color: #ffffff;text-align: center" class="vc_custom_heading vc_custom_1507351035850" >Our Blog</h2><p style="font-size: 12px;color: #ef90a4;text-align: center;font-family:Lusitana;font-weight:700;font-style:normal" class="vc_custom_heading vc_custom_1509000978335" >LATEST TRENDS OF THE INDUSTRY</p><!-- vc_grid start -->
                                                <div class="vc_grid-container-wrapper vc_clearfix" >
                                                    <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid" data-initial-loading-animation="fadeIn" data-vc-grid-settings="{&quot;page_id&quot;:31,&quot;style&quot;:&quot;all&quot;,&quot;action&quot;:&quot;vc_get_vc_grid_data&quot;,&quot;shortcode_id&quot;:&quot;1512611784501-f92828be-1454-9&quot;,&quot;tag&quot;:&quot;vc_basic_grid&quot;}" data-vc-request="http://demo.spyropress.com/themeforest/burnley/wp-admin/admin-ajax.php" data-vc-post-id="31" data-vc-public-nonce="242746741f">
                                                    </div>
                                                </div><!-- vc_grid end -->
                                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    <div id="contacts" class="cms-info-plus  cms-info-plus info-plus-admin text-center">
                                                    <span class="title">24/7 SUPPORT</span>
                                                    <p class="contact">1-800-123-4567</p>
                                                </div>
                                            </div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>

                            </div><!-- .entry-content -->
                            <footer class="entry-meta">


                            </footer><!-- .entry-meta -->
                        </div><!-- #post -->

                    </main><!-- .site-main -->
                </div>
            </div>
        </div><!-- .content-area -->

    </div><!-- .site-content -->
    <footer id="colophon" class="site-footer class-bottom-1 class-top-1 " >
        <div class="bottom-bg-overlay"></div>        <div id="footer-top" class="footer-top">

            <div class="top-bg-overlay"></div>            <div class=" container ">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><aside id="vnt_map_address_wg-1" class="widget widget_red_map_address widgett11"><h3 class="wg-title">Our Contacts</h3>				<div class="vnt-map-address-wrap">
                                <iframe src="../../../www.google.com/maps/embed%3Fpb=!1m18!1m12!1m3!1d11109.661434921883!2d-117.85404685405554!3d34.122743829315176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%253A0x876ac1c2caebc4e5!2sBig+Tree+Park!5e0!3m2!1svi!2s!4v1503030766771.html"  height="220" ></iframe>
                                <ul class="list-unstyled wg-vnt-map-address">
                                    <li><i class="fa fa-globe"></i> Jacksotts str. 698 San Diego, California, USA</li>
                                    <li><i class="fa fa-phone"></i> 1-800-123-4567, 1-800-123-4568</li>
                                    <li><i class="fa fa-envelope"></i> fashion_vogue@support.com</li>
                                </ul>
                            </div>
                        </aside></div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><aside id="vnt_work_calendar_wg-1" class="widget widget_red_work_calendar widgett12"><h3 class="wg-title">Working Hours</h3>				<div class="vnt-work-calendar-wrap">
                                <ul class="list-unstyled list1 no-bullets big-padding wg-ul-work-calendar">
                                    <li class="content-justify"><span>Monday - Friday</span><span class="time">9 a.m. - 6 p.m.</span></li>
                                    <li class="content-justify"><span>Saturday</span><span class="time">10 a.m. - 8 p.m.</span></li>
                                    <li class="content-justify"><span>Sunday</span><span class="time">Closed</span></li>
                                </ul>
                            </div>
                        </aside><aside id="newsletterwidget-2" class="widget widget_newsletterwidget widgett12"><h3 class="wg-title">Newsletter Signup</h3><div class="tnp tnp-widget"><form method="post" action="http://demo.spyropress.com/themeforest/burnley/?na=s" onsubmit="return newsletter_check(this)">

                                    <input type="hidden" name="nr" value="widget">
                                    <input type='hidden' name='nl[]' value='0'>
                                    <div class="tnp-field tnp-field-email"><label>Email</label><input class="tnp-email" type="email" name="ne" required></div>
                                    <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Subscribe">
                                    </div>
                                </form>
                            </div>
                        </aside></div><div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><aside id="cms_banner_ads-1" class="widget widget_cms_banner_ads widgett13"><h3 class="wg-title">Banner Ad</h3><div class="about-widget"><div class="post-media" style="background-image: url(wp-content/uploads/2017/08/Depositphotos_34377157_original-1-770x512.jpg);"><a href="index.html#" ><span class="btn">visit</span><span class="image-text">Model Courses</span></a></div></div></aside><aside id="cms_social_widget-1" class=" widget widget_cms_social_widget widgett13"><h3 class="wg-title">Follow Us</h3><ul class="cms-social horizontal   list-unstyled list-inline clearfix"><li><a class="icon-sprite facebook" target="_blank" data-rel="tooltip" title="Facebook" href="https://facebook.com"><i class="fa fa-facebook"></i></a></li><li><a class="icon-sprite twitter" target="_blank" data-rel="tooltip" title="Twitter" href="index.html#"><i class="fa fa-twitter"></i></a></li><li><a class="icon-sprite google" target="_blank" data-rel="tooltip" title="Google" href="index.html#"><i class="fa fa-google"></i></a></li><li><a class="icon-sprite linkedin" target="_blank" data-rel="tooltip" title="Linkedin" href="index.html#"><i class="fa fa-linkedin"></i></a></li><li><a class="icon-sprite pinterest" target="_blank" data-rel="tooltip" title="Pinterest" href="index.html#"><i class="fa fa-pinterest-p"></i></a><li></ul></aside></div>
                </div>
            </div>
        </div><!-- #footer-top -->
        <div id="footer-bottom" class="footer-bottom">

            <div class="bot-bg-overlay"></div>            <div class=" container ">
                <div class="row">

                    <div class="col-xs-12"><aside id="text-24" class="widget widget_text widgetb1">			<div class="textwidget"><p>&copy; Copyright 2017 All Rights Reserved</p>
                            </div>
                        </aside></div>
                </div>
            </div>
        </div><!-- #footer-bottom -->

    </footer><!-- .site-footer -->

</div><!-- .site -->

<div class="ef3-back-to-top" onclick=""><i class="fa fa-angle-up" ></i></div>			<script type="text/javascript">
    function revslider_showDoubleJqueryError(sliderID) {
        var errorMessage = "Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.";
        errorMessage += "<br> This includes make eliminates the revolution slider libraries, and make it not work.";
        errorMessage += "<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.";
        errorMessage += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.";
        errorMessage = "<span style='font-size:16px;color:#BC0C06;'>" + errorMessage + "</span>";
        jQuery(sliderID).show().html(errorMessage);
    }
</script>
<link property="stylesheet" rel='stylesheet' id='vc_google_fonts_lusitanaregular700-css'  href='../../../fonts.googleapis.com/css%3Ffamily=Lusitana%253Aregular%252C700&amp;ver=4.9.8.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-progressbar-css'  href='wp-content/plugins/ef4-Framework/frameworks/cmssuperheroes/assets/css/bootstrap-progressbar.min.css%3Fver=0.7.0.css' type='text/css' media='all' />
<link property="stylesheet" rel='stylesheet' id='vc_pageable_owl-carousel-css-css'  href='wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.min.css%3Fver=5.4.5.css' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css-css'  href='wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css%3Fver=5.4.5.css' type='text/css' media='all' />
<script type='text/javascript'>
    /* <![CDATA[ */
    var wpcf7 = {"apiSettings":{"root":"http:\/\/demo.spyropress.com\/themeforest\/burnley\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}},"cached":"1"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/contact-form-7/includes/js/scripts.js%3Fver=4.9.1'></script>
<script type='text/javascript' src='wp-content/plugins/news-twitter/js/jquery.bxslider.min.js%3Fver=4.1.2'></script>
<script type='text/javascript' src='wp-content/plugins/news-twitter/js/news-twitter.js%3Fver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.js%3Fver=2.70'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.js%3Fver=2.1.4'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var woocommerce_params = {"ajax_url":"\/themeforest\/burnley\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.spyropress.com\/themeforest\/burnley\/?wc-ajax=%%endpoint%%"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.js%3Fver=3.2.5'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var wc_cart_fragments_params = {"ajax_url":"\/themeforest\/burnley\/wp-admin\/admin-ajax.php","wc_ajax_url":"http:\/\/demo.spyropress.com\/themeforest\/burnley\/?wc-ajax=%%endpoint%%","fragment_name":"wc_fragments_830fe164dc82a66364b7e3597b111542"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.js%3Fver=3.2.5'></script>
<script type='text/javascript' src='wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.js%3Fver=3.1.6'></script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.selectBox.min.js%3Fver=1.2.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var yith_wcwl_l10n = {"ajax_url":"\/themeforest\/burnley\/wp-admin\/admin-ajax.php","redirect_to_cart":"no","multi_wishlist":"","hide_add_button":"1","is_user_logged_in":"","ajax_loader_url":"http:\/\/demo.spyropress.com\/themeforest\/burnley\/wp-content\/plugins\/yith-woocommerce-wishlist\/assets\/images\/ajax-loader.gif","remove_from_wishlist_after_add_to_cart":"yes","labels":{"cookie_disabled":"We are sorry, but this feature is available only if cookies are enabled on your browser.","added_to_cart_message":"<div class=\"woocommerce-message\">Product correctly added to cart<\/div>"},"actions":{"add_to_wishlist_action":"add_to_wishlist","remove_from_wishlist_action":"remove_from_wishlist","move_to_another_wishlist_action":"move_to_another_wishlsit","reload_wishlist_and_adding_elem_action":"reload_wishlist_and_adding_elem"}};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/yith-woocommerce-wishlist/assets/js/jquery.yith-wcwl.js%3Fver=2.1.2'></script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/js/menu.js%3Fver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/owlcarousel/js/owl.carousel.min.js%3Fver=1.0.0'></script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/js/jquery.magnific-popup.min.js%3Fver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/prettyphoto/js/jquery.prettyPhoto.min.js%3Fver=5.4.5'></script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/js/main.js%3Fver=1.0.0'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var newsletter = {"messages":{"email_error":"The email is not correct","name_error":"The name is not correct","surname_error":"The last name is not correct","privacy_error":"You must accept the privacy statement"},"profile_max":"20"};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/plugins/newsletter/subscription/validate.js%3Fver=5.1.6'></script>
<script type='text/javascript' src='wp-includes/js/wp-embed.js%3Fver=4.9.8'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js%3Fver=5.4.5'></script>
<script type='text/javascript' src='wp-content/plugins/ef4-Framework/frameworks/cmssuperheroes/assets/js/bootstrap-progressbar.min.js%3Fver=0.7.0'></script>
<script type='text/javascript' src='wp-content/plugins/ef4-Framework/frameworks/cmssuperheroes/assets/js/bootstrap-progressbar.cms.js%3Fver=1.0.0'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js%3Fver=5.4.5'></script>
<script type='text/javascript'>
    /* <![CDATA[ */
    var cmscarousel = {"cms-model-carousel":{"margin":"0","loop":"","mouseDrag":"true","nav":"true","dots":"","autoplay":"true","autoplayTimeout":5000,"smartSpeed":1000,"autoplayHoverPause":"true","navText":["<span class=\"prev\">Prev<\/span>","<span class=\"next\">Next<\/span>"],"dotscontainer":"cms-model-carousel .cms-dots","center":0,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3},"1200":{"items":4}}}};
    var cmscarousel = {"cms-model-carousel":{"margin":"0","loop":"","mouseDrag":"true","nav":"true","dots":"","autoplay":"true","autoplayTimeout":5000,"smartSpeed":1000,"autoplayHoverPause":"true","navText":["<span class=\"prev\">Prev<\/span>","<span class=\"next\">Next<\/span>"],"dotscontainer":"cms-model-carousel .cms-dots","center":0,"responsive":{"0":{"items":1},"768":{"items":2},"992":{"items":3},"1200":{"items":4}}},"cms-testimonial-carousel":{"margin":30,"loop":"","mouseDrag":"true","nav":"","nav_post":"","dots":"true","autoplay":"true","autoplayTimeout":2000,"smartSpeed":1000,"autoplayHoverPause":"true","navText":["<i class=\"fa fa-angle-left\"><\/i>","<i class=\"fa fa-angle-right\"><\/i>"],"autoHeight":"true","responsive":{"0":{"items":1},"768":{"items":1},"992":{"items":1},"1200":{"items":1}}}};
    /* ]]> */
</script>
<script type='text/javascript' src='wp-content/themes/burnley/assets/js/owl.carousel.cms.js%3Fver=1.0.0'></script>
<script type='text/javascript' src='wp-includes/js/imagesloaded.min.js%3Fver=3.2.0'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/owl.carousel.min.js%3Fver=5.4.5'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/lib/bower/imagesloaded/imagesloaded.pkgd.min.js%3Fver=4.9.8'></script>
<script type='text/javascript' src='wp-includes/js/underscore.min.js%3Fver=1.8.3'></script>
<script type='text/javascript' src='wp-content/plugins/js_composer/assets/js/dist/vc_grid.min.js%3Fver=5.4.5'></script>
</body>
</html>
<!-- Dynamic page generated in 1.334 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2018-09-09 10:59:08 -->

<!-- Compression = gzip -->
<!-- super cache -->