<?php
/**
 * Author rel-me Link
 *
 * Plugin Name: Author rel-me Link
 * Plugin URI:  https://wordpress.org/plugins/author-rel-me-link
 * Description: Adds a rel-me &lt;link&gt; to the &lt;head&gt; of author pages if they have
 * a Website set in their Profile 
 * Version:     0.1.1
 * Author:      topdownjimmy
 * Author URI:  https://www.jaysitter.com
 * License:     GPLv2 or later
 * License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 * Text Domain: author-rel-me-link
 * Requires at least: 2.8
 * Tested up to: 6.4.3
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation. You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 */


function head_link_rel_me_html_in_header() {
	if ( is_author() && get_the_author_meta( 'user_url' ) ) {
		echo '<link rel="me" href="' . esc_url( get_the_author_meta( 'user_url' ) ) . '" />';
	}
}

add_action( 'wp_head', 'insert_html_in_header' );
