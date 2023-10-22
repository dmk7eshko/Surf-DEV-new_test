<?php

	class WPHeadController
	{
		public function __construct()
		{
			add_action('wp_head', [$this, 'post_google_fonts']);
		}

		public function post_google_fonts()
		{
			if (is_singular('post')) {
				$google_roboto_mono_url = 'https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap';
				?>

				<link rel="preconnect" href="https://fonts.gstatic.com">
				<link href="<?= $google_roboto_mono_url; ?>" rel="stylesheet">

				<?php
			}
		}
	}

	new WPHeadController();