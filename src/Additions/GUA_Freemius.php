<?php
/**
 * Git Updater Additions
 *
 * @author    Andy Fragen
 * @license   MIT
 * @link      https://github.com/afragen/git-updater-additions
 * @package   git-updater-additions
 */

namespace Fragen\Git_Updater\Additions;

/*
 * Exit if called directly.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Freemius integration.
 * Freemius 'start.php' autoloaded via composer.
 */
class GUA_Freemius {

	/**
	 * Freemius integration.
	 *
	 * @return array|void
	 */
	public function init() {
		require_once dirname( __DIR__, 2 ) . '/vendor/freemius/wordpress-sdk/start.php';

		if ( ! function_exists( 'gua_fs' ) ) {

			/**
			 * Create a helper function for easy SDK access.
			 *
			 * @return \stdClass
			 */
			function gua_fs() {
				global $gua_fs;

				if ( ! isset( $gua_fs ) ) {
					$gua_fs = fs_dynamic_init(
						[
							'id'               => '8313',
							'slug'             => 'git-updater-additions',
							'premium_slug'     => 'git-updater-additions',
							'type'             => 'plugin',
							'public_key'       => 'pk_fb31d805f07c78b81299c52806262',
							'is_premium'       => true,
							'is_premium_only'  => true,
							'has_addons'       => false,
							'has_paid_plans'   => true,
							'is_org_compliant' => false,
							'trial'            => [
								'days'               => 3,
								'is_require_payment' => true,
							],
							'menu'             => [
								'slug'    => 'git-updater',
								'contact' => false,
								'support' => false,
								'parent'  => [
									'slug' => is_multisite() ? 'settings.php' : 'options-general.php',
								],
							],
						]
					);
				}

				return $gua_fs;
			}

			// Init Freemius.
			gua_fs();
			// Signal that SDK was initiated.
			do_action( 'gua_fs_loaded' );
		}
		gua_fs()->add_filter( 'plugin_icon', [ $this, 'add_icon' ] );
	}

	/**
	 * Add custom plugin icon to update notice.
	 *
	 * @return string
	 */
	public function add_icon() {
		return dirname( __DIR__, 2 ) . '/assets/icon.svg';
	}
}
