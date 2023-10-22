<?php
	$class_bg = get_field( 'timeline_bg' ) ? ' section--padding' : '';
	$bg       = get_field( 'timeline_bg' ) ? 'style="background-color:' . get_field( 'timeline_bg' ) . ';"' : '';
?>
<section class="section timeline<?php echo $class_bg; ?>" <?php echo $bg; ?>>
	<div class="container">
		<?php if ( get_field( 'timeline_title' ) ) : ?>
			<div class="front-section-title">
				<h2><?php the_field( 'timeline_title' ) ?></h2>
			</div>
		<?php endif; ?>
	</div>
	<?php if ($tl = get_field('timeline')) : ?>
		<div class="container">
			<div class="swiper timeline__scale js-scale">
				<div class="swiper-wrapper">
					<?php foreach ($tl as $line) : ?>
						<div class="swiper-slide timeline__year"><?= $line['year']; ?></div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="swiper timeline__carousel js-timeline">
				<div class="swiper-wrapper">
					<?php foreach ($tl as $content) : ?>
						<div class="swiper-slide timeline__slide">
							<div class="timeline__slide-block">
								<h3 class="timeline__slide-title"><?= $content['year']; ?></h3>
								<div class="timeline__slide-content"><?= $content['text']; ?></div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	<?php endif; ?>
</section>
