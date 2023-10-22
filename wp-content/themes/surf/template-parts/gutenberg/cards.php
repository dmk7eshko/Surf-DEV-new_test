<div class="cards<?= get_field( 'cards_columns' ) ? ' cards--3col' : null;?>">
	<div class="container">
		<?php if (get_field( 'cards_title' )) :
			$center = get_field('cards_title_center');
			?>
			<div class="front-section-title">
				<h2 class="cards__title"<?php echo $center ? ' style="text-align: center"' : ''; ?>>
					<?php the_field( 'cards_title' ) ?>
				</h2>
				<?php if (get_field( 'cards_subtitle' )) : ?>
					<span class="cards__subtitle"><?php the_field( 'cards_subtitle' ) ?></span>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div class="cards__inner">
			<?php if ($cards = get_field('cards')) :
				foreach ($cards as $card) : ?>
					<div class="card">
						<span class="card__title"><?php echo $card['title']; ?></span>
						<span class="card__footer"><?php echo $card['text']; ?></span>
					</div>
				<?php
				endforeach;
			endif; ?>
		</div>
	</div>
</div>
