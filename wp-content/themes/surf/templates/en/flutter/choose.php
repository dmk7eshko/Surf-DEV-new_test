<?php if ($list = get_field('choose_list')) : ?>
	<section class="choose">
		<div class="container">
			<?php if (get_field('choose_title')): ?>
				<h2 class="choose__title"><?= get_field('choose_title'); ?></h2>
			<?php endif; ?>
			<div class="choose__nav">
				<div class="swiper-button-prev choose__nav-button choose__nav-prev"></div>
				<div class="swiper-button-next choose__nav-button choose__nav-next"></div>
			</div>
			<div class="choose__slider swiper">
				<div class="swiper-wrapper">
					<?php foreach ($list as $item) : ?>
						<div class="swiper-slide choose__slider-item choose-slide">
							<svg class="choose-slide__circle" width="272" height="275">
								<use xlink:href="<?= THEME . '/assets/img/sprite.svg#circle'; ?>"></use>
							</svg>
							<div class="choose-slide__image">
								<?= wp_get_attachment_image($item['img'], 'full', null, ['decoding' => 'async']); ?>
							</div>
							<div class="choose-slide__content">
								<svg class="choose-slide__content-quote" width="59" height="41">
									<use xlink:href="<?= THEME . '/assets/img/sprite.svg#quote'; ?>"></use>
								</svg>
								<?php if ($item['desc']): ?>
									<div class="choose-slide__content-desc"><?= $item['desc']; ?></div>
								<?php endif;
								if ($item['content']) : $content = $item['content']; ?>
									<p class="choose-slide__content-title"><?= $content['title']; ?></p>
									<span class="choose-slide__content-text"><?= $content['text']; ?></span>
								<?php endif; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
				<div class="choose__slider-pagination"></div>
			</div>
		</div>
	</section>
<?php endif; ?>