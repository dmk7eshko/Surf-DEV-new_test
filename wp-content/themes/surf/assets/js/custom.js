function init() {
  // Career page remove desktop fixed header
  const bp1025 = window.matchMedia('(min-width: 1025px)');
  const body = document.body;
  const header = document.querySelector('header');

  // function handleCheckCareerPage(bp) {
  //     if (body.classList.contains('landing-career')) {
  //         if (bp.matches) {
  //             body.classList.remove('padding');
  //             header.classList.remove('sticky-head');
  //         } else {
  //             body.classList.add('padding');
  //             header.classList.add('sticky-head');
  //         }
  //     }
  // }
  //
  // handleCheckCareerPage(bp1025);
  // bp1025.addEventListener('change', handleCheckCareerPage);

  // Home clients slider
  const clientsSlider = document.querySelector('.js-clients-slider');
  const clientsSliderSlides = document.querySelectorAll('.js-clients-slide');
  const bp768 = window.matchMedia('(min-width: 768px)');
  const bp992 = window.matchMedia('(min-width: 992px)');
  let cSlider;
  let initSwiper = true;

  function checkClientsSlider(bp) {
    if (!clientsSlider.classList.contains('clients-slider-inner--narrow')) {
      if (bp.matches) {
        initSwiper = true;
        cSlider = new Swiper(clientsSlider, {
          slidesPerView: 'auto',
          // simulateTouch: false,
          // allowTouchMove: false,
          speed: 5000,
          autoplay: (clientsSliderSlides.length <= 4 ? false : {
            delay: 0,
            disableOnInteraction: false,
          }),
          loop: clientsSliderSlides.length > 4,
          loopedSlides: (clientsSliderSlides.length > 4 ? 8 : 0),
        });
      } else {
        if (cSlider !== undefined) cSlider.destroy(true, true);
        initSwiper = false;
      }
    } else {
      cSlider = new Swiper(clientsSlider, {
        slidesPerView: 'auto',
        speed: 5000,
        autoplay: (clientsSliderSlides.length <= 4 ? false : {
          delay: 0,
          disableOnInteraction: false,
        }),
        loop: clientsSliderSlides.length > 4,
        loopedSlides: (clientsSliderSlides.length > 4 ? 8 : 0),
      });
    }
  }

  clientsSlider && checkClientsSlider(bp768);
  bp768.onchange = clientsSlider && checkClientsSlider;


  // Reviews
  const reviews = document.querySelector('.js-reviews');
  const reviewsSlides = document.querySelectorAll('.review');

  function truncateText(str, num) {
    if (str.length <= num) {
      return str
    }
    return str.slice(0, num) + '...'
  }

  function spoilerText() {
    const moreText = navigator.language === 'ru' ? 'Читать полностью' : 'Read more';
    const lessText = navigator.language === 'ru' ? 'Свернуть' : 'Collapse';
    const reviewsTexts = document.querySelectorAll('.review.with-spoiler .review__text');
    reviewsTexts && [...reviewsTexts].forEach(function (text) {
      if (text.textContent.length > 215) {
        let len = window.innerWidth > 768 ? 210 : 220;
        const fullText = text.textContent;
        text.textContent = truncateText(text.textContent, len);

        window.onresize = function () {
          text.textContent = truncateText(text.textContent, len);
        }

        const moreLink = document.createElement('a');
        moreLink.href = '#';
        moreLink.className = 'review__text-more';
        moreLink.innerText = ' ' + moreText;

        text.append(moreLink);

        text.querySelector('.review__text-more').addEventListener('click', function (e) {
          e.preventDefault();
          this.textContent = this.textContent === ' ' + moreText ? ' ' + lessText : ' ' + moreText;
          text.firstChild.textContent = text.firstChild.textContent !== fullText ? fullText : truncateText(text.textContent, len);
        });
      }
    });
  }

  reviews && new Swiper(reviews, {
    slidesPerView: reviews.classList.contains('reviews__slider--full') ? 'auto' : 1,
    loop: reviewsSlides.length > 1 && !reviews.classList.contains('reviews__slider--full'),
    spaceBetween: 16,
    navigation: {
      nextEl: '.js-reviews-next',
      prevEl: '.js-reviews-prev',
    },
    breakpoints: {
      576: {
        slidesPerView: reviews.classList.contains('reviews__slider--full') ? 2 : 1
      },
      768: {
        slidesPerView: reviewsSlides.length > 1 ? 2 : 1,
        spaceBetween: reviews.classList.contains('reviews__slider--full') ? 20 : 56
      },
      992: {
        slidesPerView: reviewsSlides.length > 1 ? 2 : 1,
        spaceBetween: reviews.classList.contains('reviews__slider--full') ? 20 : 125
      }
    },
    on: {
      init: spoilerText
    }
  });

  // Achievements
  const achievements = document.querySelectorAll('.js-achievements');

  achievements && achievements.forEach(function (el) {
    new Swiper(el, {
      slidesPerView: (el.classList.contains('achievements-slider--cases') ? 'auto' : 2),
      spaceBetween: (el.classList.contains('achievements-slider--cases') ? 16 : 0),
      loop: true,
      autoplay: {
        enabled: false
      },
      navigation: {
        nextEl: '.js-achievements-next',
        prevEl: '.js-achievements-prev',
      },
      breakpoints: {
        768: {
          slidesPerView: 'auto',
          spaceBetween: 20,
          speed: 8000,
          autoplay: {
            enabled: true,
            delay: 0,
            disableOnInteraction: false,
          },
        }
      }
    });
  });

  // Form closer
  const formCloser = document.querySelector('.js-form-closer a');

  formCloser && formCloser.addEventListener('click', function (e) {
    e.preventDefault();
    document.referrer !== '' ? history.back() : location.href = '/';
  });

  // Form ajax
  $('#contact').submit(function (e) {
    e.preventDefault();

    const ru = 'ru-RU';
    const en = 'en-US';
    const lang = document.documentElement.lang;

    if (lang === en) {
      return false;
    }

    var phone = $(this).find("#phone");
    var msglen = 10;
    var check = 1;
    console.log("crm_pipedrive")
    // let actionType = $(this).attr('data-type') === 'discuss' ? 'send_bid' : 'career_form';
    let actionType = $(this).attr('data-type') === 'discuss' ? 'crm_pipedrive' : 'career_form';
    let refs = $(this).find("#reffer").val();
    refs = refs ? refs : window.location.pathname;

    if ($(this).find('#confirm').is(':checked')) {
      $(this).find('.contact-form-input-checkbox').removeClass('error')
    } else {
      check = 2;
      $(this).find('.contact-form-input-checkbox').addClass('error')
    }

    /*
    if (msglen < 1) {
        phone.addClass("error");
    } else {
        phone.removeClass("error");
    }
    */

    if (check === 1) {
      $(this).find('.sendform').replaceWith("<em id='sending' style='text-align:center;'>sending...</em>");
      $('#sending').css('display', 'none');

      var formData = new FormData($(this)[0]);

      formData.append('action', actionType);

      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        contentType: false,
        enctype: 'multipart/form-data',
        async: false,
        cache: false,
        data: formData,
        processData: false,
        success: function (data) {
          jQuery("#sending").css("display", "none");
          formData.set("action", "send_bid");

          let clearResult = data[data.length-1]==="0"?data.slice(0, -1):data
          const resultObject = JSON.parse(clearResult)
          const leadId = resultObject?.leadId;
          if (leadId) {
            formData.set("leadId", leadId);
          }

          jQuery.ajax({
            type: "POST",
            url: "/wp-admin/admin-ajax.php",
            contentType: false,
            enctype: "multipart/form-data",
            async: false,
            cache: false,
            data: formData,
            processData: false,
            success: function (data) {
              window.location.replace(window.location.href + "?form=succes");
            },
          });
        },
      });
    }

    return false;
  });

  // File upload
  const fileUpload = document.querySelectorAll('[type="file"]');
  const dropZones = document.querySelectorAll('.contact-form__upload');

  function simulateClick() {
    // this.children[1].dispatchEvent(new MouseEvent('click'));
    this.nextElementSibling.dispatchEvent(new MouseEvent('click'));
  }

  function dragenter(e) {
    e.stopPropagation();
    e.preventDefault();
  }

  function dragover(e) {
    e.stopPropagation();
    e.preventDefault();
    e.dataTransfer.dropEffect = 'copy';
  }

  function drop(e) {
    e.stopPropagation();
    e.preventDefault();

    const dt = e.dataTransfer;
    const files = dt.files;

    this.children[1].files = files;
    this.children[1].dispatchEvent(new Event('change'));
  }

  dropZones && dropZones.forEach(function (dropzone) {
    dropzone.addEventListener('dragenter', dragenter, false);
    dropzone.addEventListener('dragover', dragover, false);
    dropzone.addEventListener('drop', drop, false);
    dropzone.children[0].addEventListener('click', simulateClick);
  });

  function loopFiles(arr, counter, list, files) {
    if (arr.length > 1) {
      counter.textContent = '+' + (arr.length - 1);
      list.innerHTML = '';
      for (let i = 0; i < arr.length; i++) {
        if (arr[i] !== arr[0]) {
          const fileListItem = document.createElement('li');
          fileListItem.innerHTML = `
            <button type="button" class="contact-form__upload-delete">
                <img src="/wp-content/themes/surf/assets/img/closer.svg" alt="">
            </button>
            <span>${arr[i].name}</span>
          `;
          list.append(fileListItem);
        }
      }
      files.style.display = 'block';
    } else {
      list.innerHTML = '';
      list.classList.contains('active') && list.classList.remove('active');
      files.style.display = 'none';
      files.children[0].classList.remove('active');
    }
  }

  fileUpload && fileUpload.forEach(function (el) {
    // const dt = new _DataTransfer();
    const uploadBlock = el.parentElement;
    const result = uploadBlock.querySelector('.contact-form__upload-result');
    const filename = result.querySelector('span');
    const files = uploadBlock.querySelector('.contact-form__upload-files');
    const counterBtn = files.children[0];
    const filesList = uploadBlock.querySelector('.contact-form__upload-list');
    const counter = uploadBlock.querySelector('.contact-form__upload-counter');
    const choosen = [];
    const BYTES_IN_MB = 1048576;

    if (el.files.length === 0) {
      result.style.display = 'none';
    } else {
      result.style.display = 'flex';
    }

    el.addEventListener('change', function () {
      for (let i = 0; i < this.files.length; i++) {
        let file = this.files[i];
        if (i < 5 && choosen.find(el => el.name === file.name) === undefined) {
          if (file.size < 60 * BYTES_IN_MB) {
            choosen.push(file);
          } else {
            alert('File size can\'t be more than 60 Mb');
            return false;
          }
        }
      }

      if (choosen.length > 0) {
        uploadBlock.classList.add('non-empty');
      } else {
        uploadBlock.classList.remove('non-empty');
      }

      let size = choosen.reduce(function (sum, current) {
        return sum + current.size;
      }, 0);

      if (size >= 200 * BYTES_IN_MB) {
        alert('All files can\'t be more than 200 Mb');
        return false;
      }

      loopFiles(choosen, counterBtn, filesList, files);
      if (choosen[0] !== undefined) {
        const del = document.createElement('button');
        del.type = 'button';
        del.className = 'contact-form__upload-delete'
        del.innerHTML = '<img src="/wp-content/themes/surf/assets/img/closer-white.svg" alt="">';
        result.children[0].tagName !== 'BUTTON' && result.prepend(del);
        filename.textContent = choosen[0].name;
      }
      result.style.display = 'flex';

      if (el.files.length === 0) {
        result.parentElement.classList.remove('visible');
      } else {
        result.parentElement.classList.add('visible');
      }

      console.log('Output array: ', choosen);
    });

    document.addEventListener('click', function (e) {
      let remove = e.target.closest('.contact-form__upload-delete');
      if (!remove) return;
      if (!document.contains(remove)) return;
      const fileName = remove.nextElementSibling.textContent;
      for (let i = 0; i < choosen.length; i++) {
        if (fileName === choosen[i].name) {
          choosen.splice(i, 1)
        }
      }

      loopFiles(choosen, counterBtn, filesList, files);

      if (choosen[0] !== undefined) {
        filename.textContent = choosen[0].name;
      } else {
        filename.textContent = '';
      }
      if (choosen.length <= 1) {
        files.style.display = 'none';
        filesList.classList.contains('active') && filesList.classList.remove('active');
      }
      if (choosen.length === 0) {
        uploadBlock.classList.remove('non-empty');
      }
      if (remove.parentElement !== result) {
        remove.parentElement.remove();
      } else {
        if (choosen.length === 0) {
          result.style.display = 'none';
          result.parentElement.classList.remove('visible');
        } else {
          result.style.display = 'flex';
          result.parentElement.classList.add('visible');
        }
      }
      counterBtn.textContent = '+' + (choosen.length - 1);
    });

    counter.addEventListener('click', function (e) {
      e.preventDefault()
      this.classList.toggle('active');
      filesList.classList.toggle('active');
    });

    // Click outside list
    document.addEventListener('click', function (e) {
      //e.preventDefault();
      //e.stopPropagation();

      if (
        !counter.contains(e.target) &&
        !filesList.contains(e.target) &&
        !result.contains(e.target) &&
        !e.target.closest('.contact-form__upload-delete')
      ) {
        counter.classList.contains('active') && counter.classList.remove('active');
        filesList.classList.contains('active') && filesList.classList.remove('active');
      }
    });
  });

  // Anchor scroll
  const anchors = document.getElementsByClassName('js-anchor');
  anchors && [...anchors].forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const id = $(this).attr('href'),
        top = $(id).offset().top;
      // top = $(id).offset().top - $('header').height() - 110;

      $('body,html').animate({ scrollTop: top }, 800);
    });
  });

  // Timeline
  const ts = document.querySelector('.js-scale');
  const tl = document.querySelector('.js-timeline');

  if (ts && tl) {
    const sCarousel = new Swiper(ts, {
      slidesPerView: 'auto',
      breakpoints: {
        992: {
          slidesPerView: 11
        }
      }
    });

    const tCarousel = new Swiper(tl, {
      init: false,
      autoHeight: true,
      spaceBetween: 30,
      thumbs: {
        swiper: sCarousel,
      },
      breakpoints: {
        768: {
          spaceBetween: 0,
        },
        992: {
          allowTouchMove: false
        }
      }
    });

    tCarousel
      .on('init', swiper => swiper.slideTo(swiper.slides.length - 1))
      .init();
    sCarousel.slideTo(sCarousel.slides.length - 1);

    // function tlCarouselInitialSlide(bp) {
    //     if (bp.matches) {
    //         tCarousel
    //             .on('init', swiper => swiper.slideTo(swiper.slides.length - 1))
    //             .init();
    //         sCarousel.slideTo(sCarousel.slides.length - 1);
    //     } else {
    //         tCarousel
    //             .on('afterInit', swiper => swiper.slideTo(Math.floor(swiper.slides.length / 2)))
    //             .init();
    //         sCarousel.slideTo(Math.floor(sCarousel.slides.length / 2));
    //     }
    // }

    // tlCarouselInitialSlide(bp992);
    // bp992.onchange = tlCarouselInitialSlide;
  }

  // Menu
  // const bp1025 = window.matchMedia('(min-width: 1025px)');
  const mMenuLinks = document.getElementsByClassName('mega-menu__part-title');
  const mMenuItems = document.getElementsByClassName('mega-menu__part-items');

  function toggleMenuCollapse(e) {
    e.preventDefault();
    const items = this.nextElementSibling;

    for (let i = 0; i < mMenuLinks.length; i++) {
      !mMenuLinks[i].contains(e.target) && mMenuLinks[i].classList.remove('active');
    }

    for (let i = 0; i < mMenuItems.length; i++) {
      mMenuItems[i].style.maxHeight = !mMenuItems[i].contains(items) && null;
    }

    this.classList.toggle('active')

    if (items.style.maxHeight) {
      items.style.maxHeight = null;
    } else {
      items.style.maxHeight = items.scrollHeight + "px";
    }
  }

  function restoreDesktopMenu(bp) {
    if (bp.matches) {
      document.documentElement.classList.remove('hidd');
      document.querySelector('.mobile-menu').classList.remove('active');
      document.querySelector('.bgs').classList.remove('block');
      document.body.classList.remove('menu-open');
      for (let i = 0; i < mMenuLinks.length; i++) {
        mMenuLinks[i].classList.remove('active');
        mMenuLinks[i].removeEventListener('click', toggleMenuCollapse);
      }
      for (let i = 0; i < mMenuItems.length; i++) {
        mMenuItems[i].removeAttribute('style');
      }
    } else {
      mMenuLinks && Array.from(mMenuLinks).forEach(function (link) {
        link.addEventListener('click', toggleMenuCollapse);
      });
    }
  }

  restoreDesktopMenu(bp1025);
  bp1025.onchange = restoreDesktopMenu;

  /* Table block column rows height */
  const tCols = document.querySelectorAll('.table-column');

  if (tCols) {
    function tableRowsHeight(bp) {
      if (bp.matches) {
        $('.table-column__row').matchHeight({ property: 'height', byRow: false });
      } else {
        $('.table-column__row').matchHeight({ remove: true });
      }
    }

    tableRowsHeight(bp768);
    bp768.onchange = tableRowsHeight;
  }

  /* Video */
  const videos = document.getElementsByClassName('video');

  function findVideos(elements) {
    for (let i = 0; i < elements.length; i++) {
      setupVideo(elements[i]);
    }
  }

  function setupVideo(video) {
    let link = video.querySelector('.video__link') || video.querySelector('.video__wrapper');
    let button = video.querySelector('.video__button');
    let id = link.dataset.id;

    button.addEventListener('click', () => {
      let iframe = createIframe(id);

      link.remove();
      button.remove();
      video.classList.remove('video--enabled');
      video.appendChild(iframe);
    });

    link.removeAttribute('data-id');
    video.classList.add('video--enabled');
  }

  function createIframe(id) {
    let iframe = document.createElement('iframe');

    iframe.setAttribute('allowfullscreen', '');
    iframe.setAttribute('allow', 'autoplay');
    iframe.setAttribute('src', generateURL(id));
    iframe.classList.add('video__media');

    return iframe;
  }

  function generateURL(id) {
    let query = '?rel=0&showinfo=0&autoplay=1';
    return 'https://www.youtube.com/embed/' + id + query;
  }

  videos && findVideos(videos);

  /* Ticker */
  const tickers = document.getElementsByClassName('ticker__slider');
  const bp576 = window.matchMedia('(min-width: 576px)');

  tickers && Array.from(tickers).forEach(function (ticker) {
    const dir = ticker.dataset.direction !== 'forward';
    let speed = ticker.dataset.speed || 8000;
    let tickerSwiper;

    function enableSwiper() {
      tickerSwiper = new Swiper(ticker, {
        centeredSlides: true,
        allowTouchMove: false,
        loop: true,
        loopedSlides: 8,
        slidesPerView: 'auto',
        speed: +speed,
        autoplay: {
          delay: 0,
          disableOnInteraction: true,
          reverseDirection: dir
        },
      });
    }

    function tickerBreakpointChecker(bp) {
      if (bp.matches) {
        return enableSwiper();
      } else {
        if (tickerSwiper !== undefined) tickerSwiper.destroy(true, true);
      }
    }

    tickerBreakpointChecker(bp576);
    bp576.onchange = tickerBreakpointChecker;
  });

  /* Career why slider */
  const bwiSlider = document.querySelector('.block-why__images');
  const bwcSlider = document.querySelector('.block-why__contents');

  if (bwiSlider) {
    let bwcSliderSwiper = new Swiper(bwcSlider, {
      spaceBetween: 24,
      slidesPerView: 1,
      loop: true,
      allowTouchMove: false
    });

    let bwiSliderSwiper = new Swiper(bwiSlider, {
      spaceBetween: 24,
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: '.js-why-next',
        prevEl: '.js-why-prev',
      },
      thumbs: {
        swiper: bwcSliderSwiper
      }
    });
  }

  /* DEV footer copy e-mail */
  const copyEmail = document.querySelector('.js-copy-email');
  if (copyEmail) {
    const messageCopy = 'Click to copy e-mail';
    const messageSuccess = 'E-mail copied';

    const message = document.createElement('span');
    message.className = 'foot-top-phone__message';
    message.textContent = messageCopy;
    copyEmail.append(message);

    copyEmail.addEventListener('click', function (e) {
      e.preventDefault()
      const copyText = this.previousElementSibling.href.replace('mailto:', '');

      navigator.clipboard.writeText(copyText);

      setTimeout(function () {
        message.textContent = messageSuccess;
      }, 300);

      setTimeout(function () {
        message.textContent = messageCopy;
      }, 2000);
    });
  }

  /* FAQ accordion */
  const accLinks = document.querySelectorAll('.faq-item__link');
  const accPanels = document.querySelectorAll('.faq-item__panel');

  accLinks && accLinks.forEach(function (link) {
    link.addEventListener('click', function (e) {
      e.preventDefault();
      const target = this.nextElementSibling;

      for (let trigger of accLinks) {
        !trigger.contains(this) && trigger.classList.remove('active');
      }

      for (let content of accPanels) {
        !content.contains(target) && content.removeAttribute('style');
      }

      this.classList.toggle('active');
      if (target.style.maxHeight) {
        target.style.maxHeight = null;
      } else {
        target.style.maxHeight = target.scrollHeight + "px";
      }
    });
  });

  /* Tabs slider (internships) */
  const tabsSlider = document.querySelector('.tabs__slider');
  const tabsPagination = document.querySelector('.tabs__pagination');
  const tabsPaginationButtons = document.querySelectorAll('.tabs__pagination-button');

  if (tabsSlider) {
    let tabsPaginationSwiper;

    function initTabsPaginationSwiper() {
      tabsPaginationSwiper = new Swiper(tabsPagination, {
        slidesPerView: 'auto',
        watchSlidesProgress: true,
        slideToClickedSlide: true,
        on: {
          init: function (swiper) {
            const active = swiper.slides[swiper.activeIndex].children[0];
            tabsPagination.style.width = active.clientWidth + 'px';

            for (let slide of swiper.slides) {
              if (slide.classList.contains('current')) {
                setTimeout(function () {
                  swiper.slideTo(slide.children[0].dataset.index);
                }, 300)
              }
            }
          },
          slideChange: function (swiper) {
            const active = swiper.slides[swiper.activeIndex].children[0];
            tabsPagination.style.width = active + 'px';
          }
        }
      });
    }

    let tabsSwiper = new Swiper(tabsSlider, {
      slidesPerView: 1,
      autoHeight: true,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      simulateTouch: false,
      allowTouchMove: false
    });

    function switchTab() {
      for (let i of tabsPaginationButtons) {
        if (!i.contains(this)) {
          i.classList.remove('tabs__pagination-button--active');
          i.parentElement.classList.remove('current');
        }
      }

      if (!this.classList.contains('tabs__pagination-button--active')) {
        this.classList.add('tabs__pagination-button--active');
        this.parentElement.classList.add('current');
      }

      tabsSwiper.slideTo(this.dataset.index);
    }

    tabsPaginationButtons.forEach(function (btn) {
      btn.addEventListener('click', switchTab);
    });

    function tabsSliderPagination(bp) {
      if (bp.matches) {
        if (tabsPaginationSwiper !== undefined) tabsPaginationSwiper.destroy(true, true);
      } else {
        initTabsPaginationSwiper();
      }
    }

    bp768.onchange = tabsSliderPagination;
    tabsSliderPagination(bp768);
  }

  // discuss form handler
  let $projectForm = document.querySelector('section.project');
  let $flutterBtns = document.querySelectorAll('.header-call');

  let $discussForm = document.querySelector('.contact__form');
  let $discussBtnLink = document.querySelector('a.listing-content');
  let $discussPageLink = document.querySelector('.navbar-default');
  let discussPageLink = $discussPageLink ? $discussPageLink.dataset.discussLink : '';

  if ($discussBtnLink) {
    if ($discussForm) {
      $discussBtnLink.href = '#contact';
    } else {
      $discussBtnLink.href = discussPageLink;
    }
  }

  if ($projectForm && $flutterBtns.length) {
    $flutterBtns.forEach(function ($flutterBtn) {
      let $header = jQuery('.header-dev');
      let topOffset = $header.length ? $header.outerHeight() : 0;

      $flutterBtn.href = '#contact';

      $flutterBtn.addEventListener('click', function (e) {
        e.preventDefault();
        jQuery('html, body').animate({
          scrollTop: jQuery($projectForm).offset().top - topOffset
        }, 800);
      });
    });
  }

  // document.querySelectorAll('textarea').forEach(function (el) {
  //   el.parentElement.dataset.replicatedValue = textarea.value;
  //   el.addEventListener('input', function() {
  //     el.parentElement.dataset.replicatedValue = textarea.value;
  //   });
  // });

  /* "What we do" block slider */
  const wwdSlider = document.querySelector('.wwd-slider');
  wwdSlider && new Swiper(wwdSlider, {
    loop: true,
    pagination: {
      el: ".wwd-slider__pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".wwd-slider__next",
      prevEl: ".wwd-slider__prev",
    },
    on: {
      touchStart: function (swiper) {

      },
      touchMove: function (swiper) {
        document.querySelectorAll('.wwd-slider__item-next, .wwd-slider__item-prev').forEach(function (item) {
          item.style.opacity = 0;
        });
      },
      touchEnd: function (swiper) {
        document.querySelectorAll('.wwd-slider__item-next, .wwd-slider__item-prev').forEach(function (item) {
          item.style.opacity = 0.6;
        });
      },
    }
  });

  /* Front cases grid desc truncate */
  const caseDesc = document.querySelectorAll('.front-cases--grid .front-case-desc');
  caseDesc && caseDesc.forEach(function (desc) {
    const descText = desc.textContent;
    let len = window.innerWidth > 992 ? 108 : 152;
    desc.textContent = truncateText(descText, len);

    window.onresize = function () {
      desc.textContent = truncateText(descText, len);
    }
  });

  /* "How we work" block slider */
  const hwwSlider = document.querySelector('.hww-slider');
  hwwSlider && new Swiper(hwwSlider, {
    loop: true,
    spaceBetween: 20,
    pagination: {
      el: ".hww-slider__pagination",
      clickable: true,
      renderBullet: function (index, className) {
        const currentNumber = index + 1 <= 9 ? '0' + (index + 1) : (index + 1);
        const currentStage = this.slides[index + 1].dataset.stage;
        const currentTemplate = currentNumber + ' <span class="stage"> — ' + currentStage + '</span>';
        return '<span class="' + className + '">' + currentTemplate + "</span>";
      }
    },
    navigation: {
      nextEl: ".hww-slider__next",
      prevEl: ".hww-slider__prev",
    }
  });

  /* Awards slider */
  const awardsSlider = document.querySelectorAll('.awards__slider');
  awardsSlider && awardsSlider.forEach(awards => {
    let awardsSlides = awards.querySelectorAll('.awards__item');
    new Swiper(awards, {
      // spaceBetween: 16,
      slidesPerView: 'auto',
      pagination: {
        el: ".awards__pagination",
        type: "fraction",
      },
      breakpoints: {
        768: {
          // spaceBetween: 20,
        },
        992: {
          slidesPerView: awardsSlides.length < 4 ? awardsSlides.length : 'auto'
        }
      }
    });
  });

  /* Career page scripts start */

  // Ticker slider
  const tickerSliders = document.getElementsByClassName('ticker-slider');
  if (tickerSliders) {
    Array.from(tickerSliders).forEach(function (ticker) {
      const direction = ticker.dataset.direction !== 'forward' || false;
      let speed = ticker.dataset.speed || 8000;

      new Swiper(ticker, {
        centeredSlides: true,
        allowTouchMove: false,
        loop: true,
        loopedSlides: ticker.querySelectorAll('.swiper-slide').length,
        slidesPerView: 'auto',
        observer: true,
        speed: +speed,
        autoplay: {
          delay: 0,
          disableOnInteraction: true,
          reverseDirection: direction
        },
      });
    });
  }

  // Team slider
  const teamSlider = document.querySelector('.team-slider');
  if (teamSlider) {
    new Swiper(teamSlider, {
      allowTouchMove: false,
      slidesPerView: 1,
      effect: 'fade',
      fadeEffect: {
        crossFade: true
      },
      navigation: {
        nextEl: '.team-slider__controls-button--next',
        prevEl: '.team-slider__controls-button--prev',
      },
    });
  }

  // About slider
  const aboutSlider = document.querySelector('.career-slider');
  if (aboutSlider) {
    let swiper = new Swiper(aboutSlider, {
      slidesPerView: 'auto',
      centeredSlides: true,
      centeredSlidesBounds: true,
      loop: true,
      watchSlidesProgress: true,
      spaceBetween: -20,
      breakpoints: {
        768: {
          spaceBetween: 20,
          centeredSlides: false,
          centeredSlidesBounds: false,
          loop: false
        },
        1025: {
          slidesPerView: 4,
          spaceBetween: 20,
          centeredSlides: false,
          centeredSlidesBounds: false,
          loop: false
        }
      }
    });

    window.addEventListener('resize', function () {
      swiper.init(aboutSlider);
    });

    const aboutSliderVideos = document.querySelectorAll('.career-slider__item-video video');
    if (aboutSliderVideos) {
      aboutSliderVideos.forEach(function (item) {
        item.parentElement.addEventListener('click', function (e) {
          const video = this.querySelector('video');

          for (let v of aboutSliderVideos) {
            if (!v.paused && !v.contains(video)) {
              v.pause();
              v.previousElementSibling.classList.remove('hide');
            }
          }

          if (video.paused) {
            video.play();
            video.previousElementSibling.classList.add('hide');
          } else {
            video.pause();
            video.previousElementSibling.classList.remove('hide');
          }
        });
      });
    }
  }

  /* Career page scripts end */
}

window.addEventListener('load', init);