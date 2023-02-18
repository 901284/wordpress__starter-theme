<?php get_header(); ?>
    <div class="container">
        <?php
                    if( have_posts() ) {
                        // while we have posts...
                        while ( have_posts() ) {
                            // render the post
                            the_post();
                            the_content();
                        }
                    }
        ?>
    </div>
<?php get_footer(); ?>
