<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage Surf
 */ 
?>
<div class="case case-small">
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('caseleft') ?>
    </a>
    <a class="case-name" href="<?php the_permalink(); ?>">
        <?php the_title() ?>
    </a>
    <div class="case-desc"><?php the_field('top-title') ?></div>
</div>