<!--
Template Name: TOP
-->

<?php get_header(); ?>
        <div class="p-header__flex">
            <p class="p-header__logo">
                <a href="<?php echo esc_url( home_url('/top') ); ?>" class="p-header__logo--item"></a>
            </p>
        </div>



        <main class="main">
            <div class="l-top">
                <div class="l-top__wrapper">
                    <div class="l-top__inner">
                        <div class="p-top__menu">
                            <h1 class="p-top__img">
                                <a href=""class="p-top__img--item" >
                                    <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/logo_dark.png" alt="">
                                </a>
                            </h1>
                            <nav>
                            
                            <ul class="p-top__menu-linkBox">
                                    <li class="p-top__menu-link"><a class="p-top__menu-link--item" href="<?php echo esc_url( home_url('/top') ); ?>">TOP</a> <span class="p-top__menu--des">トップ</span></li>
                                    <li class="p-top__menu-link"><a class="p-top__menu-link--item" href="<?php echo esc_url( home_url('/concept') ); ?>">CONCEPT</a> <span class="p-top__menu--des">コンセプト</span></li>
                                    <li class="p-top__menu-link"><a class="p-top__menu-link--item" href="<?php echo esc_url( home_url('/menu') ); ?>">MENU</a> <span class="p-top__menu--des">メニュー</span></li>
                                    <li class="p-top__menu-link"><a class="p-top__menu-link--item" href="<?php echo esc_url( home_url('/news') ); ?>">NEWS</a> <span class="p-top__menu--des">お知らせ</span></li>
                                    <li class="p-top__menu-link"><a class="p-top__menu-link--item" href="<?php echo esc_url( home_url('/shop') ); ?>">SHOP</a> <span class="p-top__menu--des">店舗情報</span></li>
                                    <li class="p-top__menu-link"><a class="p-top__menu-link--item" href="<?php echo esc_url( home_url('/gift') ); ?>">GIFT</a> <span class="p-top__menu--des">ギフト・贈り物</span></li>
                                    <li class="p-top__menu-link"><a class="p-top__menu-link--item" href="<?php echo esc_url( home_url('/contact') ); ?>">CONTACT</a> <span class="p-top__menu--des">お問い合わせ</span></li>
                                    </ul>
                            </nav>
                            <div class="p-sns-icon">
                                <nav>
                                    <ul class="p-sns-icon__link">
                                        <li class="p-sns-icon__item sns-twitter"><a href="_blank"></a></li>
                                        <li class="p-sns-icon__item sns-instagram"><a href="_blank"></a></li>
                                        <li class="p-sns-icon__item sns-youtube"><a href="_blank"></a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
    
                        
                        <div class="l-top__view">
                            <div class="swiper-container">
                                <!-- スライドメニュー -->
                                <div class="swiper-wrapper">
                                    <!-- スライドメニュー内容を個々に追加してください -->
                                    <div class="swiper-slide"><img class="swiper-slide-img" src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_mainvisual1.png" alt=""></div>
                                    <div class="swiper-slide"><img class="swiper-slide-img" src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_mainvisual2.png" alt=""></div>
                                    <div class="swiper-slide"><img class="swiper-slide-img"  src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_mainvisual3.png" alt=""></div>
                                    <!-- スライドのページネーション表示  -->
                                </div>
                                <div class="swiper-pagination"></div>
    
                                <p class="p-top__view--txt">
                                    パスタとコーヒーが<br class="br-off">とってもおいしい、<br>
                                    <span class="top-view-des"> 
                                        ほっと落ち着くのんびり空間。
                                    </span>
                                </p>
                                <div class="p-top__view__f-wrapper">
                                <?php $pickup_query = new WP_Query(
                                    array(
                                    'post_type'      => 'post', 
                                    'tag'            => 'pickup',  
                                    'posts_per_page' => 1
                                    )
                                );
                                ?>
                                <?php if ($pickup_query->have_posts()) : ?>
                                    <?php while($pickup_query->have_posts()) : ?>
                                        <?php $pickup_query->the_post(); ?>

                                        <?php $category = get_the_category(); ?>
                                            <?php if ($category[0]) : ?>
                                                <p class="p__tag">
                                                <span class="p__tag--txt">
                                                <?php echo $category[0]->cat_name; ?>
                                                </span>
                                                </p>
                                            <?php endif; ?>

                                    <article class="l-f__left-in">

                                            <a href="<?php the_permalink(); ?>">
                                                <div class="p-f__img-in">
                                                <?php if (has_post_thumbnail()) : ?>
                                                        <?php the_post_thumbnail(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="p-body-in">
                                                    <p>
                                                        <time datetime="<?php the_time('c')?>"><?php the_time('Y-m-d')?></time>
                                                    </p>
                                                    <div class="p-f__body-ttl__in">
                                                        <?php the_title();?>
                                                    </div>
                                                </div>
                                            </a>

                                    </article>


                                    <?php endwhile; ?>
                                    <?php endif; ?>
                                    <?php wp_reset_postdata(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="l-concept__content--wrapper">

            <section class="l-concept">
                    <div class="l-concept__wrapper">
                        <div class="l-concept__inner">
                        <div class="p-concept__content">
                            <div class="p-concept__content--inner">
                                <h2 class="c-concept__ttl">CONCEPT</h2>
                                <span class="c-concept__txt ">当店のこだわり</span>
                                <h3 class="p-concept__content--ttl">
                                    最高のコーヒーと、 <br>
                                    時の流れを味わうことができる <br>
                                    手作りカフェ
                                </h3>
                                <p class="p-concept__content--txt">
                                    ダミー_国内外から賞賛を <br> 受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<br>
                                    ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。<span class="concept_span"> ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。</span>
                                </p>
                                <div class="p-concept__btn btn-wrapper">
                                    <a href="<?php echo esc_url( home_url('/concept') ); ?>" class="c-btn c-btn__concept">
                                        <span class="btn">詳しくはこちら</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="p-concept__img">
                            <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_concept.png" alt="">
                        </div>
                    </div>
                </div>
                </section>
            </div>

            <div class="l-lunch__content---wrapper">
                <section class="l-lunch">
                    <div class="l-lunch__wrapper">
                    <h2 class="c-lunch__ttl c-section__ttl">SPECIAL LUNCH SET</h2>
                    <span class="c-lunch__txt c-section__txt">今月のスペシャルランチセット</span>
                    <div class="l-lunch__inner">
                    <div class="p-lunch__flex">
                            
                            <div class="p-lunch__box">
                                <a class="p-lucnh__box--img" href="">
                                    <img src="<?php the_field('lunch-image-a') ?>">
                                </a>
                                <div class="p-lunch__txt--flex">
                                    <p class="p-lunch__txt-action">A</p>
                                    <p class="p-lunch__txt-des"><?php the_field('lunch-name-a') ?></p>
                                </div>
                            </div>
                            <div class="p-lunch__box">
                                <a href="" class="p-lucnh__box--img">
                                    <img src="<?php the_field('lunch-image-b') ?>">
                                </a>
                                <div class="p-lunch__txt--flex">
                                    <p class="p-lunch__txt-action">B</p>
                                    <p class="p-lunch__txt-des"><?php the_field('lunch-name-b') ?></p>
                                </div>
                            </div>
                            <div class="p-lunch__box">
                                <a href="" class="p-lucnh__box--img">
                                    <img src="<?php the_field('lunch-image-c') ?>">
                                </a>
                                <div class="p-lunch__txt--flex">
                                    <p class="p-lunch__txt-action">C</p>
                                    <p class="p-lunch__txt-des"><?php the_field('lunch-name-c') ?></p>
                                </div>
                            </div>
                            <div class="p-lunch__box">
                                <a href="" class="p-lucnh__box--img">
                                    <img src="<?php the_field('lunch-image-d') ?>">
                                </a>
                                <div class="p-lunch__txt--flex">
                                    <p class="p-lunch__txt-action">D</p>
                                    <p class="p-lunch__txt-des"><?php the_field('lunch-name-d') ?></p>
                                </div>
                            </div>
                        
                            

                            
                        </div>


                        <div class="p-lunchSet">
                            <div class="p-lunchSet-img">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_lunch-detail.png" alt="">
                            </div>
                            <div class="p-lunchSet__box">
                                <div class="p-lunchSet__ttl">
                                    スペシャルランチセット <br>【選べる3品】
                                </div>
                                <p class="p-lunchSet__txt">1,280 yen</p>
                                <p class="p-lunchSet__des">(11:00 AM〜14:00 PMまで)</p>
                            </div>
                        </div>
                    </div>
                </div>
                </section>

            </div>

            <div class="l-menu__wrapper">

            <section class="l-menu">
                    <h2 class="c-menu__Ttl c-section__ttl">GRAND MENU</h2>
                    <span class="c-menu__txt c-section__txt">グランドメニュー</span>
                    <div class="l-menu__inner">
                        <h3 class="p-menu__ttl">パスタ</h3>
                            <ul class="p-menu__flex">

                            <?php
                                $menu_query = new WP_Query(
                                array(
                                    'post_type' => 'menu',
                                    'posts_per_page' => 3,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'genre',
                                            'field'    => 'slug',
                                            'terms'    => 'pasta',
                                        ),
                                
                                    ),
                                ),

                                );
                            ?>
                            <?php if(  $menu_query->have_posts()) :?>
                                    <?php while( $menu_query->have_posts()): ?>
                                        <?php  $menu_query->the_post() ;?>
                                        <li class="p-menu__item">
                                            <div class="p-menu__img">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php endif; ?>
                                            </div>
                                            <div class="p-menu__body">
                                                <p class="p-menu__body--txt">
                                                    <?php the_title();?>
                                                </p>
                                                <p class="p-menu__body--des">
                                                    <?php the_field('food-price');?>
                                                </p>
                                            </div>
                                        </li>

                                    <?php endwhile;?>
                                <?php endif;?>  
                            <?php wp_reset_postdata(); ?>
                                
                            </ul>
                        <h3 class="p-menu__ttl">サラダ</h3>
                            <ul class="p-menu__flex">
                            <?php
                                $sarad_query = new WP_Query(
                                    array(
                                        'post_type' => 'menu',
                                        'posts_per_page' => 3,
                                        'tax_query' => array(
                                            array(
                                                'taxonomy' => 'genre',
                                                'field'    => 'slug',
                                                'terms'    => 'salada',
                                            ),
                                    
                                        ),
                                    ),
                                );
                            ?>
                            <?php if(  $sarad_query->have_posts()) :?>
                                    <?php while( $sarad_query->have_posts()): ?>
                                        <?php  $sarad_query->the_post() ;?>
                                        <li class="p-menu__item">
                                            <div class="p-menu__img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-menu__body">
                                                <p class="p-menu__body--txt">
                                                    <?php the_title();?>
                                                </p>
                                                <p class="p-menu__body--des">
                                                    <?php the_field('food-price'); ?>
                                                </p>
                                            </div>
                                        </li>

                                    <?php endwhile;?>
                                <?php endif;?>  
                            <?php wp_reset_postdata(); ?>
                                
                            </ul>
                        <h3 class="p-menu__ttl">パン & スイーツ</h3>
                            <ul class="p-menu__flex">
                            <?php
                                $breadsweet_query = new WP_Query(
                                array(
                                    'post_type'      => 'menu',
                                    'posts_per_page' => 6,

                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'genre', // タクソノミーのスラッグを指定
                                            'field' => 'slug',
                                            'terms' => 'breadsweets', // ジャンルのスラッグを指定

                                        ),
                                    ),
                                ),
                                );
                            ?>
                            <?php if(  $breadsweet_query->have_posts()) :?>
                                    <?php while( $breadsweet_query->have_posts()): ?>
                                        <?php  $breadsweet_query->the_post() ;?>
                                        <li class="p-menu__item">
                                            <div class="p-menu__img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-menu__body">
                                                <p class="p-menu__body--txt">
                                                    <?php the_title();?>
                                                </p>
                                                <p class="p-menu__body--des">
                                                <?php the_field('food-price'); ?>
                                                </p>
                                            </div>
                                        </li>

                                    <?php endwhile;?>
                                <?php endif;?>  
                            <?php wp_reset_postdata(); ?>
                            </ul>
                            
                            <div class="p-menu__drink">
                                <h3 class="p-menu__ttl p-menu__drink--ttl ">ドリンク</h3>
                                <div class="p-menu__drink--inner">
                                    <div class="p-menu__drink--flex">
                                        <div class="p-memu__drink--img">
                                            <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_drink1.png" alt="">
                                        </div>
    
                                        <div class="p-menu__drink--content">
                                                <h4 class="p-drink__ttl p-drink__ttl-1">コーヒー</h4>
                                                <ul>
                                                    <div class="p-drink__itemWrapper">
                                                        <li class="p-drink__item" >
                                                            <a class="p-drink__item--link" href="">ブレンド</a>
                                                        </li>
                                                        <p class="p-drink__item--des">
                                                            500 yen
                                                        </p>
                                                    </div>
                                                    <div class="p-drink__itemWrapper">
                                                        <li class="p-drink__item" >
                                                            <a class="p-drink__item--link" href="">カフェラテ</a>
                                                        </li>
                                                        <p class="p-drink__item--des">
                                                            500 yen
                                                        </p>
                                                    </div>
                                                    <div class="p-drink__itemWrapper">
                                                        <li class="p-drink__item" >
                                                            <a class="p-drink__item--link" href="">豆乳ラテ</a>
                                                        </li>
                                                        <p class="p-drink__item--des">
                                                            500 yen
                                                        </p>
                                                    </div>
                                                    <div class="p-drink__itemWrapper">
                                                        <li class="p-drink__item" >
                                                            <a class="p-drink__item--link" href="">カフェモカ</a>
                                                        </li>
                                                        <p class="p-drink__item--des">
                                                            500 yen
                                                        </p>
                                                    </div>
                                                    <div class="p-drink__itemWrapper">
                                                        <li class="p-drink__item" >
                                                            <a class="p-drink__item--link" href="">キャラメルラテ</a>
                                                        </li>
                                                        <p class="p-drink__item--des">
                                                            500 yen
                                                        </p>
                                                    </div>
                                                    <div class="p-drink__itemWrapper">
                                                        <li class="p-drink__item" >
                                                            <a class="p-drink__item--link" href="">バニララテ</a>
                                                        </li>
                                                        <p class="p-drink__item--des">
                                                            500 yen
                                                        </p>
                                                    </div>
                                                </ul>
                                        </div>

                                        <div class="p-menu__drink--content">
                                            <h4 class="p-drink__ttl p-drink__ttl-2">紅茶</h4>
                                            <ul>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link" href="">ストレート</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link" href="">ミルク</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link" href="">アップル</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div>
                                            </ul>
                                        </div>

                                        <div class="p-menu__drink--content">
                                            <h4 class="p-drink__ttl p-drink__ttl-3">ソフトドリンク</h4>
                                            <ul>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link"  href="">バナナ</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link"  href="">オレンジ</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link"  href="">アップル</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link"  href="">マンゴー</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div>
                                                <div class="p-drink__itemWrapper">
                                                    <li class="p-drink__item">
                                                        <a class="p-drink__item--link"  href="">ミックス</a>
                                                    </li>
                                                    <p class="p-drink__item--des">
                                                        500 yen
                                                    </p>
                                                </div> 
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="Menu-btn">
                                    <a href="<?php echo esc_url( home_url('/menu') ); ?>" class="btn ">
                                        <span>その他のメニュー</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                </section>
            </div>


            <section class="l-gallery">
                <div class="l-galley__wrapper">
                    <h2 class="c-galley__ttl c-section__ttl">GALLERY</h2>
                    <span class="c-galley__txt c-section__txt ">ギャラリー</span>
                    <div class="l-gallery__inner">
                        <ul class="p-gallery__flex">
                            <li class="p-gallery__img">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_gallery1.png" alt="">
                            </li>
                            <li class="p-gallery__img">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_gallery2.png" alt="">
                            </li>
                            <li class="p-gallery__img">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_gallery3.png" alt="">
                            </li>
                            <li class="p-gallery__img">
                                <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_gallery4.png" alt="">
                            </li>
                        </ul>
                        <div class="btn-wrapper">
                            <a href="" class="btn">
                                <span>インスタグラムを見る</span>
                            </a>
                        </div>
                    </div>
                </div>
                </section>

            <section class="l-news">
                <div class="l-news__wrapper">

                    <h2 class="c-news__ttl c-section__ttl">NEWS</h2>
                    <span class="c-news__txt c-section__txt">お知らせ</span>
                    <div class="l-news__inner">
                        <div class="p-news__flexBox">
                            
                            <div class="p-news__flexBox--left">


                                <?php
                                    $news_query = new WP_Query(
                                        array(
                                            'post_type'      => 'post',
                                            'posts_per_page' => 1,
                                        )
                                    );
                                ?>
                                <?php if(  $news_query->have_posts()) :?>
                                    <?php while( $news_query->have_posts()): ?>
                                        <?php  $news_query->the_post() ;?>
                                        <article class="p-Left__content">
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="p-news__img">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php endif; ?>
                                                </div>
                                                <?php $category = get_the_category(); ?>
                                                <?php if ($category[0]) : ?>
                                                    <p class="p-tag">
                                                    <span class="p-tag_txt">
                                                    <?php echo $category[0]->cat_name; ?>
                                                    </span>
                                                    </p>
                                                <?php endif; ?>
                                                <div class="p-news__body">
                                                    <div class="p-new__body--ttl__add">
                                                        <?php the_title();?>
                                                    </div>
                                                    <p class="p-news__body--txt__add">
                                                    <?php the_title(); ?>
                                                    </p>
                                                    <p>
                                                        <time class="p-n__time--add" datetime="<?php the_time('c'); ?>"><?php the_time('Y-m-d'); ?></time>
                                                    </p>
                                                </div>
                                            </a>
                                        </article>
                                    <?php endwhile;?>
                                <?php endif;?>        
                                <?php wp_reset_postdata(); ?>

                            </div>

                            <div class="p-news__flexBox--right">

                                <?php
                                    $news_query = new WP_Query(
                                        array(
                                            'post_type'      => 'post',
                                            'posts_per_page' => 4,
                                            'offset' => 1,
                                        )
                                    );
                                ?>
                                <?php if(  $news_query->have_posts()) :?>
                                    <?php while( $news_query->have_posts()): ?>
                                        <?php  $news_query->the_post() ;?>


                                <article class="p-news__content">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="p-news__img">
                                        <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail(); ?>
                                                <?php endif; ?>
                                        </div>
                                        <?php $category = get_the_category(); ?>
                                                <?php if ($category[0]) : ?>
                                                    <p class="p-tag">
                                                    <span class="p-tag_txt">
                                                    <?php echo $category[0]->cat_name; ?>
                                                    </span>
                                                    </p>
                                                <?php endif; ?>
                                        <div class="p-news__body">
                                            <div class="p-news__body--ttl">
                                                <?php the_title();?>
                                            </div>
                                            <p class="p-n__time--item">
                                                <time class="p-n__time" datetime="<?php the_time('c');?>"><?php the_time('Y-m-d');?></time>
                                            </p>
                                        </div>
                                    </a>
                                </article>

                                <?php endwhile;?>
                                <?php endif;?>        
                                <?php wp_reset_postdata(); ?>
                            </div>

                            </div>
                        </div>
                    </div>
                    <div class="btn-wrapper news-btn">
                        <a href="<?php echo esc_url( home_url('/news') ); ?>" class="btn btn-news">
                            <span>過去のお知らせ</span>
                        </a>
                    </div>
                </div>
            </section>
            <section class="l-access">
                <div class="l-access__wrapper">

                    <h2 class="c-access__ttl c-section__ttl">ACCESS</h2>
                    <span class="c-access__txt c-section__txt">アクセス</span>
                    <div class="l-access__inner">
                        <div class="iframe-wrap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4092.4256468346853!2d139.57122001369984!3d35.69971411079486!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6018ee357495662d%3A0x8067c21dd5e0f34f!2z5LqV44Gu6aCt5oGp6LOc5YWs5ZyS!5e0!3m2!1sja!2sjp!4v1681949420714!5m2!1sja!2sjp" width="668" height="367" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
                        </div>
        
                        <div class="l-access__info">
                            <dl class="p-access__flex">
                                <div class="p-access__flexLeft">
                                    <dl>
                                        <div class="p-ac__flex">
                                            <dt class="p-ac__ttl">住所</dt>
                                            <dd class="p-ac__txt">〒000-0000 <br>東京都武蔵野市吉祥寺南町一丁目</dd>
                                        </div>
                                        <div class="p-ac__flex">
                                            <dt class="p-ac__ttl">TEL</dt>
                                            <dd class="p-ac__txt">0123-456-789</dd>
                                        </div>
                                        <div class="p-ac__flex">
                                            <dt class="p-ac__ttl">Mail</dt>
                                            <dd class="p-ac__txt">example@mail.com</dd>
                                        </div>
                                    </dl>
                                </div>
                                <div class="access-flexRight">
                                    <dl>
                                        <div class="p-ac__flex">
                                            <dt class="p-ac__ttl">営業時間</dt>
                                            <dd class="p-ac__txt">7:00〜21:00 <br> ※ラストオーダー 20:30</dd>
                                        </div>
                                        <div class="p-ac__flex">
                                            <dt class="p-ac__ttl">定休日</dt>
                                            <dd class="p-ac__txt">水曜日</dd>
                                        </div>
                                        <div class="p-ac__flex">
                                            <dt class="p-ac__ttl">座席</dt>
                                            <dd class="p-ac__txt">テーブル20席 ／ カウンター席6席</dd>
                                        </div>
                                    </dl>
                                </div>
                            </dl>
                        </div>
                    </div>
                </div>

            </section>
        </main>
        
<?php get_footer(); ?>