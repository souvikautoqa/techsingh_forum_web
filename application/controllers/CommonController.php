<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CommonController extends CI_Controller {

	protected $auth_dir = "auth/";
	protected $job_dir = "job/";
	protected $blog_dir = "blog/";
	protected $setting_dir = "setting/";

	protected $user_tbl = "users";

	public function __construct(){
		parent::__construct();

		$this->load->model(['commonModel']);
	}


	public function isLogin(){
		if(!$this->session->userdata('id') && !$this->session->userdata('is_logged_in')){
			return false;
		}else{
			return true;
		}
	}


	public function redirectIfNotLogin(){
		if(!$this->isLogin()){
			return redirect(base_url() . "login");
		}
	}

	public function redirectIfLogin(){
		if($this->isLogin()){
			return redirect(base_url() . "dashboard");
		}
	}


	public function upload_file($path, $allowed_type, $max_size, $file, $input_name) {

        $upload_path = $path; // './uploads/'; 
        $config['allowed_types'] = $allowed_type; // 'gif|jpg|png';
        $config['max_size'] = $max_size;

        $this->load->library('upload', $config);
		

        if ($file[$input_name]['error'] !== UPLOAD_ERR_OK) {
            // Handle file upload error
            $error = 'File upload failed.';
            return array('status' => false, 'message' => $error . " " . $file[$input_name]['error']);
        } else {
         
			$file_ext = pathinfo($_FILES[$input_name]['name'], PATHINFO_EXTENSION);

			// Generate a timestamped file name
			$new_file_name = time() . rand(1111, 9999) .  '.' . $file_ext;
			
            if(move_uploaded_file($file[$input_name]['tmp_name'], $upload_path . $new_file_name)){
				return array('status' => true, 'file_name' => $upload_path . $new_file_name, 'message' => "Uploaded Successfully");
			}else{
				return array('status' => false, 'message' => "File not uploaded");
			}
           
        }
		

	}


	public function validate_recaptcha() {
		$recaptchaResponse = $this->input->post('g-recaptcha-response');
		$secretKey = '6LfhwvcqAAAAADFqGe3kOro8ovj45iBaGcc1VJ7c'; // Google test secret key
	
		$url = "https://www.google.com/recaptcha/api/siteverify?secret={$secretKey}&response={$recaptchaResponse}";
		$response = file_get_contents($url);
		$responseData = json_decode($response);

	
		if (isset($responseData->success) && $responseData->success) {
			return ['status' => true, 'message' => "reCAPTCHA verified!"];
		} else {
			return ['status' => false, 'message' => "reCAPTCHA verification failed! Please try again."];
		}

	}


	
	
}
