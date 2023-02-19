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
        <h1>Search Results</h1>
            <div class="card__grid">
                <?php
                if (have_posts() ) {
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content-archive');
                    }
                }
                ?>
            </div>
        <?php the_posts_pagination(); ?>
    </div>
    <?php get_footer(); ?>