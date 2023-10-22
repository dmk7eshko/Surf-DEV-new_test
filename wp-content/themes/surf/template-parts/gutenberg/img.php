<?php if(!wp_is_mobile()): ?>
	<picture class="single-pic<?= get_field('content_width') ? ' single-pic--narrow': '';?>">
		<img src="<?php the_field("img1") ?>" alt="">
		<?php if( get_field('withimg') ): ?>
			<figcaption><?php the_field('withimg') ?></figcaption>
		<?php endif; ?>
	</picture>
<?php else: ?>
	<picture class="single-pic">
		<img src="<?php the_field("img2") ?>" alt="">
		<?php if (get_field('withimg')): ?>
			<figcaption><?php the_field('withimg') ?></figcaption>
		<?php endif; ?>
	</picture>
<?php endif;?>