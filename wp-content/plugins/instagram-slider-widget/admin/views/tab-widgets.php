<?php
require_once ABSPATH . "wp-admin/includes/widgets.php";
$sidebars_widgets = wp_get_sidebars_widgets();
global $wp_registered_widgets, $wp_registered_sidebars;
$isset_widgets = false;

wp_nonce_field( 'save-sidebar-widgets', '_wpnonce_widgets' );
if ( ! empty( $sidebars_widgets ) ) {
	foreach ( $sidebars_widgets as $key => $sidebar ) {
		foreach ( $sidebar as $widget ) {
			if ( strstr( $widget, 'jr_insta_slider' ) ) {
				wp_list_widget_controls( $key, $wp_registered_sidebars[ $key ]['name'] );
				$isset_widgets = true;
				break;
			}
		}
	}
}
if ( ! $isset_widgets ) {
	echo "<h2>" . sprintf( __( "You don't have any Social Slider widgets. Go to the Wordpress <a href='%1s'>Widgets</a> page and add it.", 'instagram-slider-widget' ), admin_url( 'widgets.php' ) ) . "</h2>";
}
?>
<style>
    .widget-inside
    {
        border-top: none;
        padding: 1px 15px 15px 15px;
        line-height: 1.2;
    }
</style>
<script>
    jQuery(document).ready(function ($) {
        $('.widget:not([id*="jr_insta_slider"])').remove();
        //$('[id*="jr_insta_slider"]').before($('#jr_insta_shortcode').val())
        $('.sidebar-name').find('button.handlediv').remove();
    });
</script>