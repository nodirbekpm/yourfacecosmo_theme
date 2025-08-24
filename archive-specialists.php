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
                    <h2 class="sectitle wow fadeInUp">Специалисты</h2>
                    <div class="caption wow fadeInUp">Команда нашей клиники</div>
                    <p class="desc wow fadeInUp">Косметология и красота требуют величайших профессиональных навыков. Ведь каким бы современным не было оборудование, какими инновационными не были бы препараты — их нужно уметь правильно применять. Поэтому самое важное, что у нас есть — это специалисты. Мы гордимся нашей командой врачей и косметологов и доверяем им собственную красоту. Познакомьтесь с ними и вы.</p>
                </div>

                <div class="spec-grid">
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php
                            // Indexni olish
                            $index = $wp_query->current_post + 1;
                            $delay = $index * 0.1; // har biri uchun 0.1s oshib boradi
                            ?>
                            <a href="<?php echo esc_url(get_post_type_archive_link('specialists'));  ?>"
                               class="spec-item wow fadeInUp"
                               data-wow-delay="<?php echo $delay; ?>s"
                               style="visibility: visible; animation-delay: <?php echo $delay; ?>s; animation-name: fadeInUp;">

                                <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/spec/default.jpg" alt="">
                                <?php endif; ?>

                                <div class="spec-content">
                                    <div class="spec-title"><?php the_title(); ?></div>
                                    <p class="desc"><?php the_field('specialist_position'); ?></p>
                                </div>
                            </a>
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
