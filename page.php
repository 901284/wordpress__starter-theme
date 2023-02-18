<?php
// display single blog post
$hero_image = get_field( "hero_image" ); 
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="https://youtube.com/FollowAndrew">    
    <link rel="shortcut icon" href="images/logo.png">    
</head> 

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
        <h1><?php the_title(); ?></h1>
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
</body>
</html> 