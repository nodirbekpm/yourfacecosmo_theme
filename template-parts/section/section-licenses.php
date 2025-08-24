<section class="license">
    <div class="container">
        <div class="license-row">
            <div class="license-sectitle wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class="sectitle">Лицензии и сертификаты</h2>
                <p class="desc">Наши документы</p>
            </div>
            <div class="license-right">
                <?php if( have_rows('licenses', 'option') ): ?>
                    <?php $i = 1; ?>
                    <?php while( have_rows('licenses', 'option') ): the_row(); ?>
                        <?php
                        $image = get_sub_field('image');
                        if( $image ):
                            // delay index bo‘yicha: 0.1, 0.2, 0.3 ...
                            $delay = "0." . $i . "s";
                            ?>
                            <a href="<?php echo esc_url($image['url']); ?>"
                               data-fancybox="licenses"
                               data-src="<?php echo esc_url($image['url']); ?>"
                               class="wow fadeInRight"
                               data-wow-delay="<?php echo esc_attr($delay); ?>">
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </a>
                        <?php endif; ?>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>