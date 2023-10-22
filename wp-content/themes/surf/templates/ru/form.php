<form id="contact" class="conts">
<h2>Заказать услугу</h2>
<p>Ответим в течение рабочего дня. Назовем стоимость работ после того, как узнаем больше о вашей задаче</p>

            <div class="contact-form m58"> 
                    <div class="contact-form-left">
                    <input type="hidden" name="reffer" value="<?php the_permalink(); ?>">
                    </div>
                    <div class="contact-form-right">
                        <div class="contact-form-input">
                            <input type="text" id="company" required autocomplete="off" name="company">
                            <label for="company">Компания</label>
                        </div>
                        <div class="contact-form-input">
                            <input type="text" id="name" autocomplete="off"  name="name">
                            <label for="name">Имя</label>
                        </div>
                        <div class="contact-form-input">
                            <input type="text" id="phone" autocomplete="off"  name="phone">
                            <label for="phone">Телефон</label>
                        </div>
                        <div class="contact-form-input">
                            <input type="email" id="email" autocomplete="off"  name="email">
                            <label for="email">Почта</label>
                        </div>
                        <div class="contact-form-input contact-full">
                            <textarea id="msg" autocomplete="off"  name="msg" required></textarea>
                            <label for="msg">Расскажите о задаче</label>
                        </div>
                        <div class="contact-form-input-checkbox">
                            <input checked type="checkbox" id="confirm" name="confirm">
                            <label for="confirm">Согласен с <a target="_blank" href="https://storage.googleapis.com/surf-site-mediastore/media/education-docs/privacy.pdf">политикой конфиденциальности</a></label>
                        </div>
                    </div>
                </div> 


                <div class="contact-form"> 
                    <div class="contact-form-left">
                        <a href="mailto:hello@surfstudio.ru" class="contact-email">
                            hello@surfstudio.ru
                        </a>
                        <a href="tel:+78006002794" class="contact-phone">
                            8 800 600 27 94
                        </a>
                    </div>
                    <div class="contact-form-right">
                        
                        <button id="send" type="submit">Отправить</button>
                    </div>
                </div> 
                <input type="hidden" id="clientID" name="clientID">
                <input type="hidden" id="clientIDYA" name="clientIDYA">
            </form>