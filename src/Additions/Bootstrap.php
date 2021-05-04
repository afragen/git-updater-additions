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

// Load textdomain.
add_action(
	'init',
	function () {
		load_plugin_textdomain( 'git-updater-additions' );
	}
);

/**
 * Class Bootstrap
 */
class Bootstrap {
	/**
	 * Holds main plugin file.
	 *
	 * @var $file
	 */
	protected $file;

	/**
	 * Holds main plugin directory.
	 *
	 * @var $dir
	 */
	protected $dir;

	/**
	 * Constructor.
	 *
	 * @param  string $file Main plugin file.
	 * @return void
	 */
	public function __construct( $file ) {
		$this->file = $file;
		$this->dir  = dirname( $file );
	}

	/**
	 * Run the bootstrap.
	 *
	 * @return bool|void
	 */
	public function run() {
		// Bail if Git Updater not active.
		if ( ! class_exists( '\\Fragen\\Git_Updater\\Bootstrap' ) ) {
			return false;
		}
		if ( ! gua_fs()->can_use_premium_code() ) {
			return;
		}

		( new Settings() )->load_hooks();
	}
}
