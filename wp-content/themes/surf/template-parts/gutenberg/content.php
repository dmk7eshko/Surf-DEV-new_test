<section class="content-block">
	<div class="container">
		<?php if (get_field('content_title')) : ?>
			<div class="front-section-title">
				<h2><?php echo get_field('content_title'); ?></h2>
			</div>
		<?php endif; ?>
		<?php if (!get_field('content_more')) : ?>
			<div class="content-block__body">
				<?php echo get_field('content'); ?>
			</div>
		<?php else:
			foreach (get_field('content_repeater') as $content) : ?>
				<div class="content-block__body">
					<?= $content['content']; ?>
				</div>
			<?php endforeach;
		endif; ?>
	</div>
</section>
