<?php
    global $post;
    $is_flutter_page = isset($post->post_name) && $post->post_name === 'flutter';
?>

<section class="download" style="background-color: #333F51;">
	<form class="project-form" data-redirect="<?php echo $is_flutter_page ? get_bloginfo('url') . '/flutter-vs-native/' : get_field('download_form_redirect', 'options')?>">
		<div class="project__start">
			<div class="container">
				<div class="download__inner">
					<img class="download__image" src="<?= THEME . '/assets/img/shape-1.svg'; ?>" alt="">
					<h2 class="download__title" style="color: #ffffff;">Mythbusters: Native VS cross-platform mobile app development</h2>
					<button class="download__link btn btn-green js-contact-form" type="button">Download</button>
				</div>
			</div>
		</div>
		<div class="project__slider swiper">
			<div class="swiper-wrapper">
				<div class="project__item swiper-slide">
					<div class="container">
						<h2 class="project__item-title">What's your name?</h2>
						<div class="project-form__row">
							<label class="project-form__label" for="d_name">Name</label>
							<input class="project-form__input" name="name" id="d_name" type="text" placeholder="My name is..." required tabindex="-1">
							<span class="project-form__error">You need to provide a name</span>
						</div>
						<div class="project-form__buttons">
							<button class="btn btn-green-line btn-green-line--white js-contact-next" type="button" tabindex="-1">Next</button>
						</div>
					</div>
				</div>
                <?php /*
				<div class="project__item swiper-slide">
					<div class="container">
						<h2 class="project__item-title">Your Phone number?</h2>
						<div class="project-form__row">
							<label class="project-form__label" for="d_phone">Phone</label>
							<input class="project-form__input" name="phone" id="d_phone" type="tel" placeholder="+9999-999-999" tabindex="-1">
						</div>
						<div class="project-form__buttons">
							<button class="project-form__prev btn btn-green-line btn-green-line--white js-contact-prev" type="button" tabindex="-1">Previous</button>
							<button class="btn btn-green js-contact-next" type="button" tabindex="-1">Next</button>
						</div>
					</div>
				</div>
                */ ?>
				<div class="project__item swiper-slide">
					<div class="container">
						<h2 class="project__item-title">Your email?</h2>
						<div class="project-form__row">
							<label class="project-form__label" for="d_email">E-mail</label>
							<input class="project-form__input" name="email" id="d_email" type="email" placeholder="example@surf.com" required tabindex="-1">
							<span class="project-form__error">Please enter your email</span>
						</div>
						<div class="project-form__buttons">
							<button class="project-form__prev btn btn-green-line btn-green-line--white js-contact-prev" type="button" tabindex="-1">Previous</button>
							<button class="btn btn-green js-contact-next" type="submit" tabindex="-1">Submit</button>
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
</section>