<section class="project " style="background-color: #333F51;">
	<form class="project-form">
		<div class="project__slider swiper">
			<div class="swiper-wrapper">
				<div class="project__item swiper-slide">
					<div class="container">
						<h2 class="project__item-title project__item-title--small">Request a service quote, we will get back to you ASAP.</h2>
						<div class="project-form__row">
							<label class="project-form__label" for="name">Name</label>
							<input class="project-form__input" name="name" id="name" type="text" placeholder="My name is..." required tabindex="-1">
							<span class="project-form__error">You need to provide a name</span>
						</div>
						<div class="project-form__buttons">
							<button class="btn btn-green-line btn-green-line--white js-contact-next" type="button" tabindex="-1" id="service_form_next_btn_1">Next</button>
						</div>
					</div>
					<img class="project__wave project__wave--lines" src="<?= THEME . '/assets/img/lines.svg'; ?>" alt="">
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
							<button class="btn btn-green js-contact-next" type="button" tabindex="-1" id="service_form_next_btn_2">Next</button>
						</div>
					</div>
					<img class="project__wave" src="<?= THEME . '/assets/img/shape-3.svg'; ?>" alt="">
				</div>
                */ ?>
				<div class="project__item swiper-slide">
					<div class="container">
						<h2 class="project__item-title">Your email?</h2>
						<div class="project-form__row">
							<label class="project-form__label" for="email">E-mail</label>
							<input class="project-form__input" name="email" id="email" type="email" placeholder="example@surf.com" required  tabindex="-1">
							<span class="project-form__error">Please enter your email</span>
						</div>
						<div class="project-form__buttons">
							<button class="project-form__prev btn btn-green-line btn-green-line--white js-contact-prev" type="button" tabindex="-1">Previous</button>
							<button class="btn btn-green js-contact-next" type="button" tabindex="-1" id="service_form_next_btn_3">Next</button>
						</div>
					</div>
					<img class="project__wave" src="<?= THEME . '/assets/img/shape-3.svg'; ?>" alt="">
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
							<button class="btn btn-green js-contact-next" type="submit" tabindex="-1" id="service_form_submit_btn">Submit</button>
						</div>
					</div>
					<img class="project__wave" src="<?= THEME . '/assets/img/shape-3.svg'; ?>" alt="">
				</div>
				<div class="project__item project__item--success swiper-slide">
					<div class="container">
						<h2 class="project__item-title">Thank you!</h2>
						<p class="project__item-text">We'll get back to you within a business day.</p>
					</div>
					<img class="project__wave" src="<?= THEME . '/assets/img/shape-3.svg'; ?>" alt="">
				</div>
			</div>
			<div class="project__pagination swiper-pagination"></div>
		</div>
	</form>
</section>