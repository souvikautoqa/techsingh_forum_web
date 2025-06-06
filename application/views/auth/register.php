<style>
	label.error{
		color: red;
	}

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
                                    <p class="small mb-4">Create a new account</p>
                                </div>
                                

								<?php 
									$this->load->view('layouts/show-message');
								?>

                                <form method = "POST" id = "registerForm" action = "<?=base_url()?>register/post">

									<div id="message-container">

									</div>

									<div class="pb-3">
                                        <label class="form-label rd-input-label focus not-empty">Name</label> 
                                        <input type="text" id = "name"  name="name" placeholder="John">
									</div>

                                    <div class="pb-3">
                                        <label class="form-label rd-input-label focus not-empty">Email address</label> 
                                        <input type="email" id = "email"  name="email" placeholder="name@example.com">
									</div>
                                    <div class="pb-3 password-container">
                                        <label class="form-label rd-input-label focus not-empty">Password</label> 
                                        <input type="password" id = "password" name="password" placeholder="***********">
                                        <i class="fas fa-eye-slash toggle-password" id="togglePassword"></i>
                                    </div>

									<div class="g-recaptcha mb-4 w-100" data-sitekey="<?= GOOGLE_SITE_KEY ?>"></div> 
                                    
                                    <div class="pb-3"><button type = "submit" id = "submit-btn" class="w-100 btn btn-mint">Sign Up</button></div>
                                    
                                </form>


                                <div class="row">

									<div class="position-relative mb-2">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
                                    </div>
                                    <!-- Social btn -->
                                    <div class="col-xxl-12 d-grid">
                                        <a href="<?=base_url()?>google-login" class="btn bg-google mb-2 mb-xxl-0"><i class="bi bi-google text-white me-2"></i>Signup with Google</a>
                                    </div>
                                  

									<div class="text-center mt-2"><small>Already registered?</small> <a href="<?=base_url()?>login" class="small font-weight-bold">Login</a></div>

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