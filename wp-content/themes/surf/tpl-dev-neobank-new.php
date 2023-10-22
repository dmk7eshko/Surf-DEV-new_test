<?php
/**
 * Template Name: Neobank DEV NEW
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

      <section class="th-banner th-banner__neobank">
        <div class="container">
          <div class="th-banner-wrap">
            <h2 class="h1">Neobank App Development</h2>
            <p>Build a fully working product by 20% faster than your competitors and invest the resources in increasing its profitability</p><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get an estimation</a>
          </div><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/banner.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/banner.png" alt=""></picture>
        </div>
      </section>

      <div class="th-section-black section th-neobank-advantages">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Transform the future of banking together with Surf</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Polished processes, reliable team, distinctive expertise in digital banking and fintech — Surf helped build and launch neobanks with hundreds of thousands of users. We are trusted by world-famous fintech companies like <a href="https://surf.dev/cases/flutter-banking-app/">Société Générale</a> and Y Combinator startups.</p>
            </div>
          </div>
          <div class="th-grid th-neobank-advantages__gallery">
            <div class="th-neobank-advantages__gallery-left">
              <div class="th-neobank-advantages__gallery-item"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/advantages-gallery-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/advantages-gallery-1.jpg" alt=""></picture></div>
            </div>
            <div class="th-neobank-advantages__gallery-right">
              <div class="th-neobank-advantages__gallery-item"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/advantages-gallery-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/advantages-gallery-2.jpg" alt=""></picture></div>
              <div class="th-neobank-advantages__gallery-item"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/advantages-gallery-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/advantages-gallery-3.jpg" alt=""></picture></div>
            </div>
          </div>
          <div class="th-trust-us"> <span class="th-trust-us__title">Trust your idea to us</span>
            <div class="th-grid"> 
              <div class="th-trust-item"> 
                <div class="th-trust-item__title"> <i>12+</i><span>years of experience</span></div>
                <div class="th-trust-item__discr"><span>We will build a neobank application from scratch or improve the existing one. We will walk together with you side by side right to the launching stage and further</span></div>
              </div>
              <div class="th-trust-item"> 
                <div class="th-trust-item__title"> <i>19+</i><span>fintech projects in the portfolio</span></div>
                <div class="th-trust-item__discr"><span>We have worked with all kinds of fintech products including <a href="https://surf.dev/cases/flutter-app-for-neobank/">neobanks</a>. So we at Surf are completely familiar with requirements, pitfalls and possible challenges which are inherent to them.</span><a class="btn btn-default th-btn-white th-btn-middle" href="https://surf.dev/cases/fintech/">Read the case studies</a></div>
              </div>
              <div class="th-trust-item"> 
                <div class="th-trust-item__title th-trust-item__title-min"><span>Broad-minded Middle+ professionals</span></div>
                <div class="th-trust-item__discr"><span>Nowadays people are fed up with trivial solutions. Our team is experienced enough to suggest innovative ways of solving common tasks and to handle project challenges together with you. <br>We will develop a custom solution or will design a consistent system of ready-made ones</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="th-section-neobank-cases section">
        <div class="container">
          <h2 class="section-title">Success stories</h2>
          <div class="th-neobank-cases__item th-grid">
            <div class="th-neobank-cases__img-wrap" style="background: #18C159;"><span>Flutter App for Neobank</span><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/case-item-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/case-item-1.png" alt=""></picture></div>
            <div class="th-neobank-cases__text"> 
              <p>Our Flutter team built a cross-platform challenger bank app from the ground up in less than a year</p>
              <ul> 
                <li>Kotlin-powered backend</li>
                <li>Bleeding-edge UI/UX</li>
                <li>Numerous SDK integrations</li>
                <li>And other features</li>
              </ul>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/cases/flutter-app-for-neobank/">Read the full case study</a></div>
            </div>
          </div>
          <div class="th-neobank-cases__item th-grid">
            <div class="th-neobank-cases__img-wrap" style="background: #F33232;"><span>First Flutter Banking App in Europe</span><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/case-item-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/case-item-2.png" alt=""></picture></div>
            <div class="th-neobank-cases__text"> 
              <p>Our Flutter team built a cross-platform challenger bank app from the ground up in less than a year</p>
              <ul> 
                <li>Successful integration with the Client’s backend legacy banking services</li>
                <li>Smart design</li>
                <li>Smooth project transfer to the Client’s in-house team</li>
              </ul>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/cases/flutter-banking-app/">Read the full case study</a></div>
            </div>
          </div>
          <div class="th-neobank-cases__item th-grid">
            <div class="th-neobank-cases__img-wrap"><span>Family Banking App</span><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/case-item-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/case-item-3.png" alt=""></picture></div>
            <div class="th-neobank-cases__text"> 
              <p>We developed a new modern banking app that fulfills the needs of each family member, provides shared accounts and detailed spendings analytics</p>
              <ul> 
                <li>Improved usability and clear UI</li>
                <li>Gamified financial education tasks for kids</li>
                <li>Family cashback categories</li>
                <li>And other features</li>
              </ul>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/cases/bank-of-sbi-group/">Read the full case study</a></div>
            </div>
          </div>
        </div>
        <div class="section th-section-neobank-process">
          <div class="container">
            <div class="th-grid th-neobank-title-wrap">
              <div class="th-neobank-title">
                <h2 class="section-title">All-digital banking processes in one app</h2>
              </div>
              <div class="th-neobank-discr">
                <p>We will build a neobank app that allows your customers complete all their banking processes digitally</p>
              </div>
            </div>
            <div class="th-grid th-neobank-process">
              <div class="th-neobank-process__item"> <span>Account</span>
                <ol> 
                  <li>Easy account opening </li>
                  <li>Identity verification</li>
                  <li>Fraud-detection</li>
                </ol>
              </div>
              <div class="th-neobank-process__item"> <span>Money</span>
                <ol> 
                  <li>Bank-to-bank transfers</li>
                  <li>Intrabank transfers by phone number</li>
                  <li>Making international payments</li>
                  <li>Setting limits on cards</li>
                  <li>Paying bills</li>
                  <li>Loading funds</li>
                  <li>Splitting a bill</li>
                  <li>Scheduling regular payments</li>
                  <li>Viewing transaction history</li>
                  <li>Viewing spending analytics</li>
                </ol><a href="#">See more </a>
              </div>
              <div class="th-neobank-process__item"> <span>Other features</span>
                <ol> 
                  <li>Signing documents with e-signature</li>
                  <li>Push-notifications</li>
                  <li>Support chat and chatbots</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="section th-neo-cessection-more">
          <div class="container">
            <div class="section-more cases-more">
              <p class="section-more__text h3">Looking for specific project?</p>
              <div class="th-cases-more-btns-wrap"><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get an estimation</a><a class="section-more__link btn btn-large btn-default" href="https://surf.dev/cases/fintech">See other cases</a></div>
            </div>
          </div>
        </div>
        <div class="th-section-black section th-neobank-services">
          <div class="container">
            <h2 class="section-title">Services we provide</h2>
            <div class="expertise__block">
              <div class="expertise__block-item expertise-item" href="/mobile-shopping-apps-development/" title="E-commerce">
                <h3 class="expertise-item__title">UX/UI design</h3>
                <div class="expertise-item__text">
                  <p>Human centric design by team of 15+ Senior Designers and 25+ SA:</p>
                  <ul>
                    <li>Market and competitor analysis, user and product researches</li>
                    <li>CJM workshops, in-depth customer interviews</li>
                    <li>UX expertise that help our clients boost conversions, reduce churn rates, cover broader audience</li>
                  </ul>
                </div>
                <div class="th-expertise-item__btns-wrap"><a class="expertise-item__link btn btn-default" href="https://surf.dev/design/">More about UX/UI</a></div>
              </div>
              <div class="expertise__block-item expertise-item" href="/mobile-shopping-apps-development/" title="E-commerce">
                <h3 class="expertise-item__title">Native app development</h3>
                <div class="expertise-item__text">
                  <p>Human centric design by team of 15+ Senior Designers and 25+ SA:</p>
                  <ul>
                    <li>Native apps on a smartphone with Swift/Kotlin with the best CX</li>
                    <li>Vast selection of custom tools and frameworks for development speed and efficiency</li>
                    <li>Early adoption of tech from WWDC and I/O</li>
                    <li>Most up-to-date stack: Swift UI, Compose, etc.</li>
                  </ul>
                </div>
                <div class="th-expertise-item__btns-wrap"><a class="expertise-item__link btn btn-default" href="https://surf.dev/android-app-development/">More about Android Development</a><a class="expertise-item__link btn btn-default" href="https://surf.dev/ios-app-development/">More about IOS Development</a></div>
              </div>
              <div class="expertise__block-item expertise-item" href="/mobile-shopping-apps-development/" title="E-commerce">
                <h3 class="expertise-item__title">Cross-platform development</h3>
                <div class="expertise-item__text">
                  <p>50+ developers use the only cross-platform framework worth using</p>
                  <ul>
                    <li>One codebase for iOS and Android</li>
                    <li>Up to 40% less cost</li>
                    <li>15 times faster than React Native</li>
                  </ul>
                </div>
                <div class="th-expertise-item__btns-wrap"><a class="expertise-item__link btn btn-default" href="https://surf.dev/flutter/">More about Flutter Development</a></div>
              </div>
              <div class="expertise__block-item expertise-item" href="/mobile-shopping-apps-development/" title="E-commerce">
                <h3 class="expertise-item__title">Backend development</h3>
                <div class="expertise-item__text">
                  <p>Human centric design by team of 15+ Senior Designers and 25+ SA:</p>
                  <ul>
                    <li>Java/Kotlin stack for any kind of service with sustainable scalability 99%</li>
                    <li>GoLang for highly scalable, high performing, and cost-effective services</li>
                    <li>JS and TS web frontend for maintainability</li>
                    <li>DevOps practices to increase team performance and delivery speed</li>
                  </ul>
                </div>
                <div class="th-expertise-item__btns-wrap"><a class="expertise-item__link btn btn-default" href="https://surf.dev/backend-development/">More about Backend Development</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="section th-flutter-stage section th-ios-stage">
          <div class="container">
            <div class="th-grid th-neobank-title-wrap">
              <div class="th-neobank-title">
                <h2 class="section-title">Building great products by taking small steps</h2>
              </div>
              <div class="th-neobank-discr">
                <p>Our agency develops all projects using Agile software development methodology where the process breaks down into short iterations. At the end of each iteration, you'll get a working chunk of functionality ready for review</p>
              </div>
            </div>
          </div>
          <div class="expertise-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-stage-slider">
            <div class="swiper-wrapper">
              <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3; margin-right: 36px;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Analyze and Plan</span><span class="th-stage-slide__disctr">You’ll get a product development roadmap based on a thorough business analysis, together with an integration plan, set project goals and estimate labor costs.</span></div>
              <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3; margin-right: 36px;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Prototype and design</span><span class="th-stage-slide__disctr">You’ll get an interface prototype that considers both positive and negative user scenarios and has all key features. Then we’ll create an elaborated user-friendly UI/UX design of your neobank app.</span></div>
              <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3; margin-right: 36px;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">Build</span><span class="th-stage-slide__disctr">We’ll develop both fraud-safe backend and smooth frontend sides of your neobank app. Every two weeks, you’ll be provided with an app build for review. Your app will be totally compliant with data and code security standards.</span></div>
              <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3; margin-right: 36px;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Test</span><span class="th-stage-slide__disctr">We’ll perform manual and automated testing after every iteration. It’ll ensure security and stability of your app. Our automated testing will save you up to 80% of the testing time.</span></div>
              <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3; margin-right: 36px;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">5</span><span class="th-stage-slide__title">Launch</span><span class="th-stage-slide__disctr">We'll help you carry out your app and upload it to to App Store and Google Play and support it continually if required according to SLA.</span></div>
              <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide th-expertise-item__dote" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3; margin-right: 36px;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">6</span><span class="th-stage-slide__title">Hand over</span><i>Option stage</i><span class="th-stage-slide__disctr">We’ll help you build an in-house team, pass the project over to them with all due documentation and conduct an onboarding.</span></div>
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
              <div class="expertise__block-item expertise-item th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Analyze and Plan</span><span class="th-stage-slide__disctr">You’ll get a product development roadmap based on a thorough business analysis, together with an integration plan, set project goals and estimate labor costs.</span></div>
              <div class="expertise__block-item expertise-item th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Prototype and design</span><span class="th-stage-slide__disctr">You’ll get an interface prototype that considers both positive and negative user scenarios and has all key features. Then we’ll create an elaborated user-friendly UI/UX design of your neobank app.</span></div>
              <div class="expertise__block-item expertise-item th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">Build</span><span class="th-stage-slide__disctr">We’ll develop both fraud-safe backend and smooth frontend sides of your neobank app. Every two weeks, you’ll be provided with an app build for review. Your app will be totally compliant with data and code security standards.</span></div>
              <div class="expertise__block-item expertise-item th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Test</span><span class="th-stage-slide__disctr">We’ll perform manual and automated testing after every iteration. It’ll ensure security and stability of your app. Our automated testing will save you up to 80% of the testing time.</span></div>
              <div class="expertise__block-item expertise-item th-stage-slide" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">5</span><span class="th-stage-slide__title">Launch</span><span class="th-stage-slide__disctr">We'll help you carry out your app and upload it to to App Store and Google Play and support it continually if required according to SLA.</span></div>
              <div class="expertise__block-item expertise-item th-stage-slide th-expertise-item__dote" href="/mobile-shopping-apps-development/" title="E-commerce" style="--color-bg: #FFCFE3;" role="group" aria-label="1 / 6"><span class="th-stage-slide__number">6</span><span class="th-stage-slide__title">Hand over</span><i>Option stage</i><span class="th-stage-slide__disctr">We’ll help you build an in-house team, pass the project over to them with all due documentation and conduct an onboarding.</span></div>
          </div>

        </div>
        <div class="th-section-black section th-section-neobank-blog th-section-blog__ios">
          <div class="container">
            <h2 class="section-title">Learn more about our neobank app development expertise</h2>
            <div class="th-neobank-blog">
              <div class="th-grid">
                  <a class="th-neobank-blog__item" href="https://surf.dev/how-to-develop-a-mobile-banking-app-like-revolut-7-lessons-for-newcomers/">
                  <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.jpg"></picture><span>How to Develop a Mobile Banking App Like Revolut</span></div>
                  <p>Traditional banks generally have to address issues such as bureaucracy, paper-based workflows, and time-consuming processes…</p><span class="btn btn-default th-btn-white">Read more</span></a>

                  <a class="th-neobank-blog__item" href="https://surf.dev/neobank-growth/">
                  <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.jpg"></picture><span>Neobank Growth: How to Scale a Fintech Startup</span></div>
                  <p>What is a neobank? In a nutshell, it’s a bank that doesn’t have physical branches and operates exclusively online. The shift from.</p><span class="btn btn-default th-btn-white">Read more</span></a>
                  
                  <a class="th-neobank-blog__item" href="https://surf.dev/how-to-find-and-hire-fintech-developers-with-experience-in-building-great-apps/">
                  <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.jpg"></picture><span>Neobank Solutions for Higher Profitability</span></div>
                  <p>Fintech is constantly transforming the financial services industry. The traditional brick-and-mortar banking concept is drifting towards…</p><span class="btn btn-default th-btn-white">Read more</span></a></div>
            </div>
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
