<?php
get_header();

$facilites = get_field("facilities");
$results = get_field("results");
?>


    <main>
        <section class="equip-section">
            <div class="container">
                <div class="equip-row">
                    <div class="equip-left">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('large', ['alt' => get_the_title()]); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/equipment/equipment4.jpg"
                                 alt="">
                        <?php endif; ?>
                    </div>
                    <div class="equip-right">
                        <ul class="breadcrumbs wow fadeInUp">
                            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                            <li>»</li>
                            <li><a href="<?php echo get_post_type_archive_link('equipments'); ?>">Оборудование</a></li>
                            <li>»</li>
                        </ul>
                        <h2 class="sectitle wow fadeInUp"><?php the_title(); ?></h2>
                        <div class="caption wow fadeInUp"><?= the_field('description'); ?></div>
                        <div>
                            <?php foreach ($facilites as $facility): ?>
                                <div class="equip-option wow fadeInUp">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/check-overlay.svg"
                                         alt="">
                                    <div>
                                        <div class="gallery-title"><?= $facility['title'] ?></div>
                                        <p><?= $facility['text'] ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
                <div class="gallery-wrap">
                    <div class="gallery-left wow fadeInUp">
                        <div class="sectitle">Результаты</div>
                    </div>
                    <div class="gallery-swiper swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($results as $result): ?>
                                <a href="#" class="swiper-slide gallery-item" data-fancybox="1"
                                   data-src="<?php echo $result['image']['url'] ?>">
                                    <img src="<?php echo $result['image']['url'] ?>"
                                         alt="<?php echo $result['image']['alt'] ?>">
                                </a>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-pagination review-gapination"></div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>


<?php
get_footer();