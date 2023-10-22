<?php if (!get_field('pubs_view')) : ?>
	<div class="pubs">
		<div class="container">
			<?php if (get_field( 'pubs_title' )) : ?>
				<div class="front-section-title">
					<h2>
						<?php the_field( 'pubs_title' ) ?>
					</h2>
				</div>
			<?php endif; ?>
			<div class="pubs-grid">
				<?php if ($pubs = get_field('pubs')) :
					foreach ($pubs as $post) : ?>
						<div class="pubs-grid__item pub">
							<a href="<?= $post['link']; ?>" class="pub__preview" target="_blank">
								<div class="pub__preview-image">
									<img src="<?= $post['image']; ?>" alt="">
								</div>
								<div class="pub__preview-text">
									<p><?= $post['text']; ?></p>
									<span><img src="<?= get_template_directory_uri() . '/assets/img/link.svg' ?>" width="32" height="32" alt=""></span>
								</div>
							</a>
							<span class="pub__title"><?= $post['title']; ?></span>
						</div>
					<?php
					endforeach;
				endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>