<?php
	/**
	 * Страница с кастомным шаблоном
	 * @package WordPress
	 * @subpackage Surf.ru
	 * Template Name: Landing NEW
	 */
	get_header(); ?>

	<div class="linear" style="<?php wp_is_mobile() ? the_field( 'mobile_grad' ) : the_field( 'grad' ) ?>;"></div>

	<?php if ( have_posts() ) {
		while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="container">
					
					<?php if (get_field('testing_page_logo')) : ?>
						<div class="testing-logo">
							<img src="<?php the_field('testing_page_logo') ?>">
						</div>
					<?php endif; ?>
					
					<h1 class="home-title"><?php the_super_title(); // заголовок поста ?></h1>

					<?php if (get_field('intro_cols') && $ads = get_field('intro_ads')) : ?>
						<div class="kratkoe">
							<p><?php the_field( 'kratkoe' ) ?></p>
						</div>
						<div class="intro-list">
							<?php foreach ($ads as $ad) : ?>
								<div class="intro-list__item">
									<div class="intro-list__item-title">
										<p><?= $ad['title']; ?></p>
									</div>
									<?php if ($ad['items']) : ?>
										<ul>
											<?php foreach ($ad['items'] as $item) : ?>
												<li><?= $item['text']; ?></li>
											<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</div>
							<?php endforeach; ?>
						</div>
						<div class="kratkoe mb">
							<?php if (is_page('career')) : ?>
								<a href="/career/discuss/" class="callme">
							<?php else: ?>
								<a href="/discuss" class="callme">
							<?php endif;
								$btn = get_field( 'call_text' );
								if ($btn) {
									echo $btn;
								} else {
									echo is_lang_en() ? 'Discuss the project' : 'Обсудить проект';
								}
								?>
							</a>
						</div>
					<?php else: ?>
						<div class="kratkoe mb">
							<p><?php the_field( 'kratkoe' ) ?></p>
							<?php if (is_page('career')) : ?>
								<a href="/career/discuss/" class="callme">
							<?php else: ?>
								<a href="/discuss" class="callme">
							<?php endif;
								$btn = get_field( 'call_text' );
								if ($btn) {
									echo $btn;
								} else {
									echo is_lang_en() ? 'Discuss the project' : 'Обсудить проект';
								}
								?>
							</a>
						</div>
					<?php endif; ?>
				</div>
				<div class="cjms">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile;
	}

	if (is_lang_ru()) {
		get_template_part( 'call' );
	} else {
	    get_template_part('templates/en/discuss', 'form');
	}
	get_footer();