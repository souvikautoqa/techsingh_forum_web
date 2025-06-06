<style>
        .password-container {
            position: relative;
            width: 100%;
        }
        .password-container input {
            width: 100%;
            padding-right: 40px; /* Space for the icon */
            padding: px;
            font-size: 16px;
            border: 1px solid #ccc;
           
        }
        .toggle-password {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%, -50%);
            cursor: pointer;
            font-size: 18px;
            color: #666;
      }
</style>


		<!-- ==============================================
			Main
		=============================================== -->
		<div class="login p-3 p-xxl-5">
			<div class="shape">
				<svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" width="100%" height="140px" viewBox="20 -20 300 100" xml:space="preserve">
					<path d="M30.913 43.944s42.911-34.464 87.51-14.191c77.31 35.14 113.304-1.952 146.638-4.729 48.654-4.056 69.94 16.218 69.94 16.218v54.396H30.913V43.944z" class="vine-svg fill" opacity=".4"></path>
					<path d="M-35.667 44.628s42.91-34.463 87.51-14.191c77.31 35.141 113.304-1.952 146.639-4.729 48.653-4.055 69.939 16.218 69.939 16.218v54.396H-35.667V44.628z" class="vine-svg fill" opacity=".4"></path>
					<path d="M-34.667 62.998s56-45.667 120.316-27.839C167.484 57.842 197 41.332 232.286 30.428c53.07-16.399 104.047 36.903 104.047 36.903l1.333 36.667-372-2.954-.333-38.046z" class="vine-svg fill"></path>
				</svg>
			</div>
		</div>

		<div class="vine-login">   
			<div class="container">

                <div class="row gy-5 justify-content-center">
                    <div class="col-md-6 col-lg-6 col-xxl-6">
                        <div class="card" data-aos="fade-up" data-aos-easing="linear">
                            <div class="card-body p-4 p-xl-5">
                                <div class="login-header">
                                    <img src="<?=base_url()?>assets/img/logo.png" alt="Logo">
                                    <p class="small mb-4">Sign in to your account to continue.</p>
                                </div>

								<?php 
									$this->load->view('layouts/show-message');
								?>

                                <form method = "POST" action = "<?=base_url()?>login/post">
                                    <div class="pb-3">
                                        <label class="form-label rd-input-label focus not-empty">Email address</label> 
                                        <input type="email" id = "email"  name="email" placeholder="name@example.com"></div>
                                    <div class="pb-3 password-container">
                                        <label class="form-label rd-input-label focus not-empty">Password</label> 
                                        <input type="password" id = "password" name="password" placeholder="***********">
                                        <i class="fas fa-eye-slash toggle-password" id="togglePassword"></i>
                                    </div>
                                    <div class="mb-4 d-flex justify-content-end">
                                        <!-- <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div> -->
                                        <div class="text-primary-hover">
                                            <a href="<?=base_url()?>forget-password" class="text-secondary">
                                                <u>Forgot password?</u>
                                            </a>
                                        </div>
                                    </div>   
									<!-- Google reCAPTCHA (using test site key) -->
    								<div class="g-recaptcha mb-4 w-100" data-sitekey="<?= GOOGLE_SITE_KEY ?>"></div> 
                                    <div class="pb-3"><button type = "submit" id = "submit-btn" class="w-100 btn btn-mint">Log In</button></div>
                                    <div class="text-center"><small>Not registered?</small> <a href="<?=base_url()?>register" class="small font-weight-bold">Create account</a></div>
                                </form>

                                <div class="row">
                                    <!-- Divider with text -->
                                    <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
                                    </div>
    
                                    <!-- Social btn -->
                                    <div class="col-xxl-12 d-grid">
                                        <a href="<?=base_url()?>google-login" class="btn bg-google mb-2 mb-xxl-0"><i class="bi bi-google text-white me-2"></i>Login with Google</a>
                                    </div>
                                  

                                </div>


                            </div>
                        </div>
                    </div>
                </div>

			</div>
		</div>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        let passwordInput = document.getElementById("password");
        let toggleIcon = document.getElementById("togglePassword");

        
        passwordInput.type = "password";
        toggleIcon.classList.add("fa-eye-slash"); 

        toggleIcon.addEventListener("click", function () {
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                this.classList.remove("fa-eye-slash");
                this.classList.add("fa-eye"); 
            } else {
                passwordInput.type = "password";
                this.classList.remove("fa-eye");
                this.classList.add("fa-eye-slash"); 
            }
        });
    });
</script>