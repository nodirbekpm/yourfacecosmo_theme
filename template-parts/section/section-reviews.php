<?php
/**
 * Section: Reviews
 * Universal section for rendering all services as card
 */
?>

<?php
$args = array(
    'post_type'      => 'reviews',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
);

$reviews = new WP_Query($args);

if ($reviews->have_posts()) : ?>
    <section class="review">
        <div class="container">
            <div class="section-top">
                <div class="review-sectitle wow fadeInLeft">
                    <h2 class="sectitle">Отзывы наших пациентов</h2>
                    <p class="desc">Вот, что наши пациенты пишут о нас</p>
                </div>
            </div>
            <div class="review-swiper swiper">
                <div class="swiper-wrapper">
                    <?php
                    $i = 0;
                    while ($reviews->have_posts()) : $reviews->the_post();
                        $i++; // indexni oshirib boradi
                        ?>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="<?php echo '0.' . $i . 's'; ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>" alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
                <div class="swiper-pagination review-gapination"></div>
            </div>
        </div>
    </section>
<?php
endif;
wp_reset_postdata();
?>

