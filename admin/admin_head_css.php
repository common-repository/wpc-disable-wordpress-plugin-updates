<?php
function wordpress_totals_admin_css() {
    $url = get_settings('siteurl');
  echo ' 
<style>	
	.jquery-checkbox       {display: inline; font-size: 20px; line-height: 20px; cursor: pointer; cursor: hand;}
.jquery-checkbox .mark {display: inline;}

.jquery-checkbox img {vertical-align: middle; width: 60px; height: 20px;}
.jquery-checkbox img{background: transparent url(' . $url . '/wp-content/plugins/wpc-disable-wordpress-plugin-updates/admin/images/checkbox.png) no-repeat;}

.jquery-checkbox img{
	background-position: 0px 0px;
}
#admin_form {
	background: url(' . $url . '/wp-content/plugins/wpc-disable-wordpress-plugin-updates/admin/images/input-bg.png) left  ;
	width: 600px;
	height: 41px;
	padding: 5px 5px 5px 5px;
	color: #6f737e;
	font-size: 24px;
	border: none;
	}
#admin_form_small {
	background: transparent url(' . $url . '/wp-content/plugins/wpc-disable-wordpress-plugin-updates/admin/images/small-bg.png) left ;
	width: 115px;
	height: 24px;
	padding: 9px 5px 9px 5px;
	color: #6f737e;
	font-size: 24px;
	border: none;
	}	
#admin_textarea {
	background: transparent url(' . $url . '/wp-content/plugins/wpc-disable-wordpress-plugin-updates/admin/images/text-area.png) bottom no-repeat ;
	width: 590px;
	height: 170px;
	padding: 13px 5px 5px 5px;
	color: #6f737e;
	font-size: 24px;
	overflow: hidden;
	border: none;
	}	
.jquery-checkbox-hover img{
	background-position: 0px -20px;
}
.jquery-checkbox-checked img{
	background-position: 0px -40px;
}
.jquery-checkbox-checked .jquery-checkbox-hover img {
	background-position: 0px -60px;
}

.jquery-checkbox-disabled img{
	background-position: 0px -80px;
}
.jquery-checkbox-checked .jquery-checkbox-disabled img{
	background-position: 0px -100px;
} </style>
	
	';
	}
add_action('admin_head', 'wordpress_totals_admin_css');
?>