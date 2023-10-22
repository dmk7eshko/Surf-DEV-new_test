<?php if ($exp = get_field('exp')) : ?>
	<section class="cases expertise">
		<div class="container">
			<?php if ( get_field( 'exp_title' ) ) : ?>
				<div class="front-section-title">
					<h2 class="expertise__title"><?php echo get_field( 'exp_title' ); ?></h2>
				</div>
			<?php endif; ?>
			<ul class="front-cases<?= get_field('exp_full_width') ? ' front-cases--full' : ''; ?>">
				<?php
				foreach ($exp as $item) :
					$blank = $item['source'] ? ' target="_blank"' : '';
					if (!get_field('exp_full_width')) : ?>
						<li class="front-case">
							<div class="front-case-content">
								<a href="<?= $item['url']; ?>" class="front-case-title" title="<?= $item['title']; ?>" <?= $blank; ?>>
									<h3><?= $item['title']; ?></h3>
								</a>
								<?php if  ($item['source'] || $item['format']) : ?>
									<div class="front-case-desc">
										<?php if  ($item['source']) : ?>
											<span class="front-case-src"><?= $item['source']; ?></span>
										<?php endif; ?>
										<?php if  ($item['format']) : ?>
											<span class="front-case-format"><?= $item['format']; ?></span>
										<?php endif; ?>
									</div>
								<?php endif; ?>
								<a href="<?= $item['url']; ?>" class="front-more" title="<?= $item['title']; ?>" <?= $blank; ?>><?= $item['more']; ?></a>
							</div>
						</li>
					<?php else : ?>
						<li class="front-case">
							<a href="<?= $item['url']; ?>" class="front-case-content" title="<?= $item['title']; ?>" <?= $blank; ?>>
								<h3 class="front-case-title"><?= $item['title']; ?></h3>
								<?php if  ($item['source']) : ?>
									<div class="front-case-desc">
										<span class="front-case-src"><?= $item['source']; ?></span>
									</div>
								<?php endif; ?>
								<img class="front-case-icon" src="<?= THEME . '/assets/img/link-black.svg'; ?>" decoding="async" loading="lazy" alt="">
							</a>
						</li>
					<?php endif; ?>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>