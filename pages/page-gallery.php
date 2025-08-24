<?php
/*
 * Template name: Gallery
 * */
get_header();

$works = get_field('works');
?>


    <main>
        <section class="gallery-section">
            <div class="container">
                <ul class="breadcrumbs wow fadeInUp">
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <li>»</li>
                    <li><a href="/o-nas">О нас</a></li>
                    <li>»</li>
                </ul>
                <h2 class="sectitle wow fadeInUp">Наши работы: до и после</h2>
                <div class="caption wow fadeInUp">Результаты процедур в нашей клинике</div>
                <?php foreach ($works as $work): ?>
                    <div class="gallery-wrap">
                        <div class="gallery-left wow fadeInUp">
                            <div class="gallery-title"><?php echo esc_html($work['title']) ?></div>
                            <div class="caption"><?php echo esc_html($work['text']) ?></div>
                        </div>
                        <div class="gallery-swiper swiper">
                            <div class="swiper-wrapper">
                                <?php foreach ($work['gallery'] as $image): ?>
                                    <a href="#" class="swiper-slide gallery-item" data-fancybox="1"
                                       data-src="<?php echo esc_url($image['image']['url']) ?>">
                                        <img src="<?php echo esc_url($image['image']['url']) ?>" alt="">
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination review-gapination"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>


<?php
get_footer();