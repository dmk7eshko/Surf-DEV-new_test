<section class="about">
	<div class="about__circle">
		<img src="<?= THEME . '/assets/img/post/about-circle.svg'; ?>" loading="lazy" decoding="async" alt="">
	</div>
	<div class="container">
		<div class="about__snake">
			<img src="<?= THEME . '/assets/img/post/about-curve.svg'; ?>" loading="lazy" decoding="async" alt="">
		</div>
		<h2 class="about__title page-title"><?= get_field('dev_released_title'); ?></h2>
		<div class="about-products">
			<?php foreach (get_field('dev_released_cases') as $case) : ?>
				<a class="about-products__link" href="<?= get_the_permalink($case['link']); ?>" title="<?=  strip_tags($case['title']);?>" target="_blank">
				<div class="about-products__content">
					<div class="about-products__info">
						<h3 class="about-products__title"><?= $case['title']; ?></h3>
						<ul class="about-products__list">
							<?php foreach ($case['list'] as $item): ?>
								<li class="about-products__list-item"><?= $item['item'] ?></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="about-products__image">
						<?= wp_get_attachment_image($case['img'], 'full'); ?>
					</div>
				</div>
				<span class="about-products__button btn btn-green-line">See more</span>
			</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>
