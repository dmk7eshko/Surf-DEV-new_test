<?php
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

<section class="contact" id="contact-section" style="background-color: #1A1A1A; color: #ffffff;">
    <div class="container">
        <div class="contact__inner">
            <div class="contact__info">
                <div class="contact__text">
                    <p class="contact__title"><?= $title; ?></p>
                    <span class="contact__subtitle"><?= $subtitle; ?></span>
                </div>
                <?php if ($person) : ?>
                    <div class="contact__image">
                        <?= wp_get_attachment_image($person['photo'], 'full'); ?>
                        <?php if ($person['info']) : ?>
                            <div class="contact__person">
                                <p class="contact__person-name"><?= $person['info']['name']; ?></p>
                                <span class="contact__person-position"><?= $person['info']['position']; ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <?php if ($phone) : ?>
                    <div class="contact__phone mobile-hidden">
                        <a href="tel:<?= $phone_link; ?>"><?= $phone; ?></a>
                    </div>
                <?php endif; ?>
            </div>
            <div class="contact__form">
                <!-- templates/en/discuss-form -->
                <form id="contact" enctype="multipart/form-data" method="post" target="messages">
					<div class="contacts-wrap">
                        <p class="contact__title contact__title-hide">Let's develop your banking app!</p>
                        <input type="hidden" name="reffer" id="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                        <div class="contact-form-input">
                            <input type="text" id="company" autocomplete="off" name="company" required>
                            <label for="company">Company*</label>
                        </div>
                        <div class="contact-form-input">
                            <input type="text" id="name" autocomplete="off" name="name">
                            <label for="name" data-text="Your name*" data-error="Invalid format">Your name*</label>
                        </div>
                        <div class="contact-form-input contact-full">
                            <input type="email" id="email" autocomplete="off" name="email">
                            <label for="email" data-text="Email*" data-error="Invalid format">Email*</label>
                        </div>
                        <div class="contact-form-input contact-full">
                            <textarea id="msg" rows="1" autocomplete="off" name="msg"></textarea>
                            <label for="msg" data-text="Project detail*" data-error="Required field">Project detail*</label>
                        </div>
                        <div class="contact-form-input contact-full contact-form__upload">
                            <div class="contact-form__upload-title">
                                <img src="<?= THEME . '/assets/img/attachment-white.svg' ?>" alt="">
                                <span class="mobile-hidden">Drop a file here or click to upload</span>
                                <span class="desktop-hidden">Attach file</span>
                            </div>
                           <input type="file" id="files" name="files[]" multiple="multiple" hidden>
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
                        <div class="contact-form-input-checkbox contact-form-input-checkbox--white contact-full">
                            <input checked type="checkbox" id="confirm" name="confirm">
                            <label for="confirm">Accept the <a target="_blank" href="<?= $privacy; ?>">privacy policy</a></label>
                        </div>
                        <div class="contact-form-btns__wrap">
                            <button id="send" class="sendform sendform--white" type="submit"><?php echo $btn_text?></button>
                            <a class="btn btn-default btn-large th-btn-gray auto-popup" href="#" style="display:none" data-fancybox-close="data-fancybox-close">Continue reading </a>
                        </div>
                        <input type="hidden" id="clientID" name="clientID">
                        <input type="hidden" id="clientIDYA" name="clientIDYA">
                    </div>
                </form>
                <?php if ($phone) : ?>
                    <div class="contact__phone desktop-hidden">
                        <a href="tel:<?= $phone_link; ?>"><?= $phone; ?></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>