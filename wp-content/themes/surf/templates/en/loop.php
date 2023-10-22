<?php
/**
 * Запись в цикле (loop.php)
 * @package WordPress
 * @subpackage Surf
 */ 

$cat = get_the_category()[0];
$img = get_the_post_thumbnail_url(get_the_id(), 'sigler' );
!$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
?>
<article id="post-<?php the_ID(); ?>" class="blog-post">
	<section class="blog-post-image">
		<a href="<?php the_permalink() ?>">
			<img src="<?= $img ?>" alt="<?php the_title() ?>" />
		</a>
	</section>
	<section class="blog-post-content">
		<a class="blog-post-category" href="<?= get_category_link($cat->term_id) ?>">
			<?= $cat->name ?>
		</a>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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