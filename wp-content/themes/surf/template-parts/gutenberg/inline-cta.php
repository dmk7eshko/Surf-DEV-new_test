<?php
    $link = get_field( 'link_text' );
    ( empty($link) ) && ( $link = 'Explore more' );
?>
<div class="inline-cta-block">
    <?php
        if ( get_field( 'image' ) ) :
            $img = get_field( 'image' ); 
        ?>
            <div class="inline-cta-image">            
                <img src="<?= $img['url'] ?>" />
            </div>
    <?php
        endif;
    ?>
    <div class="inline-cta-content">
        <p><?= get_field( 'text' ) ?></p>
        <a href="<?= get_field('url') ?>">
            <?= $link ?>
        </a>
    </div>
</div>