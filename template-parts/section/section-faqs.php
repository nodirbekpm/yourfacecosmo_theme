<section class="faq">
    <div class="container">
        <div class="section-top">
            <div class="faq-sectitle wow fadeInUp">
                <h2 class="sectitle">Вопрос-ответ</h2>
                <p class="desc">Отвечаем на часто задаваемые вопросы</p>
            </div>
        </div>
        <?php if ( have_rows('faqs', 'option') ) : ?>
            <div class="faq-grid wow bounceIn">
                <?php
                $i = 0;
                while ( have_rows('faqs', 'option') ) : the_row();
                    $i++;
                    // delay 0.3s dan boshlab oshirib ketamiz
                    $delay = 0.2 + ($i * 0.1);
                    $question = get_sub_field('question');
                    $answer   = get_sub_field('answer');
                    ?>
                    <div class="faq-item">
                        <div class="faq-head">
                        <span class="faq-arr">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                            </svg>
                        </span>
                            <div class="faq-title"><?php echo esc_html($question); ?></div>
                        </div>
                        <div class="faq-body">
                            <?php echo $answer; // wysiwyg html ?>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

    </div>
</section>