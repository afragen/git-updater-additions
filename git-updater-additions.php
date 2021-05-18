<?php
/**
 * Git Updater Additions.
 * Requires Git Updater plugin.
 *
 * @package git-updater-additions
 * @author  Andy Fragen
 * @link    https://github.com/afragen/git-updater-additions
 * @link    https://github.com/afragen/git-updater
 */

/**
 * Plugin Name:       Git Updater Additions
 * Plugin URI:        https://github.com/afragen/git-updater-additions
 * Description:       Add installed repositories lacking required headers to the Git Updater plugin.
 * Version:           5.2.3
 * Author:            Andy Fragen
 * License:           MIT
 * Network:           true
 * Domain Path:       /languages
 * Text Domain:       git-updater-additions
 * GitHub Plugin URI: https://github.com/afragen/git-updater-additions
 * Requires at least: 5.2
 * Requires PHP:      7.0
 */

namespace Fragen\Git_Updater\Additions;

/*
 * Exit if called directly.
 * PHP version check and exit.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load Autoloader.
require_once __DIR__ . '/vendor/autoload.php';

( new GUA_Freemius() )->init();
add_action(
	'plugins_loaded',
	function() {
		( new Bootstrap( __FILE__ ) )->run();
	}
);

add_filter(
	'gu_additions',
	function( $false, $repos, $type ) {
		$config    = get_site_option( 'git_updater_additions', [] );
		$additions = new Additions();
		$additions->register( $config, $repos, $type );

		return $additions->add_to_git_updater;
	},
	10,
	3
);
