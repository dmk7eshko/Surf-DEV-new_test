<?php
/**
 * Страница с кастомным шаблоном
 * @package WordPress
 * @subpackage Surf.ru
 * Template Name: About
 */
get_header(); ?>


<?php if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<?php
			if ($about_image = get_field('about_image')) :
				$about_gradient = get_field('about_gradient');
				$rgb = sscanf($about_gradient, "#%02x%02x%02x");
				$rgb_str = $rgb[0] . ', ' . $rgb[1] . ', ' . $rgb[2];

				$title_class = $about_gradient ? ' home-title--under' : '';
			?>
				<div class="about-banner" style="background: linear-gradient(180deg, rgba(<?= $rgb_str; ?>, 0) 0%, rgba(<?= $rgb_str; ?>, 0) 50%, rgba(<?= $rgb_str; ?>, 0.7) 70%, <?= $about_gradient; ?> 82%, <?= $about_gradient; ?> 100%);">
					<?= wp_get_attachment_image( $about_image, 'full', false, ['class' => 'about-banner_image'] ); ?>
				</div>
			<?php endif; ?>
			<div class="container">
				<h1 class="home-title<?= $title_class; ?>"><?php the_super_title(); // заголовок поста ?></h1>

				<div class="kratkoe mb">
					<?php the_field( 'kratkoe' ) ?>
				</div>
			</div>
			<div class="cjms">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile;
endif; ?>

<?php
get_template_part('templates/en/discuss', 'form');
get_footer();