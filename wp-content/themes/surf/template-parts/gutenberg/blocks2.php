<?php if (is_lang_en()): ?>
    <div class="blocks2">
        <?php
        if (have_rows('sec_blocks')):
            while (have_rows('sec_blocks')) : the_row();
                $ztitle = get_sub_field('ztitle');
                $zpods  = get_sub_field('zpods');
                
                echo '<div class="block2">
                <p>' . $ztitle . '</p>
                <span></span>  
                <div>' . $zpods . '</div> 
            </div>';
            endwhile;
        endif; ?>
    </div>
<?php endif; ?>

<?php if (is_lang_ru()): ?>
    <div class="bordered-blocks">
        <?php
        if (have_rows('sec_blocks')) :
            while (have_rows('sec_blocks')) :
                the_row();
                $title = get_sub_field('ztitle');
                $desc  = get_sub_field('zpods');
                ?>
                <div class="border-block">
                    <?php
                    if ( ! empty($title)) {
                        echo '<h4>' . $title . '</h4>';
                    }
                    ?>
                    <p><?= $desc ?></p>
                </div>
            <?php
            endwhile;
        endif;
        ?>
    </div>
<?php endif; ?>

