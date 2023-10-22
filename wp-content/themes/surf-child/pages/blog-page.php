<?php
/**
 * Шаблон страницы блога
 * Template Name: Blog page template
 * @package WordPress
 * @subpackage your-clean-template-3
 */
$shown_blog_posts = [];

get_header(); // подключаем header.php ?>

    <section class="the-category">
        <div class="container">
			<h1 class="page-title"><?php the_title() ?></h1>
            <?php //get_template_part('searchform'); ?>
            <div class="blog-wrapper">
				
				<?php get_template_part('blog-filters') ?>
               
                <div class="blog-content-posts">
                   <script>(function () {
                            window.s_admin_ajax = "<?= admin_url('admin-ajax.php');?>";
                            window.s_shown_posts = []<?php /* <?= json_encode($shown_blog_posts) ?> */ ?>})()</script>
                     <div class="blog-posts blog-posts_loader row">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' => 4,
                            'orderby'        => 'date',
                            'post__not_in' => $shown_blog_posts,
							'paged' => 1,
                        );
                        
                        $query = new WP_Query($args);
                        
                        // Цикл
                        if ($query->have_posts()) {
							$postCount = 1;

                            while ($query->have_posts()) {
							
								$postCount++;
								$query->the_post();
								$cat = get_the_category()[0];
								$img = get_the_post_thumbnail_url(get_the_id(), 'sigler' );
								!$img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
								 if($postCount == 2) { 
									 ?><div class="first-post col-md-12 col-sm-6">
                                <article id="post-<?php the_ID(); ?>" class="blog-post row" onclick="window.location='<?php the_permalink($post->ID); ?>';">
									<section class="blog-post-image col-md-8 col-12">
										<a href="<?php the_permalink() ?>">
											<img src="<?= get_the_post_thumbnail_url(get_the_id(), 'large' ) ?>" alt="<?php the_title() ?>" />
										</a>
									</section>
									<section class="blog-post-content col-md-4 col-12">
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
						 </div><?php
							 } else {
                                get_template_part('post-loop');
							 }
                            }
                        } else {
                            // Постов не найдено
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </div>
					<div class="row">
						<div id="load-more" class="btn btn-transparent col-12">View more</div>
    				</div>
                </div>
				
            </div>
        </div>
		 <div class="blog-content">
					 
                    <?php the_content() ?>
	
                </div>
    </section>

<?php get_template_part('templates/contact'); ?>
<?php get_footer(); // подключаем footer.php ?>