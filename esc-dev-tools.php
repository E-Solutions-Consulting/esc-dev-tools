<?php

/**
 * Plugin Name: Development Tools Plugin
 * Version: 1.0.0
 * Description: Functions for test purpose in environment Development
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}
if(!function_exists('_print'))    :
function _print($data, $title=''){
    if(!empty($title))
        echo '<h3>' . $title . '</h3>';
    echo '<pre>' . print_r($data, true) . '</pre>';
}
endif;