<?php
	/**
	 * Страница с кастомным шаблоном
	 * @package WordPress
	 * @subpackage Surf.dev
	 * Template Name: DEV Front
	 */
	get_header('dev');
?>
	<main class="main main--bg">
		<?php the_content(); ?>
	</main>
<?php
	get_footer('dev');