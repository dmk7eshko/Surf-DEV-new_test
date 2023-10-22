<?php
/**
 * Template Name: Flutter DEV NEW
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

	  <section class="th-banner">
        <div class="container">
          <div class="th-banner-wrap">
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>

            <?php if (get_field('banner-button')) : ?>
              <?php while( have_rows('banner-button') ): the_row(); ?>
                <a href="<?php the_sub_field('banner-button__link'); ?>" class="btn btn-large btn-default th-btn-blue th-btn-banner _hashscroll"><?php the_sub_field('banner-button__text'); ?></a>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
          <?php the_post_thumbnail('full'); ?>
        </div>
      </section>

      <?php if (get_field('about')) : ?>
      <?php while( have_rows('about') ): the_row(); ?>
        <section class="th-flutter-about th-section-black section">
          <div class="container">
            <div class="th-flutter-about-title-wrap">
              <h2 class="section-title"><?php the_sub_field('about__title'); ?></h2>
              <div class="th-flutter-reviews"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/stars.svg" alt=""><span>Only 5 star client reviews</span></div>
            </div>
            <div class="th-grid"> 
              <div class="th-flutter-about-left th-flutter-about-item">
                <div class="th-flutter-about-gallery">
                  <?php $images = get_sub_field('about__gallery', 'options'); if( $images ): ?>
                    <?php foreach( $images as $image ): ?>
                      <!-- <div><a href="<?php echo $image['alt']; ?>"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"></a></div> -->
                      <div><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>"></div>
                    <?php endforeach; ?>
                  <?php endif; ?>
                </div>
                <p>Our Flutter team contributes to the open-source community growth also through master classes and study jams.</p>
              </div>
              <div class="th-flutter-about-right th-flutter-about-item">

              <?php if (get_sub_field('about__content-block')) : ?>
              <?php while( have_rows('about__content-block') ): the_row(); ?>
                <div class="th-flutter-about-right__item">
                  <?php the_sub_field('about__content-block__item'); ?>
                </div>
              <?php endwhile; ?>
              <?php endif; ?>

              </div>
            </div>
          </div>
        </section>
      <?php endwhile; ?>
      <?php endif; ?>

      <?php if (get_field('development')) : ?>
      <?php while( have_rows('development') ): the_row(); ?>
        <section class="th-flutter-development section">
          <div class="container">
            <h2 class="section-title"><?php the_sub_field('development__title'); ?></h2>

            <?php if (get_sub_field('development__tabs')) : ?>

              <div class="th-flutter-dev-elemets"> 
                <?php $i = 0; while( have_rows('development__tabs') ): the_row(); $i++; ?>
                  <a href="#tab-<?php echo $i; ?>"><img src="<?php the_sub_field('development__img-name'); ?>"><?php the_sub_field('development__tabs__name'); ?></a>
                <?php endwhile; ?>
              </div>
              

              <?php $i = 0; while( have_rows('development__tabs') ): the_row(); $i++; ?>
                <div class="th-grid th-flutter-dev-tab" id="tab-<?php echo $i; ?>">
                  <div class="th-flutter-dev-left">
                    <?php if ( get_sub_field('development__tabs__image') ):
                        $image = get_sub_field('development__tabs__image');
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
                  <div class="th-flutter-dev-right">
                    <p><?php the_sub_field('development__tabs__discr'); ?></p><a href="<?php the_sub_field('development__tabs__link'); ?>" class="btn btn-default btn-large">More details</a>
                  </div>
                </div>
              <?php endwhile; ?>

            <?php endif; ?>

            <p class="_p-big"><?php the_sub_field('development__last'); ?></p>
          </div>
        </section>
      <?php endwhile; ?>
      <?php endif; ?>

      <div class="section th-section-gray-block th-section-gray-block__flutter">
        <div class="container">
          <h2 class="section-title">Flutter is a new revolution in frontend. It allows saving 60% in terms of cross-platform development.</h2><a class="btn btn-default btn-large" href="/cross-platform-mobile-development-pros-and-cons/">Read more about Flutter web possibilities</a>
        </div>
      </div>
      
      <?php if (get_field('stage')) : ?>
      <?php while( have_rows('stage') ): the_row(); ?>
        <section class="th-flutter-stage section">
          <div class="container">
            <div class="th-flutter-stage-title-wrap">
              <h2 class="section-title"><?php the_sub_field('stage__title'); ?></h2>
              <p><?php the_sub_field('stage__discr'); ?></p>
            </div>
          </div>

          <?php if (get_sub_field('stage-items')) : ?>
            <div class="expertise-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-stage-slider">
              <div class="swiper-wrapper">

              <?php $i = 0; while( have_rows('stage-items') ): the_row(); $i++; ?>
                <div class="expertise__block-item expertise-item swiper-slide th-stage-slide" role="group">
                  <span class="th-stage-slide__number"><?php echo $i; ?></span>
                  <span class="th-stage-slide__title"><?php the_sub_field('stage-items__name'); ?></span>
                  <span class="th-stage-slide__disctr"><?php the_sub_field('stage-items__discr'); ?></span>
                </div>
              <?php endwhile; ?>

              </div>
              <div class="expertise-slider__controls">
                <div class="swiper-button-prev expertise-slider-prev">
                  <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.5 1.13599L1.13604 7.49995M1.13604 7.49995L7.5 13.8639M1.13604 7.49995H13.864" stroke="currentColor" stroke-width="1.5"></path>
                  </svg>
                </div>
                <div class="swiper-button-next expertise-slider-next">
                  <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 1.13599L12.864 7.49995M12.864 7.49995L6.5 13.8639M12.864 7.49995H0.136039" stroke="currentColor" stroke-width="1.5"></path>
                  </svg>
                </div>
              </div>
            </div>

            <div class="th-flutter-stage__mobile">
              <div class="container">
                <div class="th-grid"> 
                  <?php $i = 0; while( have_rows('stage-items') ): the_row(); $i++; ?>
                    <div class="expertise__block-item expertise-item swiper-slide th-stage-slide">
                      <span class="th-stage-slide__number"><?php echo $i; ?></span>
                      <span class="th-stage-slide__title"><?php the_sub_field('stage-items__name'); ?></span>
                      <span class="th-stage-slide__disctr"><?php the_sub_field('stage-items__discr'); ?></span>
                    </div>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          <?php endif; ?>

        </section>
      <?php endwhile; ?>
      <?php endif; ?>


      <?php if (get_field('advice') || get_field('faq')) : ?>
      
        <section class="th-flutter-faq th-section-black section">
          <div class="container">

            <?php if (get_field('advice')) : ?>
              <?php while( have_rows('advice') ): the_row(); ?>

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

              <?php endwhile; ?>
            <?php endif; ?>

            <?php if (get_field('faq')) : ?>
              <?php while( have_rows('faq') ): the_row(); ?>

                <div class="th-flutter-faq-questions">
                  <div class="th-grid">

                    <div class="th-flutter-faq-questions__left"> 
                      <h2 class="section-title"><?php the_sub_field('faq__title'); ?></h2>
                      <p><?php the_sub_field('faq__discr'); ?></p>
                    </div>

                    <div class="th-flutter-faq-questions__right">

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

                    </div>

                  </div>
                </div>

              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </section>

      <?php endif; ?>

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
							<p class="contact__title contact__title--desktop">Want to hire Flutter developers?</p>
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
