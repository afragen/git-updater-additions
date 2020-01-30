<?php
/**
 * Requires GitHub Updater plugin.
 *
 * @package Fragen\GitHub_Updater
 * @author  Andy Fragen
 * @link    https://github.com/afragen/github-updater-additions
 *
 * @since   5.4.0
 * @access  public
 */

/**
 * Plugin Name:       GitHub Updater Additions
 * Plugin URI:        https://github.com/afragen/github-updater-additions
 * Description:       Add installed repositories lacking required headers to the GitHub Updater plugin.
 * Version:           4.0.0.1
 * Author:            Andy Fragen
 * License:           MIT
 * Network:           true
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

( new Bootstrap( __FILE__ ) )->run();
