<?php
// archive page
$hero_image = get_field( "hero_image" ); 
?>

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
            <h1><?php wp_title(''); ?></h1>
            <?php get_search_form(); ?>
            <div class="card__grid">
                <?php
                            if( have_posts() ) {
                                // while we have posts...
                                while ( have_posts() ) {
                                    // render the post
                                    the_post();
                                    get_template_part('template-parts/content-archive');
                                }
                            }
                ?>
            </div>
            <?php the_posts_pagination(); ?>
        </div>
<?php get_footer(); ?>
