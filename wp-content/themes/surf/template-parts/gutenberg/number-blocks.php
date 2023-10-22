<div class="number-blocks">
    <?php
        if( have_rows('blocks') ) {
            $i = 1;
            while( have_rows('blocks') ) {
                the_row();

                $title = get_sub_field('title');
                $desc = get_sub_field('desc');
                ?>
                    <div class="number-block">
                        <aside><?= $i ?>.</aside>
                        <div class="number-block-content">
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