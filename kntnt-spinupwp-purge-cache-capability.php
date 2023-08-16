<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt SpinupWP Purge Cache Capability
 * Plugin URI:        https://github.com/Kntnt/kntnt-spinupwp-purge-cache-capability
 * Description:       Changes the capability for empty cache through SpinupWP helper plugin to kntnt-spinupwp-purge-cache.
 * Version:           1.0.1
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

add_filter( 'spinupwp_purge_cache_capability', function() {
  return 'kntnt_spinupwp_purge_cache';
} );
