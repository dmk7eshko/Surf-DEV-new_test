<div class="image-blocks">
    <?php
        if( have_rows('blocks') ) {
            $i = 1;
            while( have_rows('blocks') ) {
                the_row();

                $img = get_sub_field('image');
                $title = get_sub_field('title');
                $desc = get_sub_field('desc');
                ?>
                    <div class="image-block">
                        <aside>
                            <img src="<?= $img ?>" alt="<?= $title ?>" />
                        </aside>
                        <div class="image-block-content">
                            <h4><?= $title ?></h4>
                            <p><?= $desc ?></p>
                        </div>
                    </div>
                <?php
                $i++;
            }
        }
    ?>
</div>