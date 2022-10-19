<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * Plugin Name: Google Pay UPI by Aavoya
 * Plugin URI: https://www.aavoya.co/google-pay-upi-by-aavoya
 * Author: Pijush Gupta
 * Author URI: https://www.linkedin.com/in/pijush-gupta-php/
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Description: Google Pay Unified Payment Interface
 * Text Domain: google-pay-upi-by-aavoya
 * Requires PHP: 7.3.0
 * Version: 2022.10
 */

/**
 * Exit, if woocommerce not installed and main App.php not present
 */
if(!class_exists('WooCommerce')) return;
if (!file_exists(__DIR__ . '/core/app/app.php')) return;


function initiate_plugin() {
	require_once __DIR__ . 	'/core/app/app.php';
}
add_action('plugins_loaded', 'initiate_plugin');


