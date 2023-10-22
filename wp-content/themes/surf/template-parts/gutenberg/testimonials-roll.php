<?php if ( have_rows( 'testimonials' ) ): ?>
	<div class="testimonials-roll">
		<div class="container">
			<?php if (get_field('testimonials_title')) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field('testimonials_title'); ?></h2>
				</div>
			<?php endif; ?>
			<div class="testimonials swiper">
				<div class="swiper-wrapper">
					<?php
						while ( have_rows( 'testimonials' ) ) : the_row();
							$name     = get_sub_field( 'name' );
							$doljnost = get_sub_field( 'doljnost' );
							$img      = get_sub_field( 'img' );
							$test     = get_sub_field( 'test' );
							$logo     = get_sub_field( 'logo' );
							?>
							<div class="swiper-slide testimonial testimonial--big">
								<div class="testimonial-text">
									<?= $test ?>
								</div>
								<div class="testimonial-photo">
									<img src="<?= $img ?>" alt="">
									<div class="testimonial-name">
										<span><?php echo $name ?></span>
										<p><?php echo $doljnost ?></p>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
				</div>
			</div>
			<?php if ( count( get_field( 'testimonials' ) ) > 1 ) : ?>
				<div class="testimonials-pagination">
					<div class="testimonials-prev js-testimonials-prev">
						<svg width="33" height="21" viewBox="0 0 33 21" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path
								d="M32.0454 10.9605H0.999954M0.999954 10.9605L8.64569 1M0.999954 10.9605L8.64569 20.0909"
								stroke="black" stroke-opacity="0.9" stroke-width="1.5"/>
						</svg>
					</div>
					<div class="testimonials-next js-testimonials-next">
                        <?= is_lang_en() ? "Read next" : "Ещё"; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="44" height="26" fill="none">
							<path stroke="#000" d="M10 13h25m0 0l-3.9286-6M35 13l-3.9286 6"/>
						</svg>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
<?php endif; ?>