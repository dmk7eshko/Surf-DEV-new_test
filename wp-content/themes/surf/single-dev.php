<?php
	/**
	 * New post template
	 * @package WordPress
	 * @subpackage surf.dev
	 * Template Name: Dev post
	 * Template Post Type: post
	 */
	get_header('dev');
?>
	<section class="single-article dev-single-article">
		<?php if (have_posts()) {
			while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" class="single-art">
					<div class="container post-content">
						<div class="listing">
							<span>Contents</span>
							<ul class="listing-content"></ul>
						</div>
						<div class="content">
							<div class="big-title">
								<div class="cats"><?php the_category(); ?></div>
								<h1><?php the_title(); ?></h1>
							</div>
							<?php
								if ( ! get_field('hide_image')) {
									echo '<div class="the_post_thumbnail">';
									the_post_thumbnail('full');
									echo '</div>';
								}
							?>

							<?php the_content(); ?>
							<img src="<?= THEME . '/assets/img/post/circles.svg'; ?>" width="95" height="95" alt="" class="shape shape--1">
							<img src="<?= THEME . '/assets/img/post/shape-1.svg'; ?>" width="144" height="268" alt="" class="shape shape--2">
							<img src="<?= THEME . '/assets/img/post/shape-2.svg'; ?>" width="130" height="130" alt="" class="shape shape--3">
							<img src="<?= THEME . '/assets/img/post/shape-3.svg'; ?>" width="129" height="48" alt="" class="shape shape--4">
							<img src="<?= THEME . '/assets/img/post/shape-4.svg'; ?>" width="97" height="97" alt="" class="shape shape--5">
						</div>
					</div>
				</article>
			<?php endwhile;
		} ?>
	</section>
<?php
	get_footer('dev');