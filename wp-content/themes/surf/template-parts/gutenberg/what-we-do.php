<section class="section wwd">
	<div class="container">
		<div class="wwd-header">
			<?php if ($title = get_field('wwd_title')) : ?>
				<h2 class="wwd-header__title"><?= $title; ?></h2>
			<?php endif;
			if ($subtitle = get_field('wwd_subtitle')) : ?>
				<p class="wwd-header__text"><?= $subtitle; ?></p>
			<?php endif; ?>
		</div>
		<?php if ($list = get_field('wwd_list')) : ?>
			<ul class="wwd-list">
				<?php foreach ($list as $item) : ?>
					<li class="wwd-list__item">
						<div class="wwd-list__item-title"><?= $item['title']; ?></div>
						<div class="wwd-list__item-text"><?= $item['description']; ?></div>
					</li>
				<?php endforeach; ?>
			</ul>
		<?php endif; ?>
		<div class="wwd-team">
			<?php if ($team_title = get_field('wwd_team_title')) : ?>
				<h2 class="wwd-team__title"><?= $team_title; ?></h2>
			<?php endif;
			if ($team_slider = get_field('wwd_slider')) : ?>
				<div class="wwd-slider swiper">
					<div class="swiper-wrapper wwd-slider__wrapper">
						<?php
						foreach ($team_slider as $key => $slide) :
							$content = $slide['content'];
							$prev_slide = $key === 0 ? $team_slider[count($team_slider) - 1] : $team_slider[$key - 1];
							$next_slide = $key === count($team_slider) - 1 ? $team_slider[0] : $team_slider[$key + 1];
						?>
							<div class="swiper-slide wwd-slider__item">
								<div class="wwd-slider__item-prev">
									<?= wp_get_attachment_image( $prev_slide['image'], 'full', null, ['decoding' => 'sync'] ); ?>
								</div>
								<div class="wwd-slider__item-inner">
									<div class="wwd-slider__item-image">
										<?= wp_get_attachment_image( $slide['image'], 'full', null, ['decoding' => 'sync'] ); ?>
									</div>
									<div class="wwd-slider__item-content">
										<h3 class="wwd-slider__item-title"><?= $content['title']; ?></h3>
										<p class="wwd-slider__item-text"><?= $content['text']; ?></p>
									</div>
								</div>
								<div class="wwd-slider__item-next">
									<?= wp_get_attachment_image( $next_slide['image'], 'full', null, ['decoding' => 'sync'] ); ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="swiper-pagination wwd-slider__pagination"></div>
					<div class="swiper-button-prev wwd-slider__prev"></div>
					<div class="swiper-button-next wwd-slider__next"></div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>
