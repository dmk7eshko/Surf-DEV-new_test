jQuery(document).ready(function () {
  var $ = jQuery,
    $w = $(window),
    $body = $("body"),
    $head = $(".sticky-head"),
    $mMenu = $(".mobile-menu"),
    $listing = $(".listing"),
    $aside = $(".hardcore-blocks"),
    $ftoggles = $(".blog-filters-toggles > li"),
    $blogposts = $(".blog-posts"),
    prevScroll = 0,
    curoff = 0;

  AOS.init();

  if ($(".container.post-content").length > 0) {
    $aside.detach();
    $(".container.post-content").eq(0).append($aside);
  }

  jQuery('.blog-filters-toggles li').on('click', function() {
    jQuery('html, body').animate({
      scrollTop: $('.blog-content-posts').offset().top - 150
    }, {
      duration: 300,   
      easing: "linear" // по умолчанию «swing» 
    });
  });
	
  jQuery('.js-scroll').on('click', function() {
    jQuery('html, body').animate({
      scrollTop: $('#contact-section').offset().top - 150
    }, {
      duration: 300,   
      easing: "linear" // по умолчанию «swing» 
    });
  });
	


  $ftoggles.each(function () {
    var $toggle = $(this);

    $toggle.click(function () {
      var template = function (post) {
        return $(
          '<article id="post-' +
          post.ID +
          '" class="blog-post"><section class="blog-post-image"><a href="' +
          post.permalink +
          '"><img src="' +
          post.image +
          '" alt="' +
          post.post_title +
          '" /></a></section><section class="blog-post-content"><a class="blog-post-category" href="' +
          post.category.url +
          '">' +
          post.category.name +
          '</a><h2><a href="' +
          post.permalink +
          '">' +
          post.post_title +
          '</a></h2><div class="blog-post-excerpt">' +
          post.meta_desc +
          "</div></section> </article>"
        );
      };
      $ftoggles.removeClass("f-active");
      $toggle.addClass("f-active");
      $blogposts.addClass("blog-loading");

      $.ajax({
        type: "POST",
        url: window.s_admin_ajax,
        dataType: "json",
        data: {
          action: "get_ajax_filtered",
          shown: !!$toggle.data("cat")
            ? []
            : window.s_shown_posts.filter(function (item) {
              return !!item;
            }),
          category: $toggle.data("cat") || -1,
        },
        success: function (response) {
          $blogposts.removeClass("blog-loading");
          $blogposts.html("");
          response.forEach(function (item) {
            $blogposts.append(template(item));
          });
        },
      });
    });
  });

  $(".fl-block").on("click", function () {
    $(this).toggleClass("collapsed");
  });

  $(document).on("click", ".clamp-more", function () {
    $(this).parent().text($(this).parent().data("full"));
  });

  $mMenu.click(function () {
    $body.toggleClass("menu-open");
    $(this).toggleClass("active");
    $(".bgs").toggleClass("block");
    $("html").toggleClass("hidd");
  });

  $(".bgs > a").click(function () {
    $(".bgs").removeClass("block");
    $("html").removeClass("hidd");
    $body.removeClass("menu-open");
    $mMenu.removeClass("active");
  });

  new Swiper(".feature-block", {
    slidesPerView: "auto",
    centeredSlides: true,
    loop: true,
    pagination: {
      el: ".swiper-controls .swiper-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".swiper-controls .swiper-button-next",
    },
  });

  new Swiper(".testimonials-roll .testimonials", {
    slidesPerView: "auto",
    spaceBetween: 20,
    centeredSlides: true,
    autoHeight: true,
    loop: true,
    pagination: false,
    navigation: {
      nextEl: ".js-testimonials-next",
      prevEl: ".js-testimonials-prev",
    },
  });

  $(
    ".single-article .content > h2, .single-cases .type-cases .container > h2"
  ).each(function (i) {
    $content =
      '<li><a data-scroll="#block' +
      i +
      '" class="nav-link" href="#block' +
      i +
      '" onclick="scrollToSection(event)">' +
      $(this).text() +
      "</a></li>";

    $(this).attr("id", "block" + i);
    $(".listing-content").append($content);
  });

  if ($(".listing").length) {
    $w.scroll(function () {
      posHeader();
      visContent();
      contentActive();
    });
  }

  $w.trigger("scroll");

  function contentActive() {
    var active = null;

    $("h2").each(function (i, el) {
      var $self = $(el),
        top = $self.offset().top - 200,
        scroll = $w.scrollTop(),
        id = $self.attr("id");

      if (scroll > top) {
        active = id;
      }
    });

    $("a.active").removeClass("active");
    $('a[href="#' + active + '"]').addClass("active");
  }

  // function visContent() {
  //     let foff = $('.single-article').length > 0 && $('h2').length > 0
  //         ? $('h1').eq(0).offset().top + 50
  //         : (
  //             $('h2').length > 0
  //                 ? $('h2').eq(0).offset().top - 50
  //                 : 0
  //         )
  //
  //     let listingHeight = $listing.height();
  //     let saOffset = $('.single-article').offset().top + $('.single-article').height();
  //
  //     if ((saOffset - (listingHeight + listingHeight / 3)) > $w.scrollTop() && $w.scrollTop() > foff) {
  //         $($listing[0]) && ($listing.addClass('vis'))
  //         $($aside[0]) && ($aside.addClass('visible'))
  //         contentCollision()
  //     } else {
  //         $($listing[0]) && ($listing.removeClass('vis').css('transform', 'none'))
  //         $($aside[0]) && ($aside.removeClass('visible').css('transform', 'none'))
  //     }
  // }

  function visContent() {
    var foff =
      $(".single-article").length > 0 &&
        $(".single-cases").length > 0 &&
        $("h2").length > 0
        ? $("h1").eq(0).offset().top + 50
        : $("h2").length > 0
          ? $("h2").eq(0).offset().top - 50
          : 0;

    if ($w.scrollTop() > foff) {
      $($listing[0]) && $listing.addClass("vis");
      $($aside[0]) && $aside.addClass("visible");
      contentCollision();
    } else {
      $($listing[0]) && $listing.removeClass("vis").css("transform", "none");
      $($aside[0]) && $aside.removeClass("visible").css("transform", "none");
    }
  }

  function contentCollision() {
    if (
      !$("body").hasClass("single-cases") &&
      !$("body").hasClass("single-post")
    )
      return;
    if (!$listing[0]) return;

    var rect = $listing[0].getBoundingClientRect(),
      min = ["top", "left", "x", "y"],
      handler = function (key) {
        if (min.indexOf(key) > -1) return Math.min;
        return Math.max;
      },
      bounds = {
        top: rect.top,
        right: rect.right,
        bottom: rect.bottom,
        left: rect.left,
        width: rect.width,
        height: rect.height,
        x: rect.x,
        y: rect.y,
      };

    $listing.find("*").each(function () {
      var kid = this.getBoundingClientRect();
      Object.keys(bounds).forEach(function (key) {
        bounds[key] = handler(key)(bounds[key], kid[key]);
      });
    });

    // $(`
    //     p + picture:not(.single-pic--narrow) img,
    //     .container > p + :not(.single-pic--narrow) img,
    //     .container > :not(.single-pic--narrow) img,
    //     .container > picture:not(.single-pic--narrow) img,
    //     .contact,
    //     .related-cases,
    //     .cta,
    //     .blog-row-posts
    //     `).each(function () {
    //   const ib = this.getBoundingClientRect();
    //   if (collide(bounds, ib) && window.innerWidth >= 1025) {
    //     $listing.removeClass("vis");
    //   }
    // });
  }

  function collide(a, b) {
    var offset = 50;

    return (
      a.top + a.height > b.top - offset &&
      a.left + a.width > b.left - offset &&
      a.bottom - a.height < b.bottom + offset &&
      a.right - a.width < b.right + offset
    );
  }

  function posHeader() {
    var offset = !prevScroll ? 0 : prevScroll - window.scrollY,
      translate =
        window.innerWidth >= 1024
          ? Math.max(
            -window.scrollY,
            Math.min(0, Math.max(-$head[0].offsetHeight, curoff + offset))
          )
          : 0;

    prevScroll = window.scrollY;
    curoff = translate;

    window.requestAnimationFrame(
      $.throttle(300, true, function () {
        var css = { transform: "translateY(" + translate + "px)" },
          aoff =
            $(".single-article").length > 0 &&
              $(".single-cases").length > 0 &&
              $w.scrollTop() > $("h1").eq(0).offset().top + 1600
              ? 280
              : 0;

        $head.css(css);
        $mMenu.css(css);
        $listing.css({ transform: "translateY(" + (translate + 30) + "px)" });
        $aside.css("transform", "translateY(" + (translate - aoff) + "px)");
      })
    );
  }

  /*
    $('.in-scroll').each(function(){
        var $parent = $(this.parentNode)
        $parent.attr( 'data-offset', $(this).position().top )
        $parent.css( 'height', this.scrollWidth * 1.1 )
    })

    $("body").mousewheel(function(event, delta) {
        var $catchers = $('.in-scroll')

        $catchers.each(function(){
            var $this = $(this),
                $parent = $(this.parentNode),
                offset = Math.max( 0, Math.min( parseInt( $parent.css( 'height' ) ) * .6, Math.round( $this.position().top - $parent.data( 'offset' ) - delta * event.deltaFactor - 200 ) ) )

            $this.css( 'transform', 'translateX(-' + offset + 'px)' )
        })
    })
    */
});

/* OLD */

function filter() {
  jQuery("#filter-form").submit(function () {
    return false;
  });
  // jQuery("#fill").empty()
  //
  // var p1 = '';
  // $('.branch input:checked').each(function () {
  //     var values1 = $(this).val();
  //     p1 += values1 + ',';
  // });
  //
  // var p2 = '';
  // $('.type input:checked').each(function () {
  //     var values3 = $(this).val();
  //     p2 += values3 + ',';
  // });
  //
  // var p3 = $('#search-case').val();
  //
  // jQuery.post(
  //     "/wp-admin/admin-ajax.php",
  //     {
  //         action: 'cases_filter',
  //         pp1: p1,
  //         pp2: p2,
  //         // pp3: p3,
  //
  //     },
  //     function (data) {
  //         $("#fill").html(data);
  //     }
  // );

  jQuery("#fill").empty();
  $(".block-inputs").removeClass("selected");
  $(this).addClass("selected");

  var p2 = "";
  var p1 = $(".branch.selected").attr("data-id");
  var p2 = "";
  var p2 = $(".type.selected").attr("data-id");

  jQuery.post(
    "/wp-admin/admin-ajax.php",
    {
      action: "cases_filter",
      pp1: p1,
      pp2: p2,
    },
    function (data) {
      $("#fill").html(data);
      var url = $(".block-inputs.selected").attr("data-url");
      history.pushState(null, null, url);
    }
  );
}

// jQuery(document).on('change', '.filter-inputs input', filter);
jQuery(document).on("click", ".block-inputs", filter);
// jQuery(document).on('change', '#search-case', filter);

// jQuery('.contact-form-input input').on('change blur', function () {
//     if (jQuery(this).val() != '') {
//         jQuery(this).parent('.contact-form-input').addClass('hidden-label');
//     } else {
//         jQuery(this).parent('.contact-form-input').removeClass('hidden-label');
//     }
// })
//
//
// jQuery('.contact-form-input textarea').on('change blur', function () {
//     if (jQuery(this).val() != '') {
//         jQuery(this).parent('.contact-form-input').addClass('hidden-label');
//     } else {
//         jQuery(this).parent('.contact-form-input').removeClass('hidden-label');
//     }
// })

/* Form labels */
const emailRegExp = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
const fields = document.querySelectorAll(".contact-form-input input, .contact-form-input textarea");

function checkInputFields(field) {
  if (field.value) {
    !field.classList.contains("filled") && field.classList.add("filled");

    if (field.required) {
      if (field.validity.valid) {
        field.classList.remove("error");
      } else {
        field.classList.add("error");
      }
    }
  } else {
    field.classList.contains("filled") && field.classList.remove("filled");

    if (field.required && !field.classList.contains("error")) {
      field.classList.add("error");
    }
  }

  if (field.type === 'email') {
    if (emailRegExp.test(field.value)) {
      field.classList.remove("error");
      field.nextElementSibling.textContent = label.dataset.text;
    } else {
      field.classList.add("error");
      field.nextElementSibling.textContent = label.dataset.error;
    }
  }
}

fields &&
  fields.forEach(function (field) {
    field.value !== '' && !field.classList.contains("filled") && field.classList.add("filled");

    field.addEventListener("focus", function (e) {
      !field.classList.contains("filled") && field.classList.add("filled");

      if (field.required && field.classList.contains("error")) {
        field.classList.remove("error");
      }
    });

    field.addEventListener("blur", function (e) {
      checkInputFields(field);
    });
  });

jQuery(document).ready(function () {
  const ru = "ru-RU";
  const en = "en-US";
  const lang = document.documentElement.lang;

  /* Custom select */
  const selects = document.querySelectorAll(".custom-select select");

  const setSelectedOptions = (options) => {
    [...options].forEach((option) => {
      if (!option.selected) {
        option.removeAttribute("selected");
      } else {
        option.setAttribute("selected", true);
      }
    });
  };

  const changeEvent = (e) => {
    const selectOptions = e.target.options;
    setSelectedOptions(selectOptions);
  };

  const createDiv = (...classes) => {
    const node = document.createElement("div");
    node.classList.add(...classes);
    return node;
  };

  const closeAllSelect = (select) => {
    const selectItems = document.getElementsByClassName("select-items");
    const selected = document.getElementsByClassName("select-selected");
    const arr = [];

    for (let i = 0; i < selected.length; i++) {
      if (select === selected[i]) {
        arr.push(i);
      } else {
        selected[i].classList.remove("active");
      }
    }
    for (let i = 0; i < selectItems.length; i++) {
      if (arr.indexOf(i)) {
        selectItems[i].classList.add("select-hide");
      }
    }
  };

  selects.forEach((select) => {
    const options = select.options;
    const selectSelected = createDiv("select-selected", "placeholder");
    // selectSelected.innerText = options[select.selectedIndex].text;
    selectSelected.innerText = select.dataset.label;
    select.parentElement.appendChild(selectSelected);

    const createOptions = () => {
      const selectContainer = createDiv("select-items", "select-hide");
      Array.from(options).forEach((option, index) => {
        const isSelected = option.selected;
        const item = createDiv("select-item");
        item.setAttribute("data-item", index.toString());
        item.innerText = option.text;
        selectContainer.appendChild(item);

        item.addEventListener("click", function (e) {
          const currentSelect =
            this.parentNode.parentNode.getElementsByTagName("select")[0];
          const currentSelected = this.parentElement.previousElementSibling;
          const currentItems =
            this.parentElement.getElementsByClassName("select-item");
          for (let i = 0; i < currentItems.length; i++) {
            currentItems[i].classList.remove("selected");
          }
          if (options[index].innerText === this.innerHTML) {
            currentSelect.selectedIndex = index;
            currentSelect.dispatchEvent(new Event("change"));
            currentSelected.classList.contains("placeholder") &&
              currentSelected.classList.remove("placeholder");
            currentSelected.previousElementSibling.classList.contains(
              "error"
            ) &&
              currentSelected.previousElementSibling.classList.remove("error");
            currentSelected.innerHTML = this.innerHTML;
          }
          this.classList.add("selected");
        });
      });
      return selectContainer;
    };

    select.parentElement.appendChild(createOptions());
    select.value = "";

    select.addEventListener("change", changeEvent);

    selectSelected.addEventListener("click", function (e) {
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("active");
    });
  });

  document.addEventListener("click", closeAllSelect);

  /* Confirm */
  const confirm = document.getElementById("confirm");
  confirm &&
    confirm.addEventListener("change", function (e) {
      if (this.checked) {
        this.classList.remove("error");
      }
    });

  /* Ajax */
  function handleSendEmail() {
    jQuery("#send").replaceWith(
      "<em id='sending' style='text-align:center;'>" +
      (lang === en ? "Sending..." : "Отправляю...") +
      "</em>"
    );
    jQuery.ajax({
      type: "POST",
      url: "/wp-admin/admin-ajax.php",
      data: jQuery("#contact").serialize() + "&action=crm_pipedrive",
      success: function (result) {
        jQuery("#sending").css("display", "none");
        const formData = new FormData(jQuery("#contact")[0]);
        formData.append("action", "send_bid");

        let clearResult = result[result.length - 1] === "0" ? result.slice(0, -1) : result
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

  jQuery("#send").on("click", function () {
    const form = document.getElementById("contact");
    const fields = form.elements;
    const phone = document.getElementById("phone");
    const name = document.getElementById("name");
    const email = document.getElementById("email");
    const msg = document.getElementById("msg");
    const refs = document.getElementById("reffer").value;
    const len = 10;

    [...fields].forEach(function (field) {
      const label = field.nextElementSibling;
      switch (field.name) {
        case "confirm":
          if (field.checked) {
            field.classList.remove("error");
          } else {
            field.classList.add("error");
          }
          break;

        case "name":
          if (field.value) {
            field.classList.remove("error");
            label.textContent = label.dataset.text;
          } else {
            field.classList.add("error");
            if (field.classList.contains("filled")) {
              label.textContent = label.dataset.error;
            } else {
              label.textContent = label.dataset.text;
            }
          }
          break;

        case "phone":
          if (field.value.length < len) {
            field.classList.add("error");
            if (field.classList.contains("filled")) {
              label.textContent = label.dataset.error;
            } else {
              label.textContent = label.dataset.text;
            }
          } else {
            field.classList.remove("error");
            label.textContent = label.dataset.text;
          }
          break;

        case "email":
          console.log('email');
          if (emailRegExp.test(email.value)) {
            email.classList.remove("error");
            label.textContent = label.dataset.text;
          } else {
            email.classList.add("error");
            if (field.classList.contains("filled")) {
              label.textContent = label.dataset.error;
              email.classList.add("error");
            } else {
              label.textContent = label.dataset.text;
            }
          }
          break;

        case "msg":
          if (field.value) {
            field.classList.remove("error");
            label.textContent = label.dataset.text;
          } else {
            field.classList.add("error");
            if (field.classList.contains("filled")) {
              label.textContent = label.dataset.error;
            } else {
              label.textContent = label.dataset.text;
            }
          }
          break;
      }
    });

    if (lang === en) {
      if (emailRegExp.test(email.value) && name.value && confirm.checked) {
        handleSendEmail();
      }
    } else {
      [...fields].forEach(function (field) {
        const label = field.nextElementSibling;
        switch (field.name) {
          case "name":
            if (field.value) {
              field.classList.remove("error");
              label.textContent = label.dataset.text;
            } else {
              field.classList.add("error");
              label.textContent = label.dataset.error;
            }
            break;
          case "surname":
            if (field.value) {
              field.classList.remove("error");
              label.textContent = label.dataset.text;
            } else {
              field.classList.add("error");
              label.textContent = label.dataset.error;
            }
            break;
          case "course":
            console.log(field.name);
            if (field.value) {
              field.classList.remove("error");
            } else {
              field.classList.add("error");
            }
            break;
        }
      });
    }
  });
});

jQuery(".mobile-filter").click(function () {
  jQuery(".filter-inputs").toggleClass("flex");
  jQuery(".left-title").toggleClass("block");
  jQuery(this).toggleClass("open-filter");
});

jQuery(document).on("change keyup input click", "#phone", function () {
  if (this.value.match(/[^0-9+]/g)) {
    this.value = this.value.replace(/[^0-9+]/g, "");
  }
});

$("#name").keypress(function (event) {
  var inputValue = event.which;
  //if digits or not a space then don't let keypress work.
  if (inputValue > 47 && inputValue < 58 && inputValue != 32) {
    event.preventDefault();
  }
});

jQuery(".right-share").click(function () {
  jQuery(".close-share").toggleClass("open-share");
  jQuery(".right-share").toggleClass("close");
  jQuery(".right-share").toggleClass("opener");
  jQuery(".hidden-share").toggleClass("hidder");
});

jQuery(".closer").click(function () {
  jQuery(".success").removeClass("block");
  jQuery(".success").css("display", "none");
});

$(document).ready(function () {
  $(".listing-content").on("click", "a", function (event) {
    // исключаем стандартную реакцию браузера
    event.preventDefault();

    // получем идентификатор блока из атрибута href
    var id = $(this).attr("href"),
      // находим высоту, на которой расположен блок
      top = $(id).offset().top - 150;

    // анимируем переход к блоку, время: 800 мс
    $("body,html").animate({ scrollTop: top }, 800);
  });
});

var textarea = document.querySelector("textarea");
if (textarea) {
  textarea.addEventListener("keyup", function () {
    if (this.scrollTop > 0) {
      this.style.height = this.scrollHeight + "px";
    }
  });
}

jQuery(".question").click(function () {
  jQuery(this).parent(".faq").toggleClass("activen");
});

// var $win = jQuery(window),
// 	$fixed = jQuery(".listing"),
// 	limit = 300;

// function tgl (state) {
//     $fixed.toggleClass("hidden", state);
// }

// $win.on("scroll", function () {
// 	var top = $win.scrollTop();

//     if (top < limit) {
//         tgl(true);
//     } else {
//         tgl(false);
//     }
// });

jQuery(".ilist").click(function () {
  jQuery(this).toggleClass("act");
});

jQuery("body").on(
  "click",
  ".wp-listing > .wp-listing-right > span:first-child",
  function () {
    jQuery(this).parent().parent().toggleClass("hidden");
    jQuery(this)
      .closest(".wp-listing")
      .find(".accord_right")
      .toggleClass("active");
  }
);
jQuery("body").on("click", ".accord_right", function () {
  jQuery(this).parent().parent().toggleClass("hidden");
  jQuery(this).toggleClass("active");
});

jQuery(".expert-blocks-left li").hover(function () {
  var id = jQuery(this).attr("data-id");
  jQuery(".expert-blocks li").removeClass("activen");
  jQuery(this).addClass("activen");
  jQuery(".expert-tab").removeClass("activen");
  jQuery("#ex" + id).addClass("activen");
});

/*
 * jQuery throttle / debounce - v1.1 - 3/7/2010
 * http://benalman.com/projects/jquery-throttle-debounce-plugin/
 *
 * Copyright (c) 2010 "Cowboy" Ben Alman
 * Dual licensed under the MIT and GPL licenses.
 * http://benalman.com/about/license/
 */
(function (b, c) {
  var $ = b.jQuery || b.Cowboy || (b.Cowboy = {}),
    a;
  $.throttle = a = function (e, f, j, i) {
    var h,
      d = 0;
    if (typeof f !== "boolean") {
      i = j;
      j = f;
      f = c;
    }

    function g() {
      var o = this,
        m = +new Date() - d,
        n = arguments;

      function l() {
        d = +new Date();
        j.apply(o, n);
      }

      function k() {
        h = c;
      }

      if (i && !h) {
        l();
      }
      h && clearTimeout(h);
      if (i === c && m > e) {
        l();
      } else {
        if (f !== true) {
          h = setTimeout(i ? k : l, i === c ? e - m : e);
        }
      }
    }

    if ($.guid) {
      g.guid = j.guid = j.guid || $.guid++;
    }
    return g;
  };
  $.debounce = function (d, e, f) {
    return f === c ? a(d, e, false) : a(d, f, e !== false);
  };
})(this);
