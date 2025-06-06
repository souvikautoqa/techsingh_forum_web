<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Post Details</title>
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
	<link rel="stylesheet" href="assets/css/external.css">

	<link rel="stylesheet" href="assets/css/responsive.css">
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


		<!-- ==============================================
		 Navbar
		=============================================== -->
		<?php include 'header.php' ?>

		<!-- ==============================================
		 Main
		=============================================== -->


		<section class="vine-social">
			<div class="container-fluid">
				<div class="row my-5">

					<div class="col-lg-3 pe-lg-3 pt-2">

						<div class="vine-categories mb-4 pb-3">



							<?php include 'sidebar.php' ?>

						</div><!--/Vine-categories-->

						


					</div>

					<!--/col-lg-3-->

					<div class="col-lg-6">

						<div class="discussions">

							<div class="post-box d-flex" data-aos="fade-up" data-aos-easing="linear">
								<div class="card">
									<div class="card-header card-header-action">
										<div class="media align-items-center">
											<div class="media-head me-2">
												<div class="avatar">
													<a href="#"><img src="assets/img/avatar/17.jpg" alt="user"
															class="avatar-img rounded-circle"></a>
												</div>
											</div>
											<div class="media-body">
												<div><a href="#">Oliver Carpenter</a> <i
														class="bi bi-patch-check-fill text-red"></i></div>
												<div class="fs-7"><span> 01 hrs ago in </span> <a href="#"
														class="cat">AI</a></div>
											</div>
										</div>
										<div class="card-action-wrap">
											<a class="dropdown-toggle" href="#" data-bs-toggle="dropdown"><i
													class="bi bi-three-dots-vertical"></i></a>
											<div class="dropdown-menu dropdown-menu-end">
												<a class="dropdown-item" href="#"><i class="bi bi-pencil me-2"></i> Edit
													Post</a>
												<a class="dropdown-item" href="#"><i class="bi bi-eye-slash me-2"></i>
													Hide Post</a>
												<a class="dropdown-item" href="#"><i class="bi bi-trash3 me-2"></i>
													Delete Post</a>
												<div class="dropdown-divider"></div>
												<a class="dropdown-item" href="#"><i class="bi bi-pin me-2"></i> Pin
													Post</a>
											</div>
										</div>
									</div>
									<div class="card-body">
										<h3>
											<a href="#">Do you think BARD will overtake ChatGPT?</a>
										</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et facilis, soluta
											vitae porro, praesentium deserunt explicabo optio laborum
										</p>

										<div class="row g-1 my-2">
											<div class="col-6"><a href="#" data-gallery="gallery-posts-0">
													<img class="rounded h-100 w-100" src="assets/img/social/1.jpg"
														alt="..."></a></div>
											<div class="col-6"><a href="#" data-gallery="gallery-posts-0">
													<img class="rounded h-100 w-100" src="assets/img/social/2.jpg"
														alt="..."></a></div>
										</div>


										<div class="post-links d-flex mt-4 ms-2">
											<a href="#" class="p-0 me-3">
												<span class="bi bi-heart me-1"></span> 470 Likes
											</a>
											<a href="#" class="p-0 me-3">
												<span class="bi bi-chat-dots me-1"></span> 76 Comments
											</a>
											<a href="#" class="p-0 me-2">
												<span class="bi bi-share me-1"></span> 18 shares
											</a>
										</div><!--/post links-->

									</div>

									<div class="d-flex align-items-center my-2 mx-3">
										<div class="avatar avatar-sm me-2"><img class="rounded-circle"
												src="assets/img/avatar/1.jpg" alt="alt"></div>
										<div class="flex-1"><input class="w-100" type="text" placeholder="Add comment">
										</div>
									</div>

									<h5 class="my-4 mx-3">Comments (140)</h5>

									<div class="comments-5 px-3">
										<div class="d-flex align-items-start mb-3" data-aos="fade-up"
											data-aos-easing="linear">
											<div class="avatar avatar-sm status-online me-2"><img class="rounded-circle"
													src="assets/img/avatar/2.jpg" alt="User"></div>
											<div class="flex-1">
												<div class="align-items-center"><a class="fw-bold mb-0"
														href="javascript:void(0)">Adaline Riley</a></div>
												<p class="mb-0">Quisque iaculis orci pulvinar lectus eleifend
													sollicitudin. Donec suscipit laoreet enim.
													Duis ullamcorper ipsum sed arcu tincidunt pulvinar. Mauris vel
													tortor eget ex dictum aliquam.</p>
												<div class="post-links d-flex mt-1">
													<a href="#" class="p-0 me-3"><span class="bi bi-heart me-1"></span>
														Like</a>
													<a href="#" class="p-0 me-3"><span
															class="bi bi-reply-all me-1"></span> Reply</a>
													<p class="p-0 me-2"><span class="b bi-clock-history me-1"></span> 35
														mins ago </p>
												</div><!--/post links-->

												<div class="d-flex align-items-start my-3" data-aos="fade-up"
													data-aos-easing="linear">
													<div class="avatar avatar-sm me-2"><img class="rounded-circle"
															src="assets/img/avatar/3.jpg" alt="User"></div>
													<div class="flex-1">
														<div class="align-items-center"><a class="fw-bold mb-0"
																href="javascript:void(0)">Buster Jayden</a></div>
														<p class="mb-0">Pellentesque quis ultrices mauris, in pretium
															odio. Praesent placerat, magna id tristique tempus, tortor
															est fermentum lorem,
															a pretium massa dui nec nunc. Praesent odio lacus, aliquam
															vel porta non, vestibulum vel risus.</p>
														<div class="post-links d-flex mt-1">
															<a href="#" class="p-0 me-3"><span
																	class="bi bi-heart me-1"></span> Like</a>
															<a href="#" class="p-0 me-3"><span
																	class="bi bi-reply-all me-1"></span> Reply</a>
															<p class="p-0 me-2"><span class="b bi-clock me-1"></span> 5
																mins ago </p>
														</div><!--/post links-->
													</div>
												</div><!--/user-comment-->

												<div class="d-flex align-items-start my-3" data-aos="fade-up"
													data-aos-easing="linear">
													<div class="avatar avatar-sm me-2"><img class="rounded-circle"
															src="assets/img/avatar/4.jpg" alt="User"></div>
													<div class="flex-1">
														<div class="align-items-center"><a class="fw-bold mb-0"
																href="javascript:void(0)">Louisa Triston</a></div>
														<p class="mb-0">Pellentesque quis ultrices mauris, in pretium
															odio. Praesent placerat, magna id tristique tempus, tortor
															est fermentum lorem,
															a pretium massa dui nec nunc. Praesent odio lacus, aliquam
															vel porta non, vestibulum vel risus.</p>
														<div class="post-links d-flex mt-1">
															<a href="#" class="p-0 me-3"><span
																	class="bi bi-heart me-1"></span> Like</a>
															<a href="#" class="p-0 me-3"><span
																	class="bi bi-reply-all me-1"></span> Reply</a>
															<p class="p-0 me-2"><span class="b bi-clock me-1"></span> 5
																mins ago </p>
														</div><!--/post links-->
													</div>
												</div><!--/user-comment-->

											</div>
										</div><!--/user-comment-->
										<div class="d-flex align-items-start mb-3" data-aos="fade-up"
											data-aos-easing="linear">
											<div class="avatar avatar-sm status-online me-2"><img class="rounded-circle"
													src="assets/img/avatar/5.jpg" alt="User"></div>
											<div class="flex-1">
												<div class="align-items-center"><a class="fw-bold mb-0"
														href="javascript:void(0)">Damon Tucker</a></div>
												<p class="mb-0">Quisque iaculis orci pulvinar lectus eleifend
													sollicitudin. Donec suscipit laoreet enim.
													Duis ullamcorper ipsum sed arcu tincidunt pulvinar. Mauris vel
													tortor eget ex dictum aliquam.
													Pellentesque quis ultrices mauris, in pretium odio. Praesent
													placerat, magna id tristique tempus, tortor est fermentum lorem,
													a pretium massa dui nec nunc. Praesent odio lacus, aliquam vel porta
													non, vestibulum vel risus. </p>
												<div class="post-links d-flex mt-1">
													<a href="#" class="p-0 me-3"><span class="bi bi-heart me-1"></span>
														Like</a>
													<a href="#" class="p-0 me-3"><span
															class="bi bi-reply-all me-1"></span> Reply</a>
													<p class="p-0 me-2"><span class="b bi-clock-history me-1"></span> 35
														mins ago </p>
												</div><!--/post links-->

											</div>
										</div><!--/user-comment-->
										<div class="d-flex align-items-start mb-3" data-aos="fade-up"
											data-aos-easing="linear">
											<div class="avatar avatar-sm me-2"><img class="rounded-circle"
													src="assets/img/avatar/6.jpg" alt="User"></div>
											<div class="flex-1">
												<div class="align-items-center"><a class="fw-bold mb-0"
														href="javascript:void(0)">Charlene Cross</a></div>
												<p class="mb-0">Quisque iaculis orci pulvinar lectus eleifend
													sollicitudin. Donec suscipit laoreet enim.
													Duis ullamcorper ipsum sed arcu tincidunt pulvinar. Mauris vel
													tortor eget ex dictum aliquam.</p>
												<div class="post-links d-flex mt-1">
													<a href="#" class="p-0 me-3"><span class="bi bi-heart me-1"></span>
														Like</a>
													<a href="#" class="p-0 me-3"><span
															class="bi bi-reply-all me-1"></span> Reply</a>
													<p class="p-0 me-2"><span class="b bi-clock-history me-1"></span> 35
														mins ago </p>
												</div><!--/post links-->

												<div class="d-flex align-items-start my-3" data-aos="fade-up"
													data-aos-easing="linear">
													<div class="avatar avatar-sm me-2"><img class="rounded-circle"
															src="assets/img/avatar/7.jpg" alt="User"></div>
													<div class="flex-1">
														<div class="align-items-center"><a class="fw-bold mb-0"
																href="javascript:void(0)">Rafael Frank</a></div>
														<p class="mb-0">Pellentesque quis ultrices mauris, in pretium
															odio. Praesent placerat, magna id tristique tempus, tortor
															est fermentum lorem,
															a pretium massa dui nec nunc. Praesent odio lacus, aliquam
															vel porta non, vestibulum vel risus.</p>
														<div class="post-links d-flex mt-1">
															<a href="#" class="p-0 me-3"><span
																	class="bi bi-heart me-1"></span> Like</a>
															<a href="#" class="p-0 me-3"><span
																	class="bi bi-reply-all me-1"></span> Reply</a>
															<p class="p-0 me-2"><span class="b bi-clock me-1"></span> 5
																mins ago </p>
														</div><!--/post links-->
													</div>
												</div><!--/user-comment-->

											</div>
										</div><!--/user-comment-->
									</div>

								</div>
							</div><!--/post-box-->


						</div>

					</div>

					<div class="col-lg-3 pe-lg-3">

						<div class="vine-categories mb-4 pb-3">

							<ul class="navbar-nav flex-column">

								<?php include "right-sidebar.php" ?>


							</ul>
						</div><!--/row-->
					</div><!--/container-->
				</div>
			</div>
		</section>

		<!-- ==============================================
		 Footer
		=============================================== -->
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

<!-- Mirrored from www.apexcodestudios.com/Templates/ApexForum/discussion-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 17 Dec 2024 09:52:11 GMT -->

</html>
