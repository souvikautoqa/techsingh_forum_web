<?php 
	class CommonModel extends CI_Model{
		public function insert($tbl, $data){
			$this->db->insert($tbl, $data);
			return $this->db->insert_id();
		}

		public function delete($tbl, $where){
			$this->db->where($where);
			return $this->db->delete($tbl);
		}

		public function getAll($tbl, $where = "", $select = "*", $joins = [], $count = false){
			
			$this->db->order_by("{$tbl}.id", "DESC");

			if(!empty($where)){
				$this->db->where($where);
			}

			$this->db->select($select);

			if (!empty($joins)) {
				foreach ($joins as $join) {
					if (isset($join['table']) && isset($join['condition'])) {
						$type = isset($join['type']) ? $join['type'] : 'inner';
						$this->db->join($join['table'], $join['condition'], $type);
					}
				}
			}

			 $this->db->from($tbl);

			 $query = $this->db->get();

			if($count){
				return $query->num_rows();
			}else{
				return $query->result_array();
			}
			
		}

		public function get($tbl, $where){
			if(!empty($where)){
				$this->db->where($where);
			}
			$query = $this->db->get($tbl);
			return $query->row_array();
		}

		public function update($tbl, $data, $where){
			$this->db->where($where);
			return $this->db->update($tbl, $data);
		}


		public function sent_email($body, $subject, $to, $cc = ""){
			try{
				
				$this->load->library('email');
				$config = smtp_config;
				$this->load->library('email');
				$this->email->initialize($config);
				$this->email->set_mailtype("html");
				$this->email->set_newline("\r\n");
				$this->email->from(EMAIL_FROM, APP_NAME);
				$this->email->set_crlf( "\r\n" );
				$this->email->set_mailtype("html");
				$this->email->to($to);
				if(!empty($cc)){
					$this->email->cc($cc);
				}
			
				
				$this->email->subject($subject);
				
				$message =  mb_convert_encoding($body, 'UTF-8', 'ISO-8859-1');
				$this->email->message($message);
				if($this->email->send()){
					return ['status' => true, 'message' => "Email sent successfully", 'email' => $this->email];
				}else{
					// return ['status' => false, 'message' => "Email Not Sent "];
					$debug_output = $this->email->print_debugger(['headers', 'subject', 'body']);
					return [
						'status' => false,
						'message' => "Email Not Sent",
						'debug' => $debug_output
					];
				}
			}catch(Exception $e){
				return ['status' => false, 'message' => $e->getMessage()];
			}
				
		}


		public function get_all_jobs($limit = null, $offset = 0) {
			$this->db->select('j.*, jc.name as cat_name');
			$this->db->from('jobs j');
			$this->db->join('job_categories jc', 'j.job_category_id = jc.id', 'inner');
			$this->db->where('j.status', 'active');
			$this->db->where('jc.status', 'active');
			$this->db->order_by('j.id', 'desc');
		
			if (!is_null($limit)) {
				$this->db->limit($limit, $offset);
			}
		
			$query = $this->db->get();
			return $query->result_array();
		}
		

		public function get_job($url_slug) {
			$this->db->select('j.*, jc.name as cat_name');
			$this->db->from('jobs j');
			$this->db->join('job_categories jc', 'j.job_category_id = jc.id', 'inner');
			$this->db->where('j.status', 'active');
			$this->db->where('jc.status', 'active');
			$this->db->order_by('j.id', 'desc');
			$this->db->where('j.url_slug', $url_slug);
			$query = $this->db->get();
			return $query->row_array();
		}
		

		// public function get_all_jobs_datatable($postData) {
		// 	$columns = ['jobs.id', 'jobs.title', 'job_cat.name', 'jobs.location', 'jobs.company_name', 'jobs.job_type', 'jobs.salary_range'];
		
		// 	$this->db->select('jobs.id, jobs.title, job_cat.name as cat_name, jobs.location, jobs.company_name, jobs.job_type, jobs.salary_range');
		// 	$this->db->from('jobs');
		// 	$this->db->join('job_categories job_cat', 'jobs.job_category_id = job_cat.id', 'inner');
		// 	$this->db->where('jobs.status', 'active');
		// 	$this->db->where('job_cat.status', 'active');
		
		// 	// Search Filter
		// 	if (!empty($postData['search']['value'])) {
		// 		$searchValue = $postData['search']['value'];
		// 		$this->db->group_start();
		// 		$this->db->like('jobs.title', $searchValue);
		// 		$this->db->or_like('job_cat.name', $searchValue);
		// 		$this->db->or_like('jobs.location', $searchValue);
		// 		$this->db->or_like('jobs.company_name', $searchValue);
		// 		$this->db->or_like('jobs.job_type', $searchValue);
		// 		$this->db->or_like('jobs.salary_range', $searchValue);
		// 		$this->db->group_end();
		// 	}
		
		// 	// Sorting
		// 	if (isset($postData['order'])) {
		// 		$columnIndex = $postData['order'][0]['column']; // Column index
		// 		$columnName = $columns[$columnIndex]; // Column name
		// 		$columnSortOrder = $postData['order'][0]['dir']; // asc or desc
		// 		$this->db->order_by($columnName, $columnSortOrder);
		// 	} else {
		// 		$this->db->order_by('jobs.id', 'DESC');
		// 	}
		
		// 	// Pagination
		// 	if ($postData['length'] != -1) {
		// 		$this->db->limit($postData['length'], $postData['start']);
		// 	}
		
		// 	$query = $this->db->get();
		// 	$data = $query->result();
		
		// 	// Total Records
		// 	$this->db->select('COUNT(*) as total');
		// 	$this->db->from('jobs');
		// 	$this->db->join('job_categories job_cat', 'jobs.job_category_id = job_cat.id', 'inner');
		// 	$this->db->where('jobs.status', 'active');
		// 	$this->db->where('job_cat.status', 'active');
		// 	$query = $this->db->get();
		// 	$recordsTotal = $query->row()->total;
		
		// 	// Filtered Records (after search)
		// 	$this->db->select('COUNT(*) as total');
		// 	$this->db->from('jobs');
		// 	$this->db->join('job_categories job_cat', 'jobs.job_category_id = job_cat.id', 'inner');
		// 	$this->db->where('jobs.status', 'active');
		// 	$this->db->where('job_cat.status', 'active');
		
		// 	if (!empty($postData['search']['value'])) {
		// 		$searchValue = $postData['search']['value'];
		// 		$this->db->group_start();
		// 		$this->db->like('jobs.title', $searchValue);
		// 		$this->db->or_like('job_cat.name', $searchValue);
		// 		$this->db->or_like('jobs.location', $searchValue);
		// 		$this->db->or_like('jobs.company_name', $searchValue);
		// 		$this->db->or_like('jobs.job_type', $searchValue);
		// 		$this->db->or_like('jobs.salary_range', $searchValue);
		// 		$this->db->group_end();
		// 	}
		
		// 	$query = $this->db->get();
		// 	$recordsFiltered = $query->row()->total;
		
		// 	return [
		// 		"recordsTotal" => $recordsTotal,
		// 		"recordsFiltered" => $recordsFiltered,
		// 		"data" => $data
		// 	];
		// }


		public function get_jobs($limit, $offset, $search_term = '', $cat = null) {
			// Select necessary fields along with joins
			$this->db->select("jobs.*, job_categories.name as category_name, (SELECT COUNT(1) FROM likes WHERE likes.liked_id = jobs.id AND likes.like_type = 'job') AS total_likes, (SELECT COUNT(1) FROM entity_views ev WHERE ev.entity_id = jobs.id AND ev.entity_type = 'job') AS total_views, (SELECT count(1) from comments where comments.entity_id = jobs.id AND comments.entity_type = 'job'  ) as total_comments");
			$this->db->from('jobs');
			$this->db->join('job_categories', 'jobs.job_category_id = job_categories.id', 'INNER');
			$this->db->where('jobs.status', 'active'); // Only fetch published jobs
			if (!empty($search_term)) {
				$this->db->group_start();  // Open group for search conditions
				$this->db->like('jobs.title', $search_term);
				$this->db->or_like('jobs.content', $search_term);
				$this->db->group_end(); // Close group
			}

			if(!empty($cat)){
				$this->db->where('jobs.job_category_id', $cat);
			}

			

			$this->db->limit($limit, $offset);
			$this->db->order_by('jobs.created_at', 'DESC'); // Latest pages first
			$query = $this->db->get();
			return $query->result_array(); // Return as an array
		}
	
		public function get_total_jobs_count($search_term = '', $cat = null) {
			$this->db->from('jobs');
			$this->db->where('jobs.status', 'active'); // Only active jobs
			
			// If search term is provided, apply search conditions
			if (!empty($search_term)) {
				$this->db->group_start();  // Open group for search conditions
				$this->db->like('jobs.title', $search_term);
				$this->db->or_like('jobs.content', $search_term);
				$this->db->group_end(); // Close group
			}
		
			// If category filter is applied
			if (!empty($cat)) {
				$this->db->where('jobs.job_category_id', $cat);
			}
		
			// Ensure job categories are active
			$this->db->where('job_categories.status', 'active');
		
			// Join job categories table
			$this->db->join('job_categories', 'jobs.job_category_id = job_categories.id', 'INNER');
		
			// Get total count
			return $this->db->count_all_results();
		}
		


		public function get_pages($limit, $offset, $search_term = '', $cat = null) {
			// Select necessary fields along with joins
			$this->db->select('pages.*, page_category.name as category_name');
			$this->db->from('pages');
			$this->db->join('page_category', 'pages.page_category_id = page_category.id', 'left');
			$this->db->where('pages.status', 0); // Only fetch published pages
			if (!empty($search_term)) {
				$this->db->like('title', $search_term);
				$this->db->or_like('content', $search_term);
			}

			if(!empty($cat)){
				$this->db->where('page_category_id', $cat);
			}

			

			$this->db->limit($limit, $offset);
			$this->db->order_by('pages.created_at', 'DESC'); // Latest pages first
			$query = $this->db->get();
			return $query->result_array(); // Return as an array
		}
	
		public function get_total_page_count($search_term = '', $cat = null) {
			$this->db->where('status', 0); // Only published pages
			if (!empty($search_term)) {
				$this->db->like('title', $search_term);
				$this->db->or_like('content', $search_term); // Assuming pages have a 'content' field
			}
			if(!empty($cat)){
				$this->db->where('page_category_id', $cat);
			}

			return $this->db->count_all_results('pages');
		}


		public function get_page_by_slug($url_slug)
		{
			$this->db->select('pages.*, page_category.name as category_name');
			$this->db->from('pages');
			$this->db->join('page_category', 'pages.page_category_id = page_category.id', 'left');
			$this->db->where('pages.url_slug', $url_slug);
			$this->db->where('pages.status', 0); // Fetch only published pages
			$query = $this->db->get();

			return $query->row_array(); // Return a single page as an array
		}



		public function get_latest_pages($limit = 5)
		{
			$this->db->select('pages.*, page_category.name as category_name');
			$this->db->from('pages');
			$this->db->join('page_category', 'pages.page_category_id = page_category.id', 'left');
			$this->db->where('pages.status', 0); // Fetch only published pages
			$this->db->order_by('pages.created_at', 'DESC'); // Order by latest
			$this->db->limit($limit);
			$query = $this->db->get();

			return $query->result_array(); // Return as an array
		}


		public function get_categories_with_page_count() {
			$this->db->select('page_category.id, page_category.name, page_category.url_slug, COUNT(pages.id) as page_count');
			$this->db->from('page_category');
			$this->db->join('pages', 'pages.page_category_id = page_category.id', 'left');
			$this->db->where('page_category.status', 1); // active categories
			$this->db->group_by('page_category.id');
			$query = $this->db->get();
			return $query->result_array();
		}



		public function toggle_bookmark($user_id, $entity_id, $entity_type) {
			$this->db->where('user_id', $user_id);
			$this->db->where('entity_id', $entity_id);
			$this->db->where('entity_type', $entity_type);
			$query = $this->db->get('bookmarks');
	
			if ($query->num_rows() > 0) {
				$this->db->where('user_id', $user_id);
				$this->db->where('entity_id', $entity_id);
				$this->db->where('entity_type', $entity_type);
				$this->db->delete('bookmarks');

				$total_bookmark = $this->get_bookmark_count($entity_id, $entity_type);
	
				return ['status' => true, 'bookmarked' => false, 'message' => 'Unbookmark', 'total_bookmark' => $total_bookmark];
			} else {
			
				$data = [
					'user_id' => $user_id,
					'entity_id' => $entity_id,
					'entity_type' => $entity_type,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				];
				$this->db->insert('bookmarks', $data);

				$total_bookmark = $this->get_bookmark_count($entity_id, $entity_type);
		
				return ['status' => true, 'bookmarked' => true, 'message' => 'Bookmarked', 'total_bookmark' => $total_bookmark];
			}
		}

		public function toggle_like($user_id, $liked_id, $like_type) {
			$this->db->where('user_id', $user_id);
			$this->db->where('liked_id', $liked_id);
			$this->db->where('like_type', $like_type);
			$query = $this->db->get('likes');
	
			if ($query->num_rows() > 0) {
				// Unlike (delete record)
				$this->db->where('user_id', $user_id);
				$this->db->where('liked_id', $liked_id);
				$this->db->where('like_type', $like_type);
				$this->db->delete('likes');

				$total_likes = $this->get_likes_count($liked_id, $like_type);
	
				return ['status' => true, 'liked' => false, 'message' => 'Unliked', 'total_likes' => $total_likes];
			} else {

				// Like (insert record)
				$data = [
					'user_id' => $user_id,
					'liked_id' => $liked_id,
					'like_type' => $like_type,
					'created_at' => date('Y-m-d H:i:s'),
					'updated_at' => date('Y-m-d H:i:s')
				];

				$this->db->insert('likes', $data);

				$insert_id = $this->db->insert_id();

				$total_likes = $this->get_likes_count($liked_id, $like_type);
				
				if($like_type == "post"){
					$this->give_points_to_mem_for_post_like($insert_id);

					$this->insert_like_notification($user_id, $liked_id);
				}

				
		
				return ['status' => true, 'liked' => true, 'message' => 'Liked', 'total_likes' => $total_likes];		
			}
		}


		public function give_points_to_mem_for_post_like($liked_id){
			$like_row = $this->get('likes', ['id' => $liked_id]);

			if(empty($like_row)){
				return false;
			}

			$liker_id = $like_row['user_id'];

			$post = $this->get('forum_post', ['id' => $like_row['liked_id']]);

			$receiver_id = 0;
			
			if(!empty($post)){
				$receiver_id = $post['added_by'];
			}

			if(!empty($receiver_id) && !empty($liker_id)){
				$is_liker_got_point = $this->get('points', ['user_id' => $liker_id, 'post_type' => 'post', 'post_id' => $post['id'], 'point_type' => 1]);
				$is_receiver_got_point = $this->get('points', ['user_id' => $receiver_id, 'post_type' => 'post', 'post_id' => $post['id'], 'point_type' => 1]);
				if(empty($is_liker_got_point)){
					$this->addPoints($liker_id, POINTS_FOR_LIKING_A_POST, "Liking a post", 'post', $post['id'], 1);
				}


				$total_likes = $this->get_total_likes($post['id']);

				if(empty($is_receiver_got_point)){
					$this->addPoints($receiver_id, POINTS_PER_LIKE_RECEIVED, "Received a like on post", 'post', $post['id'], 1);

					

				

					if($total_likes == 100){
						$this->addPoints($receiver_id, POINTS_FOR_100_LIKES, "Received 100 Likes", 'post', $post['id'], 3);
						$this->giveBadge(BADGE_POPULAR_POST, $receiver_id, "Received 100 Likes");
					}else if($total_likes == 200){
						$this->addPoints($receiver_id, POINTS_FOR_200_LIKES, "Received 200 Likes", 'post', $post['id'], 3);
						$this->giveBadge(BADGE_INFLUENCER, $receiver_id, "Received 200 Likes");
					}

				}

				return true;
			}else{
				return false;
			}


		}


		public function give_points_to_mem_for_post_comment($user_id, $post_id){
			$commenter_id = $user_id;
			$post = $this->get('forum_post', ['id'  => $post_id ]);
			$receiver_id = $post['added_by'];
		
			if(empty($post)){
				return false;
			}


			$total_comments = $this->get_total_comments($post_id);

			if($commenter_id){
				$is_commenter_got_point = $this->get('points', ['user_id' => $commenter_id, 'post_type' => 'post', 'post_id' => $post['id'], 'point_type' => 2]);
				$is_receiver_got_point = $this->get('points', ['user_id' => $receiver_id, 'post_type' => 'post', 'post_id' => $post['id'], 'point_type' => 2]);
				if(empty($is_commenter_got_point)){
					$this->addPoints($commenter_id, POINTS_FOR_COMMENTING_ON_A_POST, "Commenting a post", 'post', $post['id'], 2);
				}
				if(empty($is_receiver_got_point)){
					$this->addPoints($commenter_id, POINTS_PER_COMMENT_RECEIVED, "Comment Received", 'post', $post['id'], 2);
					
					

					if($total_comments == 100){
						$this->addPoints($commenter_id, POINTS_FOR_100_COMMENTS, "For 100 Comments", 'post', $post['id'], 4);
						$this->giveBadge(BADGE_DISCUSSION_STARTER, $receiver_id, "Received 100 Comments");
					}else if($total_comments == 200){
						$this->addPoints($commenter_id, POINTS_FOR_200_COMMENTS, "For 200 Comments", 'post', $post['id'], 4);
						$this->giveBadge(BADGE_COMMUNITY_LEADER, $receiver_id, "Received 200 Comments");
					}
				}
			}


	
			return true;

		}



		public function insert_comment_notification($user_id, $post_id){
			$commenter_id = $user_id;
			$post = $this->get('forum_post', ['id'  => $post_id ]);
			$receiver_id = $post['added_by'];
		
			$user = $this->get('student', ['id' => $commenter_id]);

			if(empty($post) || empty($user)){
				return false;
			}




			$this->insert('notifications', [
				'user_id' => $receiver_id,
				'title' => "Comment",
				"message" => $user['name'] . "  comment on your post",
			]);
		
			return true;

		}


		public function insert_like_notification($user_id, $post_id){
			$liker_id = $user_id;
			$post = $this->get('forum_post', ['id'  => $post_id ]);
			$receiver_id = $post['added_by'];
		
			$user = $this->get('student', ['id' => $liker_id]);

			if(empty($post) || empty($user)){
				return false;
			}




			$this->insert('notifications', [
				'user_id' => $receiver_id,
				'title' => "Like",
				"message" => $user['name'] . "  like on your post",
			]);
		
			return true;

		}

	
		// Get total likes for a specific item
		public function get_likes_count($liked_id, $like_type) {
			$this->db->where('liked_id', $liked_id);
			$this->db->where('like_type', $like_type);
			return $this->db->count_all_results('likes');
		}


		public function get_bookmark_count($entity_id, $entity_type) {
			$this->db->where('entity_id', $entity_id);
			$this->db->where('entity_type', $entity_type);
			return $this->db->count_all_results('bookmarks');
		}


		public function user_has_liked($user_id, $liked_id, $like_type) {
			if (!$user_id) {
				return false; // If no user is logged in, return false
			}
		
			$this->db->where('user_id', $user_id);
			$this->db->where('liked_id', $liked_id);
			$this->db->where('like_type', $like_type);
			$query = $this->db->get('likes');
		
			return ($query->num_rows() > 0) ? true : false;
		}


		public function user_has_bookmark($user_id, $entity_id, $entity_type) {
			if (!$user_id) {
				return false; // If no user is logged in, return false
			}
		
			$this->db->where('user_id', $user_id);
			$this->db->where('entity_id', $entity_id);
			$this->db->where('entity_type', $entity_type);
			$query = $this->db->get('bookmarks');
		
			return ($query->num_rows() > 0) ? true : false;
		}



		public function add_comment($user_id, $entity_id, $entity_type, $comment, $parent_id = NULL) {
			$data = [
				'user_id' => $user_id,
				'entity_id' => $entity_id,
				'entity_type' => $entity_type,
				'comment' => $comment,
				'parent_id' => $parent_id,
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
			];
			return $this->db->insert('comments', $data);
		}
	
		// Get all comments for an entity (post, page, or job)
		public function get_comments($entity_id, $entity_type) {
			$this->db->select('comments.*, student.name');
			$this->db->from('comments');
			$this->db->join('student', 'student.id = comments.user_id');
			$this->db->where('comments.entity_id', $entity_id);
			$this->db->where('comments.entity_type', $entity_type);
			$this->db->order_by('comments.created_at', 'ASC');
			return $this->db->get()->result_array();
		}


		public function get_forum_posts($limit, $offset, $search_term = '', $category_id = null, $added_by = null, $status = null, $not_moderator_id = null, $sort = null) {
			// Select necessary fields along with joins
			$this->db->select("forum_post.*, categories.name as category_name,  categories.url_slug as category_slug, student.name as author_name, (SELECT COUNT(1) FROM likes WHERE likes.liked_id = forum_post.id AND likes.like_type = 'post') AS total_likes, (SELECT COUNT(1) FROM entity_views ev WHERE ev.entity_id = forum_post.id AND ev.entity_type = 'post') AS total_views, (SELECT count(1) from comments where comments.entity_id = forum_post.id AND comments.entity_type = 'post'  ) as total_comments ");
			$this->db->from('forum_post');
			
			// Join categories table to get category name
			$this->db->join('categories', 'forum_post.category_id = categories.id', 'INNER');
			
			// Join student table to get author name
			$this->db->join('student', 'forum_post.added_by = student.id', 'LEFT');
		
			
			if(!empty($status)){
				$this->db->where('forum_post.status', $status);
			}
		
			// If search term is provided, filter by title, content, or tags
			if (!empty($search_term)) {
				$this->db->group_start();
				$this->db->like('forum_post.title', $search_term);
				$this->db->or_like('forum_post.content', $search_term);
				$this->db->or_like('forum_post.tags', $search_term);
				$this->db->group_end();
			}
		
			// If category filter is applied
			if (!empty($category_id)) {
				$this->db->where('forum_post.category_id', $category_id);
			}


			if (!empty($added_by)) {
				$this->db->where('forum_post.added_by', $added_by);
			}

			if(!empty($not_moderator_id)){
				$this->db->where('forum_post.added_by != ', $not_moderator_id);
			}
		
			// Order by latest posts
			// $this->db->order_by('forum_post.created_at', 'DESC');

			switch ($sort) {
				case 'latest':
					$this->db->order_by('forum_post.created_at', 'DESC');
					break;
				case 'oldest':
					$this->db->order_by('forum_post.created_at', 'ASC');
					break;
				case 'most_viewed':
					$this->db->order_by('total_views', 'DESC');
					break;
				case 'most_liked':
					$this->db->order_by('total_likes', 'DESC');
					break;
				case 'most_commented':
					$this->db->order_by('total_comments', 'DESC');
					break;
				default:
					$this->db->order_by('forum_post.created_at', 'DESC'); 
					break;
			}
		
			// Apply pagination
			$this->db->limit($limit, $offset);
		
			// Execute query
			$query = $this->db->get();
		
			// Return result as an array
			return $query->result_array();
		}

		public function get_top_five_user_posts($user_id) {
			// Select fields along with necessary joins
			$this->db->select("forum_post.*, 
				categories.name as category_name,  
				categories.url_slug as category_slug, 
				student.name as author_name, 
				(SELECT COUNT(1) FROM likes WHERE likes.liked_id = forum_post.id AND likes.like_type = 'post') AS total_likes, 
				(SELECT COUNT(1) FROM entity_views ev WHERE ev.entity_id = forum_post.id AND ev.entity_type = 'post') AS total_views
			");
			$this->db->from('forum_post');
		
			// Join categories table to get category name
			$this->db->join('categories', 'forum_post.category_id = categories.id', 'INNER');
		
			// Join student table to get author name
			$this->db->join('student', 'forum_post.added_by = student.id', 'LEFT');
		
			// Fetch only active posts
			$this->db->where('forum_post.status', 'active');
		
			// Filter posts by current user
			$this->db->where('forum_post.added_by', $user_id);
		
			// Order by total likes in descending order
			$this->db->order_by('total_likes', 'DESC');
		
			// Limit to top 5 posts
			$this->db->limit(5);
		
			// Execute query
			$query = $this->db->get();
		
			// Return result as an array
			return $query->result_array();
		}
		


		public function get_top_five_posts() {
			// Select fields along with necessary joins
			$this->db->select("forum_post.*, 
				categories.name as category_name,  
				categories.url_slug as category_slug, 
				student.name as author_name, 
				(SELECT COUNT(1) FROM likes WHERE likes.liked_id = forum_post.id AND likes.like_type = 'post') AS total_likes, 
				(SELECT COUNT(1) FROM entity_views ev WHERE ev.entity_id = forum_post.id AND ev.entity_type = 'post') AS total_views
			");
			$this->db->from('forum_post');
		
			// Join categories table to get category name
			$this->db->join('categories', 'forum_post.category_id = categories.id', 'INNER');
		
			// Join student table to get author name
			$this->db->join('student', 'forum_post.added_by = student.id', 'LEFT');
		
			// Fetch only active posts
			$this->db->where('forum_post.status', 'active');

			$this->db->where('categories.status', 1);
		
	
		
			// Order by total likes in descending order
			$this->db->order_by('total_likes', 'DESC');
		
			// Limit to top 5 posts
			$this->db->limit(5);
		
			// Execute query
			$query = $this->db->get();
		
			// Return result as an array
			return $query->result_array();
		}

		public function get_forum_by_post_id($id) {
			// Select necessary fields along with joins
			$this->db->select('forum_post.*, categories.name as category_name,  categories.url_slug as category_slug');
			$this->db->from('forum_post');
			
			// Join categories table to get category name
			$this->db->join('categories', 'forum_post.category_id = categories.id', 'INNER');
			
		
			// Only fetch active posts
			$this->db->where('forum_post.status', 'active');

			$this->db->where('forum_post.id', $id);
		
			// Execute query
			$query = $this->db->get();
		
			// Return result as an array
			return $query->row_array();
		}

		public function get_total_forum_posts_count($search_term = '', $category_id = null, $added_by = null, $status = null, $not_moderator_id = null, $active_cat = false) {
			$this->db->from('forum_post');
			$this->db->where('forum_post.status', 'active'); // Only active posts
			$this->db->join('categories', 'forum_post.category_id = categories.id', 'INNER');
		
			// If search term is provided, apply search conditions
			if (!empty($search_term)) {
				$this->db->group_start();
				$this->db->like('forum_post.title', $search_term);
				$this->db->or_like('forum_post.content', $search_term);
				$this->db->or_like('forum_post.tags', $search_term);
				$this->db->group_end();
			}
		
			// If category filter is applied
			if (!empty($category_id)) {
				$this->db->where('forum_post.category_id', $category_id);
			}

			if($active_cat){
				$this->db->where('categories.status', 1);
			}


			// if($status != "all"){
			// 	$this->db->where('forum_post.status', $status);
			// }else if($status != ""){
			// 	$this->db->where('forum_post.status', $status);
			// }else{
			// 	$this->db->where('forum_post.status', 'active');
			// }

			if(!empty($status)){
				$this->db->where('forum_post.status', $status);
			}


			if(!empty($added_by)){
				$this->db->where('forum_post.added_by', $added_by);
			}

			if(!empty($not_moderator_id)){
				$this->db->where('forum_post.added_by != ', $not_moderator_id);
			}
		
			// Return total count of matching records
			return $this->db->count_all_results();
		}
		

		
		public function getComments($entity_id, $entity_type, $user_id = 0) {
			$this->db->select("c.*, u.name as user_name, (SELECT COUNT(*) FROM likes WHERE likes.liked_id = c.id AND likes.like_type = 'comment') AS total_likes,
                       (SELECT COUNT(*) FROM likes WHERE likes.liked_id = c.id AND likes.like_type = 'comment' AND likes.user_id = {$user_id}) AS user_liked");
			$this->db->from("comments c");
			$this->db->join("student u", "u.id = c.user_id", "left");
			$this->db->where("c.entity_id", $entity_id);
			$this->db->where("c.entity_type", $entity_type);
			$this->db->where("c.parent_id IS NULL");  // Only get main comments
			$this->db->order_by("c.created_at", "DESC");
			$comments = $this->db->get()->result_array();
	
			// Recursively get replies for each comment
			foreach ($comments as &$comment) {
				$comment["replies"] = $this->getReplies($comment["id"], $user_id);
			}
	
			return $comments;
		}
	
	
		public function getReplies($parent_id, $user_id) {
			$this->db->select("c.*, u.name as user_name, (SELECT COUNT(*) FROM likes WHERE likes.liked_id = c.id AND likes.like_type = 'comment') AS total_likes,
                       (SELECT COUNT(*) FROM likes WHERE likes.liked_id = c.id AND likes.like_type = 'comment' AND likes.user_id = {$user_id}) AS user_liked");
			$this->db->from("comments c");
			$this->db->join("student u", "u.id = c.user_id", "left");
			$this->db->where("c.parent_id", $parent_id);
			$this->db->order_by("c.created_at", "ASC");
			$replies = $this->db->get()->result_array();
	
			// Fetch deeper replies recursively
			foreach ($replies as &$reply) {
				$reply["replies"] = $this->getReplies($reply["id"], $user_id);
			}
	
			return $replies;
		}
		

		public function trackView($entity_id, $entity_type, $user_ip) {
			// Check if this IP has already viewed this entity today
			$today = date("Y-m-d");
			$this->db->where(['entity_id' => $entity_id, 'entity_type' => $entity_type, 'user_ip' => $user_ip, 'view_date' => $today]);
			$query = $this->db->get('entity_views');
	
			if ($query->num_rows() == 0) {
				// Insert a new unique view
				$data = ['entity_id' => $entity_id, 'entity_type' => $entity_type, 'user_ip' => $user_ip, 'view_date' => $today];
				$this->db->insert('entity_views', $data);
			}
		}

	
		public function get_followers($user_id) {
			$this->db->select('student.*, followers.created_at, followers.updated_at');
			$this->db->from('followers');
			$this->db->join('student', 'followers.follower_id = student.id');
			$this->db->where('followers.following_id', $user_id);
			return $this->db->get()->result_array();
		}
	
	
		public function get_following($user_id) {
			$this->db->select('student.*, followers.created_at, followers.updated_at');
			$this->db->from('followers');
			$this->db->join('student', 'followers.following_id = student.id');
			$this->db->where('followers.follower_id', $user_id);
			return $this->db->get()->result_array();
		}


		public function get_given_likes($user_id) {
			$query = $this->db->query("
				SELECT COUNT(*) AS total_likes_given 
				FROM likes 
				WHERE user_id = ?
			", array($user_id));
	
			return $query->row()->total_likes_given ?? 0;
		}

		public function get_received_likes($user_id) {
			$query = $this->db->query("
				SELECT COUNT(*) AS total_likes_received 
				FROM likes 
				WHERE like_type IN ('page', 'job', 'post', 'comment') 
				AND liked_id IN (
					SELECT id FROM forum_post WHERE added_by = ? 
					UNION 
					SELECT id FROM comments WHERE user_id = ? 
				)
			", array($user_id, $user_id));
	
			return $query->row()->total_likes_received ?? 0;
		}


		public function get_all_bookmarks($user_id, $to_date, $from_date, $category_id) {
			
			$this->db->select("
            bookmarks.id, bookmarks.entity_id, bookmarks.entity_type, bookmarks.created_at,
            forum_post.title AS post_title, forum_post.url_slug, categories.url_slug as cat_url_slug,
            categories.name AS category_name,
            (SELECT COUNT(*) FROM likes WHERE likes.liked_id = forum_post.id AND likes.like_type = 'post') AS total_likes
			");
			$this->db->from('bookmarks');
			$this->db->join('forum_post', 'bookmarks.entity_id = forum_post.id AND bookmarks.entity_type = "post"', 'INNER');
			$this->db->join('categories', 'forum_post.category_id = categories.id', 'INNER');
			$this->db->where('bookmarks.user_id', $user_id);

			if(!empty($category_id)){
				$this->db->where('forum_post.category_id', $category_id);
			}





			if(!empty($from_date)){
				$this->db->where('DATE(bookmarks.created_at) >= ', $from_date);
			}


			
			if(!empty($to_date)){
				$this->db->where('DATE(bookmarks.created_at) <= ', $to_date);
			}


			$this->db->order_by('bookmarks.created_at', 'DESC');
			
	
			$query = $this->db->get();
			return $query->result_array();
		}
		

		public function delete_bookmarks($bookmark_ids) {
			if (!empty($bookmark_ids)) {
				$this->db->where_in('id', $bookmark_ids);
				$this->db->delete('bookmarks');
			}
			return true;
		}
		

		public function get_students_with_total_points($limit = null) {
			$this->db->select("
				student.*, 
				IFNULL(SUM(points.point), 0) AS total_points
			");
			$this->db->from("student");
			$this->db->join("points", "points.user_id = student.id", "LEFT");
			$this->db->where("student.role_id", 0);
			$this->db->group_by("student.id");
			$this->db->order_by("total_points", "DESC");
			if(!empty($limit)){
				$this->db->limit($limit);
			}
			$query = $this->db->get();
			return $query->result_array();
		}


		public function get_moderator_with_total_points($limit = null) {
			$this->db->select("
				student.*, 
				IFNULL(SUM(points.point), 0) AS total_points
			");
			$this->db->from("student");
			$this->db->join("points", "points.user_id = student.id", "LEFT");
			$this->db->where("student.role_id", 1);
			$this->db->group_by("student.id");
			$this->db->order_by("total_points", "DESC");
			if(!empty($limit)){
				$this->db->limit($limit);
			}
			$query = $this->db->get();
			return $query->result_array();
		}
		

		public function get_categories_with_stats() {
			$sql = "
				SELECT 
					c.id,
					c.name,
					c.url_slug,
					COUNT(DISTINCT fp.id) AS total_posts,
					COUNT(DISTINCT cm.id) AS total_comments
				FROM categories c
				LEFT JOIN forum_post fp ON fp.category_id = c.id AND fp.status = 'active'
				LEFT JOIN comments cm ON cm.entity_id = fp.id AND cm.entity_type = 'post'
				WHERE c.status = 1
				GROUP BY c.id, c.name, c.url_slug
				ORDER BY total_posts DESC, total_comments DESC;
			";
		
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		

		public function getMessages($receiver_id, $sender_id) {
			$query = "SELECT * FROM messages 
					  WHERE (receiver_id = ? AND sender_id = ?) 
						 OR (receiver_id = ? AND sender_id = ?) 
					  ORDER BY sent_at ASC";
		
			$result = $this->db->query($query, [$receiver_id, $sender_id, $sender_id, $receiver_id]);
		
			return $result->result_array(); // Return results as an array
		}


		public function getUserChatList($user_id) {
			$query = "SELECT 
						s.id AS user_id, 
						s.name AS user_name, 
						s.email AS user_email, 
						m.message, 
						m.sent_at
					  FROM messages m
					  JOIN student s ON 
						  (m.sender_id = s.id AND m.receiver_id = ?) 
						  OR (m.receiver_id = s.id AND m.sender_id = ?)
					  WHERE m.id = (
						  SELECT MAX(m2.id) FROM messages m2
						  WHERE (m2.sender_id = s.id AND m2.receiver_id = ?) 
							 OR (m2.receiver_id = s.id AND m2.sender_id = ?)
					  )
					  ORDER BY m.sent_at DESC";
		
			$result = $this->db->query($query, [$user_id, $user_id, $user_id, $user_id]);
			
			return $result->result_array(); // Return results as an array
		}
		
		
	
		public function giveBadge($badge_type, $user_id, $remark){
			$isBadgeAssign = $this->get('badges_user', ['badge_id' => $badge_type, 'user_id' => $user_id]);
			if($isBadgeAssign){
				return true;
			}else{
				return $this->db->insert('badges_user', ['badge_id' => $badge_type, 'user_id' => $user_id, 'remarks' => $remark ]);
			}
		}

		public function addPoints($user_id, $points, $remarks, $post_type=null, $post_id = 0, $point_type = 0){
			$this->db->insert('points', [
				'point' => $points,
				'user_id' => $user_id,
				'remarks' => $remarks,
				'post_type' => $post_type,
				'post_id' => $post_id,
				'point_type' => $point_type
			]);
			return $this->db->insert_id();
		}


		public function get_user_points($user_id) {
			$this->db->select_sum('point', 'total_points');
			$this->db->where('user_id', $user_id);
			$query = $this->db->get('points');
			return $query->row()->total_points ?? 0;
		}


		public function get_user_badges($user_id) {
			$this->db->select('badges_user.id, badges.badge, badges.image, badges_user.created_at');
			$this->db->from('badges_user');
			$this->db->join('badges', 'badges_user.badge_id = badges.id');
			$this->db->where('badges_user.user_id', $user_id);
			return $this->db->get()->result_array();
		}
	

		public function get_total_comments($forum_post_id) {
			$this->db->where('entity_id', $forum_post_id);
			$this->db->where('entity_type', 'post');
			return $this->db->count_all_results('comments');
		}


		public function get_total_likes($forum_post_id) {
			// Get likes on the post itself
			$this->db->where('liked_id', $forum_post_id);
			$this->db->where('like_type', 'post');
			$post_likes = $this->db->count_all_results('likes');
	
			// Get likes on comments in a single query
			// $this->db->select('COUNT(likes.id) as comment_likes');
			// $this->db->from('likes');
			// $this->db->join('comments', 'comments.id = likes.liked_id');
			// $this->db->where('comments.entity_id', $forum_post_id);
			// $this->db->where('comments.entity_type', 'post');
			// $this->db->where('likes.like_type', 'comment');
			// $query = $this->db->get();
			// $comment_likes = $query->row()->comment_likes ?? 0;
	
			// Total likes = Post likes + Comment likes
			// return $post_likes + $comment_likes;
			return $post_likes;
		}


		public function total_user_post($user_id){
			$this->db->where('status', 'active');
			$this->db->where('added_by', $user_id);
			$post_likes = $this->db->count_all_results('forum_post');
		}
	


		public function search_forum_posts($search_term) {
			$this->db->select("fp.id, fp.title, fp.content, fp.url_slug, fp.created_at, 'post' as type, categories.name as cat_name, categories.url_slug as cat_slug");
			$this->db->from("forum_post fp");
			$this->db->join('categories', 'fp.category_id = categories.id', 'INNER');
			// Join student table to get author name
			$this->db->join('student', 'fp.added_by = student.id', 'LEFT');
			$this->db->where("fp.status", "active");
			$this->db->group_start();
			$this->db->like("fp.title", $search_term);
			$this->db->or_like("fp.content", $search_term);
			$this->db->group_end();
			$this->db->order_by("fp.created_at", "DESC");
			return $this->db->get()->result_array();
		}
		
		public function search_jobs($search_term) {
			$this->db->select("jobs.id, jobs.title, jobs.content, jobs.description, jobs.url_slug, jobs.created_at, 'job' as type");
			$this->db->from("jobs");
			$this->db->where("jobs.status", "active");
			$this->db->join('job_categories jc', 'jobs.job_category_id = jc.id', 'inner');
			$this->db->where('jc.status', 'active');
			$this->db->group_start();
			$this->db->like("jobs.title", $search_term);
			$this->db->or_like("jobs.content", $search_term);
			$this->db->group_end();
			$this->db->order_by("jobs.created_at", "DESC");
			return $this->db->get()->result_array();
		}
		
		public function search_pages($search_term) {
			$this->db->select("id, title, content, description, url_slug, created_at, 'page' as type");
			$this->db->from("pages");
			$this->db->where("status", 0);
			$this->db->group_start();
			$this->db->like("title", $search_term);
			$this->db->or_like("content", $search_term);
			$this->db->group_end();
			$this->db->order_by("created_at", "DESC");
			return $this->db->get()->result_array();
		}

	
		
		public function get_category_homepage(){
			$this->db->select('*');
			$this->db->from('categories');
			$this->db->where('categories.status', 1);
			$this->db->where('categories.parent_id', 0);
			$categories = $this->db->get()->result_array();

			foreach($categories as $key => $category){
				$sub_categories = $this->getAll('categories', ['parent_id' => $category['id'], 'status' => 1]);
				
				$categories[$key]['sub_categories'] = $sub_categories;

				foreach($sub_categories as $sb_key => $sub_category){
					$total_posts = $this->getAll('forum_post', ['category_id' => $sub_category['id'], 'status' => 'active'], $select = "*", $joins = [], $count = true);

					$categories[$key]['sub_categories'][$sb_key]['total_posts'] = $total_posts;


					$this->db->select("forum_post.*, (SELECT COUNT(1) FROM likes WHERE likes.liked_id = forum_post.id AND likes.like_type = 'post') AS total_likes,  (SELECT COUNT(1) FROM entity_views ev WHERE ev.entity_id = forum_post.id AND ev.entity_type = 'post') AS total_views ");

					$this->db->from('forum_post');

					$this->db->where('category_id', $sub_category['id']);

					$this->db->where('forum_post.status', 'active');


					$this->db->order_by('total_likes', 'DESC');
		
					// Limit to top 2 posts
					$this->db->limit(2);
				
					// Execute query
					$new_post_query = $this->db->get();
				
					// Return result as an array
					$new_posts =  $new_post_query->result_array();

					$categories[$key]['sub_categories'][$sb_key]['latest_comment'] = $this->get_category_latest_comment($sub_category['id']) ?? [];


					$categories[$key]['sub_categories'][$sb_key]['new_posts'] = $new_posts;


					
					


				}
			}

			return $categories;
		}


		public function get_category_latest_comment($category_id){
			return $this->db->query("SELECT c.id AS comment_id, c.comment, c.created_at, s.name AS student_name, ( SELECT COUNT(*) FROM likes WHERE liked_id = c.id ) AS total_likes_comments, fp.url_slug FROM comments c INNER JOIN student s ON c.user_id = s.id INNER JOIN forum_post fp ON c.entity_id = fp.id WHERE c.entity_type = 'post' AND fp.status = 'active' AND fp.category_id = {$category_id} ORDER BY c.id DESC LIMIT 1")->row_array();
		}

	}
?>
