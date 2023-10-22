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
			<h1>Case studies</h1>

			<div class="primary" style="display:block;">
				<div class="filter-inputs">

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

				<div id="fill" class="in-cases-home">

					<?php
						$args = array(
							'posts_per_page' => - 1,
							'orderby'        => 'date',
							'post_type'      => 'cases',
							'tax_query'      => array(
								array(
									'taxonomy' => 'otrasli',
									'field'    => 'id',
									'terms'    => $current_term->term_id,
								)
							)
						);

						$query = new WP_Query( $args );
						$i     = 0;

						if ( $query->have_posts() ) :
							while ( $query->have_posts() ) :
								$query->the_post();
								$i ++;
								if ( ( $i % 2 ) != 0 ) :
									?>
									<div class="cases-home">
									<div class="case case-small">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('caseleft') ?></a>
										<a class="case-name" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
										<div class="case-desc"><?php the_field('top-title') ?></div>
									</div>
								<?php else: ?>
									<div class="case case-small">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('caseleft') ?></a>
										<a class="case-name" href="<?php the_permalink(); ?>"><?php the_title() ?></a>
										<div class="case-desc"><?php the_field('top-title') ?></div>
									</div>
									</div>
								<?php endif;
							endwhile;
						endif;
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
	</section>
<?php //get_template_part( 'call' ); ?>
<?php get_footer(); // подключаем footer.php ?>