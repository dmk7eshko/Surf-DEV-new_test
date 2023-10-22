<section class="front-hero">
	<div class="container">
		<div class="front-hero__inner">
			<h1 class="front-hero__title"><?= get_field('dev_intro_title'); ?></h1>
			<p class="front-hero__subtitle hero__subtitle"><?= get_field('dev_intro_subtitle'); ?></p>
			<ul class="front-hero__brands brands" role="list">
				<?php foreach (get_field('dev_intro_cases') as $case) : ?>
					<li class="brands__item">
						<a class="brands__item-link" href="<?= $case['url'] ? get_the_permalink($case['url']) : 'javascript:'; ?>">
							<?= wp_get_attachment_image($case['logo'], 'full'); ?>
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<div class="front-hero__desc">
				<p><?= get_field('dev_intro_paragraph'); ?></p>
				<span><?= get_field('dev_intro_span'); ?></span>
			</div>
		</div>
	</div>
	<div class="front-hero__shape">
		<img src="<?= THEME . '/assets/img/front-rectangle.svg'; ?>" loading="eager" decoding="async" alt="">
	</div>
</section>
