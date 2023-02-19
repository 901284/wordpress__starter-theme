<?php
// single post page
?>

<?php get_header(); ?>
    <div class="hero__image">
        <img src="<?php the_post_thumbnail_url(); ?>" height="200" width="200" alt="Post Image">
    </div>
    <div class="main container">
        <h1><?php the_title(); ?></h1>    
        <?php
                    if( have_posts() ) {
                        while ( have_posts() ) {
                            the_post();
                            // the_content();
                            get_template_part( 'template-parts/content-post');
                        }
                    }
        ?>
    </div>
<?php get_footer(); ?>
