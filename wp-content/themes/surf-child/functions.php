<?php

add_action( 'wp_enqueue_scripts', 'surf_theme_enqueue_styles', 1000 );
function surf_theme_enqueue_styles() {
wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array(), rand(111,9999), 'all' );
wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), rand(111,9999), 'all' );
}
add_action( 'wp_enqueue_scripts', 'surf_scripts_method', 140 );
function surf_scripts_method(){
  wp_enqueue_script( 'main-js', get_stylesheet_directory_uri() . '/assets/js/main.js', array(), rand(111,9999), true);
}

//insert scripts in footer
add_action('wp_footer', 'wp_eventlistener', 100);
function wp_eventlistener() {
	if(is_single() && 'post' == get_post_type()){
?>
	<script>
		(function ($) {
			
		const start = new Date().getTime();

		setTimeout(function() {
			let serc = "#contact";
			jQuery.fancybox.open({ 
				src: serc,
				wrapCSS : 'contacts-wrap',
				afterLoad: function() {

				},
				afterClose: function() {
					$("#contact").show().css('display', 'flex');
					$(".contact__form .contacts-form__subtitle").remove();
				}
			  });
				$(".fancybox-container #contact").prepend(
				<?php 
					$contacts = get_field('discuss_form', 'option');
					$subtitle = $contacts['subtitle_en'] ?: 'Surf can do it for you. Drop us a brief and let’s do your project together!';
					?>
					"<div class='contacts-form__subtitle'><?php echo $subtitle; ?></div>"
				);
			  const end = new Date().getTime();
			  console.log('SecondWayShows:' + (end - start));
		}, 40000)
			}
		)(jQuery);
		  </script>
  <?php } ?>
	<script>
	$(".contact-form-input input").keyup(function() {
		if (this.value.length > 60)
			this.value = this.value.substr(0, 60);
	});
	$(".contact-form-input textarea").keyup(function() {
		if (this.value.length > 600)
			this.value = this.value.substr(0, 600);
	});
	jQuery(".closer").click(function () {
	jQuery(".overlay").css("display", "none");
	});
		
</script>
<script>
	$('a[href^="#"]').on('click', function(e) { // Если ссылка является якорем, то выполняем следующее:
  let link = $(this).attr('href'), // берём ссылку якоря. Она же по факту id элемента
      el = $(document).find(link); // ищем элемент
  if(el.length > 0) { // если он существует
    el = el.eq(0).offset().top; // берём ПЕРВЫЙ элемент
    $('html, body').animate({
      scrollTop: el+'px' // выполняем к нему скролл
    }, 1000, 'linear');
  }
  return false; // Отменяем переход по ссылке => и вывод якоря в адресную строку
});
</script>

<!--  <script src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script> -->
	<script>
				  /* FAQ accordion */
  const accLinks = document.querySelectorAll('.faq-tab__link');
  const accPanels = document.querySelectorAll('.faq-tab__panel');

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

		
		/*slider testimonials*/
// 		jQuery(".slider").slick({
//   infinite: true,
//   slidesToShow: 3,
//   slidesToScroll: 1,
//   respondTo:'slider',
//   responsive: [

//     {
//       breakpoint: 1200,
//       settings: {
//         slidesToShow: 3,
//         slidesToScroll: 1
//       }
//     },
//     {
//       breakpoint: 900,
//       settings: {
//         slidesToShow: 2,
//         slidesToScroll: 2
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//         slidesToScroll: 1
//       }
//     },
    
//   ]
// });

// function previous() {
//   jQuery(".slider").slick('slickPrev');
// }

// function next() {
//   jQuery(".slider").slick('slickNext');
// }
</script>

<!--  slider testimonials -->
<script>
    var swiper = new Swiper(".testimonialsSwiper", {
      slidesPerView: 4,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  
    });
  </script>
<script>
    var swiper = new Swiper(".postsSwiper", {
	slidesPerView: 4.2,
     spaceBetween: 24,
     navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
// 		mousewheel: true,
		keyboard: true,
		breakpoints: {
			200: {
				slidesPerView: 1.1,
				spaceBetween: 8,
			},
        425: {
          slidesPerView: 1.1,
          spaceBetween: 8,
        },
        768: {
          slidesPerView: 2.2,
          spaceBetween: 16,
        },
        1280: {
          slidesPerView: 3.3,
          spaceBetween: 24,
        },
      },
    });
  </script>
<?php
}

function wpb_custom_new_menu() {
  register_nav_menu('surf-new-menu',__( 'New menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );



function weichie_load_more() {
	$recent_publications = new WP_Query([
		'post_type' => 'publications',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		'fields' => 'ids',
	]);
	$posts_args = array(
		'posts_per_page' => 3,
		'orderby'        => 'date',
		'paged' => $_POST['paged'],
		'post__not_in' => $recent_publications->get_posts(),
		'cat' => $_POST['category']
	);
	$posts = new WP_Query($posts_args);  
	$max_pages = $posts->max_num_pages;

	// Цикл
	if ($posts->have_posts()) {
		ob_start();
		while ($posts->have_posts()) {
			$posts->the_post();
	
			get_template_part('post-loop');
		}
		$output = ob_get_contents();
		ob_end_clean();
	} else {
		// Постов не найдено
	}
	$result = [
		'max' => $max_pages,
		'cat' => $posts,
		'html' => $output,
	];
						
	echo json_encode($result);
	
	exit;
}
add_action('wp_ajax_weichie_load_more', 'weichie_load_more');
add_action('wp_ajax_nopriv_weichie_load_more', 'weichie_load_more');


function cases_load_more() {
	$tax_query = array('relation' => 'AND');
	if($_POST['pp2'] != ''){
		$tax_query[] = array(
            'taxonomy' => 'type',
            'field'    => 'id',
            'terms'    => $_POST['pp2'],
            'operator' => 'IN',
        );
	}
	$posts_args = array(
		'posts_per_page' => 3,
		'orderby'        => 'date',
		'orderby'        => 'date',
		'paged' => $_POST['paged'],
		'post_type' => 'cases',
		'tax_query' => $tax_query,
	);
	$posts = new WP_Query($posts_args);  
	$max_pages = $posts->max_num_pages;

	// Цикл
	if ($posts->have_posts()) {
		ob_start();
		while ($posts->have_posts()) {
			$posts->the_post();
	
			get_template_part('cases_template');
		}
		$output = ob_get_contents();
		ob_end_clean();
	} else {
		// Постов не найдено
	}
	$result = [
		'max' => $max_pages,
		'otrasli' => $posts,
		'html' => $output,
	];
						
	echo json_encode($result);
	
	exit;
}
add_action('wp_ajax_cases_load_more', 'cases_load_more');
add_action('wp_ajax_nopriv_cases_load_more', 'cases_load_more');



// function edit_menu_item($item_output, $item) {
//     if ( get_field('menu_title') ) { 
//         return '<button class="wefgewfgewfe">'.$item->title.'</button>';
//     }
//     return $item_output;
// }
// add_filter('walker_nav_menu_start_el','edit_menu_item', 10, 2);



// function cc_add_search_form( $items, $args ) {
//     if ( $args->theme_location == 'top' ) {
//         $items_array     = explode( PHP_EOL, str_replace( "\r", '', $items ) );
//         $new_items_array = array();
//         foreach ( $items_array as $line ) {
//             if ( preg_match( '/<li[^>]*class="[^"]*\munu-title\b[^"]*"[^>]*>/i', $line ) ) {
//                 $new_items_array[] = preg_replace( '/(<button[^>]*>.*?<\/button>)/is', '', $line );
//             } else {
//                 $new_items_array[] = $line;
//             }
//         }
//         $items = trim( join( PHP_EOL, $new_items_array ) );
//     }

//     return $items;
// }
// add_filter( 'wp_nav_menu_items', 'cc_add_search_form', 10, 2 );



// function lb_menu_anchors($items, $args) {
// // current page is NOT front page?
//   if(!is_front_page()){
//     // loop through menu-objects (the links)
//     foreach ($items as $key => $item) {
// 		print_r($items);
// 		print_r($item);
//         // check if link begins with '#'
//         if ($item->object == 'custom' && substr($item->url, 0, 1) == '#') {
//             // if so, prepend site_url to link
//             $item->title = 'site_url() . $item->url' ;
//         }
//     }
//     // return edited links
//     return $items;
//   }
//   else {
//     // return unedited links if current page IS front page
//     return $items;
//   }
//   }
// add_filter('wp_nav_menu_objects', 'lb_menu_anchors', 10, 2);





// function change_submenu_class_name($submenu) {

// $submenu = preg_replace('/ class="munu-title"/','/ class="dropdown" /',$submenu);

// return $submenu;
// }
// add_filter('wp_nav_menu','change_submenu_class_name');




// function _namespace_modify_menuclass($ulclass) {
// // 	<a class="mega-menu-link" href="https://surf.dev/staging/test/" aria-haspopup="true" aria-expanded="false">Flutter App Development Company<span class="mega-indicator" data-has-click-event="true"></span></a>
//     return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
// }

// add_filter('wp_nav_menu', '_namespace_modify_menuclass');




function remove_all_image_sizes() {
    foreach ( get_intermediate_image_sizes() as $size ) {
            remove_image_size( $size );
    }
}
 
add_action('init', 'remove_all_image_sizes');


// add_action( 'wp_head', 'wpse_70701_author_image', 5 );
// function wpse_70701_author_image() {
//     if ( is_author( 'michelle-robinson' ) ) {
//         // set a custom image if we're visiting Michelle Robinson's author page
//        echo '<meta property="og:image" content="http://www.phoneographer.org/wp-content/uploads/link-to-michelle-robinson-image.png" />';
//     }
//     else {
//         $user_id = get_the_author_meta('ID');
//        echo '<meta property="og:image" content="' . get_field('user_photo', 'user_'. $user_id )  . '" />';
//     }
// }

 

/**
 * Add an extra image to the top of the og:image tags array
 */
add_filter( 'wpseo_opengraph_image', 'yoast_seo_default_opengraph_change' );
function yoast_seo_default_opengraph_change($url) {
	$user_id = get_the_author_meta('ID');
	$url = get_field('user_photo', 'user_'. $user_id );
	
	return $url;
}