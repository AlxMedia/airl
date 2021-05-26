<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Sample Theme
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'https://alx.media', // Site where EDD is hosted
		'item_name'      => 'Airl', // Name of theme
		'theme_slug'     => 'airl', // Theme slug
		'version'        => '1.0.4', // The current version of this theme
		'author'         => 'AlxMedia', // The author of this theme
		'download_id'    => '', // Optional, used for generating a license renewal link
		'renew_url'      => '', // Optional, allows for a custom license renewal link
		'beta'           => false, // Optional, set to true to opt into beta versions
	),

	// Strings
	$strings = array(
		'theme-license'             => __( 'Theme License', 'airl' ),
		'enter-key'                 => __( 'Enter your theme license key.', 'airl' ),
		'license-key'               => __( 'License Key', 'airl' ),
		'license-action'            => __( 'License Action', 'airl' ),
		'deactivate-license'        => __( 'Deactivate License', 'airl' ),
		'activate-license'          => __( 'Activate License', 'airl' ),
		'status-unknown'            => __( 'License status is unknown.', 'airl' ),
		'renew'                     => __( 'Renew?', 'airl' ),
		'unlimited'                 => __( 'unlimited', 'airl' ),
		'license-key-is-active'     => __( 'License key is active.', 'airl' ),
		'expires%s'                 => __( 'Expires %s.', 'airl' ),
		'expires-never'             => __( 'Lifetime License.', 'airl' ),
		'%1$s/%2$-sites'            => __( 'You have %1$s / %2$s sites activated.', 'airl' ),
		'license-key-expired-%s'    => __( 'License key expired %s.', 'airl' ),
		'license-key-expired'       => __( 'License key has expired.', 'airl' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'airl' ),
		'license-is-inactive'       => __( 'License is inactive.', 'airl' ),
		'license-key-is-disabled'   => __( 'License key is disabled.', 'airl' ),
		'site-is-inactive'          => __( 'Site is inactive.', 'airl' ),
		'license-status-unknown'    => __( 'License status is unknown.', 'airl' ),
		'update-notice'             => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'airl' ),
		'update-available'          => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'airl' ),
	)

);
