<?php if (is_lang_en()): ?>
    <div class="em-block">
        <div class="emojis">
            <?php if (have_rows('emoji')):
                while (have_rows('emoji')) : the_row();
                    $img  = get_sub_field('img');
                    $text = get_sub_field('text');
                    echo '<div class="emoji">
                                <img src="' . $img . '" alt="">
                                <span>' . $text . '</span>
                            </div>';
                endwhile;
            endif; ?>
        </div>
        <a href="<?php the_field('link') ?>" class="v-link">Explore our cases</a>
    </div>
<?php endif; ?>
<?php if (is_lang_ru()): ?>
    <div class="em-block">
        <div class="emojis">
            <?php
            if (have_rows('emoji')) {
                while (have_rows('emoji')) {
                    the_row();
                    
                    $img  = get_sub_field('img');
                    $text = get_sub_field('text');
                    ?>
                    <div class="emoji-content">
                        <img src="<?= $img ?>" alt="">
                        <span><?= $text ?></span>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
<?php endif; ?>

