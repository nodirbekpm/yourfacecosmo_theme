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
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <li>»</li>
                    <li><a href="/o-nas">О нас</a></li>
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

        <?php get_template_part('template-parts/section/section', 'equipments'); ?>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>

<?php
get_footer();
