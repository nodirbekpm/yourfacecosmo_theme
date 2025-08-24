<?php
/*
 * Template name: О нас
 * */
get_header();
?>

    <main>
        <section class="about-section">
            <div class="container">
                <ul class="breadcrumbs wow fadeInUp">
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <li>»</li>
                    <li><a href="/o-nas">О нас</a></li>
                    <li>»</li>
                </ul>
                <h2 class="sectitle wow fadeInUp">Клинка премиальной косметологии и SPA</h2>
                <div class="caption wow fadeInUp">Мы без ума от своей работы</div>
                <div class="about-row">
                    <div class="about-left">
                        <ul class="custom-list">
                            <li><p>лазерная эпиляция (александритовая) MOVEO AX;</p></li>
                            <li><p>перманентный макияж;</p></li>
                            <li><p>лазерное удаление тату и татуажа;</p></li>
                            <li><p>инъекционная косметология, терапевтическая косметология, массаж лица;</p></li>
                            <li><p>фотоомоложение LUMECCA;</p></li>
                            <li><p>лазерное лечение сосудов и акне;</p></li>
                            <li><p>RF лифтинг лица и тела MORPHEUS8;</p></li>
                            <li><p>RF шлифовка кожи лица/шрамов и растяжек MORPHEUS8;</p></li>
                            <li><p>вакуумный гидропилинг HydraFacial;</p></li>
                            <li><p>микротоковая терапия;</p></li>
                            <li><p>СПА программы по уходу за телом Sultan De Saba и др.;</p></li>
                            <li><p>ручные массажи, обертывания;</p></li>
                            <li><p>аппаратный массаж RSL.</p></li>
                        </ul>
                        <a href="#" class="btn-main btn-small">
                            Записаться
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                                <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"></path>
                            </svg>
                        </a>
                    </div>
                    <div class="about-right">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo/logo.png" alt="">
                    </div>
                </div>
                <div class="sectitle wow fadeInUp">Наши преимущества</div>
                <div class="caption wow fadeInUp">Почему клиенты выбирают нас?</div>
                <div class="about-info__grid">
                    <div class="about-info__item">
                        <div class="about-info__inner">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage3.webp" alt="">
                            <div>
                                <div class="advantage-sectitle">Страсть к деталям</div>
                                <p class="desc">Мы выбираем только качественное европейское оборудование и материалы. Вы можете быть уверены, мы всегда и все делаем на совесть, даже когда никто не смотрит.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-info__item">
                        <div class="about-info__inner">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage4.webp" alt="">
                            <div>
                                <div class="advantage-sectitle">Непрерывное развитие</div>
                                <p class="desc">Мы постоянно совершенствуем свои навыки и умения в сфере красоты. Новые техники и знания позволяют нам поддерживать уровень возвращаемости клиентов на высокой планке 97%.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-info__item">
                        <div class="about-info__inner">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage5.webp" alt="">
                            <div>
                                <div class="advantage-sectitle">Лучшее оборудование</div>
                                <p class="desc">В своей работе мы используем оборудование только премиального класса — например, итальянские аппараты Motus AX с александритовым лазером Moveo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-info__item">
                        <div class="about-info__inner">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage6.webp" alt="">
                            <div>
                                <div class="advantage-sectitle">Медицинская лицензия</div>
                                <p class="desc">Мы — лицензированная медицинская организация. Мы прошли все проверки Роспотребнадзора, Комздрава и соответствуем всем требованиям СанПиН.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-info__item">
                        <div class="about-info__inner">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage7.webp" alt="">
                            <div>
                                <div class="advantage-sectitle">Оптимальные цены</div>
                                <p class="desc">Приобретая нашу карту лояльности, вы получаете скидку до 70% на услуги клиники.</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-info__item">
                        <div class="about-info__inner">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/advantage/advantage8.webp" alt="">
                            <div>
                                <div class="advantage-sectitle">Потрясающая команда</div>
                                <p class="desc">Мы собрали и обучили не просто команду косметологов, а настоящих талантов и фанатов своего дела.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'reviews'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>



<?php
get_footer();
