<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Main Home </title>
	<meta name="description" content="Forum & Community Discussions HTML Template">
	<meta name="keywords" content="bootstrap 5, forum, community, support, social, q&a, mobile, html">
	<meta name="robots" content="all,follow">

	<script>
		//Check local storage
		let localS = localStorage.getItem('theme')
		themeToSet = localS

		// If local storage is not set, we check the OS preference	
		if (!localS) {
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
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link rel="stylesheet" href="assets/css/external.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
		integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- ==============================================
	 Fonts
	=============================================== -->
	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Karla&amp;display=swap" rel="stylesheet">

</head>

<body>

	<!-- Switcher Icon -->

	<div class="" id="theme-switcher">

	</div>

	<!-- Back to Top -->
	<a href="#" id="back-to-top"></a>

	<div class="vine-wrapper">

		<?php include 'header.php' ?>
	
		
		<!-- ==============================================
		 Main
		=============================================== -->


		<section class="vine-main">
		
         <div class="container-fluid pt-5">
				<div class="row p-2 pt-5">
					<div class="col-lg-3">

						<?php include 'sidebar.php' ?>

					</div> <!--/col-lg-3-->
				
                <div class="col-lg-6 ">
                        

                 <div class="header-home">
                <i class="fas fa-book"></i>
                <h1 class="text-light">GMAT Questions, Tips And News</h1>
                </div>
    
                <div class="container-home">
       
                <div class="homesections">
            <h2><a href="#"> General GMAT Questions and Strategies</a></h2>
            <a href="#">Find Study Buddy</a>
            <a href="#">Study Plan</a>
            <div class="stats">
                <div>31,651 Topics</div>
                <div>194,876 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> Advise Required: Planning to quit job...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 00:21</div>
            </div>
        </div>
         <div class="homesections">
            <h2><a href="#">Quantitative Questions</a></h2>
            <a href="#">Problem Solving (PS)</a>
            <a href="#">GMAT Club Tests</a>
            <div class="stats">
                <div>44,291 Topics</div>
                <div>314,696 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> A farm has chickens, cows and sheep...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 02:29</div>
            </div>
          </div>
        <div class="homesections">
            <h2><a href="#">Verbal Questions</a></h2>
            <a href="#">Verbal Guides and Resources</a>
            <a href="#">Critical Reasoning (CR)</a>
            <a href="#">Reading Comprehension (RC)</a>
            <a href="#">Sentence Correction (EA only)</a>
            <div class="stats">
                <div>31,703 Topics</div>
                <div>323,786 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> In an experiment, capuchin monkey...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 02:00</div>
            </div>
        </div>
     </div>


    <div class="header-home">
        <i class="fas fa-graduation-cap"></i>
        <h1 class="text-light">Business School and MBA</h1>
    </div>
    <div class="container-home">
        <div class="homesections">
            <h2><a href="#"> General GMAT Questions and Strategies</a></h2>
            <a href="#">Find Study Buddy</a>
            <a href="#">Study Plan</a>
            <div class="stats">
                <div>31,651 Topics</div>
                <div>194,876 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> Advise Required: Planning to quit job...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 00:21</div>
            </div>
        </div>
        <div class="homesections">
            <h2><a href="#">Quantitative Questions</a></h2>
            <a href="#">Problem Solving (PS)</a>
            <a href="#">GMAT Club Tests</a>
            <div class="stats">
                <div>44,291 Topics</div>
                <div>314,696 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> A farm has chickens, cows and sheep...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 02:29</div>
            </div>
        </div>
        <div class="homesections">
            <h2><a href="#">Verbal Questions</a></h2>
            <a href="#">Verbal Guides and Resources</a>
            <a href="#">Critical Reasoning (CR)</a>
            <a href="#">Reading Comprehension (RC)</a>
            <a href="#">Sentence Correction (EA only)</a>
            <div class="stats">
                <div>31,703 Topics</div>
                <div>323,786 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> In an experiment, capuchin monkey...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 02:00</div>
            </div>
        </div>
    </div>


    <div class="header-home">
        <i class="fas fa-headset"></i>
        <h1 class="text-light">Support & Everything Else</h1>
    </div>
    <div class="container-home">
        <div class="homesections">
            <h2><a href="#"> General GMAT Questions and Strategies</a></h2>
            <a href="#">Find Study Buddy</a>
            <a href="#">Study Plan</a>
            <div class="stats">
                <div>31,651 Topics</div>
                <div>194,876 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> Advise Required: Planning to quit job...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 00:21</div>
            </div>
        </div>
        <div class="homesections">
            <h2><a href="#">Quantitative Questions</a></h2>
            <a href="#">Problem Solving (PS)</a>
            <a href="#">GMAT Club Tests</a>
            <div class="stats">
                <div>44,291 Topics</div>
                <div>314,696 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> A farm has chickens, cows and sheep...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 02:29</div>
            </div>
        </div>
        <div class="homesections">
            <h2><a href="#">Verbal Questions</a></h2>
            <a href="#">Verbal Guides and Resources</a>
            <a href="#">Critical Reasoning (CR)</a>
            <a href="#">Reading Comprehension (RC)</a>
            <a href="#">Sentence Correction (EA only)</a>
            <div class="stats">
                <div>31,703 Topics</div>
                <div>323,786 Posts</div>
            </div>
            <div class="latest-post">
                <a href="#"><i class="fas fa-comments"></i> In an experiment, capuchin monkey...</a>
                <div class="author"><a href=""><i class="fas fa-user"></i> by: MyNameisFritz</a></div>
                <div class="date">29 Jan 2025, 02:00</div>
            </div>
        </div>
    </div>



    <!---- top users ----------> 

    <div class="container-user">
    <div class="section-user topusers">
    <h2>
     Top Experts
    </h2>
   
    <div class="item-user">
     <img alt="Profile picture of Bunuel" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name" style="color: #f08616;">
       <a href="#">
        Bunuel
       </a>
      </div>
      <div class="role">
       Math Expert
      </div>
     </div>
     <div class="points">
      267 posts
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of bb" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        bb
       </a>
      </div>
      <div class="role">
       Founder
      </div>
     </div>
     <div class="points">
      41 posts
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of MBAandBeyond" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        MBAandBeyond
       </a>
      </div>
      <div class="role">
       MBA and Beyond Consulting
      </div>
     </div>
     <div class="points">
      29 posts
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of ScottTargetTestPrep" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        ScottTargetTestPrep
       </a>
      </div>
      <div class="role">
       Target Test Prep Representative
      </div>
     </div>
     <div class="points">
      26 posts
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of KarishmaB" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        KarishmaB
       </a>
      </div>
      <div class="role">
       Tutor
      </div>
     </div>
     <div class="points">
      25 posts
     </div>
      
      
    </div>
      
   </div>

   <div class="section-user topusers">
    <h2>
     Top Users
    </h2>
   
    <div class="item-user">
     <img alt="Profile picture of laas18" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        laas18
       </a>
      </div>
      <div class="role">
       Joined 8 months ago
      </div>
     </div>
     <div class="points">
      47 points
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of Krunaal" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name" style="color: green;">
       <a href="#">
        Krunaal
       </a>
      </div>
      <div class="role">
       Joined 3 years, 11 months ago
      </div>
     </div>
     <div class="points">
      46 points
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of ElenaFerrante" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        ElenaFerrante
       </a>
      </div>
      <div class="role">
       Joined 4 months ago
      </div>
     </div>
     <div class="points">
      43 points
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of Poompak" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        Poompak
       </a>
      </div>
      <div class="role">
       Joined 5 months ago
      </div>
     </div>
     <div class="points">
      41 points
     </div>
    </div>
    <div class="item-user">
     <img alt="Profile picture of Rohan0007" src="https://placehold.co/50x50"/>
     <div class="details">
      <div class="name">
       <a href="#">
        Rohan0007
       </a>
      </div>
      <div class="role">
       Joined 1 year ago
      </div>
     </div>
     <div class="points">
      40 points
     </div>
    </div>
    
   </div>
   <div class="section-user topusers">
    <h2>
     Best Posts
    </h2>
    
    <div class="post-user">
     <div class="title">
      <a href="#">
       GMAT Retake: 705 (Q90, V84, D
      </a>
     </div>
     <div class="author">
      by: aaryaa96
     </div>
     <div class="likes">
      11
      <i class="fas fa-thumbs-up">
      </i>
     </div>
    </div>
    <div class="post-user">
     <div class="title">
      <a href="#">
       GMAT Study Plan
      </a>
     </div>
     <div class="author">
      by: bb
     </div>
     <div class="likes">
      9
      <i class="fas fa-thumbs-up">
      </i>
     </div>
    </div>
    <div class="post-user">
     <div class="title">
      <a href="#">
       A statistician reached the foll
      </a>
     </div>
     <div class="author">
      by: chetan2u
     </div>
     <div class="likes">
      8
      <i class="fas fa-thumbs-up">
      </i>
     </div>
    </div>
    <div class="post-user">
     <div class="title">
      <a href="#">
       Bunuel's Algebra PS Diagnostic
      </a>
     </div>
     <div class="author">
      by: Bunuel
     </div>
     <div class="likes">
      7
      <i class="fas fa-thumbs-up">
      </i>
     </div>
    </div>
    <div class="post-user">
     <div class="title">
      <a href="#">
       At the beginning of 2009, equa
      </a>
     </div>
     <div class="author">
      by: Russl19
     </div>
     <div class="likes">
      7
      <i class="fas fa-thumbs-up">
      </i>
     </div>
     
    </div>
   
   </div>
  </div>

  <!---- online users ----> 

  <div class="container">
        <div class="members-stats-container">
            <div class="members-stat-box">
                <h3>Total Members</h3>
                <p>1,579,952</p>
            </div>
            <div class="members-stat-box">
                <h3>Total Users Online</h3>
                <p>4,198</p>
            </div>
            <div class="members-stat-box">
                <h3>Total Posts</h3>
                <p>2,373,596</p>
            </div>
        </div>
    </div>

	</div>


					<!--/col-lg-9-->
					
                    <div class="col-lg-3 ">

						<div class="vine-categories mb-4 pb-3">

							<ul class="navbar-nav flex-column">

								<?php include "right-sidebar.php" ?>

							</ul>

						</div>
						<!--/Vine-categories-->

					</div>
					<!--/ad-section-->


				</div><!--/col-lg-3-->
			</div>

		</section>

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



	<script>
		// Re-enable right-click
		document.addEventListener("contextmenu", function (event) {
			event.stopPropagation(); // Allow right-click menu to work
		}, true);

		// Re-enable keyboard shortcuts
		document.addEventListener("keydown", function (event) {
			event.stopPropagation(); // Allow all key events to pass through
		}, true);

	</script>
</body>


</html>