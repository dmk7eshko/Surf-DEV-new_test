<?php if ($calculation = get_field('calculation')) : ?>
	<section class="calculation">
		<div class="container">
			<?php if ( get_field( 'calculation_title' ) ) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field( 'calculation_title' ); ?></h2>
				</div>
			<?php endif; ?>
			<div class="calculation__table">
				<div class="calculation__column">
					<div class="calculation__head"><?= $calculation['heading1']; ?></div>
					<div class="calculation__text"><?= $calculation['text1']; ?></div>
				</div>
				<div class="calculation__column">
					<div class="calculation__head"><?= $calculation['heading2']; ?></div>
					<div class="calculation__text"><?= $calculation['text2']; ?></div>
				</div>
				<div class="calculation__column">
					<div class="calculation__head"><?= $calculation['heading3']; ?></div>
					<div class="calculation__text"><?= $calculation['text3']; ?></div>
				</div>
			</div>
			<?php if ( get_field( 'calculation_group' ) ) : ?>
				<div class="calculation__group"><?= get_field( 'calculation_group' ); ?></div>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>