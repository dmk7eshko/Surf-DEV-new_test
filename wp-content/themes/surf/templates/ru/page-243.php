<?php
	/**
	 * Шаблон https://surf.ru/discuss/
	 * @package WordPress
	 * @subpackage Surf.ru
	 */

    $discuss    = get_field( 'discuss', 'option' );
    $title      = $discuss['title'] ?: 'Расскажите о вашем проекте';
    $subtitle   = $discuss['subtitle'] ?: 'Заполните форму и мы ответим вам в течение рабочего дня';
    $email      = $discuss['email'] ?: 'hello@surfstudio.ru';
    $phone      = $discuss['phone'] ?: '8 800 600 27 94';
    $phone_link = substr_replace( preg_replace( "/[^0-9]/", '', $phone ), '+7', 0, 1 );
    $privacy    = $discuss['privacy'] ?: 'https://storage.googleapis.com/surf-site-mediastore/media/education-docs/privacy.pdf';

	get_header();
?>

    <section class="single-page ">
        <div class="container">
            <?php if ( have_posts() ) :
                while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <form id="contact" class="" enctype="multipart/form-data" data-type="discuss">
                            <input type="hidden" name="reffer" id="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                            <div class="contact-form m58">
                                <div class="contact-form-left">
                                    <span><?= $title; ?></span>
                                    <div class="contact-form-title"><?= $subtitle; ?></div>
                                </div>
                                <div class="contact-form-right">
                                    <div class="contact-form-input">
                                        <input type="text" id="company" required autocomplete="off" name="company">
                                        <label for="company">Компания</label>
                                    </div>

                                    <div class="contact-form-input">
                                        <input type="text" id="name" required autocomplete="off" name="name">
                                        <label for="name">Имя</label>
                                    </div>

                                    <div class="contact-form-input">
                                        <input type="text" id="phone" required autocomplete="off" name="phone">
                                        <label for="phone">Телефон</label>
                                    </div>

                                    <div class="contact-form-input">
                                        <input type="email" id="email" required autocomplete="off" name="email">
                                        <label for="email">Почта</label>
                                    </div>

                                    <div class="contact-form-input contact-full">
                                        <textarea id="msg" rows="1" autocomplete="off" name="msg" required></textarea>
                                        <label for="msg">Расскажите о задаче</label>
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
                                            Согласен с <a target="_blank" href="<?= $privacy; ?>">политикой конфиденциальности</a>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form">
                                <div class="contact-form-left">
                                    <a href="mailto:<?= $email; ?>" class="contact-email"><?= $email; ?></a>
                                    <!--									<a href="tel:<?= $phone_link; ?>" class="contact-phone"><?= $phone; ?></a>-->
                                </div>
                                <div class="contact-form-right">
                                    <button class="sendform" type="submit">Отправить</button>
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



<?php get_footer();