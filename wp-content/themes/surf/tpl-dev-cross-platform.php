<?php
/**
 * Template Name: Android Cross Platform DEV NEW
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


  <section class="th-banner th-banner__banking-soft th-banner__cross-platform">
        <div class="container">
          <div class="th-banner-wrap">
            <h2 class="h1">Cross-Platform App Development Service Company</h2>
            <p><b>Designing, building, testing, releasing cross-platform apps for different OS and devices for startups and global enterprises.</b></p>
            <p><i>Saving up to 60%</i> with our Flutter-powered services</p><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get free estimation</a>
          </div>
          <div class="th-banner-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/banner-img.webp" type="image/webp"><img class="th-banner-img" src="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/banner-img.png" alt=""></picture></div>
        </div>
      </section>
      <div class="th-section-black section th-neobank-services th-cross-platform-services">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">What can business gain from cross-platform development services?</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Check the below points to find whether developing a cross-platform app is the right direction for you to go.</p>
            </div>
          </div>
          <div class="expertise__block">
            <div class="expertise__block-item expertise-item">
              <h3 class="expertise-item__title">5 channels to reach your customers</h3>
              <div class="expertise-item__text">
                <p>Increase exposure to your target audience through  iOS, Android, web, Windows, macOS.</p>
              </div>
            </div>
            <div class="expertise__block-item expertise-item">
              <h3 class="expertise-item__title">Cutting development cost up to 60%</h3>
              <div class="expertise-item__text">
                <p>Save on management, communication and synchronization with one cross-platform team instead of one team per each platform.</p>
              </div>
            </div>
            <div class="expertise__block-item expertise-item">
              <h3 class="expertise-item__title">Consistent customer experience</h3>
              <div class="expertise-item__text">
                <p>Be sure the UI looks and behaves identically across platforms ensuring familiar feel to win trust to your brand.</p>
              </div>
            </div>
            <div class="expertise__block-item expertise-item">
              <h3 class="expertise-item__title">Stellar choice for MVP in 3-5 months</h3>
              <div class="expertise-item__text">
                <p>Get the 1st product version fast, with top quality; present it to investors\customers quickly and scale as needed.</p>
              </div>
            </div>
            <div class="expertise__block-item expertise-item">
              <h3 class="expertise-item__title">Outpacing competitors with 40% faster time to market</h3>
              <div class="expertise-item__text">
                <p>Take advantage of reusable code to release faster and test, maintain, and deploy easier.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="th-cross-platform-more__black">
          <div class="container">
            <div class="section-more cases-more">
              <p class="section-more__text h3">Read how we work on creating MVP in detail</p>
              <div class="th-cases-more-btns-wrap"><a class="btn btn-default btn-large th-btn-white js-fancybox-modal-form" href="#contact-section">More about our approach</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Comparing <br>Flutter vs native app development time</h2>
            </div>
            <div class="th-neobank-discr">
              <p>MVP development + 3 sprints for further development. Flutter allows to save</p>
              <ul> 
                <li>45,6% for development;</li>
                <li>70,5% for QA taking into account that both teams apply automated tests;</li>
                <li>33,3% for design.</li>
              </ul>
            </div>
          </div>
          <div class="th-timeline-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/time-line.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/time-line.png" alt=""></picture></div>
        </div>
      </div>
      <div class="section th-neo-cessection-more th-section-gray">
        <div class="container">
          <div class="section-more cases-more">
            <p class="section-more__text h3">Compare native vs cross-platform development cost</p>
            <div class="th-cases-more-btns-wrap"><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get estimation</a></div>
          </div>
        </div>
      </div>
      <section class="cases section">
        <div class="container">
          <div class="section-title">
            <h2 class="section-title__center">When do we suggest using <br>cross-platform Flutter?</h2>
            <div class="section-discr">
              <p>Flutter is a perfect fit for the businesses that need their apps to look and behave the same way on the different platforms: iOS, Android, web, Windows, macOS. It works well for banking and fintech, healthcare and enterprise apps covering such functions as HR, education, marketing, supplies, documents processing, etc.</p>
              <p><b>Note:</b> Flutter is not optimized for SEO promotion, so it is not the best choice for your app if you plan to base your product marketing on search engines. For example, for <br> e-commerce apps</p>
            </div>
          </div>
          <ul class="cases-list">
            <li class="cases-list__item case cases-list__item-new cases-list__item-new__big"><a class="case__cat" href="https://surf.dev/cases/fintech" title="fintech"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/element-2.svg">#fintech						<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/flutter-app-for-neobank/">
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/case-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/case-1.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Neobank app from scratch for Y Combinator startup for 6 months</span></div>
                </div>
                <div class="case__text">We developed an application with all must-have features for a cutting-edge digital bank with numerous integrations and millennials-centric experience.</div><span class="btn btn-default btn-large">More details</span></a></li>
            <li class="cases-list__item case cases-list__item-new cases-list__item-new__big"><a class="case__cat" href="https://surf.dev/cases/fintech" title="enterprise"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/polygon-purp.svg">#enterprise			<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/enterprise-application/">
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/case-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/case-2.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>A corporate HR <br>app designed for <br>a global-scale company</span></div>
                </div>
                <div class="case__text">We built a high-performing app for Android and iOS with close-to-native design to fit exactly into a custom enterprise system. Using a single code base allowed us to cut expenses and time by about 30% (compared to native development approach).</div><span class="btn btn-default btn-large">More details</span></a></li>
            <li class="cases-list__item case cases-list__item-new cases-list__item-new__big"><a class="case__cat" href="https://surf.dev/flutter" title="Flutter">#Flutter			<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/a-marketplace-for-all-things-car-service/">
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/case-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/case-3.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>B2B solution and B2C mobile app for tire fitting and car wash service aggregator</span></div>
                </div>
                <div class="case__text">For the customer app we used Flutter and implemented search for service centers, checking service cost for a specific vehicle, picking service centers on the map, filtering them by specific parameters, time, and proximity. Finally, Flutter allowed us to save up to 40% on development and substantially accelerated the release.</div><span class="btn btn-default btn-large">More details</span></a></li>
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
                <p>As we announced our plans to create a new app in 9 months, and not just change the design, but change the technology to Flutter, no one believed us. Both the colleagues and the market met the idea with skepticism. But the motivation of the working group and the professionalism of our new partner brought us finally to success. Negotiations started in November 2020, and the first release was made in August 2021</p><span class="__name">Head of IT Digital Channels Office / Bank</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>Flutter is a great profit if you need an app to look identical for all platforms: iOS, Android, web, Windows, MacOS. If we take Android and iOS apps, the saving makes up 40%. As soon as you add the web – it is about 50-60%, and with a desktop app, we save 60%</p><span class="__name">Vlad / Director, Surf</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>“Non-standard problems require non-standard solutions. This is not for the first time when Flutter turns to such a solution for us in large projects for our clients. We believe Flutter offers the most thorough implementation of the multiplatform concept. It not only optimizes the development process and reduces costs, but also helps to overcome force majeure which may seem insurmountable</p><span class="__name">Eugene / Head of Flutter Team, Surf</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>Being a team with a strong engineering background, we are constantly improving technical skills and do our best to contribute to technology development. To optimize our Flutter development process we created a set of libraries and tools, Surf Gear, and developed our own approach to Flutter app architecture, Elementary, that provides for clean architecture and testable code. These are open-source solutions that can be used by the community</p><span class="__name">Dmitrii / Flutter Team\Tech Lead, Surf</span>
              </div>
            </div>
          </div>
        </div>
        <div class="th-our-team-slider js-our-team-slider js-clients-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-container-fluid th-clients-slider">
          <div class="swiper-wrapper">
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>As we announced our plans to create a new app in 9 months, and not just change the design, but change the technology to Flutter, no one believed us. Both the colleagues and the market met the idea with skepticism. But the motivation of the working group and the professionalism of our new partner brought us finally to success. Negotiations started in November 2020, and the first release was made in August 2021</p><span class="__name">Head of IT Digital Channels Office / Bank</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>Flutter is a great profit if you need an app to look identical for all platforms: iOS, Android, web, Windows, MacOS. If we take Android and iOS apps, the saving makes up 40%. As soon as you add the web – it is about 50-60%, and with a desktop app, we save 60%</p><span class="__name">Vlad / Director, Surf</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>“Non-standard problems require non-standard solutions. This is not for the first time when Flutter turns to such a solution for us in large projects for our clients. We believe Flutter offers the most thorough implementation of the multiplatform concept. It not only optimizes the development process and reduces costs, but also helps to overcome force majeure which may seem insurmountable</p><span class="__name">Eugene / Head of Flutter Team, Surf</span>
              </div>
            </div>
            <div class="swiper-slide th-our-team__item th-client__item">
              <div class="th-our-team__item-text">
                <p>Being a team with a strong engineering background, we are constantly improving technical skills and do our best to contribute to technology development. To optimize our Flutter development process we created a set of libraries and tools, Surf Gear, and developed our own approach to Flutter app architecture, Elementary, that provides for clean architecture and testable code. These are open-source solutions that can be used by the community</p><span class="__name">Dmitrii / Flutter Team\Tech Lead, Surf</span>
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
      <div class="th-section-neobank-cases section th-cross-platform-more-reas-fluter">
        <div class="container">
          <div class="th-neobank-cases__item th-grid">
            <div class="th-neobank-cases__img-wrap" style="background: #1B1B1B;"><span>More reasons to prefer Flutter</span><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/more-reas-fluter.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/cross-platform/more-reas-fluter.png" alt=""></picture></div>
            <div class="th-neobank-cases__text"> 
              <p>Flutter is a kind of revolution in frontend and at the high stability level. Currently, it provides for developing an application on a single code base and adapting it for various digital platforms: mobile, web, and desktop. <br>The Surf company has already learned the efficiency in experience: we created a three-in-one universal concept of a banking application applicable for mobile, web, and desktop</p>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/cases/web-mobile-and-desktop-in-one-flutter-based-concept/">Check more details about the case</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section th-cross-platform-advantages">
        <div class="container">
          <h2 class="section-title">Surf experience in Flutter <br>development services</h2>
          <div class="th-ios-app-dev-advantages__wrap th-grid"> 
            <div class="__item __big-big-numbers"><i>2019</i><span>started to work with <br>SDK</span></div>
            <div class="__item __big-big-numbers"><i>25+</i><span>apps worldwide in fintech, banking, entertainment, foodtech</span></div>
            <div class="__item __big-big-numbers"><i>47</i><span>middle+ rockstars <br>in-house</span></div>
            <div class="__item __big-big-numbers"><i>30+</i><span>packages <br>contributed</span></div>
          </div>
        </div>
      </div>
      <div class="section th-section-gray-block th-section-gray-block__full-width">
        <div class="container">
          <h2 class="section-title">For more details about Flutter development process applied by Surf visit our dedicated page</h2><a class="btn btn-default btn-large" href="https://surf.dev/flutter/">Read more about Flutter development</a>
        </div>
      </div>
      <div class="th-section-black section th-section-neobank-blog th-section-blog__android">
        <div class="container">
          <div class="th-title-wrap-section">
            <h2 class="section-title">Check our blog for updated cross-<br>platform approach insights</h2>
            <p>Still have open questions about the cross-platform approach to <br>app development? The Surf developers share their knowledge <br>and some practical tips</p>
          </div>
          <div class="th-neobank-blog js-dev-faq-advice">
            <div class="th-grid swiper-wrapper"><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/cross-platform-mobile-development-pros-and-cons/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.jpg"></picture><span>Cross-Platform Mobile App Development</span></div><span class="btn btn-default th-btn-white">Read more</span></a><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/flutter-vs-native/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.jpg"></picture><span>Flutter vs Native</span></div><span class="btn btn-default th-btn-white">Read more</span></a><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/advantages-and-disadvantages-of-cross-platform-mobile-development/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.jpg"></picture><span>Pros & Cons of Flutter Mobile Development</span></div><span class="btn btn-default th-btn-white">Read more</span></a></div>
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
        </div>
      </div>
    

      <section class="contact section" id="contact-section">
        <div class="container">
          <div class="contact__inner">
            <p class="contact__title contact__title--mobile">Let’s make your new project more cost-effective!</p>
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
                <p class="contact__title contact__title--desktop">Let’s make your new project more cost-effective!</p>
                <input type="hidden" name="reffer" id="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                <div class="contact-form-input">
                  <input type="text" id="company" autocomplete="off" name="company">
                  <label for="company">Company</label>
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
