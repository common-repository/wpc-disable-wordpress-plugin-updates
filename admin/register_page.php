<?php 
function wpc_plugin_update_admin_init() {
	register_setting('wpc_plugin_update_options', 'wpc_plugin_update_active');
} 
add_action('admin_init', wpc_plugin_update_admin_init);
?>