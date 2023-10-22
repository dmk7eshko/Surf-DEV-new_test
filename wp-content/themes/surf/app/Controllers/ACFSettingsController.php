<?php

	class ACFSettingsController {
		public function __construct() {
			add_action( 'acf/init', [ $this, 'init_acf_theme_settings' ] );
        }

		public function init_acf_theme_settings() {
			if ( function_exists( 'acf_add_options_page' ) ) {

				acf_add_options_page( array(
					'page_title' => 'Общие настройки',
					'menu_title' => 'Общие настройки',
					'menu_slug'  => 'theme-common-settings',
					'capability' => 'edit_posts',
					'redirect'   => false
				) );

			}
		}
	}

	new ACFSettingsController();