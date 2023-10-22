<?php
	/**
	 * Страница с кастомным шаблоном
	 * @package WordPress
	 * @subpackage Surf.ru
	 * Template Name: Expertise Landing (corporate-apps)
	 */
	get_header(); // подключаем header.php ?>
	<section class="cjm_ca">
		<div class="linear" style="<?php the_field( 'grad' ) ?>;"></div>
<!--		<div class="container">-->
			<?php if ( have_posts() ) {
				while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<div class="container">
							<h1 class="home-title"><?php the_super_title(); // заголовок поста ?></h1>

							<div class="kratkoe mb">
								<?php the_field( 'kratkoe' ) ?>
								<a href="/discuss" class="callme">
									<?= is_lang_en() ? 'Discuss the project' : 'Обсудить проект'; ?>
								</a>
							</div>
						</div>

						<div class="cjms">
							<?php the_content(); // контент ?>
						</div>
					</article>
				<?php endwhile;
			} // конец цикла ?>

			<?php //get_template_part('form'); ?>
<!--		</div>-->
	</section>

<?php get_template_part( 'call' ); ?>
<?php get_footer(); // подключаем footer.php ?>