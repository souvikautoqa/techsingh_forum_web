<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once dirname(__FILE__) . "/CommonController.php";


class WebController extends CommonController {

    public function __construct(){
		parent::__construct();
	}


	private function create_unique_slug($slug, $id = null) {
       
		$slug = url_title($slug, 'dash', TRUE); // Convert title to slug format (lowercase, dashes)
    	$slug = preg_replace('/[^a-z0-9-]+/', '', $slug); // Remove special characters

		$original_slug = $slug;


        $counter = 1;
    
        $condition = ['url_slug' => $slug];
        if ($id !== null) {
            $condition['id !='] = $id;
        }
    
        while ($this->commonModel->get('forum_post', $condition)) {
            $slug = $original_slug . '-' . $counter;
            $counter++;
            $condition['url_slug'] = $slug;
        }
    
        return $slug;
    }
	


	public function index(){

		// $data['title'] = "Home";
        // $data['meta_tags'] = [
        // ];
        // $data['styles'] = [
        // ];
        // $data['scripts'] = [
        // ];
        // $data['content'] = 'home'; 

		// $data['total_members'] = $this->commonModel->getAll('student', "", "", [], true );
		// $data['total_active_users'] = $this->commonModel->getAll('student', ['status' => "Y"], "", [], true);
		// $data['total_posts'] = $this->commonModel->get_total_forum_posts_count($search_term = '', $category_id = null, $added_by = null, $status = 'active', $not_moderator_id = null, $active_cat = true);
		// $data['top_five_posts'] = $this->commonModel->get_top_five_posts(); 
		// $data['top_users'] = $this->commonModel->get_students_with_total_points(5);
		// $data['top_moderators'] = $this->commonModel->get_moderator_with_total_points(5);
		// $data['category_with_stats'] = $this->commonModel->get_categories_with_stats();

		// $this->load->view('layouts/main', $data);

		$data['title'] = "Home";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
        ];
        $data['content'] = 'home'; 

		$data['total_members'] = $this->commonModel->getAll('student', "", "", [], true );
		$data['total_active_users'] = $this->commonModel->getAll('student', ['status' => "Y"], "", [], true);
		$data['total_posts'] = $this->commonModel->get_total_forum_posts_count($search_term = '', $category_id = null, $added_by = null, $status = 'active', $not_moderator_id = null, $active_cat = true);
		$data['top_five_posts'] = $this->commonModel->get_top_five_posts(); 
		$data['top_users'] = $this->commonModel->get_students_with_total_points(5);
		$data['top_moderators'] = $this->commonModel->get_moderator_with_total_points(5);
		// $data['category_with_stats'] = $this->commonModel->get_categories_with_stats();


		$data['category_with_stats'] = $this->commonModel->get_category_homepage();

	

		$this->load->view('layouts/main', $data);
	}


	public function hometest(){

		$data['title'] = "Home";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
        ];
        $data['content'] = 'home-test'; 

		$data['total_members'] = $this->commonModel->getAll('student', "", "", [], true );
		$data['total_active_users'] = $this->commonModel->getAll('student', ['status' => "Y"], "", [], true);
		$data['total_posts'] = $this->commonModel->get_total_forum_posts_count($search_term = '', $category_id = null, $added_by = null, $status = 'active', $not_moderator_id = null, $active_cat = true);
		$data['top_five_posts'] = $this->commonModel->get_top_five_posts(); 
		$data['top_users'] = $this->commonModel->get_students_with_total_points(5);
		$data['top_moderators'] = $this->commonModel->get_moderator_with_total_points(5);
		// $data['category_with_stats'] = $this->commonModel->get_categories_with_stats();


		$data['category_with_stats'] = $this->commonModel->get_category_homepage();

	

		$this->load->view('layouts/main', $data);
	}


	public function profile(){
		$this->redirectIfNotLogin();

		$student = $this->commonModel->get('student', ['id' => $_SESSION['id']]);

		$total_forum_posts = $this->commonModel->getAll('forum_post', ['added_by' => $student['id']],  "*", [], true);

		$member_followers = $this->commonModel->get_followers($student['id']);

		$member_following = $this->commonModel->get_following($student['id']);


		$user_forum_posts = $this->commonModel->get_top_five_user_posts($student['id']);

		$total_given_likes = $this->commonModel->get_given_likes($student['id']);
	
		$total_received_likes = $this->commonModel->get_received_likes($student['id']);

		$total_points = $this->commonModel->get_user_points($student['id']);

		$badges = $this->commonModel->get_user_badges($student['id']) ?? [];

		$data['title'] = "Profile";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
        ];
        $data['content'] = 'profile'; 
		$data['student'] = $student;
		$data['total_forum_posts'] = $total_forum_posts;
		$data['total_given_likes'] = $this->commonModel->get_given_likes($student['id']);
		$data['total_received_likes'] = $total_received_likes;
		$data['member_followers'] = $member_followers;
		$data['member_followings'] = $member_following;
		$data['total_points'] = $total_points;
		$data['badges'] = $badges;
		$this->load->view('layouts/main', $data);

	}


	public function create_post($category_id){
		$category = $this->commonModel->get('categories', ['id' => $category_id, 'status' => 1]);
		if(empty($category))
		{
			$this->session->set_flashdata('error', 'Category not found');
			return redirect(base_url());
		}
		$data['title'] = "Profile";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			"assets/ckeditor/ckeditor.js",
			"assets/js/create_post.js"
        ];
        $data['content'] = 'create-post'; 
		$data['category'] = $category;
		$this->load->view('layouts/main', $data);
	}



	public function page($url_slug){
		$page = $this->commonModel->get_page_by_slug($url_slug);
  
		if (!$page) {
			show_404();
		}

		$user_id = $_SESSION['id'] ?? 0;
		
		
		$comments = $this->commonModel->getComments($page['id'], 'page', $user_id);

	
		$total_comments =  $this->commonModel->getAll('comments', ['entity_id' => $page['id'], 'entity_type' => 'page']);
	
		$data = [
			'title' => $page['title'],
			'meta_tags' => [
				'title' => $page['meta_title'],
				'description' => $page['meta_description'],
			],
			'styles' => [

			],
			'scripts' => [
				'assets/js/page_like.js',
				"assets/ckeditor/ckeditor.js",
				"assets/js/comment.js"
			],
			'page_detail' => $page,
			'content' => 'page-detail.php',
			'head_scripts' => [],
			'likes_count' => $this->commonModel->get_likes_count($page['id'], 'page'),
			'user_liked' => $this->commonModel->user_has_liked($user_id, $page['id'], 'page'),
			'comments' => $comments,
			'total_comments' => $total_comments ? count($total_comments) : 0,
		];

	
		$this->load->view('layouts/main', $data);
	}
	


	public function job_detail($url_slug){
		
		$job = $this->commonModel->get_job($url_slug);
  
		if (!$job) {
			show_404();
		}

		$user_id = $_SESSION['id'] ?? 0;
		
		$comments = $this->commonModel->getComments($job['id'], 'job', $user_id);
	
		$total_comments =  $this->commonModel->getAll('comments', ['entity_id' => $job['id'], 'entity_type' => 'job']);

		// Get the user's IP Address
		$user_ip = $this->input->ip_address();
    
		// Track the unique post view
		$this->trackEntityView($job['id'], 'job', $user_ip);
	
		$data = [
			'title' => $job['title'],
			'meta_tags' => [
				'title' => $job['title'],
				'description' => $job['description'],
			],
			'styles' => [],
			'scripts' => [
				'assets/js/page_like.js',
				"assets/ckeditor/ckeditor.js",
				"assets/js/comment.js"
			],
			'job_detail' => $job,
			'content' => 'job-detail.php',
			'head_scripts' => [],
			'likes_count' => $this->commonModel->get_likes_count($job['id'], 'job'),
			'user_liked' => $this->commonModel->user_has_liked($user_id, $job['id'], 'job'),
			'comments' => $comments,
			'total_comments' => $total_comments ? count($total_comments) : 0,
		];

	
		$this->load->view('layouts/main', $data);
	}


	public function forum_posts($category_slug) {
		$this->load->library('pagination');
		
		// Capture search query parameters
		$search_term = $this->input->get('search_term', TRUE);

		$sort = $this->input->get('sort', TRUE);
	
		$query_params = [];
	
		if (!empty($search_term)) {
			$query_params['search'] = urlencode($search_term);
		}
	

		if (!empty($sort)) {
			$query_params['sort'] = $sort;
		}


		$query_string = http_build_query($query_params);
	
		// Get Category ID from Slug
		$category = $this->commonModel->get('categories', ['url_slug' => $category_slug, 'status' => 1]);
		if (!$category) {
			show_404(); // If category not found, show 404 error
		}
		$category_id = $category['id'];
	
		// Pagination Configurations
		$config = [];
		$config['base_url'] = base_url('forum/' . $category_slug) . (!empty($query_string) ? '?' . $query_string : '');
		$config['total_rows'] = $this->commonModel->get_total_forum_posts_count($search_term, $category_id, '', 'active'); // Total post count
		$config['per_page'] = 20; // Posts per page
		$config['use_page_numbers'] = TRUE; // Use page numbers
		$config['page_query_string'] = TRUE; // Use query string for pagination
		$config['query_string_segment'] = 'page'; // The query string key for the page number
	
		$config['full_tag_open'] = '<ul class="pagination align-items-center">';
		$config['full_tag_close'] = '</ul>';
	
		// First Page Link
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = '<i class="fa-solid fa-angle-double-left fa-fw"></i>';
	
		// Last Page Link
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa-solid fa-angle-double-right fa-fw"></i>';
	
		// Next Page Link
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['next_link'] = '<i class="fa-solid fa-angle-right fa-fw"></i>';
	
		// Previous Page Link
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['prev_link'] = '<i class="fa-solid fa-angle-left fa-fw"></i>';
	
		// Number Links
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
	
		// Current Page Link (Active)
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
	
		// Number Link Attributes
		$config['attributes'] = ['class' => 'page-link'];
	
		$this->pagination->initialize($config);
	
		// Get the current page from query string
		$page = $this->input->get('page');
		$page = (is_numeric($page) && $page > 0) ? $page : 1;
		$offset = ($page - 1) * $config['per_page'];
	
		// Fetch forum posts
		$forum_posts = $this->commonModel->get_forum_posts($config['per_page'], $offset, $search_term, $category_id, '', 'active', '', $sort);
	


		// Prepare data for the view
		$data = [
			'title' => "Forum - " . $category['name'],
			'meta_tags' => [
				'title' => !empty($category['meta_title']) ? $category['meta_title'] : ("Forum - " . $category['name']),
				'description' => $category['meta_description'],
			],
			'styles' => [],
			'scripts' => [
				'assets/js/post-category.js'
			],
			'content' => 'post-category.php', // View file
			'head_scripts' => [],
			'forum_posts' => $forum_posts,
			'pagination_links' => $this->pagination->create_links(),
			'category' => $category, // Pass category details to view
		];
	
		$this->load->view('layouts/main', $data);
	}


	public function forum_post_detail($category_slug, $post_url_slug) {
		
		// Get Category ID from Slug
		$category = $this->commonModel->get('categories', ['url_slug' => $category_slug, 'status' => 1]);
		if (!$category) {
			show_404(); // If category not found, show 404 error
		}
		
	
		// Fetch forum posts
		$forum_post = $this->commonModel->get('forum_post', ['url_slug' => $post_url_slug, 'status' => 'active', 'category_id' => $category['id']]);

		if (!$forum_post) {
			show_404();
		}


		$student = $this->commonModel->get('student', ['id' => $forum_post['added_by']]);

		$user_id = $_SESSION['id'] ?? 0;

		$comments = $this->commonModel->getComments($forum_post['id'], 'post', $user_id);

	
		$total_comments =  $this->commonModel->getAll('comments', ['entity_id' => $forum_post['id'], 'entity_type' => 'post']);


		// Get the user's IP Address
		$user_ip = $this->input->ip_address();
    
		// Track the unique post view
		$this->trackEntityView($forum_post['id'], 'post', $user_ip);

	
		// Prepare data for the view
		$data = [
			'title' => $forum_post['title'],
			'meta_tags' => [
				'title' =>  $forum_post['meta_title'],
				'description' => $forum_post['meta_description'],
				'keywords' => $forum_post['meta_keywords'],
			],
			'styles' => [],
			'scripts' => [
				'assets/js/page_like.js',
				"assets/ckeditor/ckeditor.js",
				"assets/js/comment.js",
				"assets/js/bookmark.js",
			],
			'content' => 'post-detail.php',
			'head_scripts' => [],
			'likes_count' => $this->commonModel->get_likes_count($forum_post['id'], 'post'),
			'user_liked' => $this->commonModel->user_has_liked($user_id, $forum_post['id'], 'post'),
			'user_bookmarked' => $this->commonModel->user_has_bookmark($user_id, $forum_post['id'], 'post'),
			'comments' => $comments,
			'comment_count' => $total_comments ?count($total_comments) : 0,
			'bookmark_count' => $this->commonModel->get_bookmark_count($forum_post['id'], 'post'),
			'data' => [
				'category' => $category,
				'forum_post' => $forum_post,
				'student' => $student,
			],
			
			
		];
	
		$this->load->view('layouts/main', $data);
	}

	public function reply($post_id, $comment_id, $type){

		$allowed_type = [
			'post',
			'page',
			'job'
		];

		if(!in_array($type, $allowed_type)){
			return redirect(base_url());
		}

		if($type == "post"){
			$forum_post = $this->commonModel->get('forum_post', ['id' => $post_id, 'status' => 'active']);
		}else if($type == "page"){
			$forum_post = $this->commonModel->get('pages', ['id' => $post_id, 'status' => 0 ]);
		}else{
			$forum_post = $this->commonModel->get('jobs', ['id' => $post_id, 'status' => 'active']);
		}



		if(empty($forum_post)){
			show_404();
		}

		$comment = $this->commonModel->get('comments', [
			'id' => $comment_id,
			'entity_id' => $forum_post['id'],
			'entity_type' => $type, 
		]);

		
		if(empty($comment)){
			show_404();
		}

		$student = $this->commonModel->get('student', [
			'id' => $comment['user_id']
		]);

		$data = [
			'title' => "Reply",
			'meta_tags' => [
				'title' =>  "Reply",
			],
			'styles' => [],
			'scripts' => [
				"assets/ckeditor/ckeditor.js",
				"assets/js/reply-comment.js"
			],
			'content' => 'reply.php',
			'head_scripts' => [],
		
			'data' => [
				'comment' => $comment,
				'forum_post' => $forum_post,
				'student' => $student,
			],
			
		];
	
		$this->load->view('layouts/main', $data);

	}

	private function trackEntityView($entity_id, $entity_type, $user_ip) {
		$this->commonModel->trackView($entity_id, $entity_type, $user_ip);
	}
	

	public function jobs() {

		$this->load->library('pagination');
	
		// Capture search query
		$search_term = $this->input->get('search_term', TRUE);
		$cat = $this->input->get('cat', TRUE);


		$query_params = array();

		// Add parameters only if they are present
		if (!empty($search_term)) {
			$query_params['search'] = urlencode($search_term);
		}
	
		if (!empty($cat)) {
			$query_params['cat'] = urlencode($cat);
		}

		$query_string = http_build_query($query_params);
	
		// Pagination Configurations
		$config = array();
	
		$config['base_url'] = base_url('jobs') . (!empty($query_string) ? '?' . $query_string : '');
		$config['total_rows'] = $this->commonModel->get_total_jobs_count($search_term, $cat); // Total Page count
		$config['per_page'] = 20; // Pages per page
		$config['use_page_numbers'] = TRUE; // Use page numbers
		$config['page_query_string'] = TRUE; // Use query string for pagination
		$config['query_string_segment'] = 'page'; // The query string key for the page number
	
		$config['full_tag_open'] = '<ul class="pagination justify-content-start">';
		$config['full_tag_close'] = '</ul>';

		// First Page Link
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = '<i class="fa-solid fa-angle-double-left fa-fw"></i>';  // Icon for first link

		// Last Page Link
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa-solid fa-angle-double-right fa-fw"></i>'; // Icon for last link

		// Next Page Link
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['next_link'] = '<i class="fa-solid fa-angle-right fa-fw"></i>'; // Icon for next link

		// Previous Page Link
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['prev_link'] = '<i class="fa-solid fa-angle-left fa-fw"></i>'; // Icon for previous link

		// Number Links
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		// Current Page Link (Active)
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';

		// Number Link Attributes
		$config['attributes'] = array('class' => 'page-link');
	
		$this->pagination->initialize($config);
	
		// Get the current page from query string
		$page = $this->input->get('page'); // Fetch the page number from the query string
		$page = (is_numeric($page) && $page > 0) ? $page : 1;
	
		$offset = ($page - 1) * $config['per_page'];
	
		


		$data = [
			'title' => "Jobs",
			'meta_tags' => [
				'title' => "Jobs",
			],
			'styles' => [],
			'scripts' => [
			],
			'content' => 'jobs.php',
			'head_scripts' => [],
			
			'jobs' => $this->commonModel->get_jobs($config['per_page'], $offset, $search_term, $cat),
			'pagination_links' => $this->pagination->create_links(),
		];


		$this->load->view('layouts/main', $data);

		// 'likes_count' => $this->commonModel->get_likes_count($job['id'], 'job'),
		// 	'user_liked' => $this->commonModel->user_has_liked($user_id, $job['id'], 'job'),
		// 	'comments' => $this->commonModel->getAll('comments', ['entity_id' => $job['id'], 'entity_type' => 'job' ]),
	
		

	}

	public function forum_post_store() {
        
        // Set validation rules
        $this->form_validation->set_rules('topic_name', 'Topic Name', 'required|min_length[3]');
        $this->form_validation->set_rules('message', 'Message', 'required|min_length[10]');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => 'error',
                'message' => validation_errors()
            ]);
            exit;
        }

		
        $this->db->trans_start();


		$captcha_res = $this->validate_recaptcha();
		
		if(!$captcha_res['status']){
			echo json_encode(['status' => 'error', 'message' => $captcha_res['message'] ]);
			exit;
		}

		$user_id = $_SESSION['id'] ?? '';

		if(empty($user_id)){
			echo json_encode([
				'status' => 'error',
				'message' => "Kindly login first"
			]);
			exit;
		}

        try {
            $topic_name = $this->input->post('topic_name');
            $message = $this->input->post('message');
			$category_id = $this->input->post('category_id') ?? 0;

            // File Upload Handling
            $featured_image = '';
            if (!empty($_FILES['featured_image']['name'])) {
                $path = "./uploads/forum-post/";
                $allowed_type = "jpg|jpeg|png|gif";
                $max_size = 4000; // 4 MB
                $file = $_FILES;
                $input_name = 'featured_image';
                $featured_image_upload = $this->upload_file($path, $allowed_type, $max_size, $file, $input_name);

                if (!empty($featured_image_upload)) {
                    if ($featured_image_upload['status']) {
                        $featured_image = $featured_image_upload['file_name'];
                    } else {
                        echo json_encode([
                            'status' => 'error',
                            'message' => $featured_image_upload['message']
                        ]);
                        exit;
                    }
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => "Featured Image: Something went wrong. Please try again."
                    ]);
                    exit;
                }
            }
			// else {
            //     echo json_encode([
            //         'status' => 'error',
            //         'message' => "Upload Featured Image"
            //     ]);
            //     exit;
            // }

			$url_slug = $this->create_unique_slug($topic_name);

            // Data array
            $data = [
                'title' => $topic_name,
                'content' => $message,
                'featured_image' => $featured_image,
				'status' => 'not_approved',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
				'added_by' => $_SESSION['id'],
				'category_id' => $category_id,
				'url_slug' => $url_slug,
				'featured_image_base_url' => base_url(),

            ];

            $res = $this->commonModel->insert('forum_post', $data);

            if ($res) {
                $this->db->trans_complete();
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Post added successfully!'
                ]);
                exit;
            } else {
                throw new Exception('Failed to add topic');
            }
        } catch (Exception $e) {
            $this->db->trans_rollback();
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
            exit;
        }
    }



	public function toggle_like() {
        if (!$this->session->userdata('id')) {
            echo json_encode(['status' => false, 'message' => 'Login required']);
            return;
        }

        $user_id = $this->session->userdata('id');
        $liked_id = $this->input->post('liked_id');
        $like_type = $this->input->post('like_type');

        if (!$liked_id || !$like_type) {
            echo json_encode(['status' => false, 'message' => 'Invalid Request']);
            return;
        }

        $result = $this->commonModel->toggle_like($user_id, $liked_id, $like_type);
        echo json_encode($result);
    }


	public function toggle_bookmark() {
        if (!$this->session->userdata('id')) {
            echo json_encode(['status' => false, 'message' => 'Login required']);
            return;
        }

        $user_id = $this->session->userdata('id');
        $entity_id = $this->input->post('entity_id');
        $entity_type = $this->input->post('entity_type');

        if (!$entity_id || !$entity_type) {
            echo json_encode(['status' => false, 'message' => 'Invalid Request']);
            return;
        }

        $result = $this->commonModel->toggle_bookmark($user_id, $entity_id, $entity_type);
        echo json_encode($result);
    }


	public function add_comment() {
        if (!$this->session->userdata('id')) {
            echo json_encode(['status' => false, 'message' => 'Login required']);
            return;
        }

        $user_id = $this->session->userdata('id');
        $entity_id = $this->input->post('entity_id');
        $entity_type = $this->input->post('entity_type');
        $comment = trim($this->input->post('comment'));
        $parent_id = $this->input->post('parent_id') ?: NULL;
		

        if (!$entity_id || !$entity_type) {
            echo json_encode(['status' => false, 'message' => 'Invalid request']);
            return;
        }


		if (empty($comment)) {
            echo json_encode(['status' => false, 'message' => 'Please enter comment']);
            return;
        }

		$captcha_res = $this->validate_recaptcha();
		
		if(!$captcha_res['status']){
			echo json_encode(['status' => 'error', 'message' => $captcha_res['message'] ]);
			exit;
		}

		$redirect_url = "";

		if(!empty($parent_id)){
			$parent_comment_exists = $this->commonModel->get('comments', ['id' => $parent_id]);

			if(empty($parent_comment_exists)){
				echo json_encode(['status' => false, 'message' => 'Invalid comment']);
				exit;
			}

			if($parent_comment_exists['entity_type'] == "post"){
				$post = $this->commonModel->get_forum_by_post_id($parent_comment_exists['entity_id']);
				if(empty($post)){
					echo json_encode(['status' => false, 'message' => 'Something Went Wrong. Please try again later. Invalid post']);
					exit;
				}else{
					$redirect_url = base_url() . "" . $post['category_slug'] . "/" . $post['url_slug'];
				}
			}else if($parent_comment_exists['entity_type'] == "page"){
				$page = $this->commonModel->get('pages', ['id' => $parent_comment_exists['entity_id']]);
				if(empty($page)){
					echo json_encode(['status' => false, 'message' => 'Something Went Wrong. Please try again later. Invalid page']);
					exit;
				}else{
					$redirect_url = base_url() . "page/" . $page['url_slug'];
				}
			}else{
				$job = $this->commonModel->get('jobs', ['id' => $parent_comment_exists['entity_id']]);
				if(empty($job)){
					echo json_encode(['status' => false, 'message' => 'Something Went Wrong. Please try again later. Invalid Job']);
					exit;
				}else{
					$redirect_url = base_url() . "job/" . $job['url_slug'];
				}
			}
		}




        $data = [
            'user_id' => $user_id,
            'entity_id' => $entity_id,
            'entity_type' => $entity_type,
            'comment' => $comment,
            'parent_id' => $parent_id,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];

        $result = $this->commonModel->insert('comments', $data);

        if ($result) {
			if($entity_type == "post"){
				$this->commonModel->give_points_to_mem_for_post_comment($user_id, $entity_id);
				$this->commonModel->insert_comment_notification($user_id, $entity_id);
			}
            echo json_encode(['status' => true, 'message' => 'Comment added successfully', 'redirect_url' => $redirect_url ]);
        } else {
            echo json_encode(['status' => false, 'message' => 'Failed to add comment']);
        }
    }


	public function member($member_id){

		$student = $this->commonModel->get('student', ['id' => $member_id, 'status' => 'Y']);	

		
		
		if(empty($student)){
			return redirect(base_url());
		}

		
		$total_forum_posts = $this->commonModel->getAll('forum_post', ['added_by' => $student['id']],  "*", [], true);

		$is_follow = false;

		$current_user_id = $_SESSION['id'] ?? 0;

		if(!empty($current_user_id)){
			$isFollower = $this->commonModel->get('followers', ['following_id' => $member_id, 'follower_id' => $current_user_id]);

			if(!empty($isFollower)){
				$is_follow = true;
			}

		}


		$member_followers = $this->commonModel->get_followers($member_id);

		$member_following = $this->commonModel->get_following($member_id);


		$user_forum_posts = $this->commonModel->get_top_five_user_posts($member_id);

		$total_given_likes = $this->commonModel->get_given_likes($member_id);
	
		$total_received_likes = $this->commonModel->get_received_likes($member_id);

		$total_points = $this->commonModel->get_user_points($member_id);

		$badges = $this->commonModel->get_user_badges($member_id) ?? [];
		
		
		$data = [
			'title' => "Viewing Profile - " . $student['name'],
			'meta_tags' => [
				'title' => "Viewing Profile - " . $student['name'],
			],
			'styles' => [],
			'scripts' => [
				'assets/js/follow.js',
			],
			'content' => 'user-profile',
			'head_scripts' => [],
			'student' => $student,
			'is_follow' => $is_follow,
			'total_forum_posts' => $total_forum_posts,
			'member_followings' => $member_following,
			'member_followers' => $member_followers,
			'user_forum_posts' => $user_forum_posts,
			'total_given_likes' => $total_given_likes,
			'total_received_likes' => $total_received_likes,
			'total_points' => $total_points,
			'badges' => $badges,

		];


		$this->load->view('layouts/main', $data);

	}


    /**
     * Delete a comment
     */
    public function delete_comment($comment_id) {
        if (!$this->session->userdata('id')) {
            echo json_encode(['status' => false, 'message' => 'Login required']);
            return;
        }

        $user_id = $this->session->userdata('id');

        // Check if the comment belongs to the user
        $comment = $this->commonModel->get('comments', ['id' => $comment_id, 'user_id' => $user_id]);

        if (!$comment) {
            echo json_encode(['status' => false, 'message' => 'Comment not found or unauthorized']);
            return;
        }

        $deleted = $this->commonModel->delete('comments', ['id' => $comment_id]);

        if ($deleted) {
            echo json_encode(['status' => true, 'message' => 'Comment deleted']);
        } else {
            echo json_encode(['status' => false, 'message' => 'Failed to delete comment']);
        }
    }


	public function toggle_follow() {

        if (!$this->session->userdata('id')) {
            echo json_encode(['status' => false, 'message' => 'Login required']);
            return;
        }

        $follower_id = $this->session->userdata('id');
        $following_id = $this->input->post('following_id');

        if (!$following_id) {
            echo json_encode(['status' => false, 'message' => 'Invalid request']);
            return;
        }

        // Check if already following
		$is_following = $this->commonModel->get('followers', ['follower_id' => $follower_id, 'following_id' => $following_id]);

        if ($is_following) {
            // Unfollow user
            $result = $this->commonModel->delete('followers', ['follower_id' => $follower_id, 'following_id' => $following_id]);
            if ($result) {

				$user = $this->commonModel->get('student', ['id' => $follower_id]);

				if(!empty($user)){
					$this->commonModel->insert('notifications', [
						'user_id' => $following_id,
						'title' => "Unfollow You",
						'message' => $user['name'] . " has unfollow you",
						"is_read" => 0,
					]);
				}

                echo json_encode(['status' => true, 'message' => 'Unfollowed successfully', 'follow' => false ]);
            } else {
                echo json_encode(['status' => false, 'message' => 'Failed to unfollow']);
            }
        } else {
            // Follow user
            $data = [
                'follower_id' => $follower_id,
                'following_id' => $following_id,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ];

            $result = $this->commonModel->insert('followers', $data);

            if ($result) {

				$user = $this->commonModel->get('student', ['id' => $follower_id]);

				if(!empty($user)){
					$this->commonModel->insert('notifications', [
						'user_id' => $following_id,
						'title' => "Follow You",
						'message' => $user['name'] . " has follow you",
						"is_read" => 0,
					]);
				}


                echo json_encode(['status' => true, 'message' => 'Followed successfully', 'follow' => true ]);

            } else {
                echo json_encode(['status' => false, 'message' => 'Failed to follow']);
            }
        }
    }


	public function bookmark(){
		$this->redirectIfNotLogin();
		$categories = $this->commonModel->getAll('categories', ['status' => 1]);
		$to_date = $_GET['to_date'] ?? '';
		$from_date = $_GET['from_date'] ?? '';
		$category_id = $_GET['category_id'] ?? '';
		$bookmark_posts = $this->commonModel->get_all_bookmarks($_SESSION['id'], $to_date, $from_date, $category_id);
		$data['title'] = "Bookmark";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			'assets/js/bookmark-list.js'
        ];
        $data['content'] = 'bookmark'; 
		$data['categories'] = $categories;
		$data['bookmark_posts'] = $bookmark_posts;
		$this->load->view('layouts/main', $data);
	}

	public function my_posts(){
		$this->redirectIfNotLogin();

		$user_id = $_SESSION['id'];
		$this->load->library('pagination');
		
		// Capture search query parameters
		$search_term = $this->input->get('search_term', TRUE);
	
		$query_params = [];
	
		if (!empty($search_term)) {
			$query_params['search'] = urlencode($search_term);
		}
	
		$query_string = http_build_query($query_params);
	
		
	
		// Pagination Configurations
		$config = [];
		$config['base_url'] = base_url('my-posts') . (!empty($query_string) ? '?' . $query_string : '');
		$config['total_rows'] = $this->commonModel->get_total_forum_posts_count($search_term, '', $user_id); // Total post count
		$config['per_page'] = 20; // Posts per page
		$config['use_page_numbers'] = TRUE; // Use page numbers
		$config['page_query_string'] = TRUE; // Use query string for pagination
		$config['query_string_segment'] = 'page'; // The query string key for the page number
	
		$config['full_tag_open'] = '<ul class="pagination justify-content-start">';
		$config['full_tag_close'] = '</ul>';
	
		// First Page Link
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = '<i class="fa-solid fa-angle-double-left fa-fw"></i>';
	
		// Last Page Link
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa-solid fa-angle-double-right fa-fw"></i>';
	
		// Next Page Link
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['next_link'] = '<i class="fa-solid fa-angle-right fa-fw"></i>';
	
		// Previous Page Link
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['prev_link'] = '<i class="fa-solid fa-angle-left fa-fw"></i>';
	
		// Number Links
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
	
		// Current Page Link (Active)
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
	
		// Number Link Attributes
		$config['attributes'] = ['class' => 'page-link'];
	
		$this->pagination->initialize($config);
	
		// Get the current page from query string
		$page = $this->input->get('page');
		$page = (is_numeric($page) && $page > 0) ? $page : 1;
		$offset = ($page - 1) * $config['per_page'];
	
		// Fetch forum posts
		$forum_posts = $this->commonModel->get_forum_posts($config['per_page'], $offset, $search_term, '', $user_id);
	
		// Prepare data for the view
		$data = [
			'title' => "My Posts",
			'meta_tags' => [
				'title' => "My Posts",
			],
			'styles' => [],
			'scripts' => [],
			'content' => 'my-posts', // View file
			'head_scripts' => [],
			'forum_posts' => $forum_posts,
			'pagination_links' => $this->pagination->create_links(),
		];
	
		$this->load->view('layouts/main', $data);
	}



	public function not_approved_posts(){
		$this->redirectIfNotLogin();

		$user_id = $_SESSION['id'];
		$this->load->library('pagination');
		
		// Capture search query parameters
		$search_term = $this->input->get('search_term', TRUE);
	
		$query_params = [];
	
		if (!empty($search_term)) {
			$query_params['search'] = urlencode($search_term);
		}
	
		$query_string = http_build_query($query_params);
	
		$status = 'not_approved';
	
		// Pagination Configurations
		$config = [];
		$config['base_url'] = base_url('pending-approval') . (!empty($query_string) ? '?' . $query_string : '');
		$config['total_rows'] = $this->commonModel->get_total_forum_posts_count($search_term, '', '', $status); // Total post count
		$config['per_page'] = 20; // Posts per page
		$config['use_page_numbers'] = TRUE; // Use page numbers
		$config['page_query_string'] = TRUE; // Use query string for pagination
		$config['query_string_segment'] = 'page'; // The query string key for the page number
	
		$config['full_tag_open'] = '<ul class="pagination justify-content-start">';
		$config['full_tag_close'] = '</ul>';
	
		// First Page Link
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = '<i class="fa-solid fa-angle-double-left fa-fw"></i>';
	
		// Last Page Link
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['last_link'] = '<i class="fa-solid fa-angle-double-right fa-fw"></i>';
	
		// Next Page Link
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['next_link'] = '<i class="fa-solid fa-angle-right fa-fw"></i>';
	
		// Previous Page Link
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['prev_link'] = '<i class="fa-solid fa-angle-left fa-fw"></i>';
	
		// Number Links
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
	
		// Current Page Link (Active)
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
	
		// Number Link Attributes
		$config['attributes'] = ['class' => 'page-link'];
	
		$this->pagination->initialize($config);
	
		// Get the current page from query string
		$page = $this->input->get('page');
		$page = (is_numeric($page) && $page > 0) ? $page : 1;
		$offset = ($page - 1) * $config['per_page'];
	
		// Fetch forum posts
		$forum_posts = $this->commonModel->get_forum_posts($config['per_page'], $offset, $search_term, '', '', $status);
	
		// Prepare data for the view
		$data = [
			'title' => "Not Approved",
			'meta_tags' => [
				'title' => "Not Approved",
			],
			'styles' => [],
			'scripts' => [],
			'content' => 'pending-approval', // View file
			'head_scripts' => [],
			'forum_posts' => $forum_posts,
			'pagination_links' => $this->pagination->create_links(),
		];
	
		$this->load->view('layouts/main', $data);
	}


	public function view_pending_post_detail($post_url_slug) {
		

		// Fetch forum posts
		$forum_post = $this->commonModel->get('forum_post', ['url_slug' => $post_url_slug, 'status' => 'not_approved']);

		if (!$forum_post) {
			show_404();
		}


	
		$category = $this->commonModel->get('categories', ['id' => $forum_post['category_id'], 'status' => 1]);

		if (!$category) {
			show_404(); // If category not found, show 404 error
		}


		$student = $this->commonModel->get('student', ['id' => $forum_post['added_by']]);

		$user_id = $_SESSION['id'] ?? 0;

		

		$data['title'] = "View Post";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			"assets/ckeditor/ckeditor.js",
			"assets/js/create_post.js"
        ];
        $data['content'] = 'view-post.php'; 
		$data['category'] = $category;
		$data['forum_post'] = $forum_post;

		$this->load->view('layouts/main', $data);

	}


	public function edit_post($post_url_slug) {
		

		// Fetch forum posts
		$forum_post = $this->commonModel->get('forum_post', ['url_slug' => $post_url_slug, 'added_by' => $_SESSION['id']]);

		if (!$forum_post) {
			show_404();
		}


	
		$category = $this->commonModel->get('categories', ['id' => $forum_post['category_id'], 'status' => 1]);

		if (!$category) {
			show_404(); // If category not found, show 404 error
		}


		$student = $this->commonModel->get('student', ['id' => $forum_post['added_by']]);

		$user_id = $_SESSION['id'] ?? 0;

		

		$data['title'] = "View Post";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			"assets/ckeditor/ckeditor.js",
			"assets/js/edit_post.js"
        ];
        $data['content'] = 'edit-post.php'; 
		$data['category'] = $category;
		$data['forum_post'] = $forum_post;

		$this->load->view('layouts/main', $data);

	}


	public function moderator_edit_post($post_url_slug) {
		

		// Fetch forum posts
		$forum_post = $this->commonModel->get('forum_post', ['url_slug' => $post_url_slug]);

		if (!$forum_post) {
			show_404();
		}


	
		$category = $this->commonModel->get('categories', ['id' => $forum_post['category_id'], 'status' => 1]);

		if (!$category) {
			show_404(); // If category not found, show 404 error
		}


		$student = $this->commonModel->get('student', ['id' => $forum_post['added_by']]);

		$user_id = $_SESSION['id'] ?? 0;

		

		$data['title'] = "View Post";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			"assets/ckeditor/ckeditor.js",
			"assets/js/edit_post.js"
        ];
        $data['content'] = 'edit-moderator-post.php'; 
		$data['category'] = $category;
		$data['forum_post'] = $forum_post;

		$this->load->view('layouts/main', $data);

	}



	public function update_moderator_post() {
        

		$post_id = $this->input->post('post_id') ?? '';

		if(empty($post_id)){
			echo json_encode([
                'status' => 'error',
                'message' => "Invalid Request",
            ]);
            exit;
		}


		$post = $this->commonModel->get('forum_post', ['id' => $post_id]);



		if(empty($post)){
			echo json_encode([
				'status' => 'error',
				'message' => "No Post Found",
			]);
			exit;
		}


		$previous_status = $post['status'];

        // Set validation rules
        $this->form_validation->set_rules('topic_name', 'Topic Name', 'required|min_length[3]');
        $this->form_validation->set_rules('message', 'Message', 'required|min_length[10]');
		$this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => 'error',
                'message' => validation_errors()
            ]);
            exit;
        }

        $this->db->trans_start();

        try {

            $topic_name = $this->input->post('topic_name');
            $message = $this->input->post('message');
			// $category_id = $this->input->post('category_id') ?? 0;
			$status = $this->input->post('status') ?? 'not_approved';

			$featured_image = $post['featured_image'];

			$meta_title = $this->input->post('meta_title');
			$meta_description = $this->input->post('meta_description');
			$meta_keywords = $this->input->post('meta_keywords');

			$featured_image_base_url = $post['featured_image_base_url'];


			$category = $this->commonModel->get('categories', ['id' => $post['category_id']]);



			if(empty($category)){
				echo json_encode([
					'status' => 'error',
					'message' => "No Category Found",
				]);
				exit;
			}

            // File Upload Handling
            // $featured_image = '';
            if (!empty($_FILES['featured_image']['name'])) {
                $path = "./uploads/forum-post/";
                $allowed_type = "jpg|jpeg|png|gif";
                $max_size = 4000; // 4 MB
                $file = $_FILES;
                $input_name = 'featured_image';
                $featured_image_upload = $this->upload_file($path, $allowed_type, $max_size, $file, $input_name);

                if (!empty($featured_image_upload)) {
                    if ($featured_image_upload['status']) {
                        $featured_image = $featured_image_upload['file_name'];
						$featured_image_base_url = base_url();
                    } else {
                        echo json_encode([
                            'status' => 'error',
                            'message' => $featured_image_upload['message']
                        ]);
                        exit;
                    }
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => "Featured Image: Something went wrong. Please try again."
                    ]);
                    exit;
                }
            }else{
				if(empty($_POST['featured_image'])){
					echo json_encode([
						'status' => 'error',
						'message' => "Featured Image: Please select an image."
					]);
					exit;
				}
			}

			$url_slug = $this->create_unique_slug($topic_name, $post['id']);

            // Data array
            $data = [
                'title' => $topic_name,
                'content' => $message,
                'featured_image' => $featured_image,
				'status' =>  $status,
                'updated_at' => date('Y-m-d H:i:s'),
				'url_slug' => $url_slug,
				'featured_image_base_url' => $featured_image_base_url,
				'meta_title' => $meta_title,
				'meta_description' => $meta_description,
				'meta_keywords' => $meta_keywords,
            ];

            $res = $this->commonModel->update('forum_post', $data, ['id' => $post['id']]);

            if ($res) {

				if($status == "active" && $previous_status != $status){


					if($post['is_notify'] == 0){
						$push_notification_res = $this->send_notification([
							'title' => $topic_name,
							'message' => $topic_name,
							'icon' => $data['featured_image_base_url'] . $data['featured_image'],
							'image' => $data['featured_image_base_url'] . $data['featured_image'],
							'url' => base_url () . $category['url_slug'] . "/" . $data['url_slug'],
						]);

						if($push_notification_res){
							$this->commonModel->update('forum_post', ['is_notify' => 1], ['id' => $post['id']]);
						}

					}

					$total_post = $this->commonModel->total_user_post($post['added_by']);

					if($total_post == 1){

						$this->commonModel->giveBadge(BADGE_FIRST_POST, $post['added_by'], "First Post Created");

						$this->commonModel->addPoints($post['added_by'], POINTS_ON_FIRST_POST, "First Post Created");

					}

					$this->commonModel->insert('notifications', [
						'user_id' => $post['added_by'],
						'title' => "Post Publish",
						'message' => "Your post has been approved and published",
					]);
				}

                $this->db->trans_complete();
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Post update successfully!'
                ]);
                exit;
            } else {
                throw new Exception('Failed to update post');
            }
        } catch (Exception $e) {
            $this->db->trans_rollback();
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
            exit;
        }
    }

	public function update_post() {
        

		$post_id = $this->input->post('post_id') ?? '';

		if(empty($post_id)){
			echo json_encode([
                'status' => 'error',
                'message' => "Invalid Request",
            ]);
            exit;
		}


		$post = $this->commonModel->get('forum_post', ['id' => $post_id]);

		if(empty($post)){
			echo json_encode([
				'status' => 'error',
				'message' => "No Post Found",
			]);
			exit;
		}

        // Set validation rules
        $this->form_validation->set_rules('topic_name', 'Topic Name', 'required|min_length[3]');
        $this->form_validation->set_rules('message', 'Message', 'required|min_length[10]');
		$this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => 'error',
                'message' => validation_errors()
            ]);
            exit;
        }

        $this->db->trans_start();

        try {

            $topic_name = $this->input->post('topic_name');
            $message = $this->input->post('message');
			$category_id = $this->input->post('category_id') ?? 0;
			$status = $this->input->post('status') ?? 'not_approved';

			$featured_image = $post['featured_image'];

			$featured_image_base_url = $post['featured_image_base_url'];

            // File Upload Handling
            $featured_image = '';
            if (!empty($_FILES['featured_image']['name'])) {
                $path = "./uploads/forum-post/";
                $allowed_type = "jpg|jpeg|png|gif";
                $max_size = 4000; // 4 MB
                $file = $_FILES;
                $input_name = 'featured_image';
                $featured_image_upload = $this->upload_file($path, $allowed_type, $max_size, $file, $input_name);

                if (!empty($featured_image_upload)) {
                    if ($featured_image_upload['status']) {
                        $featured_image = $featured_image_upload['file_name'];
						$featured_image_base_url = base_url();
                    } else {
                        echo json_encode([
                            'status' => 'error',
                            'message' => $featured_image_upload['message']
                        ]);
                        exit;
                    }
                } else {
                    echo json_encode([
                        'status' => 'error',
                        'message' => "Featured Image: Something went wrong. Please try again."
                    ]);
                    exit;
                }
            } 

			$url_slug = $this->create_unique_slug($topic_name, $post['id']);

            // Data array
            $data = [
                'title' => $topic_name,
                'content' => $message,
                'featured_image' => $featured_image,
				'status' =>  $status,
                'updated_at' => date('Y-m-d H:i:s'),
				'url_slug' => $url_slug,
				'featured_image_base_url' => $featured_image_base_url,

            ];

            $res = $this->commonModel->update('forum_post', $data, ['id' => $post['id']]);

            if ($res) {
                $this->db->trans_complete();
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Post update successfully!'
                ]);
                exit;
            } else {
                throw new Exception('Failed to update post');
            }
        } catch (Exception $e) {
            $this->db->trans_rollback();
            echo json_encode([
                'status' => 'error',
                'message' => $e->getMessage()
            ]);
            exit;
        }
    }


	public function delete_post($post_url_slug) {
		

		// Fetch forum posts
		$forum_post = $this->commonModel->get('forum_post', ['url_slug' => $post_url_slug]);

		if (empty($forum_post)) {
			return redirect(base_url() . "my-posts");
		}


		$res = $this->commonModel->delete('forum_post', ['id' => $forum_post['id']]);
	
		if($res){
			$this->session->set_flashdata('success', "Deleted Successfully");
		}else{
			$this->session->set_flashdata('error', "Something went wrong. Please try again later. POST_NOT_DELETED_DB_ERROR");
		}

		return redirect(base_url() . "my-posts");

	}

	public function delete_selected_bookmarks() {
        $bookmark_ids = $this->input->post('bookmark_ids'); // Get selected IDs from AJAX request

        // Validate input
        if (empty($bookmark_ids) || !is_array($bookmark_ids)) {
            echo json_encode(['status' => 'error', 'message' => 'No bookmarks selected']);
            return;
        }

        $this->commonModel->delete_bookmarks($bookmark_ids);

        echo json_encode(['status' => 'success', 'message' => 'Bookmarks deleted successfully']);
    }


	public function chat(){
		$data['title'] = "Chat";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			"assets/js/chat.js"	
        ];
        $data['content'] = 'chat.php'; 

		$data['chat_list'] = $this->commonModel->getUserChatList($_SESSION['id']);

	
		$this->load->view('layouts/main', $data);
	}


	public function chat_detail($user_id){
		$data['title'] = "Chat";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			
			"assets/js/chat.js"	
        ];
        $data['content'] = 'chat-detail'; 

		$student = $this->commonModel->get('student', ['id' => $user_id, 'status' => "Y"]);
	
		if(empty($student)){
			return redirect(base_url() . "profile");
		}

		

		$messages = $this->commonModel->getMessages($student['id'], $_SESSION['id']);

		$data['messages'] = $messages;

	

		$data['student'] = $student;

		$this->load->view('layouts/main', $data);
	}
	


	public function storeMessage() {
		$sender_id = $this->input->post('sender_id');
		$receiver_id = $this->input->post('receiver_id');
		$message = $this->input->post('message');
	
		if (!empty($sender_id) && !empty($receiver_id) && !empty($message)) {
			$data = [
				'sender_id' => $sender_id,
				'receiver_id' => $receiver_id,
				'message' => $message,
				'sent_at' => date("Y-m-d H:i:s")
			];
	
			$this->commonModel->insert('messages', $data);
	
			echo json_encode(["status" => "success", "message" => "Message stored successfully"]);
		} else {
			echo json_encode(["status" => "error", "message" => "Invalid data"]);
		}
	}
	

	public function search() {
		$search_term = $this->input->get('search_term', TRUE);
	
		if (empty($search_term)) {
			$data['search_results'] = [];
			$data['search_term'] = '';
		} else {
			// Fetch results from different models
			$forum_posts = $this->commonModel->search_forum_posts($search_term);
			$jobs = $this->commonModel->search_jobs($search_term);
			$pages = $this->commonModel->search_pages($search_term);
	
			// Merge all results
			$search_results = array_merge($forum_posts, $jobs, $pages);
	
			// Sort by created_at (latest first)
			usort($search_results, function ($a, $b) {
				return strtotime($b['created_at']) - strtotime($a['created_at']);
			});
	
			$data['search_results'] = $search_results;
			$data['search_term'] = $search_term;
		}
	

		$data['title'] = "Search Results";
		$data['content'] = 'search-results'; // Load view file
		$this->load->view('layouts/main', $data);
	}



	

	public function send_notification($data){
		$curl = curl_init();

		

		curl_setopt_array($curl, array(
		CURLOPT_URL => $this->config->item('LARAPUSH_API_HOST') . 'api/createCampaign',
		CURLOPT_RETURNTRANSFER => true,
		CURLOPT_ENCODING => '',
		CURLOPT_MAXREDIRS => 10,
		CURLOPT_TIMEOUT => 0,
		CURLOPT_FOLLOWLOCATION => true,
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		CURLOPT_CUSTOMREQUEST => 'POST',
		CURLOPT_POSTFIELDS => array(
			'email' => $this->config->item('LARAPUSH_EMAIL'),
			'password' => $this->config->item('LARAPUSH_PASSWORD'),
			'title' => $data['title'],
			'message' => $data['message'],
			'icon' => $data['icon'],
			'image' => $data['image'],
			'url' => $data['url'],
			'domains[]' => [
				"testabc.keyanntech.com"
			]
		),
		CURLOPT_HTTPHEADER => array(
			'Accept: application/json'
		),
		));

		$response = curl_exec($curl);

		if(curl_errno($curl)) {
			log_message('error', 'Larapush Error: ' . curl_error($curl));
			curl_close($curl);
			return false;
		}
	
		curl_close($curl);
	
		$result = json_decode($response, true);
	
		if(isset($result['success']) && $result['success']) {
			log_message('info', 'Push notification sent successfully via Larapush.');
			return true;
		} else {
			log_message('error', 'Failed to send push notification: ' . $response);
			return false;
		}
		
	}


	public function clear_notification(){
		$user_id = $_SESSION['id'] ?? 0;
		
		if(empty($user_id)){
			echo json_encode([
				'status' => 'error',
				'message' => "User is not logged in",
			]);
			exit;
		}

		$this->commonModel->update('notifications', ['is_read' => 1], ['user_id' => $user_id]);

		echo json_encode([
			'status' => 'success',
			'message' => "Notifications cleared successfully",
		]);

		exit;
	}

	
	
}
