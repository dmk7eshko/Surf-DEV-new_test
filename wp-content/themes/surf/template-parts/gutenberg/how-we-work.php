<section class="section hww">
	<div class="container">
		<?php if (get_field('hww_title')) : ?>
			<div class="front-section-title hww__title">
				<h2><?= get_field('hww_title'); ?></h2>
			</div>
		<?php endif;
		if ($hww = get_field('hww_slider')) : ?>
			<div class="swiper-pagination hww-slider__pagination"></div>
			<div class="hww-slider swiper">
				<div class="swiper-wrapper">
					<?php foreach ($hww as $slide) : ?>
						<div class="swiper-slide hww-slider__item" data-stage="<?= $slide['stage']; ?>">
							<div class="hww-slider__description"><?= $slide['desc']; ?></div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="swiper-button-next hww-slider__next"></div>
				<div class="swiper-button-prev hww-slider__prev"></div>
			</div>
		<?php endif; ?>
	</div>
</section>
