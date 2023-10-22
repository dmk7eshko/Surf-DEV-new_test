<?php
/**
 * Страница с кастомным шаблоном
 * @package WordPress
 * @subpackage Surf.ru
 * Template Name: Career RU
 */

$vacs = [
	['title' => 'Бизнес/системный <br>аналитик', 'text' => 'REST • API • BPMN • Системный анализ • Бизнес анализ • SOAP'],
	['title' => 'Flutter <br>разработчик', 'text' => 'Flutter • Dart • Английский — B1'],
	['title' => 'Android <br>разработчик', 'text' => 'Kotlin • Java • MVVM • Android SDK • Английский язык', 'has_badge' => true, 'position' => 'top', 'color' => 'green'],
	['title' => 'Project <br>Manager', 'text' => 'PMBOK • PMI • Agile Project Management • Atlassian Jira • Планирование • Управление проектами • Управление рисками'],
	['title' => 'Дизайнер <br>интерфейсов', 'text' => 'Figma • Mobile • UX • UI • Дизайн интерфейсов • Прототипирование • Проектирование', 'has_badge' => true, 'position' => 'bottom', 'color' => 'red'],
	['title' => 'iOS <br>разработчик', 'text' => 'IOS • Swift • MVP • Bitbucket'],
	['title' => 'Backend <br>разработчик', 'text' => 'Java • Kotlin • Postgres • Spring Boot • REST • SQL • Angular • Docker'],
	['title' => 'Стажёры QA, Android, iOS, PM, BA, Flutter', 'text' => 'Воронеж • Офис/удаленно', 'has_badge' => true, 'position' => 'bottom', 'color' => 'blue'],
];

get_header(); ?>

	<section class="career-intro">
		<div class="career-intro__mobile">
			<img src="<?= THEME . '/assets/img/career/career-bg-mobile.png'; ?>" alt="">
		</div>
		<div class="career-intro__wrapper">
			<div class="career-intro__inner">
				<div class="container">
					<div class="career-intro__content">
						<div class="career-intro__buttons">
							<a href="#" class="career-intro__link career-intro__link--vacancies">Вакансии</a>
							<a href="#" class="career-intro__link career-intro__link--internships">Стажировки</a>
						</div>
						<h1 class="career-intro__title">Сёрфим</h1>
						<p class="career-intro__text">Делаем крутые продукты. <br>Меняем реальность.</p>
						<a href="#" class="career-intro__button">Хочу в Surf</a>
					</div>
				</div>
				<img class="career-intro__bg" src="<?= THEME . '/assets/img/career/ib.png'; ?>" alt="">
			</div>
		</div>
	</section>

	<section class="career-ticker section-72">
		<div class="ticker-slider ticker-slider--stroke swiper" data-direction="forward" data-speed="5000">
			<div class="swiper-wrapper">
				<div class="swiper-slide">Flutter</div>
				<div class="swiper-slide">iOS</div>
				<div class="swiper-slide">Android</div>
				<div class="swiper-slide">QA</div>
				<div class="swiper-slide">Analytics</div>
				<div class="swiper-slide">Design</div>
				<div class="swiper-slide">Backend</div>
				<div class="swiper-slide">Frontend</div>
			</div>
		</div>
	</section>

	<section class="career-video">
		<div class="container">
			<div class="video__wrapper">
				<div class="video">
					<div class="video__link" data-id="VxdkM1yw9B4">
						<img class="video__media" src="<?= THEME . '/assets/img/career/video-poster.jpg'; ?>" loading="lazy" decoding="async" alt="">
						<button class="video__button" aria-label="Запустить видео" title="Запустить видео">
							<img class="video__button-shape" src="<?= THEME . '/assets/img/career/play.svg'; ?>" loading="lazy" decoding="async" alt="">
							<img class="video__button-icon" src="<?= THEME . '/assets/img/career/play-icon.svg'; ?>" loading="lazy" decoding="async" alt="">
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="career-ticker section-72">
		<div class="ticker-slider ticker-slider--green swiper" data-direction="forward" data-speed="12000">
			<div class="swiper-wrapper">
				<div class="swiper-slide">Google Certified Company</div>
				<div class="swiper-slide">Первое Flutter-cообщество в России</div>
				<div class="swiper-slide">Первый банк на Flutter в Европе</div>
			</div>
		</div>
		<div class="ticker-slider ticker-slider--green swiper" data-direction="backward" data-speed="12000">
			<div class="swiper-wrapper">
				<div class="swiper-slide">10 лет в мобильной разработке</div>
				<div class="swiper-slide">170+ специалистов в штате</div>
				<div class="swiper-slide">Топ-1 мобильных разработчиков</div>
			</div>
		</div>
	</section>

	<section class="career-info">
		<div class="container">
			<ul class="career-info__list">
				<li class="career-info__list-item">12 лет работы</li>
				<li class="career-info__list-item">4 офиса в 3 странах мира</li>
				<li class="career-info__list-item">150+ проектов</li>
				<li class="career-info__list-item">250+ сотрудников</li>
				<li class="career-info__list-item">70+ мероприятий в год</li>
			</ul>
		</div>
		<img class="career-info__shape" src="<?= THEME . '/assets/img/career/info-shape.svg'; ?>" loading="lazy" decoding="async" alt="">
	</section>

	<section class="career-advantages section">
		<div class="container">
			<h2 class="career-advantages__title">Почему <br>у нас круто</h2>
			<div class="career-advantages-slider team-slider swiper">
				<div class="swiper-wrapper">
					<div class="swiper-slide team-slider__item team-slide">
						<div class="team-slide__image">
							<img class="team-slide__item" src="<?= THEME . '/assets/img/career/ts-1.jpg'; ?>" loading="lazy" decoding="async" alt="">
							<img class="team-slide__icon" src="<?= THEME . '/assets/img/career/career-slider-circle.svg'; ?>" loading="lazy" decoding="async" alt="">
						</div>
						<div class="team-slide__content">
							<h2 class="team-slide__content-title">Почему у нас круто</h2>
							<div class="team-slide__content-text">
								Развиваемся и растем, независимо от политической ситуации. Наш HQ — в Воронеже. Политики, кризисы и пандемии приходят и уходят. А люди остаются. Хотим жить там, где нам нравится и делать то, что любим.
							</div>
						</div>
					</div>
					<div class="swiper-slide team-slider__item team-slide">
						<div class="team-slide__image">
							<img class="team-slide__item" src="<?= THEME . '/assets/img/career/ts-2.jpg'; ?>" loading="lazy" decoding="async" alt="">
							<img class="team-slide__icon" src="<?= THEME . '/assets/img/career/career-slider-circle.svg'; ?>" loading="lazy" decoding="async" alt="">
						</div>
						<div class="team-slide__content">
							<h2 class="team-slide__content-title">Почему у нас круто</h2>
							<div class="team-slide__content-text">
								Осваиваем технологии машинного обучения и внедряем в мобильные сервисы искусственный интеллект.
							</div>
						</div>
					</div>
					<div class="swiper-slide team-slider__item team-slide">
						<div class="team-slide__image">
							<img class="team-slide__item" src="<?= THEME . '/assets/img/career/ts-3.jpg'; ?>" loading="lazy" decoding="async" alt="">
							<img class="team-slide__icon" src="<?= THEME . '/assets/img/career/career-slider-circle.svg'; ?>" loading="lazy" decoding="async" alt="">
						</div>
						<div class="team-slide__content">
							<h2 class="team-slide__content-title">Почему у нас круто</h2>
							<div class="team-slide__content-text">
								Одними из первых в мире и первыми в стране внедряем передовые технологии Google.
							</div>
						</div>
					</div>
					<div class="swiper-slide team-slider__item team-slide">
						<div class="team-slide__image">
							<img class="team-slide__item" src="<?= THEME . '/assets/img/career/ts-4.jpg'; ?>" loading="lazy" decoding="async" alt="">
							<img class="team-slide__icon" src="<?= THEME . '/assets/img/career/career-slider-circle.svg'; ?>" loading="lazy" decoding="async" alt="">
						</div>
						<div class="team-slide__content">
							<h2 class="team-slide__content-title">Почему у нас круто</h2>
							<div class="team-slide__content-text">
								Одними из первых в мире и первыми в стране внедряем передовые технологии Google.
								Используем продуктовый подход: думаем, проектируем, создаем дизайн, пишем нативный код, контролируем качество, анализируем результаты, улучшаем показатели.
							</div>
						</div>
					</div>
					<div class="swiper-slide team-slider__item team-slide">
						<div class="team-slide__image">
							<img class="team-slide__item" src="<?= THEME . '/assets/img/career/ts-5.jpg'; ?>" loading="lazy" decoding="async" alt="">
							<img class="team-slide__icon" src="<?= THEME . '/assets/img/career/career-slider-circle.svg'; ?>" loading="lazy" decoding="async" alt="">
						</div>
						<div class="team-slide__content">
							<h2 class="team-slide__content-title">Почему у нас круто</h2>
							<div class="team-slide__content-text">
								Не распыляемся. Работаем с технологиями, в которые верим. Как самураи оттачиваем годами свое мастерство.
							</div>
						</div>
					</div>
					<div class="swiper-slide team-slider__item team-slide">
						<div class="team-slide__image">
							<img class="team-slide__item" src="<?= THEME . '/assets/img/career/ts-6.jpg'; ?>" loading="lazy" decoding="async" alt="">
							<img class="team-slide__icon" src="<?= THEME . '/assets/img/career/career-slider-circle.svg'; ?>" loading="lazy" decoding="async" alt="">
						</div>
						<div class="team-slide__content">
							<h2 class="team-slide__content-title">Почему у нас круто</h2>
							<div class="team-slide__content-text">
								Экономически стабильны, со взрослыми процессами, солидным опытом на рынке, репутацией.
							</div>
						</div>
					</div>
				</div>
				<div class="team-slider__controls">
					<div class="swiper-button-prev team-slider__controls-button team-slider__controls-button--prev">
						<svg width="33" height="22" viewBox="0 0 33 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M32.0469 11.1194H1.00142M1.00142 11.1194L8.64716 0.351318M1.00142 11.1194L8.64716 20.9901" stroke="currentColor"/>
						</svg>
					</div>
					<div class="swiper-button-next team-slider__controls-button team-slider__controls-button--next">Ещё
						<svg width="48" height="22" viewBox="0 0 48 22" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M0 11.1194H47.0455M47.0455 11.1194L39.3997 0.351318M47.0455 11.1194L39.3997 20.9901" stroke="currentColor"/>
						</svg>
					</div>
				</div>
				<div class="team-slider__badge">Dream Team</div>
			</div>
		</div>
	</section>

	<section class="career-apps">
		<div class="container">
			<h2 class="career-apps__title">
				Прямо сейчас <span>команда из 250+</span> человек влияет на продукты, которые <span>точно есть</span> в твоем смартфоне:
			</h2>
			<ul class="career-apps__list apps-list">
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/rosbank.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/rigla.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/rivgosh.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/the-hole.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/dodo.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/magnit.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/tricolor.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
				<li class="apps-list__item">
					<a href="#" class="apps-list__link">
						<img src="<?= THEME . '/assets/img/career/kfc.svg'; ?>" loading="lazy" decoding="async" alt="">
					</a>
				</li>
			</ul>
		</div>
	</section>

	<section class="career-about">
		<div class="container">
			<h2 class="career-about__title">За что сёрферы любят свою работу</h2>
			<div class="career-about__slider swiper career-slider">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="career-slider__item">
							<div class="career-slider__item-line">
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/location-2.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
								<div class="career-slider__item-text">Воронеж</div>
							</div>
							<div class="career-slider__item-video">
								<div class="career-slider__item-play">
									<svg width="40" height="40">
										<use xlink:href="<?= THEME . '/assets/img/sprite.svg#play'; ?>"></use>
									</svg>
								</div>
								<video width="100%" height="100%" poster="<?= THEME . '/assets/img/career/poster.jpg'; ?>" playsinline preload="none">
									<source src="<?= THEME . '/assets/img/career/video-about.mp4'; ?>" type="video/mp4">
									<source src="<?= THEME . '/assets/img/career/video-about.webm'; ?>" type="video/webm">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="career-slider__item-line">
								<div class="career-slider__item-text">Ира / Designer</div>
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/smile.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="career-slider__item">
							<div class="career-slider__item-line">
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/location-2.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
								<div class="career-slider__item-text">Ереван</div>
							</div>
							<div class="career-slider__item-video">
								<div class="career-slider__item-play">
									<svg width="40" height="40">
										<use xlink:href="<?= THEME . '/assets/img/sprite.svg#play'; ?>"></use>
									</svg>
								</div>
								<video width="100%" height="100%" poster="<?= THEME . '/assets/img/career/poster.jpg'; ?>" playsinline preload="none">
									<source src="<?= THEME . '/assets/img/career/video-about.mp4'; ?>" type="video/mp4">
									<source src="<?= THEME . '/assets/img/career/video-about.webm'; ?>" type="video/webm">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="career-slider__item-line">
								<div class="career-slider__item-text">Ира / PM</div>
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/smile.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="career-slider__item">
							<div class="career-slider__item-line">
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/location-2.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
								<div class="career-slider__item-text">Санкт-Петербург</div>
							</div>
							<div class="career-slider__item-video">
								<div class="career-slider__item-play">
									<svg width="40" height="40">
										<use xlink:href="<?= THEME . '/assets/img/sprite.svg#play'; ?>"></use>
									</svg>
								</div>
								<video width="100%" height="100%" poster="<?= THEME . '/assets/img/career/poster.jpg'; ?>" playsinline preload="none">
									<source src="<?= THEME . '/assets/img/career/video-about.mp4'; ?>" type="video/mp4">
									<source src="<?= THEME . '/assets/img/career/video-about.webm'; ?>" type="video/webm">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="career-slider__item-line">
								<div class="career-slider__item-text">Ира / Android разработчик</div>
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/smile.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="career-slider__item">
							<div class="career-slider__item-line">
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/location-2.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
								<div class="career-slider__item-text">New York</div>
							</div>
							<div class="career-slider__item-video">
								<div class="career-slider__item-play">
									<svg width="40" height="40">
										<use xlink:href="<?= THEME . '/assets/img/sprite.svg#play'; ?>"></use>
									</svg>
								</div>
								<video width="100%" height="100%" poster="<?= THEME . '/assets/img/career/poster.jpg'; ?>" playsinline preload="none">
									<source src="<?= THEME . '/assets/img/career/video-about.mp4'; ?>" type="video/mp4">
									<source src="<?= THEME . '/assets/img/career/video-about.webm'; ?>" type="video/webm">
									Your browser does not support the video tag.
								</video>
							</div>
							<div class="career-slider__item-line">
								<div class="career-slider__item-text">Ира / iOS разработчик</div>
								<div class="career-slider__item-icon">
									<img src="<?= THEME . '/assets/img/career/smile.svg'; ?>" loading="lazy" decoding="async" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="career-vacancies section">
		<div class="container">
			<h2 class="career-vacancies__title">Открытые вакансии</h2>
			<div class="career-vacancies__grid vacancies">
				<?php foreach ($vacs as $vac) : ?>
					<a href="#" class="vacancies__item vacancy" title="<?= strip_tags($vac['title']); ?>">
						<span class="vacancy__title"><?= $vac['title']; ?></span>
						<span class="vacancy__text"><?= $vac['text']; ?></span>
						<span class="vacancy__more">
							<img src="<?= THEME . '/assets/img/more.svg'; ?>" width="52" height="19" loading="lazy" decoding="async" alt="">
						</span>
						<?php if ($vac['has_badge']) : ?>
							<span class="vacancy__icon vacancy__icon--<?= $vac['position']; ?>">
								<img src="<?= THEME . '/assets/img/career/vac-' . $vac['color'] . '.svg'; ?>" loading="lazy" decoding="async" alt="">
							</span>
						<?php endif; ?>
					</a>
				<?php endforeach; ?>
			</div>
			<a href="#" class="career-vacancies__more">Показать ещё</a>
		</div>
	</section>

	<section class="cta-block">
		<div class="cta-block__bg">
			<img src="<?= THEME . '/assets/img/black-bg.jpeg'; ?>" loading="lazy" decoding="async" alt="">
		</div>
		<div class="container">
			<div class="cta-block__content">
				<h2 class="cta-block__title">Давай к нам. <br>Волн хватит на всех!</h2>
				<a href="/disqus/" class="cta-block__button">ХОЧУ в Surf</a>
			</div>
			<div class="cta-block__image">
				<img src="<?= THEME . '/assets/img/surfman.png'; ?>" loading="lazy" decoding="async" alt="">
			</div>
		</div>
	</section>

<?php
get_footer();