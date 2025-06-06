<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_navigation')) {
    function get_navigation($parent_id = NULL) {
        $CI = &get_instance();
        $CI->load->model('commonModel');

        // Fetch navigation items where parent_id matches (NULL for top-level)
        $condition = ($parent_id === NULL) ? ['parent_id' => NULL, 'status' => '0'] : ['parent_id' => $parent_id, 'status' => '0'];
        $navigation_items = $CI->commonModel->getAll('navigation', $condition, "*", []);

        return $navigation_items;
    }
}


if (!function_exists('get_topbar_navigation')) {
    function get_topbar_navigation($parent_id = NULL) {
        $CI = &get_instance();
        $CI->load->model('commonModel');

        // Fetch navigation items where parent_id matches (NULL for top-level)
       
        $navigation_items = $CI->commonModel->getAll('topbar_navigation', ['status' => '0']);

        return $navigation_items;
    }
}


?>
