<?php
defined('BASEPATH') OR exit('No direct script access allowed');

include_once dirname(__FILE__) . "/CommonController.php";


class AuthController extends CommonController {

    public function __construct(){
		parent::__construct();
	}

	
	public function _header($data){
		$this->load->view('layouts/auth/header', $data);
	}

	public function _footer(){
		$this->load->view('layouts/auth/footer');
	}

    public function index(){
		$this->redirectIfLogin();
		$data['title'] = "Login";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
        ];
        $data['content'] = 'auth/login'; // Loads `application/views/auth/login.php`

        $this->load->view('layouts/auth/main', $data);
	}


	public function register(){
		$this->redirectIfLogin();
		$data['title'] = "Register";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
			'assets/js/register.js',
        ];
        $data['content'] = 'auth/register'; 

        $this->load->view('layouts/auth/main', $data);
	}


	public function register_post() {
        // Validate form input
        $this->form_validation->set_rules('name', 'Name', 'required|trim|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(['status' => 'error', 'message' => "Please enter valid/all details"]);
			exit;
        }

		
		$captcha_res = $this->validate_recaptcha();
		
		if(!$captcha_res['status']){
			echo json_encode(['status' => 'error', 'message' => $captcha_res['message'] ]);
			exit;
		}

        // Get form data
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $password = password_hash($this->input->post('password'), PASSWORD_BCRYPT);
        $verification_token = md5(uniqid(rand(), true)); // Generate verification token

		$user = $this->commonModel->get('student', ['email' => $email]);

		$is_update = false;

		if(!empty($user)){
			if($user['is_verified'] == 1){
				echo json_encode(['status' => 'error', 'message' => "Email already exists" ]);
				exit;
			}else{
				$is_update = true;
			}
		}

        // Insert user data
        $user_data = array(
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'status' => 'N',
            'verification_token' => $verification_token,
			'is_verified' => 0,
        );

		if($is_update){
			$res = $this->commonModel->update('student', $user_data, ['id' => $user['id'] ]);
		}else{
			$res = $this->commonModel->insert('student', $user_data);

			
		}


		if($res){
			$this->_send_verification_email($email, $verification_token);
			echo json_encode(['status' => 'success', 'message' => 'Registration successful! Please check your email to verify your account.']);
			exit;
		}else{
			echo json_encode(['status' => 'error', 'message' => 'Something went wrong. Please try again.']);
           	exit;
		}

	   
    }

    private function _send_verification_email($email, $token) {
        $verification_link = base_url("auth/verify_email/" . $token);

        $subject = "Verify Your Email";
        $message = "<p>Dear User,</p>
                    <p>Thank you for registering. Please click the link below to verify your email:</p>
                    <p><a href='" . $verification_link . "' target='_blank'>" . $verification_link . "</a></p>
                    <p>If you did not request this, please ignore this email.</p>";

		$res = $this->commonModel->sent_email($message, $subject, $email, $cc = "");

        if (isset($res['status']) && $res['status']) {
            return true;
        } else {
           echo json_encode(['status' => 'error', 'message' => "Failed to send email."]);
		   exit;
        }
    }

    public function verify_email($token) {
        $user = $this->commonModel->get('student', ['verification_token' => $token]);

        if ($user) {
			
            // Update user status to active
            $this->commonModel->update('student', [
				'status' => "Y",
				'is_verified' => 1,
				'verification_token' => '',
			],  ['id' => $user['id'] ] );

			$this->commonModel->giveBadge($badge_type=BADGE_NEW_MEMBER, $user['id'], "NEW MEMBER");

			$this->commonModel->addPoints($user['id'], POINTS_ON_REGISTER, "NEW MEMBER");

            $this->session->set_flashdata('success', 'Your email has been verified! You can now log in.');
            return redirect(base_url() . "login");
        } else {
            $this->session->set_flashdata('error', 'Invalid or expired verification link.');
            return redirect(base_url() . "register");
        }
    }

	public function login_post(){
		$this->redirectIfLogin();
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			// $this->session->set_flashdata('error', validation_errors());
			$this->session->set_flashdata('error', "Please enter all/valid details");
			return redirect(base_url() . "login");
		}

		$captcha_res = $this->validate_recaptcha();
		
		if(!$captcha_res['status']){
			$this->session->set_flashdata('error', $captcha_res['message']);
			return redirect(base_url() . "login");
		}

		$email = $this->input->post('email');
		$password  = $this->input->post('password');

		 // Fetch the user by email
		$user = $this->commonModel->get('student', ['email' => $email]);

		if ($user) {

			if($user['is_social_login'] != 0){
				$this->session->set_flashdata('error', 'Please log in using your social account.');
                return redirect(base_url() . "login");
			}			
			 
			// Verify the password
			if (password_verify($password, $user['password'])) {

				if($user['is_verified'] == 0){
					$verification_token = md5(uniqid(rand(), true)); // Generate verification token
					$this->commonModel->update('student', [
						'verification_token' => $verification_token
					], ['id' => $user['id']]);

					$this->_send_verification_email($user['email'], $verification_token);

					$this->session->set_flashdata('success', 'Please check your email to verify your account.');
					return redirect(base_url() . "login");
					
				}

				if($user['status'] != 'Y'){
					$this->session->set_flashdata('error', 'Your account is not active');
					return redirect(base_url());
				}else{
					// Set user session data
					$this->session->set_userdata('id', $user['id']);
					$this->session->set_userdata('email', $user['email']);
					$this->session->set_userdata('is_logged_in', true);
					$this->session->set_userdata('name', $user['name']);
					$this->session->set_userdata('role', $user['role_id']);
					// Redirect
					return redirect(base_url() . "dashboard");
				}
				
			} else {
				 $this->session->set_flashdata('error', 'Invalid email or password.');
				 return redirect(base_url() . "login");
			}
		} else {
			 $this->session->set_flashdata('error', 'No user found with that email.');
			 return redirect(base_url() . "login");
		}
		
	}


	public function google_login(){

		$this->redirectIfLogin();
	
		try{

		
			// if captured code param
			if( isset($_GET['code']) && !empty($_GET['code']) ){
				$params = [
					'code' => $_GET['code'],
					'client_id' => $this->config->item('GOOGLE_CLIENT_ID'),
					'client_secret' => $this->config->item('GOOGLE_SECRET_KEY'),
					'redirect_uri' => $this->config->item('GOOGLE_REDIRECT_URI'),
					'grant_type' => 'authorization_code'
				];

				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, 'https://accounts.google.com/o/oauth2/token');
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				$response = curl_exec($ch);
				curl_close($ch);
				$response = json_decode($response, true);

				

				if(isset($response['access_token']) && !empty($response['access_token'])){
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, 'https://www.googleapis.com/oauth2/' . $this->config->item("GOOGLE_VERSION") . '/userinfo');
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Bearer ' . $response['access_token']]);
					$response = curl_exec($ch);
					curl_close($ch);
					$profile = json_decode($response, true);

					if(isset($profile['email']) && !empty($profile['email'])){
						$student_email = $profile['email'];
						$student_name = $profile['name'];
						$profile_id = $profile['id'];
						


						$user = $this->commonModel->get('student', ['email' => $student_email]);

					
						if (!empty($user)) {


							if($user['is_verified'] == 0){
								$update_res = $this->commonModel->update("student", [
									'name' => $student_name,
									'email' => $student_email,
									'password' => '',
									'status' => 'Y',
									'is_social_login' => 1,
									'is_verified' => 1,
									'social_login_type' => "google",
								], ['id' => $user['id']]);

								if($update_res){
									$this->session->set_userdata('id', $user['id']);
									$this->session->set_userdata('email', $student_email);
									$this->session->set_userdata('is_logged_in', true);
									$this->session->set_userdata('name', $student_name);
									$this->session->set_userdata('role', $user['role_id']);
									// Redirect
									return redirect(base_url());
								}else{
									$this->session->set_flashdata('error', 'Something went wrong. Please try again later. DB_ERROR_UNABLE_TO_UPDATE');
									return redirect(base_url() . "login");
								}

							}else if($user['status'] == "N"){
								$this->session->set_flashdata('error', 'Your account is not active');
								return redirect(base_url() . "login");
							}else{
								// Set user session data
								$this->session->set_userdata('id', $user['id']);
								$this->session->set_userdata('email', $user['email']);
								$this->session->set_userdata('is_logged_in', true);
								$this->session->set_userdata('name', $user['name']);
								$this->session->set_userdata('role', $user['role_id']);
								// Redirect
								return redirect(base_url() . "profile");
							}

						} else {
							
							$user_id = $this->commonModel->insert('student', [
								'name' => $student_name,
								'email' => $student_email,
							    'password' => '',
								'status' => 'Y',
								'is_social_login' => 1,
								'social_login_type' => "google",
							]);

							$this->commonModel->giveBadge($badge_type=BADGE_NEW_MEMBER, $user_id, "NEW MEMBER");

							$this->commonModel->addPoints($user_id, POINTS_ON_REGISTER, "NEW MEMBER");

							$user = $this->commonModel->get('student', ['id' => $user_id]);

							if(empty($user)){
								$this->session->set_flashdata('error', 'Something Went Wrong. Please try again. DB_ERROR_ENTRY_NOT_INSERT');
								return redirect(base_url() . "login");
							}



							$this->session->set_userdata('id', $user['id']);
							$this->session->set_userdata('email', $user['email']);
							$this->session->set_userdata('is_logged_in', true);
							$this->session->set_userdata('name', $user['name']);
							$this->session->set_userdata('role', 0);
							// Redirect
							return redirect(base_url());

						}
					}else{
						$this->session->set_flashdata('error', "Could Not retrieve profile information! Please try again later!");
						return redirect(base_url() . "login");
					}
					
				
				}else{
					$this->session->set_flashdata('error', "Could Not retrieve Access Token! Please try again later!");
					return redirect(base_url() . "login");
				}
			}else{
				$params = [
					'response_type' => 'code',
					'client_id' => $this->config->item('GOOGLE_CLIENT_ID'),
					'redirect_uri' => $this->config->item('GOOGLE_REDIRECT_URI'),
					'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile',
					'access_type' => 'offline',
					'prompt' => 'consent'
				];

				return redirect('https://accounts.google.com/o/oauth2/auth?' . http_build_query($params));
				
			}
		}catch(Exception $e){
			
			$this->session->set_flashdata('error', $e->getMessage() . " Please try again later!");
			return redirect(base_url() . "login");
		}
	}



	public function forget_password(){
		$this->redirectIfLogin();
		$data['title'] = "Forget Password";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
        ];
        $data['content'] = 'auth/forget-password';

        $this->load->view('layouts/auth/main', $data);
	}

	public function forget_password_post(){

		$this->form_validation->set_rules('email', 'Email', 'required|trim');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			return redirect(base_url() . "forget-password");
		}

		$email = $this->input->post('email');

		$user = $this->commonModel->get('student', ['email' => $email]);

		if ($user && $user['is_social_login'] == 0) {
			$token = uniqid();
			$this->commonModel->update('student', [ 'token' => $token, 'token_at' => date('Y-m-d H:i:s') ], ['id' => $user['id']]);
			$this->send_forg_email($user, $token);
		}


		$this->session->set_flashdata('success', 'If your account is registered, a password reset email has been sent.');
        return redirect(base_url() . "forget-password");
		
	}


	public function send_forg_email($user, $token){
		$message = $this->load->view('email/forget-password.php', array('name' => $user['name'], 'token' => $token), TRUE);
		$subject = "Forget Password";
		$response = $this->commonModel->sent_email($message, $subject, $user['email']);
		// Handle the email sending response and return the appropriate status and message
		if(!empty($response)){
			if($response['status']){
				
				return ['status' => true, 'message' => 'Email Sent. Please check your inbox', 'error' => ""];
				
			  
			}else{
			  return ['status' => false, 'message' => $response['message'], 'error' => "Email NOT SENT"];
			}
		}else{
		  return ['status' => false, 'message' => "Something Went Wrong. Please try again later", 'error' => 'ERR_IN_EMAIL'];
		}
	}



	public function reset_password($token){
		$this->redirectIfLogin();
		$user = $this->commonModel->get('student', ['token' => $token]);
		if (empty($user)) {
			$this->session->set_flashdata('error', 'Invalid Token. Please try again.');
			return redirect(base_url() . "forget-password");
		}

		$token_at = new DateTime($user['token_at']);
		$current_time = new DateTime();
		$interval = $current_time->diff($token_at);
	
		if ($interval->h >= 1 || $interval->days > 0) {
			$this->session->set_flashdata('error', 'This reset password link has expired.');
			return redirect(base_url() . "forget-password");
		}

		$data['title'] = "Reset Password";
        $data['meta_tags'] = [
        ];
        $data['styles'] = [
        ];
        $data['scripts'] = [
        ];
        $data['content'] = 'auth/reset-password';
		$data['token'] = $token;
		$this->load->view('layouts/auth/main', $data);
	}

	public function reset_password_post($token){

		$this->redirectIfLogin();

		$user = $this->commonModel->get('student', ['token' => $token]);

		if (empty($user)) {
			$this->session->set_flashdata('error', 'Invalid Token. Please try again.');
			return redirect(base_url() . "forget-password");
		}

		if($user['is_social_login'] != 0){
			$this->session->set_flashdata('error', 'You have registered with Social media login');
			return redirect(base_url() . "forget-password");
		}

		$token_at = new DateTime($user['token_at']);
		$current_time = new DateTime();
		$interval = $current_time->diff($token_at);
	
		if ($interval->h >= 1 || $interval->days > 0) {
			$this->session->set_flashdata('error', 'This reset password link has expired.');
			return redirect(base_url() . "forget-password");
		}
		
		// Validation rules
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|trim|matches[password]');
	
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', validation_errors());
			return redirect(base_url() . "reset-password/" . $token);
		}
	
		$password = $this->input->post('password');
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	
		// Update the user's password and clear the token
		$this->commonModel->update('users', [ 'password' => $hashed_password, 'token' => null], ['id' => $user['id']]);
	
		$this->session->set_flashdata('success', 'Password has been reset successfully.');
		return redirect(base_url() . "login");
		
	}



	public function logout(){
		
		$this->session->sess_destroy();
		// Redirect to the login page
		return redirect(base_url());
	}

}
