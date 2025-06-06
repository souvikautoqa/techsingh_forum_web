<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Find Study Buddy</title>
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
			<div class="container-fluid">
				<div class="row p-3">
					<div class="col-lg-3 pe-lg-2 pt-5">

						<div class="vine-categories mb-4 pb-3 pt-4">



							<?php include 'sidebar.php' ?>

						</div><!--/Vine-categories-->



					</div><!--/col-lg-3-->
					<div class="col-lg-6 ps-lg-2 pt-5">

						<div class="buddy-container">
							<div class="buddy-header">
								<span>Find Study Buddy</span>
								<button class="buddy-create-topic">Create Topic</button>
							</div>
							<div class="buddy-table-container">
								<table class="buddy-table" id="buddy-topics-table">
									<thead>
										<tr>
											<th class="col-4">Topics <i class="fas fa-sort"></i></th>
											<th class="col-2">Author <i class="fas fa-sort"></i></th>
											<th class="col-2">Kudos <i class="fas fa-sort"></i></th>
											<th class="col-2">Replies <i class="fas fa-sort"></i></th>
											<th class="col-2">Views <i class="fas fa-sort"></i></th>
											<th class="col-2">Last post <i class="fas fa-sort"></i></th>
										</tr>
									</thead>
									<tbody id="buddy-topics-body">
										<!-- Rows will be dynamically inserted here -->
									</tbody>
								</table>
							</div>
							<div class="buddy-pagination" id="buddy-pagination">
								<button class="active" onclick="changePage(1)">1</button>
								<button onclick="changePage(2)">2</button>
								<button onclick="changePage(3)">3</button>
								<button>...</button>
								<button onclick="changePage(47)">47</button>
								<button onclick="nextPage()"><i class="fas fa-chevron-right"></i></button>
							</div>
						</div>


					</div><!--/col-lg-9-->

					<div class="col-lg-3 pe-lg-3 pt-5">

						<div class="vine-categories mb-4 pb-3">

							<ul class="navbar-nav flex-column">

								<?php include "right-sidebar.php" ?>


							</ul>



						</div><!--/Vine-categories-->


						<div class="ad-section my-5" data-aos="fade-right" data-aos-easing="linear">


						</div><!--/ad-sec-->
					</div><!--/ad-section-->



				</div>
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
		const topics = [
			{ topic: 'Looking for a Study Buddy? Sign up Here!', author: 'bb', date: '30 Aug 2017, 19:01', kudos: 287, replies: 2455, views: 240667, lastPost: 'akkul299', lastPostDate: '06 Jan 2025, 06:02' },
			{ topic: 'Improvements in spreadsheet and suggestions for higher engagement', author: 'adkikani', date: '05 Mar 2018, 07:54', kudos: 9, replies: 11, views: 14887, lastPost: 'SaiTejaM', lastPostDate: '15 Nov 2024, 04:25' },
			{ topic: '<Mumbai, India> Looking to find a study buddy alongside work', author: 'Manan0308', date: '04 Jan 2025, 05:10', kudos: 0, replies: 0, views: 49, lastPost: 'Manan0308', lastPostDate: '04 Jan 2025, 05:10' },
			{ topic: 'Looking for a study buddy', author: 'Renius', date: '29 Dec 2024, 01:01', kudos: 1, replies: 5, views: 147, lastPost: 'ScottTargetTestPrep', lastPostDate: '03 Jan 2025, 10:52' },
			{ topic: 'Looking for a Study Partner', author: 'anirchat', date: '01 Jan 2025, 09:49', kudos: 1, replies: 1, views: 110, lastPost: 'oharsha', lastPostDate: '02 Jan 2025, 05:24' },
			{ topic: 'looking for a GMAT studying buddy~', author: 'lilyren1995', date: '10 Oct 2015, 16:43', kudos: 2, replies: 9, views: 3365, lastPost: 'arkadutt', lastPostDate: '28 Dec 2024, 11:26' },
			{ topic: 'So much looking for a study buddy', author: 'srsinghricha', date: '25 Oct 2024, 04:02', kudos: 6, replies: 6, views: 315, lastPost: 'MaryCari', lastPostDate: '14 Dec 2024, 10:26' }
		];

		let currentPage = 1;
		const rowsPerPage = 5;

		function displayTopics(page) {
			const start = (page - 1) * rowsPerPage;
			const end = start + rowsPerPage;
			const paginatedTopics = topics.slice(start, end);

			const topicsBody = document.getElementById('buddy-topics-body');
			topicsBody.innerHTML = '';

			paginatedTopics.forEach(topic => {
				const row = document.createElement('tr');
				row.innerHTML = `
					<td><i class="fas fa-comment buddy-icon"></i> <a href="#" style="color: #673ab7;">${topic.topic}</a> <i class="fas fa-star buddy-icon-star"></i><br>1, 2, ..., 122, 123</td>
					<td class="buddy-author">${topic.author}<br>${topic.date}</td>
					<td class="buddy-kudos">${topic.kudos} <i class="fas fa-thumbs-up"></i></td>
					<td>${topic.replies}</td>
					<td>${topic.views}</td>
					<td class="buddy-last-post">by: ${topic.lastPost}<br>${topic.lastPostDate}</td>
				`;
				topicsBody.appendChild(row);
			});
		}

		function changePage(page) {
			currentPage = page;
			displayTopics(page);
			updatePagination();
		}

		function nextPage() {
			if (currentPage < Math.ceil(topics.length / rowsPerPage)) {
				currentPage++;
				displayTopics(currentPage);
				updatePagination();
			}
		}

		function updatePagination() {
			const paginationButtons = document.querySelectorAll('.buddy-pagination button');
			paginationButtons.forEach(button => button.classList.remove('active'));
			paginationButtons[currentPage - 1].classList.add('active');
		}

		document.addEventListener('DOMContentLoaded', () => {
			displayTopics(currentPage);
			updatePagination();
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