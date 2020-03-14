<?php
/**
 * GitHub Updater Additions
 *
 * @author    Andy Fragen
 * @license   MIT
 * @link      https://github.com/afragen/github-updater-additions
 * @package   github-updater-additions
 */

namespace Fragen\GitHub_Updater\Additions;

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
		load_plugin_textdomain( 'github-updater-additions' );
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
		// Exit if GitHub Updater not running.
		if ( ! class_exists( '\\Fragen\\GitHub_Updater\\Bootstrap' ) ) {
			return false;
		}

		add_filter(
			'github_updater_additions',
			function( $false, $repos, $type ) {
				$config    = get_site_option( 'github_updater_additions', [] );
				$additions = new Additions();
				$additions->register( $config, $repos, $type );

				return $additions->add_to_github_updater;
			},
			10,
			3
		);

		( new Settings() )->load_hooks();
	}
}
