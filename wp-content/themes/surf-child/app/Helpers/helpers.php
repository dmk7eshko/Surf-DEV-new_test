<?php

	if ( ! function_exists( 'pagination' ) ) { // если ф-я уже есть в дочерней теме - нам не надо её определять
		function pagination() { // функция вывода пагинации
			global $wp_query; // текущая выборка должна быть глобальной
			$big   = 999999999; // число для замены
			$links = paginate_links( array( // вывод пагинации с опциями ниже
				'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				// что заменяем в формате ниже
				'format'             => '?paged=%#%',
				// формат, %#% будет заменено
				'current'            => max( 1, get_query_var( 'paged' ) ),
				// текущая страница, 1, если $_GET['page'] не определено
				'type'               => 'array',
				// нам надо получить массив
				'prev_text'          => 'Назад',
				// текст назад
				'next_text'          => 'Вперед',
				// текст вперед
				'total'              => $wp_query->max_num_pages,
				// общие кол-во страниц в пагинации
				'show_all'           => false,
				// не показывать ссылки на все страницы, иначе end_size и mid_size будут проигнорированны
				'end_size'           => 15,
				//  сколько страниц показать в начале и конце списка (12 ... 4 ... 89)
				'mid_size'           => 15,
				// сколько страниц показать вокруг текущей страницы (... 123 5 678 ...).
				'add_args'           => false,
				// массив GET параметров для добавления в ссылку страницы
				'add_fragment'       => '',
				// строка для добавления в конец ссылки на страницу
				'before_page_number' => '',
				// строка перед цифрой
				'after_page_number'  => ''
				// строка после цифры
			) );
			if ( is_array( $links ) ) { // если пагинация есть
				echo '<ul class="pagination">';
				foreach ( $links as $link ) {
					if ( strpos( $link, 'current' ) !== false ) {
						echo "<li class='active'>$link</li>";
					} // если это активная страница
					else {
						echo "<li>$link</li>";
					}
				}
				echo '</ul>';
			}
		}
	}

	function the_excerpt_max_charlength( $charlength, $id ) {
		echo get_the_excerpt_max_charlength( $charlength, $id );
	}

	function get_the_excerpt_max_charlength( $charlength, $id ) {
		$excerpt = get_the_excerpt( $id );
		$charlength ++;
		$res = '';

		if ( mb_strlen( $excerpt ) > $charlength ) {
			$subex   = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut   = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );

			$res .= ( $excut < 0 )
				? mb_substr( $subex, 0, $excut )
				: $subex;

			$res .= '...';
		} else {
			$res = $excerpt;
		}

		return $res;
	}

	add_action( 'wp_head', 'head_seo_meta_tags' );
	function head_seo_meta_tags() {
		if ( is_single() ) {
			if ( get_the_category( get_the_ID() ) ) {
				echo '<meta property="article:category" content="' . get_the_category( get_the_ID() )[0]->name . '" />';
			}
		}
	}

	function get_lang() {
		switch ( $_SERVER['SERVER_NAME'] ) {
			case 'surf.dev':
			case 'surf.test':
			case 'surf.dev.test':
			case 'surf-dev.local':
			case 'test-surf-site.surfstudio.ru':
			case 'surf.one-pix.com':
				return 'en';
			case 'surf.ru':
			case 'surf.ru.test':
			case 'surf-ru.test':
			case 'surf-en.test':
			case 'test-surf-ru-site.surfstudio.ru':
			case 'surf.one-pix.ru':
				return 'ru';
		}
	}

	function is_lang_ru() {
		return get_lang() == 'ru';
	}

	function is_lang_en() {
		return get_lang() == 'en';
	}

	function get_file_path_by_lang( $file ) {
		return THEME_DIR . '/templates/' . get_lang() . '/' . basename( $file );
	}


	function blog_hero_post_template( $data ) {
		global $shown_blog_posts;
		( ! isset( $shown_blog_posts ) ) && ( $shown_blog_posts = [] );
		$shown_blog_posts[] = $data->ID;

		$cat = get_the_category( $data->ID )[0];
		$img = get_the_post_thumbnail_url( $data->ID, 'full' );
		! $img && $img = '/wp-content/themes/surf/assets/img/blog-stub.png';
		?>
		<article class="blog-hero-post">
			<div class="blog-hero-post-image">
				<a href="<?= get_permalink( $data->ID ) ?>"> <img src="<?= $img ?>" alt="<?= $data->post_title ?>"/>
				</a>
			</div>
			<div class="blog-hero-post-content">
				<a class="blog-hero-post-category" href="<?= get_category_link( $cat->term_id ) ?>">
					<?= $cat->name ?>
				</a>
				<h3>
					<a href="<?= get_permalink( $data->ID ) ?>">
						<?= $data->post_title ?>
					</a>
				</h3>
				<p class="blog-hero-post-excerpt">
					<?php the_excerpt_max_charlength( 140, $data->ID ) ?>
				</p>
			</div>
		</article>
		<?php
	}

	function the_super_title( $id = null ) {
		echo super_title( $id );
	}

	function super_title( $id = null ) {
		$id    = empty( $id ) ? get_the_ID() : $id;
		$title = get_the_title( $id );

		$title = preg_replace( '/_([^_]+)_/', '<i>$1</i>', $title );
		$title = preg_replace( '/#nbsp;/', '&nbsp', $title );

		return $title;
	}

    /**
     * @return bool
     */
    function is_surf_employee(): bool
    {
        if (!is_user_logged_in()){
            return false;
        }

        $user = wp_get_current_user();
        $allowed_roles = array('administrator', 'editor', 'author');

        return !empty(array_intersect($allowed_roles, $user->roles));
    }