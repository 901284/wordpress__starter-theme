<?php
        wp_head();
?>

<header>
    <div class="container">
        <?php
        // render site name  <?php echo get_bloginfo('name');
        if (function_exists('the_custom_logo')) {
            
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id);
            // print_r($logo);
        }
        ?>
        <?php
            $fallback = '/wp-content/themes/ithaca/assets/images/logo.svg';
                if ($logo) {
                    echo '<a href="/"><img src="'.$logo[0].'" width=75 height=70 /></a>';
                }  else {
                    echo '<a href="/"><img src="'.$fallback.'" width=75 height=70 /></a>';
                }
        ?>
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'header',
                    'container' => '',
                    'theme_location' => 'header',
                )
            );
        ?>
        <div class="menu-toggle">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar bar-3"></div>
        </div>
        <div class="mobile-menu">
            <div class="mobile-menu__items">
                <?php
                    wp_nav_menu(
                        array(
                            'menu' => 'header',
                            'container' => '',
                            'theme_location' => 'header',
                        )
                    );
                ?>
            </div>
        </div>
    </div>
</header>

<script>
    // hamburger and mobile toggle
    const menuToggle = document.querySelector('.menu-toggle');

    menuToggle.addEventListener('click', () => {
        document.body.classList.toggle('opened')
    }) 
</script>


