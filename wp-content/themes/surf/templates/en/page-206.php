<?php
/**
 * Шаблон страницы блога
 * @package WordPress
 * @subpackage your-clean-template-3
 */
$shown_blog_posts = [];

get_header(); // подключаем header.php ?>
    <section class="the-category">
        <div class="container">
            <?php //get_template_part('searchform'); ?>
            <div class="blog-wrapper">
				<?php get_template_part('blog-filters') ?>
                <div class="blog-content">
                    <?php the_content() ?>
                </div>
                <div class="blog-content-posts">
                    <script>(function () {
                            window.s_admin_ajax = "<?= admin_url('admin-ajax.php');?>";
                            window.s_shown_posts = []<?php /* <?= json_encode($shown_blog_posts) ?> */ ?>})()</script>
                    <h1>Latest Insights</h1>
                    
                    <div class="blog-posts">
                        <?php
                        // задаем нужные нам критерии выборки данных из БД
                        $args = array(
                            'posts_per_page' => -1,
                            'orderby'        => 'date',
                            //'post__not_in' => $shown_blog_posts,
                        );
                        
                        $query = new WP_Query($args);
                        
                        // Цикл
                        if ($query->have_posts()) {
                            while ($query->have_posts()) {
                                $query->the_post();
                                get_template_part('loop');
                            }
                        } else {
                            // Постов не найдено
                        }
                        // Возвращаем оригинальные данные поста. Сбрасываем $post.
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); // подключаем footer.php ?>