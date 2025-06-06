<!DOCTYPE html>
<html lang="en" data-theme="light">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta name="description" content="Forum & Community Discussions HTML Template">
    <meta name="keywords" content="bootstrap 5, forum, community, support, social, q&a, mobile, html">
    <meta name="robots" content="all,follow">

    <script>
        //Check local storage
        let localS = localStorage.getItem('theme')
            themeToSet = localS
        
        // If local storage is not set, we check the OS preference	
        if(!localS){
            themeToSet = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
        }

        //Set the correct theme
        document.documentElement.setAttribute('data-theme', themeToSet)
    </script>

    <!-- ==============================================
     CSS Styles
    =============================================== -->	
    <link rel="stylesheet" href="assets/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">	
    <link rel="stylesheet" href="assets/vendors/simplebar/simplebar.min.css">	
    <link rel="stylesheet" href="assets/vendors/aos/aos.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/external.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    
    <!-- ==============================================
     Fonts
    =============================================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

    <!-- Switcher Icon -->
    <div class="" id="theme-switcher">
    </div>

    <!-- Back to Top -->
	<a href="#" id="back-to-top"></a>  

	<div class="vine-wrapper">

   

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
                                    <img src="assets/img/logo.png" alt="Logo">
                                    <p class="small mb-4">Sign in to your account to continue.</p>
                                </div>
                                <!-- <form>
                                    <div class="pb-3">
                                        <label class="form-label rd-input-label focus not-empty">Email address</label> 
                                        <input type="text" name="email" placeholder="name@example.com"></div>
                                    <div class="pb-3">
                                        <label class="form-label rd-input-label focus not-empty">Password</label> 
                                        <input type="text" name="password" placeholder="***********">
                                    </div>
                                    <div class="mb-4 d-flex justify-content-between">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <div class="text-primary-hover">
                                            <a href="#" class="text-secondary">
                                                <u>Forgot password?</u>
                                            </a>
                                        </div>
                                    </div>    
                                    <div class="pb-3"><button class="w-100 btn btn-mint">Log In</button></div>
                                    <div class="text-center"><small>Not registered?</small> <a href="register.html" class="small font-weight-bold">Create account</a></div>
                                </form> -->

                                <div class="row">
                                    <!-- Divider with text -->
                                    <!-- <div class="position-relative my-4">
                                        <hr>
                                        <p class="small position-absolute top-50 start-50 translate-middle bg-body px-5">Or</p>
                                    </div> -->
    
                                    <!-- Social btn -->
                                    <div class="col-xxl-12 d-grid">
                                        <a href="#" class="btn bg-google mb-2 mb-xxl-0"><i class="bi bi-google text-white me-2"></i>Login with Google</a>
                                    </div>
                                    <!-- Social btn -->
                                    <!-- <div class="col-xxl-12 d-grid">
                                        <a href="#" class="btn bg-facebook mb-0"><i class="bi bi-facebook me-2"></i>Login with Facebook</a>
                                    </div> -->
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

			</div>
		</div>

        <?php include 'footer.php' ?>

    </div><!--/vine-wrapper-->

	<!-- ==============================================
	Scripts
	=============================================== -->
	<script src="assets/vendors/jquery/jquery.min.js"></script>
	<script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
	<script src="assets/vendors/popper/popper.min.js"></script>	
	<script src="assets/vendors/simplebar/simplebar.min.js"></script>
	<script src="assets/vendors/aos/aos.js"></script>
	<script src="assets/js/main.js"></script>
    <script>
        document.addEventListener('contextmenu', event => {
            event.preventDefault();
        });
        
        document.querySelectorAll('.disabled').forEach(element => {
            element.style.pointerEvents = 'none';
        });
    </script>
</body>

</html>