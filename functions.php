<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );

    //タイトル出力
    function wphamburger_title( $title ) {
        if ( is_front_page() && is_home() ) { //トップページなら
            $title = get_bloginfo( 'name', 'display' );
        } elseif ( is_singular() ) { //シングルページなら
            $title = single_post_title( '', false );
        }
        return $title;
    }
    add_filter( 'pre_get_document_title', 'wphamburger_title' );

    function wphamburger_script() {
        wp_enqueue_style( 'mplus1p', '//fonts.googleapis.com/earlyaccess/mplus1p.css', array() );
        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array(), '4.7.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'custom_script', get_template_directory_uri() . '/script.js', );
    }
    add_action( 'wp_enqueue_scripts', 'wphamburger_script' );


//カスタムメニュー
    register_nav_menus( //メニュー機能をオンにする
    array(
    'place_global' => 'グローバル',  //“メニュー英語名” =>”メニュー名”,
    'place_utility' => 'ユーティリティ',
    'cateogrymenu' => 'サイドメニュー',
    'place_footer' => 'フッター',
    )
    );

//アイキャッチ画像を有効化
add_theme_support('post-thumbnails');
add_image_size('thumbside', 300, 300, false);


// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
    if ('post' == $post_type) {
        $args['rewrite'] = true; // リライトを有効にする
        $args['has_archive'] = 'blog'; // 任意のスラッグ名
    }
    return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);

?>
