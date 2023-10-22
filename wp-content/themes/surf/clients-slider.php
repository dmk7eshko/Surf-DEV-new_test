<?php
    $duration = count($clients_slides) * 3;
?>
<?php if (count($clients_slides) > 4) { ?>
<style>
    .clients-slider .clients-slider-inner {
        animation-duration: <?= $duration ?>s;
    }
    .clients-slider .client-slide {
        transition-duration: <?= $duration * 5 ?>s;
    }
    .clients-slider:hover .client-slide {
        transition-duration: <?= $duration ?>s;
    }
    @media screen and (max-width:1024px) {
        .client-slide {
            display: none;
        }
        <?php
            for ($i=0;$i<6;$i++){
                echo '.client-slide:nth-child(' . ( $i + 1 ) . '){ display: flex; }';
            }
        ?>
    }
</style>
<?php } else { ?>
    <style>
        @media screen and (max-width:1024px) {
            .client-slide {
                display: none;
            }
        <?php
            for ($i=0;$i<count($clients_slides);$i++){
                echo '.client-slide:nth-child(' . ( $i + 1 ) . '){ display: flex; }';
            }
        ?>
        }
    </style>
<?php } ?>
<div class="clients-slider <?= $block['className'] ?>">
    <div class="clients-slider-inner">
        <?php

            for ($i = 0; $i < 3; $i++) {
                foreach ( $clients_slides as $slide ):
                    if ( empty($slide['link'])):
                ?>    
                    <div class="client-slide">
                <?php else:?>    
                    <a href="<?= $slide['link'] ?>" class="client-slide">
                <?php endif; ?>
                        <div class="client-slide-image">
                            <img src="<?= $slide['img']['url'] ?>" alt="<?= $slide['title'] ?>" />
                        </div>
                        <div class="client-slide-content" style="background-color: <?= $slide['bg'] ?>;color: <?= $slide['text'] ?>">
                            <h4>
                                <?= $slide['title'] ?>
                            </h4>
                            <p>
                                <?= $slide['desc'] ?>
                            </p>
                        </div>
                <?php
                    if ( empty($slide['link'])) {
                        echo '</div>';
                    } else {
                        echo '</a>';
                    }
                endforeach;
            }
        ?>
    </div>
</div>