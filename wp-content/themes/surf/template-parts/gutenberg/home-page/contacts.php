<section class="contacts">
	<img class="contacts__shape" src="<?= THEME . '/assets/img/dots.svg'; ?>" loading="lazy" decoding="async" alt="">
	<div class="container">
		<div class="contacts__inner">
			<div class="contacts__follow">
				<div class="contacts__follow-shape">
					<img src="<?= THEME . '/assets/img/post/shape-2.svg'; ?>" loading="lazy" decoding="async" alt="">
				</div>
				<h2 class="contacts__follow-title"><?= get_field('dev_contacts_title'); ?></h2>
			</div>
			<div class="contacts__socials">
				<div class="contacts__socials-shape">
					<img src="<?= THEME . '/assets/img/post/shape-5.svg'; ?>" loading="lazy" decoding="async" alt="">
				</div>
				<?php foreach (get_field('dev_contacts_list') as $item) : ?>
					<a class="contacts__socials-link" href="<?= $item['url'] ?>" target="_blank" title="Visit page">
						<?= wp_get_attachment_image($item['logo'], 'full'); ?>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</section>