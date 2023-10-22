<section class="project" style="background-color: #333F51;">
	<form class="project-form">
		<div class="project__start">
			<div class="container">
				<div class="project__inner">
					<img class="project__image" src="<?= THEME . '/assets/img/shape-2.svg'; ?>" alt="">
					<div class="project__content">
						<h2 class="project__title" style="color: #ffffff;">Let’s start your project</h2>
						<p class="project__text" style="color: #ffffff;">Just drop us an email with short info about your project and we’ll get back to you within one day with our next steps.</p>
						<button class="project__button btn btn-green js-contact-form" type="button">Contact us</button>
					</div>
				</div>
			</div>
		</div>
		<div class="project__slider swiper">
			<div class="swiper-wrapper">
				<div class="project__item swiper-slide">
					<div class="container">
						<h2 class="project__item-title">What's your name?</h2>
						<div class="project-form__row">
							<label class="project-form__label" for="name">Name</label>
							<input class="project-form__input" name="name" id="name" type="text" placeholder="My name is..." required tabindex="-1">
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
							<label class="project-form__label" for="phone">Phone</label>
							<input class="project-form__input" name="phone" id="phone" type="tel" placeholder="+9999-999-999" tabindex="-1">
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
							<label class="project-form__label" for="email">E-mail</label>
							<input class="project-form__input" name="email" id="email" type="email" placeholder="example@surf.com" required tabindex="-1">
							<span class="project-form__error">Please enter your email</span>
						</div>
						<div class="project-form__buttons">
							<button class="project-form__prev btn btn-green-line btn-green-line--white js-contact-prev" type="button" tabindex="-1">Previous</button>
							<button class="btn btn-green js-contact-next" type="button" tabindex="-1">Next</button>
						</div>
					</div>
				</div>
				<div class="project__item swiper-slide">
					<div class="container">
						<h2 class="project__item-title">Project detail</h2>
						<div class="project-form__row">
							<label class="project-form__label" for="message">Message</label>
							<textarea class="project-form__input" name="message" id="message" rows="3" placeholder="Project detail" tabindex="-1"></textarea>
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
	<img class="project__wave" src="<?= THEME . '/assets/img/shape-3.svg'; ?>" alt="">
</section>