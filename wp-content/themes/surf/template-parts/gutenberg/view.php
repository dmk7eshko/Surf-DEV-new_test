<?php if (is_lang_en()): ?>
    </div>
    </div>
    <?php if ( ! wp_is_mobile()): ?>
        <div class="views view-<?php the_field('position') ?>">
            <img class="pos-<?php the_field('position') ?>" src="<?php the_field('img') ?>" alt="">
            <div class="container pos-<?php the_field('position') ?>">
                <div class="view-right <?php the_field('position') ?>">
                    <div class="v-title"><?php the_field('title') ?></div>
                    <div class="v-description"><?php the_field('description') ?></div>
                    <a href="<?php the_field('link') ?>" class="front-more">View case study</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="views">
            <img src="<?php the_field('img') ?>" alt="">
            <div class="container">
                <div class="view-right <?php the_field('position') ?>">
                    <div class="v-title"><?php the_field('title') ?></div>
                    <div class="v-description"><?php the_field('description') ?></div>
                    <a href="<?php the_field('link') ?>" class="front-more">View case study</a>
                </div>
            </div>
        </div>
        <!--	</div>-->
    <?php endif; ?>
    <div class="container">
        <div class="cjms">
<?php endif; 
if(is_lang_ru()): 
    $img = null;
    ( empty( $img ) )  && ( $img = get_field('img') );
    ( empty( $img ) )  && ( $img = '/wp-content/themes/surf/img/blog-stub.png' );
?>
<div class="view-case-block <?php the_field('position') ?>">
    <img src="<?= $img ?>" alt=""> 
    <div class="view-content">
        <div class="v-title"><?php the_field('title') ?></div>
        <div class="v-description"><?php the_field('description') ?></div>
        <?php
            $link = get_field( 'link' );
            if ( $link ):
        ?>
            <a href="<?= $link ?>" class="front-more color-<?= get_field('button_color') ? get_field('button_color') : 'orange' ?>">
                <?php
                    $btn = get_field('link_text');
                    echo $btn ? $btn : 'Подробнее';
                ?>
            </a>
        <?php
            endif;
        ?>
    </div>
</div>
<?php endif; ?>

            