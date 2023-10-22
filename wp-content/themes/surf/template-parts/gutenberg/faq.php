<?php if ($fl = get_field('faq_list')) : ?>
	<section class="section faq">
		<div class="container">
			<?php if (get_field('faq_title')) : ?>
				<div class="front-section-title">
					<h2><?= get_field('faq_title'); ?></h2>
				</div>
			<?php endif; ?>
			<div class="faq-wrapper">
				<?php foreach ($fl as $item) : ?>
					<div class="faq-item">
						<a href="#" class="faq-item__link">
							<span><?= $item['question']; ?></span>
							<svg width="48" height="48">
								<use xlink:href="<?= THEME . '/assets/img/sprite.svg#arrow-down'; ?>"></use>
							</svg>
						</a>
						<div class="faq-item__panel">
							<div class="faq-item__content"><?= $item['answer']; ?></div>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
<?php endif; ?>