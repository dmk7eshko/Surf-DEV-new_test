<?php if ($advs = get_field('advantages_section')) : ?>
	<section class="awards">
		<div class="container">
			<div class="awards-block">
				<?php if ($advs['img'] && $advs['img_tablet']) : ?>
					<div class="awards-block__item awards-block__item--start">
						<?= wp_get_attachment_image($advs['img'], [], null, [
							'class' => 'awards-block__item-image awards-block__item-image--default',
							'loading' => 'lazy',
							'decoding' => 'async'
						]); ?>
						<?= wp_get_attachment_image($advs['img_tablet'], [], null, [
							'class' => 'awards-block__item-image awards-block__item-image--tablet',
							'loading' => 'lazy',
							'decoding' => 'async'
						]); ?>
					</div>
				<?php endif;
				if ($advs['list']) :
					foreach ($advs['list'] as $adv) : ?>
						<div class="awards-block__item">
							<span class="awards-block__item-value"><?= $adv['title']; ?></span>
							<span class="awards-block__item-text"><?= $adv['text']; ?></span>
						</div>
					<?php endforeach;
				endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>