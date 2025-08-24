<?php
/**
 * Section: Equipments
 * Universal section for rendering all services as card
 */
?>

<section class="equipment">
    <div class="container">
        <div class="section-top">
            <div class="equipment-sectitle wow fadeInUp">
                <h2 class="sectitle">Наше оборудование</h2>
                <p class="desc">Мы используем самое современное оборудование</p>
            </div>
        </div>
        <div class="equipment-grid">
            <?php
            $equipments = new WP_Query([
                'post_type'      => 'equipments',
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ]);

            if ($equipments->have_posts()):
                $i = 0;
                while ($equipments->have_posts()): $equipments->the_post();
                    $i++;
                    $title   = get_the_title();
                    $desc    = get_field('short_description');
                    $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                    $delay   = $i * 0.1 . 's';
                    ?>

                    <a href="<?php the_permalink(); ?>" class="equipment-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                        <div class="equipment-bg">
                            <?php if ($img_url): ?>
                                <img src="<?php echo esc_url($img_url); ?>" alt="<?php echo esc_attr($title); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="equipment-content">
                            <div class="equip-title"><?php echo esc_html($title); ?></div>
                            <?php if ($desc): ?>
                                <p class="equip-desc"><?php echo esc_html($desc); ?></p>
                            <?php endif; ?>
                        </div>
                    </a>

                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
        <a href="/equipments" class="spec-btn wow fadeInUp">
            Посмотреть всех
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"></path>
            </svg>
        </a>
    </div>
</section>
