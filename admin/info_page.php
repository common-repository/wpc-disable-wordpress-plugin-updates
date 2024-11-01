<?php
/* Starts the admin menu page */
function disable_plugins_info() {
   echo '
<div class="wrap">
<div id="icon-index" class="icon32"><br />
</div>
<h2>WP Choice Information</h2>
<p>
<table class="widefat">
  <thead>
    <tr>
      <th>Instructions</th>
      <th><span style="float:right"><small>'.get_version_plugin_updates().'</small></span></th>
    </tr>
  </thead>
  <tr class="alternate">
    <td>If you need to know how to use this plugin please vist <a href="http://wpchoice.com" target="_blank">WP Choice</a>.</td>
    <td></td>
  </tr>
</table>
</p>
<div id="icon-themes" class="icon32"><br />
</div>
<h2>'.get_name_plugin_updates().'Information</h2>
<p>
<table class="widefat">
<thead>
  <tr>
    <th>'.get_name_plugin_updates().'</th>
    <th><span style="float:right"><small>'.get_version_plugin_updates().'</small></span></th>
  </tr>
</thead>
<tr class="alternate">
  <td>Plugin Name:</td>
  <td>'.get_name_plugin_updates().'</td>
</tr>
<tr class="alternate">
  <td>Plugin Version:</td>
  <td>'.get_version_plugin_updates().'</td>
</tr>
<tr class="alternate">
  <td>Plugin Build:</td>
  <td>'.get_build_plugin_updates().'</td>
</tr>
<tr class="alternate">
  <td>Plugin Author:</td>
  <td><a href="http://erichamby.com" target="_blank">Eric Hamby</a></td>
</tr>
<tr class="alternate">
  <td>Release Date:</td>
  <td>9/06/2009</td>
</tr>
<tr class="alternate">
  <td>Wordpress Version:</td>
  <td>'; ?>
<?php bloginfo('version'); ?>
<?php echo '</td>
</tr>
<tr class="alternate">
<td>FAQ:</td>
<td><a href="http://wpchoice.com" target="_blank">FAQ</a></td>
</tr>
<tr class="alternate">
<td>Donations:</td>
<td><a href="http://wpchoice.com" target="_blank">Donations</a></td>
</tr>
<tr class="alternate">
<td>Support Forums:</td>
<td><a href="http://wpchoice.com" target="_blank">Support</a></td>
</tr>
<tr class="alternate">
			<td colspan="2">
			<span class="button" style="float:left"><a href="http://wpchoice.com" target="_blank">WP Choice</a></span>
			<span class="button" style="float:right"><a href="http://erichamby.com" target="_blank">Eric Hamby</a></span>
			</td>
		</tr>
</table></p>'; 
}
?>