<?php

class BodyClassController
{
	public function __construct()
	{
		add_filter('body_class', [$this, 'setBodyClasses']);
	}

	public function setBodyClasses($classes): array
	{
		if (is_page('career') || is_page('career-wip')) {
			$classes[] = 'landing-career';
		}

		if (is_page('discuss') || is_page_template('tpl-career-form.php')) {
			$classes[] = 'padding-discuss';
		} else {
			$classes[] = 'padding';
		}

		if (is_page_template('tpl-career.php')) {
			$classes[] = 'career-page';
		}
		if (is_page_template('flutter-template.php')) {
			$classes[] = 'have-faq';
		}

		return $classes;
	}

}

new BodyClassController();