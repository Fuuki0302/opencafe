
<?php get_header(); ?>

<div class="l-firstview__wrapper">
            <div class="l-firstView l-news__View">
                <div class="l-firstView__inner">
                    <div class="p-concept__header--box">
                        <h1 class="p-concept__header--ttl">
                            NEWS
                        </h1>
                        <span class="p-concept__header--txt">
                            お知らせ
                        </span> 
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="p-news_page">
        <?php if(function_exists('bcn_display')) : ?>
            <ul class="breadcrumb w_news-breadcrumb"  itemscope itemtype="https://schema.org/BreadcrumbList">
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
            
            <div class="p-news__page--inner">
                <div class="p-news__page--top">
                    <figure class="p-news__page-img">
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    </figure>
                    <h1 class="p-news__page--ttl">
                        <?php the_title();?>
                    </h1>
                    <ul class="p-news__page-flex">
                        <li class="p-news__page-time">
                            <a href="<?php the_time('c'); ?>" class="p-news__page-time">2<?php the_time('Y-m-d'); ?></a>
                        </li>
                        <li >
                        <?php $category = get_the_category(); ?>
                                <?php if ($category[0]) : ?>

                            <a href="<?php echo get_category_link($category[0]->trem_id); ?>" class="np-c">
                            <?php echo $category[0]->cat_name; ?>
                            </a>
                            <?php endif;?>
                        </li>
                    </ul>
                    <p class="p-new__page--txt">
                        ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。ダミー_国内外から賞賛を受けた選りすぐりのデザイナーが集結し、ガーデニングの設計・建築から料理まで、あらゆる空間が誕生。
                    </p>
                </div>
                <div class="p-news__page-body">
                    <?php the_content();?>
                    <div class="p-news__page-post--content">
                        
                        <div class="page-pre">
                            <?php if (get_previous_post()):?>
                                <?php previous_post_link('%link', '前の記事');?>
                            <?php endif; ?>    
                        </div>

                        <div class="page-archive"> <a href="/news">記事一覧</a></div>

                        <?php if (get_next_post()): ?>
                            <div class="page-next"><?php next_post_link('%link', '次の記事'); ?></div>
                        <?php endif; ?>

                    </div>



                </div>
                <div class="p-news__page-article">
                    <h2 class="p-news__page-article--ttl">
                        関連記事
                    </h2>
                    <div class="p-news__page-article--inner">

                        <?php if(has_category() ) {
                            $cats =get_the_category();
                            $catkwds = array();
                            foreach($cats as $cat){
                                $catkwds[] = $cat->term_id;
                            }
                        } ?>

                        <?php $args = array(
                            'post_type' => 'post',
                            'posts_per_page' => '6',
                            'post__not_in' =>array( $post->ID ),
                            'category__in' => $catkwds,
                            'orderby' => 'rand'
                            );
                            $my_query = new WP_Query( $args );?>
                                <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                                    <article class="p-news__page-left">
                                        <a href="<?php the_permalink();?>">
                                            <div class="p-news__page-img">
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
                                            <div class="p-news__page-body--inner">
                                                <div class="p-news__page-body--ttl">
                                                <?php the_title(); ?>
                                                </div>
                                                <p>
                                                    <time datetime="<?php the_time('c')?>"><?php the_time('Y-m-d')?></time>
                                                </p>
                                            </div>
                                        </a>
                                    </article>
                                <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                </div>
                </div>
            </div>
        </div>

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