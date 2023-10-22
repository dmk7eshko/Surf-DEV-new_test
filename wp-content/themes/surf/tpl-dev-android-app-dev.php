<?php
/**
 * Template Name: Android app dev sw DEV NEW
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


  <section class="th-banner th-banner__android-app-dev">
        <div class="container">
          <div class="th-banner-wrap">
            <h1>Android App Development Services</h1>
            <p>Get your MVP app developed in 3-6 months by our Android team. Check our company’s  turnkey development option covering a mobile app, administration panel, and backend</p><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get free consultation</a>
          </div>
          <div class="th-banner-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/android-app-dev/banner-img.webp" type="image/webp"><img class="th-banner-img" src="<?php echo get_template_directory_uri(); ?>/pub/img/android-app-dev/banner-img.png" alt=""></picture>
            <div class="th-banner-message">We’ll build for you a custom app with Kotlin that will look great on any Android screen, from wearable devices to TVs</div>
          </div>
        </div>
      </section>
      <div class="th-section-black section th-ios-app-dev-advantages">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Hire the right agency for custom Android app development</h2>
            </div>
            <div class="th-neobank-discr">
              <p>With our developers, you can tackle any challenge in creating your next Android app to hit the market with a competitive product!</p>
            </div>
          </div>
          <div class="th-ios-app-dev-advantages__wrap th-grid"> 
            <div class="__item __big-numbers"><i>250+</i><span>in-house experts in programming, design, and product development</span></div>
            <div class="__item __big-numbers"><i>12+</i><span>years of experience in banking, food, media, retail, and more</span></div>
            <div class="__item __big-numbers"><i>4.53</i><span>the average Google Play rating of our apps</span></div>
            <div class="__item __big-numbers"><i>250+</i><span>successfully completed projects</span></div>
          </div>
        </div>
      </div>
      <section class="cases section">
        <div class="container">
          <div class="section-title">
            <h2 class="section-title__center">Check our Clients’ success stories</h2>
          </div>
          <ul class="cases-list">
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="https://surf.dev/cases/fintech" title="foodtech"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/element-2.svg">#fintech						<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/bank-of-sbi-group/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/sbi.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/sbi.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/sbi.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>SBI Group bank<br><br></span></div>
                </div>
                <div class="case__text">Together with the bank’s team we created a banking application to meet the needs of each family member. We made an emphasis on usability testing and introduced changes aimed to increase conversion. Customers do like the app. The proof is an increase in the number of new users by 25%, with the number of monthly active users growth by 27% (for the previous 6 months).</div><span class="btn btn-default btn-large">More details</span></a></li>
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="/foodtech-apps/" title="foodtech"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/doykya.svg">#foodtech							<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/burger-king/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/burger_king.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/bg.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/ios-app-dev/bg.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Burger King<br><br></span></div>
                </div>
                <div class="case__text">For the global fast food brand, we worked on redesign and improving fail safety.In the course of the project, we found and fixed some bugs. As a result, the fail safety for iOS improved from 98% to 99,9%, and for Android – from 98% to 99,4%.</div><span class="btn btn-default btn-large">More details</span></a></li>
            <li class="cases-list__item case cases-list__item-new"><a class="case__cat" href="https://surf.dev/cases/retail" title="foodtech"><img class="case__cat-icon case__cat-icon--start" width="48" height="48" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/element-1.svg">#e-commerce						<img class="case__cat-icon case__cat-icon--end" src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/link-icon.svg"></a><a class="case__link" href="https://surf.dev/cases/pet-shop/">
                <div class="case__icon"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/petshop.svg" alt=""></div>
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/android-app-dev/case-item.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/android-app-dev/case-item.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>App for pet shop<br><br></span></div>
                </div>
                <div class="case__text">Together with the client team, we started app development with a CJM workshop and a series of in-depth interviews. This helped us clear out customers’ basic needs, eventual problems, and barriers. As a result, within the first 2 weeks after the new app launch, the shop experienced a 15% conversion which was three times higher than in the previous app.</div><span class="btn btn-default btn-large">More details</span></a></li>
          </ul>
        </div>
      </section>
      <div class="th-section-black section th-android-app-dev-checks">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Build the best Android app in your category</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Google Play users downloaded 111.3 billion mobile apps in 2021. How to stand out against competitors? Offer great user experience! Our agency helps you deliver a product your users will love by building an amazing look and feel and implementing the most sought-after functionality.</p>
            </div>
          </div>
          <div class="th-android-app-dev-checks__wrap th-grid"> 
            <div class="__item"><span>Personalized experience</span><span>Bold color schemes</span><span>Security</span></div>
            <div class="__item"><span>Easy navigation</span><span>Social integrations</span><span>Feedback system</span></div>
            <div class="__item"><span>Seamless checkout</span><span>Simplicity</span><span>Ability to work offline</span></div>
          </div>
        </div>
      </div>
      <div class="section th-flutter-stage th-technologies-use">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Technologies we leverage</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Our Android developer team  uses the top tech stack for creating software</p>
            </div>
          </div>
          <div class="th-technologies-use__tabs-wrap">
            <div class="th-technologies-use__tabs"> <a class="_active" href="#technologies-1">Languages & Frameworks</a><a href="#technologies-2">Platforms</a><a href="#technologies-3">Tools</a><a href="#technologies-4">Techniques</a></div>
          </div>
          <div class="th-technologies-use__items" id="technologies-1"><a href="#">RxJava 2</a><a href="#">Groovy</a><a href="#">gRPC</a><a href="#">Retrofit 2</a><a href="#">Glide</a><a href="#">JUnit</a><a href="#">Gradle</a><a href="#">Socket</a><a href="#">Mockito</a><a href="#">Protobuf</a></div>
          <div class="th-technologies-use__items" id="technologies-2"><a href="#" style="background-color:#EAD0FF">Gradle Build Cache Server</a><a href="#" style="background-color:#EAD0FF">Bintray</a><a href="#" style="background-color:#EAD0FF">Artifactory</a><a href="#" style="background-color:#EAD0FF">Figma</a><a href="#" style="background-color:#EAD0FF">Jira</a><a href="#" style="background-color:#EAD0FF">Apiary</a><a href="#" style="background-color:#EAD0FF">Swagger</a><a href="#" style="background-color:#EAD0FF">Firebase</a><a href="#" style="background-color:#EAD0FF">Crashlytics</a></div>
          <div class="th-technologies-use__items" id="technologies-3"><a href="#" style="background-color:#DBFFE9">Git</a><a href="#" style="background-color:#DBFFE9">Proguard</a><a href="#" style="background-color:#DBFFE9">Postman</a><a href="#" style="background-color:#DBFFE9">Android studio</a></div>
          <div class="th-technologies-use__items" id="technologies-4"><a href="#" style="background-color:#FFF9C5">Clean Architecture</a><a href="#" style="background-color:#FFF9C5">Shimmer</a><a href="#" style="background-color:#FFF9C5">Design patterns</a><a href="#" style="background-color:#FFF9C5">E-tag</a><a href="#" style="background-color:#FFF9C5">Custom animation</a><a href="#" style="background-color:#FFF9C5">Material design</a><a href="#" style="background-color:#FFF9C5">Android security</a><a href="#" style="background-color:#FFF9C5">Data Binding</a><a href="#" style="background-color:#FFF9C5">MVP/MVVM</a><a href="#" style="background-color:#FFF9C5">Multi-module</a><a href="#" style="background-color:#FFF9C5">Code Review</a><a href="#" style="background-color:#FFF9C5">Retrospectives</a></div>
        </div>
      </div>
      <div class="section th-flutter-stage th-ios-stage">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Our mobile app development process</h2>
            </div>
            <div class="th-neobank-discr">
              <p>To start development of your Android app, our agency determines your project scope early in the project life cycle, and develops your product through a series of repeated cycles — Agile iterations or sprints.</p>
            </div>
          </div>
        </div>
        <div class="expertise-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-stage-slider">
          <div class="swiper-wrapper">
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Plan</span><span class="th-stage-slide__disctr">
                <p> Get a detailed product development roadmap with a prioritized backlog and timeframes.</p></span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Design</span><span class="th-stage-slide__disctr">Learn what your audience needs, using our customer journey map and design mockups.</span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">Build</span><span class="th-stage-slide__disctr">Give us your feedback on the functionality delivered to you at the end of each sprint.</span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Test</span><span class="th-stage-slide__disctr">Get an app that works properly across all Android devices. We'll handle all your testing needs.</span></div>
            <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Launch</span><span class="th-stage-slide__disctr">Release your app through Google Play Store or let us help you distribute it for beta testing.</span></div>
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
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">1</span><span class="th-stage-slide__title">Plan</span><span class="th-stage-slide__disctr">
              <p> Get a detailed product development roadmap with a prioritized backlog and timeframes.</p></span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">2</span><span class="th-stage-slide__title">Design</span><span class="th-stage-slide__disctr">Learn what your audience needs, using our customer journey map and design mockups.</span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">3</span><span class="th-stage-slide__title">Build</span><span class="th-stage-slide__disctr">Give us your feedback on the functionality delivered to you at the end of each sprint.</span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Test</span><span class="th-stage-slide__disctr">Get an app that works properly across all Android devices. We'll handle all your testing needs.</span></div>
          <div class="expertise__block-item expertise-item swiper-slide swiper-slide-active th-stage-slide" style="--color-bg: #FFCFE3;"><span class="th-stage-slide__number">4</span><span class="th-stage-slide__title">Launch</span><span class="th-stage-slide__disctr">Release your app through Google Play Store or let us help you distribute it for beta testing.</span></div>
        </div>
      </div>
      <div class="th-section-black section th-android-app-dev-checks">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Build your custom Android app with us</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Just drop us an email with info about your project and any requirements. We'll get back to you within one day.</p><a class="btn btn-default btn-large th-btn-blue" href="#footer">Contact us</a>
            </div>
          </div>
        </div>
      </div>
      <div class="section th-neo-cessection-more">
        <div class="container">
          <div class="section-more cases-more">
            <p class="section-more__text">
              <div class="h3">Or explore other options</div><span class="section-more__discr">We also offer native app development for iOS and create cross-platform <br>apps with Flutter</span>
            </p>
            <div class="th-cases-more-btns-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/ios-app-development/">iOS app development</a><a class="section-more__link btn btn-large btn-default" href="https://surf.dev/flutter/">Flutter app development</a></div>
          </div>
        </div>
      </div>
      <div class="th-section-black section th-section-neobank-blog th-section-blog__android">
        <div class="container">
          <div class="th-title-wrap-section">
            <h2 class="section-title">Prepare for future development</h2>
            <p>More tips and insights about Android development and not only</p>
          </div>
          <div class="th-neobank-blog js-dev-faq-advice">
            <div class="th-grid swiper-wrapper"><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/payment-app-design-secrets/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-1.jpg"></picture><span>Payment App Design to Boost Your Business Results</span></div><span class="btn btn-default th-btn-white">Read more</span></a><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/mobile-app-development-roadmap/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-2.jpg"></picture><span>Product Development Roadmap: The First Step</span></div><span class="btn btn-default th-btn-white">Read more</span></a><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/mobile-app-development-roadmap/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-3.jpg"></picture><span>To Build an Amazing App</span></div><span class="btn btn-default th-btn-white">Read more</span></a><a class="th-neobank-blog__item swiper-slide" href="https://surf.dev/mobile-app-development-rfp/">
                <div class="th-neobank-blog__item-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-4.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/neobank/blog-4.jpg"></picture><span>Mobile App RFP: How to Create a Working Document for Potential Vendors</span></div><span class="btn btn-default th-btn-white">Read more</span></a></div>
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
            <p class="contact__title contact__title--mobile">Ready to get an estimate 
for your next Android app?</p>
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
                <p class="contact__title contact__title--desktop">Ready to get an estimate 
for your next Android app?</p>
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
