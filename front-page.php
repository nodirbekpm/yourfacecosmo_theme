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

        <?php get_template_part('template-parts/section/section', 'form'); ?>

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

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'discounts'); ?>


        <?php get_template_part('template-parts/section/section', 'specialists'); ?>

        <?php get_template_part('template-parts/section/section', 'reviews'); ?>

        <?php get_template_part('template-parts/section/section', 'equipments'); ?>

        <?php get_template_part('template-parts/section/section', 'licenses'); ?>

        <?php get_template_part('template-parts/section/section', 'faqs'); ?>

        <?php get_template_part('template-parts/section/section', 'partners'); ?>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

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

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>

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