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

// Results and Advantages
$results_advantages_hidden = get_field('results_advantages_hidden');
$results_mini = get_field('results_mini');
$advantages_mini = get_field('advantages_mini');

//Procedure
$procedure_hidden = get_field('procedure_hidden');
$procedure_title = get_field('procedure_title');
$procedure_image = get_field('procedure_image');
$procedure = get_field('procedure');

// Why choose us?
$select_reasons_hidden = get_field('select_reasons_hidden');
$select_reasons_title = get_field('select_reasons_title');
$select_reasons_type = get_field('select_reasons_type');
$select_reasons = get_field('select_reasons');

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

// Equipment
$equipment_hidden = get_field('equipment_hidden');
$equipment = get_field('equipment');

// Discount
$discount_hidden = get_field('discount_hidden');
$discount = get_field('discount');

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
                                <li><a href="/services">Услуги</a></li>
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

                <?php
                if ($select_reasons_hidden !== 'Да') {

                    // Repeaterda kamida 1 ta element borligini tekshirish
                    $has_rows = false;
                    if (function_exists('have_rows') && have_rows('select_reasons')) {
                        $has_rows = true;
                        $mode = 'have_rows';
                    } elseif (is_array($select_reasons) && !empty($select_reasons)) {
                        $has_rows = true;
                        $mode = 'array';
                    }

                    if ($has_rows): ?>
                        <div class="service-row">
                            <div class="service-left">
                                <div class="sectitle">
                                    <?php echo esc_html($select_reasons_title ?: 'Почему выбирают нас?'); ?>
                                </div>

                                <?php if ($select_reasons_type === 'Цифровое'): ?>
                                    <!-- Raqamli variant -->
                                    <div class="why-block">
                                        <?php
                                        $i = 0;

                                        if ($mode === 'have_rows'):
                                            while (have_rows('select_reasons')): the_row();
                                                $i++;
                                                $title = get_sub_field('title');
                                                $text = get_sub_field('text');
                                                // Rasm bu variantda majburiy emas
                                                $num = str_pad((string)$i, 2, '0', STR_PAD_LEFT);
                                                ?>
                                                <div class="choose-item">
                                                    <div class="choose-num"><?php echo esc_html($num); ?></div>
                                                    <div>
                                                        <?php if (!empty($title)): ?>
                                                            <div class="gallery-title"><?php echo esc_html($title); ?></div>
                                                        <?php endif; ?>
                                                        <?php if (!empty($text)): ?>
                                                            <p class="desc"><?php echo esc_html($text); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php endwhile;

                                        else:
                                            foreach ($select_reasons as $row) {
                                                $i++;
                                                $title = $row['title'] ?? '';
                                                $text = $row['text'] ?? '';
                                                $num = str_pad((string)$i, 2, '0', STR_PAD_LEFT);
                                                ?>
                                                <div class="choose-item">
                                                    <div class="choose-num"><?php echo esc_html($num); ?></div>
                                                    <div>
                                                        <?php if (!empty($title)): ?>
                                                            <div class="gallery-title"><?php echo esc_html($title); ?></div>
                                                        <?php endif; ?>
                                                        <?php if (!empty($text)): ?>
                                                            <p class="desc"><?php echo esc_html($text); ?></p>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            <?php }
                                        endif; ?>
                                    </div>

                                <?php else: ?>
                                    <!-- Rasmli variant ('Изображение') -->
                                    <div class="why-grid">
                                        <?php
                                        if ($mode === 'have_rows'):
                                            while (have_rows('select_reasons')): the_row();
                                                $title = get_sub_field('title');
                                                $text = get_sub_field('text');
                                                $image = get_sub_field('image');
                                                ?>
                                                <div class="why-item">
                                                    <?php if (!empty($image['url'])): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>"
                                                             alt="<?php echo esc_attr($title ?: ''); ?>">
                                                    <?php endif; ?>

                                                    <?php if (!empty($title)): ?>
                                                        <div class="gallery-title"><?php echo esc_html($title); ?></div>
                                                    <?php endif; ?>
                                                    <?php if (!empty($text)): ?>
                                                        <p class="desc"><?php echo esc_html($text); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php endwhile;

                                        else:
                                            foreach ($select_reasons as $row) {
                                                $title = $row['title'] ?? '';
                                                $text = $row['text'] ?? '';
                                                $image = $row['image'] ?? null;
                                                ?>
                                                <div class="why-item">
                                                    <?php if (is_array($image) && !empty($image['url'])): ?>
                                                        <img src="<?php echo esc_url($image['url']); ?>"
                                                             alt="<?php echo esc_attr($title ?: ''); ?>">
                                                    <?php endif; ?>

                                                    <?php if (!empty($title)): ?>
                                                        <div class="gallery-title"><?php echo esc_html($title); ?></div>
                                                    <?php endif; ?>
                                                    <?php if (!empty($text)): ?>
                                                        <p class="desc"><?php echo esc_html($text); ?></p>
                                                    <?php endif; ?>
                                                </div>
                                            <?php }
                                        endif; ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php
                    endif;
                }
                ?>

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

                <?php if ($results_advantages_hidden !== "Да"): ?>
                    <div class="service-row service-row__half">
                        <?php if (!empty($results_mini)): ?>
                            <div class="service-left">
                                <h2 class="wow fadeInUp sectitle">Результаты</h2>
                                <div class="result-col">
                                    <?php foreach ($results_mini as $item): ?>
                                        <div class="result-item">
                                            <img src="<?php echo $item['image']['url'] ?>"
                                                 alt="<?php echo $item['image']['alt'] ?>">
                                            <div class="result-title"><?= $item['title'] ?></div>
                                            <p class="desc"><?= $item['text'] ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
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
                        <?php endif; ?>

                        <?php if (!empty($advantages_mini)): ?>
                            <div class="<?php if (!empty($results_mini)): ?>service-right<?php else: ?>service-left<?php endif; ?>">
                                <h2 class="wow fadeInUp sectitle">Преимущества</h2>
                                <div class="result-col">
                                    <?php foreach ($advantages_mini as $item): ?>
                                        <div class="result-item">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/icons/result4.svg"
                                                 alt="">
                                            <div class="result-title"><?= $item['title'] ?></div>
                                            <p class="desc"><?= $item['text'] ?></p>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
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
                        <?php endif; ?>
                    </div>
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

                <?php if ($equipment_hidden !== "Да"):
                    $equipment_id = $equipment->ID;
                    $equipment_img = get_the_post_thumbnail_url($equipment_id, 'large');
                    $equipment_title = get_the_title($equipment_id);
                    $short_description = get_field('short_description', $equipment_id);
                    $description = get_field('description', $equipment_id);
                    ?>
                    <div class="service-equip">
                        <div class="service-right">
                            <?php if ($equipment_img): ?>
                                <img src="<?php echo esc_url($equipment_img); ?>"
                                     alt="<?php echo esc_attr($equipment_title); ?>">
                            <?php endif; ?>
                        </div>
                        <div class="service-left">
                            <div class="sectitle"><?php echo esc_html($equipment_title); ?></div>
                            <?php if ($short_description): ?>
                                <div class="caption"><?php echo esc_html($short_description); ?></div>
                            <?php endif; ?>
                            <?php if ($description): ?>
                                <p class="desc"><?php echo esc_html($description); ?></p>
                            <?php endif; ?>
                            <a href="<?php echo get_permalink($equipment_id); ?>" class="btn-main">Подробнее</a>
                        </div>
                    </div>
                <?php endif; ?>
                <?php
                // Agar yashirish belgilanmagan va obyekt bor bo'lsa
                if (!$discount_hidden && $discount) {

                    // Post Object bo'lsa ham, ID bo'lsa ham ishlashi uchun normalize qilamiz
                    $discount_post = is_object($discount) ? $discount : get_post((int)$discount);
                    if ($discount_post && $discount_post instanceof WP_Post) {

                        // Contextni shu postga ko'chiramiz (get_field uchun)
                        $prev_post = $post ?? null;
                        $post = $discount_post;
                        setup_postdata($post);

                        // ACF maydonlarini discount postidan olamiz
                        $image = get_field('image');      // array: ['url'=>...]
                        $text = get_field('text');       // string
                        $titre = get_field('titre');      // string (qo'shimcha / muddat / vaqt kabi)
                        $price = (float)get_field('price');     // original narx
                        $percent = (int)get_field('discount');  // foiz, 0-100

                        // Yangi narxni hisoblash
                        $new_price = ($price > 0 && $percent > 0)
                            ? round($price - ($price * $percent / 100))
                            : 0;

                        // Permalink (agar aksiyaga bosilganda alohida sahifaga olib borish kerak bo'lsa)
                        $discount_link = get_permalink($discount_post);

                        // Narxlarni chiroyli formatlash (WP i18n)
                        $price_fmt = $price > 0 ? number_format_i18n($price, 0) : '';
                        $new_price_fmt = $new_price > 0 ? number_format_i18n($new_price, 0) : '';

                        ?>
                        <div class="service-sale">
                            <a href="<?php echo esc_url($discount_link ?: '#'); ?>" class="service-sale__img">
                                <?php if (!empty($image['url'])): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>"
                                         alt="<?php echo esc_attr(get_the_title($discount_post)); ?>">
                                <?php else: ?>
                                    <!-- fallback rasm (xohlasangiz olib tashlashingiz mumkin) -->
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/sale/sale2.jpg'); ?>"
                                         alt="">
                                <?php endif; ?>
                            </a>

                            <div class="service-sale__right">
                                <div class="service-sale__info"><?php echo esc_html__('АКЦИЯ!', 'textdomain'); ?></div>

                                <div class="service-sale__title">
                                    <?php echo esc_html(get_the_title($discount_post)); ?>
                                </div>

                                <?php if (!empty($text)): ?>
                                    <p class="service-sale__desc">
                                        <?php echo esc_html($text); ?>
                                    </p>
                                <?php endif; ?>

                                <?php if (!empty($titre)): ?>
                                    <div class="service-sale__time">
                                        <?php echo esc_html($titre); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($price_fmt): ?>
                                    <div class="sale-price">
                                        <?php echo esc_html__('Всего', 'textdomain'); ?>
                                        <?php if ($new_price_fmt): ?>
                                            <span><?php echo esc_html($price_fmt); ?></span> <?php echo esc_html($new_price_fmt); ?> руб.
                                        <?php else: ?>
                                            <span><?php echo esc_html($price_fmt); ?></span>
                                        <?php endif; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($percent > 0): ?>
                                    <div class="service-sale__count">-<?php echo esc_html($percent); ?>%</div>
                                <?php endif; ?>

                                <a href="<?php echo esc_url($discount_link ?: '#'); ?>" class="sale-btn">
                                    <?php echo esc_html__('Записаться', 'textdomain'); ?>
                                </a>
                            </div>
                        </div>
                        <?php

                        // Post contextni qaytarib qo'yamiz
                        wp_reset_postdata();
                        $post = $prev_post;
                    }
                }
                ?>

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

        <?php get_template_part('template-parts/section/section', 'reviews'); ?>

        <?php get_template_part('template-parts/section/section', 'form'); ?>

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

        <?php get_template_part('template-parts/section/section', 'contacts'); ?>
    </main>

<?php
get_footer();