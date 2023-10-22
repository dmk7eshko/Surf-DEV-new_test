<section class="related-posts">
	<div class="container">
		<?php if (get_field('related_title')) : ?>
			<div class="front-section-title">
				<h2><?php echo get_field('related_title'); ?></h2>
			</div>
		<?php endif;
		if (have_rows('related_articles')) : ?>
			<ul class="related-list">
				<?php
				while ( have_rows('related_articles') ) : the_row();
					if( get_row_layout() == 'post' ):
						$related = get_sub_field('related_posts'); ?>
						<li class="related-list__item">
							<a href="<?= get_the_permalink($related->ID); ?>" class="related-list__link" title="<?= $related->post_title; ?>">
								<div class="related-list__image">
									<?= get_the_post_thumbnail($related->ID, 'b525' ); ?>
								</div>
								<span class="related-list__tag"><?= get_the_category($related->ID)[0]->name; ?></span>
								<h3 class="related-list__title"><?= $related->post_title; ?></h3>
							</a>
						</li>
					<?php elseif ( get_row_layout() == 'external' ) :
						$img = get_sub_field('img');
						$content = get_sub_field('content'); ?>
						<li class="related-list__item">
							<a href="<?= $content['url']; ?>" class="related-list__link" title="<?= $content['title']; ?>" target="_blank">
								<div class="related-list__image">
									<?= wp_get_attachment_image( $img, 'b525' ); ?>
								</div>
								<span class="related-list__tag"><?= $content['category']; ?></span>
								<h3 class="related-list__title"><?= $content['title']; ?></h3>
							</a>
						</li>
					<?php endif;
				endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</section>
