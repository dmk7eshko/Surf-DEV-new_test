<?php
if (get_field('awards_single') || get_field('awards_multiple')) :
	$more = get_field('awards_more');
	$awards_class = $more ? 'awards__multiple' : 'awards__single';
	?>
	<section class="awards">
		<div class="container">
			<?php if (get_field('awards_title')) : ?>
				<h2 class="awards__title"><?= get_field('awards_title'); ?></h2>
			<?php endif; ?>
			<div class="<?= $awards_class; ?>">
				<?php if (get_field('awards_description')) : ?>
					<h3 class="awards__description"><?= get_field('awards_description'); ?></h3>
				<?php endif;
				if ($single = get_field('awards_single')) :
					$icon = $single['icon'];
					$content = $single['content'];
					$image_id = $icon['img'];
					$shadow = $icon['shadow'];
					$icon_class = !$shadow ? 'awards__icon' : 'awards__icon awards__icon--gold'; ?>
					<div class="awards__item">
						<div class="<?= $icon_class; ?>">
							<?= wp_get_attachment_image($image_id, 'full', null, ['decoding' => 'sync']); ?>
						</div>
						<p class="awards__name"><?= $content['title']; ?></p>
						<span class="awards__place"><?= $content['place']; ?></span> <span
							class="awards__year"><?= $content['year']; ?></span>
						<?php if ($content['count']) : ?>
							<span class="awards__count"><?= $content['count']; ?></span>
						<?php endif; ?>
					</div>
				<?php endif;
				if ($multiple = get_field('awards_multiple')) : ?>
					<div class="awards__slider swiper">
						<div class="swiper-wrapper awards__slider-wrapper">
							<?php
							foreach ($multiple as $item) :
								$item_icon = $item['icon'];
								$item_content = $item['content'];
								$image_id = $item_icon['img'];
								$shadow = $item_icon['shadow'];
								$icon_class = !$shadow ? 'awards__icon' : 'awards__icon awards__icon--gold'; ?>

								<div class="swiper-slide awards__item awards__item--flex">
									<div class="<?= $icon_class; ?>">
										<?= wp_get_attachment_image($image_id, 'full', null, ['decoding' => 'sync']); ?>
									</div>
									<p class="awards__name"><?= $item_content['title']; ?></p>
									<span class="awards__place"><?= $item_content['place']; ?></span> <span
										class="awards__year"><?= $item_content['year']; ?></span>
									<?php if ($item_content['count']) : ?>
										<span class="awards__count"><?= '+' . $item_content['count']; ?></span>
									<?php endif; ?>
								</div>

							<?php endforeach; ?>
						</div>
						<div class="swiper-pagination awards__pagination"></div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php endif; ?>