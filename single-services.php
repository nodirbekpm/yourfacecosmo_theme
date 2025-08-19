<?php
get_header();
?>


<?php
//Default
$service_title = get_the_title();
$description = get_field('description');

// Banner
$banner_hidden = get_field('banner_hidden');
$background_img = get_field('background_img');
$short_description = get_field('short_description');

// Offers
$offers_hidden = get_field('offers_hidden');
$offers_title = get_field('offers_title');
$offers_images = get_field('offers_images');
$offers = get_field('offers');
$register_yclients = get_field('register_yclients');

// About procedure
$about_procedure_hidden = get_field('about_procedure_hidden');
$about_procedure_texts = get_field('about_procedure_texts');
$about_procedure_images = get_field('about_procedure_images');

//Procedure
$procedure_hidden = get_field('procedure_hidden');
$procedure_title = get_field('procedure_title');
$procedure_image = get_field('procedure_image');
$procedure = get_field('procedure');

// Sollutions
$sollutions_hidden = get_field('sollutions_hidden');
$sollutions_title = get_field('sollutions_title');
$sollutions_text = get_field('sollutions_text');
$sollutions = get_field('sollutions');
$sollutions_images = get_field('sollutions_images');

//Reasons
$reasons_hidden = get_field('reasons_hidden');
$reasons_title = get_field('reasons_title');
$reasons = get_field('reasons');

// Methods
$methods_hidden = get_field('methods_hidden');
$methods_title = get_field('methods_title');
$methods_text = get_field('methods_text');
$methods_main_title = get_field('methods_main_title');
$methods_image = get_field('methods_image');
$methods = get_field('methods');

// Stages
$stages_hidden = get_field('stages_hidden');
$stages_title = get_field('stages_title');
$stages_subtitle = get_field('stages_subtitle');
$stages_text = get_field('stages_text');
$stages_image = get_field('stages_image');
$stages = get_field('stages');

//Indications and contraindications
$contraindications_hidden = get_field('contraindications_hidden');
$indications = get_field('indications');
$contraindications = get_field('contraindications');
$contraindications_text = get_field('contraindications_text');

// Results
$results_hidden = get_field('results_hidden');
$results = get_field('results');

// Prices
$prices_hidden = get_field('prices_hidden');
$prices_title = get_field('prices_title');
$prices = get_field('prices');

// Questions & Answers
$questions_answers_hidden = get_field('questions_answers_hidden');
$questions_answers_title = get_field('questions_answers_title');
$questions_answers_text = get_field('questions_answers_text');
$questions_answers = get_field('questions_answers');

// Facts
$facts_hidden = get_field('facts_hidden');
$facts_title = get_field('facts_title');
$facts_text = get_field('facts_text');
$facts = get_field('facts');
?>

<?php if ($banner_hidden !== "Да"): ?>
    <section class="hero">
        <div class="hero-swiper">
            <div class="hero-item">
                <?php if ($background_img): ?>
                    <img src="<?php echo esc_url($background_img['url']); ?>"
                         alt="<?php echo esc_attr($service_title); ?>"
                         class="hero-img">
                <?php endif; ?>
                <div class="container">
                    <?php if ($service_title): ?>
                        <div class="sectitle wow bounceInUp">
                            <?php echo esc_html($service_title); ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($short_description): ?>
                        <p class="caption wow bounceInUp">
                            <?php echo esc_html($short_description); ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>

    <main>
        <section class="inner-service">
            <div class="container">
                <div class="service-row">
                    <div class="service-left">
                        <div>
                            <ul class="breadcrumbs wow fadeInUp">
                                <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                                <li>»</li>
                                <li><a href="<?php echo home_url(); ?>/#service">Услуги</a></li>
                                <li>»</li>
                            </ul>
                            <h2 class="wow fadeInUp sectitle"><?php echo esc_html($service_title); ?> —</h2>
                        </div>
                        <p class="desc wow fadeInUp"><?php echo esc_html($description); ?></p>

                        <?php if ($offers_hidden !== "Да"): ?>
                            <p><?php echo esc_html($offers_title); ?></p>
                            <ul class="custom-list duble">
                                <?php foreach ($offers as $pr): ?>
                                    <li class="wow fadeInUp"><p class="desc"><?php echo esc_html($pr['offer']); ?></p>
                                    </li>
                                <?php endforeach; ?>

                            </ul>
                            <a href="<?php echo esc_url($register_yclients['url']) ?>" class="call-form__link">
                                Записаться на yclients.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13"
                                     fill="none">
                                    <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z"
                                          fill="#FFF"></path>
                                </svg>
                            </a>
                        <?php endif; ?>

                        <?php if ($procedure_hidden !== "Да"): ?>
                            <h2 class="wow fadeInUp sectitle"><?php echo esc_html($procedure_title); ?></h2>
                            <ul class="custom-list">
                                <?php foreach ($procedure as $pr): ?>
                                    <li class="desc wow fadeInLeft"><p><?php echo esc_html($pr['текст']); ?></p></li>
                                <?php endforeach; ?>

                            </ul>
                            <a href="#" class="spec-btn wow fadeInLeft">
                                Записаться
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12"
                                     fill="none">
                                    <line x1="1.06066" y1="4.93934" x2="6.71751" y2="10.5962" stroke="white"
                                          stroke-width="3"/>
                                    <line x1="4.93934" y1="10.9393" x2="13.9393" y2="1.93934" stroke="white"
                                          stroke-width="3"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php if ($offers_hidden !== "Да"): ?>
                        <?php if ($offers_images): ?>
                            <?php if (count($offers_images) === 1): ?>
                                <?php $image = $offers_images[0]['image']; ?>
                                <div class="service-right mobile-none">
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr($image['alt']); ?>">
                                </div>
                            <?php else: ?>
                                <div class="service-right">
                                    <div class="service-swiper swiper">
                                        <div class="swiper-wrapper">
                                            <?php foreach ($offers_images as $offers_image): ?>
                                                <?php $image = $offers_image['image']; ?>
                                                <a href="<?php echo esc_url($image['url']); ?>"
                                                   class="swiper-slide"
                                                   data-fancybox="offers-gallery"
                                                   data-src="<?php echo esc_url($image['url']); ?>">
                                                    <img src="<?php echo esc_url($image['url']); ?>"
                                                         alt="<?php echo esc_attr($image['alt']); ?>">
                                                </a>
                                            <?php endforeach; ?>
                                        </div>

                                        <div class="swiper-pagination service-pagination"></div>
                                        <div class="service-next">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="29"
                                                 viewBox="0 0 17 29" fill="none">
                                                <path d="M1.66048 2.01389L14.212 14.9158L1.31015 27.4673" stroke="white"
                                                      stroke-width="3"/>
                                            </svg>
                                        </div>
                                        <div class="service-prev">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="17" height="29"
                                                 viewBox="0 0 17 29" fill="none">
                                                <path d="M15.3395 26.9861L2.78796 14.0842L15.6898 1.53268"
                                                      stroke="white" stroke-width="3"/>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($procedure_hidden !== "Да"): ?>
                        <div class="service-right mobile-none">
                            <img src="<?php echo esc_url($procedure_image['url']); ?>"
                                 alt="<?php echo esc_attr($procedure_image['alt']); ?>">
                        </div>
                    <?php endif; ?>
                </div>

                <?php if ($about_procedure_hidden !== "Да"): ?>
                    <div class="service-row">
                        <div class="service-left">
                            <h2 class="wow fadeInUp sectitle">О процедуре</h2>
                            <div class="desc-row">
                                <?php foreach ($about_procedure_texts as $text): ?>
                                    <p class="desc wow fadeInUp"><?php echo esc_html($text['text']); ?></p>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <?php if (!empty($about_procedure_images)): ?>
                        <div class="service-photos">
                            <div class="review-swiper swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    $sec_id = 1;
                                    foreach ($about_procedure_images as $image):
                                        $delay = $sec_id * 0.1;
                                        ?>
                                        <div class="swiper-slide wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s"
                                             id="sec-<?php echo $sec_id; ?>">
                                            <img src="<?php echo esc_url($image['image']['url']); ?>" alt="">
                                        </div>
                                        <?php
                                        $sec_id++;
                                    endforeach;
                                    ?>


                                </div>
                                <div class="swiper-pagination review-gapination"></div>
                            </div>
                        </div>
                    <?php endif; ?>

                <?php endif; ?>

                <?php if ($sollutions_hidden !== "Да"): ?>
                    <div class="service-row">
                        <div class="service-left">
                            <?php if ($sollutions_title): ?>
                                <h2 class="wow fadeInUp sectitle"><?php echo esc_html($sollutions_title); ?></h2>
                            <?php endif; ?>

                            <?php if ($sollutions_text): ?>
                                <div class="caption wow fadeInUp"><?php echo esc_html($sollutions_text); ?></div>
                            <?php endif; ?>

                            <ul class="custom-list duble">
                                <?php $i = 1; ?>
                                <?php foreach ($sollutions as $sollution): ?>
                                    <li class="wow fadeInUp">
                                        <p class="desc"><?php echo esc_html($sollution['sollution']); ?></p>
                                    </li>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </ul>

                            <a href="#" class="spec-btn wow fadeInLeft">
                                Записаться
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12"
                                     fill="none">
                                    <line x1="1.06066" y1="4.93934" x2="6.71751" y2="10.5962" stroke="white"
                                          stroke-width="3"/>
                                    <line x1="4.93934" y1="10.9393" x2="13.9393" y2="1.93934" stroke="white"
                                          stroke-width="3"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <?php if (!empty($sollutions_images)): ?>
                        <div class="service-photos">
                            <div class="review-swiper swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    $sec_id = 1;
                                    foreach ($sollutions_images as $image):
                                        $delay = $sec_id * 0.1;
                                        ?>
                                        <div class="swiper-slide wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s"
                                             id="sec-<?php echo $sec_id; ?>">
                                            <img src="<?php echo esc_url($image['image']['url']); ?>" alt="">
                                        </div>
                                        <?php
                                        $sec_id++;
                                    endforeach;
                                    ?>


                                </div>
                                <div class="swiper-pagination review-gapination"></div>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php endif; ?>

                <?php if ($reasons_hidden !== "Да"): ?>
                    <div class="service-row">
                        <div class="service-left">
                            <div class="wow sectitle"><?php echo esc_html($reasons_title); ?></div>
                            <div class="custom-list2">
                                <?php foreach ($reasons as $reason): ?>
                                    <li class="wow fadeInLeft"><p>
                                            <span><?php echo esc_html($reason['заголовок']); ?> </span><?php echo esc_html($reason['text']); ?>
                                        </p></li>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <?php if ($methods_hidden !== "Да"): ?>
                    <?php if (!empty($methods_title) || !empty($methods_text)): ?>
                        <div class="service-row">
                            <div class="service-left">
                                <?php if (!empty($methods_title)): ?>
                                    <div class="wow sectitle"><?php echo esc_html($methods_title); ?></div>
                                <?php endif; ?>

                                <?php if (!empty($methods_text)): ?>
                                    <p class="desc"><?php echo esc_html($methods_text); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="service-row">
                        <div class="service-left">
                            <div class="wow fadeInUp sectitle"><?php echo esc_html($methods_main_title); ?></div>
                            <?php if (!empty($methods)): ?>
                                <div class="steps-col">
                                    <?php foreach ($methods as $index => $method): ?>
                                        <div class="step-item wow fadeInUp">
                                            <div class="step-num"><?php echo esc_html($index + 1); ?></div>
                                            <div>
                                                <div class="step-title"><?php echo esc_html($method['title']); ?></div>
                                                <?php echo apply_filters('the_content', $method['text']); ?>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <?php if (!empty($methods_image) && !empty($methods_image['url'])): ?>
                            <div class="service-right">
                                <img src="<?php echo esc_url($methods_image['url']); ?>"
                                     alt="<?php echo esc_attr($service_title); ?>">
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($stages_hidden !== "Да"): ?>
                    <div class="service-row">
                        <div class="service-left">
                            <div class="wow fadeInUp sectitle"><?php echo esc_html($stages_title); ?></div>
                            <p class="desc wow fadeInUp"><?php echo esc_html($stages_text); ?></p>
                            <div class="gallery-title"><?php echo esc_html($stages_subtitle); ?></div>
                            <div class="steps-grid">
                                <?php foreach ($stages as $index => $stage): ?>
                                    <div class="step-item wow fadeInUp">
                                        <div class="step-num"><?php echo esc_html($index + 1); ?></div>
                                        <div>
                                            <div class="step-title"><?php echo esc_html($stage['title']); ?></div>
                                            <p class="desc"><?php echo esc_html($stage['text']); ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <img src="<?php echo esc_url($stages_image['url']); ?>" alt=""
                         class="service-banner">
                <?php endif; ?>

                <?php if ($contraindications_hidden !== "Да"): ?>
                    <div class="service-row service-row__half">
                        <?php if (!empty($indications)): ?>
                            <div class="service-left">
                                <div class="wow fadeInUp sectitle">Показания к проведению</div>
                                <ul class="custom-list">
                                    <?php
                                    $i = 1;
                                    foreach ($indications as $item):
                                        $text = $item['text'];
                                        if (!empty($text)): ?>
                                            <li class="desc wow fadeInLeft" data-wow-delay="<?php echo '0.' . $i; ?>s">
                                                <p><?php echo esc_html($text); ?></p>
                                            </li>
                                            <?php
                                            $i++;
                                        endif;
                                    endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if (!empty($contraindications)): ?>
                            <div class="<?php echo !empty($indications) ? 'service-right' : 'service-left'; ?>">
                                <div class="wow fadeInUp sectitle">Противопоказания</div>
                                <ul class="custom-list disable-list">
                                    <?php
                                    $j = 1;
                                    foreach ($contraindications as $item):
                                        $text = $item['text'];
                                        if (!empty($text)): ?>
                                            <li class="desc wow fadeInLeft" data-wow-delay="<?php echo '0.' . $j; ?>s">
                                                <p><?php echo esc_html($text); ?></p>
                                            </li>
                                            <?php
                                            $j++;
                                        endif;
                                    endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>

                <?php if ($facts_hidden !== "Да"): ?>
                    <div class="service-row">
                        <div class="service-left">
                            <h2 class="sectitle wow fadeInUp"><?php echo esc_html($facts_title); ?></h2>
                            <p class="desc wow fadeInUp"><?php echo esc_html($facts_text); ?></p>
                            <div class="facts-grid">
                                <?php if ($facts): ?>
                                    <?php $i = 1; ?>
                                    <?php foreach ($facts as $fact): ?>
                                        <div class="fact-item wow fadeInUp"
                                             data-wow-delay="<?php echo esc_attr($i * 0.1); ?>s">
                                            <p><?php echo esc_html($fact['text']); ?></p>
                                        </div>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>


                <?php if ($results_hidden !== "Да"): ?>
                    <?php foreach ($results as $result): ?>
                        <div class="gallery-wrap gallery-wrap2">
                            <div class="gallery-left wow fadeInUp">
                                <div class="sectitle">Результаты</div>
                                <div class="caption"><?php echo esc_html($result['title']); ?></div>
                                <a href="#" class="spec-btn wow fadeInLeft">
                                    Записаться
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="12" viewBox="0 0 15 12"
                                         fill="none">
                                        <line x1="1.06066" y1="4.93934" x2="6.71751" y2="10.5962" stroke="white"
                                              stroke-width="3"/>
                                        <line x1="4.93934" y1="10.9393" x2="13.9393" y2="1.93934" stroke="white"
                                              stroke-width="3"/>
                                    </svg>
                                </a>
                            </div>
                            <div class="gallery-swiper swiper">
                                <div class="swiper-wrapper">
                                    <?php foreach ($result['images'] as $image): ?>
                                        <a href="#" class="swiper-slide gallery-item" data-fancybox="1"
                                           data-src="<?php echo esc_url($image['image']['url']); ?>">
                                            <img src="<?php echo esc_url($image['image']['url']); ?>"
                                                 alt="">
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                                <div class="swiper-pagination review-gapination"></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </section>

        <?php if ($prices_hidden !== "Да"): ?>
            <section class="faq">
                <div class="container">
                    <div class="section-top">
                        <h2 class="sectitle wow fadeInUp"><?php echo esc_html($prices_title); ?></h2>
                    </div>
                    <div class="faq-grid wow bounceIn" data-wow-delay="0.3s">
                        <?php foreach ($prices as $price): ?>
                            <div class="faq-item">
                                <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                         fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                                    <div class="faq-title"><?php echo esc_html($price['title']); ?></div>
                                </div>
                                <div class="faq-body">
                                    <p class="desc"><?php echo esc_html($price['text']); ?></p>
                                    <table>
                                        <tbody>
                                        <?php foreach ($price['prices'] as $pr): ?>
                                            <tr>
                                                <td><?php echo esc_html($pr['title']); ?></td>
                                                <td><?php echo esc_html($pr['price']); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <?php get_template_part('template-parts/section/section', 'discounts'); ?>


        <?php if ($questions_answers_hidden !== "Да"): ?>
            <section class="faq">
                <div class="container">
                    <div class="section-top">
                        <div class="faq-sectitle wow fadeInUp">
                            <h2 class="sectitle"><?php echo esc_html($questions_answers_title); ?></h2>
                            <p class="desc"><?php echo esc_html($questions_answers_text); ?></p>
                        </div>
                    </div>
                    <div class="faq-grid wow bounceIn" data-wow-delay="0.3s">
                        <?php foreach ($questions_answers as $questions_answer): ?>
                            <div class="faq-item">
                                <div class="faq-head">
                                <span class="faq-arr">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10"
                                         fill="none">
                                        <line x1="5" x2="5" y2="10" stroke="white" stroke-width="2"/>
                                        <line y1="5" x2="10" y2="5" stroke="white" stroke-width="2"/>
                                    </svg>
                                </span>
                                    <div class="faq-title"><?php echo esc_html($questions_answer['question']); ?></div>
                                </div>
                                <div class="faq-body">
                                    <?php if (!empty($questions_answer['answers'])): ?>
                                        <?php if (count($questions_answer['answers']) === 1): ?>
                                            <p class="desc">
                                                <?php echo esc_html($questions_answer['answers'][0]['answer']); ?>
                                            </p>
                                        <?php else: ?>
                                            <ul>
                                                <?php foreach ($questions_answer['answers'] as $answer): ?>
                                                    <li>
                                                        <p class="desc"><?php echo esc_html($answer['answer']); ?></p>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>

        <section class="ceo">
            <div class="container">
                <div class="ceo_row">
                    <div class="ceo_left wow slideInLeft">
                        <p class="desc">Я горжусь тем, что на рынке современной косметологии есть такое качество услуг и
                            высокий сервис как в клиниках YOUR FACE.</p>
                        <p class="desc">Ежедневно я лично проверяю, все ли подготовлено к рабочему дню, начиная от
                            угощений для пациентов и заканчивая внешними видом персонала.</p>
                        <p class="desc">Каждое наше достижение — это результат кропотливого труда и глубоких знаний,
                            которые мы с гордостью применяем в своей практике. Мы уверены, что высокое качество услуг
                            невозможно без передовых аппаратов и лучших препаратов, которые мы используем. Мы нацелены
                            на то, чтобы удовлетворить потребности наших клиентов и превзойти их ожидания, создавая
                            прочные отношения, основанные на доверии и взаимопонимании.</p>
                        <p class="desc">Благодарим вас за выбор нашей клиники. Мы уверены, что вместе мы достигнем новых
                            высот!</p>
                    </div>
                    <div class="ceo_right">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ceo/yana.webp" alt=""
                             class="seo_image wow slideInDown">
                        <p class="ceo_name wow slideInRight" data-wow-delay="0.1s">Макаренко Яна Алексеевна</p>
                        <p class="seo_role wow slideInRight" data-wow-delay="0.1s">Генеральный директор и основатель
                            клиники <br> YOUR FACE</p>
                        <p class="desc wow slideInRight" data-wow-delay="0.2s">Мы слышим ваши голоса, каждое мнение
                            ценно для нас. Буду рада обратной связи по почте лично со мной по адресу оказанному
                            ниже.</p>
                        <a href="mailto:yourface-cosmo@mail.ru" class="seo_mail wow slideInRight" data-wow-delay="0.2s">yourface-cosmo@mail.ru</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="review">
            <div class="container">
                <div class="section-top">
                    <div class="review-sectitle wow fadeInLeft">
                        <h2 class="sectitle">Отзывы наших пациентов</h2>
                        <p class="desc">Вот, что наши пациенты пишут о нас</p>
                    </div>
                </div>
                <div class="review-swiper swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.1s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/review/review1.webp" alt="">
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.2s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/review/review2.webp" alt="">
                        </div>
                        <div class="swiper-slide wow fadeInUp" data-wow-delay="0.3s">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/review/review3.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/review/review4.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/review/review5.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/review/review6.webp" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/review/review7.webp" alt="">
                        </div>
                    </div>
                    <div class="swiper-pagination review-gapination"></div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="call-form__wrap">
                    <form class="call-form wow bounceIn">
                        <div class="call-form__title">Записаться или получить бесплатную консультацию онлайн</div>
                        <p class="desc">Заполните эту форму. Мы свяжемся с вами, чтобы проконсультировать или записать
                            вас на приём.</p>
                        <div class="call-form__row">
                            <label class="call-form__label">
                                <input type="text" placeholder="Ваше имя *" name="name">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <input type="tel" placeholder="Ваш телефон *" name="phone">
                                <p class="call-form__error">Это обязательное поле.</p>
                            </label>
                            <label class="call-form__label">
                                <select name="call-type">
                                    <option value=" Позвоните мне"> Позвоните мне</option>
                                    <option value=" Напишите в WhatsApp"> Напишите в WhatsApp</option>
                                    <option value=" Напишите в Telegram"> Напишите в Telegram</option>
                                </select>
                            </label>
                            <button class="call-form__button" type="submit">Отправить</button>
                        </div>
                        <div class="call-form__subtitle">Записаться напрямую через сервис yclients.com</div>
                        <div>
                            <a href="#" class="call-form__link">
                                Записаться на yclients.com
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13"
                                     fill="none">
                                    <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z"
                                          fill="#FFF"/>
                                </svg>
                            </a>
                        </div>
                        <label class="call-form__agree">
                            <input type="checkbox">
                            <p>Даю согласие на хранение и обработку персональных данных. <a href="#">Подробнее...</a>
                            </p>
                        </label>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/call-form__bg.png" alt=""
                             class="call-form__bg">
                    </form>
                </div>
            </div>
        </section>
        <section class="about">
            <div class="container">
                <h2 class="sectitle wow fadeInUp">Чистка лица</h2>
                <p class="desc wow fadeInUp">Косметологический центр YOUR FACE в СПб предлагает такую услугу, как чистка
                    лица и спины от угревой сыпи. Нашими специалистами используются механические и ультразвуковые
                    методы, позволяющие избавить от акне, вернуть коже здоровый и привлекательный внешний вид.</p>
                <h2 class="sectitle wow fadeInUp">Когда нужна чистка лица у косметолога</h2>
                <div class="w-100">
                    <p class="desc">Избавиться от черных точек и сальных пробок при помощи лосьонов, тоников и других
                        косметических средств невозможно. Чтобы убрать ороговевший слой, вернуть коже увлажненность и
                        способность нормально дышать, нужна чистка лица у косметолога. Это позволит убрать все
                        загрязнения, предупредить чрезмерное расширение пор и образование рубцов от акне.</p>
                    <p class="desc">Угревая болезнь – состояние, вызываемое многими провоцирующими факторами. Среди них
                        – погодные, особенности тканей и работы сальных желез, неправильный домашний уход. Чтобы
                        устранить такие загрязнения и избавиться от прыщей, необходимо обратиться к косметологу, который
                        подберет правильные методы чистки, вернет коже здоровый внешний вид.</p>
                    <p class="desc">Предлагаем механическую и ультразвуковую чистку лица, во время которых мягко
                        устраняет ороговевший слой, убраны сальные пробки и угри. Такие косметологические процедуры
                        рекомендуется проводить регулярно для тех, кто имеет склонность к акне, страдает от чрезмерной
                        выработки кожного сала. Цены чистки лица доступные, зависят от выбранной методики, степени
                        поражения кожи.</p>
                    <div class="sectitle">Механическая и ультразвуковая чистка</div>
                    <p class="desc">Сальные железы, в обилии находящиеся в толще кожи лица и тела, постоянно работают и
                        выделяют секрет. Он необходим для защиты от пересыхания и потери влажности, негативного внешнего
                        воздействия. Такие выделения смешиваются с чешуйками эпидермиса, образуют пробки, которые
                        расширяют поры и засоряют железы. На поверхности кожи появляются прыщи, комедоны и пробки,
                        которые не дают тканям нормально дышать. Если ничего не предпринимать, образуются расширенные
                        поры, кожа воспаляется, теряет влагу. Чтобы избавиться от этой проблемы, рекомендуется
                        кабинетная чистка лица с применением современных методов.</p>
                    <p class="desc">Механическая чистка лица – ручная косметологическая процедура удаления угрей и
                        других высыпаний. Для этого косметолог использует специальные инструменты. Выполняется в
                        качестве самостоятельной процедуры или в виде подготовки перед аппаратной чисткой или другими
                        терапевтическими действиями.</p>
                    <p class="desc">УЗ чистка лица – это безболезненная нетравматичная процедура, при которой на поры
                        воздействуют ультразвуковыми лучами. Под их воздействием поры расширяются, что позволяет быстро
                        убрать высыпания, очистить железы и убрать ороговевший слой. К преимуществам этого метода
                        относятся стимулирования кровообращения и питания, улучшение обменных процессов, стимулирование
                        естественной выработки эластина и коллагена.</p>
                    <div class="sectitle">Профессиональная чистка в косметологической клинике в Санкт-Петербурге</div>
                    <p class="desc">Косметологический центр YOUR FACE в Санкт-Петербурге предлагает услуги по
                        механической и ультразвуковой чистке лица. Наши косметологи в работе применяют только
                        атравматичные техники и безопасные инструменты, не причиняющие Клиенту дискомфорт или боль.</p>
                    <p class="desc">Преимущества обращения к нам:</p>
                    <ul>
                        <li><p class="desc">консультации и лечение у ведущих косметологов Центра;</p></li>
                        <li><p class="desc">использование индивидуальных планов омоложения и устранения рубцов;</p></li>
                        <li><p class="desc">использование только сертифицированных материалов и современного
                                оборудования;</p></li>
                        <li><p class="desc">гарантия безопасности и качества;</p></li>
                        <li><p class="desc">доступные цены на шлифовку кожи лица;</p></li>
                        <li><p class="desc">работаем с соблюдением принципов конфиденциальности.</p></li>
                    </ul>
                    <p class="desc">Для записи к нашим специалистами или уточнения цены на лазерную шлифовку кожи лица
                        оставляйте заявку на сайте. Также получить дополнительную информацию можно по телефону в СПб
                        +7(921)878-40-00.</p>
                </div>
                <div class="spec-btn wow fadeInUp" id="toggle-drop"><span>ПОДРОБНЕЕ</span><span>СКРЫТЬ</span></div>
            </div>
        </section>
        <svg class="shape-divider" fill="#e1e1e1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300"
             preserveAspectRatio="none">
            <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>
            <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>
            <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>
            <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>
            <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path>
        </svg>
        <section class="contacts">
            <div class="container">
                <div class="partner-block">
                    <div class="partner-title">Наши партнёры</div>
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/bqt.png" alt="">
                    <p class="partner-desc"><span>Онлайн-магазин цветов</span> La Buquette — это профессиональные
                        флористы, создающие неповторимые и сложные композиции для самых особенных случаев и самых
                        взыскательных клиентов. Есть доставка.</p>
                    <a href="#" class="partner-btn">
                        На сайт
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="13" viewBox="0 0 16 13" fill="none">
                            <path d="M0 5.6875H12.17L6.58 1.14562L8 0L16 6.5L8 13L6.59 11.8544L12.17 7.3125H0V5.6875Z"
                                  fill="#FFF"></path>
                        </svg>
                    </a>
                </div>
                <h2 class="sectitle">Наши контакты</h2>
                <div class="contact-row">
                    <div class="contact-left">
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px"
                                 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                                 id="nectar-svg-animation-instance-0" style="height: 64px; width: 64px;">
                                    <g>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                              d="M28,19.001A4,4 0,1,1 36,19.001A4,4 0,1,1 28,19.001"
                                              style="stroke-dasharray: 26, 28; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                              d="M45,21.023C44.968,13.276,39.181,7,32,7		s-13,6.276-13,14.023C19,31.046,31.979,47,31.979,47S45.043,31.046,45,21.023z"
                                              style="stroke-dasharray: 102, 104; stroke-dashoffset: 0;"></path>
                                    </g>
                                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                      d="M21,37L12,37L1,57L32,57L63,57L52,37L43,37"
                                      style="stroke-dasharray: 126, 128; stroke-dashoffset: 0;"></path>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">Адрес</div>
                                <p class="desc">СПб, Загородный пр., 18/2 (300 м от метро Владимирская, вход с ул.
                                    Разъезжая, 2) Время работы: 10:00 — 22:00</p>
                                <p class="desc">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/artwork.svg"
                                         alt="">
                                    Бесплатная парковка на закрытой территории (для пропуска на территорию сообщите нам
                                    марку и номер машины за сутки до записи)
                                </p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px"
                                 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                                 id="nectar-svg-animation-instance-1" style="height: 64px; width: 64px;">
                                    <g>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                              width="32" height="62" d="M16 1 L48 1 L48 63 L16 63 Z"
                                              style="stroke-dasharray: 188, 190; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                              d="M28,5L36,5"
                                              style="stroke-dasharray: 8, 10; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                              d="M16,51L48,51"
                                              style="stroke-dasharray: 32, 34; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                              d="M16,9L48,9"
                                              style="stroke-dasharray: 32, 34; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel"
                                              stroke-miterlimit="10" d="M30,57A2,2 0,1,1 34,57A2,2 0,1,1 30,57"
                                              style="stroke-dasharray: 13, 15; stroke-dashoffset: 0;"></path>
                                    </g>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">Телефоны</div>
                                <a href="tel:+79218784000">+7 (921) 878-40-00</a>
                                <a href="tel:+79218783000">+7 (921) 878-30-00</a>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                                 xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px"
                                 viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve"
                                 id="nectar-svg-animation-instance-2" style="height: 64px; width: 64px;">
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel"
                                          stroke-miterlimit="10" d="M23,20L30,27L	43,14"
                                          style="stroke-dasharray: 29, 31; stroke-dashoffset: 0;"></path>
                                <g>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                          d="M1,26L32,45.434L63,26"
                                          style="stroke-dasharray: 74, 76; stroke-dashoffset: 0;"></path>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                          d="M11.333,21.667L1,26L1,63L63,63L63,26L		63,26L52.667,21.667"
                                          style="stroke-dasharray: 159, 161; stroke-dashoffset: 0;"></path>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10"
                                          d="M11,32L11,1L53,1L53,32"
                                          style="stroke-dasharray: 104, 106; stroke-dashoffset: 0;"></path>
                                </g>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">E-mail</div>
                                <a href="mailto:yourface-cosmo@mail.ru">yourface-cosmo@mail.ru</a>
                            </div>
                        </div>
                        <a href="#" class="contact-btn">
                            Записаться
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                 fill="none">
                                <path d="M15.74 3.59283C16.0867 3.24622 16.0867 2.66852 15.74 2.33968L13.6603 0.259964C13.3315 -0.0866546 12.7538 -0.0866546 12.4072 0.259964L10.7718 1.8864L14.1047 5.21927L15.74 3.59283ZM0 12.6671V16H3.33287L13.1626 6.16137L9.82975 2.8285L0 12.6671Z"
                                      fill="white"/>
                            </svg>
                        </a>
                    </div>
                    <div class="contact-ratings">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/img/ya-rating.png" alt=""
                             class="ya-rating">
                        <div class="other-ratings">
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/2gis.png" alt="">
                                Отзывы на 2gis.ru
                            </a>
                            <a href="#">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/zoon.png" alt="">
                                Отзывы на Zoon
                            </a>
                        </div>
                    </div>
                </div>
                <div class="payment_terms">
                    <div class="payment-title">Обращаем Ваше внимание на информированное согласие на предоплату</div>
                    <p class="desc">Все записи на услуги длительностью более 1 часа осуществляются по предоплате. Это
                        позволяет нам эффективнее планировать рабочий график и избегать недоразумений. При отмене записи
                        в день визита более двух раз подряд дальнейшая запись возможна только по полной предоплате путём
                        внесения депозита, который равен сумме забронированной услуги. Внесённый депозит при оказании
                        услуги зачитывается в стоимость оказанной услуги. В случае отмены записи в день визита депозит
                        не возвращается.</p>
                    <a href="#" class="payment-btn">
                        ПОДРОБНЕЕ
                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="10" viewBox="0 0 13 10" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                  d="M6.17496 4.60711L4.687 2.97778H4.68538C4.59305 2.87677 4.5782 2.74163 4.64702 2.6287C4.71583 2.51578 4.8565 2.44444 5.01038 2.44444H5.55204C5.62683 2.44444 5.68746 2.3947 5.68746 2.33333V0.666666C5.68746 0.298477 6.05123 0 6.49996 0C6.94869 0 7.31246 0.298477 7.31246 0.666666V2.33333C7.31246 2.36303 7.32695 2.3915 7.3527 2.41237C7.37844 2.43325 7.41331 2.4448 7.4495 2.44444H7.99117C8.14523 2.4441 8.28623 2.51539 8.35513 2.62846C8.42403 2.74152 8.40894 2.87685 8.31617 2.97778L6.82496 4.60711C6.74824 4.69104 6.62783 4.74044 6.49996 4.74044C6.37209 4.74044 6.25168 4.69104 6.17496 4.60711ZM11.3306 4.01146L12.9372 6.45591C12.9754 6.52189 12.9967 6.59358 13 6.66657V9.33324C13 9.70143 12.6362 9.9999 12.1875 9.9999H0.8125C0.363769 9.9999 0 9.70143 0 9.33324V6.66657C0.00624283 6.5935 0.0286351 6.52196 0.0660833 6.45546L1.65858 4.01102C1.83507 3.73339 2.18373 3.55823 2.56533 3.55546H3.52083C3.81999 3.55546 4.0625 3.75445 4.0625 3.99991C4.0625 4.24537 3.81999 4.44435 3.52083 4.44435H2.6455C2.59522 4.44443 2.54912 4.46736 2.52579 4.50391L1.39696 6.28168C1.37499 6.3161 1.37652 6.35742 1.40099 6.39067C1.42546 6.42393 1.46932 6.44428 1.51667 6.44435H3.52083C3.96956 6.44435 4.33333 6.74283 4.33333 7.11102C4.33333 7.47921 4.6971 7.77768 5.14583 7.77768H7.85417C8.3029 7.77768 8.66667 7.47921 8.66667 7.11102C8.66667 6.93421 8.75227 6.76464 8.90464 6.63961C9.05702 6.51459 9.26368 6.44435 9.47917 6.44435H11.4714C11.5191 6.44437 11.5634 6.42378 11.5878 6.39014C11.6122 6.3565 11.6133 6.31479 11.5906 6.28035L10.4157 4.50257C10.392 4.46668 10.3463 4.44433 10.2965 4.44435H9.20833C8.90918 4.44435 8.66667 4.24537 8.66667 3.99991C8.66667 3.75445 8.90918 3.55546 9.20833 3.55546H10.4217C10.8039 3.55835 11.1532 3.73359 11.3306 4.01146Z"
                                  fill="white"/>
                        </svg>
                    </a>
                </div>
                <div class="newpages">
                    <a href="#">Hydrafacial</a>
                    <a href="#">Антицеллюлитный массаж</a>
                    <a href="#">Биоревитализация</a>
                    <a href="#">Ботулинотерапия</a>
                    <a href="#">Контурная пластика</a>
                    <a href="#">Лазерный карбоновый пилинг</a>
                    <a href="#">Лечение пигментации на лице</a>
                    <a href="#">Лечение постакне</a>
                    <a href="#">Лечение растяжек на коже</a>
                    <a href="#">Мезотерапия</a>
                    <a href="#">Плазмотерапия</a>
                    <a href="#">РФ-лифтинг</a>
                    <a href="#">Увеличение губ</a>
                    <a href="#">Удаление пигментации лазером</a>
                    <a href="#">Удаление родинок</a>
                    <a href="#">Удаление сосудов на лице</a>
                    <a href="#">Фотоомоложение лица</a>
                    <a href="#">Чистка лица</a>
                    <a href="#">Шлифовка кожи</a>
                </div>
                <p class="desc">Не является публичной офертой (п. 2 ст. 437 ГК РФ).</p>
                <p class="desc">Имеются противопоказания. Проконсультируйтесь со специалистом.</p>
            </div>
        </section>
    </main>

<?php
get_footer();