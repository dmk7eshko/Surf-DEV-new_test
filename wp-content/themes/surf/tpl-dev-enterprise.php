<?php
/**
 * Template Name: Enterprise DEV NEW
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


  <section class="th-banner th-banner__banking-soft th-banner__enterprise">
        <div class="container">
          <div class="th-banner-wrap">
            <h1 class="h1">Enterprise Mobile App Development</h1>
            <p>Our company develop enterprise apps covering 20% of solutions that decrease your expenses for in-house tasks by 80%</p><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get free consultation</a>
          </div>
        </div>
      </section>
      <div class="section th-section-logos-slider">
        <div class="container">
          <h2 class="section-title">For 12 years, we have developed <br>enterprise apps for market leaders</h2>
          <div class="js-logos-slider th-logos-slider">
            <div class="swiper-wrapper">
              <div class="th-logos-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/logo_sbi.svg" alt=""></div>
              <div class="th-logos-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/logo_mars.svg" alt=""></div>
              <div class="th-logos-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/logo_sap.svg" alt=""></div>
              <div class="th-logos-slider__item swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/svg/logo_kfc.svg" alt=""></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section th-section__only-title">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Why businesses need enterprise applications</h2>
            </div>
            <div class="th-neobank-discr">
              <p>The enterprise mobile apps are designed to improve organizational performance according to the business-specific needs and goals.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="th-section-black section section__margin-non th-enterprise-automate" style="color:#fff">
        <div class="container">
          <div class="th-grid th-enterprise__grid">
            <div class="th-enterprise__left"> 
              <h2 class="h3 section-title">To automate the internal <br>processes of trading companies</h2>
            </div>
            <div class="th-enterprise__right">
              <div class="th-display-grid"> 
                <p>The speed of collecting orders, analyzing returns, sending goods to marketplaces with mobile printing of receipts and barcodes increases by 60%</p>
                <p>Operational monitoring of merchandising, layout scheme, and checking storefronts directly in the application</p>
                <p>Inventory and revaluation, movement of goods and control of overstocked inventory</p>
                <p>10 working hours of an employee per month is reduced by avoiding paper rounds and paper-based shift handover</p>
              </div>
            </div>
          </div>
          <div class="th-neobank-cases__item th-grid th-case-padding th-case__enterprise th-cross-platform-more-reas-fluter">
            <div class="th-neobank-cases__img-wrap" style="background: #F33232;"><span>A mobile app to automate couriers’ work</span><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/enterprise/case-1.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/enterprise/case-1.png" alt=""></picture></div>
            <div class="th-neobank-cases__text"> 
              <p>We created applications to optimize the workflow for drivers and couriers for an online bookstore. As a result, couriers manage to make 20% more deliveries per shift now</p>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/cases/apps-for-bookstore-couriers-and-drivers/">More about project</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="th-section-gray-block section th-enterprise-section-2">
        <div class="container">
          <div class="th-grid th-enterprise__grid">
            <div class="th-enterprise__left"> 
              <div class="th-sriker">To improve customer <br>service</div>
            </div>
            <div class="th-enterprise__right">
              <div class="th-display-grid th-display-grid__padding">
                <p>Checking the availability of goods at other points and the current discount directly from the seller's smartphone</p>
                <p>Cross-sell when working with a buyer. The average check also increased by 5% for additional sales at the checkout after the introduction of the service KPI, dashboard, and cashier rating</p>
                <p>Applying the loyalty program outside the cash zone</p>
                <p>Handing out store orders, refunds, payment via the seller's personal smartphone</p>
              </div>
            </div>
          </div>
          <div class="th-grid th-enterprise__grid">
            <div class="th-enterprise__left"> 
              <div class="th-sriker" style="background-color:#FFCB8D">To automate and optimize production <br>and business processes</div>
            </div>
            <div class="th-enterprise__right">
              <div class="th-display-grid th-display-grid__padding">
                <p>Reducing time and resources for solving business problems by automating, converting document flow into digital format</p>
                <p>Creating dashboards, online reports, and checklists</p>
                <p>Collecting statistics on the achievement of indicators and complying with working standards at the level of individual employees or divisions of the company</p>
              </div>
            </div>
          </div>
          <div class="th-neobank-cases__item th-grid th-case-padding th-case__enterprise th-cross-platform-more-reas-fluter">
            <div class="th-neobank-cases__img-wrap" style="background: #1B1B1B;"><span>Custom ERP system for KFC</span><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/enterprise/case-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/enterprise/case-2.png" alt=""></picture></div>
            <div class="th-neobank-cases__text"> 
              <p>We implemented several solutions to automate and digitalize the client’s business processes. One of them is an application for recognizing the faces of restaurant employees. This is an automatic accounting of working hours with a 100% guarantee. It is impossible to cheat the system</p>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/cases/kfc-dsr/">More about project</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="section th-enterprise-section-3">
        <div class="container">
          <div class="th-grid th-enterprise__grid">
            <div class="th-enterprise__left"> 
              <h2 class="h3 section-title">To improve the quality of <br>communication within the company</h2>
            </div>
            <div class="th-enterprise__right">
              <ul class="list-check">
                <li>Corporate messengers</li>
                <li>Internal news feeds</li>
                <li>Information portals</li>
                <li>Internal social networks, knowledge bases publicly available within the company</li>
                <li>Online surveys for prompt feedback</li>
              </ul>
            </div>
          </div>
          <div class="th-neobank-cases__item th-grid th-case__enterprise">
            <div class="th-neobank-cases__img-wrap" style="background: #581EFE;"><span>An enterprise mobile app for an international company</span><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/enterprise/case-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/enterprise/case-3.png" alt=""></picture></div>
            <div class="th-neobank-cases__text"> 
              <p>For a global-scale business, we created a corporate training app aimed to increase employees’ engagement and motivate them to generate and share ideas for the company’s digital transformation</p>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/cases/enterprise-application/">More about project</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="th-section-gray-block section th-hr-work-section">
        <div class="container">
          <div class="th-grid th-enterprise__grid">
            <div class="th-enterprise__left"> 
              <h2 class="h3 section-title">To speed up HR work up to 80% <br>and increase its efficiency</h2>
            </div>
          </div>
          <div class="th-grid th-hr-work__grid">
            <div class="th-hr-work-item"> <span>Internal loyalty systems</span></div>
            <div class="th-hr-work-item"> <span>Convenient tools for solving applied HR tasks</span></div>
            <div class="th-hr-work-item"> <span>Gamified training solutions</span></div>
            <div class="th-hr-work-item"> <span>Leaderboards</span></div>
            <div class="th-hr-work-item"> <span>Internal stores accepting points received for work achievements.</span></div>
          </div>
          <div class="th-hr-work__last">
            <p>info about our approach to HR solutions that allow to <br>automate regular employees’ requests such as taking a sick <br>leave or a vacation or getting a payroll form, you can check <a href="https://surf.dev/hr-apps/">here</a></p>
          </div>
        </div>
      </div>
      <div class="th-section-black section th-enterprise-section-4" style="color:#fff">
        <div class="container">
          <div class="th-grid th-enterprise__grid th-enterprise-section-4__title-wrap">
            <div class="th-enterprise__left"> 
              <h2>Custom enterprise mobile apps development</h2>
            </div>
            <div class="th-enterprise__right">
              <p>Building applications tailored specifically to your flow, requirements, and needs, offer certain advantages such as</p>
            </div>
          </div>
          <div class="th-enterprise-section-4__items-wrap">
            <div class="th-grid th-enterprise__grid th-enterprise-section-4__item">
              <div class="th-enterprise__left"> 
                <div class="th-sriker" style="background-color:#BED8FF">Focus on the needs of your <br>business</div>
              </div>
              <div class="th-enterprise__right">
                <p>we adjust and adapt an app to your processes and goals, and not vice versa. You are not limited in choosing the necessary features, UX/UI design, and technologies</p>
              </div>
            </div>
            <div class="th-grid th-enterprise__grid th-enterprise-section-4__item">
              <div class="th-enterprise__left"> 
                <div class="th-sriker" style="background-color:#EAD0FF">Foundation for future growth</div>
              </div>
              <div class="th-enterprise__right">
                <p>we lay down opportunities for further development of the app from the very beginning. We choose architectural solutions and the technology stack to ensure higher scalability. And provide for better integration with third-party systems</p>
              </div>
            </div>
            <div class="th-grid th-enterprise__grid th-enterprise-section-4__item">
              <div class="th-enterprise__left"> 
                <div class="th-sriker" style="background-color:#FFDAAE">Competitive advantage</div>
              </div>
              <div class="th-enterprise__right">
                <p>we create an effective tool for you, tailored to your goals and KPIs. Such a tool is not available for your competitors <br><br></p>
              </div>
            </div>
          </div>
          <h2 class="h3 section-title th-enterprise-section-4__last-title">On the other hand, you may face <br>certain challenges related to</h2>
          <div class="th-grid th-enterprise__grid th-enterprise-section-4__last-block">
            <div class="th-enterprise__left"> <span>Higher costs</span>
              <p>of custom application development as compared to the out-of-the-box solutions on the market</p>
            </div>
            <div class="th-enterprise__right"><span>More time</span>
              <p>required for creating an application from scratch than for integrating ready-made solutions</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section th-enterprise-section-5">
        <div class="container">
          <div class="th-title-wrap-section">
            <h2 class="section-title">Solution by Surf</h2>
            <p>We recommend cross-platform development with Flutter as <br>a solution</p>
          </div>
          <div class="th-section-5__items"> 
            <p>Flutter allows reducing the time and cost of development by up to 60%. This is possible because apps for several platforms (Android, iOS, Windows, macOS, Linux, web) use a single code base</p>
            <p>Flutter provides high performance and native look and feel</p>
            <p>The Surf team has created our own tools that add to the development and support of Flutter-based applications more quality and convenience for developers</p>
          </div>
          <div class="th-neobank-cases__item th-grid th-case-padding th-case__enterprise th-cross-platform-more-reas-fluter">
            <div class="th-neobank-cases__img-wrap" style="background-image: url(<?php echo get_template_directory_uri(); ?>/pub/img/enterprise/case-4.jpg);background-size: cover;"><span>Surf Gear</span></div>
            <div class="th-neobank-cases__text"> 
              <p>We analyzed and collected a set of various libraries: from architectural solutions to ready-made UI components, with the common goal to make the life of the Flutter developers easier, and, as a result, to reduce development time</p>
              <div class="th-btn-wrap"><a class="btn btn-default btn-large" href="https://surf.dev/flutter/">More about Flutter development</a></div>
            </div>
          </div>
        </div>
      </div>
      <section class="th-section-black th-ios-app-dev-areas th-enterprise-areas">
        <div class="container">
          <h2 class="section-title">Our enterprise app development lifecycle</h2>
          <div class="th-grid"> 
            <div class="th-fintech-areas-item"><span class="__title">Preparing and designing</span>
              <div class="__text">
                <ul> 
                  <li>We study the client’s needs and business goals, collect requirements from all stakeholders, decompose tasks into features, estimate workload and costs, and identify eventual risks.</li>
                  <li>We form and onboard the team.</li>
                  <li>We do research to study the audience and build a Customer Journey Map to cover all user scenarios including negative ones.</li>
                  <li>We detect eventual bottlenecks, barriers and issues and find the ways to avoid them.</li>
                  <li>Based on the insights, we create prototypes.</li>
                </ul>
              </div>
            </div>
            <div class="th-fintech-areas-item"><span class="__title">Developing</span>
              <div class="__text">
                <ul> 
                  <li>We develop native applications with Swift and Kotlin, or a cross-platform application with Flutter.</li>
                  <li>We set up an interaction with the back end. We write middleware to ensure that the app properly communicates with the back end and receives the data promptly.</li>
                  <li>We perform all required integrations with internal and third-party systems.</li>
                  <li>We set up user analytics.</li>
                </ul>
              </div>
            </div>
            <div class="th-fintech-areas-item"><span class="__title">Testing</span>
              <div class="__text">
                <ul> 
                  <li>We use both manual testing and automated tests. Every new feature undergoes component tests. For regression testing, we apply scenario tests.</li>
                  <li>We set up a testing environment and integrate the automated tests with the Continuous Integration (CI) environment.</li>
                </ul>
              </div>
            </div>
            <div class="th-fintech-areas-item"><span class="__title">Release and maintenance</span>
              <div class="__text">
                <ul> 
                  <li>We speed up releases to 90% due to DevOps.</li>
                  <li>We document thoroughly all project  approaches and data and transfer the updated documents to the in-house team.</li>
                  <li>We continue to support the project under SLA, or assist in finding and training the team, if required.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    

      <section class="contact section" id="contact-section">
        <div class="container">
          <div class="contact__inner">
            <p class="contact__title contact__title--mobile">Routine automation helps KFC managers save 10 hours weekly.
Want to save more?</p>
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
                <p class="contact__title contact__title--desktop">Routine automation helps KFC managers save 10 hours weekly.
Want to save more?</p>
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
