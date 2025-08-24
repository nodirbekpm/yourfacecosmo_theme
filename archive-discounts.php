<?php
get_header();

// Main texts
$discounts__short_description = get_field('discounts__short_description', 'option');
$discounts__description = get_field('discounts__description', 'option');

// Special Offer
$discounts__special_title = get_field('discounts__special_title', 'option');
$discounts__special_text = get_field('discounts__special_text', 'option');

// Discount
$discounts__discount_image = get_field('discounts__discount_image', 'option');
$discounts__discount_percent = get_field('discounts__discount_percent', 'option');
$discounts__discount_text = get_field('discounts__discount_text', 'option');

// Full Special offer
$discounts__full_special_title = get_field('discounts__full_special_title', 'option');
$discounts__full_special_text = get_field('discounts__full_special_text', 'option');
$discounts__full_special_offers = get_field('discounts__full_special_offers', 'option');
$discounts__additional_informations = get_field('discounts__additional_informations', 'option');

?>

    <main>
        <section class="sale-section">
            <div class="container">
                <ul class="breadcrumbs wow fadeInUp">
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <li>»</li>
                    <li><a href="/o-nas">О нас</a></li>
                    <li>»</li>
                </ul>
                <div class="sale-top">
                    <div class="sale-left">
                        <h2 class="sectitle wow fadeInUp">Акции</h2>
                        <div class="subtitle wow fadeInUp"><?php echo apply_filters('the_content', $discounts__short_description); ?></div>
                        <p class="desc wow fadeInUp"><?php echo esc_html($discounts__description); ?></p>
                    </div>
                    <div class="sale-right wow fadeInUp">
                        <div class="sectitle"><?php echo esc_html($discounts__special_title); ?></div>
                        <p class="desc"><?php echo esc_html($discounts__special_text); ?></p>
                        <a href="#" class="btn-main">
                            К спецпредложениям
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                 fill="#FFF"
                                 width="800px" version="1.1" id="Layer_1" viewBox="0 0 512 512" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path
                                                    d="M478.609,99.726H441.34c4.916-7.78,8.16-16.513,9.085-25.749C453.38,44.46,437.835,18,411.37,6.269    c-24.326-10.783-51.663-6.375-71.348,11.479l-47.06,42.65c-9.165-10.024-22.34-16.324-36.962-16.324    c-14.648,0-27.844,6.32-37.011,16.375l-47.12-42.706C152.152-0.111,124.826-4.502,100.511,6.275    C74.053,18.007,58.505,44.476,61.469,73.992c0.927,9.229,4.169,17.958,9.084,25.734H33.391C14.949,99.726,0,114.676,0,133.117    v50.087c0,9.22,7.475,16.696,16.696,16.696h478.609c9.22,0,16.696-7.475,16.696-16.696v-50.087    C512,114.676,497.051,99.726,478.609,99.726z M205.913,94.161v5.565H127.37c-20.752,0-37.084-19.346-31.901-40.952    c2.283-9.515,9.151-17.626,18.034-21.732c12.198-5.638,25.71-3.828,35.955,5.445l56.469,51.182    C205.924,93.834,205.913,93.996,205.913,94.161z M417.294,69.544c-1.244,17.353-16.919,30.184-34.316,30.184h-76.891v-5.565    c0-0.197-0.012-0.392-0.014-0.589c12.792-11.596,40.543-36.748,55.594-50.391c8.554-7.753,20.523-11.372,31.587-8.072    C409.131,39.847,418.455,53.349,417.294,69.544z"/>
                                        </g>
                                    </g>
                                <g>
                                    <g>
                                        <path d="M33.391,233.291v244.87c0,18.442,14.949,33.391,33.391,33.391h155.826V233.291H33.391z"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M289.391,233.291v278.261h155.826c18.442,0,33.391-14.949,33.391-33.391v-244.87H289.391z"/>
                                    </g>
                                </g>
                                </svg>
                        </a>
                    </div>
                </div>
                <div class="sale-wrap">
                    <img src="<?php echo esc_url($discounts__discount_image['url']) ?>" alt="" class="sale-banner-img">
                    <div>
                        <div class="small-title">Акция
                            <span>-<?php echo esc_html($discounts__discount_percent); ?>%</span></div>
                        <p class="desc"><?php echo esc_html($discounts__discount_text); ?></p>
                        <a href="#" class="btn-main btn-small">Участвовать</a>
                    </div>
                </div>
                <div class="sale-grid">
                    <?php
                    $args = array(
                        'post_type' => 'discounts',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC',
                    );

                    $discounts = new WP_Query($args);
                    $i = 1;

                    if ($discounts->have_posts()) :
                        while ($discounts->have_posts()) : $discounts->the_post();
                            $image = get_field('image');        // ACF: Картинка
                            $discount = get_field('discount');     // ACF: Скидка (%) - range
                            $text = get_field('text');         // ACF: Описание
                            $titre = get_field('titre');        // ACF: Доп. текст
                            $price = get_field('price');        // ACF: Цена (оригинальная)

                            // yangi narx hisoblash
                            $new_price = (!empty($price) && $discount > 0)
                                ? round($price - ($price * $discount / 100))
                                : 0;
                            ?>

                            <div class="sale-item wow fadeInUp" data-wow-delay="<?php echo '0.' . $i; ?>s">
                                <div class="sale-item__top">
                                    <?php if (!empty($image)) : ?>
                                        <img src="<?php echo esc_url($image['url']); ?>"
                                             alt="<?php echo esc_attr(get_the_title()); ?>">
                                    <?php endif; ?>

                                    <?php if (!empty($discount)) : ?>
                                        <div class="sale-discount">-<?php echo esc_html($discount); ?>%</div>
                                    <?php endif; ?>
                                </div>

                                <div class="sale-title"><?php the_title(); ?></div>

                                <?php if (!empty($text)) : ?>
                                    <p class="sale-desc">
                                        <?php echo esc_html($text); ?>
                                        <?php if (!empty($titre)) : ?>
                                            <em><?php echo esc_html($titre); ?></em>
                                        <?php endif; ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($price) && $price > 0) : ?>
                                    <div class="sale-price">
                                        Всего
                                        <span><?php echo esc_html($price); ?></span> <?php echo esc_html($new_price); ?>
                                        руб.
                                    </div>
                                <?php endif; ?>

                                <a href="#" class="sale-btn">Записаться</a>
                            </div>

                            <?php
                            $i++;
                        endwhile;
                        wp_reset_postdata();
                    else :
                        echo '<p>Скидки пока отсутствуют.</p>';
                    endif;
                    ?>
                </div>
                <div class="sale-info">
                    <div class="sectitle wow fadeInUp"><?php echo esc_html($discounts__full_special_title); ?></div>
                    <p class="caption wow fadeInUp"><?php echo esc_html($discounts__full_special_text); ?></p>
                    <div class="">
                        <?php
                        $delay = 0.1; // boshlang'ich delay
                        foreach ($discounts__full_special_offers as $offer):
                            ?>
                            <div class="sale-info__item">
                                <p class="sale-info__title wow slideInLeft" data-wow-delay="<?= $delay ?>s">
                                    <strong><?= esc_html($offer['title']); ?></strong>
                                </p>

                                <?php if (!empty($offer['facilities'])): ?>
                                    <ul class="custom-list">
                                        <?php foreach ($offer['facilities'] as $facility):
                                            $delay += 0.1; // har bir facility uchun 0.1 qo‘shamiz
                                            ?>
                                            <li class="wow slideInLeft" data-wow-delay="<?= $delay ?>s">
                                                <?= wpautop($facility['text']); ?>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <?php
                            $delay += 0.1; // item tugagandan keyin keyingi titlega 0.1 qo‘shiladi
                        endforeach;
                        ?>
                        <div class="sale-info__item">
                            <p class="wow slideInLeft" data-wow-delay="1.4s">* акции не суммируются с другими специальными предложениями</p>
                            <p class="wow slideInLeft" data-wow-delay="1.5s">** подробности уточняйте при записи</p>
                            <p class="wow slideInLeft" data-wow-delay="1.6s">*** доп. акции на первое посещение на нашем сайте</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>


<?php
get_footer();
