<?php
/*
 * Template name: Наши пациенты
 * */
get_header();

$gallery = get_field('gallery');
?>


    <main>

        <section class="patients-section">
            <div class="container">
                <ul class="breadcrumbs wow fadeInUp">
                    <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                    <li>»</li>
                    <li><a href="/o-nas">О нас</a></li>
                    <li>»</li>
                </ul>
                <h2 class="sectitle wow fadeInUp">Наши пациенты</h2>
                <div class="caption wow fadeInUp">Вот, что мы нашли в соцсетях наших пациентов:</div>
                <div class="patient-grid">
                    <?php foreach ($gallery as $item): ?>
                        <a href="#" class="patient-item" data-fancybox="1"
                           data-src="<?php echo esc_url($item['image']['url']) ?>">
                            <img src="<?php echo esc_url($item['image']['url']) ?>" alt="">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>


<?php
get_footer();