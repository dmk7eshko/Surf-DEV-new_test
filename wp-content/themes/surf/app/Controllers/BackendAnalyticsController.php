<?php
/**
 * Class BackendAnalyticsController
 */

class BackendAnalyticsController {
	/**
	 * Instances of class.
	 *
	 * @var array
	 */
	private static $instances = false;

	/**
	 * Url for collect data.
	 *
	 * @var string
	 */
	private static $ga_url = 'https://www.google-analytics.com/collect';

	/**
	 * Google ID.
	 *
	 * @var string
	 */
	private $uaid = '';

	/**
	 * HR Google ID.
	 *
	 * @var string
	 */
	private $uaid_hr = '';

	/**
	 * Return instance of class.
	 *
	 * @return mixed|static
	 */
	public static function get_instance() {
		$cls = static::class;
		if (!isset(self::$instances[$cls])) {
			self::$instances[$cls] = new static();
		}

		return self::$instances[$cls];
	}

	/**
	 * BackendAnalyticsController constructor.
	 */
	protected function __construct() {
		add_action( 'customize_register', array( $this, 'add_settings' ) );

		add_action( 'wp_ajax_send_ga_event', array( $this, 'ajax_callback' ) );
		add_action( 'wp_ajax_nopriv_send_ga_event', array( $this, 'ajax_callback' ) );

		$this->uaid = get_theme_mod( 'uaid' );
		$this->uaid_hr = get_theme_mod( 'uaid_hr' );
	}

	/**
	 * Add settings for backend analytics.
	 *
	 * @param WP_Customize_Manager $wp_customize
	 */
	public function add_settings( WP_Customize_Manager $wp_customize ) {
		$wp_customize->add_setting( 'uaid', [
			'default'            => '',
			'sanitize_callback'  => 'sanitize_text_field',
			'transport'          => 'postMessage'
		] );

		$wp_customize->add_control( 'uaid', [
			'section'  => 'title_tagline',
			'label'    => 'Google Analytics ID',
			'type'     => 'text'
		] );

		$wp_customize->add_setting( 'uaid_hr', [
			'default'            => '',
			'sanitize_callback'  => 'sanitize_text_field',
			'transport'          => 'postMessage'
		] );

		$wp_customize->add_control( 'uaid_hr', [
			'section'  => 'title_tagline',
			'label'    => 'HR Google Analytics ID',
			'type'     => 'text'
		] );
	}

	/**
	 * Send data to GA.
	 *
	 * @param array $data params for send.
	 * @param bool $is_hr where to send event.
	 *
	 * Accepted params in GA:
	 * v=1; // Version. Static.
	 * tid=$this->uaid; // Tracking ID /  Property ID.
	 * cid='get_id_from_cookie'; // Anonymous Client ID.
	 * t='event|pageview'; // Event hit type.
	 * ec='UX'; // Event Category. Required.
	 * ea='click'; // Event Action. Required.
	 * el='Results'; // Event label.
	 * dh='test.com'; // Document hostname.
	 * dp='/home'; // Page.
	 * dt='homepage'; // Page title.
	 * dl='https://example.com/home'; // Page url.
	 * ds='web'; // App type
	 * dr='1'; // Referrer.
	 * ua='Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14'; // User Agent.
	 * uip=$_SERVER['REMOTE_ADDR']; // IP
	 * cn='utm_campaign'; // Ads campaign name. F.e. - my_awesome_ad_campaign
	 * cs='utm_source'; // Ads source. F.e. - google.com
	 * cm='utm_medium'; // Ads type. F.e. - cpc | email | smm.
	 * ck='utm_term'; // Ads term. F.e. - my_awesome_product.
	 * cc='utm_content'; // Ads content.
	 * gclid='gclid'; // Ads campaign ID.
	 * sc='start|end'; // Control session start and end.
	 *
	 * @return bool if data send successfully - true, otherwise - false.
	 */
	private function send_ga_event( $data = array(), $is_hr = false ) {
		$data['v']=1;
		$data['ds']='web';
		$data['uip']=$_SERVER['REMOTE_ADDR'];
		$data['tid']= $is_hr ? $this->uaid_hr : $this->uaid;

		if ( ! $data['tid'] ) {
			return false;
		}

		$url = self::$ga_url . '?';

		$is_first = true;

		foreach ( $data as $key => $value ) {
			if ( $is_first ) {
				$url .= $key . '=' . $value;
				$is_first = false;
			} else {
				$url .= '&' . $key . '=' . $value;
			}
		}

		$status = false;

		if ( class_exists( 'Requests' ) ) {
			$response = Requests::post( $url );
			$status = $response->success;
		}

		return $status;
	}

	/**
	 * Endpoint for ajax.
	 */
	public function ajax_callback() {
		// Validate data.
		if ( ! isset( $_POST['data'] ) || ! is_array( $_POST['data'] ) ) {
			wp_send_json_error();
		}

		$data = array();
		$is_hr = false;

		if ( isset( $_POST['is_hr_event'] ) ) {
			$is_hr = $_POST['is_hr_event'] == 'true';
		}

		foreach ( $_POST['data'] as $key => $value ) {
			if ( is_string( $value ) || is_numeric( $value ) ) {
				$data[$key] = esc_html( $value );
			}
		}

		$status = $this->send_ga_event( $data, $is_hr );

		wp_send_json( array( 'success' => $status ) );
	}
}

BackendAnalyticsController::get_instance();
