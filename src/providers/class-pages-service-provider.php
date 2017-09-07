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

namespace Plugin_Name\Providers;

use Plugin_Name\Contracts\Service_Provider;

class Pages_Service_Provider extends Service_Provider {
	/**
	 * Name of the provider. Used as part of key
	 * of filter name for services collection.
	 *
	 * @var string
	 */
	const NAME = 'pages';

	/**
	 * Registers pages services at `admin_menu` hook.
	 *
	 * @return void
	 */
	public function boot() {
		add_action( 'admin_menu', [ $this, 'register' ] );
	}
}