<?php
	if ( get_field( 'full_width' ) === 'yes' ) {
		$full_width = 'listing_full';
	} else {
		$full_width = '';
	}

	$class_bg = get_field( 'spisok_bg' ) ? ' wp-list--bg' : '';
	$bg       = get_field( 'spisok_bg' ) ? 'background-color:' . get_field( 'spisok_bg' ) . ';' : '';
	$color    = get_field( 'spisok_color' ) ? 'color:' . get_field( 'spisok_color' ) . ';' : '';
	$style    = 'style="' . $bg . $color . '"';

	$hex    = get_field( 'spisok_color' );
	$rgb    = sscanf( $hex, "#%02x%02x%02x" );
	$border = get_field( 'spisok_bg' ) ? 'style="border-bottom: 1px solid rgba(' . $rgb[0] . ',' . $rgb[1] . ', ' . $rgb[2] . ', 0.1);"' : '';
?>

<?php if ( ! get_field( 'spisok_hide' ) ) : ?>
	<section class="wp-list<?= $class_bg; ?>" <?= $style; ?>>
		<div class="container">
			<?php if ( get_field( 'spisok_title' ) ) : ?>
				<div class="front-section-title">
					<h2><?php echo get_field( 'spisok_title' ); ?></h2>
				</div>
			<?php endif; ?>
			<div class="wp-listing-columns <?php echo $full_width; ?>">
				<?php
					$i = 0;
					$dd = 0;
					if ( have_rows( 'spisok' ) ) {
					while ( have_rows( 'spisok' ) ) {
					$i = ++ $i;
					the_row();
					$dd ++;

					$szagol     = get_sub_field( 'szagol' );
					$sopis      = get_sub_field( 'sopis' );
					$img_spisok = get_sub_field( 'img_spisok' );

				?>
				<?php if ( $i == 1 ) { ?>
					<div class="wp-listing" <?= $border; ?>>
				<?php } else { ?>
					<div class="wp-listing hidden" <?= $border; ?>>
						<?php } ?>
						<div class="wp-listing-left">
							<p><?= $dd ?>.</p>
						</div>
						<div class="wp-listing-right">
							<?php if ( ! empty( $szagol ) ) {
								echo '<span>' . $szagol . '</span>';
							} ?>
							<?php if ( ! empty( $sopis ) ) {
								echo $sopis[0] === '<' ? $sopis : '<p>' . $sopis . '</p>';
							} ?>
							<?php if ( ! empty( $img_spisok ) ) {
								echo '<img src="' . $img_spisok . '" alt="" class="img_spisok">';
							} ?>
						</div>
						<div class="img_right">
							<?php
								if ( $i == 1 ) { ?>
									<span class="accord_right active">
										<svg width="30" height="17" viewBox="0 0 30 17" fill="none"
										     xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L15 15L29 1" stroke="#828282" stroke-width="2"/>
										</svg>
									</span>
								<?php } else { ?>
									<span class="accord_right">
										<svg width="30" height="17" viewBox="0 0 30 17" fill="none"
										     xmlns="http://www.w3.org/2000/svg">
											<path d="M1 1L15 15L29 1" stroke="#828282" stroke-width="2"/>
										</svg>
									</span>
								<?php }
							?>
						</div>
					</div>
					<?php
						}
					}
					?>
			</div>
			<?php if ( $sm = get_field( 'spisok_image' ) ) : ?>
				<?php if ( $sm['desktop'] ) : ?>
					<div class="wp-block-image wp-block-image--desktop">
						<img src="<?= $sm['desktop']; ?>" alt="">
					</div>
				<?php endif; ?>
				<?php if ( $sm['mobile'] ) : ?>
					<div class="wp-block-image wp-block-image--mobile">
						<img src="<?= $sm['mobile']; ?>" alt="">
					</div>
				<?php endif; ?>
			<?php endif; ?>
		</div>
	</section>
<?php endif; ?>