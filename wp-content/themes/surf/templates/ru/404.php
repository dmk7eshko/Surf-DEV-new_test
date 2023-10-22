<?php
	/**
	 * Страница 404 ошибки (404.php)
	 * @package WordPress
	 * @subpackage your-clean-template-3
	 */
	get_header(); // Подключаем header.php ?>
	<section class="the-404">
		<div class="container">
			<h1>404</h1>
			<h2>Страница не найдена</h2>
			<p>Мы сожалеем, но страница, на которую вы пытались перейти, не существует. Пожалуйста, вернитесь на предыдущую страницу или воспользуйтесь меню сайта</p>
			<div class="goback" onClick="javascript:history.back();">Предыдущая страница</div>
		</div>
	</section>
<?php get_footer(); // подключаем footer.php ?>