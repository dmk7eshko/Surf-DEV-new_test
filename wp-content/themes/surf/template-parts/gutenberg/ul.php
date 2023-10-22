<div class="uls">
    <?php the_field('ul') ?>
</div>

<style>
    .uls ul li:after {
        content: '';
        width: 24px;
        height: 24px;
        background:url('<?php the_field('img') ?>');
        background-repeat: no-repeat;
        position: absolute;
        top: 2px;
        left: 0;
    }
</style>