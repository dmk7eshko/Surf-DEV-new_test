<?php
/**
 * Template Name: Banking soft DEV NEW
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

  <section class="th-banner th-banner__banking-soft">
        <div class="container">
          <div class="th-banner-wrap">
            <h2 class="h1">Banking Software Development Company</h2>
            <p>Designing, developing and testing banking software: web and mobile solutions for commercial banks, neobanks, retail banks, and other financial institutions</p><a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Request free consultation</a>
          </div>
          <div class="th-banner-img-wrap"> <picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/banner-img.webp" type="image/webp"><img class="th-banner-img" src="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/banner-img.png" alt=""></picture></div>
        </div>
      </section>
      <div class="th-section-black section th-banking-soft-advantages">
        <div class="container">
          <div class="th-grid th-grid-advantages">
            <div class="th-grid-advantages-title">
              <h2 class="section-title">Trusted by <br>Y Combinator neobanks</h2>
            </div>
            <div class="th-grid-advantages-discr">
              <div class="th-ios-app-dev-advantages__wrap th-grid"> 
                <div class="__item __big-numbers"><i>12+</i><span>years on banking <br>and fintech market</span></div>
                <div class="__item __big-numbers"><i>250+</i><span>experienced <br>professionals</span></div>
                <div class="__item __big-numbers"><i>Top 10</i><span>financial app developers, <a href="/cases/banking-app/">ranked by Clutch</a> </span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <section class="section th-neobank-services th-banking-soft-services">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Our banking software development solutions</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Surf develops banking software <b>tailored for specific audience needs</b>: from generally-used applications and sites to family banking or banking products for children. <br>Provide your customers with the convenient access to a variety of banking services and solutions. Do not forget to look toward automation and digitalization solutions we offer for internal bank processes and communication</p>
            </div>
          </div>
          <div class="expertise-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden th-banking-soft-services__pc">
            <div class="swiper-wrapper">
              <div class="expertise__block-item expertise-item swiper-slide" style="--color-bg: #fFf; margin-right: 36px;">
                <h3 class="expertise-item__title">Internet banking</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>fund transfers</li>
                    <li>bill payments</li>
                    <li>account balances and transaction history</li>
                    <li>updating user accounts and other financial records</li>
                    <li>applying  for loans or insurance online</li>
                    <li>analytics, and more</li>
                  </ul>
                </div>
              </div>
              <div class="expertise__block-item expertise-item swiper-slide" style="--color-bg: #fFf; margin-right: 36px;">
                <h3 class="expertise-item__title">Mobile banking for iOS and Android</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>secure authentication</li>
                    <li>P2P and bill payments</li>
                    <li>in-app and push notifications</li>
                    <li>QR code payments</li>
                    <li>spending analytics</li>
                    <li>ATM or bank branch locator, and more</li>
                  </ul>
                </div>
              </div>
              <div class="expertise__block-item expertise-item swiper-slide" style="--color-bg: #fFf; margin-right: 36px;">
                <h3 class="expertise-item__title">Intranet for banks</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>document, procedure and policy management</li>
                    <li>advanced knowledge base desi</li>
                    <li>multichannel information distribution</li>
                    <li>online forms</li>
                    <li>training tools</li>
                    <li>employee-generated content feed, and more</li>
                  </ul>
                </div>
              </div>
              <div class="expertise__block-item expertise-item swiper-slide" style="--color-bg: #fFf; margin-right: 36px;">
                <h3 class="expertise-item__title">Custom ERP systems</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>online task management</li>
                    <li>scheduling tools</li>
                    <li>generating reports</li>
                    <li>HR solutions</li>
                    <li>document flow digitalization</li>
                    <li>integrations, etc</li>
                  </ul>
                </div>
              </div>
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
            </div>
          </div><span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
        <div class="th-banking-soft-services__mobile">
          <div class="container">
            <div class="th-grid"> 
              <div class="expertise__block-item expertise-item">
                <h3 class="expertise-item__title">Internet banking</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>fund transfers</li>
                    <li>bill payments</li>
                    <li>account balances and transaction history</li>
                    <li>updating user accounts and other financial records</li>
                    <li>applying  for loans or insurance online</li>
                    <li>analytics, and more</li>
                  </ul>
                </div>
              </div>
              <div class="expertise__block-item expertise-item">
                <h3 class="expertise-item__title">Mobile banking for iOS and Android</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>secure authentication</li>
                    <li>P2P and bill payments</li>
                    <li>in-app and push notifications</li>
                    <li>QR code payments</li>
                    <li>spending analytics</li>
                    <li>ATM or bank branch locator, and more</li>
                  </ul>
                </div>
              </div>
              <div class="expertise__block-item expertise-item">
                <h3 class="expertise-item__title">Intranet for banks</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>document, procedure and policy management</li>
                    <li>advanced knowledge base desi</li>
                    <li>multichannel information distribution</li>
                    <li>online forms</li>
                    <li>training tools</li>
                    <li>employee-generated content feed, and more</li>
                  </ul>
                </div>
              </div>
              <div class="expertise__block-item expertise-item">
                <h3 class="expertise-item__title">Custom ERP systems</h3>
                <div class="expertise-item__text">
                  <ul>
                    <li>online task management</li>
                    <li>scheduling tools</li>
                    <li>generating reports</li>
                    <li>HR solutions</li>
                    <li>document flow digitalization</li>
                    <li>integrations, etc</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="section th-neo-cessection-more th-section-gray">
        <div class="container">
          <div class="section-more cases-more">
            <p class="section-more__text h3">Engaging user experience for mobile banking</p>
            <div class="th-cases-more-btns-wrap"><a class="btn btn-default btn-large th-btn-blue" href="/banking-app-development/">More about our approach</a></div>
          </div>
        </div>
      </div>
      <div class="section cases th-cases-colum">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Software tailored to banks’ specific needs</h2>
            </div>
            <div class="th-neobank-discr">
              <p>Whether you <b>need a new banking application or site</b> developed, or planning <b>to modernize your existing software by way</b> of migrating to the newer tech stack, check our case studies to find out what we have already done in the field of banking software development and how we collaborate with our clients.</p>
            </div>
          </div>
          <ul class="cases-list">
            <li class="cases-list__item case cases-list__item-new"><a class="case__link" href="/cases/flutter-app-for-neobank/">
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/case-item.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/case-item.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>Surf professionals integrate seamlessly into your flow and does care about teamplay</span></div>
                </div>
                <div class="th-case-text-wrap">
                  <div class="th-case__text-first">
                     Together with the Y Combinator startup team we worked on a neobank application in line with Scrum principles. The project stands out for high team engagement and proactive approach</div>
                  <div class="case__text">This allowed us to meet the tight deadlines and create an application with the complete set of the most demanded online banking features in less than a year</div><span class="btn btn-default btn-large">Read more</span>
                </div></a></li>
            <li class="cases-list__item case cases-list__item-new"><a class="case__link" href="/cases/web-mobile-and-desktop-in-one-flutter-based-concept/">
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/case-item-2.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/case-item-2.jpg" alt=""></picture>
                  <div class="case-title-in-image _title-in-image-black"><span>We select and offer our clients cost-effective solutions without loss in quality</span></div>
                </div>
                <div class="th-case-text-wrap">
                  <div class="th-case__text-first">With 25+ Flutter-powered projects in our portfolio, we know practice-proven strengths and possibilities of the SDK that meet the needs and requirements in the banking software development domain</div>
                  <div class="case__text">The cross-platform approach allows to cover web, mobile and desktop distribution channels and helps to reduce the project budget up to 60%.</div><span class="btn btn-default btn-large">Read more</span>
                </div></a></li>
            <li class="cases-list__item case cases-list__item-new"><a class="case__link" href="/cases/banking-app/">
                <div class="case__image"><picture><source srcset="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/case-item-3.webp" type="image/webp"><img src="<?php echo get_template_directory_uri(); ?>/pub/img/banking-soft/case-item-3.jpg" alt=""></picture>
                  <div class="case-title-in-image"> <span>We make provisions for your business future growth and development</span></div>
                </div>
                <div class="th-case-text-wrap">
                  <div class="th-case__text-first">
                     We built native iOS and Android applications with state-of-the-art UI and a complete set of features for users instead of the product based on the out-of-the-box solution</div>
                  <div class="case__text">Now, the bank can easily upgrade the applications and adjust them to its evolving business environment — not the other way around</div><span class="btn btn-default btn-large">Read more</span>
                </div></a></li>
          </ul>
        </div>
      </div>
      <div class="section th-neo-cessection-more">
        <div class="container">
          <div class="section-more cases-more">
            <p class="section-more__text h3">More banking software development challenges and <br>solutions here</p>
            <div class="th-cases-more-btns-wrap"><a class="btn btn-default btn-large th-btn-blue" href="/cases/fintech/">See more cases</a></div>
          </div>
        </div>
      </div>
      <section class="th-flutter-faq th-section-black section" id="faq">
        <div class="container">
          <div class="th-grid th-neobank-title-wrap">
            <div class="th-neobank-title">
              <h2 class="section-title">Team up with <br>experienced banking software developers</h2>
            </div>
            <div class="th-neobank-discr">
              <p>We are ready to join your in-house team at any stage and in the format you prefer: a dedicated team to be in charge of the development process or individual specialists to augment your project group.</p>
            </div>
          </div>
          <div class="th-flutter-faq-questions th-bank-soft-questions">
            <div class="th-grid">
              <div class="th-flutter-faq-questions__right">
                <div class="th-flutter-faq-q">
                  <div class="th-flutter-faq-q__title js-faq-toggle"><span>Analysts —  speed up the delivery up to 20%, ensure reduced bus factor</span> <span class="_ico"></span></div>
                  <div class="th-flutter-faq-q__content">
                    <ul> 
                      <li><b>Business analysts</b> analyze requirements, evaluate the associated risks, review design for compliance with guidelines, conduct grooming sessions.</li>
                      <li><b>System analysts</b> take care about components working perfectly together in line with customers' needs, define how to respond to a business challenge in technical language, and update specifications on a regular basis.</li>
                    </ul>
                  </div>
                </div>
                <div class="th-flutter-faq-q">
                  <div class="th-flutter-faq-q__title js-faq-toggle"><span>Programmers — 250+  tech enthusiasts with strong engineering culture</span> <span class="_ico"></span></div>
                  <div class="th-flutter-faq-q__content">
                    <p>The Surf team of top-notch engineers provides</p>
                    <ul>
                      <li>cross-industrial expertise</li>
                      <li>seamless collaborations with in-house teams</li>
                      <li>focus on the clients’ business goals and needs</li>
                      <li>continuous improvement of the existing technologies</li>
                    </ul>
                    <p>to ensure our clients get the best possible solutions for their project needs. </p>
                  </div>
                </div>
                <div class="th-flutter-faq-q">
                  <div class="th-flutter-faq-q__title js-faq-toggle"><span>UX\UI designers and researchers  — add more value to boost conversion, earn loyalty, reduce churn rates</span> <span class="_ico"></span></div>
                  <div class="th-flutter-faq-q__content">
                    <p>UX/UI designers’ tasks cover</p>
                    <ul>
                      <li>conceptualizing to determine a core idea driving design decisions</li>
                      <li>customer journey mapping,</li>
                      <li>user flows diagrams,</li>
                      <li>wireframing/prototyping, and</li>
                      <li>UI designing.</li>
                    </ul>
                    <p>In banking software development our designers focus on clean UIs that don’t distract users from completing their goals.</p>
                  </div>
                </div>
                <div class="th-flutter-faq-q">
                  <div class="th-flutter-faq-q__title js-faq-toggle"><span>Quality assurance engineers — save our clients up to 80% of time on testing due to test automation</span> <span class="_ico"></span></div>
                  <div class="th-flutter-faq-q__content">
                    <p>Our QA engineers</p>
                    <ul>
                      <li>review banking software technical requirements for accuracy and consistency,</li>
                      <li>assess the design to ensure it covers all expected application or site states,</li>
                      <li>use scenario tests and checklists that adhere to a common structure aiding time-efficiency,</li>
                      <li>provide reports covering all the checks and tests done and the test records.</li>
                    </ul>
                  </div>
                </div>
                <div class="th-flutter-faq-q">
                  <div class="th-flutter-faq-q__title js-faq-toggle"><span>Project managers — ensure balancing the three points of the project triangle</span> <span class="_ico"></span></div>
                  <div class="th-flutter-faq-q__content">
                    <p>PMs in the Surf teams</p>
                    <ul>
                      <li>ensure every task in the banking software development project is completed on time and within budget,</li>
                      <li>manage teams of analysts, designers and developers - all in full transparency so the client knows exactly where their project stands at any given moment</li>
                      <li>monitor financial progressions related to the project and generate reports to provide insights into team performance over sprint cycles.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <style>
          .th-flutter-faq-q__content p {
            margin-bottom: 20px;
          }
        </style>
      </section>


      <section class="contact section" id="contact-section">
        <div class="container">
          <div class="contact__inner">
            <p class="contact__title contact__title--mobile">Need custom software provider for your bank?</p>
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
                <p class="contact__title contact__title--desktop">Need custom software provider for your bank?</p>
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

<?php
get_footer('en');
