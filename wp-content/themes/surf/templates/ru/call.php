<?php if (!get_field('footer_gradient')): ?>
	<section class="call">
		<div class="container">
			<div class="call-wrapper">
				<div class="call-text<?= get_field('footer_add') ? ' call-text--small': null; ?>">
					<div class="call-title">
						<?php if ( get_field( 'footer_text' ) ) {
							echo get_field( 'footer_text' );
						} else { ?>
							<i>Давайте создадим</i> мобильное приложение под&nbsp;ваши задачи вместе
						<?php } ?>
					</div>
					<?php if (get_field('footer_subtext')) : ?>
						<p class="call-subtitle"><?= get_field('footer_subtext'); ?></p>
					<?php endif; ?>
					<?php if ( get_field( 'footer_text_link' ) ) {
						$footer_text_link = get_field( 'footer_text_link' );
					} else {
						$footer_text_link = 'Обсудить проект';
					}

					if ( get_field( 'footer_url_link' ) ) {
						$footer_url_link = get_field( 'footer_url_link' );
					} else {
						$footer_url_link = get_the_permalink( '243' );
					} ?>
					<a href="<?php echo $footer_url_link; ?>" class="call-us"><?php echo $footer_text_link; ?></a>
				</div>
				<?php if ( get_field( 'footer_image' ) ) : ?>
					<div class="call-image-wrapper">
						<div class="call-image">
							<img src="<?php echo get_field( 'footer_image' ); ?>" alt="">
						</div>
						<?php if ( get_field( 'footer_name' ) ) : ?>
							<p class="call-name"><?php echo get_field( 'footer_name' ); ?></p>
						<?php endif; ?>
						<?php if ( get_field( 'footer_pos' ) ) : ?>
							<span class="call-position"><?php echo get_field( 'footer_pos' ); ?></span>
						<?php endif; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</section>
<?php else:
	$title = get_field( 'footer_text' );
	$title_color = get_field( 'footer_text_color' );
	$desc = get_field( 'footer_description' );
	$desc_color = get_field( 'footer_description_color' );
	$color1 = get_field( 'footer_bg_1' );
	$color2 = get_field( 'footer_bg_2' );
	$deg = get_field( 'footer_bg_deg' );
	$perc = get_field( 'footer_bg_perc' );
	?>
	<section class="call" style="background: linear-gradient(<?= $deg; ?>deg, <?= $color1; ?> 0%, <?= $color1 . ' ' . $perc; ?>%, <?= $color2; ?> 100%);">
		<div class="container">
			<div class="call-wrapper call-wrapper--gradient">
				<div class="call-text">
					<?php if ( $title ) : ?>
						<div class="call-title"<?= $title_color ? ' style="color:' . $title_color . '"' : ''; ?>><?= $title; ?></div>
					<?php endif; ?>
					<?php if ( $desc ): ?>
						<div class="call-description"<?= $desc_color ? ' style="color:' . $desc_color . '"' : ''; ?>><?= $desc; ?></div>
					<?php endif; ?>
				</div>
				<?php
					if ( get_field( 'footer_text_link' ) ) {
						$footer_text_link = get_field( 'footer_text_link' );
					} else {
						$footer_text_link = 'Обсудить проект';
					}

					if ( get_field( 'footer_url_link' ) ) {
						$footer_url_link = get_field( 'footer_url_link' );
					} else {
						$footer_url_link = get_the_permalink( '243' );
					}
				?>
				<a href="<?php echo $footer_url_link; ?>" class="call-us"><?php echo $footer_text_link; ?></a>
			</div>
		</div>
	</section>
<?php endif; ?>