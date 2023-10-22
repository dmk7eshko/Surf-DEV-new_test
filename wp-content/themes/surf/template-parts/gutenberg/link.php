<?php
$zagolovok = get_field('zagolovok_blocka');

if (have_rows('link')):
    echo '<div class="recommeds">
        <div class="recom-name">' . $zagolovok . '</div>';
    while (have_rows('link')) : the_row();
        $name    = get_sub_field('zagolovok_ssilki');
        $address = get_sub_field('address_ssilki');
        
        if (is_lang_en()):
            echo '<div class="recom-link"><a href="' . $address . '">' . $name . '</a> <img src="' . THEME . '/assets/img/recom.svg' . '" alt=""></div>';
        endif;
        if (is_lang_ru()):
            echo '<div class="recom-link"><a href="' . $address . '">' . $name . '</a></div>';
        endif;
    endwhile;
    echo '</div>';
endif;
?>