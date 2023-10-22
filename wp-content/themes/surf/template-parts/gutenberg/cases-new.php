<?php if ($cases = get_field('cases_section')) : ?>
	<section class="cases section">
		<div class="container">
			<?php if ($cases['title']) : ?>
				<div class="section-title">
					<h2 class="section-title__center"><?php echo $cases['title']; ?></h2>
				</div>
			<?php endif; ?>
			<?php if ($cases['list']) : ?>
				<ul class="cases-list">
					<?php foreach ($cases['list'] as $case) : ?>
						<li class="cases-list__item case <?php if ($case['case']['white']) {echo 'cases-list__item-new';} ?>">
							<?php if ($cat = $case['cat']) : ?>
								<a href="<?php echo $cat['url']; ?>" class="case__cat" title="<?php echo $cat['title']; ?>">
									<?php echo wp_get_attachment_image($cat['icon'], false, null, ['class' => 'case__cat-icon case__cat-icon--start', 'loading' => 'lazy', 'decoding' => 'async']); ?>
									<?php echo $cat['title']; ?>
									<img class="case__cat-icon case__cat-icon--end" src="<?= THEME . '/assets/img/home/link-icon.svg'; ?>" alt="">
								</a>
							<?php endif;
							if ($link = $case['case']) : ?>
								<a href="<?php echo $link['url']; ?>" class="case__link" title="<?php echo strip_tags($link['title']); ?>">
									<?php if ($link['logo']) : ?>
										<div class="case__icon">
											<?php echo wp_get_attachment_image($link['logo'], false, null, ['loading' => 'lazy', 'decoding' => 'async']); ?>
										</div>
									<?php endif; ?>
									<div class="case__image">
										<?php if ($link['img']) :
											echo wp_get_attachment_image($link['img'], false, null, ['loading' => 'lazy', 'decoding' => 'async']);
										else: ?>
											<img src="<?= THEME . '/assets/img/home/case-default.jpg'; ?>" alt="">
										<?php endif; ?>
										
										<?php if($link['img-text']) : ?>
											<div class="case-title-in-image"> 
												<span><?php echo $link['title']; ?></span>

												<?php if($link['medal-img']) : ?>
													<div class="case-medal-av"> <img src="<?php echo $link['medal-img']; ?>" alt=""><span><?php echo $link['medal-text']; ?></span></div>
												<?php endif; ?>
											</div>
										<?php endif; ?>
										
									</div>
									<h3 class="case__title"><?php echo $link['title']; ?><img class="case__title-icon" src="<?= THEME . '/assets/img/home/link-icon.svg'; ?>" alt=""></h3>
									<div class="case__text"><?php echo $link['text']; ?></div>
								</a>
							<?php endif; ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<?php if ($cases['more_btn']) : ?>
					<div class="section-more cases-more">
						<?php if ($cases['more_text']) : ?>
							<p class="section-more__text h3"><?php echo $cases['more_text']; ?></p>
						<?php endif; ?>
						<div class="th-cases-more-btns-wrap">
							<a href="#contact-section" class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form">Send request</a>
							<a href="/cases/" class="section-more__link btn btn-large btn-default"><?php echo $cases['more_btn']; ?></a>
						</div>
					</div>
				<?php endif;
			endif; ?>
		</div>
	</section>
<?php endif; ?>