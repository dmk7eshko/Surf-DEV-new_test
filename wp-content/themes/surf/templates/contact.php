<?php
	/**
	 * Шаблон https://surf.ru/discuss/
	 * @package WordPress
	 * @subpackage Surf.ru
	 */
	get_header();

    $global_discuss = get_field('discuss', 'option');

    $contacts = get_field('contacts');
	$title = $contacts['title'] ?: 'Contact Us';
	$subtitle = $contacts['subtitle'] ?: 'Surf can do it for you. Drop us a brief and let’s do your project together!';
	$photo = $contacts['photo'];
	$info = $contacts['info'];
	$privacy = $contacts['privacy'] ?: $global_discuss['privacy'];
	$btn_text = $contacts['btn'] ?: 'Get free consultation';

    $discuss = get_field('discuss', 'option');
    $phone = $discuss['phone'];
    $phone_link = substr_replace(preg_replace("/[^0-9]/", '', $phone), '+1', 0, 1);
?>

	<section class="contact" id="contact-section" style="background-color: #1A1A1A; color: #ffffff;">
		<div class="container">
			<div class="contact__inner">
				<div class="contact__info">
					<div class="contact__text">
						<p class="contact__title"><?= $title; ?></p>
						<span class="contact__subtitle"><?= $subtitle; ?></span>
					</div>

					<?php if ($info) : ?>
						<div class="contact__image">
							<?= wp_get_attachment_image($photo, 'full'); ?>
							<div class="contact__person">
								<p class="contact__person-name"><?= $info['name']; ?></p>
								<span class="contact__person-position"><?= $info['position']; ?></span>
							</div>
						</div>
					<?php endif; ?>

                    <?php if ($phone) : ?>
                        <div class="contact__phone mobile-hidden">
                            <a href="tel:<?= $phone_link; ?>"><?= $phone; ?></a>
                        </div>
                    <?php endif; ?>
				</div>
				<div class="contact__form">
                    <!-- templates/contact -->
					<form id="contact">
						<div class="contacts-wrap">
							<p class="contact__title contact__title-hide">Let's develop your banking app!</p>
							<input type="hidden" name="reffer" id="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
							<div class="contact-form-input">
								<input type="text" id="company" autocomplete="off" name="company" required>
								<label for="company" data-text="Company*" data-error="Invalid format">Company*</label>
							</div>
							<div class="contact-form-input">
								<input type="text" id="name" autocomplete="off" name="name">
								<label for="name" data-text="Your name*" data-error="Invalid format">Your name*</label>
							</div>
							<div class="contact-form-input contact-full">
								<input type="email" id="email" autocomplete="off" name="email">
								<label for="email" data-text="Email*" data-error="Invalid format">Email*</label>
							</div>
							<div class="contact-form-input contact-full">
								<textarea id="msg" rows="1" autocomplete="off" name="msg"></textarea>
								<label for="msg" data-text="Project detail*" data-error="Required field">Project detail*</label>
							</div>
							<div class="contact-form-input contact-full contact-form__upload">
								<div class="contact-form__upload-title">
									<img src="<?= THEME . '/assets/img/attachment-white.svg' ?>" alt="">
									<span class="mobile-hidden">Drop a file here or click to upload</span>
									<span class="desktop-hidden">Attach file</span>
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
							<div class="contact-form-input-checkbox contact-form-input-checkbox--white contact-full">
								<input checked type="checkbox" id="confirm" name="confirm">
								<label for="confirm">Accept the <a target="_blank" href="<?= $privacy; ?>">privacy policy</a></label>
							</div>
							<div class="contact-form-btns__wrap">
								<button id="send" class="sendform sendform--white" type="submit"><?= $btn_text; ?></button>
								<a class="btn btn-default btn-large th-btn-gray auto-popup" href="#" data-fancybox-close="data-fancybox-close">Continue reading </a>
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

<?php get_footer();