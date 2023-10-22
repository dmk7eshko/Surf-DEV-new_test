<?php if ($grid = get_field('grid')) : ?>
	<div class="grid">
		<?php foreach ($grid as $item) : ?>
			<div class="grid__item"><?php echo $item['grid_item']; ?></div>
		<?php endforeach; ?>
	</div>
<?php endif; ?>