window.addEventListener('load', init);

function init() {
    /* Hero slider */
    const heroSlider = document.querySelector('.hero__slider');
    heroSlider && new Swiper(heroSlider, {
        slidesPerView: 1,
        spaceBetween: 36,
        loop: document.getElementsByClassName('hero__slider-slide').length > 1,
        pagination: {
            el: '.hero__pagination',
            clickable: true
        },
        navigation: {
            nextEl: '.hero__slider-next'
        },
        autoplay: {
            delay: 5000,
        },
    });

    /* Choose slider */
    const chooseSlider = document.querySelector('.choose__slider');
    const bp768 = window.matchMedia('(min-width: 768px)');
    let chooseSwiper;

    function enableChooseSlider() {
        chooseSwiper = new Swiper(chooseSlider, {
            slidesPerView: 'auto',
            spaceBetween: 16,
            navigation: {
                nextEl: '.choose__nav-next',
                prevEl: '.choose__nav-prev',
            },
            pagination: {
                el: '.choose__slider-pagination',
                clickable: true
            },
            breakpoints: {
                1025: {
                    spaceBetween: 40
                }
            }
        });
    }

    function switchChooseSlider(bp) {
        if (bp.matches) {
            return enableChooseSlider();
        } else {
            chooseSwiper !== undefined && chooseSwiper.destroy(true, true);
        }
    }

    chooseSlider && switchChooseSlider(bp768);
    chooseSlider && bp768.addEventListener('change', switchChooseSlider);

    /* Founders slider */
    const foundersSlider = document.querySelector('.founders__slider');
    foundersSlider && new Swiper(foundersSlider, {
        slidesPerView: 1,
        spaceBetween: 36,
        autoHeight: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true
        },
        loop: document.getElementsByClassName('founders__slider-item').length > 1,
        pagination: {
            el: '.founders__slider-pagination',
            clickable: true
        }
    });

    /* Contact form */
    const cForm = document.querySelectorAll('.project-form');
    const cSlider = document.querySelectorAll('.project__slider');

    if (cSlider) {
        cForm.forEach(function(form) {
            let currentOffset = 0;
            const move = form.querySelector('.js-contact-form');

            function moveForward(e) {
                e.preventDefault();
                currentOffset = currentOffset - 100;
                form.style.transform = 'translateX(' + currentOffset + '%)';
                setTimeout(function() {
                    form.querySelectorAll('input')[0].focus();
                }, 300);
            }

            move && move.addEventListener('click', moveForward);

            form.addEventListener('submit', e => {
                e.preventDefault();

                let redirectUrl = form.dataset.redirect;
                let data = new FormData(form);

                data.append('action', 'frontpage_contact_form')

                fetch(devObj.admin_ajax, {
                    credentials: 'include',
                    method: 'post',
                    cache: 'no-cache',
                    body: data,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        //'Content-Type': 'application/json',
                        //'Content-Type': 'multipart/form-data',
                        'Accept': 'application/json',
                    }
                })
                    .then(function(response) {
                        if (response.status === 200) {
                            return Promise.resolve(response)
                        } else {
                            return Promise.reject(response)
                        }
                    })
                    .then(function(response) {
                        return response.json();
                    })
                    .then(function(response) {
                        if (redirectUrl){
                            setTimeout(function(){
                                window.location.href = redirectUrl;
                            }, 1000);
                        }
                    })
                    .catch(function(response) {
                        console.log(response);
                    });

                return false;
            });
        });

        cSlider.forEach(function(slider) {
            const cInput = slider.querySelectorAll('.project-form__input');
            const cNext = slider.querySelectorAll('.js-contact-next');
            const cPrev = slider.querySelectorAll('.js-contact-prev');

            new Swiper(slider, {
                slidesPerView: 1,
                allowTouchMove: false,
                pagination: {
                    el: ".project__pagination",
                    type: "progressbar"
                },
                on: {
                    slideChange: function (swiper) {
                        const activeSlide = swiper.slides[swiper.activeIndex];
                        const activeSlideInputs = activeSlide.querySelectorAll('.project-form__input');

                        setTimeout(function() {
                            activeSlideInputs[0] && activeSlideInputs[0].focus();
                        }, 300);
                    },
                },
            });

            cNext.forEach(function(next) {
                next.addEventListener('click', function(e) {
                    const input = this.closest('.project__item').querySelector('.project-form__input');

                    if (null !== input) {
                        if (input.required && input.value !== '' && input.validity.valid) {
                            input.classList.contains('invalid') && input.classList.remove('invalid');
                            slider.swiper.slideNext();
                        } else {
                            !input.classList.contains('invalid') && input.classList.add('invalid');
                        }

                        if (!input.required) {
                            slider.swiper.slideNext();
                        }
                    } else {
                        slider.swiper.slideNext();
                    }
                });
            });

            cPrev.forEach(function(prev) {
                prev.addEventListener('click', function(e) {
                    slider.swiper.slidePrev();
                });
            });

            cInput.forEach(function(input) {
                const events = ['input', 'blur', 'keypress'];
                events.forEach(function(event) {
                    input.addEventListener(event, function(e) {

                        if (e.key === "Enter") e.preventDefault();

                        if (input.required && input.value !== '') {
                            input.classList.contains('invalid') && input.classList.remove('invalid');
                        } else {
                            !input.classList.contains('invalid') && input.classList.add('invalid');
                        }
                    });
                });
            });
        });
    }

    /* Tabs */
    function tabs() {
        const tabLinks = document.getElementsByClassName('tab-link');
        const tabPanels = document.getElementsByClassName('tab-panel');

        tabLinks && Array.from(tabLinks).forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const panelID = e.currentTarget.hash.replace('#', '');

                if (panelID) {
                    const targetPanel = document.getElementById(panelID);

                    for (let i = 0; i < tabPanels.length; i++) {
                        tabPanels[i].classList.remove('active');
                    }

                    for (let i = 0; i < tabLinks.length; i++) {
                        tabLinks[i].classList.remove('active');
                    }

                    !targetPanel.classList.contains('active') && targetPanel.classList.add('active');
                    !e.currentTarget.classList.contains('active') && e.currentTarget.classList.add('active');
                }
            });
        });
    }

    tabs();
}