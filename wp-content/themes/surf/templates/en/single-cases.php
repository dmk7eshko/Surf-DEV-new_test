<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage Surf.ru
 */
get_header(); // подключаем header.php ?>
    <section class="single-page">
        <?php if (have_posts()) {
            while (have_posts()) : the_post(); // старт цикла ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
                    <div class="single-hero">
                        <?php if (get_field('color')): ?>
                            <div class="linear mobile-hidden" style="background: radial-gradient(ellipse at top, <?php the_field('color') ?> 0%, rgba(249,249,249,0.12) 50%);"></div>
                        <?php else : ?>
                            <div class="linear mobile-hidden" style="<?php the_field('gradient') ?>"></div>
                        <?php endif ?>
                        <div class="container">
                            <h1><?php the_title(); // заголовок поста ?></h1>
                            <div class="the-date">
                                <?php the_field('top-title') ?>
                            </div>
<!--	                        <div class="linear desktop-hidden" style="background: --><?php //the_field('color') ?><!--">-->
<!--		                        --><?php
	                        $img = get_field( 'hero_image' );
//		                        if ( $img ) : ?>
<!--			                        <div class="single-hero-image desktop-hidden">-->
<!--				                        --><?php //echo '<img src="' . $img['url'] . '" alt="" />'; ?>
<!--			                        </div>-->
<!--		                        --><?php //endif ?>
<!--	                        </div>-->
	                        <?php if ( get_field( 'hero_image' ) ) : ?>
		                        <div class="single-hero-image">
			                        <?php echo '<img src="' . $img['url'] . '" alt="" />'; ?>
		                        </div>
	                        <?php endif; ?>
                        </div>
                    </div>

	                <?php if (isset($_GET['test'])) : ?>
		                <aside class="listing case-cross-tags">
			                <?php if ($similar_cases = CrossTagsController::getSimilarPosts(get_the_ID(), 'cases', 3)) : ?>
				                <div class="hardcore-block hardcore-read-next">
					                <h4>Read Next:</h4>
					                <ul class="read-next-list">
						                <?php foreach ($similar_cases as $similar_case){ ?>
							                <li>
								                <a href="<?php echo get_permalink($similar_case->ID)?>">
									                <?php echo $similar_case->post_title?>
								                </a>
							                </li>
						                <?php } ?>
					                </ul>
				                </div>
			                <?php endif; ?>
		                </aside>
	                <?php endif; ?>

                    <div class="container">
                        <?php the_content(); // контент ?>
                    </div>

                </article>
            <?php endwhile;
        } // конец цикла ?>
    </section>
<?php
// Check rows exists.
if (have_rows('commanda')): ?>
    <section class="comanda">
        <div class="container">
            <div class="titled">
                Команда <br/> 1-го релиза
            </div>
            <div class="comanda-full">
                <div class="comanda-half">
                    <?php
                    // Check rows exists.
                    if (have_rows('commanda')):
                        
                        
                        // Loop through rows.
                        while (have_rows('commanda')) : the_row();
                            
                            // Load sub field value.
                            $nameotdel = get_sub_field('name-otdel');
                            $comanda   = get_sub_field('comanda');
                            
                            echo '<div class="comm">
									<div class="com-title">' . $nameotdel . '</div>
									<div class="com-people">' . $comanda . '</div>
								</div>';
                            // End loop.
                        endwhile;
                    // No value.
                    else :
                        // Do something...
                    endif;
                    ?>
                </div>
                <div class="comanda-half">
                    <?php
                    // Check rows exists.
                    if (have_rows('commanda2')):
                        
                        // Loop through rows.
                        while (have_rows('commanda2')) : the_row();
                            
                            // Load sub field value.
                            $nameotdel = get_sub_field('name-otdel');
                            $comanda   = get_sub_field('comanda');
                            
                            echo '<div class="comm">
									<div class="com-title">' . $nameotdel . '</div>
									<div class="com-people">' . $comanda . '</div>
								</div>';
                            // End loop.
                        endwhile;
                    // No value.
                    else :
                        // Do something...
                    endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

<section class="related-cases">
    <div class="container">
        <div class="titled">Other Case Studies</div>

        <?php if (isset($_GET['test'])) : ?>
            <?php if ($similar_cases = CrossTagsController::getSimilarPosts(get_the_ID(), 'cases', 2)) : ?>
                <ul class="front-cases">
                    <?php foreach ($similar_cases as $similar_case) :
                        $img = get_the_post_thumbnail($similar_case, 'caseleft');
                    ?>
                        <li class="front-case">
                            <div class="case-link" onClick="window.location = '<?php echo get_the_permalink($similar_case) ?>'">
                                <div class="front-case-image">
                                    <?php echo $img ?>
                                </div>

                                <div class="front-case-content">
                                    <span class="front-case-title">
                                        <h3><?php echo get_the_title($similar_case) ?></h3>
                                    </span>

                                    <div class="front-case-desc">
                                        <?php echo get_field('top-title', $similar_case) ?>
                                    </div>

                                    <span class="front-more">
                                        View case study
                                    </span>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php else : ?>
            <ul class="front-cases">
                <?php
                $idPost = get_the_ID();
                // задаем нужные нам критерии выборки данных из БД
                $args = array(
                    'posts_per_page' => 2,
                    'orderby'        => 'rand',
                    'post_type'      => 'cases',
                    'post__not_in'   => array($idPost),
                );

                $query = new WP_Query($args);


                // Цикл
                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $img = get_the_post_thumbnail('', 'caseleft');
                        ?>
                        <li class="front-case">
                            <div class="case-link" onClick="window.location = '<? the_permalink() ?>'">
                                <div class="front-case-image">
                                    <?= $img ?>
                                </div>
                                <div class="front-case-content">
                                    <span class="front-case-title">
                                        <h3><?php the_title() ?></h3>
                                    </span>
                                    <div class="front-case-desc">
                                        <? the_field('top-title') ?>
                                    </div>
                                    <span class="front-more">
                                        View case study
                                    </span>
                                </div>
                            </div>
                        </li>
                    <?php }
                }
                // Возвращаем оригинальные данные поста. Сбрасываем $post.
                wp_reset_postdata();
                ?>
            </ul>
        <?php endif; ?>

    </div>
</section>

<?php get_template_part('templates/contact'); ?>
<?php get_footer(); // подключаем footer.php ?>