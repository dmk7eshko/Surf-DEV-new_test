<?php
/**
 * Запись в цикле (post-loop.php)
 * @package WordPress
 * @subpackage Surf
 */ 

$cat = get_the_category()[0];
$img = get_the_post_thumbnail_url(get_the_id(), 'sigler' );
!$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
?>

<article id="post-<?php the_ID(); ?>" class="blog-post col-lg-4 col-sm-6" onclick="window.location='<?php the_permalink($post->ID); ?>';">
	<section class="blog-post-image">
		<a href="<?php the_permalink() ?>">
			<?php if ( $img ) { ?>
					<img src="<?= $img ?>" alt="<?php the_title() ?>" />
				<?php } else {?>
					<img src="https://surf.dev/wp-content/webp-express/webp-images/uploads/2021/07/Frame-5648.jpg.webp" alt="<?php the_title() ?>" />
				<?php } ?>

		</a>
	</section>
	<section class="blog-post-content">
		<div class="blog-post_meta">
			<a class="blog-post-category" href="<?= get_category_link($cat->term_id) ?>">
				<?= $cat->name ?>
			</a>
			<?php echo do_shortcode('[rt_reading_time post_id="' . $data->ID . '"] MIN READ') ?>
		</div>
		<div class="blog-post_link"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
		<div class="blog-post-excerpt">
			<?php 
				$desc = get_post_meta(get_the_ID(), '_yoast_wpseo_metadesc', true);
				if ( empty( $desc ) ) {
					the_excerpt_max_charlength( 140, get_the_ID() );
				} else {
					echo $desc;
				} 
			?>
		</div>
	</section>
</article>