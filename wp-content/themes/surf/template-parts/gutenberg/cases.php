<?php
    $bg = '';
    $class_bg = '';
	$class_cases = '';
	$class_margins = '';

    if (get_field('cases_bg')){
        $class_bg = ' cases--bg';
        $bg = 'style="background-color:' . get_field('cases_bg') . '"';
    }

	if (get_field('cases_grid')){
		$class_cases = ' front-cases--grid';
	}

	if (get_field('cases_margins')){
		$class_margins = ' cases--tiny';
	}
?>

<section class="cases<?php echo $class_bg . $class_margins; ?>" <?php echo $bg; ?>>
	<div class="container">
		<?php if ( get_field( 'title' ) ) : $center = get_field( 'title_center' ); ?>
            <div class="front-section-title">
                <h2<?php echo $center ? ' style="text-align: center"' : ''; ?>><?php the_field( 'title' ); ?></h2>
                <?php if ( $cases = get_field( 'cases_desc' ) ) : ?>
                    <p><?php echo $cases; ?></p>
                <?php endif; ?>
            </div>
        <?php endif;
        if (isset($_GET['test'])) :
            if ($similar_cases = CrossTagsController::getSimilarPosts(get_the_ID(), 'cases', 3)) : ?>
                <ul class="front-cases">
                    <?php foreach ($similar_cases as $similar_case) :
                        $img = get_the_post_thumbnail($similar_case, 'caseleft');
                    ?>
                        <li class="front-case">
                            <a href="<?php echo get_the_permalink($similar_case)?>" class="case-link" title="<?php echo get_the_title($similar_case)?>">
                                <div class="front-case-image">
                                    <img src="<?php echo $img?>" alt="">
                                </div>
                                <div class="front-case-content">
                                    <div class="front-case-title">
                                        <h3><?php echo get_the_title($similar_case); ?></h3>
                                    </div>
                                    <div class="front-case-desc">
                                        <?php echo get_field('top-title', $similar_case); ?>
                                    </div>
                                    <span class="front-more">See case</span>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif;
        else : ?>
            <ul class="front-cases<?php echo $class_cases; ?>">
                <?php if (have_rows( 'cases' )):
                    while (have_rows( 'cases')) :
                        the_row();
                        $img           = get_sub_field( 'img' );
                        $title         = get_sub_field( 'firstt' );
                        $description   = get_sub_field( 'secondt' );
                        $case_link      = get_sub_field( 'linkcase' );
                        $caseLink_text = get_sub_field( 'linkcase_text' );
                        $case_text     = $caseLink_text ? $caseLink_text : 'See case';
                    ?>
                        <li class="front-case">
                            <a href="<?php echo $case_link; ?>" class="case-link" title="<?php echo $title; ?>">
                                <div class="front-case-image">
                                    <img src="<?php echo $img; ?>" alt="">
                                </div>
                                <div class="front-case-content">
                                    <div class="front-case-title"><h3><?php echo $title; ?></h3></div>
                                    <div class="front-case-desc"><?php echo $description; ?></div>
                                    <span class="front-more"><?php echo $case_text; ?></span>
                                </div>
                            </a>
                        </li>
                    <?php endwhile;
                endif; ?>
            </ul>
        <?php endif;
		if ( get_field( 'link' ) ) :
			$link = get_field( 'link' );
			$link_text = get_field( 'link_text' );
			$url = $link ? $link : '/cases/';
			$default = get_lang() === 'en' ? 'More case</br> studies' : 'Смотреть больше</br> кейсов';
			$text = $link_text ? $link_text : $default;
        ?>
			<div class="get-more">
				<div class="more">
					<a href="<?php echo $url; ?>"><?php echo $text; ?>
						<img src="<?= get_template_directory_uri() . '/assets/img/more.svg' ?>" alt=""> </a>
				</div>
			</div>
		<?php endif; ?>
	</div>
</section>




