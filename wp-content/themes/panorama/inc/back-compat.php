<?php
/**
 * Bootstrap Theme back compat functionality.
 *
 * Prevents Bootstrap Theme from running on WordPress versions prior to 3.6,
 * since this theme is not meant to be backwards compatible and relies on
 * many new functions and markup changes introduced in 3.6.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Bootstrap Theme 1.0
 */

/**
 * Prevent switching to Bootstrap Theme on old versions of WordPress. Switches
 * to the default theme.
 *
 * @since Bootstrap Theme 1.0
 *
 * @return void
 */
function bootstrap_switch_theme() {
	switch_theme( WP_DEFAULT_THEME, WP_DEFAULT_THEME );
	unset( $_GET['activated'] );
	add_action( 'admin_notices', 'bootstrap_upgrade_notice' );
}
add_action( 'after_switch_theme', 'bootstrap_switch_theme' );

/**
 * Prints an update nag after an unsuccessful attempt to switch to
 * Bootstrap Theme on WordPress versions prior to 3.6.
 *
 * @since Bootstrap Theme 1.0
 *
 * @return void
 */
function bootstrap_upgrade_notice() {
	$message = sprintf( __( 'Bootstrap Theme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'bootstrap' ), $GLOBALS['wp_version'] );
	printf( '<div class="error"><p>%s</p></div>', $message );
}

/**
 * Prevents the Customizer from being loaded on WordPress versions prior to 3.6.
 *
 * @since Bootstrap Theme 1.0
 *
 * @return void
 */
function bootstrap_customize() {
	wp_die( sprintf( __( 'Bootstrap Theme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'bootstrap' ), $GLOBALS['wp_version'] ), '', array(
		'back_link' => true,
	) );
}
add_action( 'load-customize.php', 'bootstrap_customize' );

/**
 * Prevents the Theme Preview from being loaded on WordPress versions prior to 3.4.
 *
 * @since Bootstrap Theme 1.0
 *
 * @return void
 */
function bootstrap_preview() {
	if ( isset( $_GET['preview'] ) ) {
		wp_die( sprintf( __( 'Bootstrap Theme requires at least WordPress version 3.6. You are running version %s. Please upgrade and try again.', 'bootstrap' ), $GLOBALS['wp_version'] ) );
	}
}
add_action( 'template_redirect', 'bootstrap_preview' );