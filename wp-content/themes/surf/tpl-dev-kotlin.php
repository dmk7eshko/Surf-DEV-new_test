<?php
/**
 * Template Name: kotlin DEV NEW
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

  <section class="th-banner-about th-banner-kolin">
        <div class="container">
          <div class="th-banner-wrap">
            <h1>Kotlin Application <br>Development <br>Services</h1>
          </div><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/kotlin/banner.webp" type="image/webp"><img class="th-banner-about__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/kotlin/banner.jpg" alt=""></picture>
          <div class="th-banner-kolin-wrap">
            <p>Hire our middle+ Kotlin development team with 250+ successfully launched projects for high-performance and secure app creation</p><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get free consultation</a>
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
            <section class="th-section-black th-fintech-faq">
              <div class="th-title-wrap">
                <h2 class="section-title">Kotlin development benefits</h2>
                <p>In 2016, Kotlin was introduced as a more cost-effective and secure alternative to Java. So far, it has gained a solid position among developers, startups, and large companies. And here's why</p>
              </div>
              <div class="th-flutter-faq-q">
                <div class="th-flutter-faq-q__title js-faq-toggle"><span>40% less code lines</span> <span class="_ico"></span></div>
                <div class="th-flutter-faq-q__content">
                  <p>Kotlin is one of the most concise programming languages and allows developers to write more compact and readable code compared to Java. As a result, your firm gets cost-effective apps with faster delivery. </p>
                </div>
              </div>
              <div class="th-flutter-faq-q">
                <div class="th-flutter-faq-q__title js-faq-toggle"><span>100% Java interoperability</span> <span class="_ico"></span></div>
                <div class="th-flutter-faq-q__content">
                  <p>Your company can seamlessly switch from the old Java-powered codebase to Kotlin one. The latter can smoothly interact with Java code directly or via an out-of-the-box converter in the IDE environment, and supports all Java classes and libraries.</p>
                </div>
              </div>
              <div class="th-flutter-faq-q">
                <div class="th-flutter-faq-q__title js-faq-toggle"><span>Full stack development</span> <span class="_ico"></span></div>
                <div class="th-flutter-faq-q__content">
                  <p>Kotlin Multiplatform also allows both back and frontend creation. This speeds up the development process, simplifies code support and testing. </p>
                </div>
              </div>
              <div class="th-flutter-faq-q">
                <div class="th-flutter-faq-q__title js-faq-toggle"><span>Great type-safety</span> <span class="_ico"></span></div>
                <div class="th-flutter-faq-q__content">
                  <p>Kotlin leaves no room for bugs and errors caused by NullPointerExceptions (NPEs) which often cause huge financial losses. As a result, development time and costs are significantly reduced.</p>
                </div>
              </div>
              <div class="th-flutter-faq-q">
                <div class="th-flutter-faq-q__title js-faq-toggle"><span>Multiplatform support</span> <span class="_ico"></span></div>
                <div class="th-flutter-faq-q__content">
                  <p>Around 70% of the code isn’t platform-specific thanks to Kotlin Multiplatform. It provides the opportunity of reusing the codebase between all major mobile and desktop OSes including Android, iOS, Windows, macOs, Linux. </p>
                </div>
              </div>
              <div class="th-flutter-faq-q">
                <div class="th-flutter-faq-q__title js-faq-toggle"><span>Top-3 programming languages among businesses</span> <span class="_ico"></span></div>
                <div class="th-flutter-faq-q__content">
                  <p>Kotlin is used by companies from various industries for projects of any complexity: from MVP to high-load apps with numerous third-party integrations</p>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
      <div class="section th-section-gray-block">
        <div class="container">
          <h2 class="section-title">Flutter is a new revolution in frontend. It allows saving 60% in terms of cross-platform development.</h2><a class="btn btn-default btn-large" href="https://surf.dev/flutter/">Learn about Flutter, another great cross-platform dev tool</a>
        </div>
      </div>
      <div class="section th-kotlin-comp-trust th-flutter-stage th-ios-stage">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Companies that trust Kotlin</h2>
            </div>
            <div class="th-neobank-discr">
              <p>A fast-paced competitive world requires fast and easily scalable solutions. That's why leading firms from all over the world choose Kotlin for their products.</p>
            </div>
          </div>
          <div class="expertise-trust-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-stage-slider">
            <div class="swiper-wrapper">
              <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/netflix.svg" alt=""><span class="th-stage-slide__disctr">
                  <p>Cross-platform mobile app development with Kotlin Multiplatform</p></span></div>
              <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/pinterest.svg" alt=""><span class="th-stage-slide__disctr">
                  <p>Switching from Java to Kotlin and becoming a Kotlin-first Android environment</p></span></div>
              <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/airb.svg" alt=""><span class="th-stage-slide__disctr">
                  <p>Java-to-Kotlin migration and creation of their own Kotlin-based framework, MvRx</p></span></div>
              <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/cashapp.svg" alt=""><span class="th-stage-slide__disctr">
                  <p>Android app functionality improvement by integrating Kotlin</p></span></div>
            </div>
          </div>
          <div class="expertise-slider__controls trust-slider__controls">
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
          <div class="th-stage-slider th-stage-slider__mobile th-grid">
            <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/netflix.svg" alt=""><span class="th-stage-slide__disctr">
                <p>Cross-platform mobile app development with Kotlin Multiplatform</p></span></div>
            <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/pinterest.svg" alt=""><span class="th-stage-slide__disctr">
                <p>Switching from Java to Kotlin and becoming a Kotlin-first Android environment</p></span></div>
            <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/airb.svg" alt=""><span class="th-stage-slide__disctr">
                <p>Java-to-Kotlin migration and creation of their own Kotlin-based framework, MvRx</p></span></div>
            <div class="expertise__block-item th-kotlin-trust-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><img class="th-kotlin-trust-item__img" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/cashapp.svg" alt=""><span class="th-stage-slide__disctr">
                <p>Android app functionality improvement by integrating Kotlin</p></span></div>
          </div>
        </div>
      </div>
      <div class="th-section-black section th-ios-app-dev-advantages">
        <div class="container">
          <h2 class="section-title">Why hire Surf</h2>
          <div class="th-ios-app-dev-advantages__wrap th-grid"> 
            <div class="__item __big-numbers"><i>12+</i><span>Kotlin development company with 12+ years of providing qualitative and cost-effective services</span></div>
            <div class="__item __big-numbers"><i>250+</i><span>Development agency with 250+ successful projects for fintech, foodtech, healthcare, and other industries</span></div>
            <div class="__item __big-numbers"><i>Agile</i><span>project management and transparent agency processes</span></div>
            <div class="__item __big-numbers"><i>5+ months</i><span>A company that can build a Kotlin-based MVP in 5+ months</span></div>
          </div>
        </div>
      </div>
      <section class="section th-fintech-advantages th-kotlin-services">
        <div class="container">
          <div class="th-title-wrap-section th-title-wrap-section__min th-title-wrap-section__min-width">
            <h2 class="section-title">Kotlin development <br>services we provide</h2>
            <p>Reach your business goals in the most effective and secure way with development services by Surf team</p>
          </div>
          <div class="th-grid"> 
            <div class="th-fintech-advantages-item"><span class="__title">Android apps</span>
              <div class="__text">Our full stack development company creates Android apps that are rated 4.53+ on Google Play</div>
              <div class="__ico-wrap"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/kolin-s-1.svg"></div>
            </div>
            <div class="th-fintech-advantages-item"><span class="__title">Kotlin backend development</span>
              <div class="__text">ur middle+ team will build fault-safe and scalable backend from scratch app or migrate the existing one</div>
              <div class="__ico-wrap"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/kolin-s-2.svg"></div>
            </div>
            <div class="th-fintech-advantages-item"><span class="__title">App testing</span>
              <div class="__text">We use best testing practices and our own solutions to ensure high app stability resulting in  cutting testing time by 80%</div>
              <div class="__ico-wrap"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/kolin-s-3.svg"></div>
            </div>
            <div class="th-fintech-advantages-item"><span class="__title">App support</span>
              <div class="__text">We’ll keep an eye on your app after the release in order to spot and fix issues on time. We’ll also monitor your Google Play rating and process user feedback.</div>
              <div class="__ico-wrap"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/kolin-s-4.svg"></div>
            </div>
          </div>
        </div>
      </section>
      <section class="cases section">
        <div class="container">
          <div class="section-title">
            <h2 class="section-title__center">Our cases</h2>
          </div>
          <ul class="cases-list">
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="https://surf.dev/cases/foodtech-apps/" title="foodtech"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/doykya.svg">#e-commerce								<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/burger-king/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/burger_king.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/bg.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/bg.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Burger King <br>native apps</span></div>
                </div>
                <div class="case__text">Our agency improved app fail-safety to 99.09% and implemented Kotlin-run backend that supports a multifaceted feature list</div><span class="btn btn-default btn-large">Read the case study</span></a></li>
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="https://surf.dev/cases/retail/" title="retail"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/element-1.svg">#e-commerce								<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/book-shop-app/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/books.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/books.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/books.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Mobile apps for a large book shop</span></div>
                </div>
                <div class="case__text">We created award-winning Android/iOS apps for smartphones and tablets for an online store with a vast shopping catalog. As a Google-certified firm, we were among the first who implemented Instant Apps.</div><span class="btn btn-default btn-large">Read the case study</span></a></li>
            <li class="cases-list__item case cases-list__item-new cases-list__item-black"><a class="case__cat" href="https://surf.dev/cases/media/" title="retail"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/media-elem.svg">#media&entertainment					<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/video-streaming-platform/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/thehole.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/kotlin/hole-case.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/kotlin/hole-case.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Popular video streaming platform</span></div>
                </div>
                <div class="case__text">We built a Flutter app with Kotlin-powered backend that withstands a load of 25,000 daily active users and supports smooth performance even with heavy features.</div><span class="btn btn-default btn-large">Read the case study</span></a></li>
          </ul>
        </div>
      </section>
      <div class="section th-flutter-stage th-kolin-stage th-ios-stage">
        <div class="container">
          <h2 class="section-title">Our development workflow</h2>
        </div>
        <div class="js-kolin-expertise swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-stage-slider">
          <div class="swiper-wrapper">
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;margin-right:36px"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Plan</span><span class="th-stage-slide__disctr">
                <p> You’ll get a research-based product development roadmap with prioritized feature list, key development process stages, estimated development time and costs</p></span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;margin-right:36px"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Design</span><span class="th-stage-slide__disctr">You’ll get low- and high-fidelity prototypes, design concept with detailed CJM and User flows first, and then we’ll provide you with a final UX/UI design after prototypes approval</span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;margin-right:36px"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">Build</span><span class="th-stage-podtitle">250 middle+ developers in the team</span><span class="th-stage-slide__disctr">You’ll get an app build delivered every 2-3 weeks for your approval. Our own solutions like SurfGen will provide <b>3-4 times faster</b> delivery of the final version.</span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;margin-right:36px"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Test</span><span class="th-stage-slide__disctr">Your app will be thoroughly tested by our middle+ QA engineers to ensure high security and stability. Thanks to automated tests, it’ll take <b>by ~80% less time.</b></span><a class="btn btn-default th-btn-middle" href="https://surf.dev/testing/">More about Testing</a></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;margin-right:36px"><span class="th-stage-slide__number">5</span><span class="th-stage-slide__title">Release and Support</span><span class="th-stage-podtitle">4.53+ Google Play rating guarantee</span><span class="th-stage-slide__disctr">We’ll prepare the app for Google Play moderation, and continue to maintain and update it</span><a class="btn btn-default th-btn-middle" href="https://surf.dev/maintenance-under-sla/">More about Support</a></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;margin-right:36px"><span class="th-stage-slide__number">6</span><span class="th-stage-slide__title">Transfer inhouse</span><span class="th-stage-slide__minprettl">Option stage</span><span class="th-stage-slide__disctr">You’ll get the full scope of project documentation needed for further development: project specifications, testing reports, recommendations, etc. We’ll help you find the right tech team and will onboard the developers.</span></div>
          </div>
          <div class="expertise-slider__controls kolin-expertise__controls">
            <div class="swiper-button-prev expertise-slider-prev swiper-button-disabled" tabindex="-1" role="button" aria-label="Previous slide" aria-disabled="true">
              <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.5 1.13599L1.13604 7.49995M1.13604 7.49995L7.5 13.8639M1.13604 7.49995H13.864" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </div>
            <div class="swiper-button-next expertise-slider-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
              <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.5 1.13599L12.864 7.49995M12.864 7.49995L6.5 13.8639M12.864 7.49995H0.136039" stroke="currentColor" stroke-width="1.5"></path>
              </svg>
            </div>
          </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <div class="th-stage-slider th-stage-slider__mobile th-grid">
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Plan</span><span class="th-stage-slide__disctr">
              <p> You’ll get a research-based product development roadmap with prioritized feature list, key development process stages, estimated development time and costs</p></span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Design</span><span class="th-stage-slide__disctr">You’ll get low- and high-fidelity prototypes, design concept with detailed CJM and User flows first, and then we’ll provide you with a final UX/UI design after prototypes approval</span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">Build</span><span class="th-stage-podtitle">250 middle+ developers in the team</span><span class="th-stage-slide__disctr">You’ll get an app build delivered every 2-3 weeks for your approval. Our own solutions like SurfGen will provide <b>3-4 times faster</b> delivery of the final version.</span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Test</span><span class="th-stage-slide__disctr">Your app will be thoroughly tested by our middle+ QA engineers to ensure high security and stability. Thanks to automated tests, it’ll take <b>by ~80% less time.</b></span><a class="btn btn-default th-btn-middle" href="https://surf.dev/testing/">More about Testing</a></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3"><span class="th-stage-slide__number">5</span><span class="th-stage-slide__title">Release and Support</span><span class="th-stage-podtitle">4.53+ Google Play rating guarantee</span><span class="th-stage-slide__disctr">We’ll prepare the app for Google Play moderation, and continue to maintain and update it</span><a class="btn btn-default th-btn-middle" href="https://surf.dev/maintenance-under-sla/">More about Support</a></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3"><span class="th-stage-slide__number">6</span><span class="th-stage-slide__title">Transfer inhouse</span><span class="th-stage-slide__minprettl">Option stage</span><span class="th-stage-slide__disctr">You’ll get the full scope of project documentation needed for further development: project specifications, testing reports, recommendations, etc. We’ll help you find the right tech team and will onboard the developers.</span></div>
        </div>
      </div>
    

      <section class="contact section" id="contact-section">
        <div class="container">
          <div class="contact__inner">
            <p class="contact__title contact__title--mobile">Want to build a reliable Kotlin app?
Tell us about your idea and get a free estimation</p>
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
                <p class="contact__title contact__title--desktop">Want to build a reliable Kotlin app?
Tell us about your idea and get a free estimation</p>
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
