
<div class="flex-tables">
<div class="flex-table with_border">


<?php
//                $count = count(get_field('table'));
        
                // Check rows exists.
                if( have_rows('table') ):
                    // Loop through rows.
                    while( have_rows('table') ) : the_row();

                        // Load sub field value.
                        $title = get_sub_field('title');
                        $ul = get_sub_field('ul');
                        // Do something...

                        echo '<div class="fl-table">
                                    <span>'.$title.'</span>
                            </div>';

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;

        ?>
</div>
<div class="flex-table">

        <?php
//                $count = count(get_field('table'));
        
                // Check rows exists.
                if( have_rows('table') ):
                    // Loop through rows.
                    while( have_rows('table') ) : the_row();

                        // Load sub field value.
                        $title = get_sub_field('title');
                        $ul = get_sub_field('ul');
                        // Do something...

                        echo '<div class="fl-table">
                                    '.$ul.'
                            </div>';

                    // End loop.
                    endwhile;

                // No value.
                else :
                    // Do something...
                endif;

        ?>



</div>

<style>
    .fl-table {
        flex-basis:calc(100% / <?php echo $count; ?>);
    }
</style>

</div>