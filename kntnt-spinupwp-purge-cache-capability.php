<?php

/**
 * @wordpress-plugin
 * Plugin Name:       Kntnt SpinupWP Purge Cache Capability
 * Plugin URI:        https://github.com/Kntnt/kntnt-spinupwp-purge-cache-capability
 * Description:       Changes the capability for empty cache through SpinupWP helper plugin to kntnt-spinupwp-purge-cache.
 * Version:           1.1.0
 * Author:            Thomas Barregren
 * Author URI:        https://www.kntnt.com/
 * License:           GPL-3.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 */

// Add the capability to empty cache to the administrator role.
// Use a role/capability plugin (e.g. Members by Justin Tadlock) to assign
// the capability to other roles.
add_action( 'wp_before_admin_bar_render', function () {
	if ( null !== ( $admin = get_role( 'administrator' ) ) && ! $admin->has_cap( 'kntnt_spinupwp_purge_cache' ) ) {
		$admin->add_cap( 'kntnt_spinupwp_purge_cache' );
	}
} );

add_filter( 'spinupwp_purge_cache_capability', function() {
  return 'kntnt_spinupwp_purge_cache';
} );
