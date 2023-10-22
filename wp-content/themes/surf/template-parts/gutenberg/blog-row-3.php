<div class="blog-row-posts">
	<div class="container">
		<h2><?php the_field('title') ?></h2>
		<p class="blog-row-posts-description"><?php the_field('description') ?></p>

		<div class="blog-row-posts-list">
			<?php if (isset($_GET['test'])) : ?>
				<?php if ($similar_articles = CrossTagsController::getSimilarArticles(get_the_ID())) : ?>
					<?php foreach ($similar_articles as $similar_article) :
						$cat = get_the_category($similar_article->ID)[0];
						$img = get_the_post_thumbnail_url($similar_article->ID, 'full');
						!$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
						?>
						<article class="blog-row-post">
							<div class="blog-row-post-image">
								<a href="<?php echo get_permalink($similar_article->ID)?>">
									<img src="<?php echo $img?>" alt="<?php echo $similar_article->post_title?>" />
								</a>
							</div>

							<div class="blog-row-post-content">
								<a class="blog-row-post-category" href="<?= get_category_link($cat->term_id)?>">
									<?php echo $cat->name?>
								</a>

								<h3>
									<a href="<?php echo get_permalink($similar_article->ID)?>">
										<?php echo $similar_article->post_title?>
									</a>
								</h3>
							</div>
						</article>
					<?php endforeach; ?>
				<?php endif; ?>
			<?php else : ?>
				<?php if ( have_rows('posts') ) {
					while( have_rows('posts') ) {
						the_row();

						global $shown_blog_posts;
						( !isset( $shown_blog_posts ) ) && ( $shown_blog_posts = [] );
						$shown_blog_posts[] = $data->ID;

						$data = get_sub_field( 'post' );
						$cat = get_the_category($data->ID)[0];
						$img = get_the_post_thumbnail_url($data->ID, 'full');
						!$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
						?>
						<article class="blog-row-post">
							<div class="blog-row-post-image">
								<a href="<?= get_permalink($data->ID) ?>">
									<img src="<?= $img ?>" alt="<?= $data->post_title ?>" />
								</a>
							</div>
							<div class="blog-row-post-content">
								<a class="blog-row-post-category" href="<?= get_category_link($cat->term_id) ?>">
									<?= $cat->name ?>
								</a>
								<h3><a href="<?= get_permalink($data->ID) ?>">
										<?= $data->post_title ?>
									</a></h3>
							</div>
						</article>
					<?php } ?>
				<?php } ?>
			<?php endif; ?>
		</div>
	</div>
</div>