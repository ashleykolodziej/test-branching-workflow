<?php
/**
 * Theme functions
 *
 * @see  https://github.com/bu-ist/responsive-framework/wiki/Starting-a-new-Child-Theme
 *
 * @package Responsive_Child_Starter
 */

/**
 * Current theme's version.
 *
 * This DOES NOT control the version of Responsive Framework.
 *
 * It represents the version of this child theme and is used to version theme
 * assets (style.css, production.js, etc.) when loaded.
 * 1.0.0 should be reserved for the official site launch.
 *
 * @link https://semver.org/
 */
define( 'RESPONSIVE_CHILD_THEME_VERSION', '0.0.9' );

/**
 * Specifies the responsive layout for the theme. Disables the option in the
 * Customizer.
 *
 * Removing this allows the layout to be changed in the Customizer.
 *
 * Available values: `default`, `top-nav`, `side-nav`, `no-nav`, `mega-nav`.
 *
 * @link https://github.com/bu-ist/responsive-framework/wiki/Changing-Available-Layouts-And-Default-Layout
 */
define( 'BU_RESPONSIVE_LAYOUT', 'default' );

/**
 * Specifies the site's branding type. Disables the option in the Customizer.
 *
 * Removing this allows the branding type to be changed in the Customizer.
 *
 * Available values: `logotype`, `signature`, `unbranded`.
 */
define( 'BU_BRANDING_TYPE', 'logotype' );

/**
 * Defines a sidebar position for the theme. Disables the option in the
 * Customizer.
 *
 * Removing this allows the layout to be changed in the Customizer.
 *
 * Available values: `right`, `left`, `bottom`.
 */
define( 'BU_RESPONSIVE_SIDEBAR_POSITION', 'right' );

/**
 * TODO: Delete the following two lines and the php-dev folder before going live.
 * These lines include the php-dev templates development hooks for use in
 * designing sections rapidly.
 */
require_once 'php-dev/dev-functions.php';
add_filter( 'after_setup_theme', 'dev_sections' );

function on_push() {
	echo "hello";
}
