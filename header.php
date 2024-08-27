<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>内田橋商店街</title>
    <!-- Zen Kaku Goshic New-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;500;700&display=swap"
        rel="stylesheet">
    <!-- UDP Gothic -->
    <link href="https://fonts.googleapis.com/css2?family=BIZ+UDPGothic:wght@400;700&display=swap" rel="stylesheet" />
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/8067db763b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/ScrollTrigger.min.js"></script>


    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:image:alt" content="" />
    <link rel="icon" href="/favicon.ico" sizes="any" />
    <link rel="icon" href="/icon.svg" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="icon.png" />
    <link rel="manifest" href="site.webmanifest" />
    <meta name="theme-color" content="#fafafa" />

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header class="header">
        <div class="header__menu"></div>
        <div class="header__inner">
            <div class="header__top">
                <a class="header__top--image" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_theme_file_uri('/images/uchidabashiLogo.svg'); ?>" alt="内田橋商店街ロゴ" />
                </a>
                <div class="header__gnav">
                    <a href="<?php echo esc_url(home_url('/event')); ?>" class="header__gnav--link <?php if (is_page('event')) {
                                                                                                        echo "current";
                                                                                                    } ?>">イベント情報</a>
                    <a href="<?php echo esc_url(home_url('/store')); ?>" class="header__gnav--link <?php if (is_page('store') || is_singular('storeinfo')) {
                                                                                                        echo "current";
                                                                                                    } ?>">店舗情報</a>
                    <a href="<?php echo esc_url(home_url('/about')); ?>" class="header__gnav--link <?php if (is_page('about')) {
                                                                                                        echo "current";
                                                                                                    } ?>">商店街について</a>
                    <a href="<?php echo esc_url(home_url('/openstore')); ?>" class="header__gnav--link <?php if (is_page('openstore')) {
                                                                                                            echo "current";
                                                                                                        } ?>">出店について</a>
                    <a href="<?php echo esc_url(home_url('/access')); ?>" class="header__gnav--link <?php if (is_page('access')) {
                                                                                                        echo "current";
                                                                                                    } ?>">アクセス</a>
                    <a href="<?php echo esc_url(home_url('/faq')); ?>" class="header__gnav--link <?php if (is_page('faq')) {
                                                                                                        echo "current";
                                                                                                    } ?>">FAQ</a>
                    <a href="<?php echo get_field('basic-contact', 'option'); ?>" class="header__gnav--link" target="_blank" rel="noopener noreferrer">お問い合わせ<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
                    <a href="<?php echo get_field('basic-Instagram', 'option'); ?>" class="header__gnav--link" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="header__menuButton" id="menuButton">
                    <img src="<?php echo get_theme_file_uri('/images/menu_button.svg'); ?>" alt="" class="header__menuButton--image" />
                </div>
            </div>
        </div>
    </header>
    <!-- モーダルウィンドウ -->
    <div class="modal" id="menuModal">
        <div class="modal__content">
            <a href="<?php echo esc_url(home_url('/event')); ?>" class="modal__link">イベント情報</a>
            <a href="<?php echo esc_url(home_url('/store')); ?>" class="modal__link">店舗情報</a>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="modal__link">商店街について</a>
            <a href="<?php echo esc_url(home_url('/openstore')); ?>" class="modal__link">出店について</a>
            <a href="<?php echo esc_url(home_url('/access')); ?>" class="modal__link">アクセス</a>
            <a href="<?php echo esc_url(home_url('/faq')); ?>" class="modal__link">FAQ</a>
            <a href="<?php echo get_field('basic-contact', 'option'); ?>" class="modal__link" target="_blank" rel="noopener noreferrer">お問い合わせ<i class="fa-solid fa-arrow-up-right-from-square"></i></a>
            <a href="<?php echo get_field('basic-Instagram', 'option'); ?>" class="modal__link" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
        </div>
    </div>