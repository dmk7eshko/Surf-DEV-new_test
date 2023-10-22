<div class="faqs">

    <?php

    // Check rows exists.
    if( have_rows('faq') ):

        // Loop through rows.
        while( have_rows('faq') ) : the_row();

            // Load sub field value.
            $question = get_sub_field('question');
            $answer = get_sub_field('answer');
            // Do something... ?>

            <div class="faq">
                <div class="question"><?= $question ?> <span></span></div>
                <div class="answer"><?= $answer ?></div>
            </div>
            

       <?php  // End loop.
        endwhile;

    // No value.
    else :
        // Do something...
    endif;

    ?>

</div>