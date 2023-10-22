<section class="workshops-wrapper">
	<?php if ( get_field( 'workshop_title' ) ) : ?>
		<div class="container">
			<div class="front-section-title">
				<h2><?php the_field( 'workshop_title' ) ?></h2>
				<?php if ( get_field( 'workshop_subtitle' ) ) : ?>
					<p><?= get_field( 'workshop_subtitle' ); ?></p>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>
	<div class="workshops">
		<?php if ( have_rows( 'workshop' ) ):
			$w = 0;

			while ( have_rows( 'workshop' ) ) : the_row();

				$wzag  = get_sub_field( 'wzag' );
				$wopis = get_sub_field( 'wopis' );
				$black = get_sub_field( 'is_black' );
				$w ++;

				echo '<div class="workshop">
                        <span class="' . $black . '">' . $w . '</span>
                        <div class="works">
                            <div class="wzag">' . $wzag . '</div>
                            <div class="wopis">' . $wopis . '</div>
                        </div>
                      </div>';
			endwhile;
		endif; ?>
	</div>
	<?php if ( $wi = get_field( 'workshop_image' ) ) : ?>
		<div class="container">
			<?php if ( $wi['desktop'] ) : ?>
				<div class="wp-block-image wp-block-image--desktop">
					<img src="<?= $wi['desktop']; ?>" alt="">
				</div>
			<?php endif;
			if ( $wi['mobile'] ) : ?>
				<div class="wp-block-image wp-block-image--mobile">
					<img src="<?= $wi['mobile']; ?>" alt="">
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
</section>