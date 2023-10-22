<?php if ( have_rows( 'research' ) ) : ?>
	<section class="research">
		<div class="container">
			<?php if ( get_field( 'research_title' ) ) : ?>
				<div class="front-section-title">
					<h2><?php the_field( 'research_title' ) ?></h2>
				</div>
			<?php endif; ?>
			<div class="research-block">
				<?php while ( have_rows('research') ) : the_row(); ?>
					<div class="research-block__item">
						<?php
						if ( have_rows( 'item' ) ):
							while ( have_rows( 'item' ) ): the_row();
								if ( get_row_layout() == 'editor' ):
									$title = get_sub_field( 'title' );
									$content = get_sub_field( 'content' );
								?>
									<h3 class="research-block__title"><?= $title; ?></h3>
									<div class="research-block__content"><?= $content; ?></div>
								<?php  elseif ( get_row_layout() == 'team' ):
									$folks = get_sub_field( 'folks' );
								?>
									<ul class="research-block__team">
										<?php foreach ($folks as $folk) : ?>
											<li class="research-block__person">
												<div class="research-block__person-image">
													<img src="<?= $folk['photo'] ?>" alt="<?= $folk['name'] ?>">
												</div>
												<div class="research-block__person-info">
													<p class="research-block__person-name"><?= $folk['name'] ?></p>
													<span class="research-block__person-position"><?= $folk['position'] ?></span>
												</div>
											</li>
										<?php endforeach; ?>
									</ul>
								<?php
								endif;
							endwhile;
						endif;
						?>
					</div>
				<?php endwhile; ?>
			</div>
		</div>
	</section>
<?php endif; ?>