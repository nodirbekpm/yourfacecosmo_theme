<?php
/**
 * Section: Specialists
 * Universal section for rendering all services as card
 */


$args = array(
    'post_type' => 'specialists',
    'posts_per_page' => 3,
    'post_status' => 'publish',
    'order' => 'ASC',
);

$specialists = new WP_Query($args);
?>


<section class="specialists">
    <div class="container">
        <div class="section-top">
            <div class="specialists-sectitle wow fadeInLeft">
                <h2 class="sectitle">Наши специалисты</h2>
                <p class="desc">Команда нашей клиники</p>
            </div>
        </div>
        <div class="spec-grid">
            <?php
            if ($specialists->have_posts()) :
                $i = 1;
                while ($specialists->have_posts()) : $specialists->the_post();
                    $job = get_field('job'); // ACF field
                    $delay = '0.' . $i . 's'; // 0.1s, 0.2s, 0.3s
                    ?>
                    <a href="<?php echo esc_url(get_post_type_archive_link('specialists'));  ?>" class="spec-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                        <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spec/default.jpg" alt="<?php the_title(); ?>">
                        <?php endif; ?>
                        <div class="spec-content">
                            <div class="spec-title"><?php the_title(); ?></div>
                            <?php if ($job): ?>
                                <p class="desc"><?php echo esc_html($job); ?></p>
                            <?php endif; ?>
                        </div>
                    </a>
                    <?php
                    $i++;
                endwhile;
                wp_reset_postdata();
            endif;
            ?>

        </div>
        <a href="<?php echo esc_url( get_post_type_archive_link( 'specialists' ) ); ?>" class="spec-btn wow fadeInUp" data-wow-delay="0.4s">
            Посмотреть всех
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z" fill="#FFF"></path>
            </svg>
        </a>
    </div>
</section>
