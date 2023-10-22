<?php if ($rows = get_field('table_rows')) : ?>
	<section class="table content-block">
		<div class="container">
			<?php if ( get_field( 'table_title' ) ) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field( 'table_title' ); ?></h2>
					<?php if ( get_field( 'table_subtitle' ) ) : ?>
						<p><?= get_field( 'table_subtitle' ); ?></p>
					<?php endif; ?>
				</div>
			<?php endif; ?>
			<div class="table-block">
				<div class="table-column">
					<?php foreach ($rows as $row) : ?>
						<?php if ($row['thead']) : ?>
							<div class="table-column__header"><?= $row['col_1']['title']; ?></div>
						<?php else: ?>
							<div class="table-column__row">
								<p class="table-column__row-title"><?= $row['col_1']['title']; ?></p>
								<div class="table-column__row-text"><?= $row['col_1']['text']; ?></div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
				<div class="table-column">
					<?php foreach ($rows as $row) : ?>
						<?php if ($row['thead']) : ?>
							<div class="table-column__header"><?= $row['col_2']['title']; ?></div>
						<?php else: ?>
							<div class="table-column__row">
								<p class="table-column__row-title"><?= $row['col_2']['title']; ?></p>
								<div class="table-column__row-text"><?= $row['col_2']['text']; ?></div>
							</div>
						<?php endif; ?>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>