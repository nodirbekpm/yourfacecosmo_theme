<?php
/*
 * Template name: Новости
 * */
get_header();

$works = get_field('works');
?>
    <script type="text/javascript" src="https://vk.com/js/api/openapi.js?168"></script>


    <main>
        <section class="news-section">
            <div class="container">
                <div class="news-row">
                    <div class="news-left">
                        <ul class="breadcrumbs wow fadeInUp">
                            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                            <li>»</li>
                            <li><a href="/o-nas">О нас</a></li>
                            <li>»</li>
                        </ul>
                        <h2 class="sectitle wow fadeInUp">Новости</h2>
                        <div class="caption wow fadeInUp">Здесь отображаются свежие новости нашей клиники</div>
                    </div>
                    <div class="news-right">
                        <div id="vk_groups"></div>
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>

    <script type="text/javascript">
        VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "auto", height: 500, color1: "FFFFFF", color2: "000000", color3: "5181B8"}, 156456456);
    </script>

<?php
get_footer();