<?php
    /**
     * Шаблон обычной страницы (page.php)
     * @package WordPress
     * @subpackage Surf.ru
     */

    get_header();
?>

    <section class="single-article erfver">
        <?php if (have_posts()) {
            while (have_posts()) : the_post(); // старт цикла ?>
                <article id="post-<?php the_ID(); ?>" class="single-art erthbtr">
                    <div class="container post-content rthtr">
                        <div class="listing rtht">
                            <span>Contents</span>
                            <ul class="listing-content"></ul>
                        </div>
                        <div class="content">
                            <div class="big-title">
                                <div class="cats"><?php the_category(); ?></div>
                                <h1><?php the_title(); // заголовок поста ?></h1>
                            </div>
                            <?php
                            if ( ! get_field('hide_image')) {
                                echo '<div class="the_post_thumbnail">';
                                the_post_thumbnail('full');
                                echo '</div>';
                            }
                            ?>
                            
                            <?php the_content(); ?>
                        </div>
                        <aside class="hardcore-blocks">
                            <div class="hardcore-block hardcore-about-us">
                                <h3>We are Surf — Mobile App Development Company</h3>
                                <p>Design & technology partner for thriving startups and major brands.</p>
                                <a href="/cases">Explore our works</a>
                            </div>

                            <?php if (isset($_GET['test'])) : ?>
                                <?php if ($similar_articles = CrossTagsController::getSimilarPosts(get_the_ID(), 'post', 3)) : ?>
                                    <div class="hardcore-block hardcore-read-next">
                                        <h4>Read Next:</h4>
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
                                        <h4>Read Next:</h4>
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
    </section>

    <?php echo get_template_part('call');?>

<?php get_footer(); // подключаем footer.php ?>