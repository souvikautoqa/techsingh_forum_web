<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	if (!function_exists('get_latest_five_posts_sidebar')) {
		function get_latest_five_posts_sidebar($limit = 5){
			$CI =& get_instance();
			$CI->load->database();

			$CI->db->select("forum_post.*, categories.name as category_name,  categories.url_slug as category_slug, student.name as author_name, (SELECT COUNT(1) FROM likes WHERE likes.liked_id = forum_post.id AND likes.like_type = 'post') AS total_likes, (SELECT COUNT(1) FROM entity_views ev WHERE ev.entity_id = forum_post.id AND ev.entity_type = 'post') AS total_views, (SELECT count(1) from comments where comments.entity_id = forum_post.id AND comments.entity_type = 'post'  ) as total_comments ");
			$CI->db->from('forum_post');
			
			// Join categories table to get category name
			$CI->db->join('categories', 'forum_post.category_id = categories.id', 'INNER');
			
			// Join student table to get author name
			$CI->db->join('student', 'forum_post.added_by = student.id', 'LEFT');
		
			$CI->db->where('forum_post.status', 'active');
			
	
			// Order by latest posts
			$CI->db->order_by('forum_post.created_at', 'DESC');
		
			// Apply pagination
			$CI->db->limit($limit);
		
			// Execute query
			$query = $CI->db->get();
		
			// Return result as an array
			return $query->result_array();
		}

	}

?>
