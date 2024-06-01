<?php

// 各種ファイルの読み込み
function enqueue_scripts() {
    // CSSファイル
    wp_enqueue_style('main', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

function add_menus() {
    register_nav_menus(array(
        'header_nav' => 'ヘッダーに表示されるナビゲーション'
    ));
}
add_action('after_setup_theme', 'add_menus');