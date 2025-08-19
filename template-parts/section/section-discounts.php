<?php

/**
 * Section: Discounts
 * Universal section for rendering all discounts as swiper slides
 */

$args = [
    'post_type'      => 'discounts',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'ASC',
];

$discounts = new WP_Query($args);
$i = 1;

if ($discounts->have_posts()) :  ?>
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
                <?php while ($discounts->have_posts()) : $discounts->the_post();

                    // ACF: exact field names you asked for
                    $image    = get_field('image');     // array (url, alt, ...)
                    $discount = get_field('discount');  // percent (int/range)
                    $text     = get_field('text');      // string
                    $titre    = get_field('titre');     // string (extra/em)
                    $price    = get_field('price');     // original price (number)

                    // normalize / checks
                    $has_price    = is_numeric($price) && floatval($price) > 0;
                    $has_discount = is_numeric($discount) && intval($discount) > 0;

                    // compute new price only if discount > 0
                    $new_price = ($has_price && $has_discount)
                        ? round(floatval($price) - (floatval($price) * intval($discount) / 100))
                        : null;

                    // wow delay: 0.1s, 0.2s, 0.3s ...
                    $delay = number_format($i / 10, 1, '.', '') . 's';
                    ?>
                    <div class="swiper-slide">
                        <div class="sale-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                            <div class="sale-item__top">
                                <?php if (!empty($image) && !empty($image['url'])) : ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt'] ?: get_the_title()); ?>">
                                <?php endif; ?>

                                <?php if ($has_discount) : ?>
                                    <div class="sale-discount">-<?php echo esc_html(intval($discount)); ?>%</div>
                                <?php endif; ?>
                            </div>

                            <div class="sale-title"><?php the_title(); ?></div>

                            <?php if (!empty($text) || !empty($titre)) : ?>
                                <p class="sale-desc">
                                    <?php if (!empty($text))  echo esc_html($text); ?>
                                    <?php if (!empty($titre)) : ?>
                                        <em><?php echo esc_html($titre); ?></em>
                                    <?php endif; ?>
                                </p>
                            <?php endif; ?>

                            <?php if ($has_price) : ?>
                                <div class="sale-price">
                                    <?php if ($has_discount && $new_price !== null) : ?>
                                        Всего <span><?php echo esc_html(number_format_i18n($price)); ?></span>
                                        <?php echo esc_html(number_format_i18n($new_price)); ?> руб.
                                    <?php else : ?>
                                        Всего <span><?php echo esc_html(number_format_i18n($price)); ?></span> руб.
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>

                            <a href="#" class="sale-btn" data-modal="order-modal">Записаться</a>
                        </div>
                    </div>
                    <?php $i++; endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif;
wp_reset_postdata();
?>