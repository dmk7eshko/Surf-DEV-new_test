<?php $grid = get_field('reviews_grid'); ?>
<section class="reviews<?= $grid ? ' reviews--grid' : ''; ?>">
	<div class="container">
		<?php if (get_field('reviews_title')) : ?>
			<div class="front-section-title">
				<h2><?php echo get_field('reviews_title'); ?></h2>
			</div>
		<?php endif; ?>

            <?php if (isset($_GET['test'])) : ?>
                <div class="swiper reviews__slider js-reviews">
                    <?php if ($similar_reviews = CrossTagsController::getSimilarPosts(get_the_ID(), 'reviews', 6)) :
                        $spoiler = get_field('reviews__spoiler');
                    ?>
                        <?php foreach ($similar_reviews as $similar_review) :
                            $name = get_field('name', $similar_review);
                            $position = get_field('position', $similar_review);
                            $photo = get_field('photo', $similar_review);
                            $text = get_field('text', $similar_review);
                            $url = get_field('url', $similar_review);
                            $logo = get_field('logo', $similar_review);
                            $project_url = get_field('url_project', $similar_review);
                        ?>
                            <div class="review<?php echo $spoiler ? ' with-spoiler': ''; ?> swiper-slide">
                                <?php if ($logo) : ?>
                                    <div class="review__logo">
                                        <img src="<?php echo $logo['url']; ?>" alt="">
                                    </div>
                                <?php endif; ?>

                                <div class="review__text"><?php echo $text; ?></div>

                                <div class="review__image">
                                    <?php if ($photo) : ?>
                                        <div class="picture">
                                            <img src="<?php echo $photo['url']?>" alt="">
                                        </div>
                                    <?php endif; ?>

                                    <div class="review__name">
                                        <span><?php echo $name ?></span>
                                        <p><?php echo $position ?></p>

                                        <?php if ($url) : ?>
                                            <a href="<?php echo $url['url'] ?>"
                                               target="<?php echo $url['target'] ?>"><?php echo $url['title'] ?></a>
                                        <?php endif; ?>
                                    </div>
                                </div>

                                <?php if ($project_url) : ?>
                                    <a href="<?php echo $project_url; ?>" class="review__link front-more">
                                        <?php echo is_lang_en() ? "Project case" : "Кейс по проекту"; ?>
                                    </a>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>

                        <?php if (count($similar_reviews) > 1) : ?>
                            <div class="testimonials-pagination">
                                <div class="testimonials-prev js-reviews-prev">
                                    <svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M32.0454 10.9605H0.999954M0.999954 10.9605L8.64569 1M0.999954 10.9605L8.64569 20.0909"
                                            stroke="black" stroke-opacity="0.9" stroke-width="1.5"/>
                                    </svg>
                                </div>

                                <div class="testimonials-next js-reviews-next">
                                    <?php echo is_lang_en() ? 'Read next' : 'Ещё'?>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="44" height="26" fill="none">
                                        <path stroke="#000" d="M10 13h25m0 0l-3.9286-6M35 13l-3.9286 6"/>
                                    </svg>
                                </div>
                            </div>
                        <?php endif; ?>

                    <?php endif; ?>
                </div>
            <?php else : ?>
                <div class="swiper reviews__slider<?= $grid ? ' reviews__slider--full' : ''; ?> js-reviews">

                    <div class="swiper-wrapper">
                        <?php if (have_rows('reviews')):
                            $spoiler = get_field('reviews__spoiler');
                            while (have_rows('reviews')) : the_row();
                                $name = get_sub_field('name');
                                $position = get_sub_field('position');
                                $photo = get_sub_field('photo');
                                $text = get_sub_field('text');
                                $url = get_sub_field('url');
                                $logo = get_sub_field('logo');
                                $project_url = get_sub_field('url_project');

								if ($grid) : ?>
									<div class="review review--grid swiper-slide">
										<div class="review__image">
											<?php if ($photo) : ?>
												<div class="picture">
													<img src="<?= $photo ?>" alt="">
												</div>
											<?php endif; ?>
											<div class="review__name">
												<span><?= $name ?></span>
												<p><?= $position ?></p>
												<?php if ($url) : ?>
													<a href="<?= $url['url'] ?>"
													   target="<?= $url['target'] ?>"><?= $url['title'] ?></a>
												<?php endif; ?>
											</div>
										</div>
										<div class="review__text"><?= $text; ?></div>
										<?php if ($logo) : ?>
											<div class="review__logo">
												<img src="<?= $logo['url']; ?>" alt="">
											</div>
										<?php endif; ?>
									</div>
								<?php else : ?>
	                                <div class="review<?= $spoiler ? ' with-spoiler': ''; ?> swiper-slide">
	                                    <?php if ($logo) : ?>
	                                        <div class="review__logo">
	                                            <img src="<?= $logo['url']; ?>" alt="">
	                                        </div>
	                                    <?php endif; ?>
	                                    <div class="review__text"><?= $text; ?></div>
	                                    <div class="review__image">
	                                        <?php if ($photo) : ?>
	                                            <div class="picture">
	                                                <img src="<?= $photo ?>" alt="">
	                                            </div>
	                                        <?php endif; ?>
	                                        <div class="review__name">
	                                            <span><?= $name ?></span>
	                                            <p><?= $position ?></p>
	                                            <?php if ($url) : ?>
	                                                <a href="<?= $url['url'] ?>"
	                                                   target="<?= $url['target'] ?>"><?= $url['title'] ?></a>
	                                            <?php endif; ?>
	                                        </div>
	                                    </div>
	                                    <?php if ($project_url) : ?>
	                                        <a href="<?= $project_url; ?>" class="review__link front-more">
	                                            <?= is_lang_en() ? "Project case" : "Кейс по проекту"; ?>
	                                        </a>
	                                    <?php endif; ?>
	                                </div>
                            <?php endif;
							endwhile;
                        endif; ?>
                    </div>
                </div>

                <?php if (count(get_field('reviews')) > 1 && !$grid) : ?>
                    <div class="testimonials-pagination">
                        <div class="testimonials-prev js-reviews-prev">
                            <svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                        d="M32.0454 10.9605H0.999954M0.999954 10.9605L8.64569 1M0.999954 10.9605L8.64569 20.0909"
                                        stroke="black" stroke-opacity="0.9" stroke-width="1.5"/>
                            </svg>
                        </div>
                        <div class="testimonials-next js-reviews-next">
                            <?= is_lang_en() ? "Read next" : "Ещё"; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" width="44" height="26" fill="none">
                                <path stroke="#000" d="M10 13h25m0 0l-3.9286-6M35 13l-3.9286 6"/>
                            </svg>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endif; ?>
		</div>
	</div>
</section>