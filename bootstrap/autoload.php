<?php
/**
 * WP Plugin Boilerplate.
 *
 * @package   Plugin_Name
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

require_once dirname( __DIR__ ) . '/src/class-autoloader.php';

/**
 * Automatically locates and loads files based on their
 * namespaces and their file names whenever
 * plugin is instantiated.
 *
 * @todo Change variable prefix to your unique plugin name.
 * @todo Change `add_namespace` first argument to your plugin namespace.
 */
$plugin_name_autoloader = new Plugin_Name\Autoloader( 'Plugin_Name', dirname( __DIR__ ) . '/src' );

$plugin_name_autoloader
	->add_prefix( 'class' )
	->add_prefix( 'interface' )
	->register();
