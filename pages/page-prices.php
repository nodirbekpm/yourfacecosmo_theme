<?php
/*
 * Template name: Цены
 * */
get_header();

$short_description = get_field('short_description');
$description = get_field('description');

?>

    <main>
        <section class="price-section">
            <div class="container">
                <ul class="breadcrumbs wow fadeInUp">
                    <li><a href="#">Главная</a></li>
                    <li>»</li>
                    <li><a href="#">О нас</a></li>
                    <li>»</li>
                </ul>
                <div class="price-section__top">
                    <h1 class="sectitle wow fadeInUp" data-wow-delay="0.1s">Цены</h1>
                    <p class="caption wow fadeInUp" data-wow-delay="0.2s"><?php echo esc_html($short_description); ?></p>
                    <p class="desc wow fadeInUp" data-wow-delay="0.3s"><?php echo esc_html($description); ?></p>
                </div>
                <div class="price-row">
                    <div class="price-left">
                        <?php
                        $args = array(
                            'post_type'      => 'services',
                            'posts_per_page' => -1,
                            'orderby'        => 'menu_order',
                            'order'          => 'ASC',
                        );

                        $services = new WP_Query($args);

                        if ($services->have_posts()): ?>
                            <?php while ($services->have_posts()): $services->the_post(); ?>
                                <div class="price-item">
                                    <div class="block-title">
                                        <?php the_title(); ?>
                                        <?php
                                        $is_new = get_field('is_new', get_the_ID());
                                        if ($is_new && in_array('new', $is_new)) : ?>
                                            <span>new</span>
                                        <?php endif; ?>
                                    </div>

                                    <?php
                                    $prices = get_field('prices', get_the_ID());
                                    if ($prices):
                                        foreach ($prices as $price): ?>
                                            <div class="faq-item">
                                                <div class="faq-head">
                                    <span class="faq-arr">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                            <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                        </svg>
                                    </span>
                                                    <div class="faq-title"><?php echo esc_html($price['title']); ?></div>
                                                </div>
                                                <div class="faq-body">
                                                    <?php if (!empty($price['text'])): ?>
                                                        <p class="desc"><?php echo wp_kses_post($price['text']); ?></p>
                                                    <?php endif; ?>

                                                    <?php if (!empty($price['prices'])): ?>
                                                        <table>
                                                            <tbody>
                                                            <?php foreach ($price['prices'] as $pr): ?>
                                                                <tr>
                                                                    <td><?php echo esc_html($pr['title']); ?></td>
                                                                    <td><?php echo esc_html($pr['price']); ?></td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                            </tbody>
                                                        </table>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        <?php endforeach;
                                    endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p><?php _e('Hozircha xizmatlar mavjud emas', 'your-textdomain'); ?></p>
                        <?php endif;
                        wp_reset_postdata();
                        ?>

                    </div>
                    <div class="price-right">
                        <div class="price-face">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/price-face.jpg" alt="" class="face-img">
                            <div>
                                <div class="nectar_hotspot_wrap">
                                    <div class="nttip">Программы по уходу за лицом <span>от 4500 Р</span></div>
                                    <div class="nectar_hotspot">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"></line>
                                            <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"></line>
                                        </svg>
                                    </div>
                                </div>
                                <div class="nectar_hotspot_wrap">
                                    <div class="nectar_hotspot">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"></line>
                                            <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"></line>
                                        </svg>
                                    </div>
                                    <div class="nttip">Пудровое напыление бровей <span>от 9000 Р</span></div>
                                </div>
                                <div class="nectar_hotspot_wrap">
                                    <div class="nectar_hotspot">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"></line>
                                            <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"></line>
                                        </svg>
                                    </div>
                                    <div class="nttip">Пилинг <span>от 2500 Р</span></div>
                                </div>
                                <div class="nectar_hotspot_wrap">
                                    <div class="nectar_hotspot">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"></line>
                                            <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"></line>
                                        </svg>
                                    </div>
                                    <div class="nttip">Контурная пластика лица <span>от 16500 Р</span></div>
                                </div>
                                <div class="nectar_hotspot_wrap">
                                    <div class="nttip">Лазерная эпиляция рук до локтя <span>от 2500 Р</span></div>
                                    <div class="nectar_hotspot">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                            <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"></line>
                                            <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"></line>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sale">
            <div class="container">
                <div class="section-top">
                    <div class="sale-sectitle wow fadeInLeft">
                        <h2 class="sectitle">Акции</h2>
                        <a href="#" class="all-sale">/ Все акции</a>
                    </div>
                    <div class="sale-swiper__actions">
                        <div class="sale-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.4 17L9 15.0167L3.74286 8.5L9 1.98333L7.4 4.76837e-07L0.542857 8.5L7.4 17Z" fill="#000"/>
                            </svg>
                            <span class="arr-line"></span>
                        </div>
                        <div class="sale-pagination swiper-pagination"></div>
                        <div class="sale-next">
                            <span class="arr-line"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="17" viewBox="0 0 9 17" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6 0L0 1.98333L5.25714 8.5L0 15.0167L1.6 17L8.45714 8.5L1.6 0Z" fill="#000"/>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="sale-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="sale-item wow fadeInUp" data-wow-delay="0.1s">
                                <div class="sale-item__top">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale/sale1.webp" alt="">
                                    <div class="sale-discount">-20%</div>
                                </div>
                                <div class="sale-title">Пилинг Prxt33 / BiorepeelC3 / Peach peel</div>
                                <p class="sale-desc">Разглаживает мелкие морщинки, выравнивает цвет лица, улучшает качество кожи<em>Лицо полностью</em></p>
                                <div class="sale-price">Всего <span>5900</span> 4400 руб.</div>
                                <a href="#" class="sale-btn">Записаться</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sale-item wow fadeInUp" data-wow-delay="0.2s">
                                <div class="sale-item__top">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale/sale2.jpg" alt="">
                                    <div class="sale-discount">-20%</div>
                                </div>
                                <div class="sale-title">Dermadrop</div>
                                <p class="sale-desc">Уникальная технология, которая доставляет гиалуроновую кислоту, витамины и микроэлементы в глубокие слои кожи без инъекций<em>-20% на любую программу</em></p>
                                <div class="sale-price">Всего <span>100</span> 80 руб.</div>
                                <a href="#" class="sale-btn">Записаться</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sale-item wow fadeInUp" data-wow-delay="0.3s">
                                <div class="sale-item__top">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale/sale3.jpg" alt="">
                                    <div class="sale-discount">-20%</div>
                                </div>
                                <div class="sale-title">Лазерная шлифовка</div>
                                <p class="sale-desc">Рубцов и постакне на CO2 лазере Deka SmartXide<em>Лицо полностью - интенсивная шлифовка</em></p>
                                <div class="sale-price">Всего <span>21000</span> 17000 руб.</div>
                                <a href="#" class="sale-btn">Записаться</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sale-item">
                                <div class="sale-item__top">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale/sale4.jpg" alt="">
                                    <div class="sale-discount">-20%</div>
                                </div>
                                <div class="sale-title"> Пилинг Prxt33 / BiorepeelC3 / Peach peel</div>
                                <p class="sale-desc">Разглаживает мелкие морщинки, выравнивает цвет лица, улучшает качество кожи<em>Лицо полностью</em></p>
                                <div class="sale-price">Всего <span>5900</span> 4400 руб.</div>
                                <a href="#" class="sale-btn">Записаться</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sale-item">
                                <div class="sale-item__top">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale/sale5.jpg" alt="">
                                    <div class="sale-discount">-20%</div>
                                </div>
                                <div class="sale-title"> Пилинг Prxt33 / BiorepeelC3 / Peach peel</div>
                                <p class="sale-desc">Разглаживает мелкие морщинки, выравнивает цвет лица, улучшает качество кожи<em>Лицо полностью</em></p>
                                <div class="sale-price">Всего <span>5900</span> 4400 руб.</div>
                                <a href="#" class="sale-btn">Записаться</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sale-item">
                                <div class="sale-item__top">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale/sale6.jpg" alt="">
                                    <div class="sale-discount">-20%</div>
                                </div>
                                <div class="sale-title"> Пилинг Prxt33 / BiorepeelC3 / Peach peel</div>
                                <p class="sale-desc">Разглаживает мелкие морщинки, выравнивает цвет лица, улучшает качество кожи<em>Лицо полностью</em></p>
                                <div class="sale-price">Всего <span>5900</span> 4400 руб.</div>
                                <a href="#" class="sale-btn">Записаться</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="sale-item">
                                <div class="sale-item__top">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sale/sale7.jpg" alt="">
                                    <div class="sale-discount">-20%</div>
                                </div>
                                <div class="sale-title"> Пилинг Prxt33 / BiorepeelC3 / Peach peel</div>
                                <p class="sale-desc">Разглаживает мелкие морщинки, выравнивает цвет лица, улучшает качество кожи<em>Лицо полностью</em></p>
                                <div class="sale-price">Всего <span>5900</span> 4400 руб.</div>
                                <a href="#" class="sale-btn">Записаться</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="equipment">
            <div class="container">
                <div class="section-top">
                    <div class="equipment-sectitle wow fadeInUp">
                        <h2 class="sectitle">Наше оборудование</h2>
                        <p class="desc">Мы используем самое современное оборудование</p>
                    </div>
                </div>
                <div class="equipment-grid">
                    <a href="#" class="equipment-item wow fadeInUp" data-wow-delay="0.1s">
                        <div class="equipment-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/equipment/1.webp" alt="">
                        </div>
                        <div class="equipment-content">
                            <div class="equip-title">Motus AX Deka Moveo</div>
                            <p class="equip-desc">Высокоскоростной александритовый лазер для эпиляции</p>
                        </div>
                    </a>
                    <a href="#" class="equipment-item wow fadeInUp" data-wow-delay="0.2s">
                        <div class="equipment-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/equipment/2.webp" alt="">
                        </div>
                        <div class="equipment-content">
                            <div class="equip-title">Inmode Lumecca</div>
                            <p class="equip-desc">Аппарат для устранения пигментных, сосудистых дефектов</p>
                        </div>
                    </a>
                    <a href="#" class="equipment-item wow fadeInUp" data-wow-delay="0.3s">
                        <div class="equipment-bg">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/equipment/3.webp" alt="">
                        </div>
                        <div class="equipment-content">
                            <div class="equip-title">Lasertech H2</div>
                            <p class="equip-desc">Неодимовый лазер для удаления тату и пигментаций</p>
                        </div>
                    </a>
                </div>
                <a href="#" class="spec-btn wow fadeInUp">
                    Посмотреть всех
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                        <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"></path>
                    </svg>
                </a>
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
                        <a href="#" class="contact-btn">
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

<?php
get_footer();
