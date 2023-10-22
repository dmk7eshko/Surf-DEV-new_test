<?php
/**
 * Шаблон обычной страницы (page.php)
 * @package WordPress
 * @subpackage Surf.ru
 */
get_header(); // подключаем header.php ?>
    <section class="single-page">
        <div class="container">
            <?php if (have_posts()) {
                while (have_posts()) : the_post(); // старт цикла ?>
                    <h1><?php the_title(); // заголовок поста ?></h1>
                    <?php the_content(); // контент ?>
                <?php endwhile;
            } // конец цикла ?>
        </div>
    </section>
<?php get_footer(); // подключаем footer.php ?>