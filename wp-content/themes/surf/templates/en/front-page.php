<?php if (!is_page_template('tpl-dev-homepage.php')) :
	get_header('dev'); ?>
		<main class="main main--bg">
			<?php the_content(); ?>
		</main>
	<?php get_footer('dev');
else:
	get_template_part('tpl-dev-homepage');
endif; ?>