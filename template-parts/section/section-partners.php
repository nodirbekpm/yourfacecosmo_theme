<section class="partners">
    <div class="container">
        <h2 class="sectitle wow fadeInUp">Наши партнёры</h2>
        <div class="partnes-swiper swiper">
            <div class="swiper-wrapper">
                <?php if ( have_rows('partners', 'option') ) : ?>
                    <?php $i = 1; ?>
                    <?php while ( have_rows('partners', 'option') ) : the_row(); ?>
                        <?php
                        $logo = get_sub_field('logo');
                        if ($logo):
                            ?>
                            <a href="#" class="swiper-slide partner-item wow fadeInUp" data-wow-delay="<?php echo '0.' . $i . 's'; ?>">
                                <img src="<?php echo esc_url($logo['url']); ?>" alt="<?php echo esc_attr($logo['alt']); ?>">
                            </a>
                        <?php endif; ?>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
            <div class="swiper-pagination partner-pagination"></div>
        </div>
    </div>
</section>