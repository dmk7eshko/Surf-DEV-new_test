'use strict';

function init() {
  /* Desktop menu item hover */
  const itemsMegaMenu = document.getElementsByClassName('menu-item-mega-menu');
  const header = document.querySelector('header.header');

  function addClass(el, className) {
    !el.classList.contains(className) && el.classList.add(className);
  }

  function removeClass(el, className) {
    el.classList.contains(className) && el.classList.remove(className);
  }

  itemsMegaMenu && [...itemsMegaMenu].forEach(function(item) {
    if (window.innerWidth >= 1025) {
      item.addEventListener('mouseenter', function() {
        addClass(header, 'black');
      });

      item.addEventListener('mouseleave', function() {
        removeClass(header, 'black');
      });
    } else {
      removeClass(header, 'black');
    }

    window.addEventListener('resize', function() {
      if (window.innerWidth < 1025) removeClass(header, 'black');
    })
  });

  /* Collapse */
  const collapsePanels = document.querySelectorAll('.collapse-panel');

  function collapseResize() {
    collapsePanels && collapsePanels.forEach(panel => {
      if (panel.classList.contains('active')) {
        panel.style.maxHeight = panel.scrollHeight * 2 + "px";
      }
    });
  }

  if (collapsePanels) {
    collapseResize();
    window.addEventListener('resize', collapseResize);
  }

  /* Expertise slider */
  // const expertiseSlider = document.querySelector('.expertise-slider');
  // if (expertiseSlider) {
  //   const expertiseSwiper = new Swiper(expertiseSlider, {
  //     slidesPerView: 'auto',
  //     spaceBetween: 18,
  //     navigation: {
  //       nextEl: '.expertise-slider-next',
  //       prevEl: '.expertise-slider-prev',
  //     },
  //     breakpoints: {
  //       1280: {
  //         spaceBetween: 24
  //       },
  //       1680: {
  //         spaceBetween: 36
  //       }
  //     }
  //   });
  // }

  /* Expertise more mobile */
  const expertiseMore = document.querySelector('.js-exp-more');
  if (expertiseMore) {
    expertiseMore.addEventListener('click', function (e) {
      e.preventDefault();

      const collapse = e.target.previousElementSibling;

      if (!collapse.classList.contains('collapse-panel')) return false;

      e.target.classList.toggle('active');

      if (e.target.classList.contains('active')) {
        e.target.textContent = e.target.dataset.hide;
      } else {
        e.target.textContent = e.target.dataset.show;
      }

      if (collapse.style.maxHeight) {
        collapse.classList.remove('active');
        collapse.style.maxHeight = null;
      } else {
        collapse.classList.add('active');
        collapse.style.maxHeight = collapse.scrollHeight + "px";
      }
    });
  }
}

document.addEventListener('DOMContentLoaded', init);