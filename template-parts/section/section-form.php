<section>
    <div class="container">
        <div class="call-form__wrap">
            <div class="call-form wow bounceIn">
                <div class="call-form__title">Записаться или получить бесплатную консультацию онлайн</div>
                <p class="desc">Заполните эту форму. Мы свяжемся с вами, чтобы проконсультировать или записать вас на приём.</p>
                <?php
                echo do_shortcode('[contact-form-7 id="5c0b691" title="Записаться или получить бесплатную консультацию онлайн"]');
                ?>

                <div class="call-form__subtitle">Записаться напрямую через сервис yclients.com</div>
                <div>
                    <a href="https://n968323.yclients.com/company/708242/personal/menu?o=" class="call-form__link">
                        Записаться на yclients.com
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                            <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"/>
                        </svg>
                    </a>
                </div>
                <label class="call-form__agree">
                    <input type="checkbox" checked>
                    <p>Даю согласие на хранение и обработку персональных данных. <a href="#">Подробнее...</a></p>
                </label>
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/call-form__bg.png" alt="" class="call-form__bg">
            </div>
        </div>
    </div>
</section>