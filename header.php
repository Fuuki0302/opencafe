<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>open-cafe</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
    <meta name="description" content="open-cafe" />
    <meta name="format-detection" content="telephone=no" />

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Damion&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@400;700&family=Damion&display=swap" rel="stylesheet">

    <meta name="robots" content="noindex,nofollow">

    <?php wp_head(); ?>

</head>
<body>
    <div class="l-wrapper">
        <header class="l-header">
            <div class="l-header-inner">
                <div class="p-header__container" id="js-right">
                    <div class="c-header__logo">
                        <a href="">
                            <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/logo_light.png" alt="">
                        </a>
                    </div>
                    <div class="p-header__nav-items--wrapper">
                        <ul class="p-header__nav--items">
                            <li class="p-header__nav--item"><a class="p-header__nav--item-link" href="<?php echo esc_url( home_url('/top') ); ?>">TOP <span class="h-s">／</span> <span class="h-s_s">トップ</span></a></li>
                            <li class="p-header__nav--item"><a class="p-header__nav--item-link" href="<?php echo esc_url( home_url('/concept') ); ?>">CONCEPT <span class="h-s">／</span> <span class="h-s_s">コンセプト</span></a></li>
                            <li class="p-header__nav--item"><a class="p-header__nav--item-link" href="<?php echo esc_url( home_url('/menu') ); ?>">MENU <span class="h-s">／</span> <span class="h-s_s">メニュー</span></a></li>
                            <li class="p-header__nav--item"><a class="p-header__nav--item-link" href="<?php echo esc_url( home_url('/news') ); ?>">NEWS <span class="h-s">／</span> <span class="h-s_s">お知らせ</span></a></li>
                            <li class="p-header__nav--item"><a class="p-header__nav--item-link" href="<?php echo esc_url( home_url('/shop') ); ?>">SHOP <span class="h-s">／</span> <span class="h-s_s">店舗情報</span></a></li>
                            <li class="p-header__nav--item"><a class="p-header__nav--item-link" href="<?php echo esc_url( home_url('/gift') ); ?>">GIFT <span class="h-s">／</span> <span class="h-s_s">ギフト・贈り物</span></a></li>
                            <li class="p-header__nav--item"><a class="p-header__nav--item-link" href="<?php echo esc_url( home_url('/contact') ); ?>">CONTACT <span class="h-s">／</span> <span class="h-s_s">お問い合わせ</span></a></li>
                        </ul>
                    </div>
                    <div class="p-h__nav-sns">
                        <ul class="p-h-sns">
                            <li class="p-h__sns-item">
                                <a class="p-h__sns-item__link" href="">
                                    <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/icon_twitter-light.png" alt="">
                                </a>
                            </li>
                            <li class="p-h__sns-item">
                                <a class="p-h__sns-item__link" href="">
                                    <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/icon_instagram-light.png" alt="">
                                </a>
                            </li>
                            <li class="p-h__sns-item">
                                <a class="p-h__sns-item__link" href="">
                                    <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/icon_youtube-light.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="p-header__btn--wrapper" id="js-header-btn">
                        <button class="c-header__btn">
                            <span class="p-menu__btn-line"></span>
                        </button>
                    </div>
                </div>


            </div>
        </header>