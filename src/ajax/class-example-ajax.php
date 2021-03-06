<?php
/**
 * WP Plugin Boilerplate.
 *
 * @author    Your Name <email@example.com>
 * @license   GPL-3.0+
 * @link      http://example.com
 * @copyright 2017 Your Name or Company Name
 */

namespace Plugin_Name\Ajax;

use Plugin_Name\Foundation\Ajax\Ajax;

/**
 * Class Example Ahax.
 *
 * An example of concrete ajax implementation.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name\Ajax
 * @author  Your Name <email@example.com>
 */
class Example_Ajax extends Ajax {
	/**
	 * Tag name for the ajax.
	 *
	 * @var string
	 */
	const NAME = 'example_ajax';

	/**
	 * Renders ajax response.
	 *
	 * @return void
	 */
	public function render( $data = [] ) {
		return $data;
	}
}
