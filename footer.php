<footer>
    <div class="container">
        <?php
            if (function_exists('the_custom_logo')) {

                $custom_logo_id = get_theme_mod('custom_logo');
                $logo = wp_get_attachment_image_src($custom_logo_id);
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
                        'menu' => 'footer',
                        'container' => '',
                        'theme_location' => 'footer',
                    )
                );
        ?>
    </div>
</footer>