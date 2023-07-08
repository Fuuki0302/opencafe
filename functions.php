<?php

function my_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ));
}
add_action("after_setup_theme", "my_setup");



function my_script_init() {

    // jQueryの登録
    wp_enqueue_script('jquery');

    //cssの読み込み
    wp_enqueue_style('swiper-style', 'https://unpkg.com/swiper/swiper-bundle.css');
    wp_enqueue_style("my", get_template_directory_uri() . "/public/assets/css/style.css", array(), filemtime(get_theme_file_path('/public/assets/css/style.css')), "all");

    // jsの読み込み
    wp_enqueue_script('swiper-script', 'https://unpkg.com/swiper/swiper-bundle.js', array( "jquery"), "", true);
    wp_enqueue_script("my", get_template_directory_uri() . "/public/assets/js/main.js", array("jquery"), filemtime(get_theme_file_path('/public/assets/js/main.js')), true);

}

    add_action("wp_enqueue_scripts", "my_script_init");


    // メニューの登録
    function my_menu_init() {
    register_nav_menus(
    array(
        'global' => 'ヘッダーメニュー',
        'drawer' => 'ドロワーメニュー',
    )
    );
    }
    add_action('init', 'my_menu_init');


    //独自関数

    function my_the_post_category($anchor = true) {
        $category = get_the_category();
        if($category[0]) {
            if($anchor) {
            echo '<a href="' . get_category_link($category[0]->term_id) . '">' . $category[0]->cat_name . '</a>';
            } else {
            echo $category[0]->cat_name;
            }
        }
        }

        /**
         * アーカイブタイトル書き換え
         */
        function my_archive_title($title) {

        if (is_category()) { // カテゴリーアーカイブの場合
            $title = single_cat_title('', false);
        } elseif (is_tag()) { // タグアーカイブの場合
            $title = single_tag_title('', false);
        } elseif (is_post_type_archive()) { // 投稿タイプのアーカイブの場合
            $title = post_type_archive_title('', false);
        } elseif (is_tax()) { // タームアーカイブの場合
            $title = single_term_title('', false);
        } elseif (is_author()) { // 作者アーカイブの場合
            $title = get_the_author();
        } elseif (is_date()) { // 日付アーカイブの場合
            $title = '';
            if (get_query_var('year')) {
            $title .= get_query_var('year') . '年';
            }
            if (get_query_var('monthnum')) {
            $title .= get_query_var('monthnum') . '月';
            }
            if (get_query_var('day')) {
            $title .= get_query_var('day') . '日';
            }
        }
        return $title;
        };
        add_filter('get_the_archive_title', 'my_archive_title');


        // Contact Form 7で自動挿入されるPタグ、brタグを削除
        add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
        function wpcf7_autop_return_false() {
            return false;
        } 


        /**
         * パンくずリスト変更
         */
        function foo_pop($trail)
        { {
            // お知らせ詳細ページで記事タイトルを削除
            if (is_single()) {
            unset($trail->trail[0]);
            array_keys($trail->trail);
            return;
            }
            // カテゴリーページでお知らせ（投稿タイプ）を削除
            else if (is_category()) {
            unset($trail->trail[1]);
            array_keys($trail->trail);
            return;
            }
        }
        }
        add_action('bcn_after_fill', 'foo_pop');



        //the_content,excerptの自動付与を防ぐ
        add_action('init', function() {
        remove_filter('the_excerpt', 'wpautop');
        remove_filter('the_content', 'wpautop');
        });
        add_filter('tiny_mce_before_init', function($init) {
        $init['wpautop'] = false;
        return $init;
        });


?>

