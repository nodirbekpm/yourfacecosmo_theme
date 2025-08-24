<?php
get_header();
?>


    <main>
        <section class="service-section">
            <div class="container">
                <ul class="breadcrumbs wow fadeInUp">
                    <li><a href="#">Главная</a></li>
                    <li>»</li>
                    <li>Услуги</li>
                </ul>
                <h2 class="sectitle wow fadeInUp">Наши услуги</h2>
                <div class="caption service-desc wow fadeInUp" data-wow-delay="0.2s">Основные направления деятельности</div>
                <div class="service-grid">
                    <?php if ( have_posts() ) : ?>
                        <?php $i = 0; ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php
                            $desc = get_field('description');
                            $img_url = get_the_post_thumbnail_url(get_the_ID());
                            $delay = 0.2 + ($i * 0.1); // 0.2s dan boshlab, har birida +0.1s
                            ?>
                            <a href="<?php the_permalink(); ?>" class="service-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>s">
                                <?php if($img_url): ?>
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>">
                                <?php endif; ?>
                                <div class="service-item__title"><?php the_title(); ?></div>
                                <?php if($desc): ?>
                                    <p class="service-item__desc"><?php echo esc_html($desc); ?></p>
                                <?php endif; ?>
                            </a>
                            <?php $i++; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>



<?php
get_footer();
