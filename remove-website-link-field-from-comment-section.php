<?php
/*
Plugin Name: Remove Website Link Field From Comment Section
Plugin URI: https://www.gtarafdar.com/Remove-Website-Link-Field-From-Comment-Section
Description: <strong>Remove Website Link Field From Comment Section</strong> is a lightweight plug & play plugin. It will remove website link input field from the comment section.
Author: Gtarafdar
Version: 1.4
Author URI: https://www.gtarafdar.com
Requires at least: 5.0
Tested Up to: 6.4.3
Stable Tag: 1.4
License: GPL v2
*/

// Remove Website Input Field from comment section

function rmv_site_fld_comt_sec_unset_url_field($fields){
    if(isset($fields['url']))
       unset($fields['url']);
       return $fields;
}
add_filter('comment_form_default_fields', 'rmv_site_fld_comt_sec_unset_url_field');
?>