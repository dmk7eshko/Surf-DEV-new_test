<?php
/**
 * Template Name: Fintech DEV NEW
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

    <div class="th-blog-info-mobile" style="display:none">
      <div class="th-blog-info-sticky">
        <div class="__title">Our blog for&nbsp;more info</div>
        <div class="__scroll-content">
            <a class="__link" href="https://surf.dev/cryptocurrency-app-development/">Cryptocurrency App Development Guide <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
            <a class="__link" href="https://surf.dev/how-to-create-a-payment-app-with-flutter-an-ultimate-guide/">How to Create a&nbsp;Payment App with&nbsp;Flutter <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
            <a class="__link" href="https://surf.dev/how-to-build-fintech-trust-with-app-users-top-5-ux-design-practices/">How to Build Trust with Users in Fintech <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
            <div class="__toggle"><span><i>Mobile banking </i></span>
              <div class="__hide">
                <a class="__link" href="https://surf.dev/can-you-build-a-challenger-banking-app-using-flutter/">Challenger Banking App With Flutter <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
                <a class="__link" href="https://surf.dev/cost-of-developing-a-banking-app/">Cost of Developing a Banking App <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
                <a class="__link" href="https://surf.dev/how-to-create-a-mobile-banking-app-guide/">How to Create a Mobile Banking App <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
              </div>
            </div>
            <div class="__toggle"><span><i>Fintech app concepts </i></span>
              <div class="__hide">
              <a class="__link" href="https://surf.dev/cases/investment-app-concept/">Concept of a mobile investment app <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
              <a class="__link" href="https://surf.dev/cases/finance-app-for-kids/">Mobile finance app for kids <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="th-banner-fintech">
      <div class="container">
        <div class="th-banner-wrap">
          <h1><?php the_title(); ?></h1>
          <?php if (get_field('banner-options')) : ?>
            <div class="th-banner-fintech__quote">
              <?php while( have_rows('banner-options') ): the_row(); ?>
                <?php if (get_sub_field('banner-options-fintech-link')) : ?>
                  <a class="th-banner-fintech__link" href="<?php the_sub_field('banner-options-fintech-link') ?>" title="fintech">
                    <img class="__icon--start" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/rumb.svg" alt="">fintech
                    <img class="__icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt="">
                  </a>
                <?php endif; ?>

                <?php if (get_sub_field('banner-options-procent')) : ?>
                  <div class="th-banner-fintech__procent"> <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/sticker-procent.svg" alt="">
                    <p><?php the_sub_field('banner-options-procent') ?></p>
                  </div>
                <?php endif; ?>
              <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <?php the_post_thumbnail('full', array('class' => 'th-banner-fintech__img')); ?>
          <div class="th-banner-fintech__discr"> 
            <?php the_content(); ?>
            <a class="btn btn-default btn-large js-fancybox-modal-form th-btn-blue" href="#contact-section">Get free consultation</a>
          </div>
        </div>
      </div>
    </section>
    <div class="th-fintech-content">
      <div class="container">
        <div class="__left"> 
          <div class="th-blog-info-sticky">
            <div class="__title">More info in our blog</div>
            <div class="__scroll-content">
              <a class="__link" href="https://surf.dev/cryptocurrency-app-development/">Cryptocurrency App Development Guide <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
              <a class="__link" href="https://surf.dev/how-to-create-a-payment-app-with-flutter-an-ultimate-guide/">How to Create a&nbsp;Payment App with&nbsp;Flutter <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
              <a class="__link" href="https://surf.dev/how-to-build-fintech-trust-with-app-users-top-5-ux-design-practices/">How to Build Trust with Users in Fintech <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
              <div class="__toggle"><span><i>Mobile banking </i></span>
                <div class="__hide">
                  <a class="__link" href="https://surf.dev/can-you-build-a-challenger-banking-app-using-flutter/">Challenger Banking App With Flutter <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
                  <a class="__link" href="https://surf.dev/cost-of-developing-a-banking-app/">Cost of Developing a Banking App <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
                  <a class="__link" href="https://surf.dev/how-to-create-a-mobile-banking-app-guide/">How to Create a Mobile Banking App <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
                </div>
              </div>
              <div class="__toggle"><span><i>Fintech app concepts </i></span>
                <div class="__hide">
                <a class="__link" href="https://surf.dev/cases/investment-app-concept/">Concept of a mobile investment app <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
                <a class="__link" href="https://surf.dev/cases/finance-app-for-kids/">Mobile finance app for kids <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg" alt=""></a>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="__right"> 

          <?php if (get_field('areas')) : ?>
            <section class="th-section-black th-fintech-areas">

              <?php while( have_rows('areas') ): the_row(); ?>
                <div class="th-title-wrap">
                  <h2 class="section-title"><?php the_sub_field('areas__title'); ?></h2>
                  <p><?php the_sub_field('areas__discr'); ?></p>
                </div>

                <div class="th-grid"> 
                  
                  <?php if (get_sub_field('areas-items')) : ?>
                    <?php while( have_rows('areas-items') ): the_row(); ?>
                      <div class="th-fintech-areas-item"><span class="__title"><?php the_sub_field('areas-items__name'); ?></span>
                        <div class="__text">
                          <?php the_sub_field('areas-items__discr'); ?>
                        </div>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>

                </div>
              <?php endwhile; ?>

            </section>
          <?php endif; ?>

          <?php if (get_field('case')) : ?>
            <section class="section th-fintech-cases">
              <?php while( have_rows('case') ): the_row(); ?>
                <div class="th-title-wrap">
                  <h2 class="section-title"><?php the_sub_field('case__title'); ?></h2>
                  <p><?php the_sub_field('case__discr'); ?></p>
                </div>

                <?php if (get_sub_field('case-items')) : ?>
                  <?php while( have_rows('case-items') ): the_row(); ?>
                    <div class="cases-list__item case">
                      <a class="case__link" href="<?php the_sub_field('case-items__link'); ?>" title="Award-winning custom ERP system and employee apps">
                        <div class="case__icon">
                          <img class="attachment- size-" width="106" height="34" src="<?php the_sub_field('case-items__logo'); ?>" alt="" decoding="async" loading="lazy">
                        </div>
                        <div class="case__image">
                          <?php if ( get_sub_field('case-items__img') ):
                              $image = get_sub_field('case-items__img');
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
                        <h3 class="case__title">
                          <?php the_sub_field('case-items__name'); ?>
                          <img class="case__title-icon" width="24" height="24" decoding="async" src="https://surf.dev/wp-content/themes/surf/assets/img/home/link-icon.svg" alt="">
                          </h3>
                        <div class="case__text">
                          <?php the_sub_field('case-items__discr'); ?>
                        </div>
                      </a>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>

              <?php endwhile; ?>
            </section>
          <?php endif; ?>

          <?php if (get_field('faq')) : ?>
            <section class="th-section-black th-fintech-faq">
              <?php while( have_rows('faq') ): the_row(); ?>
                <div class="th-title-wrap">
                  <h2 class="section-title"><?php the_sub_field('faq__title'); ?></h2>
                  <p><?php the_sub_field('faq__discr'); ?></p>
                </div>
                <?php if (get_sub_field('faq-items')) : ?>
                  <?php while( have_rows('faq-items') ): the_row(); ?>
                    <div class="th-flutter-faq-q">
                      <div class="th-flutter-faq-q__title js-faq-toggle"><span><?php the_sub_field('faq-item__title'); ?></span> <span class="_ico"></span></div>
                      <div class="th-flutter-faq-q__content">
                        <p><?php the_sub_field('faq-item__discr'); ?></p>
                      </div>
                    </div>
                  <?php endwhile; ?>
                <?php endif; ?>
              <?php endwhile; ?>
            </section>
          <?php endif; ?>

          <?php if (get_field('advantages')) : ?>
            <section class="section th-fintech-advantages">

              <?php while( have_rows('advantages') ): the_row(); ?>
                <div class="th-title-wrap">
                  <h2 class="section-title"><?php the_sub_field('advantages__title'); ?></h2>
                  <p><?php the_sub_field('advantages__discr'); ?></p>
                </div>

                <div class="th-grid"> 
                  <?php if (get_sub_field('advantages-items')) : ?>
                    <?php while( have_rows('advantages-items') ): the_row(); ?>
                      <div class="th-fintech-advantages-item"><span class="__title"><?php the_sub_field('advantages-items__name'); ?></span>
                        <div class="__text"><?php the_sub_field('advantages-items__discr'); ?></div>
                        <div class="__ico-wrap">
                          <img src="<?php the_sub_field('advantages-items__img'); ?>" alt="">
                        </div>
                      </div>
                    <?php endwhile; ?>
                  <?php endif; ?>
                </div>

              <?php endwhile; ?>

            </section>
          <?php endif; ?>

        </div>
      </div>
    </div>

    <?php if (get_field('clients-says')) : ?>
      <?php while( have_rows('clients-says') ): the_row(); ?>
        <section class="th-section-our-team th-section-black section">
          <div class="th-container-fluid">
            <div class="th-title-wrap">
              <h2 class="section-title"><?php the_sub_field('clients-says__title'); ?></h2>
            </div>

            <div class="th-grid th-our-team__mobile">

              <?php if (get_sub_field('clients-says-items')) : ?>
                <?php while( have_rows('clients-says-items') ): the_row(); ?>

                <div class="th-our-team__item">
                  <div class="th-our-team__item-img-wrap">
                    <?php if ( get_sub_field('clients-says-items__img') ):
                        $image = get_sub_field('clients-says-items__img');
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
                    <p><?php the_sub_field('clients-says-items__discr'); ?></p>
                    <span class="__name"><?php the_sub_field('clients-says-items__name'); ?></span>
                  </div>
                </div>

                <?php endwhile; ?>
              <?php endif; ?>

            </div>
          </div>

          <div class="th-our-team-slider js-our-team-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-container-fluid">
            <div class="swiper-wrapper">

              <?php if (get_sub_field('clients-says-items')) : ?>
                <?php while( have_rows('clients-says-items') ): the_row(); ?>

                <div class="swiper-slide th-our-team__item">
                  <div class="th-our-team__item-img-wrap">
                    <?php if ( get_sub_field('clients-says-items__img') ):
                        $image = get_sub_field('clients-says-items__img');
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
                    <p><?php the_sub_field('clients-says-items__discr'); ?></p>
                    <span class="__name"><?php the_sub_field('clients-says-items__name'); ?></span>
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

		<section class="contact section" id="contact-section">
			<div class="container">
				<div class="contact__inner">
					<p class="contact__title contact__title--mobile">Let's code your success story together!</p>
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
              <div class="contacts-wrap">
                <p class="contact__title contact__title--desktop">Want to hire Fintech developers?</p>
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
                <!-- <button id="send" class="btn btn-default btn-large" type="submit"><?php echo $btn_text?></button> -->
                <div class="contact-form-btns__wrap">
                  <button class="btn btn-default btn-large" id="send" type="submit"><?php echo $btn_text?></button>
                  <a class="btn btn-default btn-large th-btn-gray auto-popup" href="#" style="display:none" data-fancybox-close="data-fancybox-close">Continue reading </a>
                </div>
                <input type="hidden" id="clientID" name="clientID">
                <input type="hidden" id="clientIDYA" name="clientIDYA">
              </div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php
get_footer('en');
