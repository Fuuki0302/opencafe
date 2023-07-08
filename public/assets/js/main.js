jQuery(function($) {
    // Swiperの記述
const swiper = new Swiper('.swiper-container', {
    // スライドメニューの表示方法
    direction: 'horizontal',
    loop: true,
    autoHeight: true,
    allowTouchMove: false, 
    effect: "fade", // フェード切り替え
    speed: 2000, // 2秒かけてフェード
    
    autoplay: {
        delay: 4000,
        disableOnInteraction: false,
    },
    
    // スライドのページネーション表示
    pagination: {
        el: '.swiper-pagination',
        clickable: true //この行を追記する
    },
    
    });
    
    //btn-openの記述
    $(function() {
        $('#js-header-btn').click(function() {
            $('.p-menu__btn-line').toggleClass('btn-open');
            $('.c-header__btn').toggleClass('btn-open');
            $('#js-right').toggleClass('btn-open')
        })
    });
    
    //Totopボタン 上部へスクロール
    $("#js-to_top").click(function () {
        $("body,html").animate({scrollTop: 0}, 500);
        return false;
    });
    
    // form関連
    $(function() {
        //始めにjQueryで送信ボタンを無効化する
        $('.send').prop("disabled", true);
        
        //始めにjQueryで必須欄を加工する
        $('form input:required, form textarea:required').each(function () {
            $(this).prev("label").addClass("required");
        });
        
        //入力欄の操作時
        $('form input:required, form textarea:required').change(function () {
            //必須項目が空かどうかフラグ
            let flag = true;
            //必須項目をひとつずつチェック
            $('form input:required, form textarea:required').each(function(e) {
                //もし必須項目が空なら
                if ($('form input:required, form textarea:required').eq(e).val() === "") {
                    flag = false;
                }
            });
            //全て埋まっていたら
            if (flag) {
                //送信ボタンを復活
                $('.send').prop("disabled", false);
            }
            else {
                //送信ボタンを閉じる
                $('.send').prop("disabled", true);
            }
        });
    });
    /// 送信切り替えボタン////
    $(document).ready(function() {
        $("#submit-button").on("click", function() {
            window.location.href = "";
        });
    });


    //ボタン切り替え 色 メニュー表のジャンル切り替え
    jQuery(document).ready(function($) {
        $('.p-menu__btn--link').click(function() {
            $('.p-menu__btn--link').removeClass('is-btn');
            $(this).addClass('is-btn');
        });
        });
    


        //ボタン切り替え 色 メニュー表のジャンル切り替え
    jQuery(document).ready(function($) {
        $('.page-numbers').click(function() {
            $('.page-numbers').removeClass('clicked ');
            $(this).addClass('clicked ');
        });
        });

});


