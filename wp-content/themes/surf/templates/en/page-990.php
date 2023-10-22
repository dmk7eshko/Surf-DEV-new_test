<?php
/**
 * Страница с кастомным шаблоном
 * @package WordPress
 * @subpackage Surf.ru
 * Template Name: Landing
 */
get_header(); // подключаем header.php ?>
    <section class="in-surf career">
        <div class="linear" style="<?php the_field('gradient') ?>;"></div>
        <div class="container">
            <?php if (have_posts()) {
                while (have_posts()) : the_post(); // старт цикла ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1><?php the_title(); // заголовок поста ?></h1>
                        <div class="work-us"><?php the_field('podzag') ?></div>
                        <div class="first"><?php the_field('first') ?></div>
                        <?php the_content(); // контент ?>
                    </article>
                <?php endwhile;
            } // конец цикла ?>
        </div>
    </section>
<?php get_footer(); // подключаем footer.php ?>