<?php # -*- coding: utf-8 -*-
/**
 * Plugin Name: T5 Clean Admin
 * Description: Removes all the layout gimmicks from back-end.
 * Version:     2012.06.16
 * Author:      Thomas Scholz <info@toscho.de>
 * Author URI:  http://toscho.de
 * License:     MIT
 * License URI: http://www.opensource.org/licenses/mit-license.php
 */

if ( ! function_exists( 't5_clean_admin' ) )
{
	add_action( 'admin_enqueue_scripts', 't5_clean_admin' );

	/**
	 * Register new admin stylesheet.
	 *
	 * @return void
	 */
	function t5_clean_admin()
	{
		wp_register_style(
			't5_clean_admin_css',
			plugins_url( '/clean-admin.css', __FILE__ )
		);
		wp_enqueue_style( 't5_clean_admin_css' );
	}
}