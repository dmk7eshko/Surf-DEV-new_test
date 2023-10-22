
<div class="blocks3">

<?php

// Check rows exists.
if( have_rows('three_blocks') ):

    // Loop through rows.
    while( have_rows('three_blocks') ) : the_row();

        // Load sub field value.
        $titled = get_sub_field('titled');
        // Do something...

        echo '<div class="block3">
                <span></span>  
                <div>'.$titled.'</div> 
            </div>';

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;

?>

</div>