<?php
/**
 * @link              https://businessandemotions.se
 * @since             1.0.0
 * @package           MediaFonts
 *
 * @wordpress-plugin
 * Plugin Name:       Allow Fonts Uploads
 * Plugin URI:        https://businessandemotions.se
 * Description:
 * Version:           1.0.0
 * Author:            Business & Emotions
 * Author URI:        https://businessandemotoins.se
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       be-media-fonts
 * Domain Path:       /languages
 */

namespace BE\MediaFonts;

class Plugin {

	public function __construct() {

		add_filter( 'upload_mimes', array( $this, 'add_mimes' ) );

	}

	public function add_mimes( $existing_mimes ) {

		$existing_mimes['otf']  = 'application/x-font-otf';
		$existing_mimes['woff'] = 'application/x-font-woff';
		$existing_mimes['ttf']  = 'application/x-font-ttf';
		$existing_mimes['svg']  = 'image/svg+xml';
		$existing_mimes['eot']  = 'application/vnd.ms-fontobject';

		return $existing_mimes;
	}

}

$be_media_fonts = new Plugin();
