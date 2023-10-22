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
			<h2>Page not found</h2>
			<p>We're sorry, but the page you were trying to visit does not exist. Please return to the previous page or use the site menu</p>
			<div class="goback" onClick="javascript:history.back();">To previous page</div>
		</div>
	</section>
<?php get_footer(); // подключаем footer.php ?>