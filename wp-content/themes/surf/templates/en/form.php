<!-- template/en/form -->
<form id="contact" class="">
    <input type="hidden" name="reffer" value="<?php echo $_SERVER['HTTP_REFERER'] ?>">
    <div class="contact-form m58">
        <div class="contact-form-left">
            <div class="contact-form-title">Fill the form and get an estimate of your project</div>
        </div>
        <div class="contact-form-right">
            <div class="contact-form-input">
                <input type="text" id="name" autocomplete="off" name="name">
                <label for="name">Your name</label>
            </div>
            <div class="contact-form-input">
                <input type="text" id="phone" autocomplete="off" name="phone">
                <label for="phone">Phone number</label>
            </div>
            <div class="contact-form-input">
                <input type="email" id="email" autocomplete="off" name="email">
                <label for="email">Email</label>
            </div>
            <div class="contact-form-input">
                <textarea type="text" id="msg" autocomplete="off" name="msg"></textarea>
                <label for="msg">Project detail</label>
            </div>
            <div class="contact-form-input-checkbox">
                <input checked type="checkbox" id="confirm" name="confirm">
                <label for="confirm">By sending this form I confirm that I have read and accept the с
                    <a target="_blank" href="https://storage.googleapis.com/surf-site-mediastore/media/education-docs/privacy.pdf">Privacy Policy</a>
                </label>
            </div>
        </div>
    </div>
    <div class="contact-form">
        <div class="contact-form-left">
            <a href="mailto:hello@surf.dev" class="contact-email">
                hello@surf.dev
            </a>
            <a href="tel:+19177281789" class="contact-phone">
                +1 917 728 1789
            </a>
        </div>
        <div class="contact-form-right">
            <button id="send" type="submit">Estimate</button>
        </div>
    </div>
</form>