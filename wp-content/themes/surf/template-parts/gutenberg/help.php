<div class="helps">
    <?php

        // Check rows exists.
        if( have_rows('help') ):

            // Loop through rows.
            while( have_rows('help') ) : the_row();

                // Load sub field value.
                $helptitle = get_sub_field('helptitle');
                $helpdesc = get_sub_field('helpdesc');

                echo '<div class="help">
                    <div class="helptitle">'.$helptitle.'</div>
                    <div class="helpdesc">'.$helpdesc.'</div>
                </div>';
                // Do something...

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;

    ?>
</div>