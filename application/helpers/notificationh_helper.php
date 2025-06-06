<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('get_notifications_header')) {
    function get_notifications_header($user_id, $limit = null) {
        $CI =& get_instance();
        $CI->load->database();

        $CI->db->select('*');
        $CI->db->from('notifications');

		$CI->db->where('is_read', 0);

		$CI->db->where_in('user_id', [0, $user_id]);

        $CI->db->order_by('created_at', 'DESC'); 
        
        if ($limit) {
            $CI->db->limit($limit);
        }

        $query = $CI->db->get();

        return $query->result_array();
    }
}

?>
