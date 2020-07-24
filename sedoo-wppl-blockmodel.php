<?php
/**
 * Plugin Name: Sedoo - blockmodel
 * Description:  Affiche une carte interactive
 * Version: 0.0.1
 * Author: Nicolas Gruwe  - SEDOO DATA CENTER
 * Author URI:      https://www.sedoo.fr 
 * GitHub Plugin URI: sedoo/sedoo-wppl-blockmodel
 * GitHub Branch:     master
 */

if ( ! function_exists('get_field') ) {
        
	add_action( 'admin_init', 'sb_plugin_deactivate');
	add_action( 'admin_notices', 'sb_plugin_admin_notice');

	//Désactiver le plugin
	function sb_plugin_deactivate () {
		deactivate_plugins( plugin_basename( __FILE__ ) );
	}
	
	// Alerter pour expliquer pourquoi il ne s'est pas activé
	function sb_plugin_admin_notice () {
		
		echo '<div class="error">Le plugin requiert ACF Pro pour fonctionner <br><strong>Activez ACF Pro ci-dessous</strong> ou <a href=https://wordpress.org/plugins/advanced-custom-fields/> Téléchargez ACF Pro &raquo;</a><br></div>';

		if ( isset( $_GET['activate'] ) ) 
			unset( $_GET['activate'] );	
	}
} else {

	include 'sedoo-wppl-blockmodel-functions.php';
	include 'sedoo-wppl-blockmodel-acf.php';
	include 'inc/sedoo-wppl-blockmodel-acf-fields.php';

}
