<?php
	/**
	 * Страница Sprint Zero
	 * @package WordPress
	 * @subpackage Surf.ru
	 * Template Name: Sprint Zero
	 */

	get_header();
?>

<section class="cjm_ca">
    <div class="linear" style="<?php the_field( 'grad' ) ?>;"></div>
    <?php if ( have_posts() ) {
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="container">
                    <h1 class="home-title"><?php the_super_title(); ?></h1>

                    <div class="kratkoe mb">
                        <?php the_field( 'kratkoe' ) ?>
                        <a href="/discuss" class="callme">
                            <?= is_lang_en() ? 'Discuss the project' : 'Обсудить проект'; ?>
                        </a>
                    </div>
                </div>

                <div class="cjms">
                    <?php the_content(); // контент ?>
                </div>
            </article>
        <?php endwhile;
    } ?>
</section>

<?php if (is_lang_ru()){
    get_template_part( 'call' );
} else {
    get_template_part('templates/en/discuss', 'form');
} ?>

<?php get_footer();