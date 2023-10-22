<?php
	/**
	 * Страница архивов записей (archive.php)
	 * @package WordPress
	 * @subpackage your-clean-template-3
	 */

	$current_term = get_queried_object();

	get_header();
?>
	<section class="our-cases">
		<div class="container">
			<h1 class="page-title">Case Studies</h1>
			<div class="primary" style="display:block;">
				<div class="filter-inputs row">

					<div class="block-inputs getall">All cases</div>

					<?php
						$terms = get_terms( 'otrasli' );
						if ( $terms && ! is_wp_error( $terms ) ) {
							foreach ( $terms as $term ) {
								$current = ($term->term_id === $current_term->term_id ? ' selected' : '');
								echo '<div class="block-inputs branch' . $current . '" data-id="' . $term->term_id . '" >' . $term->name . '</div>';
							}
						}

						$terms = get_terms( 'type' );
						if ( $terms && ! is_wp_error( $terms ) ) {
							foreach ( $terms as $term ) {
								$current = ($term->term_id === $current_term->term_id ? ' selected' : '');
								echo '<div class="block-inputs type' . $current . '" data-id="' . $term->term_id . '" >' . $term->name . '</div>';
							}
						}
					?>
				</div>

				<div id="fill" class="case-wrap row">

					<?php
						$args = array(
							'posts_per_page' => 3,
							'paged' => $current,
                            'orderby'        => 'date',
							'post_type'      => 'cases',
							'tax_query'      => array(
								array(
									'taxonomy' => 'type',
									'field'    => 'id',
									'terms'    => $current_term->term_id,
								)
							)
						);

						$query = new WP_Query( $args );
						$i     = 0;

						if ($query->have_posts()) {
							$postCount = 1;

                            while ($query->have_posts()) {
									$query->the_post();
									
									$case_title = get_field('three_case_title', $post->ID);
									$case_bg = get_field('three_case_bg', $post->ID);
									$case_logo = get_field('three_case_logo', $post->ID);
									$case_award_logo = get_field('three_case_award_logo', $post->ID);
									$case_awards = get_field('three_case_awards', $post->ID);
									$case_mock = get_field('three_case_mock', $post->ID);
									$new_title = get_sub_field('new-title');
									
									$postCount++;
								
									setup_postdata($post);
	
									 ?>
                                <article id="post-<?php the_ID(); ?>" style="background-color: <?php echo $case_bg ?>" class="case-post row col-12 col-md-4" onclick="window.location='<?php the_permalink($post->ID); ?>';">
									
									<div class="case-post-content col-md-12 col-sm-7 col-12">
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
											<?php if($case_mock['url']): ?>
												<img src="<?= $case_mock['url'] ?>" alt="<?php the_title() ?>" />
											 <?php else : ?>
												<img src="https://surf.dev/staging/wp-content/uploads/2023/09/iPhone-14-Pro.png" />
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
<?php //get_template_part( 'call' ); ?>
<?php get_footer(); // подключаем footer.php ?>