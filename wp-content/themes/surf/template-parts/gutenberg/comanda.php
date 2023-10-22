<div class="comanders">
    <?php
    if (have_rows('com')):
        while (have_rows('com')) : the_row();
            $photo = get_sub_field('photo');
            $cname = get_sub_field('cname');
            $cdol  = get_sub_field('cdol');
            $cdsec = get_sub_field('cdsec');
            
            $photo = $photo ? '<img src="' . $photo . '" alt="">' : '';
            
            echo '
                    <div class="comander">
                        ' . $photo . '
                        <div class="comander-right">
                            <div class="cname">' . $cname . '</div>
                            <div class="cdol">' . $cdol . '</div>
                            <div class="cdsec">' . $cdsec . '</div>
                        </div>
                    </div>
                ';
            
            // End loop.
        endwhile;
    endif;
    ?>
</div>