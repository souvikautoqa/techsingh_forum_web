<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_announcements')) {
    function get_announcements($status = 'active', $limit = null) {
        $CI =& get_instance();
        $CI->load->database();

        $CI->db->select('*');
        $CI->db->from('announcements');

        if ($status) {
            $CI->db->where('status', $status);
        }

        $CI->db->order_by('sno', 'ASC'); 
        
        if ($limit) {
            $CI->db->limit($limit);
        }

        $query = $CI->db->get();

        return $query->result_array();
    }
}
?>
