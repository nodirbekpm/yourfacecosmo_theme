<?php
get_header();

// Slides (Hero)
$slides = get_field('slides');
?>


    <section class="hero">
        <div class="hero-swiper swiper">
            <div class="swiper-wrapper">
                <?php foreach ($slides as $index => $slide): ?>
                    <div class="swiper-slide hero-item">
                        <img src="<?php echo esc_url($slide['image']['url']); ?>"
                             data-lazy="<?php echo esc_url($slide['image']['url']); ?>" alt=""
                             class="hero-img">
                        <div class="container">
                            <div class="hero-item__title <?php if ($index === 0): ?>wow<?php endif; ?> bounceInUp"><?php echo esc_html($slide['title']); ?></div>
                            <p class="hero-item__desc <?php if ($index === 0): ?>wow<?php endif; ?> bounceInUp"><?php echo esc_html($slide['short_description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="hero-actions">
            <div class="hero-next">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="37" viewBox="0 0 22 37" fill="none">
                    <path d="M2.47663 1.71326L19.212 18.9158L2.00953 35.6512" stroke="#FFF" stroke-width="3"/>
                </svg>
            </div>
            <div class="hero-prev">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="37" viewBox="0 0 22 37" fill="none">
                    <path d="M19.5234 35.2867L2.78796 18.0842L19.9905 1.34883" stroke="#FFF" stroke-width="3"/>
                </svg>
            </div>
            <div class="swiper-pagination hero-pagination"></div>
            <svg class="hero-progress" width="20" height="20">
                <circle r="8" cx="10" cy="10" stroke="#888" stroke-width="3" fill="none"></circle>
                <circle class="circle-origin" r="8" cx="10" cy="10"></circle>
            </svg>
        </div>
    </section>
    <main>
        <section class="advantage">
            <div class="container">
                <div class="advantge_row">
                    <div class="advantage_images wow fadeInUp">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage2.webp" alt="" class="advantage_static">
                        <div class="advatage_sticky">
                            <div class="advatage-sticky__wrap">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage1.webp" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="advantage_right">
                        <h2 class="advantage-sectitle wow fadeInUp">Клиники косметологии экспертного уровня</h2>
                        <p class="desc advantage_desc1 wow fadeInUp" data-wow-delay="0.1s">Наша клиника основана в 2020 году. У нас отличная репутация и уже два филиала клиники в главных городах страны: Москва и Санкт Петербург. Мы работаем с пациентом честно и открыто.</p>
                        <p class="desc advantage_desc2 wow fadeInUp" data-wow-delay="0.2s">Удобное расположение в центре города со своей бесплатной парковкой.</p>
                        <ul class="advantage_options">
                            <li class="wow fadeInRight" data-wow-delay="0.1s"><p class="desc">Все помещения нашей клиники соответствуют СанПиН.</p></li>
                            <li class="wow fadeInRight" data-wow-delay="0.2s"><p class="desc">Мы применяем новейшие аппаратные методики.</p></li>
                            <li class="wow fadeInRight" data-wow-delay="0.3s"><p class="desc">Наше оборудование сертифицировано в РФ, США (FDA), ЕС.</p></li>
                            <li class="wow fadeInRight" data-wow-delay="0.4s"><p class="desc">Наши специалисты сертифицированы и регулярно проходят переподготовку.</p></li>
                            <li class="wow fadeInRight" data-wow-delay="0.5s"><p class="desc">Мы гарантируем строгое соблюдение норм стерильности/асептики и антисептики.</p></li>
                        </ul>
                        <p class="desc wow fadeInUp" data-wow-delay="0.6s">Руководство клиники полностью доверяет свою красоту специалистам и лично контролирует качество услуг и уровень сервиса.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="ceo">
            <div class="container">
                <div class="ceo_row">
                    <div class="ceo_left wow slideInLeft">
                        <p class="desc">Я горжусь тем, что на рынке современной косметологии есть такое качество услуг и высокий сервис как в клиниках YOUR FACE.</p>
                        <p class="desc">Ежедневно я лично проверяю, все ли подготовлено к рабочему дню, начиная от угощений для пациентов и заканчивая внешними видом персонала.</p>
                        <p class="desc">Каждое наше достижение — это результат кропотливого труда и глубоких знаний, которые мы с гордостью применяем в своей практике. Мы уверены, что высокое качество услуг невозможно без передовых аппаратов и лучших препаратов, которые мы используем. Мы нацелены на то, чтобы удовлетворить потребности наших клиентов и превзойти их ожидания, создавая прочные отношения, основанные на доверии и взаимопонимании.</p>
                        <p class="desc">Благодарим вас за выбор нашей клиники. Мы уверены, что вместе мы достигнем новых высот!</p>
                    </div>
                    <div class="ceo_right">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ceo/yana.webp" alt="" class="seo_image wow slideInDown">
                        <p class="ceo_name wow slideInRight" data-wow-delay="0.1s">Макаренко Яна Алексеевна</p>
                        <p class="seo_role wow slideInRight" data-wow-delay="0.1s">Генеральный директор и основатель клиники  <br> YOUR FACE</p>
                        <p class="desc wow slideInRight" data-wow-delay="0.2s">Мы слышим ваши голоса, каждое мнение ценно для нас. Буду рада обратной связи по почте лично со мной по адресу оказанному ниже.</p>
                        <a href="mailto:yourface-cosmo@mail.ru" class="seo_mail wow slideInRight" data-wow-delay="0.2s">yourface-cosmo@mail.ru</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="info">
            <div class="container">
                <h2 class="sectitle wow fadeInUp">В клинике Your Face вы можете:</h2>
                <div class="info-grid">
                    <div class="info-item wow fadeInUp">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info1.webp" alt="">
                        </div>
                        <p class="desc">Доверить свой здоровье и красоту настоящим профессионалам.</p>
                    </div>
                    <div class="info-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info2.webp" alt="">
                        </div>
                        <p class="desc">Почувствовать заботу и уважение к себе в каждой детали.</p>
                    </div>
                    <div class="info-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info3.webp" alt="">
                        </div>
                        <p class="desc">Сохранять 100% приватность ваших процедур и визитов.</p>
                    </div>
                    <div class="info-item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info4.webp" alt="">
                        </div>
                        <p class="desc">Знать, что к вашим услугам лучшие мировые методики.</p>
                    </div>
                    <div class="info-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info5.webp" alt="">
                        </div>
                        <p class="desc">Получить процедуры с применением передовых препаратов и аппаратуры.</p>
                    </div>
                    <div class="info-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info6.webp" alt="">
                        </div>
                        <p class="desc">Пользоваться бесплатной охраняемой парковкой.</p>
                    </div>
                    <div class="info-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info7.webp" alt="">
                        </div>
                        <p class="desc">Выбрать удобный маршрут к клинике по историческому центру города.</p>
                    </div>
                    <div class="info-item wow fadeInUp" data-wow-delay="0.7s">
                        <div class="info-item__img">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/info/info8.webp" alt="">
                        </div>
                        <p class="desc">Получить поддержку, обсуждать важное не затрагивая сокровенное.</p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="call-form__wrap">
                    <form class="call-form wow bounceIn">
                        <div class="call-form__title">Записаться или получить бесплатную консультацию онлайн</div>
                        <p class="desc">Заполните эту форму. Мы свяжемся с вами, чтобы проконсультировать или записать вас на приём.</p>
                        <div class="call-form__row">
                            <label class="call-form__label">
                                <input type="text" placeholder="Ваше имя *" name="name">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <input type="tel" placeholder="Ваш телефон *" name="phone">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <select name="call-type">
                                    <option value=" Позвоните мне"> Позвоните мне</option>
                                    <option value=" Напишите в WhatsApp"> Напишите в WhatsApp</option>
                                    <option value=" Напишите в Telegram"> Напишите в Telegram</option>
                                </select>
                            </label>
                            <button class="call-form__button" type="submit">Отправить</button>
                        </div>
                        <div class="call-form__subtitle">Записаться напрямую через сервис yclients.com</div>
                        <div>
                            <a href="#" class="call-form__link">
                                Записаться на yclients.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                    <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"/>
                                </svg>
                            </a>
                        </div>
                        <label class="call-form__agree">
                            <input type="checkbox">
                            <p>Даю согласие на хранение и обработку персональных данных. <a href="#">Подробнее...</a></p>
                        </label>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/call-form__bg.png" alt="" class="call-form__bg">
                    </form>
                </div>
            </div>
        </section>
        <section class="numbers">
            <div class="container">
                <h2 class="sectitle wow fadeInUp">Клиника в цифрах</h2>
                <p class="desc numbers_desc wow fadeInUp" data-wow-delay="0.1s">Немного статистики работы нашей клиники</p>
                <div class="numbers-grid">
                    <div class="number-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="number-content">2020</div>
                        <p class="number-desc">год основания</p>
                    </div>
                    <div class="number-item wow fadeInUp"  data-wow-delay="0.3s">
                        <div class="number-content">15000<span>+</span></div>
                        <p class="number-desc">пациентов</p>
                    </div>
                    <div class="number-item wow fadeInUp" data-wow-delay="0.4s">
                        <div class="number-content">2</div>
                        <p class="number-desc">филиала в Петербурге и Москве</p>
                    </div>
                    <div class="number-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="number-content">24<span>млн. р.</span></div>
                        <p class="number-desc">примерная стоимость оборудования</p>
                    </div>
                    <div class="number-item wow fadeInUp" data-wow-delay="0.6s">
                        <div class="number-content">30<span>+</span></div>
                        <p class="number-desc">лет суммарного стажа врачей</p>
                    </div>
                    <div class="number-item wow fadeInUp" data-wow-delay="0.7s">
                        <div class="number-content">1500<span>+</span></div>
                        <p class="number-desc">красивых губ сделано с 2020 г.</p>
                    </div>
                </div>
            </div>
        </section>


        <?php get_template_part('template-parts/section/section', 'services'); ?>

        <section>
            <div class="container">
                <div class="call-form__wrap">
                    <form class="call-form wow bounceIn">
                        <div class="call-form__title">Записаться или получить бесплатную консультацию онлайн</div>
                        <p class="desc">Заполните эту форму. Мы свяжемся с вами, чтобы проконсультировать или записать вас на приём.</p>
                        <div class="call-form__row">
                            <label class="call-form__label">
                                <input type="text" placeholder="Ваше имя *" name="name">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <input type="tel" placeholder="Ваш телефон *" name="phone">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <select name="call-type">
                                    <option value=" Позвоните мне"> Позвоните мне</option>
                                    <option value=" Напишите в WhatsApp"> Напишите в WhatsApp</option>
                                    <option value=" Напишите в Telegram"> Напишите в Telegram</option>
                                </select>
                            </label>
                            <button class="call-form__button" type="submit">Отправить</button>
                        </div>
                        <div class="call-form__subtitle">Записаться напрямую через сервис yclients.com</div>
                        <div>
                            <a href="#" class="call-form__link">
                                Записаться на yclients.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                    <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"/>
                                </svg>
                            </a>
                        </div>
                        <label class="call-form__agree">
                            <input type="checkbox">
                            <p>Даю согласие на хранение и обработку персональных данных. <a href="#">Подробнее...</a></p>
                        </label>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/call-form__bg.png" alt="" class="call-form__bg">
                    </form>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'discounts'); ?>


        <?php get_template_part('template-parts/section/section', 'specialists'); ?>

        <?php get_template_part('template-parts/section/section', 'reviews'); ?>

        <?php get_template_part('template-parts/section/section', 'equipments'); ?>


        <section class="license">
            <div class="container">
                <div class="license-row">
                    <div class="license-sectitle wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="sectitle">Лицензии и сертификаты</h2>
                        <p class="desc">Наши документы</p>
                    </div>
                    <div class="license-right">
                        <a href="#" data-fancybox="1" data-src="<?php echo get_template_directory_uri() ?>/assets/img/lic/1.jpg" class="wow fadeInRight" data-wow-delay="0.1">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/lic/1.jpg" alt="">
                        </a>
                        <a href="#" data-fancybox="2" data-src="<?php echo get_template_directory_uri() ?>/assets/img/lic/2.jpg" class="wow fadeInRight" data-wow-delay="0.2s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/lic/2.jpg" alt="">
                        </a>
                        <a href="#" data-fancybox="3" data-src="<?php echo get_template_directory_uri() ?>/assets/img/lic/3.jpg" class="wow fadeInRight" data-wow-delay="0.3s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/lic/3.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="faq">
            <div class="container">
                <div class="section-top">
                    <div class="faq-sectitle wow fadeInUp">
                        <h2 class="sectitle">Вопрос-ответ</h2>
                        <p class="desc">Отвечаем на часто задаваемые вопросы</p>
                    </div>
                </div>
                <div class="faq-grid wow bounceIn" data-wow-delay="0.3s">
                    <div class="faq-item">
                        <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                            <div class="faq-title">Как выбрать лучшего специалиста?</div>
                        </div>
                        <div class="faq-body">
                            <p class="desc">Все наши специалисты лучшие — но каждый работает лишь в своей области. Каждый из них имеет необходимую квалификацию, опыт работы в специальности от 3 лет и сертификаты на отдельные применяемые методики. В общем, выбирать специалиста у нас не нужно по двум причинам: каждый делает свою работу и каждый из них супер-профессионал в своей области. Так что выбирайте не врача, а процедуру!</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                            <div class="faq-title">Безопасны ли процедуры в вашей клинике?</div>
                        </div>
                        <div class="faq-body">
                            <p class="desc">Мы используем самое современное и безопасное оборудование. Приобретаем только оригинальную косметику и препараты, избегая подделок. Стерилизуем или же утилизируем всё оборудование согласно рекомендациям производителя и СанПиН. У нас работают опытные специалисты со стажем не менее 3 лет. Всё это в сумме гарантирует максимальный возможный уровень безопасности процедур в Your Face Clinic.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                            <div class="faq-title">У вас работают только врачи?</div>
                        </div>
                        <div class="faq-body">
                            <p class="desc">Нет! Врачи у нас выполняют лишь процедуры, квалифицируемые как врачебные. Большинство же процедур (пилинг, эпиляция, чистки и т.д.) выполняют косметологи со среднем специальным медицинским образованием.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                            <div class="faq-title">Вы делаете несколько процедур за один раз?</div>
                        </div>
                        <div class="faq-body">
                            <p class="desc">Если такая возможность есть и это не противоречит рекомендациям специалистов — то да. Но это решается индивидуально в каждом отдельном случае.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                            <div class="faq-title">Можно ли приобрести у вас косметику?</div>
                        </div>
                        <div class="faq-body">
                            <p class="desc">Да. Мы представители таких марок как SkinCeuticals, EGIA, Heliocare и других.</p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                            <div class="faq-title">Почему мне стоит выбрать именно вас?</div>
                        </div>
                        <div class="faq-body">
                            <ul>
                                <li><p class="desc">Современное первоклассное оборудование от западных производителей</p></li>
                                <li><p class="desc">Специалисты с опытом от 3 лет и выше. В совокупности наш опыт более 20 лет</p></li>
                                <li><p class="desc">Мы знаем как подчеркнуть вашу красоту без вульгарности</p></li>
                                <li><p class="desc">Большой выбор процедур начиная от классической чистки лица и заканчивая голивудским уходом HydraFacial</p></li>
                                <li><p class="desc">Доступные цены и скидки по клубной карте и акциям месяца</p></li>
                                <li><p class="desc">Безопасность и качество используемой косметики и препаратов</p></li>
                                <li><p class="desc">Высочайший уровень сервиса</p></li>
                                <li><p class="desc">Уютный интерьер и самый вкусный кофе на банановом молоке с собой</p></li>
                                <li><p class="desc">Бесплатная охраняемая парковка для пациентов нашей клиники в самом центре города</p></li>
                            </ul>
                            <p class="desc">В общем, лучше один раз посетить нас, чем сто раз услышать!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="partners">
            <div class="container">
                <h2 class="sectitle wow fadeInUp">Наши партнёры</h2>
                <div class="partnes-swiper swiper">
                    <div class="swiper-wrapper">
                        <a href="#" class="swiper-slide partner-item wow fadeInUp" data-wow-delay="0.1s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/1.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item wow fadeInUp" data-wow-delay="0.2s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/2.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item wow fadeInUp" data-wow-delay="0.3s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/3.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item wow fadeInUp" data-wow-delay="0.4">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/4.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item wow fadeInUp" data-wow-delay="0.5s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/5.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/6.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/7.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/8.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/9.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/10.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/11.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/12.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/13.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/14.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/15.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/16.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/17.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/19.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/20.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/21.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/22.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/23.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/24.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/25.webp" alt="">
                        </a>
                        <a href="#" class="swiper-slide partner-item">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/partners/26.webp" alt="">
                        </a>
                    </div>
                    <div class="swiper-pagination partner-pagination"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="call-form__wrap">
                    <form class="call-form wow bounceIn">
                        <div class="call-form__title">Записаться или получить бесплатную консультацию онлайн</div>
                        <p class="desc">Заполните эту форму. Мы свяжемся с вами, чтобы проконсультировать или записать вас на приём.</p>
                        <div class="call-form__row">
                            <label class="call-form__label">
                                <input type="text" placeholder="Ваше имя *" name="name">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <input type="tel" placeholder="Ваш телефон *" name="phone">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <select name="call-type">
                                    <option value=" Позвоните мне"> Позвоните мне</option>
                                    <option value=" Напишите в WhatsApp"> Напишите в WhatsApp</option>
                                    <option value=" Напишите в Telegram"> Напишите в Telegram</option>
                                </select>
                            </label>
                            <button class="call-form__button" type="submit">Отправить</button>
                        </div>
                        <div class="call-form__subtitle">Записаться напрямую через сервис yclients.com</div>
                        <div>
                            <a href="#" class="call-form__link">
                                Записаться на yclients.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                    <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"/>
                                </svg>
                            </a>
                        </div>
                        <label class="call-form__agree">
                            <input type="checkbox">
                            <p>Даю согласие на хранение и обработку персональных данных. <a href="#">Подробнее...</a></p>
                        </label>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/call-form__bg.png" alt="" class="call-form__bg">
                    </form>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <h2 class="sectitle wow fadeInUp">Косметология в Санкт-Петербурге</h2>
                <div class="w-100">
                    <p class="desc">Клиника YOUR FACE предоставляет услуги аппаратной и эстетической косметологии. У нас современное оборудование и проверенные методики, эффективные процедуры и сертифицированные материалы. Профессионалы своего дела высокой квалификации помогут восстановить красоту и обрести здоровый внешний вид, устранить изъяны, включая шрамы и следы после акне. Наша клиника премиальной косметологии работает в Санкт-Петербурге и ждет всех желающих. </p>
                    <div class="sectitle">Центр косметологии “YOUR FACE” в СПб</div>
                    <p class="desc">Центр косметологии YOUR FACE – это новейшее оборудование, профессиональные косметологи и доступные расценки. Предоставляем широкий спектр услуг, каждый ваш визит к нам будет приятным и расслабляющим, принесет ожидаемый результат. Работаем с соблюдением принципов конфиденциальности – о ваших визитах не узнают посторонние лица. Предлагаем процедуры для устранения первых признаков старения и мимических морщин, восстановление эластичности и упругости кожи, безоперационного омоложения.</p>
                    <p class="desc">Косметология в СПб предлагает экспертные процедуры для восстановления упругости, здоровья и молодого вида кожи. Мы гарантируем индивидуальный подход и авторские программы восстановления, методы терапевтической и аппаратной косметологии, направленные на омоложение, безоперационное удаление рубцов. Среди предлагаемых услуг – лазерная шлифовка, эпиляция безопасными способами, нанесение перманентного макияжа губ, бровей, а также волосистой части головы.</p>
                    <p class="desc">Преимущества нашего центра косметологии: </p>
                    <ul>
                        <li><p class="desc">Консультации у ведущих косметологов Центра, составление персонального плана для решения проблемы. Наши специалисты имеют большой опыт работы, предлагают индивидуальные пути восстановления здоровья и молодости кожи, безболезненного устранения недостатков.</p></li>
                        <li><p class="desc">Используем только сертифицированные препараты и оборудование, эффективность которых доказана. Услуги предоставляют опытные дерматологи, трихологи и косметологи, мы предоставляем комплексный подход к каждому.</p></li>
                        <li><p class="desc">Основной работы является малоинвазивный и неинвазивный подход. Это обеспечивает безопасность для наших клиентов, сокращает восстановительный период и позволяет сразу после посещения клиники вернуться к привычной жизни.</p></li>
                    </ul>
                    <div class="sectitle">Наши услуги в Санкт-Петербурге</div>
                    <p class="desc">Клиника косметологии в Санкт-Петербурге предлагает следующие услуги:</p>
                    <ul>
                        <li><p class="desc">терапевтическое направление, мезотерапия, а также контурная пластика, ботокс;</p></li>
                        <li><p class="desc">аппаратная косметология, различные методы чистки, глубокий пилинг с применением современных препаратов;</p></li>
                        <li><p class="desc">безоперационное удаление рубцов, шлифовка кожи;</p></li>
                        <li><p class="desc">инъекционная косметология;</p></li>
                        <li><p class="desc">ручной, а также аппаратный массаж;</p></li>
                        <li><p class="desc">лазерная эпиляция без боли;</p></li>
                        <li><p class="desc">перманентный макияж и другие.</p></li>
                    </ul>
                    <p class="desc">Наш косметологический центр работает с 2020 года, предоставляя клиентам современные услуги. Клиника отличается удобным расположением в Санкт-Петербурге, наличием филиала в Москве. В работе используем проверенные аппаратные методики, профессиональное сертифицированное оборудование, разрешенное к применению в России и других странах мира. При выполнении процедур соблюдаются установленные правила и санитарно-гигиенические стандарты. Наши косметологи обладают высоким уровнем квалификации и имеют большой опыт работ.</p>
                    <p class="desc">Для записи на прием к специалистам косметологической клиники YOUR FACE оставляйте заявку на сайте или звоните по тел. +7(921)878-40-00. При необходимости наши менеджеры ознакомят вас с расценками и основным перечнем услуг.</p>
                </div>
                <div class="spec-btn wow fadeInUp" id="toggle-drop"><span>ПОДРОБНЕЕ</span><span>СКРЫТЬ</span></div>
            </div>
        </section>
        <svg class="shape-divider" fill="#e1e1e1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">
            <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>
            <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>
            <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>
            <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>
            <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path>
        </svg>
        <section class="contacts">
            <div class="container">
                <div class="partner-block">
                    <div class="partner-title">Наши партнёры</div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/bqt.png" alt="">
                    <p class="partner-desc"><span>Онлайн-магазин цветов</span> La Buquette — это профессиональные флористы, создающие  неповторимые и сложные композиции для самых особенных случаев и самых взыскательных клиентов. Есть доставка.</p>
                    <a href="#" class="partner-btn">
                        На сайт
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                            <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"></path>
                        </svg>
                    </a>
                </div>
                <h2 class="sectitle">Наши контакты</h2>
                <div class="contact-row">
                    <div class="contact-left">
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" id="nectar-svg-animation-instance-0" style="height: 64px; width: 64px;">
                                    <g>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M28,19.001A4,4 0,1,1 36,19.001A4,4 0,1,1 28,19.001" style="stroke-dasharray: 26, 28; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M45,21.023C44.968,13.276,39.181,7,32,7		s-13,6.276-13,14.023C19,31.046,31.979,47,31.979,47S45.043,31.046,45,21.023z" style="stroke-dasharray: 102, 104; stroke-dashoffset: 0;"></path>
                                    </g>
                                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M21,37L12,37L1,57L32,57L63,57L52,37L43,37" style="stroke-dasharray: 126, 128; stroke-dashoffset: 0;"></path>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">Адрес</div>
                                <p class="desc">СПб, Загородный пр., 18/2 (300 м от метро Владимирская, вход с ул. Разъезжая, 2) Время работы: 10:00 — 22:00</p>
                                <p class="desc">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/artwork.svg" alt="">
                                    Бесплатная парковка на закрытой территории (для пропуска на территорию сообщите нам марку и номер машины за сутки до записи)
                                </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" id="nectar-svg-animation-instance-1" style="height: 64px; width: 64px;">
                                    <g>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="32" height="62" d="M16 1 L48 1 L48 63 L16 63 Z" style="stroke-dasharray: 188, 190; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M28,5L36,5" style="stroke-dasharray: 8, 10; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M16,51L48,51" style="stroke-dasharray: 32, 34; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M16,9L48,9" style="stroke-dasharray: 32, 34; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" d="M30,57A2,2 0,1,1 34,57A2,2 0,1,1 30,57" style="stroke-dasharray: 13, 15; stroke-dashoffset: 0;"></path>
                                    </g>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">Телефоны</div>
                                <a href="tel:+79218784000">+7 (921) 878-40-00</a>
                                <a href="tel:+79218783000">+7 (921) 878-30-00</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" id="nectar-svg-animation-instance-2" style="height: 64px; width: 64px;">
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" d="M23,20L30,27L	43,14" style="stroke-dasharray: 29, 31; stroke-dashoffset: 0;"></path>
                                <g>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M1,26L32,45.434L63,26" style="stroke-dasharray: 74, 76; stroke-dashoffset: 0;"></path>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11.333,21.667L1,26L1,63L63,63L63,26L		63,26L52.667,21.667" style="stroke-dasharray: 159, 161; stroke-dashoffset: 0;"></path>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11,32L11,1L53,1L53,32" style="stroke-dasharray: 104, 106; stroke-dashoffset: 0;"></path>
                                </g>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">E-mail</div>
                                <a href="mailto:yourface-cosmo@mail.ru">yourface-cosmo@mail.ru</a>
                            </div>
                        </div>
                        <a href="#" class="contact-btn" data-modal="order-modal">
                            Записаться
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M15.74 3.59283C16.0867 3.24622 16.0867 2.66852 15.74 2.33968L13.6603 0.259964C13.3315 -0.0866546 12.7538 -0.0866546 12.4072 0.259964L10.7718 1.8864L14.1047 5.21927L15.74 3.59283ZM0 12.6671V16H3.33287L13.1626 6.16137L9.82975 2.8285L0 12.6671Z" fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="contact-ratings">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ya-rating.png" alt="" class="ya-rating">
                        <div class="other-ratings">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/2gis.png" alt="">
                                Отзывы на 2gis.ru
                            </a>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/zoon.png" alt="">
                                Отзывы на Zoon
                            </a>
                        </div>
                    </div>
                </div>
                <div class="payment_terms">
                    <div class="payment-title">Обращаем Ваше внимание на информированное согласие на предоплату</div>
                    <p class="desc">Все записи на услуги длительностью более 1 часа осуществляются по предоплате. Это позволяет нам эффективнее планировать рабочий график и избегать недоразумений. При отмене записи в день визита более двух раз подряд дальнейшая запись возможна только по полной предоплате путём внесения депозита, который равен сумме забронированной услуги. Внесённый депозит при оказании услуги зачитывается в стоимость оказанной услуги. В случае отмены записи в день визита депозит не возвращается.</p>
                    <a href="#" class="payment-btn">
                        ПОДРОБНЕЕ
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.17496 4.60711L4.687 2.97778H4.68538C4.59305 2.87677 4.5782 2.74163 4.64702 2.6287C4.71583 2.51578 4.8565 2.44444 5.01038 2.44444H5.55204C5.62683 2.44444 5.68746 2.3947 5.68746 2.33333V0.666666C5.68746 0.298477 6.05123 0 6.49996 0C6.94869 0 7.31246 0.298477 7.31246 0.666666V2.33333C7.31246 2.36303 7.32695 2.3915 7.3527 2.41237C7.37844 2.43325 7.41331 2.4448 7.4495 2.44444H7.99117C8.14523 2.4441 8.28623 2.51539 8.35513 2.62846C8.42403 2.74152 8.40894 2.87685 8.31617 2.97778L6.82496 4.60711C6.74824 4.69104 6.62783 4.74044 6.49996 4.74044C6.37209 4.74044 6.25168 4.69104 6.17496 4.60711ZM11.3306 4.01146L12.9372 6.45591C12.9754 6.52189 12.9967 6.59358 13 6.66657V9.33324C13 9.70143 12.6362 9.9999 12.1875 9.9999H0.8125C0.363769 9.9999 0 9.70143 0 9.33324V6.66657C0.00624283 6.5935 0.0286351 6.52196 0.0660833 6.45546L1.65858 4.01102C1.83507 3.73339 2.18373 3.55823 2.56533 3.55546H3.52083C3.81999 3.55546 4.0625 3.75445 4.0625 3.99991C4.0625 4.24537 3.81999 4.44435 3.52083 4.44435H2.6455C2.59522 4.44443 2.54912 4.46736 2.52579 4.50391L1.39696 6.28168C1.37499 6.3161 1.37652 6.35742 1.40099 6.39067C1.42546 6.42393 1.46932 6.44428 1.51667 6.44435H3.52083C3.96956 6.44435 4.33333 6.74283 4.33333 7.11102C4.33333 7.47921 4.6971 7.77768 5.14583 7.77768H7.85417C8.3029 7.77768 8.66667 7.47921 8.66667 7.11102C8.66667 6.93421 8.75227 6.76464 8.90464 6.63961C9.05702 6.51459 9.26368 6.44435 9.47917 6.44435H11.4714C11.5191 6.44437 11.5634 6.42378 11.5878 6.39014C11.6122 6.3565 11.6133 6.31479 11.5906 6.28035L10.4157 4.50257C10.392 4.46668 10.3463 4.44433 10.2965 4.44435H9.20833C8.90918 4.44435 8.66667 4.24537 8.66667 3.99991C8.66667 3.75445 8.90918 3.55546 9.20833 3.55546H10.4217C10.8039 3.55835 11.1532 3.73359 11.3306 4.01146Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <div class="newpages">
                    <a href="#">Hydrafacial</a>
                    <a href="#">Антицеллюлитный массаж</a>
                    <a href="#">Биоревитализация</a>
                    <a href="#">Ботулинотерапия</a>
                    <a href="#">Контурная пластика</a>
                    <a href="#">Лазерный карбоновый пилинг</a>
                    <a href="#">Лечение пигментации на лице</a>
                    <a href="#">Лечение постакне</a>
                    <a href="#">Лечение растяжек на коже</a>
                    <a href="#">Мезотерапия</a>
                    <a href="#">Плазмотерапия</a>
                    <a href="#">РФ-лифтинг</a>
                    <a href="#">Увеличение губ</a>
                    <a href="#">Удаление пигментации лазером</a>
                    <a href="#">Удаление родинок</a>
                    <a href="#">Удаление сосудов на лице</a>
                    <a href="#">Фотоомоложение лица</a>
                    <a href="#">Чистка лица</a>
                    <a href="#">Шлифовка кожи</a>
                </div>
                <p class="desc">Не является публичной офертой (п. 2 ст. 437 ГК РФ).</p>
                <p class="desc">Имеются противопоказания. Проконсультируйтесь со специалистом.</p>
            </div>
        </section>
    </main>


    <div class="modal-back"></div>
    <div class="order-modal">
        <div class="order-modal__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
                <path d="M14 1.41L12.59 0L7 5.59L1.41 0L0 1.41L5.59 7L0 12.59L1.41 14L7 8.41L12.59 14L14 12.59L8.41 7L14 1.41Z" fill="white"/>
            </svg>
        </div>
        <form class="call-form">
            <div class="call-form__title">Записаться по акции Пилинг Prxt33 / BiorepeelC3 / Peach peel</div>
            <p class="desc">Заполните форму и мы с вами свяжемся в ближайшее время.</p>
            <div class="call-form__row">
                <label class="call-form__label">
                    <input type="text" placeholder="Ваше имя *" name="name">
                    <p class="call-form__error">Это обязательное поле.</p>
                </label>
                <label class="call-form__label">
                    <input type="tel" placeholder="Ваш телефон *" name="phone">
                    <p class="call-form__error">Это обязательное поле.</p>
                </label>
                <button class="call-form__button" type="submit">Отправить</button>
            </div>
            <div class="call-form__subtitle">Записаться напрямую через сервис yclients.com</div>
            <div>
                <a href="#" class="call-form__link">
                    Записаться на yclients.com
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                        <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"/>
                    </svg>
                </a>
            </div>
            <label class="call-form__agree">
                <input type="checkbox">
                <p>Даю согласие на хранение и обработку персональных данных. <a href="#">Подробнее...</a></p>
            </label>
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/call-form__bg.png" alt="" class="call-form__bg">
        </form>
    </div>

<?php
get_footer();