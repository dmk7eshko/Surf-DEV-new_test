<div class="links-block">

        <?php

            // Check rows exists.
            if( have_rows('linsk') ):

                // Loop through rows.
                while( have_rows('linsk') ) : the_row();

                    // Load sub field value.
                    $link = get_sub_field('link');
                    $title = get_sub_field('title');
                    // Do something...
                    echo '<a href="'.$link.'" class="l-block">
                        '.$title.'
                    </a>';
                // End loop.
                endwhile;

            // No value.
            else :
                // Do something...
            endif;

        ?>
   
</div>