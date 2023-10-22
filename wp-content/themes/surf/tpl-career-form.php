<?php
    /**
     * Template Name: Career form
     *
     */
    get_header();

	$discuss    = get_field( 'discuss_career', 'option' );
	$title      = $discuss['title'] ?: 'Присоединяйся<br> к команде Surf';
	$subtitle   = $discuss['subtitle'] ?: 'Просто отправь резюме и мы ответим в течение рабочего дня';
	$email      = $discuss['email'] ?: 'job@surfstudio.ru';
	$phone      = $discuss['phone'] ?: '8 800 600 27 94';
	$phone_link = substr_replace( preg_replace( "/[^0-9]/", '', $phone ), '+7', 0, 1 );
	$privacy    = $discuss['privacy'] ?: 'https://storage.googleapis.com/surf-site-mediastore/media/education-docs/privacy.pdf';
?>

    <section class="single-page contact">
        <div class="container">
            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <form id="contact" class="" enctype="multipart/form-data">
                            <input type="hidden" name="reffer" id="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                            <div class="contact-form">
                                <div class="contact-form-left">
	                                <span><?= $title; ?></span>
	                                <div class="contact-form-title"><?= $subtitle; ?></div>
	                                <div class="contact-form-email mobile-hidden" style="margin-top: 20px;">
		                                <a href="mailto:<?= $email; ?>" class="contact-email"><?= $email; ?></a>
	                                </div>
	                                <div class="contact-form-image">
		                                <img src="<?= THEME . '/assets/img/form-image.png'; ?>" loading="eager" decoding="async" alt="">
	                                </div>
                                </div>
                                <div class="contact-form-right">
                                    <div class="contact-form-input">
                                        <input type="text" id="name" required autocomplete="off" name="name">
                                        <label for="name">Имя</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="text" id="surname" autocomplete="off" name="surname">
                                        <label for="surname">Фамилия</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="email" id="email" required autocomplete="off" name="email">
                                        <label for="email">Почта</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="text" id="phone" required autocomplete="off" name="phone">
                                        <label for="phone">Телефон</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="text" id="position" required autocomplete="off" name="position">
                                        <label for="position">Должность</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="text" id="source" autocomplete="off" name="source">
                                        <label for="source">Откуда о нас узнали?</label>
                                    </div>
                                    <div class="contact-form-input contact-full">
                                        <textarea type="text" id="msg" rows="1" autocomplete="off" name="msg"></textarea>
                                        <label for="msg">Пара слов о себе</label>
                                    </div>

                                    <div class="contact-form-input contact-full contact-form__upload">
                                        <div class="contact-form__upload-title">
                                            <img src="<?= THEME . '/assets/img/attachment.svg' ?>" alt="">
                                            Прикрепить файл
                                        </div>
                                        <input type="file" id="files" name="files[]" multiple hidden>
                                        <div class="contact-form__upload-content">
                                            <div class="contact-form__upload-result">
                                                <span class="contact-form__upload-filename"></span>
                                            </div>
                                            <div class="contact-form__upload-files">
                                                <button type="button" class="contact-form__upload-counter"></button>
                                            </div>
                                            <ul class="contact-form__upload-list"></ul>
                                        </div>
                                    </div>

                                    <div class="contact-form-input-checkbox">
                                        <input checked type="checkbox" id="confirm" name="confirm">
                                        <label for="confirm">
                                            Согласен с <a target="_blank" href="https://surf.ru/privacy/">политикой конфиденциальности</a>
                                        </label>
                                    </div>

	                                <button class="sendform sendform--blue" type="submit">Отправить</button>
                                </div>
                            </div>
                            <input type="hidden" id="clientID" name="clientID">
                            <input type="hidden" id="clientIDYA" name="clientIDYA">
                        </form>
                    </article>
                <?php endwhile;
            endif; ?>
        </div>
    </section>

<?php
    get_footer();