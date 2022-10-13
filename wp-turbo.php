<?php

/**
 * @wordpress-plugin
 * Plugin Name: WP Turbo
 * Version:     2022.10.12.
 * Plugin URI:  https://github.com/harkalygergo/wp-turbo
 * Description: Universal plugin to make WordPress better, faster, safer.
 * Author:      Harkály Gergő
 * Author URI:  https://www.harkalygergo.hu
 * Text Domain: wp-turbo
 * Domain Path: /languages/
 * License:     GPL v3
 * Requires at least: 5.9
 * Requires PHP: 8.0
 *
 * WC requires at least: 3.0
 */

declare( strict_types=1 );

use WPTurbo\App\App;

// prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    return null;
}

include_once 'src/App/App.php';
(new App());
