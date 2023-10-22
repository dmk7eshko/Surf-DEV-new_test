<?php

	if ( have_rows( 'clients' ) ) :
		$clients_slides = [];

		while ( have_rows( 'clients' ) ) :
			the_row();
			$clients_slides[] = [
				'img'   => get_sub_field( 'logo' ),
				'title' => get_sub_field( 'title' ),
				'desc'  => get_sub_field( 'desc' ),
				'bg'    => get_sub_field( 'color' ),
				'text'  => get_sub_field( 'text_color' ),
				'link'  => get_sub_field( 'case_url' )
			];
		endwhile;
		?>
		<div class="clients-slider">
			<div class="container">
				<?php if (get_field('clients_title')) : ?>
					<h2 class="clients-slider__title"><?php echo get_field('clients_title'); ?></h2>
				<?php endif; ?>
				<div class="clients-slider-inner swiper js-clients-slider">
					<div class="swiper-wrapper">
						<?php
							foreach ( $clients_slides as $slide ):
								if ( empty( $slide['link'] ) ): ?>
									<div class="client-slide swiper-slide js-clients-slide">
								<?php else: ?>
									<a href="<?= $slide['link'] ?>" class="client-slide swiper-slide js-clients-slide">
								<?php endif; ?>
								<div class="client-slide-image">
									<img src="<?= $slide['img']['url'] ?>" alt="<?= $slide['title'] ?>"/>
								</div>
								<div class="client-slide-content"
								     style="background-color: <?= $slide['bg'] ?>;color: <?= $slide['text'] ?>">
									<h4><?= $slide['title'] ?></h4>
									<p><?= $slide['desc'] ?></p>
								</div>
								<?php if ( ! empty( $slide['link'] ) ) : ?>
								</a>
							<?php else: ?>
								</div>
							<?php endif;
							endforeach;
						?>
					</div>
				</div>
			</div>
		</div>
	<?php endif;

