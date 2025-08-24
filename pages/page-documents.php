<?php
/*
 * Template name: Лицензии и сертификаты
 * */
get_header();
?>


    <main>
        <section class="documents-section">
            <div class="container">
                <div class="document-row">
                    <div class="document-left">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/lic/document-img.jpg" alt="">
                    </div>
                    <div class="document-right">
                        <ul class="breadcrumbs wow fadeInUp">
                            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                            <li>»</li>
                            <li><a href="/o-nas">О нас</a></li>
                            <li>»</li>
                        </ul>
                        <h2 class="sectitle wow fadeInUp">Лицензии и сертификаты</h2>
                        <div class="caption wow fadeInUp">Наши документы</div>
                        <div class="document-img">
                            <?php if( have_rows('licenses', 'option') ): ?>
                                <?php $i = 1; ?>
                                <?php while( have_rows('licenses', 'option') ): the_row(); ?>
                                    <?php
                                    $image = get_sub_field('image');
                                    if( $image ):
                                        // delay index bo‘yicha: 0.1, 0.2, 0.3 ...
                                        $delay = "0." . $i . "s";
                                        ?>
                                        <a href="#" class="wow fadeInUp" data-fancybox="1" data-src="<?php echo esc_url($image['url']); ?>">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                                        </a>
                                    <?php endif; ?>
                                    <?php $i++; ?>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>


<?php
get_footer();