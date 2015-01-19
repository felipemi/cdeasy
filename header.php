
<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage CdEasy
 * @since CdEasy
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head profile="http://gmpg.org/xfn/11">
        <title>
            <?php
            if (is_single()) {
                single_post_title();
            } elseif (is_home() || is_front_page()) {
                bloginfo('name');
                print ' | ';
                bloginfo('description');
                get_page_number();
            } elseif (is_page()) {
                single_post_title('');
            } elseif (is_search()) {
                bloginfo('name');
                print ' | Resultados encontrados para ' . wp_specialchars($s);
                get_page_number();
            } elseif (is_404()) {
                bloginfo('name');
                print ' | Nada Encontrado';
            } else {
                bloginfo('name');
                wp_title('|');
                get_page_number();
            }
            ?>
        </title>
        <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/jquery-ui.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/jcarousel-transitions.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/janela-modal.css"/>
        <?php wp_head(); ?>
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf(__('%s latest posts', 'cdeasy'), wp_specialchars(get_bloginfo('name'), 1)); ?>" />
        <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf(__('%s latest comments', 'cdeasy'), wp_specialchars(get_bloginfo('name'), 1)); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/modernizr.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.basic.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jquery.basic.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/jcarousel-transitions.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/janela-modal.js"></script>
        <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/js/splash.js"></script>
        <script language="javascript" type="text/javascript">
            $(document).ready(function (e) {
                $("#primary-navigation ul li a").click(function (event) {
                    event.preventDefault();
                    var destino = 0;
                    if ($(this.hash).offset().top > $(document).height() - $(window).height()) {
                        destino = $(document).height() - $(window).height();
                    } else {
                        destino = $(this.hash).offset().top;
                    }
                    $('html,body').animate({
                        scrollTop: destino
                    }, 1000, 'swing');
                });
            });
        </script>
        <script language="javascript" type="text/javascript">
            $(function () {
                $("#tabs").tabs();
            });
        </script>
        <script language="javascript" type="text/javascript">
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-57252865-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>
    <body <?php body_class(); ?>>
        <div class="informativo">
       <div class="center">
            <span>Quer começar o ano com um Galaxy S5?</span>
            <a href="#dialog2" rel="modal">Confira a nossa Promoção de Férias</a>
       </div>
   </div>
        <div id="wrapper" class="hfeed">
            <header id="header">
                <div id="masthead">
                    <div id="cont-r">
                        <div id="logo">
                            <div id="blog-title">
                                <span>
                                    <a href="<?php bloginfo('url') ?>/" title="<?php bloginfo('name') ?>" rel="home">
                                        <h1 id="blog-description">
                                            <img src="<?php bloginfo('template_url'); ?>/img/logo.png" width="375"/>
                                        </h1>
                                    </a>
                                </span>
                            </div>
                        </div>
                        <div id="access">
                            <nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
                                <div class="carousel carousel-navigation">
                                    <div class="menu-menu-cdeasy-container">
                                        <ul id="menu-menu-cdeasy" class="menu">
                                            <li></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <div id="main">