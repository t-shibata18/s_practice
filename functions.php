<?php
// テーマのCSSを読み込む
function spractice_enqueue_styles() {
    wp_enqueue_style(
        'spractice-style', // ハンドル名（自由に付けてOK）
        get_stylesheet_uri() // style.css を読み込む
    );
}
add_action('wp_enqueue_scripts', 'spractice_enqueue_styles');
