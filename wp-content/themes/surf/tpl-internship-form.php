<?php
    /**
     * Template Name: Internship form
     */

    $discuss    = get_field( 'discuss_career', 'option' );
    $title      = $discuss['title'] ?: 'Присоединяйся<br> к команде Surf';
    $subtitle   = $discuss['subtitle'] ?: 'Просто отправь резюме и мы ответим в течение рабочего дня';
    $email      = $discuss['email'] ?: 'job@surfstudio.ru';
    $phone      = $discuss['phone'] ?: '8 800 600 27 94';
    $phone_link = substr_replace( preg_replace( "/[^0-9]/", '', $phone ), '+7', 0, 1 );
    $privacy    = $discuss['privacy'] ?: 'https://storage.googleapis.com/surf-site-mediastore/media/education-docs/privacy.pdf';

    get_header();
?>

    <section class="single-page ">
        <div class="container">
            <?php if ( have_posts() ) {
                while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <form id="contact" class="" enctype="multipart/form-data" data-type="career">
                            <input type="hidden" name="reffer" id="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                            <div class="contact-form m58">
                                <div class="contact-form-left">
                                    <span><?= $title; ?></span>
                                    <div class="contact-form-title"><?= $subtitle; ?></div>
                                    <div class="contact-form-left mobile-hidden" style="margin-top: 64px;">
                                        <a href="mailto:<?= $email; ?>" class="contact-email"><?= $email; ?></a>
                                        <a href="tel:<?= $phone_link; ?>" class="contact-phone"><?= $phone; ?></a>
                                    </div>
                                </div>
                                <div class="contact-form-right">
                                    <div class="contact-form-input">
                                        <input type="text" id="name" autocomplete="off" name="name" required>
                                        <label for="name" data-text="Имя*" data-error="Неверный формат">Имя*</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="text" id="surname" autocomplete="off" name="surname" required>
                                        <label for="surname" data-text="Фамилия*" data-error="Неверный формат">Фамилия*</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="email" id="email" autocomplete="off" name="email" required>
                                        <label for="email" data-text="Почта*" data-error="Неверный формат">Почта*</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="text" id="phone" minlength="10" required autocomplete="off" name="phone">
                                        <label for="phone" data-text="Телефон*" data-error="Неверный формат">Телефон*</label>
                                    </div>
                                    <div class="contact-form-input">
                                        <div class="custom-select">
                                            <select name="course" id="course" data-label="Направление стажировки*" required>
                                                <option value="qa">QA</option>
                                                <option value="android">Android-разработка</option>
                                                <option value="flutter">Flutter-разработка</option>
                                                <option value="ios">iOS-разработка</option>
                                                <option value="analytics">Аналитика</option>
                                                <option value="projects">Управление проектами</option>
                                                <option value="another">Другое направление</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="contact-form-input">
                                        <input type="text" id="source" autocomplete="off" name="source" placeholder="Откуда о нас узнали?">
                                    </div>
                                    <div class="contact-form-input contact-full">
                                        <textarea type="text" id="msg" rows="1" autocomplete="off" name="msg"></textarea>
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
                                        <input checked type="checkbox" id="confirm" name="confirm" required>
                                        <label for="confirm">Согласен с <a target="_blank" href="<?= $privacy; ?>">политикой конфиденциальности</a></label>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-form">
                                <div class="contact-form-right">
                                    <button id="send" class="sendform" type="submit">Отправить</button>
                                </div>
                                <div class="contact-form-left desktop-hidden">
                                    <a href="mailto:<?= $email; ?>" class="contact-email"><?= $email; ?></a>
                                    <a href="tel:<?= $phone_link; ?>" class="contact-phone"><?= $phone; ?></a>
                                </div>
                            </div>
                            <input type="hidden" id="clientID" name="clientID">
                            <input type="hidden" id="clientIDYA" name="clientIDYA">
                        </form>
                    </article>
                <?php endwhile;
            } ?>
        </div>
    </section>

<?php get_footer();