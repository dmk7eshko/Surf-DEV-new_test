<section class="testimonials-block">
    <div class="container">
		<div class="row">
        <h2 class="testimonials-block_title col-lg-5 col-12"><?= get_field('testimonials-title'); ?></h2>
		</div>
        <div class="heading">
            <div class="row">
                <p class="testimonials-block_sub-title heading-title col-12 col-md-12 col-lg-3"><?= get_field('testimonials-sub_title'); ?></p>
                <div class="heading-text col-12 col-md-12 col-lg-6 col-lg-offset-1">
                    <?= get_field('testimonials-text'); ?>
                </div>
            </div>
        </div>
        <div class="slider-container">
            <div class="slider row">
                <?php if (have_rows('testimonials-repeater')):
                            while (have_rows('testimonials-repeater')) : the_row();
                            $post_object = get_sub_field('testimonials-object');
                            $post = $post_object;
                                $name = get_field('name', $post->ID);
                                $position = get_field('position', $post->ID);
                                $photo = get_field('photo', $post->ID);
                                $text = get_field('text', $post->ID);
                                $link = get_field('link', $post->ID);
                                $logo = get_field('logo', $post->ID);
                                $project_url = get_field('url_project', $post->ID);
                                ?>
                <article class="testimonials-item col-md-4 col-sm-6">
                    <div class="testimonials-item_content">
                        <div class="testimonials-item_logo">
                            <?php if(!$logo) : ?>
                            <img src="https://surf.dev/wp-content/uploads/2023/04/Vector1.png">
                            <?php else : ?>
                            <img src="<?= $logo['url'] ?>">
                            <?php endif ?>
                        </div>

                        <div class="testimonials-item_text">
                            "<?= $text ?>"
                        </div>
                    </div>
                    <div class="testimonials-item_meta">
                        <div class="testimonials-item_meta-img">
                            <img src="<?= $photo['url'] ?>">
                        </div>
                        <div class="testimonials-item_meta-persone">
                            <div class="name<?php if($link) : ?> name-link<?php endif; ?>">
                                <?php if($link) : ?>
                                <a href="<?= $link ?>">
                                    <?= $name ?>
                                    <span class="linkedin">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                            <g clip-path="url(#clip0_1718_12302)">
                                                <path d="M0 0.378906V20.3789H20V0.378906H0Z" fill="#2834F8" />
                                                <path d="M6.66634 16.2123H4.16634V7.04562H6.66634V16.2123ZM5.41634 5.98895C4.61134 5.98895 3.95801 5.33062 3.95801 4.51895C3.95801 3.70728 4.61134 3.04895 5.41634 3.04895C6.22134 3.04895 6.87467 3.70728 6.87467 4.51895C6.87467 5.33062 6.22217 5.98895 5.41634 5.98895ZM16.6663 16.2123H14.1663V11.5423C14.1663 8.73562 10.833 8.94812 10.833 11.5423V16.2123H8.33301V7.04562H10.833V8.51645C11.9972 6.36145 16.6663 6.20228 16.6663 10.5798V16.2123Z" fill="white" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_1718_12302">
                                                    <rect y="0.378906" width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </span>
                                </a>
                                <?php else : ?>
                                <?= $name ?>
                                <?php endif; ?>
                            </div>
                            <div class="position"><?= $position ?></div>
                        </div>
                    </div>


                </article>
                <?php
							endwhile;
                        endif; ?>
            </div>
            <!--   <div class="slider-arrow left-arrow" onclick="previous();"></div>
  <div class="slider-arrow right-arrow" onclick="next();"></div> -->
        </div>
    </div>
</section>