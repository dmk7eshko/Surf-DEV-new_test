<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage Surf.ru
 */
get_header(); // подключаем header.php ?>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
<section class="single-article">

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<article id="post-<?php the_ID(); ?>" class="single-art">
		<div class="container post-content">

			<div class="listing">
				<span>Оглавление</span>
				<ul class="listing-content"></ul>
			</div>

				<div class="content">
					<div class="big-title">
						<div class="cats"><?php the_category(); ?></div>
						<h1><?php the_title(); // заголовок поста ?></h1>
					</div>

					<?php
						if ( !get_field('hide_image') ) {
							echo '<div class="the_post_thumbnail">';
							the_post_thumbnail('full');
							echo '</div>';
						}
					?>
					
					<?php the_content(); ?>
				</div>

				<aside class="hardcore-blocks">
					
					<div class="hardcore-block hardcore-about-us">
						<h3>Вы в блоге Surf</h3>
						<p>Мы разрабатываем мобильные приложе- ния и помогаем в цифровизации крупного бизнеса.</p>
						<a href="/cases">Наши кейсы</a>
					</div>
					
					<?php
						if( have_rows('read_next') ) {
					?>
						<div class="hardcore-block hardcore-read-next">
							<h4>Рекомендуем по теме:</h4>
							<ul class="read-next-list">
								<?php
									while( have_rows('read_next') ) {
										the_row();
										$data = get_sub_field( 'post' );
								?>
									<li>
										<a href="<?= get_permalink($data->ID) ?>">
											<?= get_the_title($data->ID) ?>		
										</a>
									</li>
								<?php
									}
								?>
							</ul>
						</div>
					<?php
						}
					?>
				</aside>
			</div>

					</article>
				<?php endwhile; // конец цикла ?>
</section>

<?php /*
<section class="related-single">
	<div class="container">
		<div class="titled">Статьи по теме</div>

		<div class="rel-single">
			<?php
                    // задаем нужные нам критерии выборки данных из БД
                    $args = array(
                        'posts_per_page' => 2,
                        'orderby' => 'date'
                    );

                    $query = new WP_Query( $args );

                    // Цикл
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            get_template_part('new_loop'); 
                        }
                    } else {
                        // Постов не найдено
                    }
                    // Возвращаем оригинальные данные поста. Сбрасываем $post.
                    wp_reset_postdata();
                ?>
		</div>

		<div class="get-more">
            <div class="more">
                <a href="/blog/">Больше статей <img src="/wp-content/themes/surf/img/more.svg" alt=""></a> 
            </div>
        </div>


	</div>
</section>
*/ ?>

<?php get_footer(); // подключаем footer.php ?>