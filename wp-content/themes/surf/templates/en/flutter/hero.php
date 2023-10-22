<?php
	$title = get_field('title');
	$subtitle = get_field('subtitle');
	$apps = get_field('apps');
?>

<section class="hero">
	<div class="container">
		<div class="hero__inner">
			<div class="hero__content">
				<h1 class="hero__title"><?= $title; ?></h1>
				<span class="hero__subtitle"><?= $subtitle; ?></span>
			</div>
			<?php if ($apps) : ?>
				<div class="hero__slider swiper">
					<div class="hero__slider-wrapper swiper-wrapper">
						<?php foreach ($apps as $app) : ?>
							<div class="hero__slider-slide swiper-slide">
								<div class="hero__slider-image">
									<?php if ($app['img']) {
										echo wp_get_attachment_image($app['img'], 'full', null, ['loading' => 'eager', 'decoding' => 'async']);
									} ?>
								</div>
								<div class="hero__slider-content">
									<p class="hero__slider-title"><?= $app['name']; ?></p>
									<?php if ($desc = $app['desc']) : ?>
										<div class="hero__slider-item">
											<p><?= $desc['count_1']; ?></p>
											<span><?= $desc['value_1']; ?></span>
										</div>
										<div class="hero__slider-item">
											<p><?= $desc['count_2']; ?></p>
											<span><?= $desc['value_2']; ?></span>
										</div>
									<?php endif;
										if ($rating = $app['rating']) : ?>
											<div class="hero__slider-item">
												<p><?= $rating['value']; ?></p>
												<div class="rating">
													<div class="rating__line">
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
													</div>
													<div class="rating__line colored"
													     style="--rating: <?= $rating['range']; ?>">
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
														<svg class="rating__icon" width="24" height="24">
															<use xlink:href="<?= THEME . '/assets/img/sprite.svg#star'; ?>"></use>
														</svg>
													</div>
												</div>
											</div>
										<?php endif;
										if ($app['url']) : ?>
											<a href="<?= $app['url']; ?>" class="hero__slider-button btn btn-wide btn-green" target="_blank"><?= $app['btn']; ?></a>
										<?php endif; ?>
								</div>
							</div>
						<?php endforeach; ?>
					</div>
					<div class="hero__slider-next">
						<svg class="mobile-hidden" width="87" height="24" viewBox="0 0 87 24" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path
								d="M86.0607 13.0607C86.6464 12.4749 86.6464 11.5251 86.0607 10.9393L76.5147 1.39339C75.9289 0.807605 74.9792 0.807605 74.3934 1.39339C73.8076 1.97918 73.8076 2.92893 74.3934 3.51471L82.8787 12L74.3934 20.4853C73.8076 21.0711 73.8076 22.0208 74.3934 22.6066C74.9792 23.1924 75.9289 23.1924 76.5147 22.6066L86.0607 13.0607ZM1.31134e-07 13.5L85 13.5L85 10.5L-1.31134e-07 10.5L1.31134e-07 13.5Z"
								fill="currentColor"/>
						</svg>
						<svg class="desktop-hidden" width="42" height="24" viewBox="0 0 42 24" fill="none"
						     xmlns="http://www.w3.org/2000/svg">
							<path
								d="M41.0607 13.0607C41.6464 12.4749 41.6464 11.5251 41.0607 10.9393L31.5147 1.3934C30.9289 0.807614 29.9792 0.807614 29.3934 1.3934C28.8076 1.97919 28.8076 2.92893 29.3934 3.51472L37.8787 12L29.3934 20.4853C28.8076 21.0711 28.8076 22.0208 29.3934 22.6066C29.9792 23.1924 30.9289 23.1924 31.5147 22.6066L41.0607 13.0607ZM-1.31134e-07 13.5L40 13.5L40 10.5L1.31134e-07 10.5L-1.31134e-07 13.5Z"
								fill="currentColor"/>
						</svg>
					</div>
				</div>
				<div class="hero__pagination"></div>
			<?php endif; ?>
		</div>
	</div>
	<svg class="hero__circle" width="272" height="275">
		<use xlink:href="<?= THEME . '/assets/img/sprite.svg#circle'; ?>"></use>
	</svg>
</section>
