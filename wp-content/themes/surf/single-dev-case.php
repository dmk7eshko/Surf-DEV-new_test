<?php
	/**
	 * New post template
	 * @package WordPress
	 * @subpackage surf.dev
	 * Template Name: Dev case
	 * Template Post Type: cases
	 */
	get_header('dev');
?>
	<?php if (have_posts()) {
		while (have_posts()) : the_post(); ?>
			<section class="single-article dev-single-article dev-single-case">
				<article id="post-<?php the_ID(); ?>" class="single-art">
					<div class="case-hero"<?= get_field('color') ? 'style="background-color: ' . get_field('color') . '"' : ''; ?>>
						<div class="container">
							<div class="case-hero__inner">
								<div class="case-hero__content">
									<h1 class="case-hero__title"><?php the_title(); ?></h1>
									<?php if (get_field('top-title')) : ?>
										<p class="case-hero__text"><?= get_field('top-title'); ?></p>
									<?php endif; ?>
									<?php if (get_field('top-result')) : ?>
										<div class="case-hero__result"><?= get_field('top-result'); ?></div>
									<?php endif; ?>
								</div>
								<div class="case-hero__image">
									<?php
										$img = get_field( 'hero_image' );
										echo wp_get_attachment_image($img['ID'], [610, 670], null, ['class' => 'case-hero__image-pic', 'loading' => 'eager', 'decoding' => 'async']);
									?>
									<img class="case-hero__image-shape" src="<?= THEME . '/assets/img/post/case-hero-shape.svg'; ?>" width="448" height="471" alt="">
								</div>
							</div>
						</div>
						<img class="case-hero__image-shape-2" src="<?= THEME . '/assets/img/post/case-hero-shape-2.svg'; ?>" width="272" height="286" alt="">
					</div>
					<div class="container post-content">
						<div class="listing">
							<span>Contents</span>
							<ul class="listing-content"></ul>
						</div>
						<div class="content"><?php the_content(); ?></div>
					</div>
				</article>
			</section>
		<?php endwhile;
	} ?>
	<section class="dev-cases">
		<div class="container">
			<h2 class="dev-cases__title">Other Case Studies</h2>
			<ul class="dev-cases__list">
				<?php
					$idPost = get_the_ID();
					// задаем нужные нам критерии выборки данных из БД
					$args = array(
						'posts_per_page' => 2,
						'orderby'        => 'rand',
						'post_type'      => 'cases',
						'post__not_in'   => array($idPost),
					);

					$query = new WP_Query($args);


					// Цикл
					if ($query->have_posts()) {
						while ($query->have_posts()) {
							$query->the_post();
							$img = get_the_post_thumbnail('', 'caseleft');
							?>
							<li class="dev-cases__list-item dev-case">
								<a href="<?php the_permalink() ?>" class="dev-case__image" title="<?php the_title() ?>">
									<?= $img ?>
								</a>
								<div class="dev-case__content">
									<a href="<?php the_permalink() ?>" class="dev-case__content-title" title="<?php the_title(); ?>"><?php the_title() ?></a>
									<p class="dev-case__content-desc"><?php the_field('top-title'); ?></p>
									<a href="<?php the_permalink() ?>" class="dev-case__content-link" title="Single Mobile App for Several Banks">View case study</a>
								</div>
							</li>
						<?php }
					}
					wp_reset_postdata();
				?>
			</ul>
			<img class="dev-cases__shape dev-cases__shape--snake" src="<?= THEME . '/assets/img/post/cases-shape-1.svg'; ?>" width="153" height="34" loading="lazy" decoding="async" alt="">
		</div>
	</section>
	<section class="project" style="background-color: #333F51;">
		<form class="project-form">
			<div class="project__start">
				<div class="container">
					<div class="project__inner">
						<img class="project__image" src="<?= THEME . '/assets/img/shape-2.svg'; ?>" alt="">
						<div class="project__content project__content--case">
							<h2 class="project__title" style="color: #ffffff;">Contact Us</h2>
							<p class="project__text" style="color: #ffffff;">Surf can do it for you. Drop us a brief and let’s do your project together!</p>
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
<?php
	get_footer('dev');