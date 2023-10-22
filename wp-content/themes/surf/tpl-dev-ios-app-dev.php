<?php
/**
 * Template Name: iOS app dev sw DEV NEW
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

    <section class="th-banner th-banner__ioc-app-dev">
        <div class="container">
          <div class="th-banner-wrap">
            <h2 class="h1">iOS Application Development Agency</h2>
            <p>Hire iOS developers and get a full-fledged custom app for iPhone, iPad and other Apple devices up to 20% faster thanks to <a href="#">SurfGen</a>, our own automation software</p><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get free consultation</a>
          </div>
          <div class="th-banner-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/banner-img.webp" type="image/webp"><img class="th-banner-img" src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/banner-img.png" alt=""></picture><a href="#">Cryptocurrency Trading App <img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><span>AR visualization for oil wellconstruction</span></div>
        </div>
      </section>
      <div class="th-section-black section th-ios-app-dev-advantages">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Hiring an iOS app developer agency</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Hire iOS developers from Surf, an application development agency with cross-industry expertise, and get your app developed from scratch saving time and money with time-tested streamlined processes.</p>
            </div>
          </div>
          <div class="th-ios-app-dev-advantages__wrap th-grid"> 
            <div class="__item"> <i>12+</i><span>years of experience</span></div>
            <div class="__item"> <i>Middle+</i><span>iOS developers and designers in the team</span></div>
            <div class="__item"> <i>250+</i><span>apps built <a href="https://surf.dev/cases/">Read the case</a></span></div>
            <div class="__item"> <i>4.71</i><span>average App Store rating score</span></div>
            <div class="__item"> <i>3-6+ months</i><span>average MVP development time  </span></div>
          </div>
        </div>
      </div>
      <div class="section th-flutter-stage section th-ios-stage">
        <div class="container">
          <h2 class="section-title">Our services</h2>
        </div>
        <div class="expertise-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-stage-slider">
          <div class="swiper-wrapper">
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3; margin-right: 36px;"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Zero sprint</span><span class="th-stage-slide__disctr">
                <p> We’ll conduct:</p>
                <ul> 
                  <li>• briefing and brainstorming</li>
                  <li>• target audience and market research</li>
                </ul>
                <p>As a result, you’ll get design concepts and product development roadmap</p></span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3; margin-right: 36px;"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Custom iOS application development</span><span class="th-stage-slide__disctr">High-skilled iOS developers of our agency will build a unique app tailored to your needs from scratch including extreme loads-proof backend and user-friendly frontend</span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3; margin-right: 36px;"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">iOS app testing</span><span class="th-stage-slide__disctr">We’ll catch all the bugs and find their causes by 80% faster with test automation and streamlined testing process. Then we’ll maintain the app or transfer the project to your team</span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3; margin-right: 36px;"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">App Store release & support</span><span class="th-stage-slide__disctr">We’ll help you pass the App Store moderation and provide further maintenance of your iOS app</span></div>
          </div>
          <div class="expertise-slider__controls">
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
        <div class="th-stage-slider th-stage-slider__mobile th-grid">
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Zero sprint</span><span class="th-stage-slide__disctr">
              <p> We’ll conduct:</p>
              <ul> 
                <li>• briefing and brainstorming</li>
                <li>• target audience and market research</li>
              </ul>
              <p>As a result, you’ll get design concepts and product development roadmap</p></span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Custom iOS application development</span><span class="th-stage-slide__disctr">High-skilled iOS developers of our agency will build a unique app tailored to your needs from scratch including extreme loads-proof backend and user-friendly frontend</span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">iOS app testing</span><span class="th-stage-slide__disctr">We’ll catch all the bugs and find their causes by 80% faster with test automation and streamlined testing process. Then we’ll maintain the app or transfer the project to your team</span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">App Store release &amp; support</span><span class="th-stage-slide__disctr">We’ll help you pass the App Store moderation and provide further maintenance of your iOS app</span></div>
        </div>
      </div>
      <section class="th-section-black th-fintech-areas th-ios-app-dev-areas">
        <div class="container">
          <h2 class="section-title">Surf’s iOS developer portrait</h2>
          <div class="th-grid"> 
            <div class="th-fintech-areas-item"><span class="__title">Hard skills</span>
              <div class="__text">
                <ul> 
                  <li>Objective-C & Swift languages are their mother tongues</li>
                  <li>Knows every letter of Human Interface guidelines and Apple frameworks</li>
                  <li>Familiar with different architecture patterns like MVC, MVP, MVVM, VIPER</li>
                  <li>Juggles APIs and dependencies like a pro</li>
                  <li>Familiar with AR, AI/ML technologies</li>
                </ul>
              </div>
            </div>
            <div class="th-fintech-areas-item"><span class="__title">Soft skills</span>
              <div class="__text">
                <ul> 
                  <li>Communication & Teamwork</li>
                  <li>They’re aware of the power of communication and know that really great things aren’t done alone</li>
                  <li>Flexibility & Proactivity</li>
                  <li>They’re able to look at the goal from different angles and propose several ways of achieving them</li>
                  <li>Problem-solving</li>
                  <li>Surf’s iOS developer is able to act quickly and suggest ways of eliminating them</li>
                  <li>Time management</li>
                  <li>They know everything about decomposition and wise tasks prioritizing</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="cases section">
        <div class="container">
          <div class="section-title">
            <h2 class="section-title__center">Our case studies</h2>
          </div>
          <ul class="cases-list">
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="https://surf.dev/cases/retail/" title="retail"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/element-1.svg">#e-commerce								<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/book-shop-app/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/books.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/books.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/books.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>iOS application development for <br>a bookstore</span></div>
                </div>
                <div class="case__text">We developed an app for the large online book shop with several hundred thousand items from scratch.</div><span class="btn btn-default btn-large">More details</span></a></li>
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="/foodtech-apps/" title="foodtech"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/doykya.svg">#foodtech							<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/burger-king/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/burger_king.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/bg.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/bg.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Native mobile <br>apps for <br>Burger King</span></div>
                </div>
                <div class="case__text">Our agency helped the Client increase the app’s fail-safety by 99%, implement broad functionality and new design concept as part of the redesign. It was the leading app in the “Food and drinks” category in App Store in 2022.</div><span class="btn btn-default btn-large">More details</span></a></li>
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="https://surf.dev/cases/fintech/" title="fintech"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/element-2.svg">#fintech						<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/bank-of-sbi-group/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/sbi.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/sbi.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/sbi.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Family banking <br>app for SBI bank</span></div>
                </div>
                <div class="case__text">We developed an app that was highly appreciated by both the bank's customers and the expert community. In six months, the number of new users increased by 25%, and the number of monthly active users - by 27%. The app has received several awards and top positions in industry ratings.</div><span class="btn btn-default btn-large">More details</span></a></li>
          </ul>
        </div>
      </section>
      <section class="th-section-our-team th-section-black section th-section-clients th-section-our-team__ios">
        <div class="th-container-fluid">
          <div class="th-title-wrap">
            <h2 class="section-title">What our clients have to say</h2>
          </div>
          <div class="th-grid th-our-team__mobile">
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>Within the very first 2 weeks since the new app was launched we received 800 orders and witnessed a 15% conversion. It’s a huge result in our industry. Surf has established a most convenient customer engagement process. All issues, questions, and suggestions are discussed immediately. The project team is personally involved in all flows examining each of them in detail.</p><span class="__name">Alex Linin / Head of E-commerce</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>None of the updates we make on the website are random — every one of them has been tested in real life and has proven effective. All we had to do was transfer them into the app. However, right now the opposite is taking place. Whenever we need to add something to the website and look for inspiration, we take a peek into the mobile app.</p><span class="__name">Boris Verks / Head of Design, Manager</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>The most complicated task is to learn managing both the in-house and the outsourced development processes when you have no relevant experience. Our bank had no back-end expertise, so the burden of server maintenance was borne by several contractors. As time went by, we realized we’d rather delegate the complete development process to Surf, because they have in-depth analytics and understanding of these processes.</p><span class="__name">Dmitry Malykh / CPO and Head of Electronic Business Department</span>
              </div>
            </div>
          </div>
        </div>
        <div class="th-our-team-slider js-our-team-slider js-clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-container-fluid th-clients-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>Within the very first 2 weeks since the new app was launched we received 800 orders and witnessed a 15% conversion. It’s a huge result in our industry. Surf has established a most convenient customer engagement process. All issues, questions, and suggestions are discussed immediately. The project team is personally involved in all flows examining each of them in detail.</p><span class="__name">Alex Linin / Head of E-commerce</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>None of the updates we make on the website are random — every one of them has been tested in real life and has proven effective. All we had to do was transfer them into the app. However, right now the opposite is taking place. Whenever we need to add something to the website and look for inspiration, we take a peek into the mobile app.</p><span class="__name">Boris Verks / Head of Design, Manager</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>The most complicated task is to learn managing both the in-house and the outsourced development processes when you have no relevant experience. Our bank had no back-end expertise, so the burden of server maintenance was borne by several contractors. As time went by, we realized we’d rather delegate the complete development process to Surf, because they have in-depth analytics and understanding of these processes.</p><span class="__name">Dmitry Malykh / CPO and Head of Electronic Business Department</span>
              </div>
            </div>
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
          </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true">   </span>
        </div>
      </section>
      <div class="section th-neo-cessection-more">
        <div class="container">
          <div class="section-more cases-more">
            <p class="section-more__text h3">Want to discuss your project right now <br>and get a free estimation?</p>
            <div class="th-cases-more-btns-wrap"><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get an estimation</a><a class="section-more__link btn btn-large btn-default" href="/cases/">See other cases</a></div>
          </div>
        </div>
      </div>
      <div class="th-section-black section th-section-neobank-blog th-section-blog__ios">
        <div class="container">
          <h2 class="section-title">Prepare for future development</h2>
          <div class="th-neobank-blog">
            <div class="th-grid"><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/mobile-app-development-roadmap/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.jpg"></picture><span>Product Development Roadmap: The First Step to Build An Amazing App</span></div><span class="btn btn-default th-btn-white">Read more</span></a><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/why-would-a-mobile-app-need-pre-design/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.jpg"></picture><span>Why Would a Mobile App Need Pre-design?</span></div><span class="btn btn-default th-btn-white">Read more</span></a><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/mobile-app-development-estimation/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.jpg"></picture><span>Estimating Mobile App Development: Requirements and Steps</span></div><span class="btn btn-default th-btn-white">Read more</span></a></div>
          </div>
        </div>
      </div>

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
	</main>

<?php
get_footer('en');
