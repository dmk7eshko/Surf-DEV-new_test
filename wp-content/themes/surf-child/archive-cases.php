<?php
	/**
	 * Страница архивов кейсов (archive.php)
	 * @package WordPress
	 */
	get_header(); // подключаем header.php ?>
	<section class="our-cases">
		<div class="container">
			<h1 class="page-title">Case Studies</h1>
			<div class="primary" style="display:block;">
				<div class="filter-inputs row">

					<div class="block-inputs getall selected" data-url="/staging/cases/">All</div>

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

				<div id="fill" class="case-wrap row">
					 <script>
						 (function () {
                            window.s_admin_ajax = "<?= admin_url('admin-ajax.php');?>";
                            window.s_shown_posts = []<?php /* <?= json_encode($shown_blog_posts) ?> */ ?>})()
					</script>
                    
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                         
                        $args = array(
                            'posts_per_page' => 3,
							'paged' => $current,
                            'orderby'        => 'date',
							'paged' => 1,
							'post_type' => 'cases',
                        );
                        
                        $query = new WP_Query($args);
                        
                        // Цикл
                        if ($query->have_posts()) {
							$postCount = 1;

                            while ($query->have_posts()) {
									$query->the_post();
									$cat = get_the_category()[0];
									$case_title = get_field('three_case_title', $post->ID);
									$case_bg = get_field('three_case_bg', $post->ID);
									$case_logo = get_field('three_case_logo', $post->ID);
									$case_award_logo = get_field('three_case_award_logo', $post->ID);
									$case_awards = get_field('three_case_awards', $post->ID);
									$case_mock = get_field('three_case_mock', $post->ID);
									$new_title = get_sub_field('new-title');
									
									$otrasli = get_terms('vid', $post->ID);
									$type = get_terms('type', $post->ID);
								
									$postCount++;
								
									setup_postdata($post);
	
									 ?>
                                <article id="post-<?php the_ID(); ?>" style="background-color: <?php echo $case_bg ?>" class="case-post row col-12 col-md-4" onclick="window.location='<?php the_permalink($post->ID); ?>';">
									
									<div class="case-post-content col-md-12 col-sm-7 col-12">
										
											<?php 
// 												$type = get_the_terms( $post->ID, 'type' );
// 												$otrasli = get_the_terms( $post->ID, 'otrasli' );

// 													foreach($type as $term) {
// 														echo $term->name;
// 													} 

// 													foreach($otrasli as $term) {
// 														echo $term->name;
// 													}

											?>

											
										
										 <div class="case-item_logo">
										   <?php
												if($case_logo['url']){
													echo '<img src="' . $case_logo['url'] . '" alt="" />'; 
												} else{
													echo '<img src="https://surf.dev/staging/wp-content/uploads/2023/04/Vector1.png" alt="" />';
										   }
									?>
						   </div>
										<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									</div>
									
									<div class="case-post-image col-md-12 col-sm-5 col-12">
											<?php if($case_mock['url']) : ?>
												<img src="<?= $case_mock['url'] ?>" alt="<?php the_title() ?>" />
											<?php endif;  ?>
									</div>
									
							</article>
						 <?php
							
                            }
                        } else {
                            // Постов не найдено
                        }
						
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    
				</div>
				<div class="row">
						<div id="load-more_cases" class="btn btn-dark col-12">View more</div>
    				</div>
			</div>
		</div>
	</section>

<?php get_template_part('templates/contact'); ?>
<?php get_footer(); // подключаем footer.php ?>