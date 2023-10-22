<?php
	/**
	 * Страница с кастомным шаблоном
	 * @package WordPress
	 * @subpackage Surf.dev
	 * Template Name: DEV Flutter
	 */
	get_header('dev');
?>

	<main class="main">

		<?php
		get_template_part('templates/en/flutter/hero');
		get_template_part('templates/en/flutter/choose');
		get_template_part('templates/en/flutter/download');
		get_template_part('templates/en/flutter/founders');
		get_template_part('templates/en/flutter/contact');
		?>

	</main>

<?php
	get_footer('dev');
