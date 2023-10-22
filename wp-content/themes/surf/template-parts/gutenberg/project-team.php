<section class="section project-team">
	<div class="container">
		<div class="project-team-header">
			<?php if ($title = get_field('pt_title')) : ?>
				<h2 class="project-team-header__title"><?= $title; ?></h2>
			<?php endif;
			if ($subtitle = get_field('pt_subtitle')) : ?>
				<p class="project-team-header__text"><?= $subtitle; ?></p>
			<?php endif; ?>
		</div>
		<div class="project-team-block">
			<?php if ($team = get_field('pt_team')) : ?>
				<ul class="project-team-list">
					<?php foreach ($team as $item) : ?>
						<li class="project-team-list__item">
							<?php if ($item['count']) : ?>
								<span class="project-team-list__item-count"><?= $item['count']; ?></span>
							<?php endif;
							if ($item['text']) : ?>
								<span class="project-team-list__item-text"><?= $item['text']; ?></span>
							<?php endif;
							if ($item['team']) : ?>
								<div class="project-team-list__item-persons">
									<?php foreach ($item['team'] as $person) : ?>
										<span class="project-team-list__item-person">
											<?= wp_get_attachment_image( $person['img'], [56, 56], null, ['decoding' => 'sync'] ); ?>
										</span>
									<?php endforeach; ?>
								</div>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif;
			if ($text = get_field('pt_text_after')) : ?>
				<p class="project-team-text"><?= $text; ?></p>
			<?php endif; ?>
		</div>
	</div>
</section>
