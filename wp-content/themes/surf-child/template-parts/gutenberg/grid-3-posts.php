<?php
$parent = get_field('title-and-text-block-1-3'); 
?>

<section class="blog-row bg-<?php echo $parent['background_color']; ?>">
    <div class="container">
        <div class="heading">
                <div class="row">					
                    <h2 class="heading-title col-12 col-md-12 col-lg-3"><?php echo $parent['title']; ?></h2>
                    <div class="heading-text col-12 col-md-12 col-lg-6 col-lg-offset-1">
                        <?php echo $parent['text']; ?>
                    </div>
            	</div>
        </div>
        <div class="blog-posts swiper postsSwiper">
			<div class="swiper-wrapper">
            <?php if ( have_rows('three_posts') ) {
					while( have_rows('three_posts') ) {
						the_row();
						global $shown_blog_posts;
						( !isset( $shown_blog_posts ) ) && ( $shown_blog_posts = [] );
						$shown_blog_posts = $data->ID;
						$data = get_sub_field( 'post_object' );
						$img = get_the_post_thumbnail_url($data->ID, 'full');
						!$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
						$categories = get_the_category( (int) $data->ID );
						?>
			
            <article class="blog-posts-item col-md-4 col-sm-6 swiper-slide" onclick="window.location='<?= get_permalink($data->ID) ?>';">
                <div class="blog-posts_image">
                    <a href="<?= get_permalink($data->ID) ?>">
                        <img src="<?= $img ?>" alt="<?= $data->post_title ?>" />
                    </a>
                </div>

                <div class="blog-posts-content">
                    <div class="blog-posts_meta">
						<a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ) ?>">
                        <?php 
								echo get_the_category( $data->ID )[0]->name;	
						?>
						</a>
						<?php echo do_shortcode('[rt_reading_time post_id="' . $data->ID . '"] MIN READ') ?>
                    </div>
                    <div class="blog-posts_title">
                        <a href="<?= get_permalink($data->ID) ?>">
                            <?= $data->post_title ?>
                        </a>	
                    </div>
					<div class="blog-posts-excerpt">
						<?php echo substr(get_post_meta($data->ID, '_yoast_wpseo_metadesc', true), 0, 100) ?>
					</div>
                </div>
            </article>
			
            <?php } 
				} ?>
			</div>
				<div class="swiper-buttons swiper-button-next"><img src = "https://surf.dev/staging/wp-content/uploads/2023/08/post-slider-arrow.svg" alt="button next"/></div>
    			<div class="swiper-buttons swiper-button-prev"><img src = "https://surf.dev/staging/wp-content/uploads/2023/08/post-slider-arrow.svg" alt="button prev"/></div>
			</div>
		<?php if(get_field('btn_text')): ?>
		<a class="btn btn-transparent fw" href="<?= get_field('btn_link') ?>"> <?= get_field('btn_text') ?></a>
		<?php endif; ?>
        </div>
		
</section>