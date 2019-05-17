<?php
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Class Forminator_Settings_Page
 *
 * @since 1.0
 */
class Forminator_Settings_Page extends Forminator_Admin_Page {

	/**
	 * Addons data that will be sent to settings page
	 *
	 * @var array
	 */
	private $addons_data = array();
	public  $addons_list = array();

	public function init() {
		$this->process_request();
	}

	public function enqueue_scripts( $hook ) {
		parent::enqueue_scripts( $hook );
		wp_localize_script( 'forminator-admin', 'forminator_addons_data', $this->addons_data );
	}

	public function before_render() {
		if ( Forminator::is_addons_feature_enabled() ) {
			$this->prepare_addons();
		}
	}

	private function prepare_addons() {
		// cleanup activated addons
		Forminator_Addon_Loader::get_instance()->cleanup_activated_addons();

		Forminator_Addon_Admin_Ajax::get_instance()->generate_nonce();

		$addons_list = forminator_get_registered_addons_list();

		$this->addons_data = array(
			'addons_list' => $addons_list,
			'nonce'       => Forminator_Addon_Admin_Ajax::get_instance()->get_nonce(),
		);

		$this->addons_list = forminator_get_registered_addons_list();
	}

	public function process_request() {
		if ( ! isset( $_POST['forminatorNonce'] ) ) {
			return;
		}

		$nonce = $_POST['forminatorNonce']; // WPCS: CSRF OK
		if ( ! wp_verify_nonce( $nonce, 'forminatorSettingsRequest' ) ) {
			return;
		}

		$is_redirect = true;
		$action      = isset( $_POST['forminator_action'] ) ? $_POST['forminator_action'] : '';
		switch ( $action ) {
			case 'reset_plugin_settings':
				forminator_reset_settings();
				break;
			default:
				break;
		}

		if ( $is_redirect ) {
			//todo add messaging as flash
			$fallback_redirect = admin_url( 'admin.php' );
			$fallback_redirect = add_query_arg(
				array(
					'page' => $this->get_admin_page(),
				),
				$fallback_redirect
			);
			$this->maybe_redirect_to_referer( $fallback_redirect );
		}

		exit;
	}
}
