<?php
/*
 * Template name: Контакты
 * */
get_header();
?>


    <main>
        <section class="contacts-section">
            <div class="container">

                <div class="contact-row">
                    <div class="contact-left">
                        <ul class="breadcrumbs wow fadeInUp">
                            <li><a href="<?php echo home_url(); ?>">Главная</a></li>
                            <li>»</li>
                            <li><a href="/o-nas">О нас</a></li>
                            <li>»</li>
                        </ul>
                        <h2 class="sectitle wow fadeInUp">контакты</h2>
                        <div class="caption wow fadeInUp">Свяжитесь с нами!</div>
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" id="nectar-svg-animation-instance-0" style="height: 64px; width: 64px;">
                                    <g>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M28,19.001A4,4 0,1,1 36,19.001A4,4 0,1,1 28,19.001" style="stroke-dasharray: 26, 28; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M45,21.023C44.968,13.276,39.181,7,32,7		s-13,6.276-13,14.023C19,31.046,31.979,47,31.979,47S45.043,31.046,45,21.023z" style="stroke-dasharray: 102, 104; stroke-dashoffset: 0;"></path>
                                    </g>
                                <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M21,37L12,37L1,57L32,57L63,57L52,37L43,37" style="stroke-dasharray: 126, 128; stroke-dashoffset: 0;"></path>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">Адрес</div>
                                <p class="desc"><?php echo esc_html(get_field('address', 'option')['text']) ?></p>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" id="nectar-svg-animation-instance-1" style="height: 64px; width: 64px;">
                                    <g>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" width="32" height="62" d="M16 1 L48 1 L48 63 L16 63 Z" style="stroke-dasharray: 188, 190; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M28,5L36,5" style="stroke-dasharray: 8, 10; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M16,51L48,51" style="stroke-dasharray: 32, 34; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M16,9L48,9" style="stroke-dasharray: 32, 34; stroke-dashoffset: 0;"></path>
                                        <path fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" d="M30,57A2,2 0,1,1 34,57A2,2 0,1,1 30,57" style="stroke-dasharray: 13, 15; stroke-dashoffset: 0;"></path>
                                    </g>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">Телефоны</div>
                                <?php
                                $phones = get_field('phones', 'option');
                                foreach ($phones as $phone):
                                    ?>
                                    <a href="<?php esc_html($phone['phone']) ?>"><?php echo esc_html($phone['phone']) ?></a>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <div class="contact-item">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="64px" height="64px" viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve" id="nectar-svg-animation-instance-2" style="height: 64px; width: 64px;">
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-linejoin="bevel" stroke-miterlimit="10" d="M23,20L30,27L	43,14" style="stroke-dasharray: 29, 31; stroke-dashoffset: 0;"></path>
                                <g>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M1,26L32,45.434L63,26" style="stroke-dasharray: 74, 76; stroke-dashoffset: 0;"></path>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11.333,21.667L1,26L1,63L63,63L63,26L		63,26L52.667,21.667" style="stroke-dasharray: 159, 161; stroke-dashoffset: 0;"></path>
                                    <path fill="none" stroke="#000000" stroke-width="2" stroke-miterlimit="10" d="M11,32L11,1L53,1L53,32" style="stroke-dasharray: 104, 106; stroke-dashoffset: 0;"></path>
                                </g>
                                </svg>
                            <div class="contact-item__right">
                                <div class="contact-title">E-mail</div>
                                <a href="mailto:<?php echo esc_html(get_field('email', 'option')) ?>"><?php echo esc_html(get_field('email', 'option')) ?></a>
                            </div>
                        </div>
                        <div class="footer-social">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16 0C20.345 9.90193e-07 20.8901 0.0188346 22.5967 0.0966797C24.2993 0.174379 25.4619 0.444422 26.4795 0.839844C27.5316 1.24867 28.4247 1.79609 29.3145 2.68555C30.2035 3.57501 30.7503 4.46754 31.1592 5.51953C31.5545 6.53719 31.8256 7.7004 31.9033 9.40332C31.981 11.1096 31.999 11.655 31.999 16C31.999 20.345 31.981 20.8901 31.9033 22.5967C31.8256 24.2992 31.5545 25.4621 31.1592 26.4795C30.7503 27.5317 30.2037 28.4249 29.3145 29.3145C28.4247 30.2039 27.5316 30.7503 26.4795 31.1592C25.4619 31.5546 24.2994 31.8256 22.5967 31.9033C20.8901 31.9812 20.345 31.999 16 31.999C11.6549 31.999 11.1096 31.9812 9.40332 31.9033C7.70026 31.8256 6.53685 31.5547 5.51953 31.1592C4.4676 30.7504 3.57517 30.2036 2.68555 29.3145C1.79623 28.4249 1.24869 27.5317 0.839844 26.4795C0.44457 25.4621 0.17438 24.2991 0.0966797 22.5967C0.0185502 20.8901 9.79676e-07 20.345 0 16C0 11.655 0.0185594 11.1096 0.0966797 9.40332C0.174361 7.70046 0.444502 6.53716 0.839844 5.51953C1.24869 4.46741 1.79623 3.57511 2.68555 2.68555C3.57528 1.79611 4.46748 1.24866 5.51953 0.839844C6.53683 0.444328 7.70031 0.174363 9.40332 0.0966797C11.1097 0.0188436 11.6548 0 16 0ZM16 2.88281C11.7283 2.88281 11.2219 2.89962 9.53516 2.97656C7.97487 3.04771 7.12682 3.30822 6.56348 3.52734C5.81695 3.81749 5.28422 4.16407 4.72461 4.72363C4.16478 5.28343 3.81769 5.81676 3.52734 6.56348C3.30818 7.12723 3.04777 7.97444 2.97656 9.53418C2.89975 11.2213 2.88281 11.7279 2.88281 16C2.88281 20.2717 2.89976 20.7778 2.97656 22.4648C3.04774 24.0245 3.30818 24.8718 3.52734 25.4355C3.8177 26.1824 4.16473 26.7156 4.72461 27.2754C5.28434 27.8352 5.81678 28.1824 6.56348 28.4727C7.12682 28.6919 7.97487 28.9523 9.53516 29.0234C11.2214 29.1004 11.7279 29.1162 16 29.1162C20.2722 29.1162 20.7779 29.1004 22.4648 29.0234C24.0244 28.9523 24.8716 28.6918 25.4355 28.4727C26.1823 28.1824 26.7155 27.8353 27.2754 27.2754C27.8352 26.7156 28.1827 26.1824 28.4727 25.4355C28.6918 24.8718 28.9523 24.0243 29.0234 22.4648C29.1002 20.7778 29.1172 20.2717 29.1172 16C29.1172 11.7279 29.1002 11.2213 29.0234 9.53418C28.9523 7.97444 28.6918 7.12723 28.4727 6.56348C28.1827 5.81667 27.8352 5.28348 27.2754 4.72363C26.7155 4.16392 26.1822 3.81754 25.4355 3.52734C24.8716 3.30824 24.0245 3.0477 22.4648 2.97656C20.7779 2.89961 20.2719 2.88281 16 2.88281ZM15.999 7.78418C20.5367 7.78418 24.2158 11.4624 24.2158 16C24.2157 20.5376 20.5366 24.2158 15.999 24.2158C11.4616 24.2156 7.78332 20.5375 7.7832 16C7.7832 11.4625 11.4615 7.78439 15.999 7.78418ZM16 10.667C13.0543 10.667 10.666 13.0545 10.666 16C10.6661 18.9455 13.0543 21.333 16 21.333C18.9449 21.3328 21.3329 18.9453 21.333 16C21.333 13.0546 18.945 10.6672 16 10.667ZM24.541 5.53906C25.6013 5.53918 26.4608 6.39879 26.4609 7.45898C26.4609 8.5193 25.6013 9.37879 24.541 9.37891C23.4808 9.37891 22.6211 8.51937 22.6211 7.45898C22.6212 6.39872 23.4808 5.53906 24.541 5.53906Z" fill="#C3AB7A"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="36" height="32" viewBox="0 0 36 32" fill="none">
                                    <path d="M13.5432 30.064L14.1025 21.114L29.4424 6.47245C30.1215 5.81654 29.3026 5.49917 28.4037 6.07044L9.46854 18.7443L1.27927 15.9937C-0.478431 15.4648 -0.498405 14.1741 1.67874 13.2431L33.577 0.209573C35.0351 -0.488653 36.4332 0.590424 35.874 2.96016L30.4411 30.064C30.0616 31.9895 28.963 32.4549 27.445 31.5663L19.1758 25.0918L15.201 29.1754C14.7416 29.662 14.3621 30.064 13.5432 30.064Z" fill="#C3AB7A"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                    <path d="M16.0049 -0.000976562C24.825 -0.00076335 31.9999 7.17644 32 15.999C32 24.821 24.8251 31.9988 16.0049 31.999C12.7513 31.999 9.73254 31.0298 7.20312 29.3555L1.05273 31.3213L3.04688 25.376C1.12883 22.7424 0.000102597 19.4976 0 15.999C0 7.17615 7.1747 -0.000926258 15.9951 -0.000976562H16.0049ZM9.97656 7.31738C9.36528 7.31747 8.72634 7.49631 8.34082 7.89062L8.2998 7.93262C7.80646 8.43362 6.70422 9.55342 6.7041 11.7842C6.7041 14.0122 8.28061 16.1685 8.58008 16.5781L8.60352 16.6104L8.70117 16.749C9.29555 17.6109 12.2143 21.8424 16.5684 23.6465C20.2446 25.1699 21.3361 25.0286 22.1729 24.8506C23.3952 24.5871 24.9288 23.6839 25.3145 22.5928C25.6998 21.5022 25.6998 20.5711 25.5869 20.373C25.497 20.2154 25.2809 20.1116 24.959 19.957L24.6934 19.8271C24.2236 19.592 21.9395 18.4639 21.5059 18.3125C21.0825 18.1527 20.6779 18.2096 20.3584 18.6611L20.1602 18.9395C19.7789 19.4739 19.4122 19.9875 19.1074 20.3164C18.8254 20.617 18.3646 20.6548 17.9795 20.4951L17.833 20.4346C17.2214 20.1871 15.8671 19.6394 14.2275 18.1807C12.8452 16.9487 11.9044 15.4157 11.6318 14.9551C11.3644 14.4939 11.5949 14.2229 11.8076 13.9727L11.8203 13.958C11.9542 13.7921 12.0847 13.6532 12.2158 13.5146C12.315 13.4096 12.4144 13.3045 12.5156 13.1865L12.5645 13.1299C12.7697 12.8923 12.8935 12.7501 13.0332 12.4531C13.1931 12.1425 13.0796 11.8222 12.9668 11.5869C12.8821 11.4099 12.3397 10.0943 11.9092 9.0498L11.5283 8.12598C11.2181 7.3828 10.9827 7.35475 10.5127 7.33496C10.3528 7.32583 10.1741 7.31738 9.97656 7.31738Z" fill="#C3AB7A"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="contact-ratings">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A812dfaf36de428abb8adc5bc791aa92bb84924321782d473f188e9d1b21ce79c&amp;source=constructor" width="100%" height="600" frameborder="0"></iframe>
                        <img src="src/img/yaTaxi.png" alt="">
                    </div>
                </div>
            </div>
        </section>

        <?php get_template_part('template-parts/section/section', 'form'); ?>
    </main>

<?php
get_footer();