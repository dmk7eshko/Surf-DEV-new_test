<?php if ($tasks = get_field('tasks')) : ?>
	<section class="tasks">
		<div class="container">
			<?php if ( get_field( 'tasks_title' ) ) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field( 'tasks_title' ); ?></h2>
					<?php if ( get_field( 'tasks_subtitle' ) ) : ?>
						<p><?= get_field( 'tasks_subtitle' ); ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<ul class="tasks-list">
				<?php foreach ($tasks as $task) : ?>
					<li class="tasks-list__item">
						<div class="tasks-list__item-title"><?= $task['title']; ?></div>
						<div class="tasks-list__item-text"><?= $task['text']; ?></div>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</section>
<?php endif; ?>