<?php if (get_field('quote')) : ?>
	<div class="quote">
		<div class="quote__inner">
			<div class="container">
				<div class="quote__text">
					<?= get_field('quote'); ?>
				</div>
			</div>
		</div>
		<?php if ( get_field('quote_extra') ) : ?>
			<div class="container">
				<div class="quote__extra"><?= get_field('quote_extra'); ?></div>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
