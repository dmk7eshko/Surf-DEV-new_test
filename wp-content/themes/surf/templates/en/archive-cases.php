<?php
	/**
	 * Страница архивов записей (archive.php)
	 * @package WordPress
	 * @subpackage your-clean-template-3
	 */
	get_header(); // подключаем header.php ?>
	<section class="our-cases">
		<div class="container">
			<h1>Case Studies</h1>
			<div class="primary" style="display:block;">
				<div class="filter-inputs">

					<div class="block-inputs getall selected" data-url="/cases/">All</div>

					<?php
						$terms = get_terms('otrasli');
						if ($terms && !is_wp_error($terms)) {
							foreach ($terms as $term) {
								echo '<div class="block-inputs branch" data-url="'. get_category_link($term) . '" data-id="' . $term->term_id . '" >' . $term->name . '</div>';
							}
						}

						$terms = get_terms('type');
						if ($terms && !is_wp_error($terms)) {
							foreach ($terms as $term) {
								echo '<div class="block-inputs type" data-url="'. get_category_link($term) . '" data-id="' . $term->term_id . '" >' . $term->name . '</div>';
							}
						}
					?>
				</div>

				<div id="fill" class="in-cases-home">
					<?php
						$current = absint(max(1, get_query_var('paged') ? get_query_var('paged') : get_query_var('page')));


						// задаем нужные нам критерии выборки данных из БД
						$args = array(
							'posts_per_page' => -1,
//							'paged' => $current,
							'orderby' => 'date',
							'post_type' => 'cases',
						);

						$query = new WP_Query($args);

						$tt = 0;

						// Цикл
						if ($query->have_posts()) {
							while ($query->have_posts()) {
								$tt++;
								$query->the_post();
								if (!wp_is_mobile()) {
									if (($tt % 2) == 0) {
										get_template_part('cases2');
										echo '</div>';
									} else {
										echo '<div class="cases-home">';
										get_template_part('cases');
									}
								} else {
									if (($tt % 2) == 0) {
										get_template_part('cases');
										echo '</div>';
									} else {
										echo '<div class="cases-home">';
										get_template_part('cases');
									}
								}


							}
						} else {
							// Кейсов не найдено
						}


						if ($wp_query->max_num_pages > 1) : ?>
							<script>
								var ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
								var true_posts = '<?php echo serialize($wp_query->query_vars); ?>';
								var current_page = <?php echo (get_query_var('paged')) ? get_query_var('paged') : 1; ?>;
								var max_pages = '<?php echo $wp_query->max_num_pages; ?>';
							</script>
							<div id="true_loadmore">
								<div class="get-more">
									<div class="more">
										<a>Показать еще больше кейсов <img
												src="/wp-content/themes/surf/assets/img/more.svg" alt=""> </a>
									</div>
								</div>
							</div>
						<?php endif;


						// Возвращаем оригинальные данные поста. Сбрасываем $post.
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); // подключаем footer.php ?>