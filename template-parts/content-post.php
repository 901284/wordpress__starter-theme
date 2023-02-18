
<div class="main container">
        <?php the_date(); ?>
        <?php the_tags('<span class="tag"><i class="fa fa-tag"></i>', '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>'); ?>
        <span class="comment"><a href="#comments"><i class="fa fa-comment"></i><?php comments_number(); ?></a></span>
        <?php the_content(); ?>
</div>

<?php
$categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
) );