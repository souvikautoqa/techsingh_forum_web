<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Topic</title>
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

	<script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>

	<style>
		.main-search {

			display: flex;
			justify-content: center;
			align-items: center;
			height: 40vh;
			margin: 0;
		}

		.searchtopic-container {
			display: flex;
			align-items: center;
			background-color: ;
			padding: 20px;
			border-radius: 5px;
			flex-wrap: wrap;
		}

		.searchtopic-container select {
			padding: 10px;
			font-size: 16px;
			border: 2px solid #333;
			border-radius: 3px;
			margin-right: 10px;
			width: 300px;
			max-height: 100px;
			overflow-y: auto;
		}

		.searchtopic-container button {
			background: #0d7751;
			border: 2px solid #fff;
			color: white;
			padding: 7px 20px;
			font-size: 16px;
			border-radius: 5px;
			cursor: pointer;
			margin-top: 0px;
		}

		.searchtopic-container button:hover {
			background: rgb(10, 88, 59);
		}

		@media (max-width: 600px) {
			.searchtopic-container {
				flex-direction: column;
				align-items: stretch;
				width: 90%;

			}

			.searchtopic-container select {
				margin-right: 0;
				margin-bottom: 10px;
				width: 100%;
			}

			.searchtopic-container button {
				width: 100%;
			}
		}
	</style>


</head>

<body>


	<!-- Switcher Icon -->
	<div class="" id="theme-switcher">
		<i id="switcher-icon" class="bi bi-moon"></i>
	</div>

	<!-- Back to Top -->
	<a href="#" id="back-to-top"></a>

	<div class="vine-wrapper">

		<?php include 'header.php' ?>


		<!-- ==============================================
		 Main
		=============================================== -->




		<section class="vine-main pt-5">
			<div class="container-fluid">
				<div class="row p-3">
					<div class="col-lg-3 pe-lg-3 pt-3">

						<div class="vine-categories mb-4 pb-3">



							<?php include 'sidebar.php' ?>

						</div><!--/Vine-categories-->

						


					</div>

					<!--/col-lg-3-->
					<div class="col-lg-6 ps-lg-4 ">

						<div class="events-container">

							<div class="main-search">



								<div class="searchtopic-container">
									<select id="topic">
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>
										<option value="">Search a topic</option>



										<!-- Add other options as needed -->
									</select>
									<button type="button">SUBMIT</button>
								</div>
							</div>
						</div>


					</div><!--/col-lg-9-->

					<div class="col-lg-3 pe-lg-3">

						<div class="vine-categories mb-4 pb-3">

							<ul class="navbar-nav flex-column">

								<?php include "right-sidebar.php" ?>




							</ul>

						</div><!--/Vine-categories-->







						<div class="ad-section my-5" data-aos="fade-right" data-aos-easing="linear">


						</div><!--/ad-sec-->
					</div><!--/ad-section-->


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
		const leftArrow = document.querySelector('.left-arrow');
		const rightArrow = document.querySelector('.right-arrow');
		const events = document.querySelector('.events');

		leftArrow.addEventListener('click', () => {
			events.scrollBy({ left: -200, behavior: 'smooth' });
		});

		rightArrow.addEventListener('click', () => {
			events.scrollBy({ left: 200, behavior: 'smooth' });
		});

	</script>

	<script>
		let currentSlide = 0;

		function moveSlide(direction) {
			const carouselInner = document.querySelector('.carousel-inner');
			const totalSlides = document.querySelectorAll('.content-slide').length;
			currentSlide = (currentSlide + direction + totalSlides) % totalSlides;
			carouselInner.style.transform = `translateX(-${currentSlide * 100}%)`;
		}
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




	<script>
		// Attach CKEditor to the textarea
		CKEDITOR.replace('editor');
	</script>
</body>



</html>