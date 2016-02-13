<?php

/**
 * Plugin Name:       GitHub Updater Additions
 * Plugin URI:        https://github.com/afragen/github-updater-additions
 * Description:       Add installed repositories lacking GitHub Updater headers to the GitHub Updater plugin via a JSON file.
 * Version:           1.0
 * Author:            Andy Fragen
 * License:           GNU General Public License v2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.html
 * Network:           true
 * GitHub Plugin URI: https://github.com/afragen/github-updater-additions
 * GitHub Branch:     master
 * Requires WP:       4.4
 * Requires PHP:      5.3
 */

/**
 * Requires GitHub Updater plugin.
 * @since   5.4.0
 * @access  public
 */
namespace Fragen\GitHub_Updater;

add_filter( 'github_updater_additions', function ( $config, $repos, $type ) {
	$config    = file_get_contents( __DIR__ . '/github-updater-additions.json' );
	$additions = Additions::instance();
	$additions->register( $config, $repos, $type );

	return $additions->add_to_github_updater;
}, 10, 3 );
