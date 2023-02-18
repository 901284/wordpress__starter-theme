<?php get_header(); ?>
    <?php
                if( have_posts() ) {
                    // while we have posts...
                    while ( have_posts() ) {
                        // render the post
                        the_post();
                        get_template_part( 'template-parts/content-post');
                    }
                }
    ?>
<?php get_footer(); ?>
