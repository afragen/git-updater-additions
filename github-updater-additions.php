<?php
/**
 * GitHub Updater Additions.
 * Requires GitHub Updater plugin.
 *
 * @package github-updater-additions
 * @author  Andy Fragen
 * @link    https://github.com/afragen/github-updater-additions
 * @link    https://github.com/afragen/github-updater
 */

/**
 * Plugin Name:       GitHub Updater Additions
 * Plugin URI:        https://github.com/afragen/github-updater-additions
 * Description:       Add installed repositories lacking required headers to the GitHub Updater plugin.
 * Version:           4.0.3
 * Author:            Andy Fragen
 * License:           MIT
 * Network:           true
 * Domain Path:       /languages
 * Text Domain:       github-updater-additions
 * GitHub Plugin URI: https://github.com/afragen/github-updater-additions
 * Requires at least: 4.6
 * Requires PHP:      5.6
 */

namespace Fragen\GitHub_Updater\Additions;

use Fragen\Singleton;

/*
 * Exit if called directly.
 * PHP version check and exit.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load Autoloader.
require_once __DIR__ . '/vendor/autoload.php';

add_action(
	'plugins_loaded',
	function() {
		( new Bootstrap( __FILE__ ) )->run();
	}
);
