<?php if ( $courses = get_field( 'tabs_courses' ) ) : ?>
	<section class="tabs">
		<div class="container">
			<?php if ( get_field( 'tabs_title' ) ) : ?>
				<h2 class="tabs__title"><?= get_field( 'tabs_title' ); ?></h2>
			<?php endif; ?>
			<div class="tabs__pagination swiper">
				<div class="swiper-wrapper">
					<?php foreach ( $courses as $key => $course ) : $content = $course['content']; ?>
						<div class="swiper-slide">
							<div class="tabs__pagination-button<?= $key === 0 ? ' tabs__pagination-button--active' : null; ?>" data-index="<?= $key; ?>">
								<?= $course['title']; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<div class="tabs__slider swiper">
				<div class="swiper-wrapper">
					<?php foreach ( $courses as $course ) : $content = $course['content']; ?>
						<div class="swiper-slide tabs__slider-item">
							<div class="research-block tabs__slider-block">
								<?php foreach ( $content as $item ) : ?>
									<div class="research-block__item tabs__slider-block__item">
										<h3 class="research-block__title tabs__slider-block__title"><?= $item['title']; ?></h3>
										<div class="research-block__content tabs__slider-block__content"><?= $item['text']; ?></div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>