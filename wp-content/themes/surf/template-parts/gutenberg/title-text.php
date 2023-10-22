<?php
$parent = get_field('title-and-text-block-1-3');
?>
<section class="section section-title_text">
    <div class="block-title">
         <h2 class="section-title services-title"><?php echo $parent['title']; ?></h2>
    </div>
    <div class="block-text">
            <?php echo $parent['text']; ?>
    </div>
</section>
