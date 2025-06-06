<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once dirname(__FILE__) . "/CommonController.php";


class JobController extends CommonController {

    public function __construct(){
		parent::__construct();
	}


	public function index(){
		$jobs = $this->commonModel->get_all_jobs();
		$this->load->view('job/job-list', ['page_title' => "Job", 'jobs' => $jobs]);
	}


	public function fetch_jobs() {
		$postData = $this->input->post(); // Get request from DataTables AJAX
		$jobsData = $this->commonModel->get_all_jobs_datatable($postData);
	
		$data = [];
		foreach ($jobsData['data'] as $key => $job) {
			$row = [];
			$row[] = $job->id;
			$row[] = '<a href="' . base_url() . 'job/' . $job->id . '">' . $job->title . '</a>';
			$row[] = $job->cat_name;
			$row[] = $job->location;
			$row[] = $job->company_name;
			$row[] = $job->job_type;
			$row[] = $job->salary_range;
	
			$data[] = $row;
		}
	
		$output = [
			"draw" => intval($postData['draw']),
			"recordsTotal" => $jobsData['recordsTotal'],
			"recordsFiltered" => $jobsData['recordsFiltered'],
			"data" => $data
		];
	
		echo json_encode($output);
	}
	


	public function job_detail($id){
		$job = $this->commonModel->get_job($id);
		if(empty($job)){
			return redirect(base_url() . 'jobs');
		}
		$this->load->view('job/job-detail', ['page_title' => "Job", 'job' => $job]);
	}


}
