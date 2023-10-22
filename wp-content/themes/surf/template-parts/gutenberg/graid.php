<div class="workshops">
    <?php

        // Check rows exists.
        if( have_rows('workshop') ):

            $s = 0;

            // Loop through rows.
            while( have_rows('workshop') ) : the_row();

                // Load sub field value.
                $wzag = get_sub_field('wzag');
                $wopis = get_sub_field('wopis');
                $s++;
                // Do something...

                echo '<div class="workshop">
                            <span style="border:0;">0'.$s.'.</span>
                            <div class="works">
                                <div class="wzag">'.$wzag.'</div>
                                <div class="wopis">'.$wopis.'</div>
                            </div>
                      </div>';

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;

    ?>
</div>