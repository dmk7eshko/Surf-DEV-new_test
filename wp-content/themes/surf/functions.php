<?php
	define('THEME', get_template_directory_uri());
	define('THEME_DIR', __DIR__);

	if (!function_exists('theme_setup')) :
		function theme_setup()
		{
			add_theme_support('title-tag');
			add_theme_support('post-thumbnails');

			set_post_thumbnail_size(250, 150);

			add_image_size('b525', 524, 344, true);
			add_image_size('b315', 315, 344, true);
			add_image_size('caseleft', 735, 480, true);
			add_image_size('caseright', 420, 480, true);
			add_image_size('sigler', 385, 250, true);

			register_nav_menus(array(
				'top' => 'Верхнее',
				'bottom' => 'Services',
				'bottom2' => 'Flutter Footer',
			));

			register_sidebar(array(
				'name' => 'Сайдбар',
				'id' => "sidebar",
				'description' => 'Обычная колонка в сайдбаре',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => "</div>",
				'before_title' => '<span class="widgettitle">',
				'after_title' => "</span>",
			));

		}
	endif;
	add_action('after_setup_theme', 'theme_setup');

    add_action('template_redirect', function($template){
        $privacy_url = get_field('discuss', 'options')['privacy'] ?? '/privacy/';
        $privacy_url = str_replace(get_bloginfo('url'), '',  $privacy_url);

        if ($_SERVER['REQUEST_URI'] === $privacy_url){
            $pdf_url = get_field('policy_pdf', 'options')['url'] ?? null;

            if ($pdf_url && $pdf_content = file_get_contents($pdf_url)){
                header('Content-type: application/pdf');
                echo $pdf_content;
                exit();
            }
        }
    }, 1, 1);

	function enqueue_theme_style_scripts()
	{
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//code.jquery.com/jquery-2.2.4.min.js', [], null, true);
		wp_enqueue_script('jquery');

		wp_enqueue_script('swiper', THEME . '/assets/js/swiper/swiper-bundle.min.js', [], null, true);
		wp_enqueue_script('backend_a', THEME . '/assets/js/backend_a.js', [], null, true);
		wp_enqueue_script('match-height', THEME . '/assets/js/jquery.matchHeight-min.js', ['jquery'], null, true);
// 		wp_enqueue_script('main', THEME . '/assets/js/main.js', [], 1.1.'.'.time(), true);
		wp_enqueue_script('custom', THEME . '/assets/js/custom.js', [], 1.1.'.'.time(), true);

		wp_enqueue_script('fancy', THEME . '/pub/js/vendors/fancybox-3.5.6.js', [], null, true);
// 		wp_enqueue_script('js-form-new', THEME . '/pub/js/vendors/init.js', [], null, true);


		wp_enqueue_style('swiper', THEME . '/assets/js/swiper/swiper-bundle.min.css', [], null);
		wp_enqueue_style('app', THEME . '/assets/css/app.css', array(), filemtime(dirname(__FILE__) . '/assets/css/app.css'));
		wp_enqueue_style('response', THEME . '/assets/css/media.css', array(), filemtime(dirname(__FILE__) . '/assets/css/media.css'));

		if (is_page_template('tpl-dev-flutter.php') || is_page_template('single-dev.php')) {
			wp_localize_script('dev', 'devObj',
				array(
					'admin_ajax' => admin_url('admin-ajax.php'),
				)
			);
		}

		wp_localize_script('backend_a', 'scripts_data',
			array(
				'admin_ajax' => admin_url('admin-ajax.php')
			)
		);
	}

	add_action('wp_enqueue_scripts', 'enqueue_theme_style_scripts');

	/* Body class condition */
	add_filter('body_class', function($classes) {
		if (in_array('body-dev', $classes)) {
			wp_enqueue_style('dev', THEME . '/assets/css/dev.css', array(), filemtime(dirname(__FILE__) . '/assets/css/dev.css'));
			wp_enqueue_script('dev', THEME . '/assets/js/dev.js', array(), 1.1 . '.' . time(), true);

			wp_localize_script('dev', 'devObj',
				array(
					'admin_ajax' => admin_url('admin-ajax.php'),
				)
			);

		} else {
			wp_enqueue_style('css-form-new', THEME . '/pub/css/new-form.css', array(), filemtime(dirname(__FILE__) . '/pub/css/new-form.css'));
		}

		if (in_array('app-dev', $classes)) {
			wp_enqueue_style('app-dev', THEME . '/assets/css/app-dev.css', array(), filemtime(dirname(__FILE__) . '/assets/css/app-dev.css'));
			wp_enqueue_style('css-new', THEME . '/pub/css/main.min.css', array(), filemtime(dirname(__FILE__) . '/pub/css/main.min.css'));
			wp_enqueue_script('app-dev', THEME . '/assets/js/app.js', array(), filemtime(dirname(__FILE__) . '/assets/js/app.js'), true);
			wp_enqueue_script('js-new', THEME . '/pub/js/main.min.js', array(), filemtime(dirname(__FILE__) . '/pub/js/main.min.js'), true);
			wp_enqueue_style('css-form-new', THEME . '/pub/css/new-form.css', array(), filemtime(dirname(__FILE__) . '/pub/css/new-form.css'));
		} else {
			wp_enqueue_style('css-form-new', THEME . '/pub/css/new-form.css', array(), filemtime(dirname(__FILE__) . '/pub/css/new-form.css'));
		}


		return $classes;
	});

	function admin_style()
	{
		#wp_enqueue_style('admin-styles', get_template_directory_uri() . '/assets/css/admin.css');
		wp_enqueue_script('admin', THEME . '/assets/js/admin.js?' . time(), '', '', true);
	}

	add_action('admin_enqueue_scripts', 'admin_style');

	require get_template_directory() . '/app/Autoloader.php';

/* Insert in head scripts  */
add_action('wp_head', 'insert_scripts_in_head');
function insert_scripts_in_head(){
?>
<script> (function(ss,ex){ window.ldfdr=window.ldfdr||function(){(ldfdr._q=ldfdr._q||[]).push([].slice.call(arguments));}; (function(d,s){ fs=d.getElementsByTagName(s)[0]; function ce(src){ var cs=d.createElement(s); cs.src=src; cs.async=1; fs.parentNode.insertBefore(cs,fs); }; ce('https://sc.lfeeder.com/lftracker_v1_'+ss+(ex?'_'+ex:'')+'.js'); })(document,'script'); })('JMvZ8gbrzJMa2pOd'); </script>
<?php
};

/*Save attached files in custom folder */
function surf_handle_attachment($file_handler,$post_id,$set_thu=false) {
	// check to make sure its a successful upload
	if ($_FILES[$file_handler]['error'] !== UPLOAD_ERR_OK) __return_false();

	require_once(ABSPATH . "wp-admin" . '/includes/image.php');
	require_once(ABSPATH . "wp-admin" . '/includes/file.php');
	require_once(ABSPATH . "wp-admin" . '/includes/media.php');

// 	$attach_id = media_handle_upload( $file_handler, $post_id );

		// changing the directory
		add_filter( 'upload_dir', 'wpse_custom_upload_dir' );
		// uploading
		$attach_id = media_handle_upload( $file_handler, $post_id );
		// remove so it doesn't apply to all uploads
		remove_filter( 'upload_dir', 'wpse_custom_upload_dir' );
	
         // If you want to set a featured image frmo your uploads. 
	if ($set_thu) set_post_thumbnail($post_id, $attach_id);
	return $attach_id;
}
function wpse_custom_upload_dir( $dir_data ) {
    // $dir_data already you might want to use
    $custom_dir = 'files';
    return [
        'path' => $dir_data[ 'basedir' ] . '/' . $custom_dir,
        'url' => $dir_data[ 'url' ] . '/' . $custom_dir,
        'subdir' => '/' . $custom_dir,
        'basedir' => $dir_data[ 'error' ],
        'error' => $dir_data[ 'error' ],
    ];
}
