<?php
$founders = get_field('founders_list');
$opinions = get_field('founders_opinions');

if ($founders || $opinions) : ?>
	<section class="founders">
		<div class="container">
			<?php if (get_field('founders_title')) : ?>
				<h2 class="founders__title"><?= get_field('founders_title'); ?></h2>
			<?php endif; ?>
			<ul class="founders__list">
				<?php foreach ($founders as $key => $founder) : ?>
					<li class="founders__list-item<?= ($key + 1) % 2 === 0 ? ' founders__list-item--reverse' : '' ?>">
						<?php if ($key === 0 || ($key + 1) % 4 === 0) : ?>
							<img class="founders__list-shape founders__list-loader" src="<?= THEME . '/assets/img/shape-4.svg'; ?>" alt="">
							<img class="founders__list-shape founders__list-triangles" src="<?= THEME . '/assets/img/shape-5.svg'; ?>" alt="">
						<?php endif; ?>
						<div class="founders__list-image">
							<?= wp_get_attachment_image($founder['img'], 'full'); ?>
						</div>
						<div class="founders__list-content">
							<?php if ($key !== 0 && ($key + 1) % 3 === 0) : ?>
								<img class="founders__list-shape founders__list-star" src="<?= THEME . '/assets/img/shape-6.svg'; ?>" alt="">
							<?php endif; ?>
							<h3 class="founders__list-title"><?= $founder['desc']['title']; ?></h3>
							<div class="founders__list-text"><?= $founder['desc']['text']; ?></div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>