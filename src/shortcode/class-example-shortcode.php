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

namespace Plugin_Name\Shortcode;

use Plugin_Name\Foundation\Shortcode\Shortcode;

/**
 * Class Example Shortcode.
 *
 * An example of concrete shortcode implementation.
 *
 * @since   1.0.0
 *
 * @package Plugin_Name
 * @author  Your Name <email@example.com>
 */
class Example_Shortcode extends Shortcode {
	/**
	 * Name of the provider.
	 *
	 * @var string
	 */
	const NAME = 'example_shortcode';

	/**
	 * Renders shortcode markup.
	 *
	 * @param  array  $data
	 * @return void
	 */
	public function render( $data = [] ) {
		?>
			<h3>Example Shortcode</h3>
		<?php
	}
}
