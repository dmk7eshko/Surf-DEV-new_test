<div class="post-cta<?= get_field('post_cta_form') ? ' post-cta--form' : ''; ?>">

	<?php if (get_field('post_cta_form')) : ?>
		<form class="project-form">
			<div class="project__start">
				<div class="post-cta__inner">
					<?php if ($cta_icon = get_field('post_cta_icon')) : ?>
						<div class="post-cta__icon">
							<?= wp_get_attachment_image($cta_icon, 'full'); ?>
						</div>
					<?php endif;
					if ($cta_content = get_field('post_cta_content')) : ?>
						<div class="post-cta__content">
							<?php if ($cta_content['title']) : ?>
								<h2 class="post-cta__content-title"><?= $cta_content['title']; ?></h2>
							<?php endif;
							if ($cta_content['text']) : ?>
								<p class="post-cta__content-text"><?= $cta_content['text']; ?></p>
							<?php endif;
							if ($btn_text = get_field('post_cta_button')) : ?>
								<button class="post-cta__content-link btn btn-green js-contact-form" type="button"><?= $btn_text; ?></button>
							<?php endif; ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<div class="project__slider swiper">
				<div class="swiper-wrapper">
					<div class="project__item swiper-slide">
						<div class="container">
							<h2 class="project__item-title">What's your name?</h2>
							<div class="project-form__row">
								<label class="project-form__label" for="name">Name</label> <input
									class="project-form__input" name="name" id="name" type="text"
									placeholder="My name is..." required> <span class="project-form__error">You need to provide a name</span>
							</div>
							<div class="project-form__buttons">
								<button class="btn btn-green-line btn-green-line--white js-contact-next" type="button">
									Next
								</button>
							</div>
						</div>
					</div>
					<div class="project__item swiper-slide">
						<div class="container">
							<h2 class="project__item-title">Your Phone number?</h2>
							<div class="project-form__row">
								<label class="project-form__label" for="phone">Phone</label> <input
									class="project-form__input" name="phone" id="phone" type="tel"
									placeholder="+9999-999-999">
							</div>
							<div class="project-form__buttons">
								<button
									class="project-form__prev btn btn-green-line btn-green-line--white js-contact-prev"
									type="button">Previous
								</button>
								<button class="btn btn-green js-contact-next" type="button">Next</button>
							</div>
						</div>
					</div>
					<div class="project__item swiper-slide">
						<div class="container">
							<h2 class="project__item-title">Your email?</h2>
							<div class="project-form__row">
								<label class="project-form__label" for="email">E-mail</label> <input
									class="project-form__input" name="email" id="email" type="email"
									placeholder="example@surf.com" required> <span class="project-form__error">Please enter your email</span>
							</div>
							<div class="project-form__buttons">
								<button
									class="project-form__prev btn btn-green-line btn-green-line--white js-contact-prev"
									type="button">Previous
								</button>
								<button class="btn btn-green js-contact-next" type="button">Next</button>
							</div>
						</div>
					</div>
					<div class="project__item swiper-slide">
						<div class="container">
							<h2 class="project__item-title">Project detail</h2>
							<div class="project-form__row">
								<label class="project-form__label" for="message">Message</label> <textarea
									class="project-form__input" name="message" id="message" rows="3"
									placeholder="Project detail"></textarea>
							</div>
							<div class="project-form__buttons">
								<button
									class="project-form__prev btn btn-green-line btn-green-line--white js-contact-prev"
									type="button">Previous
								</button>
								<button class="btn btn-green js-contact-next" type="submit">Submit</button>
							</div>
						</div>
					</div>

					<div class="project__item project__item--success swiper-slide">
						<div class="container">
							<h2 class="project__item-title">Thank you!</h2>
							<p class="project__item-text">We'll get back to you within a business day.</p>
						</div>
					</div>
				</div>

				<div class="project__pagination swiper-pagination"></div>
			</div>
		</form>
	<?php else: ?>
		<div class="post-cta__inner">
			<?php if ($cta_icon = get_field('post_cta_icon')) : ?>
				<div class="post-cta__icon">
					<?= wp_get_attachment_image($cta_icon, 'full'); ?>
				</div>
			<?php endif;
			if ($cta_content = get_field('post_cta_content')) : ?>
				<div class="post-cta__content">
					<?php if ($cta_content['title']) : ?>
						<h2 class="post-cta__content-title"><?= $cta_content['title']; ?></h2>
					<?php endif;
					if ($cta_content['text']) : ?>
						<p class="post-cta__content-text"><?= $cta_content['text']; ?></p>
					<?php endif;
					if ($btn_url = get_field('post_cta_url')) : $btn_text = get_field('post_cta_button'); ?>
						<a href="<?= $btn_url; ?>" class="post-cta__content-link btn btn-green"><?= $btn_text; ?></a>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<?php if (get_field('post_cta_shapes')) : ?>
		<img src="<?= THEME . '/assets/img/hex.svg'; ?>" width="86" height="76" alt=""
		     class="post-cta__shape post-cta__hex">
		<img src="<?= THEME . '/assets/img/lines.svg'; ?>" width="160" height="50" alt=""
		     class="post-cta__shape post-cta__lines">
	<?php endif; ?>
</div>

<!--<div class="container post-content no-padding-top">-->
<!--	<div class="content">-->