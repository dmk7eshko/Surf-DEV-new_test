<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage Surf
 */ 
?>
<article id="post-<?php the_ID(); ?>" class="categori-post"> 
    <div class="art-left">
        <?php the_post_thumbnail('sigler') ?>
    </div>
    <div class="art-right">
        <div class="meta-cat"><?php the_category(',') ?></div>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
    </div>

</article>