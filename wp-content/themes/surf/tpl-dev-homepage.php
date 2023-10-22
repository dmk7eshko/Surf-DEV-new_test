<?php
/**
 * Template Name: Homepage DEV
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
		<section class="home-intro">
			<div class="container">
				<div class="home-intro__header">
					<h1 class="home-intro__title"><?php the_title(); ?></h1>
					<div class="th-home-intro__btns-wrap"> <a class="btn btn-default btn-large th-btn-blue js-fancybox-modal-form" href="#contact-section">Get free consultation</a><a class="btn btn-default btn-large js-scroll" href="#contact-section">Contact us</a></div>
				</div>
			</div>
		</section>
		<?php the_content(); ?>
		<section class="contact section" id="contact-section">
			<div class="container">
				<div class="contact__inner">
					<p class="contact__title contact__title--mobile"><?= $title; ?></p>
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
							<p class="contact__title contact__title--desktop"><?= $title; ?></p>
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
