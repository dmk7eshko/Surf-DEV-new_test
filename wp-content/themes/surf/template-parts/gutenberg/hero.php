<?php $bg = get_field('background'); ?>
<section class="hero-block">
	<div class="hero-background"
	     style="background-image: url(<?php echo $bg['url'] ?>); height: <?php echo $bg['height'] ?>px"></div>
	<div class="container">
		<div class="hero-wrapper">
			<h1 class="hero-title">
	            <span class="hero-top-line">
	                <?php the_field('top_line') ?>
	            </span>
				<span class="hero-middle-line">
	                <?php the_field('middle_line') ?>
	            </span>
				<span class="hero-bottom-line">
	                <?php the_field('bottom_line') ?>
	            </span>
			</h1>
			<?php if (get_field('aside_text')) : ?>
				<div class="hero-aside-text">
					<?php echo str_replace("\n", "<br/>", get_field('aside_text')) ?>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

