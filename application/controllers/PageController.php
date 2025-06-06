<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once dirname(__FILE__) . "/CommonController.php";


class PageController extends CommonController {

    public function __construct(){
		parent::__construct();
	}


	public function index() {

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
	
		$config['base_url'] = base_url('page') . (!empty($query_string) ? '?' . $query_string : '');
		$config['total_rows'] = $this->commonModel->get_total_page_count($search_term, $cat); // Total Page count
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
	
		
	
		// Fetch pages
		$data['pages'] = $this->commonModel->get_pages($config['per_page'], $offset, $search_term, $cat);
		$data['pagination_links'] = $this->pagination->create_links();

		

		$data['page_title'] = "Page";
		
		$this->load->view('page/all-pages', $data);

	}

    public function page_detail($url_slug){
		
		$page = $this->commonModel->get_page_by_slug($url_slug);
  
		// Check if the page exists
		if (!$page) {
			// Redirect to 404 page if page not found
			abort(404);
		}
	
		// Prepare data for the view
		$data['page'] = $page;
    
		$data['page_title'] = $page['title'];

	
		// Load the page details view
		$this->load->view('page/page-detail', $data);
	}



}
