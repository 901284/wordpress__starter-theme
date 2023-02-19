<?php
// 404 page
$hero_image = get_field( "hero_image" ); 
?>

<body>
    <?php get_header(); ?>
    <?php
        $hero_fallback = '/wp-content/themes/ithaca/assets/images/placeholder.webp';
        if ($hero_image) {
            echo '<div class="hero__image"><img src="'.$hero_image.'" width=150 height=70 /></div>';
        } else {
            echo '<div class="hero__image"><img src="'.$hero_fallback.'" width=150 height=70 /></div>';
        }
    ?>
    <div class="main container">
        <h1>404: Page not found.</h1>
        <p>It appears this page doesn't exist. Click <a href="/">here</a> to return to the homepage or try search for it below.</p>
        <?php get_search_form(); ?>
    </div>
    <?php get_footer(); ?>
</body>