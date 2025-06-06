<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('member_since')) {
    function member_since($user_id) {

        $CI =& get_instance();
        $CI->load->database();

        $CI->db->select('*');
        $CI->db->from('student');

		$CI->db->where('id', $user_id);

        $query = $CI->db->get();

        $student =  $query->row_array();

		return isset($student['created_at']) && !empty($student['created_at']) ?  $student['created_at'] : null;

    }
}

?>
