<div class="great">
    <h2><?php the_field('title') ?></h2>
    <?php the_field('description') ?>

    <div class="screens">

    <?php

        // Check rows exists.
        if( have_rows('screens') ):

            // Loop through rows.
            while( have_rows('screens') ) : the_row();

                // Load sub field value.
                $img = get_sub_field('img');
                $text = get_sub_field('text');
                // Do something...

                echo '<div class="screen"><div class="in-screen"><img src="'.$img.'"></div><span>'.$text.'</span></div>';

            // End loop.
            endwhile;

        // No value.
        else :
            // Do something...
        endif;

        ?>

    </div>


</div>
