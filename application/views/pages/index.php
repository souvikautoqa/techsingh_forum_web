<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ApexForum - Ultimate Forum & Community Discussions HTML Template</title>
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
		 Hero
		=============================================== -->
		<section class="vine-hero-2 bg-img-1">
			<div class="container">
				<div class="row">


					<div class="col-lg-12">
						<div class="hero-content" data-aos="fade-down" data-aos-easing="linear">


							<h1>Ask Questions, Get Answers</h1>


							<p>Ask questions, find support, and connect with the community.</p>


							<div class="vine-join">
								<a href="#" class="btn btn-md btn-mint rounded-pill">Create an Account</a>
								<ul class="ms-3">
									<li><a href="#"><img src="assets/img/avatar/6.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="assets/img/avatar/7.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="assets/img/avatar/8.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="assets/img/avatar/9.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="assets/img/avatar/10.jpg" class="avatar-sm"
												alt="image"></a></li>
									<li><a href="#"><img src="assets/img/avatar/11.jpg" class="avatar-sm"
												alt="image"></a></li>
								</ul>
								<p>Join Over 3000+ Users.</p>
							</div>

						</div>
					</div>


				</div>
			</div>
		</section>
		<!-- ==============================================
		 Main
		=============================================== -->


		<section class="vine-main">
			<div class="container-fluid">
				<div class="row p-2">
					<div class="col-lg-3  ">

						<?php include 'sidebar.php' ?>

					</div><!--/col-lg-3-->


					<div class="col-lg-6  ">

						<div class="filter mb-5">
							<form class="form">
								<div class="filter-toolbar">
									<div class="filter-item" id="category">
										<label>Category</label>
										<a class="filter-item-content dropdown-toggle" href="#"
											data-bs-toggle="dropdown">
											<span class="filter-value">All </span>
											<span class="dropdown-btn"></span>
										</a>
										<ul class="dropdown-menu dropdown-2x">
											<li class="selected">All </li>
											<li>Community </li>
											<li>Design </li>
											<li>AI </li>
											<li>Crypto & NFT </li>
											<li>Growth Hacking </li>
											<li>Products </li>
											<li>Feedback </li>
											<li>Ideas & Validation </li>
											<li>Marketing & SEO </li>
											<li>SAAS </li>
											<li>Developers </li>
											<li>No Code </li>
											<li>Remote Working </li>
											<li>Side Project </li>
											<li>Maker Mindset </li>
											<li>Recommendations</li>
											<li>Partner Up </li>
										</ul>
									</div>
									<div class="filter-item" id="type">
										<label>Time</label>
										<a class="filter-item-content dropdown-toggle" href="#"
											data-bs-toggle="dropdown">
											<span class="filter-value">All </span>
											<span class="dropdown-btn"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="selected">All </li>
											<li>Now </li>
											<li>Week </li>
											<li>Month </li>
											<li>Year </li>
										</ul>
									</div>
									<div class="filter-item" id="sorting">
										<label>Sorting</label>
										<a class="filter-item-content dropdown-toggle" href="#"
											data-bs-toggle="dropdown">
											<span class="filter-value">Upvotes </span>
											<span class="dropdown-btn"></span>
										</a>
										<ul class="dropdown-menu">
											<li class="selected">Upvotes </li>
											<li>Popular </li>
											<li>Pinned </li>
											<li>Comments </li>
										</ul>
									</div>
									<!-- Nav Search START -->
									<div class="w-100 mt-3 mb-3">
										<div class="nav px-4 flex-nowrap align-items-center">
											<div class="search-form nav-item w-100">
												<input class="border-0" type="search" placeholder="Search"
													aria-label="Search">
											</div>
										</div>
									</div>
									<!-- Nav Search END -->
									<button type="submit" class="btn btn-md btn-mint">Apply</button>
								</div>
							</form>
						</div><!--/filter-->

						<div class="questions">

							<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
								<div class="qa-avatar">
									<a href="#"><img src="assets/img/avatar/1.jpg" alt="User"></a>
								</div>
								<div class="qa-holder ">

									<!-- <div class="qa-badge"> <i class="bi bi-check2-circle"></i> Solved</div> -->

									<div class="qa-content mb-">
										<h1><a href="#">Do you think BARD will overtake ChatGPT?</a></h1>
										<div class="d-flex align-items-center flex-wrap mb-">
											<span class="qa-name"><a href="#"> Abram Marvyn</a></span>
											<span class="qa-category">in <a href="#">AI</a></span>
											<span class="qa-text"><i class="bi bi-clock-history"></i> 1 hr ago</span>
										</div>




									</div>

									<div class="qa-stats">
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-heart"></i></div>
												<div class="qa-text">875</div>
												<div class="qa-text">Likes</div>
											</a>
										</div>
										<div class="qa-item">
											<ul>

												<li>
													<i class="bi bi-eye"></i>
												</li>
												<!-- <li>
												<a href="#"><img src="assets/img/avatar/9.jpg" alt=""></a>
											 </li>
											 <li>
												<a href="#"><img src="assets/img/avatar/10.jpg" alt=""></a>
											 </li> -->
											</ul>
											<div class="qa-text">+215</div>
											<div class="qa-text">Views</div>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
												<div class="qa-text">859</div>
												<div class="qa-text">Comments</div>
											</a>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-share"></i></div>
												<div class="qa-text">54</div>
												<div class="qa-text">Shares</div>
											</a>
										</div>
									</div>
								</div>
							</div><!--/qa-box-->

							<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
								<div class="qa-avatar">
									<a href="#"><img src="assets/img/avatar/2.jpg" alt="User"></a>
								</div>
								<div class="qa-holder ">


									<div class="qa-content mb-">
										<h1><a href="#">What is your favorite AI project you found recently?</a></h1>
										<div class="d-flex align-items-center flex-wrap mb-">
											<span class="qa-name"><a href="#"> Adaline Riley</a></span>
											<span class="qa-category">in <a href="#">AI</a></span>
											<span class="qa-text"><i class="bi bi-clock-history"></i> 2 hr ago</span>
										</div>


										<!-- <div class="tags mt-2">
										  <a href="#" class="tag-link">Feedback</a>
										  <a href="#" class="tag-link">AI</a>
										  <a href="#" class="tag-link">Products</a>
										  <a href="#" class="tag-link">Future</a>
									  </div> -->

									</div>

									<div class="qa-stats">
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-heart"></i></div>
												<div class="qa-text">875</div>
												<div class="qa-text">Likes</div>
											</a>
										</div>
										<div class="qa-item">
											<ul>

												<li>
													<i class="bi bi-eye"></i>
												</li>

											</ul>
											<div class="qa-text">+215</div>
											<div class="qa-text">Views</div>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
												<div class="qa-text">859</div>
												<div class="qa-text">Comments</div>
											</a>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-share"></i></div>
												<div class="qa-text">54</div>
												<div class="qa-text">Shares</div>
											</a>
										</div>
									</div>
								</div>
							</div><!--/qa-box-->

							<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
								<div class="qa-avatar">
									<a href="#"><img src="assets/img/avatar/3.jpg" alt="User"></a>
								</div>
								<div class="qa-holder">

									<div class="qa-content mb-">
										<h1><a href="#">Who all are launching their Products this week?</a></h1>
										<div class="d-flex align-items-center flex-wrap mb-">
											<span class="qa-name"><a href="#"> Buster Jayden</a></span>
											<span class="qa-category">in <a href="#">Products</a></span>
											<span class="qa-text"><i class="bi bi-clock-history"></i> 3 hr ago</span>
										</div>


									</div>

									<div class="qa-stats">
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-heart"></i></div>
												<div class="qa-text">875</div>
												<div class="qa-text">Likes</div>
											</a>
										</div>
										<div class="qa-item">
											<ul>

												<li>
													<div class="qa-icon"><i class="bi bi-eye"></i></div>
												</li>

											</ul>
											<div class="qa-text">+215</div>
											<div class="qa-text">Views</div>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
												<div class="qa-text">859</div>
												<div class="qa-text">Comments</div>
											</a>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-share"></i></div>
												<div class="qa-text">54</div>
												<div class="qa-text">Shares</div>
											</a>
										</div>
									</div>
								</div>
							</div><!--/qa-box-->

							<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
								<div class="qa-avatar">
									<a href="#"><img src="assets/img/avatar/4.jpg" alt="User"></a>
								</div>
								<div class="qa-holder">

									<div class="qa-content mb-">
										<h1><a href="#">I'm Loisa, Manager at ApexCodeStudios, Ask me anything!</a></h1>
										<div class="d-flex align-items-center flex-wrap mb-">
											<span class="qa-name"><a href="#"> Louisa Triston</a></span>
											<span class="qa-category">in <a href="#">Ideas and Validation</a></span>
											<span class="qa-text"><i class="bi bi-clock-history"></i> 2 hr ago</span>
										</div>


									</div>

									<div class="qa-stats">
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-heart"></i></div>
												<div class="qa-text">875</div>
												<div class="qa-text">Likes</div>
											</a>
										</div>
										<div class="qa-item">
											<ul>

												<li>
													<div class="qa-icon"><i class="bi bi-eye"></i></div>
												</li>

											</ul>
											<div class="qa-text">+215</div>
											<div class="qa-text">Views</div>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
												<div class="qa-text">859</div>
												<div class="qa-text">Comments</div>
											</a>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-share"></i></div>
												<div class="qa-text">54</div>
												<div class="qa-text">Shares</div>
											</a>
										</div>
									</div>
								</div>
							</div><!--/qa-box-->



							<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
								<div class="qa-avatar">
									<a href="#"><img src="assets/img/avatar/6.jpg" alt="User"></a>
								</div>
								<div class="qa-holder">

									<div class="qa-content mb-">
										<h1><a href="#">Entrepreneur Vs Employee, What would you choose and why?</a>
										</h1>
										<div class="d-flex align-items-center flex-wrap mb-">
											<span class="qa-name"><a href="#"> Charlene Cross</a></span>
											<span class="qa-category">in <a href="#">Feedback</a></span>
											<span class="qa-text"><i class="bi bi-clock-history"></i> 9 hr ago</span>
										</div>



									</div>

									<div class="qa-stats">
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-heart"></i></div>
												<div class="qa-text">875</div>
												<div class="qa-text">Likes</div>
											</a>
										</div>
										<div class="qa-item">
											<ul>

												<li>
													<div class="qa-icon"><i class="bi bi-eye"></i></div>
												</li>

											</ul>
											<div class="qa-text">+215</div>
											<div class="qa-text">Views</div>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
												<div class="qa-text">859</div>
												<div class="qa-text">Comments</div>
											</a>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-share"></i></div>
												<div class="qa-text">54</div>
												<div class="qa-text">Shares</div>
											</a>
										</div>
									</div>
								</div>
							</div><!--/qa-box-->

							<div class="qa-box" data-aos="fade-up" data-aos-easing="linear">
								<div class="qa-avatar">
									<a href="#"><img src="assets/img/avatar/7.jpg" alt="User"></a>
								</div>
								<div class="qa-holder">

									<div class="qa-content mb-">
										<h1><a href="#">What was the biggest risk you took in your startup?</a></h1>
										<div class="d-flex align-items-center flex-wrap mb-">
											<span class="qa-name"><a href="#"> Rafael Frank</a></span>
											<span class="qa-category">in <a href="#">Feedback</a></span>
											<span class="qa-text"><i class="bi bi-clock-history"></i> 10 hr ago</span>
										</div>



									</div>

									<div class="qa-stats">
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-heart"></i></div>
												<div class="qa-text">875</div>
												<div class="qa-text">Likes</div>
											</a>
										</div>
										<div class="qa-item">
											<ul>

												<li>
													<div class="qa-icon"><i class="bi bi-eye"></i></div>
												</li>

											</ul>
											<div class="qa-text">+215</div>
											<div class="qa-text">Views</div>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-chat-dots"></i></div>
												<div class="qa-text">859</div>
												<div class="qa-text">Comments</div>
											</a>
										</div>
										<div class="qa-item">
											<a href="#">
												<div class="qa-icon"><i class="bi bi-share"></i></div>
												<div class="qa-text">54</div>
												<div class="qa-text">Shares</div>
											</a>
										</div>
									</div>
								</div>
							</div><!--/qa-box-->

						</div><!--/questions-->

						<div class="pagination ps-lg-5" data-aos="fade-up" data-aos-easing="linear">

							<a href="#" class="page-numbers btn-start">
								<i class="b bi-chevron-double-left"></i>
							</a>

							<a href="#" class="page-numbers btn--prev">
								<i class="bi bi-chevron-left"></i>
							</a>
							<span class="page-numbers pagination-space"> <i class="bi bi-three-dots"></i> </span>
							<a href="#" class="page-numbers current"><span>1</span></a>
							<a href="#" class="page-numbers"><span>2</span></a>
							<a href="#" class="page-numbers"><span>3</span></a>
							<a href="#" class="page-numbers"><span>4</span></a>
							<a href="#" class="page-numbers"><span>5</span></a>
							<a href="#" class="page-numbers"><span>6</span></a>

							<span class="page-numbers pagination-space"> <i class="bi bi-three-dots"></i></span>
							<a href="#" class="page-numbers btn--next">
								<i class="bi bi-chevron-right"></i>
							</a>

							<a href="#" class="page-numbers btn-end">
								<i class="bi bi-chevron-double-right"></i>
							</a>

							<span class="page-numbers all-pages">
								70 Pages
							</span>

						</div><!--/pagination-->

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