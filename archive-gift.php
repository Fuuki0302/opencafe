<!--
Template Name: gift
-->

<?php get_header(); ?>


<div class="l-firstview__wrapper">
        <div class="l-firstView l-gif__View">
            <div class="l-first__inner">
                <div class="p-concept__header--box">
                    <h1 class="p-concept__header--ttl">
                        GIFT
                    </h1>
                    <span class="p-concept__header--txt">
                        ギフト・贈り物
                    </span> 
                </div>
            </div>
        </div>
    </div>


    <section class="l-gift">
        <div class="l-gift__inner">
        <?php if(function_exists('bcn_display')) : ?>
            <ul class="breadcrumb news-bread"  itemscope itemtype="https://schema.org/BreadcrumbList">
                <li itemprop="itemListElement" itemscope
                    itemtype="https://schema.org/ListItem" class="breadcrumb-list">
                    <a itemprop="item" href="./index.html" class="breadcrumb-item">
                        <span itemprop="name" class="breadcrumb-item_data"><?php bcn_display(); ?></span>
                    </a>
                    <meta itemprop="position" content="1" />
                </li>
                
            </ul>
        <?php endif?>
            <!-- /.bread -->

            <div class="p-gift__conteiner">
                <ul class="p-gift__flex">

                <li class="p-gift__item p-gItem-first">
                        <div class="p-gift-left">
                        <?php $gift_query = new WP_Query(
                            array(
                                'post_type'      => 'gift', 
                                'posts_per_page' => 1,

                            )

                        );
                        ?>
                        <?php if ( $gift_query->have_posts() ) : ?>
                            <?php while ( $gift_query->have_posts() ) : ?>
                                <?php $gift_query->the_post(); ?>
                                <div class="p-gift-left-box">
                                    <div class="p-gift-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-gift-body">
                                        <p class="p-g-b-l">
                                            <?php the_title();?>
                                        </p>
                                        <p class="p-g-b-p">
                                            <?php the_field('price');?>
                                        </p>
                                    </div>
                                    <div class="p-gift-btn-wrapper">
                                        <a href="" class="gift-btn">
                                            ショップで確認する
                                        </a>
                                    </div>
                                </div>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                        </div>
                        <ul class="p-gift-right">


                        <?php $gift_query = new WP_Query(
                                array(
                                    'post_type'      => 'gift',
                                    'posts_per_page' => 4,
                                    'offset' => 1,
                                )
                            );
                        ?>
                        <?php if ( $gift_query->have_posts() ) : ?>
                            <?php while ( $gift_query->have_posts() ) : ?>
                                <?php $gift_query->the_post(); ?>
                                <li class="p-gift-right-box">
                                    <div class="p-gift-img">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-gift-body">
                                        <p class="p-gift-body-txt">
                                            <?php the_title();?>
                                        </p>
                                        <p class="p-gift-body-des">
                                            <?php the_field('price');?>
                                        </p>
                                    </div>
                                    <div class="p-gift-btn-wrapper">
                                        <a href="" class="gift-btn">
                                            ショップで確認する
                                        </a>
                                    </div>
                                </li>
                                
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                            
                            
                            

                        </ul>
                    </li>
                    <li>
                        <ul class="menu_second-flex">
                        <?php $gift_query = new WP_Query(
                            array(
                                'post_type'      => 'gift',
                                'posts_per_page' => 4,
                                'offset' => 5,
                            )
                        );
                        ?>
                        <?php if ( $gift_query->have_posts() ) : ?>
                            <?php while ( $gift_query->have_posts() ) : ?>
                                <?php $gift_query->the_post(); ?>
                                <li class="gift_second-item">
                                    <div class="menu_second-img">
                                    <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail(); ?>
                                            <?php endif; ?>
                                    </div>
                                    <div class="menu_second-body">
                                        <p class="p-gift-body-txt">
                                        <?php the_title();?>
                                        </p>
                                        <p class="p-gift-body-des">
                                        <?php the_field('price');?>
                                        </p>
                                    </div>
                                    <div class="p-gift-btn-wrapper">
                                        <a href="" class="gift-btn">
                                            ショップで確認する
                                        </a>
                                    </div>
                                </li>
                                
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="p-gift-attention">
                <ul class="p-gift-attentionFlex">
                    <li class="p-gift-attention-left">
                        <p class="p-gift-attention-TTL">
                            ラッピングは無料でお付けいたします。<br class="br-on"> お気軽にご相談ください。
                        </p>
                        <p class="p-gift-attention-txt">
                            <?php the_excerpt();?>
                        </p>
                    </li>
                    <li class="p-gift-attention-right">
                        <div class="p-attention-img">
                            <img src="<?php echo get_template_directory_uri() ?>/public/assets/img/img_wrapping@2x.png" alt="">
                            
                        </div>
                        
                    </li>
                </ul>
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
    <?php get_footer(); ?>