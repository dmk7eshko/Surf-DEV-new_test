<?php if ( $services = get_field( 'services' ) ) : ?>
	<div class="services-grid">
		<div class="container">
			<?php if ( get_field( 'services_title' ) ) : ?>
				<div class="front-section-title">
					<h2>
						<?php the_field( 'services_title' ) ?>
					</h2>
				</div>
			<?php endif; ?>
			<div class="services-grid__inner">
				<?php foreach ( $services as $service ) : ?>
					<?php if (get_field( 'services' )) : ?>
						<a href="<?= $service['link']; ?>" class="card card--vacancy" title="<?= strip_tags($service['title']); ?>">
							<span class="card__title"><?= $service['title']; ?></span>
							<span class="card__footer"><?= $service['text']; ?></span>
							<?php if ( $service['link'] ) : ?>
								<div class="card__link">
									<?php if ( $service['link_text'] ) : ?>
										<span class="card__link-text"><?= $service['link_text']; ?></span>
									<?php endif; ?>
									<img class="card__link-img" src="<?= THEME . '/assets/img/more.svg'; ?>" alt="">
								</div>
							<?php endif; ?>
						</a>
					<?php else: ?>
						<div class="card">
							<span class="card__title"><?= $service['title']; ?></span> <span
								class="card__footer"><?= $service['text']; ?></span>
							<?php if ( $service['link'] ) : ?>
								<a href="<?= $service['link']; ?>" class="card__link" title="<?= strip_tags($service['title']); ?>">
									<?php if ( $service['link_text'] ) : ?>
										<span class="card__link-text"><?= $service['link_text']; ?></span>
									<?php endif; ?>
									<img class="card__link-img" src="<?= THEME . '/assets/img/more.svg'; ?>" alt="">
								</a>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
<?php endif; ?>
