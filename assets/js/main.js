new WOW().init();
document.addEventListener('DOMContentLoaded', function () {

    if (document.querySelectorAll('[data-fancybox]').length) {
        Fancybox.bind('[data-fancybox]', {
        });
    }
    
    window.addEventListener('scroll', function () {
        const header = document.querySelector('header');
        const to_top = document.querySelector('.to_top');
        if (window.scrollY > 10) {
            header.classList.add('header-small');
        } else {
            header.classList.remove('header-small');
        }
        if (window.scrollY > 200) {
            to_top.classList.add('is-active');
        } else {
            to_top.classList.remove('is-active');
        }
    });

    const telInput = document.querySelectorAll('input[type="tel"]');

    if (telInput.length) {
        telInput.forEach(input => {
            new IMask(input, {
                mask: '+{7} (000) 000-00-00'
            });
        });
    }


    const heroSwiperEl = document.querySelector('.hero-swiper.swiper');

    if (heroSwiperEl) {
        let previousIndex = 0;

        const swiper = new Swiper(heroSwiperEl, {
            direction: 'vertical',
            loop: true,
            speed: 800,
            navigation: {
                nextEl: '.hero-next',
                prevEl: '.hero-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 7000,
                disableOnInteraction: false,
                pauseOnMouseEnter: true,
            },
            on: {
                slideChangeTransitionStart: function () {
                    updateProgressCircle();

                    // const currentIndex = swiper.realIndex;
                    // const isNext = currentIndex > previousIndex || (currentIndex === 0 && previousIndex === swiper.slides.length - 1);
                    // previousIndex = currentIndex;

                    // const activeSlide = swiper.slides[swiper.activeIndex];
                    // const title = activeSlide.querySelector('.hero-item__title');
                    // const desc = activeSlide.querySelector('.hero-item__desc');

                    // if (title && desc) {
                    //     title.classList.remove('animated', 'bounceInUp', 'bounceInDown');
                    //     desc.classList.remove('animated2','bounceInUp', 'bounceInDown');

                    //     title.classList.add('animated', isNext ? 'bounceInUp' : 'bounceInDown');
                    //     desc.classList.add('animated2', isNext ? 'bounceInUp' : 'bounceInDown');
                    // }
                },
                autoplayTimeLeft(swiper, time, progress) {
                    updateProgressCircle(progress);
                }
            }
        });

        function updateProgressCircle(progress = 1) {
            const circle = document.querySelector('.circle-origin');
            if (!circle) return;
            const radius = circle.r.baseVal.value;
            const circumference = 2 * Math.PI * radius;
            circle.style.strokeDasharray = `${circumference}`;
            circle.style.strokeDashoffset = `${circumference * progress}`;
        }
    }

    const saleSwiper = new Swiper('.sale-swiper', {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.sale-next',
            prevEl: '.sale-prev',
        },
        pagination: {
            el: '.sale-pagination',
            type: 'fraction',
        },
        speed: 600,
        breakpoints: {
            0: {
                slidesPerView: 1,
                slidesPerGroup: 1,
            },
            680: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            1000: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
        },
    });

    const reviewSwiper = new Swiper('.review-swiper', {
        slidesPerView: 'auto',
        spaceBetween: 35,
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.review-gapination',
            clickable: true,
        },
        breakpoints: {
            0: {
                spaceBetween: 15,
            },
            680: {
                slidesPerView: 'auto',
                spaceBetween: 35,
            },
        },
    });

    document.querySelectorAll('.faq-head').forEach(head => {
        head.addEventListener('click', () => {
            const item = head.closest('.faq-item');
            const body = item.querySelector('.faq-body');

            const isOpen = item.classList.contains('is-open');

            if (isOpen) {
                item.classList.remove('is-open');
                body.style.height = '0px';
                return;
            }

            document.querySelectorAll('.faq-item.is-open').forEach(openItem => {
                openItem.classList.remove('is-open');
                openItem.querySelector('.faq-body').style.height = '0px';
            });

            if (!item.classList.contains('opened')) {
                item.classList.add('opened');
            }

            item.classList.add('is-open');
            body.style.height = body.scrollHeight + 20 + 'px';
        });
    });

    const partnersSwiper = new Swiper('.partnes-swiper', {
        slidesPerView: 5,
        slidesPerGroup: 5,
        centerSlides: true,
        spaceBetween: 50,
        loop: true,
        grabCursor: true,
        pagination: {
            el: '.partner-pagination',
            clickable: true,
        },
        autoplay: {
            delay: 7000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
        breakpoints: {
            0: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            680: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
            1000: {
                slidesPerView: 4,
                slidesPerGroup: 4,
            },
            1300: {
                slidesPerView: 5,
                slidesPerGroup: 5,
            },
        },
    });

    const toggle = document.getElementById('toggle-drop');

    if (toggle){
        toggle.addEventListener('click', () => {
            const target = toggle.previousElementSibling;
            const isOpen = toggle.classList.contains('active');
    
            if (isOpen) {
                target.style.height = '0px';
                toggle.classList.remove('active');
            } else {
                target.style.height = target.scrollHeight + 'px';
                toggle.classList.add('active');
            }
        });
    }


    const headerSearch = document.querySelector('.header-search');

    document.querySelectorAll('[data-target="header-search"]').forEach(trigger => {
        trigger.addEventListener('click', () => {
            headerSearch.classList.add('is-open');
        });
    });

    document.querySelectorAll('.search-clean').forEach(cleanBtn => {
        cleanBtn.addEventListener('click', () => {
            headerSearch.classList.remove('is-open');
            headerSearch.reset();
        });
    });


    document.querySelectorAll('.link-item__arr').forEach(el => {
        el.addEventListener('click', () => {
            const currentParent = el.closest('.link-item__parent');
            const isAlreadyOpen = currentParent.classList.contains('is-open');

            document.querySelectorAll('.link-item__parent.is-open').forEach(parent => {
                parent.classList.remove('is-open');
            });

            if (!isAlreadyOpen) {
                currentParent.classList.add('is-open');
            }
        });
    });

    const hamburger = document.querySelector('.hamburger');
    const headerRight = document.querySelector('.header_right');

    hamburger.addEventListener('click', () => {
        hamburger.classList.toggle('active');
        headerRight.classList.toggle('is-open');
    });

    const items = document.querySelectorAll('.to_contacts li');
    let current = 0;

    if (items.length > 0) {
    setInterval(() => {
        items.forEach(item => item.classList.remove('is-active'));

        items[current].classList.add('is-active');

        current = (current + 1) % items.length;
    }, 3000);
    }


    const toContacts = document.querySelector('.to_contacts');
    const modal = document.querySelector('.modal-contacts');

    if (toContacts && modal) {
        toContacts.addEventListener('click', (e) => {
            const clickedClose = e.target.closest('.to_contacts_close');
            if (!clickedClose) {
                toContacts.classList.add('is-active');
                modal.classList.add('is-active');
            }
        });

        const closeBtn = toContacts.querySelector('.to_contacts_close');
        if (closeBtn) {
            closeBtn.addEventListener('click', (e) => {
                toContacts.classList.remove('is-active');
                modal.classList.remove('is-active');
            });
        }
    }


    const galleries = document.querySelectorAll('.gallery-swiper');
    if (galleries.length) {
        galleries.forEach((swiperEl) => {
            new Swiper(swiperEl, {
                slidesPerView: 'auto',
                spaceBetween: 20,
                // centeredSlides: true,
                grabCursor: true,
                pagination: {
                    el: swiperEl.querySelector('.swiper-pagination'),
                    clickable: true,
                },
            });
        });
    }

    const serviceSwiperEl = document.querySelector(".service-swiper");

    if (serviceSwiperEl) {
        new Swiper(".service-swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            navigation: {
                nextEl: ".service-next",
                prevEl: ".service-prev"
            },
            pagination: {
                el: ".service-pagination",
                clickable: true
            }
        });
    }


    const modalTriggers = document.querySelectorAll('[data-modal]');
    const modalBack = document.querySelector('.modal-back');

    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', (e) => {
            e.preventDefault()
            const modalId = trigger.getAttribute('data-modal');
            const modal = document.querySelector(`.${modalId}`);

            if (modal) {
                modal.classList.add('is-open');
                modalBack.classList.add('is-open');
            }
        });
    });

    const closeModal = () => {
        document.querySelectorAll('.is-open').forEach(el => {
            el.classList.remove('is-open');
        });
    };

    document.addEventListener('click', e => {
        if (e.target.classList.contains('order-modal__close') ||
            e.target.classList.contains('modal-back')) {
            closeModal();
        }
    });

    document.querySelector('.to_top').addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
})