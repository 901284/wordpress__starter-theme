<div class="card">
    <figure>
        <img src="<?php the_post_thumbnail_url(); ?>" height="200" width="200" alt="Post Image">
    </figure>
    <div class="card__content">
        <h3><?php the_title(); ?></h3>
        <p><?php the_time('F j, Y'); ?></p>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Read More &#187;</a>
    </div>
</div>