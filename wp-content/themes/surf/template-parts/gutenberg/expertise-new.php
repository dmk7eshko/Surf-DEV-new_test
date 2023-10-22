<?php if ($ex = get_field('expertise_section')) : ?>
	<section class="expertise section">
		<?php if ($ex['title']) : ?>
			<h2 class="expertise__title"><?php echo $ex['title']; ?></h2>
		<?php endif;
		if ($ex['list']) : ?>
			<div class="expertise__block">
				<?php foreach ($ex['list'] as $item) : ?>
					<a href="<?php echo $item['url']; ?>" class="expertise__block-item expertise-item" title="<?php echo $item['title']; ?>" style="--color-bg: <?php echo $item['color']; ?>">
						<?php if ($item['icon']) : ?>
							<span class="expertise-item__icon">
								<?php echo wp_get_attachment_image($item['icon'], [32, 32], null, ['loading' => 'lazy', 'decoding' => 'async']); ?>
							</span>
						<?php endif; ?>
						<h3 class="expertise-item__title"><?php echo $item['title']; ?></h3>
						<div class="expertise-item__text"><?php echo $item['text']; ?></div>
						<span class="expertise-item__link btn btn-default"><?php echo $item['btn']; ?></span>
					</a>
				<?php endforeach; ?>
			</div>
			<div class="expertise__block expertise__block--mobile">
				<?php
				$start_array = array_slice($ex['list'], 0, 4, true);
				$rest_array = array_slice($ex['list'], 4, count($ex['list']) - 1, true);
				foreach ($start_array as $item) : ?>
					<a href="<?php echo $item['url']; ?>" class="expertise__block-item expertise-item swiper-slide" title="<?php echo $item['title']; ?>" style="--color-bg: <?php echo $item['color']; ?>">
						<?php if ($item['icon']) : ?>
							<span class="expertise-item__icon">
									<?php echo wp_get_attachment_image($item['icon'], [32, 32], null, ['loading' => 'lazy', 'decoding' => 'async']); ?>
								</span>
						<?php endif; ?>
						<h3 class="expertise-item__title"><?php echo $item['title']; ?></h3>
						<div class="expertise-item__text"><?php echo $item['text']; ?></div>
						<span class="expertise-item__link btn btn-default"><?php echo $item['btn']; ?></span>
					</a>
				<?php endforeach; ?>
				<div class="expertise__block-collapse collapse-panel">
					<?php foreach ($rest_array as $item) : ?>
					<a href="<?php echo $item['url']; ?>" class="expertise__block-item expertise-item swiper-slide" title="<?php echo $item['title']; ?>" style="--color-bg: <?php echo $item['color']; ?>">
						<?php if ($item['icon']) : ?>
							<span class="expertise-item__icon">
								<?php echo wp_get_attachment_image($item['icon'], [32, 32], null, ['loading' => 'lazy', 'decoding' => 'async']); ?>
							</span>
						<?php endif; ?>
						<h3 class="expertise-item__title"><?php echo $item['title']; ?></h3>
						<div class="expertise-item__text"><?php echo $item['text']; ?></div>
						<span class="expertise-item__link btn btn-default"><?php echo $item['btn']; ?></span>
					</a>
					<?php endforeach; ?>
				</div>
				<a href="/cases/" class="expertise__block-more js-exp-more" data-show="more expertise" data-hide="less expertise">more expertise</a>
			</div>
		<?php endif; ?>
	</section>
<?php endif; ?>