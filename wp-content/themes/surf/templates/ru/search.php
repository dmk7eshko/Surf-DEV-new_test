<?php
/**
 * Шаблон поиска (search.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<section class="the-category">
	<div class="container">
				<h1><?php printf('Ищем: %s', get_search_query()); // заголовок поиска ?></h1>
				<?php get_template_part('searchform'); ?>
				<?php if (have_posts()) : while (have_posts()) : the_post(); // если посты есть - запускаем цикл wp ?>
					<?php get_template_part('loop'); // для отображения каждой записи берем шаблон loop.php ?>
				<?php endwhile; // конец цикла
				else: echo '<p>Ничего не найдено.</p>'; endif; // если записей нет, напишим "простите" ?>	 
				<?php pagination(); // пагинация, функция нах-ся в function.php ?>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>