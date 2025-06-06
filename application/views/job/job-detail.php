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

								<div class="row m-1 pt-3">
									<div class="col-12 ">
										<h4 class="main-title"><?= $job['title'] ?></h4>
										<ul class="app-line-breadcrumbs mb-3">
											<li class="">
												<a href="#" class="f-s-14 f-w-500">
													<span>
														<i class="ph-duotone  ph-stack f-s-16"></i> Home </span>
												</a>
											</li>
											<li class="active">
												<a href="#" class="f-s-14 f-w-500"><?= $job['title'] ?></a>
											</li>
										</ul>
									</div>
								</div>

								<div class="row">
									
									

									<div class="col-xxl-9 order-xxl-2">
										<div class="card">
											<div class="card-body">
												<div class="product-details-contentbox">
													<h4><?= $job['title'] ?></h4>
													<div class="app-divider-v dotted pb-2"></div>
													<div class="">
														<?= $job['content'] ?>
													</div>


													<!-- <div class="mt-4">
														<h5 class="mb-3">Leave A Comment</h5>
														<form class="app-form" id="id1">
															<div class="row">
																<div class="col-12">
																	<div class="mb-3">
																		<textarea class="form-control" rows="3" placeholder="Enter Your Comment"></textarea>
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="mb-3">
																		<input type="text" class="form-control" placeholder="Enter Your Name">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="mb-3">
																		<input type="email" class="form-control" placeholder="Enter Your Email">
																	</div>
																</div>
																<div class="col">
																	<div class="text-end">
																		<button type="button" class="btn btn-primary">
																			<i class="ti ti-send"></i> Comment </button>
																	</div>
																</div>
															</div>

														</form>
													</div> -->
													
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

		