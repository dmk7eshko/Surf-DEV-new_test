<div class="flex-block-wrapper">
    
    <?php 
        if ( get_field( 'title' ) ): 
    ?>
        <h2 class="front-section-title container">
            <?php the_field( 'title' ) ?>
        </h2>
    <?php
        endif;
    ?>

    <div class="flex-block container <?php echo $block['className'] ?>">
        <?php
            // Check rows exists.
            if( have_rows('blocks') ):

                // Loop through rows.
                while( have_rows('blocks') ) : 
                    the_row();

                    // Load sub field value.
                    $title = get_sub_field('title');
                    $description = get_sub_field('description');
                    $link = get_sub_field( 'link' );
                    $text = get_sub_field( 'link_text' );

                    ?>

                    <div class="fl-block collapsed">
                        <h3>
                            <?php echo $title ?>
                        </h3>
                        <p>
                            <?php echo $description ?>
                        </p>
                        <?php if ( !empty($link) ): ?>
                            <a href="<?php echo $link ?>" class="front-more">
                                <?php echo $link_text ? $link_text : 'Explore more' ?>
                            </a>
                        <?php endif ?>
                    </div>

                    <?php
                // End loop.
                endwhile;
            endif;

        ?>


        </div>
</div>


