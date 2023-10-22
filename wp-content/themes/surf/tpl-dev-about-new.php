<?php
/**
 * Template Name: About DEV NEW
 */

get_header('en');

$global_discuss = get_field('discuss', 'option');
$btn_text = 'Get free consultation';
$discuss = get_field('contacts');

if ($discuss && $discuss['title']){
	$person = array(
		'photo' => $discuss['photo'],
		'info' => $discuss['info']
	);
	$title = $discuss['title'];
	$subtitle = $discuss['subtitle'];
	$privacy = $discuss['privacy'] ?: $global_discuss['privacy'];
	$btn_text = $discuss['btn'] ?: $btn_text;
	$email = $global_discuss['email_en'] ?: 'hello@surf.dev';
	$phone = $global_discuss['phone'];
	$phone_link = substr_replace(preg_replace("/[^0-9]/", '', $phone), '+1', 0, 1);
} else {
	$person = $global_discuss['person'];
	$title = $global_discuss['title_en'] ?: 'Contact Us';
	$subtitle = $global_discuss['subtitle_en'] ?: 'Fill the form and get an estimate of your project';
	$email = $global_discuss['email_en'] ?: 'hello@surf.dev';
	$phone = $global_discuss['phone'];
	$phone_link = substr_replace(preg_replace("/[^0-9]/", '', $phone), '+1', 0, 1);
	$privacy = $global_discuss['privacy'];
}
?>

	<main class="main">

  <section class="th-banner-about" style="padding-bottom:0">
        <div class="container">
          <div class="th-banner-wrap">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          </div>
          <?php the_post_thumbnail('full', array('class' => 'th-banner-about__img')); ?>

          <?php if (get_field('banner-advantage-items')) : ?>
            <div class="th-grid th-banner-about__advantages">
          
              <?php while( have_rows('banner-advantage-items') ): the_row(); ?>
                <div class="th-banner-about__advantages-item">
                  <?php if (!get_sub_field('banner-advantage-items__img')) : ?>
                    <i><?php the_sub_field('banner-advantage-items__name'); ?></i>
                    <span><?php the_sub_field('banner-advantage-items__discr'); ?></span>
                  <?php else : ?>
                    <img src="<?php the_sub_field('banner-advantage-items__img'); ?>" alt="">
                  <?php endif; ?>
                </div>
              <?php endwhile; ?>

            </div>
          <?php endif; ?>
        </div>
      </section>

      <?php if (false) : ?> <!-- get_field('our-team') -->
      <?php while( have_rows('our-team') ): the_row(); ?>
        <section class="th-section-our-team th-section-black section">
          <div class="th-container-fluid">
            <div class="th-title-wrap">
              <h2 class="section-title"><?php the_sub_field('our-team__title'); ?></h2>
            </div>

            <div class="th-grid th-our-team__mobile">

              <?php if (get_sub_field('our-team-items')) : ?>
                <?php while( have_rows('our-team-items') ): the_row(); ?>

                <div class="th-our-team__item">
                  <div class="th-our-team__item-img-wrap">
                    <?php if ( get_sub_field('our-team-items__img') ):
                        $image = get_sub_field('our-team-items__img');
                        // Image variables.
                        $url = $image['url'];
                        $title = $image['title'];
                        $alt = $image['alt'];
                        // Thumbnail size attributes.
                        $size = 'large';
                        $thumb = $image['sizes'][ $size ];
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];
                    ?>
                      <img src="<?php echo $thumb; ?>" alt="<?php echo esc_attr($alt); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="th-our-team__item-text">
                    <p><?php the_sub_field('our-team-items__discr'); ?></p>
                    <span class="__name"><?php the_sub_field('our-team-items__name'); ?></span>
                  </div>
                </div>

                <?php endwhile; ?>
              <?php endif; ?>

            </div>
          </div>

          <div class="th-our-team-slider js-our-team-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-container-fluid">
            <div class="swiper-wrapper">

              <?php if (get_sub_field('our-team-items')) : ?>
                <?php while( have_rows('our-team-items') ): the_row(); ?>

                <div class="swiper-slide th-our-team__item">
                  <div class="th-our-team__item-img-wrap">
                    <?php if ( get_sub_field('our-team-items__img') ):
                        $image = get_sub_field('our-team-items__img');
                        // Image variables.
                        $url = $image['url'];
                        $title = $image['title'];
                        $alt = $image['alt'];
                        // Thumbnail size attributes.
                        $size = 'large';
                        $thumb = $image['sizes'][ $size ];
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];
                    ?>
                      <img src="<?php echo $thumb; ?>" alt="<?php echo esc_attr($alt); ?>" />
                    <?php endif; ?>
                  </div>
                  <div class="th-our-team__item-text">
                    <p><?php the_sub_field('our-team-items__discr'); ?></p>
                    <span class="__name"><?php the_sub_field('our-team-items__name'); ?></span>
                  </div>
                </div>

                <?php endwhile; ?>
              <?php endif; ?>

            </div>
            <div class="expertise-slider__controls our-team-slider__controls">
              <div class="swiper-button-prev expertise-slider-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-56ab78d78c2af38e" aria-disabled="true">
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.5 1.13599L1.13604 7.49995M1.13604 7.49995L7.5 13.8639M1.13604 7.49995H13.864" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </div>
              <div class="swiper-button-next expertise-slider-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-56ab78d78c2af38e" aria-disabled="false">
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 1.13599L12.864 7.49995M12.864 7.49995L6.5 13.8639M12.864 7.49995H0.136039" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </div>
            </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
        </section>
      <?php endwhile; ?>
      <?php endif; ?>


      <div class="th-about-advantages section">
        <div class="container">

          <?php if (get_field('about-advantages')) : ?>
            <?php while( have_rows('about-advantages') ): the_row(); ?>

              <div class="th-about-advantages-offset">
                <div class="th-title-wrap">
                  <h2 class="section-title"><?php the_sub_field('about-advantages__title'); ?></h2>
                </div>

                <div class="th-grid th-about-advantage__items">
                  <?php if (get_sub_field('about-advantages-items')) : ?>
                    <?php while( have_rows('about-advantages-items') ): the_row(); ?>
                      <div> 
                        <i><?php the_sub_field('about-advantages-items__name'); ?></i>
                        <span><?php the_sub_field('about-advantages-items__discr'); ?></span>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>

              </div>

            <?php endwhile; ?>
          <?php endif; ?>

          <div class="th-grid th-about-cases-mobile">

            <?php if (get_field('case-items')) : ?>
              <?php while( have_rows('case-items') ): the_row(); ?>
                <div>
                  <a class="swiper-slide expertise__block-item expertise-item th-about-cases-item" href="<?php the_sub_field('case-items__img'); ?>">
                    <h3 class="expertise-item__title"><?php the_sub_field('case-items__name'); ?></h3>
                    <div class="expertise-item__text"><?php the_sub_field('case-items__discr'); ?></div><span class="expertise-item__link btn btn-default">see case</span>
                  </a>
                </div>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
      </div>

      <div class="js-about-cases swiper th-about-cases-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden achievements-slider--cases th-container-fluid">
      
        <div class="swiper-wrapper">
          <?php if (get_field('case-items')) : ?>
            <?php while( have_rows('case-items') ): the_row(); ?>
                <a class="swiper-slide expertise__block-item expertise-item th-about-cases-item" href="<?php the_sub_field('case-items__img'); ?>">
                  <h3 class="expertise-item__title"><?php the_sub_field('case-items__name'); ?></h3>
                  <div class="expertise-item__text"><?php the_sub_field('case-items__discr'); ?></div><span class="expertise-item__link btn btn-default">see case</span>
                </a>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>
          
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
      </div>


      <?php if (get_field('history')) : ?>
      <?php while( have_rows('history') ): the_row(); ?>
        <div class="section th-section-about-history">
          <div class="container">
            <div class="th-about-advantages-offset">
              <div class="th-title-wrap">
                <h2 class="section-title">Surf: 12 years in mobile development</h2>
              </div>
            </div>
          </div>
          <div class="js-about-history swiper th-about-history-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-container-fluid">
            <div class="swiper-wrapper">

              <?php if (get_sub_field('history-items')) : ?>
                <?php $i = 0; while( have_rows('history-items') ): the_row(); $i++; ?>
                  <div class="swiper-slide th-about-history-item <?php if($i % 2 == 0) {echo 'th-about-history-item__pt';} ?>">
                    <div class="th-about-history-item__text-wrap"> 
                      <?php if ( get_sub_field('history-items__img') ):
                          $image = get_sub_field('history-items__img');
                          // Image variables.
                          $url = $image['url'];
                          $title = $image['title'];
                          $alt = $image['alt'];
                          // Thumbnail size attributes.
                          $size = 'large';
                          $thumb = $image['sizes'][ $size ];
                          $width = $image['sizes'][ $size . '-width' ];
                          $height = $image['sizes'][ $size . '-height' ];
                      ?>
                        <div class="_img-wrap">
                          <img src="<?php echo $thumb; ?>" alt="<?php echo esc_attr($alt); ?>" />
                        </div>
                      <?php endif; ?>
                      <?php the_sub_field('history-items__discr'); ?>
                    </div>
                    <div class="_year"><?php the_sub_field('history-items__name'); ?></div>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>


            </div>
            <div class="about-history__controls expertise-slider__controls">
              <div class="swiper-button-prev expertise-slider-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-56ab78d78c2af38e" aria-disabled="true">
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.5 1.13599L1.13604 7.49995M1.13604 7.49995L7.5 13.8639M1.13604 7.49995H13.864" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </div>
              <div class="swiper-button-next expertise-slider-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-56ab78d78c2af38e" aria-disabled="false">
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 1.13599L12.864 7.49995M12.864 7.49995L6.5 13.8639M12.864 7.49995H0.136039" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </div>
            </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>


      <?php if (get_field('clients')) : ?>
      <?php while( have_rows('clients') ): the_row(); ?>
        <section class="th-section-our-team th-section-black section th-section-clients">
          <div class="th-container-fluid">
            <div class="th-title-wrap">
              <h2 class="section-title"><?php the_sub_field('clients__title'); ?></h2>
            </div>

            <?php if (get_sub_field('clients-items')) : ?>
            <div class="th-grid th-our-team__mobile">

              <?php while( have_rows('clients-items') ): the_row(); ?>
                <div class="swiper-slide th-our-team__item th-client__item">
                  <div class="th-our-team__item-text">
                    <p><?php the_sub_field('clients-items__discr'); ?></p>
                    <span class="__name"><?php the_sub_field('clients-items__name'); ?></span>
                  </div>
                </div>
              <?php endwhile; ?>

            </div>
            <?php endif; ?>
            
          </div>
          
          <?php if (get_sub_field('clients-items')) : ?>
          <div class="th-our-team-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-container-fluid th-clients-slider js-clients-slider">
            <div class="swiper-wrapper">
              <?php while( have_rows('clients-items') ): the_row(); ?>
                <div class="swiper-slide th-our-team__item th-client__item">
                  <div class="th-our-team__item-text">
                    <p><?php the_sub_field('clients-items__discr'); ?></p>
                    <span class="__name"><?php the_sub_field('clients-items__name'); ?></span>
                  </div>
                </div>
              <?php endwhile; ?>
            </div>

            <div class="expertise-slider__controls our-clients-slider__controls">
              <div class="swiper-button-prev expertise-slider-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-56ab78d78c2af38e" aria-disabled="true">
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.5 1.13599L1.13604 7.49995M1.13604 7.49995L7.5 13.8639M1.13604 7.49995H13.864" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </div>
              <div class="swiper-button-next expertise-slider-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-56ab78d78c2af38e" aria-disabled="false">
                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6.5 1.13599L12.864 7.49995M12.864 7.49995L6.5 13.8639M12.864 7.49995H0.136039" stroke="currentColor" stroke-width="1.5"></path>
                </svg>
              </div>
            </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
          <?php endif; ?>

        </section>
      <?php endwhile; ?>
      <?php endif; ?>

      <?php if (get_field('achievements')) : ?>
      <?php while( have_rows('achievements') ): the_row(); ?>
        <div class="section th-section-achiev">
          <div class="container">
            <div class="th-title-wrap">
              <h2 class="section-title"><?php the_sub_field('achievements__title'); ?></h2>
            </div>
            <div class="th-grid"> 
              <?php if (get_sub_field('achievement-items')) : ?>
              <?php while( have_rows('achievement-items') ): the_row(); ?>
                <div class="swiper-slide expertise__block-item expertise-item th-achiev-item">
                  <div class="_img-wrap"> <img src="<?php the_sub_field('achievement-items__img'); ?>" alt=""></div>
                  <h3 class="expertise-item__title"><?php the_sub_field('achievement-items__name'); ?></h3>
                  <div class="expertise-item__text"><?php the_sub_field('achievement-items__discr'); ?></div>
                </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
          <div class="js-about-cases swiper th-about-cases-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden achievements-slider--cases th-container-fluid">
            <div class="swiper-wrapper">
              <?php if (get_sub_field('achievement-items')) : ?>
              <?php while( have_rows('achievement-items') ): the_row(); ?>
                <div class="swiper-slide expertise__block-item expertise-item th-achiev-item">
                  <div class="_img-wrap"> <img src="<?php the_sub_field('achievement-items__img'); ?>" alt=""></div>
                  <h3 class="expertise-item__title"><?php the_sub_field('achievement-items__name'); ?></h3>
                  <div class="expertise-item__text"><?php the_sub_field('achievement-items__discr'); ?></div>
                </div>
              <?php endwhile; ?>
              <?php endif; ?>
              </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
          </div>
        </div>
      <?php endwhile; ?>
      <?php endif; ?>
      
      <?php if (get_field('advice')) : ?>
      <?php while( have_rows('advice') ): the_row(); ?>
        <section class="th-flutter-faq th-section-black section th-section-about-advice">
          <div class="container">

            <div class="th-flutter-faq-title-wrap">
              <h2 class="section-title"><?php the_sub_field('advice__title'); ?></h2>
              <p><?php the_sub_field('advice__discr'); ?></p>
            </div>

                <div class="th-flutter-faq-advice js-flutter-faq-advice">
                  <div class="th-grid swiper-wrapper"> 
                    <?php if (get_sub_field('advice-items')) : ?>
                      <?php while( have_rows('advice-items') ): the_row(); ?>
                        <a class="th-flutter-faq-advice-item swiper-slide" href="<?php the_sub_field('advice-item__link'); ?>">
                          <?php if ( get_sub_field('advice-item__img') ):
                              $image = get_sub_field('advice-item__img');
                              // Image variables.
                              $url = $image['url'];
                              $title = $image['title'];
                              $alt = $image['alt'];
                              // Thumbnail size attributes.
                              $size = 'large';
                              $thumb = $image['sizes'][ $size ];
                              $width = $image['sizes'][ $size . '-width' ];
                              $height = $image['sizes'][ $size . '-height' ];
                          ?>
                            <img src="<?php echo $thumb; ?>" alt="<?php echo esc_attr($alt); ?>" />
                          <?php endif; ?>
                          <span><?php the_sub_field('advice-item__title'); ?></span>
                        </a>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </div>
                </div>

          </div>
        </section>
      <?php endwhile; ?>
      <?php endif; ?>

    </main>


		<section class="contact section" id="contact-section">
			<div class="container">
				<div class="contact__inner">
					<p class="contact__title contact__title--mobile">Let's code your success story together!

</p>
					<?php if ($person) : ?>
						<div class="contact__info">
							<div class="contact__image">
								<img class="contact__image-shape" src="<?= THEME . '/assets/img/home/shape-purple.svg'; ?>" alt="">
								<div class="contact__image-item">
									<?= wp_get_attachment_image($person['photo'], 'full'); ?>
								</div>
							</div>
							<?php if ($person['info']) : ?>
								<div class="contact__person">
									<p class="contact__person-name"><?= $person['info']['name']; ?></p>
									<span class="contact__person-position"><?= $person['info']['position']; ?></span>
								</div>
							<?php endif; ?>
						</div>
					<?php endif; ?>
					<div class="contact__form">
						<form id="contact">
							<p class="contact__title contact__title--desktop">Let's code your success story together!</p>
							<input type="hidden" name="reffer" id="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
							<div class="contact-form-input">
								<input type="text" id="company" autocomplete="off" name="company" required>
								<label for="company" data-text="Company*" data-error="Invalid format">Company*</label>
							</div>
							<div class="contact-form-input">
								<input type="text" id="name" autocomplete="off" name="name" required>
								<label for="name" data-text="Your name*" data-error="Invalid format">Your name*</label>
							</div>
							<div class="contact-form-input contact-form-input-email">
								<input type="email" id="email" autocomplete="off" name="email" required>
								<label for="email" data-text="Email*" data-error="Invalid format">Email*</label>
							</div>
							<div class="contact-form-input contact-full">
								<textarea id="msg" rows="1" autocomplete="off" name="msg" required></textarea>
								<label for="msg" data-text="Project detail*" data-error="Required field">Project detail*</label>
							</div>
							<div class="contact-form-input contact-full contact-form__upload">
								<div class="contact-form__upload-title">
									<img src="<?= THEME . '/assets/img/attachment.svg' ?>" alt="">
									<span>Drop a file here or click to upload</span>
								</div>
								<input type="file" id="files" name="files[]" multiple hidden>
								<div class="contact-form__upload-content">
									<div class="contact-form__upload-result" style="display: none;">
										<span class="contact-form__upload-filename"></span>
									</div>
									<div class="contact-form__upload-files">
										<button type="button" class="contact-form__upload-counter"></button>
									</div>
									<ul class="contact-form__upload-list"></ul>
								</div>
							</div>
							<div class="contact-form-input-checkbox contact-full">
								<input checked type="checkbox" id="confirm" name="confirm" required>
								<label for="confirm">Accept the <a target="_blank" href="<?= $privacy; ?>">privacy policy</a></label>
							</div>
							<button id="send" class="btn btn-default btn-large" type="submit"><?php echo $btn_text?></button>
							<input type="hidden" id="clientID" name="clientID">
							<input type="hidden" id="clientIDYA" name="clientIDYA">
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer('en');
