<aside class="l-n__aside">
    <div class="p-article__wrapper">
        <div class="p-article__aside--ttl">
            最近の記事
        </div>
        <div class="p-aside__inner">
            <div class="p-aside__article">
            <?php $recent_query = new WP_Query(
                array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'orderby' => 'date',
                'order' => 'DESC',
                )
            );
            ?>


            <?php if ($recent_query->have_posts()) : ?>
                <?php while($recent_query->have_posts()) : ?>
                <?php $recent_query->the_post(); ?>

                <article class="p-n__left-in">
                <a class="sidebar_link" href="<?php the_permalink();?>">
                        <div class="p-n__img-in">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                        </div>
                        
                        <div class="p-n__body-in">
                            <div class="p-n__body--ttl-in">
                                <!-- 文字数制限 -->
                                <?php
                                $text = get_the_title();
                                $limit = 29;
                                if (mb_strlen($text) > $limit) {
                                    $title = mb_substr($text, 0, $limit);
                                    echo $title . '...';
                                } else {
                                    echo $text;
                                }
                            ?>
                            </div>
                            <p>
                                <time datetime="<?php the_time('c');?>"><?php the_time('Y-m-d'); ?></time>
                            </p>
                            
                        </div>
                    </a>
                </article>

                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>


    <div class="p-aside__ct">
        <div class="p-aside__ct--inner">
            <h3 class="p-ct__head">カテゴリ</h3>
            <ul class="p-ct__body">
                <?php
                $categories = get_categories(array('number' => 5)); // カテゴリーを5件まで取得
                foreach ($categories as $category) {
                    echo '<li class="p-ct__body--ttll"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
                }
                ?>
            </ul>
        </div>

    </div>

</aside>