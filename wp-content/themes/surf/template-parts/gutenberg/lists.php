<div class="listes">
        
    <?php

        // Check rows exists.
        if( have_rows('lists') ):

            // Loop through rows.
            while( have_rows('lists') ) : the_row();

                // Load sub field value.
                $title = get_sub_field('title');
                $ul_block = get_sub_field('ul_block');
                // Do something...

                echo '<div class="ilist">
                    <span>'.$title.'</span>    
                    '.$ul_block.'
                </div>';

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;

    ?>

</div>