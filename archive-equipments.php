<?php
get_header();
?>


    <main>
        <section class="specialists-section">
            <div class="container">
                <ul class="breadcrumbs wow fadeInUp">
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <li>»</li>
                    <li><a href="/o-nas">О нас</a></li>
                    <li>»</li>
                </ul>
                <div class="specialists-top">
                    <h2 class="sectitle wow fadeInUp">Наше оборудование</h2>
                    <div class="caption wow fadeInUp">Наша клиника оснащена по последнему слову техники</div>
                    <p class="desc wow fadeInUp">Клиника Your Face Clinic может похвастаться подборкой самых современных косметологических аппаратов. В руках хорошего специалиста (а других у нас нет) они буквально творят чудеса!</p>
                </div>

                <div class="equipment-grid">
                    <?php
                    if ( have_posts() ) : ?>
                            <?php
                            $i = 0;
                            while ( have_posts() ) : the_post();
                                $i++;
                                $delay = '0.' . $i . 's';
                                $short_description = get_field('short_description');
                                $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium');
                                ?>
                                <a href="<?php the_permalink(); ?>" class="equipment-item wow fadeInUp" data-wow-delay="<?php echo esc_attr($delay); ?>">
                                    <div class="equipment-bg">
                                        <?php if ($thumb): ?>
                                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php the_title_attribute(); ?>">
                                        <?php endif; ?>
                                    </div>
                                    <div class="equipment-content">
                                        <div class="equip-title"><?php the_title(); ?></div>
                                        <?php if ($short_description): ?>
                                            <p class="equip-desc"><?php echo esc_html($short_description); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            <?php endwhile; ?>
                    <?php
                    endif;
                    ?>

                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>


<?php
get_footer();
