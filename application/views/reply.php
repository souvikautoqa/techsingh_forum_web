
<style>
	#page-detail-content ul{
		list-style: disc;
	}

	#page-detail-content p{
		font-size: 16px;
		line-height: 1.8;
	}

	#page-detail-content table {
		border-collapse: collapse;
		width: 100%;
		border: 2px solid #333;
		margin-top: 20px;
		margin-bottom: 20px;
	}

	#page-detail-content th, #page-detail-content td {
		border: 1px solid #666;
		padding: 10px;
		text-align: left;
		background: #FFF;
	}

	#page-detail-content th {
		background-color: #f4f4f4;
	}

	#page-detail-content h1, #page-detail-content h2, #page-detail-content h3, #page-detail-content h4 {
		margin-top: 20px;
		margin-bottom: 20px;
		line-height: 1.6;
	}
</style>

		<section class="vine-social">
			<div class="container-fluid">
				<div class="row">

				    <div class="col-lg-9">
						<div class="outer-main-wrapper">
							<div class="sidebar-wrapper">
								<?php $this->load->view('layouts/left-sidebar.php'); ?>
							</div>

							<div class="forum-main-sec">

								<div class="discussions">

									<div class="post-box d-flex" data-aos="fade-up" data-aos-easing="linear">
										<div class="card">
											
											

											<div class="comments-5 px-3">
													
												<div class="d-flex align-items-start mb-3" data-aos="fade-up"
													data-aos-easing="linear">
													<!-- <div class="avatar avatar-sm me-2">
														<img class="rounded-circle"
															src="https://avatar.iran.liara.run/public?username=<?= $data['student']['name'] ?>" alt="User">
													</div> -->
													<?= generate_letter_avatar($data['student']['name']) ?>
													<div class="flex-1">
														<div class="align-items-center"><a class="fw-bold mb-0"
																href="javascript:void(0)"><?= $data['student']['name'] ?></a></div>
														<p class="mb-0"><?= $data['comment']['comment'] ?></p>
														<div class="post-links d-flex mt-1">
															<a href="#" class="p-0 me-3"><span class="bi bi-heart me-1"></span>
																Like</a>
															
															<p class="p-0 me-2"><span class="b bi-clock-history me-1"></span> <?= time_elapsed_string($data['comment']['created_at']) ?> </p>
														</div><!--/post links-->


													</div>
												</div>
													
											</div>


											<!-- <h3>Reply</h3> -->

											<div class="d-flex align-items-center my-2 mx-3">
												<!-- <div class="avatar avatar-sm me-2">
													<img class="rounded-circle" src="<?=base_url()?>assets/img/avatar/1.jpg" alt="alt">
												</div> -->
												<?= generate_letter_avatar() ?>
												<div class="flex-1">
													<input class="w-100" type="text" name = "comment" id = "comment" placeholder="Add comment">
												</div>
											</div>


											<div class="my-2 mx-3">
												<div class="g-recaptcha w-100" data-sitekey="<?= GOOGLE_SITE_KEY ?>"></div> 
											</div>

											<div class="d-flex align-items-center my-2 mx-3">
												<button type = "button" id = "add-comment-btn" data-id = "<?= $data['comment']['entity_id']?>" data-commentid = "<?= $data['comment']['id']?>" data-type = "<?= $data['comment']['entity_type'] ?>" class = "btn btn-success">Reply</button>
											</div>

											
										</div>
									</div><!--/post-box-->


								</div>

							</div>
						</div>
					</div>

					<div class="col-lg-3 pe-lg-3">

						<div class="vine-categories mb-4 pb-3">

							<ul class="navbar-nav flex-column">

								<?php $this->load->view('layouts/right-sidebar.php'); ?>

							</ul>
						</div><!--/row-->
					</div><!--/container-->
				</div>
			</div>
		</section>

	