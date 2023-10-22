<?php
	/**
	 * Шаблон https://surf.ru/discuss/
	 * @package WordPress
	 * @subpackage Surf.ru
	 */
  
    $contacts = get_field('discuss_form', 'option');
	$title = $contacts['title_en'] ?: 'Contact Us';
//     $email = $global_discuss['email_en'] ?: 'hello@surf.dev';
	$subtitle = $contacts['subtitle_en'] ?: 'Surf can do it for you. Drop us a brief and let’s do your project together!';
	$icon = $contacts['icon'];
	$person = $contacts['person'];
	$photo = $person['photo'];
	$person_info = $person['info'];
	$linkedin = $person_info['social'];
	$privacy = $contacts['privacy'] ?: $global_discuss['privacy'];
	$btn_text = $contacts['btn'] ?: 'Get free consultation';


?>


<section class="contact new-contact" id="contact-section" style="background-color: #2834F8; color: #ffffff;">
    <div class="container">
        <div class="contacts-form row">
            <div class="contacts-form__info row col-lg-5 col-md-12 col-12">
                <div class="contacts-form__text col-lg-12 col-md-6 col-sm-12">
                    <div class="contacts-form__title"><?= $title; ?></div>
                    <div class="contacts-form__subtitle"><?= $subtitle; ?><span class="contacts-form__subtitle-icon"><img src="<?= $icon; ?>" /></span></div>
                </div>
			
                <?php if ($person_info) : ?>

                <div class="contacts-form__person col-lg-12 col-md-6 col-sm-12">
                    <div class="contacts-form__person-image col-3">
                        <?= wp_get_attachment_image($photo, 'full'); ?>
                    </div>
                    <div class="contacts-form__person-info">
						<p class="contacts-form__person-name"><?= $person_info['name']; ?> <a href="<?= $linkedin; ?>" target="_blank" title="Linkedin">
                        <svg width="20" height="20" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.6667 4H5.33333C4.596 4 4 4.59733 4 5.33333V26.6667C4 27.4027 4.596 28 5.33333 28H26.6667C27.404 28 28 27.4027 28 26.6667V5.33333C28 4.59733 27.404 4 26.6667 4ZM11.1187 24.4493H7.556V12.996H11.1187V24.4493ZM9.33733 11.432C8.196 11.432 7.27333 10.5067 7.27333 9.368C7.27333 8.22933 8.19467 7.304 9.33733 7.304C10.476 7.304 11.4013 8.228 11.4013 9.368C11.4013 10.508 10.476 11.432 9.33733 11.432ZM24.4507 24.4493H20.892V18.88C20.892 17.552 20.868 15.844 19.0413 15.844C17.188 15.844 16.9067 17.292 16.9067 18.7867V24.4507H13.3507V12.9973H16.764V14.5627H16.8133C17.2867 13.6627 18.4493 12.7133 20.1787 12.7133C23.784 12.7133 24.4493 15.084 24.4493 18.1693L24.4507 24.4493Z" fill="#fff"></path>
                        </svg>
                    </a></p>
                        <span class="contacts-form__person-position"><?= $person_info['position']; ?></span>
                    </div>

                </div>
                <?php endif; ?>
            </div>
            <div class="contact__form col-lg-6 col-md-12 col-12 col-lg-offset-1">
                <!-- templates/contact -->
                <form id="contact" class="new-form_contacts" enctype="multipart/form-data">
                    <div class="contacts-wrap">
<!--                         <input type="hidden" name="reffer" id="reffer" value="<?php // echo $_SERVER['HTTP_REFERER'] ?>"> -->
                        
                        <div class="contact-form-input">
                            <input type="text" id="name" autocomplete="new-name" name="name" required>
                            <label for="name" data-text="Your name*" data-error="Invalid format">Your name*</label>
                        </div>
                        <div class="contact-form-input">
                            <input type="email" id="email" autocomplete="new-email" name="email"  required>
                            <label for="email" data-text="Email*" data-error="Invalid format">Email*</label>
                        </div>
						<div class="contact-form-input contact-full">
                            <input type="text" id="company" autocomplete="off" name="company" required>
                            <label for="company" data-text="Company*" data-error="Invalid format">Company*</label>
                        </div>
                        <div class="contact-form-input contact-full">
                            <textarea id="msg" rows="1" autocomplete="off" name="msg" required></textarea>
                            <label for="msg" data-text="Project detail*" data-error="Required field">Project details*</label>
                        </div>
						<div class="contact-form-input honeypot">
                            <input type="text" id="honeypot-name" autocomplete="second-name" name="second_name" onfocus="getSpam()">
                            <label for="honeypot-name" data-text="Your second name*" data-error="Invalid format">Your secondname*</label>
                        </div>
                        <div class="contact-form-input contact-full contact-form__upload">
                            <div class="contact-form__upload-title">
                                <span class="">Drop a file here or click to upload</span>
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
						<div class="contact-form__footer">
							 <div class="contact-form-input-checkbox contact-form-input-checkbox--white contact-full col-md-6 col-sm-12">
                            <input checked type="checkbox" id="confirm" name="confirm">
                            <label for="confirm">Accept the <a target="_blank" href="<?= $privacy; ?>">privacy policy</a></label>
                        </div>
                        <div class="contact-form-btns__wrap row col-md-6 col-sm-12">
                            <button id="send" class="sendform sendform--white col-sm-12" type="submit"><?= $btn_text; ?></button>
                        </div>
						</div>
                       
                        <span style="display: none;">Hidden span</span>
                        <input type="hidden" id="clientID" name="clientID">
                        <input type="hidden" id="clientIDYA" name="clientIDYA">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>