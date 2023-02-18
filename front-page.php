<?php
// page to overwrite home page if seperate to landing
// https://www.youtube.com/watch?v=-h7gOJbIpmo&t=354s, 1:40:53

$landing_hero = get_field( "hero_image" );
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="https://youtube.com/FollowAndrew">
    <link rel="stylesheet" href="style.css">
</head>

<body>
     <?php get_header(); ?>
        <?php
             if ($landing_hero) {
                 echo '<div class="hero__image"><img src="'.$landing_hero.'" width=150 height=70 /></div>';
             }
        ?>
    <div class="main container">
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