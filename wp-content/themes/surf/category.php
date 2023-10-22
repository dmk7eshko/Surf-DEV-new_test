<?php
/**
 * Шаблон рубрики (category.php)
 * @package WordPress
 * @subpackage your-clean-template-3
 */
get_header(); // подключаем header.php ?> 
<section class="the-category">
	<div class="container">
		<?php 
			$desc = category_description( $category_id );
			echo empty($desc)
				? '<h1>' . single_cat_title( '', false ) . '</h1>'
				: $desc;
		?>
		<?php //get_template_part('searchform'); ?>
		<?php 
			if (have_posts()) { 
				while (have_posts()) {
					the_post();
					get_template_part('loop');
				}
			} else {
				echo '<p>Нет записей.</p>';
			}
			pagination();
		?>
	</div>
</section>
<?php get_footer(); // подключаем footer.php ?>