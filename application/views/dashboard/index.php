<?php 
	$this->load->view('layouts/head', ['page_title' => $page_title]);
?>

<div class="app-content">
	<div class="">
	
		<?php 
				$this->load->view('layouts/header');
		?>

		<!-- Body main section starts -->
		<main class="parent-container">
			<div class="container-fluid">
				<div class="row">
					<!-- order -3 -->
					<div class="col-lg-12 pt-3 pb-3">
						<div class="card equal-card">
							<div class="card-body">
								<div class="row">
									<div class="col-sm-9">
										<h2 class="header-title-text">Ask Questions, Get Answers</h2>
										<p>Ask questions, find support, and connect with the community. </p>
										<div class="mt-3">
											<ul class="avatar-group justify-content-start mt-3">
												<li class="me-5">
													<a href="file_manager.html" target="_blank" role="button" class="btn btn-primary b-r-15 w-100 ">View More</a>
												</li>
												<li class="text-bg-danger h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="Everlee Lambert"> A </li>
												<li class="text-bg-dark h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="Hunter Scott"> CD </li>
												<li class="text-bg-warning h-45 w-45 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="Hunter Scott"> XYZ </li>
												<li class="text-bg-secondary h-30 w-30 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="2 More"> 2+ </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="container p-4">
						<div class="row mb-5 d-flex justify-content-center ">
							<div class="filter-bar">
								<div class="filter-item">
									<div>Category</div>
									<div>
										<span id="categoryText">All</span>
										<i class="fas fa-equals" onclick="toggleDropdown('categoryDropdown')"></i>
										<div id="categoryDropdown" class="dropdown-content">
											<a href="#" onclick="updateText('categoryText', 'All')">All</a>
											<a href="#" onclick="updateText('categoryText', 'Option')">Option</a>
											<a href="#" onclick="updateText('categoryText', 'Option')">Option</a>
										</div>
									</div>
								</div>
								<div class="filter-item">
									<div>Time</div>
									<div>
										<span id="timeText">All</span>
										<i class="fas fa-equals" onclick="toggleDropdown('timeDropdown')"></i>
										<div id="timeDropdown" class="dropdown-content">
											<a href="#" onclick="updateText('timeText', 'All')">All</a>
											<a href="#" onclick="updateText('timeText', 'Option')">Option</a>
											<a href="#" onclick="updateText('timeText', 'Option')">Option</a>
										</div>
									</div>
								</div>
								<div class="filter-item">
									<div>Sorting</div>
									<div>
										<span id="sortingText">Upvotes</span>
										<i class="fas fa-equals" onclick="toggleDropdown('sortingDropdown')"></i>
										<div id="sortingDropdown" class="dropdown-content">
											<a href="#" onclick="updateText('sortingText', 'Upvotes')">Upvotes</a>
											<a href="#" onclick="updateText('sortingText', 'Option')">Option</a>
											<a href="#" onclick="updateText('sortingText', 'Option')">Option</a>
										</div>
									</div>
								</div>
								<div class="search-bar">
									<input type="text" placeholder="Search">
								</div>
								<button class="apply-button">Apply</button>
							</div>
						</div>
					</div>
					<!-- order -1 -->
					<div class="col-md-7 col-lg-6 col-xxl-4 d-none">
						<div class="card">
							<div class="card-body">
								<h5 class="header-title-text">Meeting Schedule</h5>
								<ul class="meeting-schedule-list  mt-3" id="meetingSchedule">
									<li>
										<div class="meeting-time">
											<div class="meeting-schedule-icons">
												<div class="">
													<img src="../assets/images/dashboard/project/03.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/01.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/02.png" alt="" class="w-25">
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between" draggable="false">
													<div class="">
														<h6 class="mb-0 text-dark">Layla Garcia</h6>
														<p class="mb-0 text-secondary f-s-12">Weekly Progress Update </p>
													</div>
													<p class="text-secondary mb-0">10:00 AM</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="meeting-time">
											<div class="meeting-schedule-icons">
												<div class="">
													<img src="../assets/images/dashboard/project/03.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/01.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/02.png" alt="" class="w-25">
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between" draggable="false">
													<div class="">
														<h6 class="mb-0 text-dark">Jim Kramer</h6>
														<p class="mb-0 text-secondary f-s-12">Client Feedback Session</p>
													</div>
													<p class="text-secondary mb-0">11:30 AM</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="meeting-time">
											<div class="meeting-schedule-icons">
												<div class="">
													<img src="../assets/images/dashboard/project/03.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/01.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/02.png" alt="" class="w-25">
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between" draggable="false">
													<div class="">
														<h6 class="mb-0 text-dark">Zack Padilla</h6>
														<p class="mb-0 text-secondary f-s-12">Problem-Solving Brainstorm</p>
													</div>
													<p class="text-secondary mb-0">1:00 AM</p>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="meeting-time">
											<div class="meeting-schedule-icons">
												<div class="">
													<img src="../assets/images/dashboard/project/03.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/01.png" alt="" class="w-25">
												</div>
												<div class="">
													<img src="../assets/images/dashboard/project/02.png" alt="" class="w-25">
												</div>
											</div>
										</div>
										<div class="card">
											<div class="card-body">
												<div class="d-flex align-items-center justify-content-between" draggable="false">
													<div class="">
														<h6 class="mb-0 text-dark">Wilson Terry</h6>
														<p class="mb-0 text-secondary f-s-12">Product Demo and Review</p>
													</div>
													<p class="text-secondary mb-0">2:45 AM</p>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- order 1 -->
					<div class="col-xxl-9 order-1-md">
						<div class="card">
							<div class="card-body p-0">
								<!-- <h5>Projects</h5> -->
								<div class="table-responsive Projects-datatable  app-datatable-default app-scroll">
									<table id="ProjectsDatatable" class="display">
										<thead>
											<tr>
												<th>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</th>
												<th>Project</th>
												<th>Status</th>
												<th>Type</th>
												<th>Team</th>
												<th>Preview</th>
												<th>Tracking</th>
												<th>Progress</th>
												<th>Due Date</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</td>
												<td>
													<div class="position-relative">
														<div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-primary b-1-primary p-1 position-absolute">
															<i class="ph-duotone  ph-swap f-s-16"></i>
														</div>
														<div class="ms-5">
															<h6 class="f-s-15 f-w-600 mb-0">Website Redesign</h6>
															<p class="f-s-13 text-secondary mb-0">John Mandela</p>
														</div>
													</div>
												</td>
												<td>
													<span class="badge text-light-warning">
														<i class="ti ti-download me-1"></i> In Progress </span>
												</td>
												<td>Front-end</td>
												<td>
													<ul class="avatar-group justify-content-start">
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
															<img src="../assets/images/avtar/4.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
															<img src="../assets/images/avtar/5.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-danger b-2-light" data-bs-toggle="tooltip" data-bs-title="Michael Hughes">
															<img src="../assets/images/avtar/6.png" alt="" class="img-fluid">
														</li>
														<li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More"> 10+ </li>
													</ul>
												</td>
												<td>
													<a href="#">www.web.com</a>
												</td>
												<td>
													<div class="time-tracking-box">
														<i class="ph-duotone  ph-clock f-s-12"></i>
														<span class="f-s-12">20 hours</span>
														<span class="badge text-bg-warning">
															<i class="ph ph-play-pause text-white f-s-13"></i>
														</span>
													</div>
												</td>
												<td> 50% </td>
												<td>2024-06-15</td>
											</tr>
											<tr>
												<td>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</td>
												<td>
													<div class="position-relative">
														<div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-info b-1-info p-1 position-absolute">
															<i class="ph-duotone  ph-arrows-in-cardinal f-s-16"></i>
														</div>
														<div class="ms-5">
															<h6 class="f-s-15 f-w-600 mb-0"> Marketing Campaign</h6>
															<p class="f-s-13 text-secondary mb-0">John Mandela</p>
														</div>
													</div>
												</td>
												<td>
													<span class="badge text-light-success">
														<i class="ti ti-download me-1"></i>Completed </span>
												</td>
												<td>Marketing</td>
												<td>
													<ul class="avatar-group justify-content-start">
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-secondary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
															<img src="../assets/images/avtar/2.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
															<img src="../assets/images/avtar/4.png" alt="" class="img-fluid">
														</li>
														<li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More"> 15+ </li>
													</ul>
												</td>
												<td>
													<a href="#">www.marketing.com</a>
												</td>
												<td>
													<div class="time-tracking-box">
														<i class="ph-duotone  ph-clock f-s-12"></i>
														<span class="f-s-12">40 hours</span>
														<span class="badge text-bg-warning">
															<i class="ph ph-play-pause text-white f-s-13"></i>
														</span>
													</div>
												</td>
												<td> 100% </td>
												<td>2024-04-30</td>
											</tr>
											<tr>
												<td>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</td>
												<td>
													<div class="position-relative">
														<div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-danger b-1-danger p-1 position-absolute">
															<i class="ph-duotone  ph-airplay f-s-16"></i>
														</div>
														<div class="ms-5">
															<h6 class="f-s-15 f-w-600 mb-0">Product Launch</h6>
															<p class="f-s-13 text-secondary mb-0">John Mandela</p>
														</div>
													</div>
												</td>
												<td>
													<span class="badge text-light-info">
														<i class="ti ti-download me-1"></i>Pending </span>
												</td>
												<td>Launch</td>
												<td>
													<ul class="avatar-group justify-content-start">
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-dark b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
															<img src="../assets/images/avtar/6.png" alt="" class="img-fluid">
														</li>
														<li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More"> 20+ </li>
													</ul>
												</td>
												<td>
													<a href="#">www.webappdev.com</a>
												</td>
												<td>
													<div class="time-tracking-box">
														<i class="ph-duotone  ph-clock f-s-12"></i>
														<span class="f-s-12">0 hours</span>
														<span class="badge text-bg-warning">
															<i class="ph ph-play-pause text-white f-s-13"></i>
														</span>
													</div>
												</td>
												<td> 0% </td>
												<td>2024-07-10</td>
											</tr>
											<tr>
												<td>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</td>
												<td>
													<div class="position-relative">
														<div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-success b-1-success p-1 position-absolute">
															<i class="ph-duotone  ph-codesandbox-logo f-s-16"></i>
														</div>
														<div class="ms-5">
															<h6 class="f-s-15 f-w-600 mb-0">App Development</h6>
															<p class="f-s-13 text-secondary mb-0">John Mandela</p>
														</div>
													</div>
												</td>
												<td>
													<span class="badge text-light-danger">
														<i class="ti ti-download me-1"></i>On Hold </span>
												</td>
												<td>Development</td>
												<td>
													<ul class="avatar-group justify-content-start">
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-secondary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
															<img src="../assets/images/avtar/08.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
															<img src="../assets/images/avtar/07.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-warning b-2-light" data-bs-toggle="tooltip" data-bs-title="Michael Hughes">
															<img src="../assets/images/avtar/6.png" alt="" class="img-fluid">
														</li>
														<li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More"> 5+ </li>
													</ul>
												</td>
												<td>
													<a href="#">www.appdev.com</a>
												</td>
												<td>
													<div class="time-tracking-box">
														<i class="ph-duotone  ph-clock f-s-12"></i>
														<span class="f-s-12">10 hours</span>
														<span class="badge text-bg-warning">
															<i class="ph ph-play-pause text-white f-s-13"></i>
														</span>
													</div>
												</td>
												<td> 20% </td>
												<td>2024-08-20</td>
											</tr>
											<tr>
												<td>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</td>
												<td>
													<div class="position-relative">
														<div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-warning b-1-warning p-1 position-absolute">
															<i class="ph-duotone  ph-folder-notch f-s-16"></i>
														</div>
														<div class="ms-5">
															<h6 class="f-s-15 f-w-600 mb-0">Content Creation</h6>
															<p class="f-s-13 text-secondary mb-0">John Mandela</p>
														</div>
													</div>
												</td>
												<td>
													<span class="badge text-light-warning">
														<i class="ti ti-download me-1"></i>In Progress </span>
												</td>
												<td>Content</td>
												<td>
													<ul class="avatar-group justify-content-start">
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
															<img src="../assets/images/avtar/4.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
															<img src="../assets/images/avtar/5.png" alt="" class="img-fluid">
														</li>
														<li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More"> 10+ </li>
													</ul>
												</td>
												<td>
													<a href="#">www.site.com</a>
												</td>
												<td>
													<div class="time-tracking-box">
														<i class="ph-duotone  ph-clock f-s-12"></i>
														<span class="f-s-12">30 hours</span>
														<span class="badge text-bg-warning">
															<i class="ph ph-play-pause text-white f-s-13"></i>
														</span>
													</div>
												</td>
												<td> 70% </td>
												<td>2024-05-25</td>
											</tr>
											<tr>
												<td>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</td>
												<td>
													<div class="position-relative">
														<div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-secondary b-1-secondary p-1 position-absolute">
															<i class="ph-duotone  ph-text-outdent f-s-16"></i>
														</div>
														<div class="ms-5">
															<h6 class="f-s-15 f-w-600 mb-0">Training Workshop</h6>
															<p class="f-s-13 text-secondary mb-0">John Mandela</p>
														</div>
													</div>
												</td>
												<td>
													<span class="badge text-light-success">
														<i class="ti ti-download me-1"></i>Completed </span>
												</td>
												<td>Training</td>
												<td>
													<ul class="avatar-group justify-content-start">
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
															<img src="../assets/images/avtar/4.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-success b-2-light" data-bs-toggle="tooltip" data-bs-title="Eva Bailey">
															<img src="../assets/images/avtar/5.png" alt="" class="img-fluid">
														</li>
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-danger b-2-light" data-bs-toggle="tooltip" data-bs-title="Michael Hughes">
															<img src="../assets/images/avtar/6.png" alt="" class="img-fluid">
														</li>
														<li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More"> 10+ </li>
													</ul>
												</td>
												<td>
													<a href="#">www.training.com</a>
												</td>
												<td>
													<div class="time-tracking-box">
														<i class="ph-duotone  ph-clock f-s-12"></i>
														<span class="f-s-12">50 hours</span>
														<span class="badge text-bg-warning">
															<i class="ph ph-play-pause text-white f-s-13"></i>
														</span>
													</div>
												</td>
												<td> 100% </td>
												<td>2024-03-15</td>
											</tr>
											<tr>
												<td>
													<label class="check-box">
														<input type="checkbox">
														<span class="checkmark outline-secondary ms-2"></span>
													</label>
												</td>
												<td>
													<div class="position-relative">
														<div class="h-35 w-35 d-flex-center b-r-50 overflow-hidden bg-light-dark b-1-dark p-1 position-absolute">
															<i class="ph-duotone  ph-presentation-chart f-s-16"></i>
														</div>
														<div class="ms-5">
															<h6 class="f-s-15 f-w-600 mb-0">Research Initiative</h6>
															<p class="f-s-13 text-secondary mb-0">John Mandela</p>
														</div>
													</div>
												</td>
												<td>
													<span class="badge text-light-success">
														<i class="ti ti-download me-1"></i>Progress </span>
												</td>
												<td>Research</td>
												<td>
													<ul class="avatar-group justify-content-start">
														<li class="h-35 w-35 d-flex-center b-r-50 overflow-hidden text-bg-primary b-2-light" data-bs-toggle="tooltip" data-bs-title="Sabrina Torres">
															<img src="../assets/images/avtar/09.png" alt="" class="img-fluid">
														</li>
														<li class="text-bg-secondary h-25 w-25 d-flex-center b-r-50" data-bs-toggle="tooltip" data-bs-title="10 More"> 15+ </li>
													</ul>
												</td>
												<td>
													<a href="#">www.initiative.com</a>
												</td>
												<td>
													<div class="time-tracking-box">
														<i class="ph-duotone  ph-clock f-s-12"></i>
														<span class="f-s-12">15 hours</span>
														<span class="badge text-bg-warning">
															<i class="ph ph-play-pause text-white f-s-13"></i>
														</span>
													</div>
												</td>
												<td> 40% </td>
												<td>2024-09-05</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>

					<?php 
						$this->load->view('layouts/sidebar');
					?>


				</div>
			</div>
		</main>
		
	</div>
</div>

<?php 
	$this->load->view('layouts/footer');
?>
 


<?php 
	$this->load->view('layouts/footer-end');
?>
