<?php if (get_field('code_bg')): ?>
    <div class="fullimg">
        <div style="<?php the_field('code_bg') ?>" class="full-after"></div>
        <?php if (wp_is_mobile()): ?>
            <img src="<?php the_field('fullmobile') ?>" alt="">
        <?php else: ?>
            <img src="<?php the_field('fullimg') ?>" alt="">
        <?php endif; ?>
    </div>
<?php endif; ?>