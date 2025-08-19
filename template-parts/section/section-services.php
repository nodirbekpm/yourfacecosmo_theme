<?php
/**
 * Section: Services
 * Universal section for rendering all services as card
 */

$args = array(
    'post_type'      => 'services',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
);

$services = new WP_Query($args);
?>

<section id="service" class="service">
    <div class="container">
        <h2 class="sectitle wow fadeInUp">Наши услуги</h2>
        <p class="desc service-desc wow fadeInUp" data-wow-delay="0.2s">Основные направления деятельности</p>
        <div class="service-grid">
            <?php
            if ($services->have_posts()): ?>
                <?php while ($services->have_posts()): $services->the_post();
                    $short_description = get_field('short_description', get_the_ID());
                    $thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'medium'); // kerakli o‘lchamni qo‘ying (thumbnail, medium, large)
                    ?>
                    <a href="<?php the_permalink(); ?>" class="service-item wow fadeInUp" data-wow-delay="0.1s">
                        <?php if ($thumbnail): ?>
                            <img src="<?php echo esc_url($thumbnail); ?>" alt="<?php the_title_attribute(); ?>">
                        <?php endif; ?>

                        <div class="service-item__title"><?php the_title(); ?></div>

                        <?php if ($short_description): ?>
                            <p class="service-item__desc"><?php echo esc_html($short_description); ?></p>
                        <?php endif; ?>
                    </a>
                <?php endwhile; wp_reset_postdata(); ?>

            <?php else: ?>
                <p><?php _e('Hozircha xizmatlar mavjud emas', 'your-textdomain'); ?></p>
            <?php endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>

