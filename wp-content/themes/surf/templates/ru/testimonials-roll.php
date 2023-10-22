<div class="testimonials-roll swiper-container">
    <div class="testimonials-pagination">
        <div class="testimonials-prev js-testimonials-prev">
            <svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M32.0454 10.9605H0.999954M0.999954 10.9605L8.64569 1M0.999954 10.9605L8.64569 20.0909" stroke="black" stroke-opacity="0.9" stroke-width="1.5"/>
            </svg>
        </div>
        <div class="testimonials-next js-testimonials-next">
            Ещё
            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="26" fill="none">
                <path stroke="#000" d="M10 13h25m0 0l-3.9286-6M35 13l-3.9286 6"/>
            </svg>
        </div>
    </div>
    <div class="testimonials">
        <div class="swiper-wrapper">
            <?php
                // Check rows exists.
                if( have_rows('testimonials') ):
                    // Loop through rows.
                    while( have_rows('testimonials') ) : the_row();

                        // Load sub field value.
                        $name = get_sub_field('name');
                        $doljnost = get_sub_field('doljnost');
                        $img = get_sub_field('img');
                        $test = get_sub_field('test');
                        $logo = get_sub_field('logo');
                    ?>
                        <div class="testimonial with-spoiler swiper-slide">
                            <img class="client-logo" src="<?= $logo ?>" alt="">
                            <div class="testimonial-text">
                                <?= $test ?>
                            </div>
                            <div class="testimonial-photo">
                                <img src="<?= $img ?>" alt="">
                                <div class="testimonial-name">
                                    <span><?= $name ?></span>
                                    <p><?= $doljnost ?></p>
                                </div>
                            </div>
                        </div>
                    <?php
                    // End loop.
                    endwhile;
                endif;
            ?>
        </div>
    </div>
</div>