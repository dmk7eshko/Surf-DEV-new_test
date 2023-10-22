<?php if ( get_field( 'video_id' ) ) : ?>
	<div class="block-video">
		<div class="video">
			<div class="video__link" data-id="<?= get_field( 'video_id' ) ?>">
				<img class="video__media" src="<?= get_field( 'video_poster' )['url']; ?>" loading="lazy" decoding="async" alt="<?= get_field( 'video_title' ); ?>">
			</div>
			<div class="video__play">
				<div class="container">
					<?php if ( get_field( 'video_title' ) ) : ?>
						<h2 class="video__title"><?= get_field( 'video_title' ); ?></h2>
					<?php endif; ?>
					<span class="video__line"></span>
					<button class="video__button" aria-label="Запустить видео" title="Запустить видео">
						<svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg">
							<circle cx="44" cy="44" r="44" fill="white"/>
							<path d="M36 56V32L59 44L36 56Z" fill="black"/>
						</svg>
						<?php if ( get_field( 'video_button' ) ) : ?>
							<span class="video__button-text"><?= get_field( 'video_button' ); ?></span>
						<?php endif; ?>
					</button>
				</div>
			</div>
		</div>
		<?php if ($tickers = get_field('video_tickers')): ?>
			<div class="ticker">
				<?php foreach ($tickers as $ticker) : $reverse = !$ticker['reverse'] ? 'forward' : 'backward'; ?>
					<div class="ticker__slider swiper" data-direction="<?= $reverse; ?>">
						<div class="swiper-wrapper">
							<?php foreach ($ticker['strings'] as $string) : ?>
								<div class="swiper-slide ticker__slider-item">
									<?= $string['text']; ?>
									<span class="ticker__slider-divider">
										<img src="<?= THEME . '/assets/img/career/divider.svg'?>" alt="">
									</span>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="ticker__mobile">
						<?php foreach ($ticker['strings'] as $key => $string) {
							echo $string['text'] . ($key !== count($ticker['strings']) -1 ? ' / ' : '');
						} ?>
					</div>
				<?php endforeach; ?>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>