<?php
	/*
	 * Template Name: Banking App
	 *
	 * */

	get_header();
?>

	<section class="banking">

		<div class="cjm">
			<?php if (have_posts()) while (have_posts()) : the_post(); ?>
				<div class="intro banking-intro">
					<div class="container">
						<h1><?php the_title(); ?></h1>

						<?php if ($short = get_field('kratkoe')) : ?>
							<div class="kratkoe mb">
								<?= $short; ?>
								<a href="/discuss" class="callme">Contact us</a>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="container">
					<div class="cjms">
						<?php the_content(); ?>
					</div>
				</div>

			<?php endwhile; ?>
		</div>

		<?php if ($ba_quote = get_field('ba_quote')) : ?>
			<div class="quote quote--grey">
				<div class="container">
					<h2><?= $ba_quote; ?></h2>
				</div>
			</div>
		<?php endif; ?>

	</section>

<?php get_template_part('templates/en/discuss', 'form'); ?>

<?php
	get_footer();