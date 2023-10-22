<?php if ( $wSlider = get_field( 'why_slider' ) ) : ?>
	<section class="section">
		<div class="container">
			<div class="block-why">
				<div class="front-section-title block-why__title">
					<h2><?= get_field( 'why_title' ); ?></h2>
				</div>
				<div class="block-why__images swiper">
					<div class="swiper-wrapper">
						<?php foreach ( $wSlider as $slide ) : ?>
							<div class="swiper-slide block-why__image">
								<?= wp_get_attachment_image( $slide['img'], 'full', null, ['decoding' => 'async'] ); ?>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="block-why__contents swiper">
					<div class="swiper-wrapper">
						<?php foreach ( $wSlider as $slide ) : $content = $slide['content']; ?>
							<div class="swiper-slide block-why__content">
								<img class="block-why__icon" src="<?= $content['icon']; ?>" width="72" height="72" alt="">
								<div class="block-why__text"><?= $content['text']; ?></div>
							</div>
						<?php endforeach; ?>
					</div>
				</div>
				<div class="testimonials-pagination block-why__pagination">
					<div class="testimonials-prev js-why-prev" role="button">
						<svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M32.0454 10.9605H0.999954M0.999954 10.9605L8.64569 1M0.999954 10.9605L8.64569 20.0909" stroke="black" stroke-opacity="0.9" stroke-width="1.5"></path>
						</svg>
					</div>
					<div class="testimonials-next js-why-next" tabindex="0" role="button">Ещё
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="26" fill="none">
							<path stroke="#000" d="M10 13h25m0 0l-3.9286-6M35 13l-3.9286 6"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>