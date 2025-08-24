<?php
/*
 * Template name: Подарочные сертификаты
 * */
get_header();

?>

    <main>
        <section class="gift-section">
            <div class="container">
                <div class="gift-top">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/sert2.webp" alt="" class="gift-img">
                    <div class="gift-right">
                        <ul class="breadcrumbs wow fadeInUp">
                            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                            <li>»</li>
                            <li><a href="/o-nas">О нас</a></li>
                            <li>»</li>
                        </ul>
                        <h2 class="sectitle wow fadeInUp">Подарочные сертификаты</h2>
                        <p class="desc wow fadeInUp">В клинике косметологии Your Face Clinic вы можете заказать подарочный сертификат на любую удобную сумму от 3000 рублей и выше. Сертификат можно использовать как на услуги клиники, так и на покупку косметики и препаратов.</p>
                    </div>
                </div>
                <div class="gift-payment">
                    <div class="sectitle">Онлайн-оплата сертификата</div>
                    <p class="">Нажмите на кнопку «Купить сертификат». Во всплывающем окне откроется форма платёжного шлюза PayKeeper. После заполнения обязательных полей и ввода желаемой суммы (не менее 3000 р.) в окне вы попадёте на страницу системы PayKeeper, где сможете оплатить покупку банковской картой.</p>
                    <div>
                        <a href="#" class="buy-btn">Купить сертификат</a>
                    </div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/pay.png" alt="" class="pay-logos">
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>


<?php
get_footer();