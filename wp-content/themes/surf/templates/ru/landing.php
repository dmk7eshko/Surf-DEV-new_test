<?php
/**
 * Страница с кастомным шаблоном
 * @package WordPress
 * @subpackage Surf.ru
 * Template Name: CJM Landing
 */
get_header(); // подключаем header.php ?>
<section class="cjm">
<div class="linear" style="<?php wp_is_mobile() ? the_field('mobile_grad') : the_field('grad') ?>;"></div>
    <div class="container">
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<h1><?php the_super_title(); // заголовок поста ?></h1>

                        <div class="kratkoe mb">
                            <?php the_field('kratkoe') ?>
                            <a href="/discuss" class="callme">
                                <?php
                                    $btn = get_field('call_text');
                                    echo $btn ? $btn : 'Обсудить проект';
                                ?>
                            </a>
                        </div>

                        <div class="cjms">
						    <?php the_content(); // контент ?>
                        </div>
					</article>
				<?php endwhile; // конец цикла ?>

                <?php //get_template_part('form'); ?>
    </div>
</section>
<?php get_template_part('call'); ?>
<?php get_footer(); // подключаем footer.php ?>