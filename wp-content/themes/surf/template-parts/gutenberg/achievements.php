<?php
$a_slider_class = get_field('achievements_cases') ? ' achievements-slider--cases': '';
$a_case_class = get_field('achievements_cases') ? ' achievements-slide--case': '';
?>
<div class="achievements">
	<div class="container">
		<?php if ( get_field( 'achievements_title' ) ) : ?>
			<div class="front-section-title">
				<h2><?php the_field( 'achievements_title' ) ?></h2>
			</div>
		<?php endif;
		if ( $achievements = get_field( 'achievements' ) ) : ?>
			<div class="achievements-slider<?= $a_slider_class; ?> swiper js-achievements">
				<div class="swiper-wrapper">
					<?php foreach ( $achievements as $achievement ) : ?>
						<?php if ( $achievement['link'] ) : ?>
							<a href="<?= $achievement['link']; ?>" class="swiper-slide achievements-slide<?= $a_case_class; ?> js-achievement" target="_blank" title="<?= $achievement['title']; ?>">
						<?php elseif ( $achievement['case'] ) : ?>
							<a href="<?= get_the_permalink($achievement['case']); ?>" class="swiper-slide achievements-slide<?= $a_case_class; ?> js-achievement" title="<?= get_the_title($achievement['case']); ?>">
						<?php else: ?>
							<div class="swiper-slide achievements-slide<?= $a_case_class; ?> js-achievement">
						<?php endif; ?>
							<?php if ( get_field( 'achievements_cases' ) ) : ?>
								<div class="achievements-slide__logo">
									<img src="<?= $achievement['icon']; ?>" alt="">
								</div>
							<?php else: ?>
								<div class="achievements-slide__icon">
									<img src="<?= $achievement['icon']; ?>" alt="">
								</div>
							<?php endif;
							if ( $achievement['title'] ) : ?>
								<span class="achievements-slide__title"><?= $achievement['title']; ?></span>
							<?php endif; ?>
							<p class="achievements-slide__text"><?= $achievement['text']; ?></p>
							<?php if ( $achievement['link'] ) : ?>
								<img class="achievements-slide__link" src="<?= THEME . '/assets/img/link.svg'; ?>" alt="">
							<?php elseif ($achievement['case']) : ?>
								<div class="achievements-slide__arrow">
									<?php if ( $achievement['case_text'] ) : ?>
										<span class="achievements-slide__more"><?= $achievement['case_text']; ?></span>
									<?php endif; ?>
									<img class="achievements-slide__img" src="<?= THEME . '/assets/img/more.svg'; ?>" alt="">
								</div>
							<?php endif; ?>
						<?php if ( $achievement['link'] || $achievement['case'] ) : ?>
							</a>
						<?php else: ?>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="testimonials-pagination">
					<div class="testimonials-prev js-achievements-prev">
						<svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M32.0454 10.9605H0.999954M0.999954 10.9605L8.64569 1M0.999954 10.9605L8.64569 20.0909"
							      stroke="black" stroke-opacity="0.9" stroke-width="1.5"/>
						</svg>
					</div>
					<div class="testimonials-next js-achievements-next">
						<?= is_lang_en() ? "Read next" : "Ещё"; ?>
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="26" fill="none">
							<path stroke="#000" d="M10 13h25m0 0l-3.9286-6M35 13l-3.9286 6"/>
						</svg>
					</div>
				</div>
			</div>
		<?php endif; ?>
	</div>
</div>