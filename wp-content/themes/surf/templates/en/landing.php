<?php
/**
 * Страница с кастомным шаблоном
 * @package WordPress
 * @subpackage Surf.ru
 * Template Name: Landing
 */
get_header(); // подключаем header.php ?>
<section class="cjm">
	<?php if(wp_is_mobile()): ?>
			<div class="linear" style="background:url('<?php the_field('top-img') ?>')"></div>
	<?php endif; ?>
    <div class="container">
		<?php if ( have_posts() ) :
			while ( have_posts() ) : the_post(); // старт цикла ?>
		
				<h1><?php the_title(); // заголовок поста ?></h1>

                <div class="kratkoe mb">
                    <?php the_field('kratkoe') ?>
                    <a href="/discuss" class="callme">Contact us</a>
                </div>

                <div class="cjms">
				    <?php the_content(); // контент ?>
                </div>
			<?php endwhile; // конец цикла
		endif;?>
    </div>
</section>

<?php get_template_part('templates/en/discuss', 'form')?>

<style>
    .wp-block-columns {
        margin: 32px auto 32px;
    }
</style>

<?php if(is_page(978)): ?>
         
    <style>
        .wp-block-columns .wp-block-column p {
            max-width: 420px;
            margin-left:0;
        }

        .workshop:last-child span {
            background: #141313;
            color: #fff;
        }

            
    </style>
    
<?php endif; ?>


<?php get_footer(); // подключаем footer.php ?>