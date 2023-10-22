<?php if ($list = get_field('st_list')) : ?>
	<section class="section sticky">
		<div class="container">
			<div class="sticky__inner">
				<?php if (get_field('st_title')) : ?>
					<div class="front-section-title">
						<h2><?= get_field('st_title'); ?></h2>
					</div>
				<?php endif; ?>
				<ul class="sticky-list">
					<?php foreach ($list as $item) : ?>
						<li class="sticky-list__item">
							<?php if ($item['icon']) :
								echo wp_get_attachment_image($item['icon'], 'full', null, array('class' => 'sticky-list__image'));
							endif;
							if ($content = $item['content']) :?>
								<h3 class="sticky-list__title"><?= $content['title']; ?></h3>
								<p class="sticky-list__text"><?= $content['text']; ?></p>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
		</div>
	</section>
<?php endif; ?>