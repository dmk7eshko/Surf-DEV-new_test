<section class="reasons">
	<div class="container">
		<img class="reasons__shape" src="<?= THEME . '/assets/img/shape-7.svg'; ?>" loading="lazy" decoding="async" alt="">
		<h2 class="reasons__title page-title"><?= get_field('dev_reasons_title'); ?></h2>
		<div class="reasons__block">
			<div class="reasons__image">
				<?= wp_get_attachment_image(get_field('dev_reasons_img'), 'full'); ?>
			</div>
			<ul class="reasons__list" role="list">
				<?php foreach (get_field('dev_reasons_list') as $item) : ?>
					<li class="reasons__list-item">
						<h3 class="reasons__list-title"><?= $item['title']; ?></h3>
						<p class="reasons__list-text"><?= $item['text']; ?></p>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>