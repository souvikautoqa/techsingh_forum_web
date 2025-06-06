<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once dirname(__FILE__) . "/CommonController.php";


class DashboardController extends CommonController {

    public function __construct(){
		parent::__construct();
	}


    public function index(){
		$this->redirectIfNotLogin();
		return redirect(base_url() . 'profile');
		$page_title = "Dashboard";
		$this->load->view("dashboard/index", compact('page_title'));
	}

	
}
