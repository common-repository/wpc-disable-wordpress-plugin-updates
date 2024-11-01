<?php 
function disable_plugins_options() {
  echo '<div class="wrap">';
 echo '<div id="icon-options-general" class="icon32"><br /></div><h2>'.get_name_plugin_updates().' Options</h2>';
  wpc_plugin_update_table_start('Options', 'wpc_plugin_update_options');
echo '
<tr class="alternate">
<td>Active Plugin:</td>
<td><input name="wpc_plugin_update_active" value="true" type="checkbox"'; checked("true", get_option("wpc_plugin_update_active")); echo ' /></td>
</tr>
  ';
  wpc_plugin_update_table_stop();
echo '</div>';
} ?>