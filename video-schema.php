<?php
/**
 * WPVideoSchema
 *
 * @package           WPVideoSchema
 * @author            Uriel Wilson
 * @copyright         2020 Uriel Wilson
 * @license           GPL-2.0
 * @link           		https://urielwilson.com
 *
 * @wordpress-plugin
 * Plugin Name:       WP Video Schema
 * Plugin URI:        https://switchwebdev.com/wordpress-plugins/
 * Description:       Easily add Structured data for video embeds, video schema markup on your video based website. test using Google rich results page support (https://search.google.com/test/rich-results)
 * Version:           0.2.1
 * Requires at least: 3.4
 * Requires PHP:      5.6
 * Author:            SwitchWebdev.com
 * Author URI:        https://switchwebdev.com
 * Text Domain:       wp-video-schema
 * Domain Path:       languages
 * License:           GPLv2
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */

    # deny direct access
    if ( ! defined( 'WPINC' ) ) {
      die;
    }

    /**
     * uses WP Structured Video Data
     * By default, all video embeds in WordPress will automatically have the appropriate structured data injected.
     * @link https://github.com/wpscholar/wp-structured-video-data
     */
    require_once 'vendor/autoload.php';
