<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('generate_letter_avatar')) {
    function generate_letter_avatar($name = null) {
        if(empty($name)){
            $name = $_SESSION['name'] ?? 'Guest';
        }
        $first_letter = strtoupper(substr(trim($name), 0, 1));
        return '<div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center me-2" style="width: 40px; height: 40px; font-weight: bold;">' . $first_letter . '</div>';
    }
}
