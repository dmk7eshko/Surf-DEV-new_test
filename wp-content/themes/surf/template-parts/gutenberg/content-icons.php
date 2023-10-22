<?php
$class_bg = get_field('block_icons_bg') ? ' tasks--bg' : '';
$bg = get_field('block_icons_bg') ? 'style="background-color:' . get_field('block_icons_bg') . '"' : '';

if ($block_icons = get_field('block_icons')) : ?>
	<section class="tasks tasks--icons<?php echo $class_bg; ?>" <?php echo $bg; ?>>
		<div class="container">
			<?php if ( get_field( 'block_icons_title' ) ) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field( 'block_icons_title' ); ?></h2>
				</div>
			<?php endif; ?>
			<ul class="tasks-list">
				<?php foreach ($block_icons as $task) : ?>
					<li class="tasks-list__item tasks-list__item--icon">
						<div class="tasks-list__item-icon">
							<img src="<?= $task['icon']['url']; ?>" alt="">
						</div>
						<div class="tasks-list__item-content">
							<div class="tasks-list__item-title"><?= $task['title']; ?></div>
							<div class="tasks-list__item-text"><?= $task['text']; ?></div>
						</div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>