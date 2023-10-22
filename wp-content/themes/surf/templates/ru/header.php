<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage Surf.ru
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
    <meta charset="<?php bloginfo('charset'); // кодировка ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="google-site-verification" content="bdg5WXJPlGLzSK5voIHsV7xIDpdllMURNVJ061dNFK4"/>
    <?php /* RSS и всякое */ ?>
    <link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
    <link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
    <link rel="shortcut icon" href="/wp-content/themes/surf/favicon.ico" type="image/x-icon">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.2.2/swiper-bundle.min.css"/>

    <?php /* Все скрипты и стили теперь подключаются в functions.php */ ?>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5W8BZZK');</script>
    <!-- End Google Tag Manager -->

    <?php wp_head(); // необходимо для работы плагинов и функционала ?>
</head>
<body <?php body_class(); // все классы для body ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5W8BZZK"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="sticky-head">
    <div class="container">
        <div class="head">
            <div class="logo">
                <a href="/">
                    <img src="<?= THEME . '/assets/img/logo.svg'; ?>" alt="">
                </a>
            </div>
            <?php if ( ! is_page(243) && ! is_page_template('tpl-career-form.php')): ?>
                <nav class="navbar navbar-default">
                    <?php
                    $args = array(
                        'theme_location' => 'top',
                        'container'      => false,
                        'menu_id'        => 'top-nav-ul',
                        'items_wrap'     => '<ul id="top-nav-ul" class="nav navbar-nav top-menu">%3$s</ul>',
                        'menu_class'     => 'top-menu',
                        'walker'         => new HeaderWalker()
                    );
                    wp_nav_menu($args);
                    ?>
                </nav>
                <a href="https://surf.dev" class="lang">Eng</a>
                <?php if (is_page('career')) : ?>
                    <a href="/career/discuss/" class="header-call">Хочу в Surf</a>
                <?php elseif (is_page(4707)) : ?>
                    <a href="#contact" class="header-call listing-content js-anchor">Обсудить проект</a>
                <?php else: ?>
                    <a href="<?php the_permalink('243'); ?>" class="header-call">Обсудить проект</a>
                <?php endif; ?>
            <?php else: ?>
                <div class="form-closer js-form-closer">
                    <a href="#">
                        <img src="<?= THEME . '/assets/img/closer.svg'; ?>" alt="">
                    </a>
                </div>
            <?php endif; ?>
	        <div class="mobile-menu"><span></span></div>
        </div>
    </div>
</header>