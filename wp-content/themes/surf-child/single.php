<?php
    /**
     * Шаблон страницы записи (single.php)
     * @package WordPress
     * @subpackage Surf.ru
     */

    	get_header();

		$posts_block_title = get_field( 'three_blocks_title' );
		$posts_block_subtitle = get_field( 'three_blocks_subtitle' );
		$posts_block_btn_title = get_field( 'three_blocks_btn-title' );
		$posts_block_btn_link = get_field( 'three_blocks_btn-link' );
?>

<section class="single-article">
    <?php if (have_posts()) {
            while (have_posts()) : the_post(); // старт цикла ?>

    <div class="post-banner" <?php if ($posts_banner_bg) :?>style="background-image: url(<?php echo $posts_banner_bg ?>)" <?php endif; ?>>
         <div class="container">
		<div class="banner-col left-col col-lg-6 col-lgs-7 col-md-8 col-12">
		<h1><?php the_title(); // заголовок поста ?></h1>
        <div class="post-cat"><?php the_category(); ?><?php echo do_shortcode('[rt_reading_time postfix="min read"]') ?></div>
		</div>
		</div>
    </div>
    <article id="post-<?php the_ID(); ?>" class="single-art container">
        <div class="row post-content">
			
            <div class="listing col-md-2 vis">
                <div class="listing-title">Contents</div>
                <ul class="listing-content"></ul>
            </div>
            <div class="content col-md-6 col-12 col-md-offset-1">
			
			<div class="author-blog">
				<div class="author-title">Author</div>
				<div class="author-description">
					<div class="author-avatar">
						<?php
							$author_id = get_the_author_meta('ID');
							$author_img = get_field('user_photo', 'user_'. $author_id );
						?>
						<img src="<?= $author_img; ?>" ?>
					</div>
				<div class="author-info">
					<a href="<?php echo get_author_posts_url( get_the_author_meta('ID') ); ?>"><?php echo get_the_author() ?></a>
						<?php	
							$author_badge = get_field('user_set', 'user_'. $author_id );
						?>
					<?php echo  $author_badge; ?>
					</div>
			    </div>
			</div>
				
				
                <?php
//                             if ( ! get_field('hide_image')) {
//                                 echo '<div class="the_post_thumbnail">';
//                                 the_post_thumbnail('full');
//                                 echo '</div>';
//                             }
                            ?>

                <?php the_content(); ?>
            </div>
            <aside class="hardcore-blocks col-md-2 col-md-offset-1">
                <!--                             <div class="hardcore-block hardcore-about-us">
                                <h3>We are Surf — Mobile App Development Company</h3>
                                <p>Design & technology partner for thriving startups and major brands.</p>
                                <a href="/cases">Explore our works</a>
                            </div> -->

                <?php if (isset($_GET['test'])) : ?>
                <?php if ($similar_articles = CrossTagsController::getSimilarPosts(get_the_ID(), 'post', 3)) : ?>
                <div class="hardcore-block hardcore-read-next">
                    <div class="listing-title">Read Next:</div>
                    <ul class="read-next-list">
                        <?php foreach ($similar_articles as $similar_article){ ?>
                        <li>
                            <a href="<?php echo get_permalink($similar_article->ID)?>">
                                <?php echo $similar_article->post_title?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php endif; ?>
                <?php else :
                                if (have_rows('read_next')) { ?>
                <div class="hardcore-block hardcore-read-next">
                    <div class="listing-title">Read Next:</div>
                    <ul class="read-next-list">
                        <?php while (have_rows('read_next')) {
									the_row();
									$data = get_sub_field('post');
						?>
                        <li>
                            <a href="<?= get_permalink($data->ID) ?>">
                                <?= get_the_title($data->ID) ?>
                            </a>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
                <?php } ?>
                <?php endif; ?>
            </aside>
	
        </div>
    </article>
    <?php endwhile;
        } // конец цикла ?>

<?php if( $posts_block_title): // check for repeater fields ?>
    <div class="blog-three-row-posts">
        <div class="container">
            <h2><?php echo $posts_block_title; ?></h2>
            <p class="blog-three-row-posts-description"><?php echo $posts_block_subtitle; ?></p>
            <div class="blog-three-row-posts-list">
               
                    <?php while ( have_rows('three_blocks_posts')) : the_row(); // loop through the repeater fields ?>
                    <?php // set up post object
						$post_object = get_sub_field('post_object');
						if( $post_object ) :
						$post = $post_object;
						setup_postdata($post);
						?>
                    <article class="blog-three-row-post">
                        <div class="blog-three-row-post-image">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'medium_large' ); ?>
                            </a>
                        </div>
                        <div class="blog-three-row-post-content">
                            <div class="blog-three-row-post-meta">
                                <?php echo get_the_date(); ?><?php echo do_shortcode('[rt_reading_time postfix="min read"]') ?>
                            </div>
                            <div class="blog-three-row-post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?> 
								</a>
                            </div>
                        </div>
                    </article>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
                    <?php endwhile; ?>
            </div>
            <a class="blog-three-row-post_btn" href="<?php echo $posts_block_btn_link ?>"><?php echo $posts_block_btn_title ?></a>
        </div>
    </div>
<!-- End Repeater -->
                <?php endif; ?>

</section>

<?php get_template_part('templates/contact'); ?>
<?php 
	get_footer();
  // подключаем footer.php ?>