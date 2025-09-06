<?php get_header(); ?>
<main>
    <h1>テーマ反映テスト</h1>
    <?php
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    } else {
        echo "<p>コンテンツがありません。</p>";
    }
    ?>
</main>
<?php get_footer(); ?>
